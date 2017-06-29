<?php
    class articlesModel{
        public $controller = 'admin';
        public $method = 'articleslist';
        public $_table = 'articles';
        public $relation_table = 'relation_article_tag';
        public $search = 'title';
        public $pageSize = 10;
        public $showPage = 5;

        function count(){
            $sql = 'select count(*) from '.$this->_table;
            return DB::findResult($sql, 0, 0);
        }

        public function getoneinfo($id){
            if(empty($id)){
                return array();
            }else{
                $id = intval($id);
                $sql = 'select * from '.$this->_table.' where id = '.$id;
                return DB::findOne($sql);
            }
        }

        function submit($data){
            extract($data);
            if(empty($status)){
                return 0;
            }
            $status = addslashes($status);
            $data = array(
                'status'=>$status
            );
            if($_POST['id']!=''){
                DB::update($this->_table,$data,'id='.$id);
                return 1;
            }
        }

        function findAll_orderby_create_at($page){
            $sql = 'select * from '.$this->_table.' order by create_at desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                $data = DB::findAll($sql);
                return $this->set_tag_name($data);
            }
        }

        function search_by_key($key,$page){
            $sql = 'select * from '.$this->_table.' where title like "%'.$key.'%" order by create_at desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                $data =  DB::findAll($sql);
                return $this->set_tag_name($data);
            }
        }

        function select_by_status($val,$page){
            $sql = 'select * from '.$this->_table.' where status ='.$val.' order by create_at desc limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                $data =  DB::findAll($sql);
                return $this->set_tag_name($data);
            }
        }

        public function set_tag_name($data){
            foreach ($data as $k => $value){
                $id = $data[$k]['id'];
                $tag_name = $this->get_tag_name($id);
                $data[$k]['tag_name'] = $tag_name;
            }
            return $data;
        }

        public function get_tag_name($id){
            $sql = 'select tag_name from '.$this->relation_table.' where article_id='.$id;
            return DB::findResult($sql);
        }

        function del_by_id($id){
            return DB::del($this->_table,'id='.$id);
        }

        function del_by_moreid($id){
            return DB::del($this->_table,'id in ('.$id.')');
        }

        function set_index_pages($page){
            $pagesobj = M('pages');
            $aside = '';
            $where = '';
            return $pagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->_table,$where);
        }

        function set_value_pages($value,$page){
            $pagesobj = M('pages');
            $aside = '&value='.$value;
            $where = ' where status = '.$value;
            return $pagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->_table,$where);
        }

        function set_key_pages($key,$page){
            $pagesobj = M('pages');
            $aside = '&key='.$key;
            $where = ' where '.$this->search.' like "%'.$key.'%"';
            return $pagesobj->set_pages($this->controller,$this->method,$aside,$page,$this->_table,$where);
        }


        function get_news_list(){
            $data = $this->findAll_orderby_create_at();
            foreach($data as $k=>$news){
                $data[$k]['content'] = mb_substr(strip_tags($data[$k]['content']),0,200);
                $data[$k]['create_at'] = date('Y-m-d H:i:s',$data[$k]['create_at']);
            }
            return $data;
        }

    }
?>
