<?php
    $articlesobj = M('articles');

    class questionsModel extends articlesModel{
        public $method = 'questionslist';
        public $_table = 'questions';
        public $relation_table = 'relation_question_tag';

        public function get_tag_name($id){
            $sql = 'select tag_name from '.$this->relation_table.' where question_id='.$id;
            return DB::findResult($sql);
        }

    }
?>
