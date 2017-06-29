<?php
    $articlesobj = M('articles');

    class usersModel extends articlesModel{
        public $method = 'userslist';
        public $_table = 'users';
        public $search = 'username';

        // 取用户信息，通过用户名
        function findOne_by_username($username){
            $sql = 'select * from '.$this->_table.' where status = "1" and username="'.$username.'"';
            return DB::findOne($sql);
        }

        //用户密码核对--> indexauth 模型

        function update_last_login_time($data,$name){
            return DB::update($this->_table,$data,' username="'.$name.'"');
        }

        function findAll_orderby_create_at($page){
            $sql = 'select * from '.$this->_table.' order by create_at desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }

        function select_by_status($val,$page){
            $sql = 'select * from '.$this->_table.' where status ='.$val.' order by create_at desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }

        function search_by_key($key){
            $sql = 'select * from '.$this->_table.' where username like "%'.$key.'%" order by create_at desc';
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }



    }
?>
