<?php
    class forgotModel{
        public $_table = "users";

        public function forgotsubmit($data){
            if(empty($data['username']) || empty($data['email'])){
                return false;
            }
            $username = addslashes($data['username']);
            $email = addslashes($data['email']);
            //用户的验证操作
            if($this->check_data($username,$email)){
                // 验证通过，可以修改密码
                return true;
            }else{
                return false;
            }
        }

        public function newpwdsubmit($data){
            if(empty($data['username']) || empty($data['email']) || empty($data['newpassword'])){
                return false;
            }
            $username = addslashes($data['username']);
            $email = addslashes($data['email']);
            $newpassword = addslashes($data['newpassword']);
            $updated_at = addslashes($data['updated_at']);
            $data = array(
                'password'=>$newpassword,
                'updated_at'=>$updated_at
            );
            if($this->check_data($username,$email)){
                // 验证通过，修改密码
                DB::update($this->_table,$data," username='".$username."' and email='".$email."'");
                return true;
            }else{
                return false;
            }
        }

        public function check_data($username,$email){
            $sql_username = "select username from ".$this->_table;
            if(DB::findAll($sql_username)){
                $data = DB::findAll($sql_username);
            }else{
                return false;
            }
            $arr = array();
            foreach ($data as $key => $value) {
                $arr[$key] = $value['username'];
            }
            if(in_array($username,$arr)){
                $sql = "select email from ".$this->_table." where username='".$username."'";
                $user_email = DB::findResult($sql);
                if(!empty($user_email) && $user_email===$email){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }


    }

?>