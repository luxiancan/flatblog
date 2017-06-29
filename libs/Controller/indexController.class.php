<?php
    class indexController{
        public $indexauth = '';
        public $url = '';
        public $fail = 'fail';
        public $success = 'success';

        /*首页默认显示的内容*/
        function index(){
            $indexauthobj = M('indexauth');
            $this->indexauth = $indexauthobj->getindexauth();

            $articleobj = M('article');
            $article_read = $articleobj->get_something('id,title,summary','read_num',3);
            foreach ($article_read as $k=>$value){
                $article_read[$k]['summary'] = mb_substr(strip_tags($article_read[$k]['summary']),0,120);
            }

            $wendaobj = M('wenda');
            $que_answer = $wendaobj->get_something('id,title,content','answer_num',4);
            foreach ($que_answer as $k=>$value){
                $que_answer[$k]['content'] = mb_substr(strip_tags($que_answer[$k]['content']),0,80);
            }

            VIEW::assign(array('indexauth'=>$this->indexauth,'article_read'=>$article_read,'que_answer'=>$que_answer));
            VIEW::display('index/blog-index.html');
        }

        /*判断是否已经登录*/
        public function islogin(){
            // 判断当前是否已经登录 -> indexauth模型去处理
            // ajax返回具体参数
            $indexauthobj = M('indexauth');
            $this->indexauth = $indexauthobj->getindexauth();
            $jsonislogin['state'] = empty($this->indexauth)?'nologin':'login';
            echo json_encode($jsonislogin);
        }

        /*登录处理*/
        public function login(){
            if($_POST){
                //进行登录处理
                //登录处理的业务逻辑放在 indexauth模型
                //users同表名的模型：从数据库取用户信息
                //indexauth模型：进行用户信息的核对
                //-->把一系列的登录处理操作拆分到新的方法里去 $this->checklogin();
                $this->checklogin();
            }else{
                $this->showmessage("登陆失败！","index.php");
            }
        }

        /*获取登录前的url*/
        public function get_login_before_url(){
            $_SESSION['userurl'] = $_REQUEST['url'];
        }

        /*检查登录是否成功，返回状态信息*/
        private function checklogin(){
            $indexauthobj = M('indexauth');
            $json_login['login'] = $indexauthobj->loginsubmit($_POST)?'success':'fail';
            // if(isset($_SESSION['userurl'])){
            //     //会话中有要跳转的页面
            //     $this->url = $_SESSION['userurl'];
            // }else{
            //     //没有要跳转的页面，则转到首页
            //     $this->url = 'index.php';
            // }
            echo json_encode($json_login);
        }

        public function register(){
            if($_POST){
                $registerobj = M('register');
                $json_register['register'] = $registerobj->registersubmit($_POST)?$this->success:$this->fail;
                echo json_encode($json_register);
            }else{
                $this->showmessage("注册失败！","index.php");
            }
        }

        private function message($info){
            echo "<script>alert('$info');</script>";
        }
        private function showmessage($info,$url){
            echo "<script>alert('$info');window.location.href='$url'</script>";
            // window.location.href='$url'
            exit;
        }

        /*退出登陆*/
        public function logout(){
            $indexauthobj = M('indexauth');
            $indexauthobj->logout();
            $this->showmessage('退出成功！','index.php');
        }

        /*检查登录状态，并作出反馈*/
        public function checklgn($url){
            $indexauthobj = M('indexauth');
            $this->indexauth = $indexauthobj->getindexauth();
            if(empty($this->indexauth)){
                $this->showmessage("请登录后再操作！",$url);
            }else{
                return true;
            }
        }

        /*文章部分*/
        public function article(){
            $page_banner = "";
            $page = empty($_GET['page'])?1:$_GET['page'];
            $indexauthobj = M('indexauth');
            $this->indexauth = $indexauthobj->getindexauth();
            $myid = empty($this->indexauth)?'':$this->indexauth['id'];
            $articleobj = M('article');
            $tag = "";
            if(empty($_GET['id'])){
                if(!empty($_GET['status']) && empty($_GET['tag'])){
                    $article = $articleobj->findAll_orderby_status($_GET['status'],$page);
                    $page_banner = $articleobj->set_status_pages($_GET['status'],$page);
                }elseif(empty($_GET['status']) && !empty($_GET['tag'])){
                    $article = $articleobj->findAll_by_tag($_GET['tag'],$page);
                    $page_banner = $articleobj->set_tag_pages($_GET['tag'],$page);
                    $tag = $articleobj->tag_name;
                }elseif(!empty($_GET['status']) && !empty($_GET['tag'])){
                    $article = $articleobj->findAll_by_tag_and_status($_GET['tag'],$_GET['status'],$page);
                    $page_banner = $articleobj->set_tag_status_pages($_GET['tag'],$_GET['status'],$page);
                    $tag = $articleobj->tag_name;
                }else{
                    $article = $articleobj->findAll_orderby_create_at($page);
                    $page_banner = $articleobj->set_index_pages($page);
                }

                $article_praise = $articleobj->get_something('id,title,read_num,praise_num,comment_num','praise_num',5);
                VIEW::assign(array('indexauth'=>$this->indexauth,'article'=>$article,'tag'=>$tag,'article_praise'=>$article_praise,'page_banner'=>$page_banner));
                VIEW::display('index/article.html');
            }else{
                if($articleobj->get_status($_GET['id']) && $articleobj->check_user_status_by_aqid($_GET['id'])){
                    $articleobj->add_one_read($_GET['id']);
                    $article_data = $articleobj->get_one_info($_GET['id'],$myid);
                    // print_r($article_data);
                    $praise_data = $articleobj->get_praise_info($_GET['id']);
                    $comment_data = $articleobj->get_comment_by_aid($_GET['id']);
                    $comment_num = $articleobj->get_comment_num($_GET['id']);
                    $user_info = $articleobj->get_user_art_by_username($article_data['author']);
                    // print_r($this->indexauth);
                    $author_hot_article = $articleobj->get_author_hot_article($article_data['author'],$_GET['id'],5);
                    // print_r($comment_data);
                    VIEW::assign(array('indexauth'=>$this->indexauth,'article_data'=>$article_data,'praise_data'=>$praise_data,'comment_data'=>$comment_data,'comment_num'=>$comment_num,'user_info'=>$user_info,'author_hot_article'=>$author_hot_article));
                    VIEW::display('index/article-detail.html');
                }else{
                    $this->showmessage("对不起文章已经失效！","index.php?controller=index&method=article");
                }
            }
        }

        /*发表文章、编辑文章*/
        public function articlewrite(){
            if($this->checklgn("index.php?controller=index&method=article")){
                $articleobj = M('article');
                $tag = $articleobj->get_id_and_tag_name();
                // 读取旧信息，需要传递id,$_GET['id'],也就是如果有$_GET['id']说明是修改操作
                if(isset($_GET['id'])){
                    $is_author = $articleobj->check_is_author($_GET['id'],$this->indexauth['username']);
                    // 判断是否为作者，作者才有修改操作
                    if($is_author){
                        $data = $articleobj->get_one_info($_GET['id']);
                    }else{
                        $this->showmessage("对不起你的操作有误！","index.php?controller=index&method=article");
                    }
                }else{
                    // 否则是添加操作
                    $data = array();
                }
                VIEW::assign(array('indexauth'=>$this->indexauth,'data'=>$data,'tag'=>$tag));
                VIEW::display('index/edit-article.html');
            }
        }

        /*发表文章、编辑文章处理程序*/
        public function articlepublish(){
            if($this->checklgn("index.php?controller=index&method=article")){
                $articleobj = M('article');
                $result = $articleobj->submit($_POST);
                $jsonobj['result'] = $result;
                $jsonobj['insert_id'] = $articleobj->insert_id;
                $jsonobj['update_id'] = $articleobj->update_id;
                echo json_encode($jsonobj);
            }
        }

        /*文章发表成功页面*/
        public function articlesavesuccess(){
            if($this->checklgn("index.php?controller=index&method=article") && !empty($_GET['id'])){
                VIEW::assign(array('indexauth'=>$this->indexauth));
                VIEW::display('index/article-savesuccess.html');
            }else{
                $this->showmessage("对不起你的操作有误！","index.php?controller=index&method=article");
            }
        }

        /*问答部分*/
        public function wenda(){
            $page_banner = "";
            $page = empty($_GET['page'])?1:$_GET['page'];
            $indexauthobj = M('indexauth');
            $this->indexauth = $indexauthobj->getindexauth();
            $myid = empty($this->indexauth)?'':$this->indexauth['id'];
            $wendaobj = M('wenda');
            $tag = '';
            if(empty($_GET['id'])){
                if(!empty($_GET['status']) && empty($_GET['tag'])){
                    $wenda = $wendaobj->findAll_orderby_status($_GET['status'],$page);
                    $page_banner = $wendaobj->set_status_pages($_GET['status'],$page);
                }elseif(empty($_GET['status']) && !empty($_GET['tag'])){
                    $wenda = $wendaobj->findAll_by_tag($_GET['tag'],$page);
                    $page_banner = $wendaobj->set_tag_pages($_GET['tag'],$page);
                    $tag = $wendaobj->tag_name;
                }elseif(!empty($_GET['status']) && !empty($_GET['tag'])){
                    $wenda = $wendaobj->findAll_by_tag_and_status($_GET['tag'],$_GET['status'],$page);
                    $page_banner = $wendaobj->set_tag_status_pages($_GET['tag'],$_GET['status'],$page);
                    $tag = $wendaobj->tag_name;
                }else{
                    $wenda = $wendaobj->findAll_orderby_create_at($page);
                    $page_banner = $wendaobj->set_index_pages($page);
                }
                $hot_answer = $wendaobj->get_something('id,title,read_num,answer_num','answer_num',5);
                VIEW::assign(array('indexauth'=>$this->indexauth,'wenda'=>$wenda,'tag'=>$tag,'hot_answer'=>$hot_answer,'page_banner'=>$page_banner));
                VIEW::display('index/wenda.html');
            }else{
                if($wendaobj->get_status($_GET['id']) && $wendaobj->check_user_status_by_aqid($_GET['id'])){
                    $wendaobj->add_one_read($_GET['id']);
                    $wenda_data = $wendaobj->get_one_info($_GET['id'],$myid);
                    $related_wenda = $wendaobj->get_other_by_tag($wenda_data['tag'],$_GET['id']);
                    $answer_data = $wendaobj->get_answer_by_qid($_GET['id'],$myid);
                    $answer_num = $wendaobj->get_answer_num($_GET['id']);
                    // print_r($answer_data);
                    $user_info = $wendaobj->get_user_art_by_username($wenda_data['author']);
                    VIEW::assign(array('indexauth'=>$this->indexauth,'wenda_data'=>$wenda_data,'answer_data'=>$answer_data,'answer_num'=>$answer_num,'user_info'=>$user_info,'related_wenda'=>$related_wenda));
                    VIEW::display('index/wenda-detail.html');
                }else{
                    $this->showmessage("对不起问题已经失效！","index.php?controller=index&method=wenda");
                }
            }
        }

        /*问题发表、编辑*/
        public function wendawrite(){
            if($this->checklgn("index.php?controller=index&method=wenda")){
                $wendaobj = M('wenda');
                $tag = $wendaobj->get_id_and_tag_name();
                // 读取旧信息，需要传递id,$_GET['id'],也就是如果有$_GET['id']说明是修改操作
                if(isset($_GET['id'])){
                    $is_author = $wendaobj->check_is_author($_GET['id'],$this->indexauth['username']);
                    // 判断是否为作者，作者才有修改操作
                    if($is_author){
                        $data = $wendaobj->get_one_info($_GET['id']);
                    }else{
                        $this->showmessage("对不起你的操作有误！","index.php?controller=index&method=article");
                    }
                }else{
                    // 否则是添加操作
                    $data = array();
                }
                VIEW::assign(array('indexauth'=>$this->indexauth,'data'=>$data,'tag'=>$tag));
                VIEW::display('index/edit-question.html');
            }
        }

        /*问题发表、编辑处理程序*/
        public function wendasave(){
            if($this->checklgn("index.php?controller=index&method=wenda")){
                $wendaobj = M('wenda');
                $result = $wendaobj->submit($_POST);
                $jsonobj['result'] = $result;
                $jsonobj['insert_id'] = $wendaobj->insert_id;
                $jsonobj['update_id'] = $wendaobj->update_id;
                echo json_encode($jsonobj);
            }
        }

        /*问题发表成功*/
        public function wendasavesuccess(){
            if($this->checklgn("index.php?controller=index&method=wenda") && !empty($_GET['id'])){
                VIEW::assign(array('indexauth'=>$this->indexauth));
                VIEW::display('index/wenda-savesuccess.html');
            }else{
                $this->showmessage("对不起你的操作有误！","index.php?controller=index&method=wenda");
            }
        }

        /*搜索页面*/
        public function search(){
            $page_banner = "";
            $page = empty($_GET['page'])?1:$_GET['page'];
            $pagesize = 20;
            $keyword = empty($_GET['word'])?'':$_GET['word'];
            $indexauthobj = M('indexauth');
            $this->indexauth = $indexauthobj->getindexauth();
            $articleobj = M('article');
            $count_article = $articleobj->search_by_key_count($keyword);
            $wendaobj = M('wenda');
            $count_wenda = $wendaobj->search_by_key_count($keyword);
            if(!empty($_GET['type']) && $_GET['type']=='article'){
                $article_data = $articleobj->search_by_key($keyword,$page,$pagesize);
                $page_banner = $articleobj->set_search_pages($keyword,$page);
                $count = $count_article;
                VIEW::assign(array('indexauth'=>$this->indexauth,'article_data'=>$article_data,'page_banner'=>$page_banner,'pagesize'=>$pagesize,'count'=>$count,'keyword'=>$keyword));
                VIEW::display('index/search-article.html');
            }elseif(!empty($_GET['type']) && $_GET['type']=='wenda'){
                $wenda_data = $wendaobj->search_by_key($keyword,$page,$pagesize);
                $page_banner = $wendaobj->set_search_pages($keyword,$page);
                $count = $count_wenda;
                VIEW::assign(array('indexauth'=>$this->indexauth,'wenda_data'=>$wenda_data,'page_banner'=>$page_banner,'pagesize'=>$pagesize,'count'=>$count,'keyword'=>$keyword));
                VIEW::display('index/search-wenda.html');
            }else{
                $article_data = $articleobj->search_by_key_limit($keyword,5);
                $wenda_data = $wendaobj->search_by_key_limit($keyword,5);
                $count = $count_article + $count_wenda;
                VIEW::assign(array('indexauth'=>$this->indexauth,'article_data'=>$article_data,'wenda_data'=>$wenda_data,'count_article'=>$count_article,'count_wenda'=>$count_wenda,'count'=>$count,'keyword'=>$keyword));
                VIEW::display('index/search.html');
            }
        }

        /*用户部分*/
        public function user(){
            $page_banner = "";
            $page = empty($_GET['page'])?1:$_GET['page'];
            $homepagesize = 10;
            $pagesize = 20;
            $follower_pagesize = 24;
            $indexauthobj = M('indexauth');
            $this->indexauth = $indexauthobj->getindexauth();
            $myid = empty($this->indexauth)?'':$this->indexauth['id'];
            $userobj = M('user');
            if(empty($_GET['id'])){
                $this->showmessage("对不起你的操作有误！","index.php");
            }else{
                $user_info = $userobj->get_user_by_id($_GET['id'],$myid);
                // print_r($user_info);
                if(!empty($user_info)){
                    if(!empty($_GET['menu']) && $_GET['menu']=='articles'){
                        if(!empty($_GET['type']) && $_GET['type']=='collect'){
                            $collect_data = $userobj->find_collect_by_uid($user_info['id'],$page);
                            $page_banner = $userobj->set_collect_page($user_info['id'],$page);
                            $count = $userobj->get_collect_count($user_info['id']);
                            // print_r($collect_data);
                            VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info,'collect_data'=>$collect_data,'pagesize'=>$pagesize,'count'=>$count,'page_banner'=>$page_banner));
                            VIEW::display('index/user-article-collect.html');
                        }elseif(!empty($_GET['type']) && $_GET['type']=='praise'){
                            $praise_data = $userobj->find_praise_by_uid($user_info['id'],$page);
                            $page_banner = $userobj->set_praise_page($user_info['id'],$page);
                            $count = $userobj->get_praise_count($user_info['id']);
                            // print_r($praise_data);
                            VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info,'praise_data'=>$praise_data,'pagesize'=>$pagesize,'count'=>$count,'page_banner'=>$page_banner));
                            VIEW::display('index/user-article-praise.html');
                        }elseif(!empty($_GET['type']) && $_GET['type']=='comment'){
                            $comment_data = $userobj->find_comment_by_uid($user_info['id'],$page);
                            $page_banner = $userobj->set_comment_page($user_info['id'],$page);
                            $count = $userobj->get_comment_count($user_info['id']);
                            VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info,'comment_data'=>$comment_data,'pagesize'=>$pagesize,'count'=>$count,'page_banner'=>$page_banner));
                            VIEW::display('index/user-article-comment.html');
                        }else{
                            if(!empty($_GET['value'])){
                                $article_data = $userobj->select_by_status($user_info['username'],$_GET['value'],$page);
                                $count = $userobj->select_a_status_num($user_info['username'],$_GET['value']);
                                $page_banner = $userobj->set_article_value_page($_GET['id'],$user_info['username'],$_GET['value'],$page);
                            }else{
                                $article_data = $userobj->findAll_article_by_author($user_info['username'],$page);
                                $count = $userobj->find_article_num($user_info['username']);
                                $page_banner = $userobj->set_article_index_page($_GET['id'],$user_info['username'],$page);
                            }
                            $val = empty($_GET['value'])?'':$_GET['value'];
                            VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info,'article_data'=>$article_data,'homepagesize'=>$homepagesize,'count'=>$count,'val'=>$val,'page_banner'=>$page_banner));
                            VIEW::display('index/user-article.html');
                        }
                    }elseif(!empty($_GET['menu']) && $_GET['menu']=='bbs'){
                        if(!empty($_GET['sort']) && $_GET['sort']=='reply'){
                            $answer_data = $userobj->find_answer_by_uid($user_info['id'],$page);
                            // print_r($answer_data);
                            $page_banner = $userobj->set_answer_page($user_info['id'],$page);
                            $count = $userobj->get_answer_count($user_info['id']);
                            VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info,'answer_data'=>$answer_data,'pagesize'=>$pagesize,'count'=>$count,'page_banner'=>$page_banner));
                            VIEW::display('index/user-bbs-reply.html');
                        }elseif(!empty($_GET['sort']) && $_GET['sort']=='follow'){
                            $follow_data = $userobj->find_follow_by_uid($user_info['id'],$page);
                            $page_banner = $userobj->set_follow_page($user_info['id'],$page);
                            $count = $userobj->get_follow_count($user_info['id']);
                            // print_r($follow_data);
                            VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info,'follow_data'=>$follow_data,'pagesize'=>$pagesize,'count'=>$count,'page_banner'=>$page_banner));
                            VIEW::display('index/user-bbs-follow.html');
                        }else{
                            $wenda_data = $userobj->findAll_bbs_by_author($user_info['username'],$page);
                            $page_banner = $userobj->set_bbs_index_pages($_GET['id'],$user_info['username'],$page);
                            VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info,'wenda_data'=>$wenda_data,'page_banner'=>$page_banner));
                            VIEW::display('index/user-bbs.html');
                        }
                    }elseif(!empty($_GET['menu']) && $_GET['menu']=='follows'){
                        if(!empty($_GET['sort']) && $_GET['sort']=='fans'){
                            $fans_data = $userobj->find_fans_by_uid($user_info['id'],$myid,$page);
                            $page_banner = $userobj->set_fans_page($user_info['id'],$page);
                            $count = $userobj->get_fans_count($user_info['id']);
                            VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info,'fans_data'=>$fans_data,'follower_pagesize'=>$follower_pagesize,'count'=>$count,'page_banner'=>$page_banner));
                            VIEW::display('index/user-follows-fans.html');
                        }else{
                            $follower_data = $userobj->find_follower_by_uid($user_info['id'],$myid,$page);
                            $page_banner = $userobj->set_follower_page($user_info['id'],$page);
                            $count = $userobj->get_follower_count($user_info['id']);
                            VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info,'follower_data'=>$follower_data,'follower_pagesize'=>$follower_pagesize,'count'=>$count,'page_banner'=>$page_banner));
                            VIEW::display('index/user-follows.html');
                        }
                    }elseif(!empty($_GET['menu']) && $_GET['menu']=='setting' && $this->checklgn("index.php?controller=index&method=user&id={$_GET['id']}")){
                        if($this->indexauth['id'] === $_GET['id']){
                            $indexauthobj = M('indexauth');
                            $this->indexauth = $indexauthobj->get_login_again($_GET['id']);
                            // print_r($this->indexauth);
                            VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info));
                            VIEW::display('index/user-setting.html');
                        }else{
                            $this->showmessage("非法操作！","index.php?controller=index&method=user&id={$this->indexauth['id']}&menu=setting");
                        }
                    }else{
                        $user_dynamic = $userobj->findAll_user_dynamic_by_uid($_GET['id'],$myid);
                        // print_r($user_info);
                        VIEW::assign(array('indexauth'=>$this->indexauth,'user_info'=>$user_info,'user_dynamic'=>$user_dynamic));
                        VIEW::display('index/user-index.html');
                    }
                }else{
                    $this->showmessage("用户不存在！","index.php");
                }
            }
        }

        /*文章详情页，初始化数据，返回信息*/
        // public function userloading(){
        //     if(!empty($_POST)){
        //         $userobj = M('user');
        //         $result_isfollower = $userobj->check_is_follow('user_relation',$_POST['uid'],$_POST['fid']);
        //         $jsonobj['follow'] = $result_isfollower?'follow':'followed';
        //         echo json_encode($jsonobj);
        //     }
        // }

        public function ajaxpraise(){
            $this->ajaxuserdo(M('article'),'aid','insert_praise');
        }

        public function ajaxdelpraise(){
            $this->ajaxuserdo(M('article'),'aid','del_praise');
        }

        public function ajaxcollect(){
            $this->ajaxuserdo(M('article'),'aid','insert_collect');
        }

        public function ajaxdelcollect(){
            $this->ajaxuserdo(M('article'),'aid','del_collect');
        }

        public function ajaxfollow(){
            $this->ajaxuserdo(M('wenda'),'qid','insert_follow');
        }

        public function ajaxdelfollow(){
            $this->ajaxuserdo(M('wenda'),'qid','del_follow');
        }

        public function ajaxagree(){
            $this->ajaxuserdo(M('wenda'),'answer_id','insert_answer_agree');
        }

        public function ajaxdelagree(){
            $this->ajaxuserdo(M('wenda'),'answer_id','del_answer_agree');
        }

        public function ajaxuserfollow(){
            $this->ajaxuserdo(M('user'),'fid','insert_user_follow');
        }

        public function ajaxdeluserfollow(){
            $this->ajaxuserdo(M('user'),'fid','del_user_follow');
        }

        /*用户的推荐、收藏、关注、赞同操作*/
        public function ajaxuserdo($obj,$id,$method){
            if(!empty($_POST[$id]) && !empty($_POST['uid'])){
                $result = $obj->$method($_POST);
                switch ($result) {
                    case '1':
                        echo $this->success;
                        break;
                    default:
                        echo $this->fail;
                        break;
                }
            }else{
                echo $this->fail;
            }
        }

        /*用户文章评论操作*/
        public function ajaxcomment(){
            if(!empty($_POST['aid']) && !empty($_POST['from_uid'])){
                $articleobj = M('article');
                $articleobj->insert_comment($_POST);
                $jsonobj['insert_id'] = $articleobj->get_insert_id();
                $jsonobj['result'] = 'success';
            }else{
                $jsonobj['result'] = 'fail';
            }
            echo json_encode($jsonobj);
        }

        /*用户删除文章评论操作*/
        public function ajaxdelcomment(){
            if(!empty($_POST['aid']) && !empty($_POST['comment_id'])){
                M('article')->del_comment($_POST);
                echo $this->success;
            }else{
                echo $this->fail;
            }
        }

        /*用户文章回复操作*/
        public function ajaxarticlereply(){
            if(!empty($_POST['from_uid']) && !empty($_POST['to_uid'])){
                $articleobj = M('article');
                $articleobj->insert_reply($_POST);
                $jsonobj['insert_id'] = $articleobj->get_insert_id();
                $jsonobj['result'] = 'success';
            }else{
                $jsonobj['result'] = 'fail';
            }
            echo json_encode($jsonobj);
        }

        /*用户删除文章回复操作*/
        public function ajaxdelarticlereply(){
            if(!empty($_POST['reply_id'])){
                M('article')->del_reply($_POST['reply_id']);
                echo $this->success;
            }else{
                echo $this->fail;
            }
        }

        /*用户问题回答操作*/
        public function ajaxanswer(){
            if(!empty($_POST['qid']) && !empty($_POST['from_uid'])){
                $wendaobj = M('wenda');
                $wendaobj->insert_answer($_POST);
                $jsonobj['insert_id'] = $wendaobj->get_insert_id();
                $jsonobj['result'] = 'success';
            }else{
                $jsonobj['result'] = 'fail';
            }
            echo json_encode($jsonobj);
        }

        /*用户删除问题回答操作*/
        public function ajaxdelanswer(){
            if(!empty($_POST['qid']) && !empty($_POST['answer_id'])){
                M('wenda')->del_answer($_POST);
                echo $this->success;
            }else{
                echo $this->fail;
            }
        }

        /*用户问题回复操作*/
        public function ajaxwendareply(){
            if(!empty($_POST['from_uid']) && !empty($_POST['to_uid'])){
                $wendaobj = M('wenda');
                $wendaobj->insert_reply($_POST);
                $jsonobj['insert_id'] = $wendaobj->get_insert_id();
                $jsonobj['result'] = 'success';
            }else{
                $jsonobj['result'] = 'fail';
            }
            echo json_encode($jsonobj);
        }

        /*用户删除问题回复操作*/
        public function ajaxdelwendareply(){
            if(!empty($_POST['reply_id'])){
                M('wenda')->del_reply($_POST['reply_id']);
                echo $this->success;
            }else{
                echo $this->fail;
            }
        }


        /*用户删除文章、问题ajax*/
        public function ajaxdelarticle(){
            $this->ajaxdel('del_one','del_by_aid');
        }

        public function ajaxdelarticlemore(){
            $this->ajaxdel('del_more','del_by_moreaid');
        }

        public function ajaxdelwenda(){
            $this->ajaxdel('del_one','del_by_qid');
        }

        public function ajaxdelwendamore(){
            $this->ajaxdel('del_more','del_by_moreqid');
        }

        /*用户删除文章、问题*/
        public function ajaxdel($and,$method){
            if(!empty($_POST['id']) && !empty($_POST['do']) && $_POST['do']==$and){
                $userobj = M('user');
                $userobj->$method($_POST);
                echo $this->success;
            }else{
                echo $this->fail;
            }
        }

        /*用户上传头像*/
        public function uploadavatar(){
            if(!empty($_FILES) && !empty($_GET['id'])){
                $avatarobj = M('avatar');
                $result = $avatarobj->avatar_upload($_GET['id']);
                if($result){
                    $this->showmessage("头像上传成功~",'index.php?controller=index&method=user&id='.$_GET['id'].'&menu=setting');
                }else{
                    $this->showmessage("头像上传失败！",'index.php?controller=index&method=user&id='.$_GET['id'].'&menu=setting');
                }
            }else{
                $this->showmessage('对不起你的操作有误！','index.php');
            }
        }

        /*用户修改个人信息*/
        public function ajaxinfosave(){
            if($this->checkpostid()){
                $userobj = M('user');
                $result = $userobj->update_user_info($_POST);
                if($result){
                    $resultobj['result'] = $this->success;
                }else{
                    $resultobj['result'] = $this->fail;
                }
                echo json_encode($resultobj);
            }
        }

        /*用户修改密码*/
        public function ajaxpwdsave(){
            if($this->checkpostid()){
                $userobj = M('user');
                $result = $userobj->update_user_pwd($_POST);
                if($result){
                    $resultobj['result'] = $this->success;
                }else{
                    $resultobj['result'] = $this->fail;
                }
                echo json_encode($resultobj);
            }
        }

        /*校验POST数据是否存在以及id是否存在*/
        public function checkpostid(){
            if(!empty($_POST) && !empty($_POST['id'])){
                return true;
            }else{
                $this->showmessage('非法操作！','index.php');
                return false;
            }
        }

    }
?>