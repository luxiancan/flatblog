<?php
    // $userobj = M('user');
    class registerModel{
        public $indexauth = '';
        public $user_table = "users";

        public function registersubmit($info){
            if(empty($info['username']) || empty($info['password'])){
                return false;
            }
            $username = addslashes($info['username']);
            $password = addslashes($info['password']);
            $pwd_repeat = addslashes($info['pwd_repeat']);
            $email = addslashes($info['email']);
            $create_at = addslashes($info['create_at']);
            $last_login_time = addslashes($info['last_login_time']);
            $data = array(
                'username'=>$username,
                'password'=>$password,
                'email'=>$email,
                'create_at'=>$create_at,
                'last_login_time'=>$last_login_time
            );
            //用户的验证操作
            if($this->check_ishave_username($username)){
                // 验证通过，注册成功
                DB::insert($this->user_table,$data);
                $indexauthobj = M('indexauth');
                $this->indexauth = $indexauthobj->get_login_again($this->find_last_insert_id());
                return true;
            }else{
                return false;
            }
        }

        /*获取最后插入的数据自增id*/
        public function find_last_insert_id(){
            $sql = "select LAST_INSERT_ID()";
            return DB::findResult($sql);
        }

        // 检查是否有相同用户名
        public function check_ishave_username($username){
            $sql = "select username from ".$this->user_table;
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

    }
?>
