<?php
    function C($name,$method){
        require_once("./libs/Controller/".$name."Controller.class.php");
        // eval("$obj = new ".$name."Controller();$obj->".$method."();");
        $name = $name.'Controller';
        $obj = new $name;
        $obj -> $method();
    }

    function M($name){
        require_once('./libs/Model/'.$name.'Model.class.php');
        // $testModel = new testModel();
        // eval('$obj = new '.$name.'Model();');
        $name = $name.'Model';
        $obj = new $name;
        return $obj;
    }

    function V($name){
        require_once('./libs/View/'.$name.'View.class.php');
        // $testView = new testView();
        // eval('$obj = new '.$name.'View();');
        $name = $name.'View';
        $obj = new $name;
        return $obj;
    }

    function ORG($path, $name, $params=array()){
        require_once('libs/ORG/'.$path.$name.'.class.php');
        $obj = new $name();
        if(!empty($params)){
            foreach($params as $key=>$value){
                $obj->$key = $value;
            }
        }
        return $obj;
    }

    function daddslashes($str){
        return (!get_magic_quotes_gpc())?addslashes($str):$str;
    }
?>
