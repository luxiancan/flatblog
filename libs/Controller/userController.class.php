<?php
    class userController{
        public $fail = 'fail';
        public $success = 'success';

        public function newforgot(){
            VIEW::assign(array());
            VIEW::display('user/newforgot.html');
        }

        public function newlogin(){
            VIEW::assign(array());
            VIEW::display('user/newlogin.html');
        }

        public function newsignup(){
            VIEW::assign(array());
            VIEW::display('user/newsignup.html');
        }

        public function ajaxforgot(){
            if($_POST){
                $forgotobj = M('forgot');
                $json_msg['msg'] = $forgotobj->forgotsubmit($_POST)?$this->success:$this->fail;
                echo json_encode($json_msg);
            }else{
                $this->showmessage("操作失败！","index.php?controller=user&method=newforgot");
            }
        }

        public function ajaxnewpwd(){
            if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['newpassword'])){
                $forgotobj = M('forgot');
                $json_msg['msg'] = $forgotobj->newpwdsubmit($_POST)?$this->success:$this->fail;
                echo json_encode($json_msg);
            }else{
                $this->showmessage("非法请求！","index.php?controller=user&method=newforgot");
            }
        }

        private function showmessage($info,$url){
            echo "<script>alert('$info');window.location.href='$url'</script>";
            exit;
        }
    }
?>
