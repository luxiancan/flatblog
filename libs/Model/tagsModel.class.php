<?php
    $articlesobj = M('articles');

    class tagsModel extends articlesModel{
        public $method = 'tagslist';
        public $_table = 'tags';
        public $relation_article_tag = 'relation_article_tag';
        public $relation_question_tag = 'relation_question_tag';
        public $search = 'tag_name';

        // function __construct(){
        //     $this->update_art_and_que();
        // }

        function findAll_orderby_create_at($page){
            $sql = 'select * from '.$this->_table.' limit '.(($page-1)*$this->pageSize).','.$this->pageSize;
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }

        function search_by_key($key){
            $sql = 'select * from '.$this->_table.' where tag_name like "%'.$key.'%" order by create_at desc';
            if(DB::findAll($sql)){
                return DB::findAll($sql);
            }
        }

        function submit($data){
            extract($data);
            if(empty($tag_name)){
                return 0;
            }
            $class_name = addslashes($class_name);
            $tag_name = addslashes($tag_name);
            $data = array(
                'class_name'=>$class_name,
                'tag_name'=>$tag_name,
                'create_at'=>time()
            );
            if($_POST['id']!=''){
                DB::update($this->_table,$data,'id='.$id);
                $this->update_art_and_que($tag_name);
                return 1;
            }else{
                DB::insert($this->_table,$data);
                $this->update_art_and_que($tag_name);
                return 2;
            }
        }

        // function find_tag_name(){
        //     $sql = 'select tag_name from '.$this->_table;
        //     return DB::findAll($sql);
        // }

        function find_in_set_count($table,$tag){
            // $sql = select article_id from relation_article_tag where find_in_set('php',tag_name);
            $sql = 'select count(*) from '.$table.' where find_in_set("'.$tag.'",tag_name)';
            return DB::findResult($sql);
        }

        function update_art_and_que($tag_name){
            $art_num = $this->find_in_set_count($this->relation_article_tag,$tag_name);
            $que_num = $this->find_in_set_count($this->relation_question_tag,$tag_name);
            $art_num = addslashes($art_num);
            $que_num = addslashes($que_num);
            $num = array(
                'art_num'=>$art_num,
                'que_num'=>$que_num
            );
            if(isset($art_num) && isset($que_num)){
                DB::update($this->_table,$num," tag_name='".$tag_name."'");
            }

        }

    }
?>
