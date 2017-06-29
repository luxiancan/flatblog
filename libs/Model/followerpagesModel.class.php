<?php
    $pagesobj = M('indexpages');
    class followerpagesModel extends indexpagesModel{
        public $pageSize = 24;
        public function count($table,$where){
            $sql = "select count(*) from ".$table." where status='1' ".$where;
            return DB::findResult($sql, 0, 0);
        }

    }
?>
