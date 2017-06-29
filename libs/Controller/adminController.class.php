<?php
    class adminController{

        public $auth = '';
        public $article_name = 'articles';
        public $question_name = 'questions';
        public $tag_name = 'tags';
        public $user_name = 'users';
        public $admin_name = 'admins';

        public function __construct(){
            // 判断当前是否已经登录 -> auth模型去处理
            // 如果不是登录页，而且没有登录，就要跳转到登录页
            $authobj = M('auth');
            $this->auth = $authobj->getauth();
            if(empty($this->auth) && (PC::$method!='login')){
                $this->showmessage('请登录后再操作！','admin.php?controller=admin&method=login');
            }
        }

        public function login(){
            if($_POST){
                //进行登录处理
                //登录处理的业务逻辑放在 admins auth
                //admins同表名的模型：从数据库取用户信息
                //auth模型：进行用户信息的核对
                //-->把一系列的登录处理操作拆分到新的方法里去 $this->checklogin();
                $this->checklogin();
            }else{
               //显示登录界面
                VIEW::display('admin/login.html');
            }
        }

        private function checklogin(){
            $authobj = M('auth');
            if($authobj->loginsubmit()){
                $this->showmessage('登陆成功！','admin.php?controller=admin&method=index');
            }else{
                $this->showmessage('登陆失败！','admin.php?controller=admin&method=login');
            }
        }

        public function index(){
            // $articlesobj = M('articles');
            // $articlesnum = $articlesobj->count();
            // $data = $articlesobj->findAll_orderby_create_at();
            // VIEW::assign(array('articlesnum'=>$articlesnum,'data'=>$data));
            VIEW::display('admin/index.html');
        }

        public function logout(){
            $authobj = M('auth');
            $authobj->logout();
            $this->showmessage('退出成功！','admin.php?controller=admin&method=login');
        }

        private function showmessage($info, $url){
            echo "<script>alert('$info');window.location.href='$url'</script>";
            exit;
        }

        public function showlist($name){
            $page_banner = "";
            $page = empty($_GET['page'])?1:$_GET['page'];
            $obj = M($name);
            if(!empty($_GET['key'])){
                $data = $obj->search_by_key($_GET['key'],$page);
                $page_banner = $obj->set_key_pages($_GET['key'],$page);
            }else if(!empty($_GET['value'])){
                $data = $obj->select_by_status($_GET['value'],$page);
                $page_banner = $obj->set_value_pages($_GET['value'],$page);
            }else{
                $data = $obj->findAll_orderby_create_at($page);
                $page_banner = $obj->set_index_pages($page);
            }
            $val = empty($_GET['value'])?'':$_GET['value'];
            VIEW::assign(array('data'=>$data,'val'=>$val,'page_banner'=>$page_banner));
            VIEW::display('admin/'.$name.'list.html');
        }

        public function revise($name){
            //判断是否有post数据
            if(empty($_POST)){ //没有post数据，就显示修改界面
                // 读取旧信息，需要传递id,$_GET['id'],也就是如果有$_GET['id']说明是修改操作
                if(isset($_GET['id'])){
                    $data = M($name)->getoneinfo($_GET['id']);
                }else{
                    $data = array();
                }
                // var_dump($data);
                VIEW::assign(array('data'=>$data));
                VIEW::display('admin/'.$name.'revise.html');
            }else{  //进入修改的处理程序
                $this->submit($name);
            }
        }

        private function submit($name){
            $obj = M($name);
            $result = $obj->submit($_POST);
            if($result==0){
                $this->showmessage('操作失败！','admin.php?controller=admin&method='.$name.'revise&id='.$_POST['id']);
            }
            if($result==1){
                $this->showmessage('修改成功！','admin.php?controller=admin&method='.$name.'list');
            }
            if($result==2){
                $this->showmessage('添加成功！','admin.php?controller=admin&method='.$name.'list');
            }
        }

        public function del($name){
            if(intval($_GET['id'])){
                $obj = M($name);
                $obj->del_by_id(intval($_GET['id']));
                $this->showmessage('删除成功！','admin.php?controller=admin&method='.$name.'list');
            }
        }

        public function delmore($name){
            if(isset($_POST['id'])){
                $obj = M($name);
                $obj->del_by_moreid($_POST['id']);
            }
        }

        /*文章管理部分*/
        public function articleslist(){
            $this->showlist($this->article_name);
        }

        public function articlesrevise(){
            $this->revise($this->article_name);
        }

        public function articlesdel(){
            $this->del($this->article_name);
        }

        public function articlesdelmore(){
            $this->delmore($this->article_name);
        }

        /*问题管理部分*/
        public function questionslist(){
            $this->showlist($this->question_name);
        }

        public function questionsrevise(){
            $this->revise($this->question_name);
        }

        public function questionsdel(){
            $this->del($this->question_name);
        }

        public function questionsdelmore(){
            $this->delmore($this->question_name);
        }

        /*标签管理部分*/
        public function tagslist(){
            $this->showlist($this->tag_name);
        }

        public function tagsrevise(){
            $this->revise($this->tag_name);
        }

        public function tagsdel(){
            $this->del($this->tag_name);
        }

        public function tagsdelmore(){
            $this->delmore($this->tag_name);
        }

        /*用户管理部分*/
        public function userslist(){
            $this->showlist($this->user_name);
        }

        public function usersrevise(){
            $this->revise($this->user_name);
        }

        public function usersdel(){
            $this->del($this->user_name);
        }

        public function usersdelmore(){
            $this->delmore($this->user_name);
        }

        /*管理员管理部分*/
        public function adminslist(){
            $this->showlist($this->admin_name);
        }

        public function adminsrevise(){
            $this->revise($this->admin_name);
        }

        public function adminsdel(){
            $this->del($this->admin_name);
        }

        public function adminsdelmore(){
            $this->delmore($this->admin_name);
        }

    }

?>
