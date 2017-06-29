<?php
    class articleModel{
        public $controller = 'index';
        public $method = 'article';
        public $_table = 'articles';
        public $user_table = 'users';
        public $_tag = 'tags';
        public $collect_table = 'a_collect';
        public $praise_table = 'a_praise';
        public $comment_table = 'a_comment';
        public $reply_table = 'a_reply';
        public $tag_assoc_num = 'art_num';
        public $relation_table = 'relation_article_tag';
        public $user_dynamic_table = 'user_dynamic';
        public $relation_id = 'article_id';
        public $detail_id = 'aid';
        public $tag_name = "";
        public $insert_id = 0;
        public $update_id = 0;
        public $pageSize = 10;
        public $showPage = 5;
        public $search_pagesize = 20;

        public function get_insert_id(){
            return $this->insert_id;
        }

        // public function count(){
        //     $sql = 'select count(*) from '.$this->_table;
        //     return DB::findResult($sql, 0, 0);
        // }


        /*全部博文*/
        public function findAll_orderby_create_at($page){
            $sql = 'select * from '.$this->_table.' where status="1" and status=(select status from '.$this->user_table.' where username='.$this->_table.'.author) order by create_at desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                $data = $this->add_data_uid($data);
                return $this->add_data_tag($data);
            }
        }

        /*全部博文--阅读、评论倒叙排*/
        public function findAll_orderby_status($status,$page){
            if($status=='answer_zero'){
                $sql = 'select * from '.$this->_table.' where status="1" and status=(select status from '.$this->user_table.' where username='.$this->_table.'.author) and answer_num = "0" order by create_at desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            }else{
                $status = $status."_num";
                $sql = 'select * from '.$this->_table.' where status="1" and status=(select status from '.$this->user_table.' where username='.$this->_table.'.author) order by '.$status.' desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            }
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                $data = $this->add_data_uid($data);
                return $this->add_data_tag($data);
            }
        }

        /*标签分类查看*/
        public function findAll_by_tag($tag,$page){
            $id = $this->find_id_by_tag($tag);
            if(!empty($id)){
                $sql = 'select * from '.$this->_table.' where status="1" and status=(select status from '.$this->user_table.' where username='.$this->_table.'.author) and id in ('.$id.') order by create_at desc '.' limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
                if(DB::findAll($sql)){
                    $data = DB::findAll($sql);
                    $data = $this->add_data_uid($data);
                    return $this->add_data_tag($data);
                }
            }else{
                return array();
            }
        }

        /*标签分类查看--阅读、推荐、评论倒叙排*/
        public function findAll_by_tag_and_status($tag,$status,$page){
            $id = $this->find_id_by_tag($tag);
            if(!empty($id)){
                if($status=='answer_zero'){
                    $sql = 'select * from '.$this->_table.' where status="1" and status=(select status from '.$this->user_table.' where username='.$this->_table.'.author) and id in ('.$id.') and answer_num = "0" order by create_at desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
                }else{
                    $status = $status."_num";
                    $sql = 'select * from '.$this->_table.' where status="1" and status=(select status from '.$this->user_table.' where username='.$this->_table.'.author) and id in ('.$id.') order by '.$status.' desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
                }
                if(DB::findAll($sql)){
                    $data = DB::findAll($sql);
                    $data = $this->add_data_uid($data);
                    return $this->add_data_tag($data);
                }
            }else{
                return array();
            }
        }

        /*标签分类查看--通过标签名查找所有文章、问题id*/
        public function find_id_by_tag($tag){
            $tags = $this->get_id_and_tag_name();
            $tag_name = "";
            foreach($tags as $key => $value){
                $tag_name .= $value['tag_name'].",";
            }
            $tag_name = substr($tag_name,0,-1);
            $tag_name_arr = explode(",",$tag_name);
            $is_in_tag = in_array($tag,$tag_name_arr);

            $classes = $this->get_class_name();
            $class_name = "";
            foreach($classes as $key => $value){
                $class_name .= $value['class_name'].",";
            }
            $class_name = substr($class_name,0,-1);
            $class_name_arr = explode(",",$class_name);
            $is_in_class = in_array($tag,$class_name_arr);

            $this->tag_name = $tag;
            if($is_in_class){
                // 类别标签
                $tags = $this->get_tag_by_class($tag);
                $sql = "select ".$this->relation_id." from `".$this->relation_table."` where ";
                foreach($tags as $key => $value){
                    $sql .= " find_in_set('{$value["tag_name"]}',tag_name) or ";
                }
                $sql = substr($sql,0,-3);
            }elseif($is_in_tag){
                // 精确标签
                $sql = "select ".$this->relation_id." from `".$this->relation_table."` where find_in_set('".$tag."',tag_name)";
            }else{
                // 不存在的标签
                $sql = "select ".$this->relation_id." from `".$this->relation_table;
                $this->tag_name = "全部分类";
            }
            if(DB::findAll($sql)){
                $arr_id = DB::findAll($sql);
                $str_id = '';
                foreach($arr_id as $value){
                    $str_id .= $value[$this->relation_id].",";
                }
                return substr($str_id,0,-1);
            }else{
                return '';
            }
        }

        /*通过标签类别取标签名*/
        public function get_tag_by_class($class){
            $sql = "select tag_name from ".$this->_tag." where class_name = '".$class."'";
            return DB::findAll($sql);
        }

        /*给取出来的数据加上uid*/
        public function add_data_uid($data){
            foreach($data as $k => $value){
                $author = $data[$k]['author'];
                $data[$k]['uid'] = $this->get_id_by_username($author);
            }
            return $data;
        }

        /*给取出来的数据加上tag*/
        public function add_data_tag($data){
            foreach($data as $k => $value){
                $tag = array();
                $id = $data[$k]['id'];
                $tag_name = $this->get_tag_name($id);
                $tag_name = explode(',',$tag_name);
                foreach($tag_name as $key => $value){
                    $tag[$key]['id'] = $this->get_id_by_tag_name($value);
                    $tag[$key]['tag_name'] = $value;
                }
                $data[$k]['tag'] = $tag;
            }
            return $data;
        }
        /*标签分类查看end*/


        /*查询热门内容*/
        public function get_something($select,$by,$limit){
            $sql = 'select '.$select.' from '.$this->_table.' where status="1" order by '.$by.' desc limit '.$limit;
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }


        /*文章详情页*/

        /*获取一篇文章信息*/
        public function get_one_info($id,$myid){
            if(empty($id)){
                return array();
            }else{
                $id = intval($id);
                $sql = 'select * from '.$this->_table.' where id = '.$id;
                $data =  DB::findOne($sql);
                $tag = array();
                $tag_name = $this->get_tag_name($id);
                $tag_name = explode(',',$tag_name);
                foreach($tag_name as $key => $value){
                    $tag[$key]['id'] = $this->get_id_by_tag_name($value);
                    $tag[$key]['tag_name'] = $value;
                }
                $data['tag'] = $tag;
                if(!empty($myid)){
                    $result = $this->check_stated($this->praise_table,$this->detail_id,$id,$myid);
                    $data['praise'] = $result?'praise':'praised';
                    $result = $this->check_stated($this->collect_table,$this->detail_id,$id,$myid);
                    $data['collect'] = $result?'collect':'collected';
                }else{
                    $data['praise'] = '';
                    $data['collect'] = '';
                }
                return $data;
            }
        }

        /*通过文章、问题id获取关联标签字符串*/
        public function get_tag_name($id){
            $sql = 'select tag_name from '.$this->relation_table.' where '.$this->relation_id.'='.$id;
            return DB::findResult($sql);
        }

        /*通过标签名获取标签id*/
        public function get_id_by_tag_name($tag_name){
            $sql = 'select id from '.$this->_tag.' where tag_name="'.$tag_name.'"';
            return DB::findResult($sql);
        }

        /*新建文章页脚处显示的全部标签*/
        public function get_id_and_tag_name(){
            $sql = 'select id,tag_name from '.$this->_tag.' order by id asc';
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }

        /*通过标签名获取标签类型*/
        public function get_class_name(){
            $sql = 'select class_name from '.$this->_tag.' order by id asc';
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }

        /*获取文章详情处的作者热门博文*/
        public function get_author_hot_article($author,$self_id,$limit){
            $sql = "select * from ".$this->_table." where status = '1' and id !=".$self_id." and author = '".$author."' order by read_num desc limit ".$limit;
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }else{
                return array();
            }
        }

        /*添加文章推荐*/
        public function insert_praise($data){
            $aid = addslashes($data['aid']);
            $uid = addslashes($data['uid']);
            $praise_at = addslashes($data['praise_at']);
            $sid = '';
            $type = 3;
            $time = $praise_at;
            $data = array(
                'aid'=>$aid,
                'from_uid'=>$uid,
                'praise_at'=>$praise_at
            );
            $result = $this->check_stated($this->praise_table,$this->detail_id,$aid,$uid);
            if($result){
                DB::insert($this->praise_table,$data);
                $this->add_one_num($this->_table,'praise_num',$aid);
                $this->add_user_dynamic($uid,$aid,$sid,$type,$time);
                return 1;
            }else{
                return 2;
            }
        }


        /*取消文章推荐*/
        public function del_praise($data){
            $aid = addslashes($data['aid']);
            $uid = addslashes($data['uid']);
            $sid = '';
            $type = 3;
            $result = $this->check_stated($this->praise_table,$this->detail_id,$aid,$uid);
            if(!$result){
                DB::del($this->praise_table,' aid= '.$aid.' and from_uid= '.$uid);
                $this->reduce_one_num($this->_table,'praise_num',$aid);
                $this->del_user_dynamic($uid,$aid,$sid,$type);
                return 1;
            }else{
                return 2;
            }
        }


        /*添加文章收藏*/
        public function insert_collect($data){
            $aid = addslashes($data['aid']);
            $uid = addslashes($data['uid']);
            $collect_at = addslashes($data['collect_at']);
            $sid = '';
            $type = 2;
            $time = $collect_at;
            $data = array(
                'aid'=>$aid,
                'from_uid'=>$uid,
                'collect_at'=>$collect_at
            );
            $result = $this->check_stated($this->collect_table,$this->detail_id,$aid,$uid);
            if($result){
                DB::insert($this->collect_table,$data);
                $this->add_user_dynamic($uid,$aid,$sid,$type,$time);
                return 1;
            }else{
                return 2;
            }
        }

        /*取消文章收藏*/
        public function del_collect($data){
            $aid = addslashes($data['aid']);
            $uid = addslashes($data['uid']);
            $sid = '';
            $type = 2;
            $result = $this->check_stated($this->collect_table,$this->detail_id,$aid,$uid);
            if(!$result){
                DB::del($this->collect_table,' aid= '.$aid.' and from_uid= '.$uid);
                $this->del_user_dynamic($uid,$aid,$sid,$type);
                return 1;
            }else{
                return 2;
            }
        }


        /*检查文章是否已被用户推荐或收藏，问题是否已被用户关注或点赞，用户是否被关注*/
        public function check_stated($table,$detail_id,$id,$uid){
            $sql = "select ".$detail_id." from ".$table." where from_uid=".$uid;
            $result = DB::findAll($sql);
            if(!empty($result)){
                $arr = array();
                for($i=0;$i<count($result);$i++){
                    $arr[$i] = $result[$i][$detail_id];
                }
                if(!in_array($id,$arr)){
                    return true;
                }else{
                    return false;
                }
            }else{
                return true;
            }
        }


        /*获取文章推荐*/
        public function get_praise_info($id){
            $sql = "select from_uid from ".$this->praise_table." where aid=".$id;
            if(DB::findAll($sql)){
                $uid = DB::findAll($sql);
                $uid_str = "";
                foreach ($uid as $key => $value) {
                    $uid_str .= $value['from_uid'].",";
                }
                $uid_str = substr($uid_str,0,-1);
                return $this->get_users_by_id($uid_str);
            }else{
                return array();
            }
        }

        /*获取文章推荐显示的用户头像*/
        public function get_users_by_id($id){
            $sql = "select * from ".$this->user_table." where id in(".$id.")";
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }else{
                return array();
            }
        }

        /*添加文章评论*/
        public function insert_comment($data){
            $aid = addslashes($data['aid']);
            $from_uid = addslashes($data['from_uid']);
            $content = addslashes($data['content']);
            $comment_at = addslashes($data['comment_at']);
            $type = 4;
            $time = $comment_at;
            $data = array(
                'aid'=>$aid,
                'from_uid'=>$from_uid,
                'content'=>$content,
                'comment_at'=>$comment_at
            );
            DB::insert($this->comment_table,$data);
            $this->insert_id = $this->find_last_insert_id();
            $sid = $this->insert_id;
            $this->add_one_num($this->_table,'comment_num',$aid);
            $this->add_user_dynamic($from_uid,$aid,$sid,$type,$time);
        }

        /*删除文章评论*/
        public function del_comment($data){
            $uid = addslashes($data['uid']);
            $aid = addslashes($data['aid']);
            $comment_id = addslashes($data['comment_id']);
            $type = 4;
            DB::del($this->comment_table," id=".$comment_id);
            $this->reduce_one_num($this->_table,'comment_num',$aid);
            $this->del_user_dynamic($uid,$aid,$comment_id,$type);
        }

        /*添加文章回复*/
        public function insert_reply($data){
            $comment_id = addslashes($data['comment_id']);
            $from_uid = addslashes($data['from_uid']);
            $to_uid = addslashes($data['to_uid']);
            $content = addslashes($data['content']);
            $reply_at = addslashes($data['reply_at']);
            $data = array(
                'comment_id'=>$comment_id,
                'from_uid'=>$from_uid,
                'to_uid'=>$to_uid,
                'content'=>$content,
                'reply_at'=>$reply_at
            );
            DB::insert($this->reply_table,$data);
            $this->insert_id = $this->find_last_insert_id();
        }

        /*删除评论回复*/
        public function del_reply($id){
            DB::del($this->reply_table," id=".$id);
        }

        /*获取文章评论*/
        public function get_comment_by_aid($id){
            $sql = "select * from ".$this->comment_table." where aid = ".$id." order by comment_at desc";
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                $user = array();
                foreach ($data as $key => $value) {
                    $user = $this->get_user_by_id($value['from_uid']);
                    $data[$key]['user'] = $user;
                    $data[$key]['reply'] = $this->get_reply_by_commentid($value['id']);
                }
                return $data;
            }else{
                return array();
            }
        }

        /*获取文章回复*/
        public function get_reply_by_commentid($id){
            $sql = "select * from ".$this->reply_table." where comment_id = ".$id." order by reply_at asc";
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                foreach ($data as $key => $value) {
                    $data[$key]['from_username'] = $this->get_username_by_id($value['from_uid']);
                    $data[$key]['from_avatar'] = $this->get_avatar_by_id($value['from_uid']);
                    $data[$key]['to_username'] = $this->get_username_by_id($value['to_uid']);
                    $data[$key]['to_avatar'] = $this->get_avatar_by_id($value['to_uid']);
                }
                return $data;
            }else{
                return array();
            }
        }

        /*通过文章id获取文章的评论数量*/
        public function get_comment_num($id){
            $sql = "select count(*) from ".$this->comment_table." where aid = ".$id;
            return DB::findResult($sql);
        }


        /*通过文章或者问题id找用户名*/
        public function check_user_status_by_aqid($id){
            $sql = "select author from ".$this->_table." where id=".$id;
            $author = DB::findResult($sql);
            return $this->get_user_status($author);
        }

        /*检查用户状态是否为有效*/
        public function get_user_status($name){
            $sql = 'select status from '.$this->user_table.' where username="'.$name.'"';
            $result = DB::findResult($sql);
            switch($result){
                case '1':
                    return true;
                    break;
                case '2':
                    return false;
                    break;
            }
        }


        /*向用户动态表中添加一条数据*/
        public function add_user_dynamic($uid,$oid,$sid,$type,$time){
            $sid = empty($sid)?0:$sid;
            $dynamic_data = array(
                'uid'=>$uid,
                'oid'=>$oid,
                'sid'=>$sid,
                'type'=>$type,
                'time'=>$time
            );
            DB::insert($this->user_dynamic_table,$dynamic_data);
        }

        /*删除用户动态表中的一条数据*/
        public function del_user_dynamic($uid,$oid,$sid,$type){
            $sid = empty($sid)?'':' and sid='.$sid;
            if($this->del_dynamic_check($uid,$oid,$sid,$type)){
                DB::del($this->user_dynamic_table,' uid= '.$uid.' and oid='.$oid.$sid.' and type='.$type);
            }
        }

        /*删除用户动态表中的多条数据*/
        public function del_more_user_dynamic($uid,$oid_str,$type){
            DB::del($this->user_dynamic_table,' uid= '.$uid.' and oid in('.$oid_str.') and type='.$type);
        }


        /*检查动态表中是否有某条数据，有的话返回true，空或者没有返回false*/
        public function del_dynamic_check($uid,$oid,$sid,$type){
            // $sid = empty($sid)?'':' and sid='.$sid;
            $sql = "select oid from ".$this->user_dynamic_table." where uid=".$uid.$sid." and type=".$type;
            $result = DB::findAll($sql);
            if(!empty($result)){
                $arr = array();
                for($i=0;$i<count($result);$i++){
                    $arr[$i] = $result[$i]['oid'];
                }
                if(!in_array($oid,$arr)){
                    return false;
                }else{
                    return true;
                }
            }else{
                return false;
            }
        }

        /*文章详情页end*/


        /*新建文章、编辑文章*/
        public function submit($data){
            extract($data);
            if(empty($data['author'])){
                return 0;
            }
            $title = addslashes($data['title']);
            $cat_name = addslashes($data['cat_name']);
            $content = addslashes($data['content']);
            $summary = addslashes($data['summary']);
            $author = addslashes($data['author']);
            $create_at = addslashes($data['create_at']);
            $update_at = $create_at;
            $old_tag_name = addslashes($data['old_tag_name']);
            $old_tag_array =  explode(',',$old_tag_name);
            $tag_name = addslashes($data['tag_name']);
            $tag_array =  explode(',',$tag_name);
            $id = addslashes($data['id']);
            $uid = $this->get_id_by_username($author);
            $type = 1;
            $time = $create_at;
            $data = array(
                'title'=>$title,
                'cat_name'=>$cat_name,
                'content'=>$content,
                'summary'=>$summary,
                'author'=>$author,
                'update_at'=>$update_at
            );
            if(!empty($id) && !empty($old_tag_name)){
                // 修改文章
                $this->update_id = $id;
                DB::update($this->_table,$data,'id='.$id);
                $this->update_relation_tag($id,$tag_name);
                for($i=0;$i<count($old_tag_array);$i++){
                    $old_tag = $old_tag_array[$i];
                    $this->reduce_tag_one_num($this->tag_assoc_num,$old_tag);
                }
                for($i=0;$i<count($tag_array);$i++){
                    $tag = $tag_array[$i];
                    $this->add_tag_one_num($this->tag_assoc_num,$tag);
                }
                return 1;
            }else{
                // 新建文章
                $data['create_at'] = $create_at;
                DB::insert($this->_table,$data);
                $this->insert_id = $this->find_last_insert_id();
                $aid = $this->find_last_insert_id();
                $sid = '';
                $this->add_user_dynamic($uid,$aid,$sid,$type,$time);
                $this->insert_relation_tag($tag_name);
                for($i=0;$i<count($tag_array);$i++){
                    $tag = $tag_array[$i];
                    $this->add_tag_one_num($this->tag_assoc_num,$tag);
                }
                return 2;
            }
        }

        /*修改文章被时，更新文章和标签关系表*/
        public function update_relation_tag($id,$tag_name){
            $data = array(
                $this->relation_id=>$id,
                'tag_name'=>$tag_name
            );
            DB::update($this->relation_table,$data,$this->relation_id."=".$id);
        }

        /*新建文章时，向文章和标签关系表插入相关数据*/
        public function insert_relation_tag($tag_name){
            $data = array(
                $this->relation_id=>$this->insert_id,
                'tag_name'=>$tag_name
            );
            DB::insert($this->relation_table,$data);
        }

        /*增加标签表具体某个标签的关联数目1*/
        public function add_tag_one_num($name,$tag){
            $sql = "update ".$this->_tag." set ".$name." = ".$name."+1 where tag_name = '".$tag."'";
            DB::query($sql);
        }

        /*减少标签表具体某个标签的关联数目1*/
        public function reduce_tag_one_num($name,$tag){
            $sql = "update ".$this->_tag." set ".$name." = ".$name."-1 where tag_name = '".$tag."'";
            DB::query($sql);
        }

        /*获取最后插入的数据自增id*/
        public function find_last_insert_id(){
            $sql = "select LAST_INSERT_ID()";
            return DB::findResult($sql);
        }

        /*用户操作时，检查某篇文章、问题是否为作者*/
        public function check_is_author($id,$name){
            $sql = "select author from ".$this->_table." where id=".$id;
            $author = DB::findResult($sql);
            if($author==$name){
                return true;
            }else{
                return false;
            }
        }

        /*检查文章或者问题是否有效*/
        public function get_status($id){
            $sql = 'select status from '.$this->_table.' where id='.$id;
            $result = DB::findResult($sql);
            switch($result){
                case '1':
                    return true;
                    break;
                case '2':
                    return false;
                    break;
            }
        }


        /*通过用户名查找一个用户的所有信息*/
        public function get_user_by_username($username){
            if(!empty($username)){
                $sql = 'select * from '.$this->user_table.' where status = "1" and username = "'.$username.'"';
                return DB::findOne($sql);
            }else{
                return array();
            }
        }

        /*通过用户id查找一个用户的所有信息*/
        public function get_user_by_id($id){
            if(!empty($id)){
                $sql = 'select * from '.$this->user_table.' where status = "1" and id = "'.$id.'"';
                return DB::findOne($sql);
            }else{
                return array();
            }
        }

        /*通过用户名查找一个用户的所有信息，加上用户的博文数量、推荐数量*/
        public function get_user_art_by_username($username){
            if(!empty($username)){
                $userobj = M('user');
                $id = $this->get_id_by_username($username);
                $sql = 'select * from '.$this->user_table.' where status = "1" and username = "'.$username.'"';
                $data = DB::findOne($sql);
                $data['article_num'] = $userobj->get_article_count($username);
                $data['praise_num'] = $userobj->get_praise_count($id);
                return $data;
            }else{
                return array();
            }
        }

        /*通过用户id获取用户的用户名*/
        public function get_username_by_id($id){
            if(!empty($id)){
                $sql = 'select username from '.$this->user_table.' where status = "1" and id = '.$id;
                $data = DB::findOne($sql);
                return $data['username'];
            }else{
                return "";
            }
        }

        /*通过用户id获取用户头像*/
        public function get_avatar_by_id($id){
            if(!empty($id)){
                $sql = "select avatar from ".$this->user_table." where id=".$id;
                return DB::findResult($sql);
            }else{
                return '';
            }
        }

        /*通过用户名获取用户id*/
        public function get_id_by_username($name){
            if(!empty($name)){
                $sql = 'select id from '.$this->user_table.' where status = "1" and username = "'.$name.'"';
                $data = DB::findOne($sql);
                return $data['id'];
            }else{
                return "";
            }
        }

        /*新建文章、编辑文章end*/


        /*全站搜索*/

        /*通过关键词搜索全部内容*/
        public function search_by_key($keyword,$page,$pagesize){
            $sql = 'select * from '.$this->_table.' where status = "1" and status=(select status from '.$this->user_table.' where username='.$this->_table.'.author) and title like "%'.$keyword.'%" order by create_at desc limit '.(($page-1)*$pagesize).','.$pagesize;
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                return $this->set_keyword_highlight($data,$keyword);
            }else{
                return array();
            }
        }

        /*通过关键词搜索部分内容*/
        public function search_by_key_limit($keyword,$limit){
            $sql = 'select * from '.$this->_table.' where status = "1" and status=(select status from '.$this->user_table.' where username='.$this->_table.'.author) and title like "%'.$keyword.'%" order by create_at desc limit '.$limit;
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                return $this->set_keyword_highlight($data,$keyword);
            }else{
                return array();
            }
        }

        /*关键词高亮显示*/
        public function set_keyword_highlight($data,$keyword){
            foreach ($data as $key => $value) {
                $index_title = stripos($data[$key]['title'],$keyword);
                if(!($index_title === false)){
                    $keyword = substr($data[$key]['title'],$index_title,strlen($keyword));
                    $data[$key]['title'] = str_replace($keyword,'<span class="highlight">'.$keyword.'</span>',$data[$key]['title']);
                }
            }
            return $data;
        }

        /*获取查找结果的数量*/
        public function search_by_key_count($keyword){
            if(!empty($keyword)){
                $sql = 'select count(*) from '.$this->_table.' where status = "1" and status=(select status from '.$this->user_table.' where username='.$this->_table.'.author) and title like "%'.$keyword.'%" order by create_at desc';
                return DB::findResult($sql);
            }else{
                return 0;
            }
        }

        /*全站搜索 end*/


        /*页码部分*/
        public function set_index_pages($page){
            $indexpagesobj = M('indexpages');
            $aside = '';
            $where = '';
            return $indexpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->_table,$where);
        }

        public function set_tag_pages($tag,$page){
            $indexpagesobj = M('indexpages');
            $aside = '&tag='.$tag;
            $id = $this->find_id_by_tag($tag);
            $where = empty($id)?' and id in (" ")':' and id in ('.$id.')';
            return $indexpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->_table,$where);
        }

        public function set_status_pages($status,$page){
            $indexpagesobj = M('indexpages');
            $aside = '&status='.$status;
            if($status=='answer_zero'){
                $where = ' and answer_num = "0" order by create_at desc ';
            }else{
                $where = ' order by '.$status.'_num ';
            }
            return $indexpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->_table,$where);
        }

        public function set_tag_status_pages($tag,$status,$page){
            $indexpagesobj = M('indexpages');
            $aside = '&tag='.$tag.'&status='.$status;
            $id = $this->find_id_by_tag($tag);
            $id_str = empty($id)?' and id in (" ")':' and id in ('.$id.')';
            if($status=='answer_zero'){
                $where =  $id_str.' and answer_num = "0" order by create_at desc ';
            }else{
                $where = $id_str.' order by '.$status.'_num';
            }
            return $indexpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->_table,$where);
        }

        public function set_search_pages($keyword,$page){
            $searchpagesobj = M('searchpages');
            $method = 'search';
            $aside = '&type=article&word='.$keyword;
            $where = ' and title like "%'.$keyword.'%" order by create_at desc';
            return $searchpagesobj->set_pages($this->controller,$method,$aside,$page,$this->_table,$where);
        }
        /*页码部分end*/


        /*文章或问题的浏览数、评论数、推荐数、回答数、收藏数+1*/
        public function add_one_num($table,$set,$id){
            $sql = "update ".$table." set ".$set."=".$set."+1 where id=".$id;
            DB::query($sql);
        }

        /*文章或问题的浏览数、评论数、推荐数、回答数、收藏数-1*/
        public function reduce_one_num($table,$set,$id){
            $sql = "update ".$table." set ".$set."=".$set."-1 where id=".$id;
            DB::query($sql);
        }

        /*浏览数+1*/
        public function add_one_read($id){
            $this->add_one_num($this->_table,'read_num',$id);
        }

    }
?>
