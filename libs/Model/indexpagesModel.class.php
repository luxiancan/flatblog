<?php
    $pagesobj = M('pages');
    class indexpagesModel extends pagesModel{
        public $user_table = 'users';
        public function count($table,$where){
            $sql = "select count(*) from ".$table." where status = '1' and status=(select status from ".$this->user_table." where username=".$table.".author) ".$where;
            return DB::findResult($sql, 0, 0);
        }

    }
?>
