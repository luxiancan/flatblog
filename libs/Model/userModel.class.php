<?php
    $articleobj = M('article');
    class userModel extends articleModel{
        public $controller = 'index';
        public $method = 'user';
        public $article_table = 'articles';
        public $question_table = 'questions';
        public $user_table = 'users';
        public $a_collect_table = 'a_collect';
        public $a_praise_table = 'a_praise';
        public $a_comment_table = 'a_comment';
        public $q_answer_table = 'q_answer';
        public $q_follow_table = 'q_follow';
        public $user_relation_table = 'user_relation';
        public $aid = 'aid';
        public $qid = 'qid';
        public $fid = 'fid';
        public $search_pagesize = 20;
        public $follower_pagesize = 24;

        /*通过用户id查找一个用户的所有信息，包括关注和粉丝数量*/
        public function get_user_by_id($id,$myid){
            if(!empty($id)){
                $sql = 'select * from '.$this->user_table.' where status = "1" and id = "'.$id.'"';
                $data = DB::findOne($sql);
                if(!empty($data)){
                    $data['follower_num'] = $this->get_follower_num($id);
                    $data['fans_num'] = $this->get_fans_num($id);
                    $data['relation_type'] = empty($myid)?2:$this->get_is_concern($myid,$id);
                }
                return $data;
            }else{
                return array();
            }
        }

        /*获取用户关注数量*/
        public function get_follower_num($uid){
            if(!empty($uid)){
                $sql = "select count(*) from ".$this->user_relation_table." where uid=".$uid." and type=1";
                return DB::findResult($sql);
            }else{
                return 0;
            }
        }
        /*获取用户粉丝数量*/
        public function get_fans_num($uid){
            if(!empty($uid)){
                $sql = "select count(*) from ".$this->user_relation_table." where uid=".$uid." and type=2";
                return DB::findResult($sql);
            }else{
                return 0;
            }
        }


        /*侧边栏动态*/

        public function findAll_user_dynamic_by_uid($uid,$myid){
            if(!empty($uid)){
                if($uid == $myid){
                    $id_str = $this->find_fid_by_uid($uid);
                    $id_str = empty($id_str)?'':','.$id_str;
                }else{
                    $id_str = '';
                }
                $sql = "select * from ".$this->user_dynamic_table." where uid in(".$uid.$id_str.') order by time desc';
                $data = DB::findAll($sql);
                $new_data = array();
                $articleobj = M('article');
                $wendaobj = M('wenda');
                $my_id = '';
                if(!empty($data)){
                    foreach ($data as $key => $value) {
                        switch ($value['type']) {
                            case 1:
                                $new_data[$key]['title'] = '发表了博文';
                                $new_data[$key]['content'] = $this->get_one_article_by_id($value['oid']);
                                break;
                            case 2:
                                $new_data[$key]['title'] = '收藏了博文';
                                $new_data[$key]['content'] = $this->get_one_article_by_id($value['oid']);
                                break;
                            case 3:
                                $new_data[$key]['title'] = '推荐了博文';
                                $new_data[$key]['content'] = $this->get_one_article_by_id($value['oid']);
                                break;
                            case 4:
                                $new_data[$key]['title'] = '评论了博文';
                                $new_data[$key]['content'] = $this->get_one_article_by_id($value['oid']);
                                break;
                            case 5:
                                $new_data[$key]['title'] = '提了问题';
                                $new_data[$key]['content'] = $wendaobj->get_one_info($value['oid'],$my_id);
                                break;
                            case 6:
                                $new_data[$key]['title'] = '回答了问题';
                                $new_data[$key]['content'] = $wendaobj->get_one_info($value['oid'],$my_id);
                                break;
                            case 7:
                                $new_data[$key]['title'] = '关注了问题';
                                $new_data[$key]['content'] = $wendaobj->get_one_info($value['oid'],$my_id);
                                break;
                            case 8:
                                $new_data[$key]['title'] = '关注了用户';
                                $new_data[$key]['content'] = $this->get_one_user_by_id($value['oid']);
                                break;
                            default:
                                $new_data[$key]['title'] = '';
                                $new_data[$key]['content'] = array();
                                break;
                        }
                        $new_data[$key]['user'] = $this->get_one_user_by_id($value['uid']);
                        $new_data[$key]['type'] = $value['type'];
                        $new_data[$key]['time'] = $value['time'];
                    }
                    return $new_data;
                }else{
                    return array();
                }
            }else{
                return array();
            }
        }

        /*查找用户关注的用户的id*/
        public function find_fid_by_uid($uid){
            if(!empty($uid)){
                $sql = 'select fid from '.$this->user_relation_table.' where uid='.$uid.' and type=1 order by time desc';
                $id_str = $this->get_idstr_norepeat($this->fid,$sql);
                return $id_str;
            }else{
                return '';
            }
        }

        /*用户动态--获取用户信息*/
        public function get_one_user_by_id($id){
            if(!empty($id)){
                $id = intval($id);
                $sql = "select * from ".$this->user_table." where status='1' and id=".$id;
                return DB::findOne($sql);
            }else{
                return array();
            }
        }

        /*用户动态--获取博文信息*/
        public function get_one_article_by_id($id){
            if(!empty($id)){
                $id = intval($id);
                $sql = "select * from ".$this->article_table." where status='1' and id=".$id;
                return DB::findOne($sql);
            }else{
                return array();
            }
        }

        /*侧边栏动态 end*/


        /*侧边栏博文*/

        /*用户的博文*/
        public function findAll_article_by_author($author,$page){
            $sql = 'select * from '.$this->article_table.' where status="1" and author="'.$author.'" order by update_at desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }
        /*用户的博文数量*/
        public function find_article_num($author){
            $sql = 'select count(*) from '.$this->article_table.' where status="1" and author="'.$author.'"';
            if(DB::findResult($sql)){
                return DB::findResult($sql);
            }else{
                return 0;
            }
        }

        /*用户的博文--选择类型*/
        public function select_by_status($author,$value,$page){
            $sql = 'select * from '.$this->article_table.' where status="1" and author="'.$author.'" and cat_name='.$value.' order by update_at desc '.' limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }
        /*用户的博文--选择类型数量*/
        public function select_a_status_num($author,$value){
            $sql = 'select count(*) from '.$this->article_table.' where status="1" and author="'.$author.'" and cat_name='.$value;
            if(DB::findResult($sql)){
                return DB::findResult($sql);
            }else{
                return 0;
            }
        }

        /*用户的博文页码*/
        public function set_article_index_page($id,$author,$page){
            $indexpagesobj = M('indexpages');
            $aside = "&id=".$id."&menu=articles";
            $where = "and author='".$author."'";
            return $indexpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->article_table,$where);
        }

        /*用户的博文--选择类型页码*/
        public function set_article_value_page($id,$author,$value,$page){
            $indexpagesobj = M('indexpages');
            $aside = "&id=".$id."&menu=articles&value=".$value;
            $where = "and author='".$author."' and cat_name=".$value;
            return $indexpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->article_table,$where);
        }

        /*用户的博文数量*/
        public function get_article_count($name){
            $sql = 'select count(*) from '.$this->article_table.' where author="'.$name.'"';
            return DB::findResult($sql);
        }

        /*删除一篇博文*/
        public function del_by_aid($data){
            $uid = addslashes($data['uid']);
            $aid = addslashes($data['id']);
            $sid = '';
            $type = 1;
            $this->del_user_dynamic($uid,$aid,$sid,$type);
            return DB::del($this->article_table,'id='.$aid);
        }

        /*删除多篇博文*/
        public function del_by_moreaid($data){
            $uid = addslashes($data['uid']);
            $id_str = addslashes($data['id']);
            $type = 1;
            $this->del_more_user_dynamic($uid,$id_str,$type);
            return DB::del($this->article_table,' id in ('.$id_str.')');
        }


        /*用户的收藏*/
        public function find_collect_by_uid($id,$page){
            $sql = 'select aid from '.$this->a_collect_table.' where from_uid='.$id.' order by collect_at desc';
            return $this->get_collect_praise_comment($this->aid,$sql,$page);
        }
        /*用户的收藏页码*/
        public function set_collect_page($id,$page){
            $sql = 'select aid from '.$this->a_collect_table.' where from_uid='.$id.' order by collect_at desc';
            $id_str = $this->get_idstr_norepeat($this->aid,$sql);
            if(strlen($id_str)>0){
                $searchpagesobj = M('searchpages');
                $aside = "&id=".$id."&menu=articles&type=collect";
                $where = 'and id in('.$id_str.') order by field(id,'.$id_str.')';
                return $searchpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->article_table,$where);
            }else{
                return "";
            }
        }
        /*用户的收藏数量*/
        public function get_collect_count($id){
            $sql = 'select count(*) from '.$this->a_collect_table.' where from_uid='.$id;
            return DB::findResult($sql);
        }

        /*用户的推荐*/
        public function find_praise_by_uid($id,$page){
            $sql = 'select aid from '.$this->a_praise_table.' where from_uid='.$id.' order by praise_at desc';
            return $this->get_collect_praise_comment($this->aid,$sql,$page);
        }
        /*用户的推荐页码*/
        public function set_praise_page($id,$page){
            $sql = 'select aid from '.$this->a_praise_table.' where from_uid='.$id.' order by praise_at desc';
            $id_str = $this->get_idstr_norepeat($this->aid,$sql);
            if(strlen($id_str)>0){
                $searchpagesobj = M('searchpages');
                $aside = "&id=".$id."&menu=articles&type=praise";
                $where = 'and id in('.$id_str.') order by field(id,'.$id_str.')';
                return $searchpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->article_table,$where);
            }else{
                return "";
            }
        }
        /*用户的推荐数量*/
        public function get_praise_count($id){
            if(!empty($id)){
                $sql = 'select count(*) from '.$this->a_praise_table.' where from_uid='.$id;
                return DB::findResult($sql);
            }else{
                return 0;
            }
        }

        /*用户的评论*/
        public function find_comment_by_uid($id,$page){
            $sql = 'select aid from '.$this->a_comment_table.' where from_uid='.$id.' order by comment_at desc';
            return $this->get_collect_praise_comment($this->aid,$sql,$page);
        }
        /*用户的评论页码*/
        public function set_comment_page($id,$page){
            $sql = 'select aid from '.$this->a_comment_table.' where from_uid='.$id.' order by comment_at desc';
            $id_str = $this->get_idstr_norepeat($this->aid,$sql);
            if(strlen($id_str)>0){
                $searchpagesobj = M('searchpages');
                $aside = "&id=".$id."&menu=articles&type=comment";
                $where = ' and id in('.$id_str.')';
                return $searchpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->article_table,$where);
            }else{
                return "";
            }
        }
        /*用户的评论数量*/
        public function get_comment_count($id){
            if(!empty($id)){
                $sql = 'select aid from '.$this->a_comment_table.' where from_uid='.$id;
                return $this->get_count($this->aid,$sql);
            }else{
                return 0;
            }
        }

        /*获取用户收藏、推荐、评论*/
        public function get_collect_praise_comment($detail_id,$sql,$page){
            $id_str = $this->get_idstr_norepeat($detail_id,$sql);
            if(strlen($id_str)>0){
                return $this->get_art_by_idstr($id_str,$page);
            }else{
                return array();
            }
        }

        /*通过以逗号隔开的id字符串获取博文、问题,输出顺序也为id字符串的顺序*/
        public function get_art_by_idstr($id_str,$page){
            $sql = 'select * from '.$this->article_table.' where status="1" and id in('.$id_str.') order by field(id,'.$id_str.') limit '.(($page-1)*$this->search_pagesize).','.$this->search_pagesize;
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                $articleobj = M('article');
                return $articleobj->add_data_uid($data);
            }else{
                return array();
            }
        }

        /*侧边栏博文 end*/


        /*侧边栏问答*/

        /*用户的问题*/
        public function findAll_bbs_by_author($author,$page){
            $sql = 'select * from '.$this->question_table.' where status="1" and author="'.$author.'" order by update_at desc '.' limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }

        /*用户的问题页码*/
        public function set_bbs_index_pages($id,$author,$page){
            $indexpagesobj = M('indexpages');
            $aside = "&id=".$id."&menu=bbs";
            $where = "and author='".$author."'";
            return $indexpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->question_table,$where);
        }

        /*用户的问题数量*/
        public function get_bbs_count($name){
            $sql = 'select count(*) from '.$this->question_table.' where author="'.$name.'"';
            return DB::findResult($sql);
        }

        /*用户的问题回答*/
        public function find_answer_by_uid($id,$page){
            $sql = 'select qid from '.$this->q_answer_table.' where from_uid='.$id.' order by answer_at desc';
            return $this->get_answer_follow($this->qid,$sql,$page,$id);
        }
        /*用户的问题回答页码*/
        public function set_answer_page($id,$page){
            $sql = 'select qid from '.$this->q_answer_table.' where from_uid='.$id.' order by answer_at desc';
            $id_str = $this->get_idstr_norepeat($this->qid,$sql);
            if(strlen($id_str)>0){
                $searchpagesobj = M('searchpages');
                $aside = "&id=".$id."&menu=bbs&sort=reply";
                $where = 'and id in('.$id_str.') order by field(id,'.$id_str.')';
                return $searchpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->question_table,$where);
            }else{
                return "";
            }
        }
        /*用户的问题回答数量*/
        public function get_answer_count($id){
            $sql = 'select qid from '.$this->q_answer_table.' where from_uid='.$id;
            return $this->get_count($this->qid,$sql);
        }

        /*用户关注的问题*/
        public function find_follow_by_uid($id,$page){
            $sql = 'select qid from '.$this->q_follow_table.' where from_uid='.$id.' order by follow_at desc';
            return $this->get_answer_follow($this->qid,$sql,$page,$id);
        }
        /*用户关注的问题页码*/
        public function set_follow_page($id,$page){
            $sql = 'select qid from '.$this->q_follow_table.' where from_uid='.$id.' order by follow_at desc';
            $id_str = $this->get_idstr_norepeat($this->qid,$sql);
            if(strlen($id_str)>0){
                $searchpagesobj = M('searchpages');
                $aside = "&id=".$id."&menu=bbs&sort=follow";
                $where = 'and id in('.$id_str.') order by field(id,'.$id_str.')';
                return $searchpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->question_table,$where);
            }else{
                return "";
            }
        }
        /*用户关注的问题数量*/
        public function get_follow_count($id){
            $sql = 'select count(*) from '.$this->q_follow_table.' where from_uid='.$id;
            return DB::findResult($sql);
        }


        /*获取用户的回答和关注*/
        public function get_answer_follow($detail_id,$sql,$page,$uid){
            $id_str = $this->get_idstr_norepeat($detail_id,$sql);
            if(strlen($id_str)>0){
                return $this->get_wenda_by_idstr($id_str,$page,$uid);
            }else{
                return array();
            }
        }

        /*通过以逗号隔开的id字符串获取用户回答的问题,输出顺序也为id字符串的顺序*/
        public function get_wenda_by_idstr($id_str,$page,$uid){
            $sql = 'select * from '.$this->question_table.' where status="1" and id in('.$id_str.') order by field(id,'.$id_str.') limit '.(($page-1)*$this->search_pagesize).','.$this->search_pagesize;
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                if(!empty($_GET['sort']) && $_GET['sort']=='reply'){
                    foreach ($data as $key => $value) {
                        $data[$key]['answer'] = $this->get_user_answer_by_uid($value['id'],$uid);
                    }
                }
                $wendaobj = M('wenda');
                return $wendaobj->add_data_tag($data);
            }else{
                return array();
            }
        }

        /*获取用户回答的具体内容*/
        public function get_user_answer_by_uid($qid,$uid){
            $sql = 'select * from '.$this->q_answer_table.' where qid='.$qid.' and from_uid='.$uid.' order by answer_at desc limit 1';
            if(DB::findOne($sql)){
                return DB::findOne($sql);
            }else{
                return array();
            }
        }


        /*侧边栏问答 end*/


        /*侧边栏关注*/

        /*用户添加关注*/
        public function insert_user_follow($data){
            $uid = addslashes($data['uid']);
            $fid = addslashes($data['fid']);
            $time = addslashes($data['time']);
            $sid = '';
            $type = 8;
            $data_follow = array(
                'uid'=>$uid,
                'fid'=>$fid,
                'type'=>1,
                'time'=>$time
            );
            $data_fans = array(
                'uid'=>$fid,
                'fid'=>$uid,
                'type'=>2,
                'time'=>$time
            );
            $result = $this->check_is_follow($this->user_relation_table,$uid,$fid);
            if($result){
                /*增加一个关注*/
                DB::insert($this->user_relation_table,$data_follow);
                /*增加一个粉丝*/
                DB::insert($this->user_relation_table,$data_fans);
                $this->add_user_dynamic($uid,$fid,$sid,$type,$time);
                return 1;
            }else{
                return 2;
            }
        }

        /*用户取消关注*/
        public function del_user_follow($data){
            $uid = addslashes($data['uid']);
            $fid = addslashes($data['fid']);
            $sid = '';
            $type = 8;
            $result = $this->check_is_follow($this->user_relation_table,$uid,$fid);
            if(!$result){
                DB::del($this->user_relation_table,' uid= '.$uid.' and fid= '.$fid.' and type = 1');
                DB::del($this->user_relation_table,' uid= '.$fid.' and fid= '.$uid.' and type = 2');
                $this->del_user_dynamic($uid,$fid,$sid,$type);
                return 1;
            }else{
                return 2;
            }
        }

        /*检查用户是否已被另一个用户关注*/
        public function check_is_follow($table,$uid,$fid){
            $sql = "select uid from ".$table." where fid=".$fid." and type=1";
            $result = DB::findAll($sql);
            if(!empty($result)){
                $arr = array();
                for($i=0;$i<count($result);$i++){
                    $arr[$i] = $result[$i]['uid'];
                }
                if(!in_array($uid,$arr)){
                    return true;
                }else{
                    return false;
                }
            }else{
                return true;
            }
        }

        /*用户关注的用户*/
        public function find_follower_by_uid($uid,$myid,$page){
            $sql = 'select fid from '.$this->user_relation_table.' where uid='.$uid.' and type=1 order by time desc';
            return $this->get_follower_fans($this->fid,$sql,$page,$myid);
        }
        /*用户关注的用户页码*/
        public function set_follower_page($uid,$page){
            $sql = 'select fid from '.$this->user_relation_table.' where uid='.$uid.' and type=1 order by time desc';
            $id_str = $this->get_idstr_norepeat($this->fid,$sql);
            if(strlen($id_str)>0){
                $followerpagesobj = M('followerpages');
                $aside = "&id=".$uid."&menu=follows";
                $where = ' and id in('.$id_str.') order by field(id,'.$id_str.')';
                return $followerpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->user_table,$where);
            }else{
                return "";
            }
        }
        /*用户关注的用户数量*/
        public function get_follower_count($uid){
            $sql = 'select count(*) from '.$this->user_relation_table.' where uid='.$uid.' and type=1';
            return DB::findResult($sql);
        }


        /*用户的粉丝*/
        public function find_fans_by_uid($uid,$myid,$page){
            $sql = 'select fid from '.$this->user_relation_table.' where uid='.$uid.' and type=2 order by time desc';
            return $this->get_follower_fans($this->fid,$sql,$page,$myid);
        }
        /*用户的粉丝页码*/
        public function set_fans_page($uid,$page){
            $sql = 'select fid from '.$this->user_relation_table.' where uid='.$uid.' and type=2 order by time desc';
            $id_str = $this->get_idstr_norepeat($this->fid,$sql);
            if(strlen($id_str)>0){
                $followerpagesobj = M('followerpages');
                $aside = "&id=".$uid."&menu=follows&sort=fans";
                $where = ' and id in('.$id_str.') order by field(id,'.$id_str.')';
                return $followerpagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->user_table,$where);
            }else{
                return "";
            }
        }
        /*用户的粉丝数量*/
        public function get_fans_count($uid){
            $sql = 'select count(*) from '.$this->user_relation_table.' where uid='.$uid.' and type=2';
            return DB::findResult($sql);
        }


        /*获取用户的关注和粉丝*/
        public function get_follower_fans($detail_id,$sql,$page,$myid){
            $id_str = $this->get_idstr_norepeat($detail_id,$sql);
            if(strlen($id_str)>0){
                return $this->get_follower_by_idstr($id_str,$page,$myid);
            }else{
                return array();
            }
        }

        /*通过以逗号隔开的id字符串获取用户粉丝,输出顺序也为id字符串的顺序*/
        public function get_follower_by_idstr($id_str,$page,$myid){
            $sql = 'select * from '.$this->user_table.' where status="1" and id in('.$id_str.') order by field(id,'.$id_str.') limit '.(($page-1)*$this->follower_pagesize).','.$this->follower_pagesize;
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                foreach ($data as $key => $value) {
                    $data[$key]['follower_num'] = $this->get_follower_num($value['id']);
                    $data[$key]['fans_num'] = $this->get_fans_num($value['id']);
                    $data[$key]['is_fans'] = $this->get_is_fans($myid,$value['id']);
                    $data[$key]['is_concern'] = $this->get_is_concern($myid,$value['id']);
                }
                return $data;
            }else{
                return array();
            }
        }

        /*通过uid和fid判断f是否为u的粉丝*/
        public function get_is_fans($uid,$fid){
            if(!empty($uid)){
                $sql = "select fid from ".$this->user_relation_table." where uid=".$uid." and type=2";
                $fid_arr = DB::findAll($sql);
                $arr = array();
                if(!empty($fid_arr)){
                    foreach ($fid_arr as $key => $value) {
                        $arr[$key] = $value['fid'];
                    }
                    if(in_array($fid,$arr)){
                        return 1;
                    }else{
                        return 2;
                    }
                }else{
                    return 2;
                }
            }else{
                return 2;
            }
        }

        /*通过uid和fid判断u是否关注了f*/
        public function get_is_concern($uid,$fid){
            if(!empty($uid)){
                $sql = "select uid from ".$this->user_relation_table." where fid=".$fid." and type=1";
                $fid_arr = DB::findAll($sql);
                $arr = array();
                if(!empty($fid_arr)){
                    foreach ($fid_arr as $key => $value) {
                        $arr[$key] = $value['uid'];
                    }
                    if(in_array($uid,$arr)){
                        return 1;
                    }else{
                        return 2;
                    }
                }else{
                    return 2;
                }
            }else{
                return 2;
            }
        }

        /*侧边栏关注 end*/


        /*获取博文id字符串，去除重复的id之后，返回以,号分割的字符串*/
        public function get_idstr_norepeat($detail_id,$sql){
            if(DB::findAll($sql)){
                $id = DB::findAll($sql);
                $id_str = "";
                $id_strs = "";
                for ($i=0; $i < count($id); $i++) {
                    $id_str .= $id[$i][$detail_id].",";
                }
                $id_str = substr($id_str,0,-1);
                $id_arr = array_unique(explode(',',$id_str));
                foreach ($id_arr as $value) {
                    $id_strs .= $value.",";
                }
                return substr($id_strs,0,-1);
            }else{
                return "";
            }
        }


        /*获取数量*/
        public function get_count($detail_id,$sql){
            if(DB::findAll($sql)){
                $id = DB::findAll($sql);
                $id_str = "";
                $id_strs = "";
                for ($i=0; $i < count($id); $i++) {
                    $id_str .= $id[$i][$detail_id].",";
                }
                $id_str = substr($id_str,0,-1);
                $id_arr = array_unique(explode(',',$id_str));
                return count($id_arr);
            }else{
                return 0;
            }
        }

        /*删除一个问题*/
        public function del_by_qid($data){
            $uid = addslashes($data['uid']);
            $qid = addslashes($data['id']);
            $sid = '';
            $type = 5;
            $this->del_user_dynamic($uid,$qid,$sid,$type);
            return DB::del($this->question_table,' id='.$qid);
        }

        /*删除多个问题*/
        public function del_by_moreqid($data){
            $uid = addslashes($data['uid']);
            $id_str = addslashes($data['id']);
            $type = 5;
            $this->del_more_user_dynamic($uid,$id_str,$type);
            return DB::del($this->question_table,' id in ('.$id_str.')');
        }


        /*用户修改个人信息*/
        public function update_user_info($data){
            if(!empty($data) && !empty($data['id'])){
                $id = addslashes($data['id']);
                $username = addslashes($data['username']);
                $job = addslashes($data['job']);
                $sex = addslashes($data['sex']);
                $signature = addslashes($data['signature']);
                $data = array(
                    'username'=>$username,
                    'job'=>$job,
                    'sex'=>$sex,
                    'signature'=>$signature,
                    'updated_at'=>time()
                );
                if($this->check_ishave_same_username($id,$username)){
                    DB::update($this->user_table, $data, ' id='.$id);
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

        /*用户修改密码*/
        public function update_user_pwd($data){
            if(!empty($data['id']) && !empty($data['old_pwd']) && !empty($data['new_pwd'])){
                $id = addslashes($data['id']);
                $old_pwd = addslashes($data['old_pwd']);
                $new_pwd = addslashes($data['new_pwd']);
                $data = array(
                    'password'=>$new_pwd,
                    'updated_at'=>time()
                );
                if($this->check_is_password($id,$old_pwd)){
                    DB::update($this->user_table, $data, ' id='.$id);
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

        // 检查是否密码是否一致
        private function check_is_password($id,$old_pwd){
            $sql = "select password from ".$this->user_table." where id=".$id;
            if(DB::findResult($sql)){
                $password = DB::findResult($sql);
            }else{
                return false;
            }
            if(!empty($password) && $password === $old_pwd){
                return true;
            }else{
                return false;
            }
        }

        // 检查是否有相同用户名
        private function check_ishave_same_username($id,$username){
            $sql = "select username from ".$this->user_table." where id <> ".$id;
            $data = DB::findAll($sql);
            $arr = array();
            foreach ($data as $key => $value) {
                $arr[$key] = $value['username'];
            }
            if(!in_array($username,$arr)){
                return true;
            }else{
                return false;
            }
        }

        /*用户修改个人信息 end*/

    }
?>
