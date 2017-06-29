<?php
    $articleobj = M('article');
    class wendaModel extends articleModel{
        public $controller = 'index';
        public $method = 'wenda';
        public $_table = 'questions';
        public $tag_assoc_num = 'que_num';
        public $relation_table = 'relation_question_tag';
        public $relation_id = 'question_id';
        public $follow_table = 'q_follow';
        public $answer_table = 'q_answer';
        public $reply_table = 'q_reply';
        public $agree_table = 'q_answer_agree';
        public $detail_id = 'qid';
        public $insert_id = 0;

        // 新建问题、编辑问题
        public function submit($data){
            extract($data);
            if(empty($data['author'])){
                return 0;
            }
            $title = addslashes($data['title']);
            $content = addslashes($data['content']);
            $author = addslashes($data['author']);
            $create_at = addslashes($data['create_at']);
            $update_at = $create_at;
            $old_tag_name = addslashes($data['old_tag_name']);
            $old_tag_array =  explode(',',$old_tag_name);
            $tag_name = addslashes($data['tag_name']);
            $tag_array =  explode(',',$tag_name);
            $id = addslashes($data['id']);
            $uid = $this->get_id_by_username($author);
            $type = 5;
            $time = $create_at;
            $data = array(
                'title'=>$title,
                'content'=>$content,
                'author'=>$author,
                'update_at'=>$update_at
            );
            if(!empty($_POST['id'])){
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
                $qid = $this->find_last_insert_id();
                $sid = '';
                $this->add_user_dynamic($uid,$qid,$sid,$type,$time);
                $this->insert_relation_tag($tag_name);
                for($i=0;$i<count($tag_array);$i++){
                    $tag = $tag_array[$i];
                    $this->add_tag_one_num($this->tag_assoc_num,$tag);
                }
                return 2;
            }
        }

        /*问题详情页，侧边栏，获取相关标签的内容*/
        public function get_other_by_tag($tag,$self_id){
            $sql = 'select question_id from '.$this->relation_table.' where ';
            foreach ($tag as $key => $value) {
                $sql .= " find_in_set('{$value["tag_name"]}',tag_name) or ";
            }
            $sql = substr($sql,0,-3);
            $id = DB::findAll($sql);
            foreach($id as $k=>$v){
                if($v['question_id'] == $self_id){
                    array_splice($id,$k,1);
                }
            }
            return $this->get_other_by_id($id);
        }

        public function get_other_by_id($id){
            if(empty($id)){
                return array();
            }else{
                $aid = "";
                for($i=0;$i<count($id);$i++){
                    $aid = $aid."'".$id[$i]['question_id']."',";
                }
                $aid = substr($aid,0,-1);
                $aid =" id in(".$aid.")";
                $sql = "select * from ".$this->_table." where ".$aid." and status='1' order by answer_num desc limit 5";
                if(DB::findAll($sql)){
                    return DB::findAll($sql);
                }else{
                    return array();
                }
            }
        }

        /*问答详情页*/
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
                    $result = $this->check_stated($this->follow_table,$this->detail_id,$id,$myid);
                    $data['follow'] = $result?'follow':'followed';
                }else{
                    $data['follow'] = '';
                }
                return $data;
            }
        }

        /*通过用户名获取一个用户的全部数据*/
        public function get_user_by_username($username){
            $sql = 'select * from '.$this->user_table.' where status = "1" and username = "'.$username.'"';
            if(DB::findOne($sql)){
                return DB::findOne($sql);
            }else{
                return array();
            }
        }

        /*关注问题*/
        public function insert_follow($data){
            $qid = addslashes($data['qid']);
            $uid = addslashes($data['uid']);
            $follow_at = addslashes($data['follow_at']);
            $sid = '';
            $type = 7;
            $time = $follow_at;
            $data = array(
                'qid'=>$qid,
                'from_uid'=>$uid,
                'follow_at'=>$follow_at
            );
            $result = $this->check_stated($this->follow_table,$this->detail_id,$qid,$uid);
            if($result){
                DB::insert($this->follow_table,$data);
                $this->add_one_num($this->_table,'follow_num',$qid);
                $this->add_user_dynamic($uid,$qid,$sid,$type,$time);
                return 1;
            }else{
                return 2;
            }
        }

        /*取消关注问题*/
        public function del_follow($data){
            $qid = addslashes($data['qid']);
            $uid = addslashes($data['uid']);
            $sid = '';
            $type = 7;
            $result = $this->check_stated($this->follow_table,$this->detail_id,$qid,$uid);
            if(!$result){
                DB::del($this->follow_table,' qid= '.$qid.' and from_uid= '.$uid);
                $this->reduce_one_num($this->_table,'follow_num',$qid);
                $this->del_user_dynamic($uid,$qid,$sid,$type);
                return 1;
            }else{
                return 2;
            }
        }

        /*添加问题回答*/
        public function insert_answer($data){
            $qid = addslashes($data['qid']);
            $from_uid = addslashes($data['from_uid']);
            $content = addslashes($data['content']);
            $answer_at = addslashes($data['answer_at']);
            $type = 6;
            $time = $answer_at;
            $data = array(
                'qid'=>$qid,
                'from_uid'=>$from_uid,
                'content'=>$content,
                'answer_at'=>$answer_at
            );
            DB::insert($this->answer_table,$data);
            $this->insert_id = $this->find_last_insert_id();
            $sid = $this->insert_id;
            $this->add_one_num($this->_table,'answer_num',$qid);
            $this->add_user_dynamic($from_uid,$qid,$sid,$type,$time);
        }

        /*删除问题回答*/
        public function del_answer($data){
            $uid = addslashes($data['uid']);
            $qid = addslashes($data['qid']);
            $answer_id = addslashes($data['answer_id']);
            $type = 6;
            DB::del($this->answer_table," id=".$answer_id);
            $this->reduce_one_num($this->_table,'answer_num',$qid);
            $this->del_user_dynamic($uid,$qid,$answer_id,$type);
        }

        /*添加问题回复*/
        public function insert_reply($data){
            $answer_id = addslashes($data['answer_id']);
            $from_uid = addslashes($data['from_uid']);
            $to_uid = addslashes($data['to_uid']);
            $content = addslashes($data['content']);
            $reply_at = addslashes($data['reply_at']);
            $data = array(
                'answer_id'=>$answer_id,
                'from_uid'=>$from_uid,
                'to_uid'=>$to_uid,
                'content'=>$content,
                'reply_at'=>$reply_at
            );
            DB::insert($this->reply_table,$data);
            $this->insert_id = $this->find_last_insert_id();
        }

        /*删除问题回复*/
        public function del_reply($id){
            DB::del($this->reply_table," id=".$id);
        }

        /*获取问题回答*/
        public function get_answer_by_qid($id,$myid){
            $sql = "select * from ".$this->answer_table." where qid = ".$id." order by answer_at desc";
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                $user = array();
                foreach ($data as $key => $value) {
                    $user = $this->get_user_by_id($value['from_uid']);
                    $data[$key]['user'] = $user;
                    if(!empty($myid)){
                        $result = $this->check_stated($this->agree_table,'answer_id',$value['id'],$myid);
                        $data[$key]['agree'] = $result?'agree':'agreed';
                    }else{
                        $data[$key]['agree'] = '';
                    }
                    $data[$key]['reply_num'] = $this->get_reply_num($value['id']);
                    $data[$key]['reply'] = $this->get_reply_by_answerid($value['id']);
                }
                return $data;
            }else{
                return array();
            }
        }

        /*获取问题回复*/
        public function get_reply_by_answerid($id){
            $sql = "select * from ".$this->reply_table." where answer_id = ".$id." order by reply_at asc";
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

        /*点赞问题回答*/
        public function insert_answer_agree($data){
            $qid = addslashes($data['qid']);
            $answer_id = addslashes($data['answer_id']);
            $uid = addslashes($data['uid']);
            $agree_at = addslashes($data['agree_at']);
            $data = array(
                'qid'=>$qid,
                'answer_id'=>$answer_id,
                'from_uid'=>$uid,
                'agree_at'=>$agree_at
            );
            $result = $this->check_stated($this->agree_table,'answer_id',$answer_id,$uid);
            if($result){
                DB::insert($this->agree_table,$data);
                $this->add_one_num($this->answer_table,'praise_num',$answer_id);
                return 1;
            }else{
                return 2;
            }
        }

        /*取消点赞*/
        public function del_answer_agree($data){
            $answer_id = addslashes($data['answer_id']);
            $uid = addslashes($data['uid']);
            $result = $this->check_stated($this->agree_table,'answer_id',$answer_id,$uid);
            if(!$result){
                DB::del($this->agree_table,' answer_id= '.$answer_id.' and from_uid= '.$uid);
                $this->reduce_one_num($this->answer_table,'praise_num',$answer_id);
                return 1;
            }else{
                return 2;
            }
        }


        /*检查回答是否被用户点赞*/
        // public function check_agree($data){
        //     if(!empty($data)){
        //         $arr = array();
        //         foreach ($data as $key => $value) {
        //             $result = $this->check_stated($this->agree_table,'answer_id',$value['answer_id'],$value['uid']);
        //             $arr[$key] = $result?'agree':'agreed';
        //         }
        //         return $arr;
        //     }
        // }

        /*获取问题问答数目*/
        public function get_answer_num($id){
            $sql = "select count(*) from ".$this->answer_table." where qid = ".$id;
            return DB::findResult($sql);
        }

        /*获取问题回复数目*/
        public function get_reply_num($id){
            $sql = "select count(*) from ".$this->reply_table." where answer_id = ".$id;
            return DB::findResult($sql);
        }



        public function set_search_pages($keyword,$page){
            $searchpagesobj = M('searchpages');
            $method = 'search';
            $aside = '&type=wenda&word='.$keyword;
            $where = ' and title like "%'.$keyword.'%" order by create_at desc';
            return $searchpagesobj->set_pages($this->controller,$method,$aside,$page,$this->_table,$where);
        }



    }
?>
