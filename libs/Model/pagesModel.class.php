<?php
    class pagesModel{
        public $pageSize = 10;
        public $showPage = 5;

        function count($table,$where){
            $sql = "select count(*) from ".$table.$where;
            return DB::findResult($sql, 0, 0);
        }

        function get_pages($table){
            $total = $this->count($table);
            return ceil($total/$this->pageSize);
        }

        function set_pages($controller,$method,$aside,$page,$table,$where){
            $total = $this->count($table,$where);
            $total_pages = ceil($total/$this->pageSize);
            // $total_pages = $this->get_pages($table);

            $page_banner = "<div class='page'>";

            // 计算偏移量
            $pageoffset = ($this->showPage-1)/2;

            if($page>1){
                $page_banner .= "<a href='".$_SERVER['PHP_SELF']."?controller={$controller}&method={$method}{$aside}&page=1'>首页</a>";
                $page_banner .= "<a href='".$_SERVER['PHP_SELF']."?controller={$controller}&method={$method}{$aside}&page=".($page-1)."' class='pre'>上一页</a>";
            }else{
                $page_banner .= "<span class='disable'>首页</span>";
                $page_banner .= "<span class='pre disable'>上一页</span>";
            }

            $start = 1;
            $end = $total_pages;
            if($total_pages > $this->showPage){
                if($page > $pageoffset){
                    $start = $page - $pageoffset;
                    $end = $total_pages>$page+$pageoffset ? $page+$pageoffset : $total_pages;
                }else{
                    $start = 1;
                    $end = $total_pages>$this->showPage ? $this->showPage : $total_pages;
                }
                if($page + $pageoffset > $total_pages){
                    $start = $start - ($page + $pageoffset - $end);
                }
            }

            for($i=$start; $i<=$end; $i++){
                if($page == $i){
                    $page_banner .= "<span class='ebtn active'>{$i}</span>";
                }else{
                    $page_banner .= "<a href='".$_SERVER['PHP_SELF']."?controller={$controller}&method={$method}{$aside}&page=".$i."' class='ebtn'>{$i}</a>";
                }
            }

            if($page<$total_pages){
                $page_banner .= "<a href='".$_SERVER['PHP_SELF']."?controller={$controller}&method={$method}{$aside}&page=".($page+1)."' class='next'>下一页</a>";
                $page_banner .= "<a href='".$_SERVER['PHP_SELF']."?controller={$controller}&method={$method}{$aside}&page=".$total_pages."'>尾页</a>";
            }else{
                $page_banner .= "<span class='next disable'>下一页</span>";
                $page_banner .= "<span class='disable'>尾页</span>";
            }


            $page_banner .= "<div class='gopage js-gopage' data-pages='{$total_pages}' data-amount='{$total}'>";
            $page_banner .= "<input type='text' class='page-text js-page-text' placeholder='跳转'>";
            $page_banner .= "<a class='gobtn js-gobtn'>GO</a></div>";

            $page_banner .= "共{$total}条记录，{$total_pages}页";
            $page_banner .= "</div>";

            return $page_banner;
        }

    }
?>
