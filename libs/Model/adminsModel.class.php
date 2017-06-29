<?php
    $articlesobj = M('articles');

    class adminsModel extends articlesModel{   //从数据库存取数据

        public $_table = 'admins';   //定义表名
        public $method = 'adminslist';
        public $search = 'username';

        // 取用户信息，通过用户名
        function findOne_by_username($username){
            $sql = 'select * from '.$this->_table.' where username="'.$username.'"';
            return DB::findOne($sql);
        }
        //用户密码核对--> auth 模型


        function update_last_login_time($data,$name){
            return DB::update($this->_table,$data,' username="'.$name.'"');
        }

        function findAll_orderby_create_at($page){
            $sql = 'select * from '.$this->_table.' order by last_login_time desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }

        function search_by_key($key){
            $sql = 'select * from '.$this->_table.' where username like "%'.$key.'%" order by last_login_time desc';
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }

        function submit($data){
            extract($data);
            if(empty($username)){
                return 0;
            }
            $username = addslashes($username);
            $password = addslashes($password);
            $newpwd = addslashes($newpwd);
            $email = addslashes($email);
            $data = array(
                'username'=>$username,
                'password'=>$newpwd,
                'email'=>$email,
                'last_login_time'=>time()
            );
            if($_POST['id']!=''){
                $oldpassword = $this->findPassword()['password'];
                if($password == $oldpassword){
                    DB::update($this->_table,$data,'id='.$id);
                    return 1;
                }
            }else{
                DB::insert($this->_table,$data);
                return 2;
            }
        }

        // public function pwdsubmit($data){
        //     $password = $_REQUEST['password'];
        //     echo $password;
        //     // $password = addslashes($password);
        //     if($_POST['id']!=''){
        //         $oldpassword = $this->findPassword()['password'];
        //     }
        // }

        private function findPassword(){
            $sql = 'select password from '.$this->_table.' where id='.$_POST['id'];
            return DB::findOne($sql);
        }

    }
?>
