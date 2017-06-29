<?php
    class indexauthModel{
        private $indexauth = ''; //当前用户的信息
        public $user_table = 'users';

        public function __construct(){
            if(isset($_SESSION['indexauth']) && (!empty($_SESSION['indexauth']))){
                $this->indexauth = $_SESSION['indexauth'];
            }
        }

        public function loginsubmit($info){
            if(empty($info['username']) || empty($info['password'])){
                return false;
            }
            $username = addslashes($info['username']);
            $password = addslashes($info['password']);
            //用户的验证操作
            if($this->indexauth = $this->checkuser($username,$password)){
                // 验证通过，登陆成功
                $this->set_last_login_time($username);
                $_SESSION['indexauth'] = $this->indexauth;
                return true;
            }else{
                return false;
            }
        }

        private function login_again($id){
            if(!empty($id)){
                unset($_SESSION['indexauth']);
                $sql = "select * from ".$this->user_table." where id=".$id;
                $this->indexauth = DB::findOne($sql);
                $_SESSION['indexauth'] = $this->indexauth;
                return $this->indexauth;
            }
        }

        public function get_login_again($id){
            return $this->login_again($id);
        }

        private function checkuser($username,$password){
            $usersobj = M('users');
            $indexauth = $usersobj->findOne_by_username($username);
            // $indexauth 为一组键值对数组，用户的信息
            if((!empty($indexauth)) && $indexauth['password']==$password){
                return $indexauth;
            }else{
                return false;
            }
        }

        private function set_last_login_time($username){
            $usersobj = M('users');
            $time = time();
            $data = array('last_login_time'=>$time);
            $usersobj->update_last_login_time($data,$username);
        }

        public function getindexauth(){
            return $this->indexauth;
        }

        public function logout(){
            unset($_SESSION['indexauth']);
            $this->indexauth = '';
        }

    }
?>
