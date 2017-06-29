<?php
    class authModel{
        private $auth = ''; //当前管理员的信息
        public $last_login_time;

        public function __construct(){
            if(isset($_SESSION['auth']) && (!empty($_SESSION['auth']))){
                $this->auth = $_SESSION['auth'];
            }
        }

        public function loginsubmit(){
            if(empty($_POST['username']) || empty($_POST['password'])){
                return false;
            }
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            //用户的验证操作
            if($this->auth = $this->checkuser($username,$password)){
                // 验证通过，登陆成功
                $_SESSION['auth'] = $this->auth;
                $this->last_login_time = time();
                $this->set_last_login_time();
                return true;
            }else{
                return false;
            }
        }

        public function set_last_login_time(){
            $adminobj = M('admins');
            $time = intval($this->last_login_time);
            $data = array('last_login_time'=>$time);
            $adminobj->update_last_login_time($data,$this->auth['username']);
        }

        public function getauth(){
            return $this->auth;
        }

        public function logout(){
            unset($_SESSION['auth']);
            $this->auth = '';
        }

        private function checkuser($username,$password){
            $adminobj = M('admins');
            $auth = $adminobj->findOne_by_username($username);
            if((!empty($auth)) && $auth['password']==$password){
                return $auth;
            }else{
                return false;
            }
        }

    }
?>
