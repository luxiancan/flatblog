<?php
class mysql{
    /*报错函数*/
    function err($error){
        die("对不起，您的操作有误，错误原因为：".$error);
    }

    /*连接数据库
    @$config配置数组 array($dbhost,$dbuser,$dbpsw,$dbname,$dbcharset)
    @return bool 连接成功或不成功*/
    function connect($config){
        extract($config);
        if(!($con = mysql_connect($dbhost,$dbuser,$dbpsw))){
            $this->err(mysql_error());
        }
        if(!mysql_select_db($dbname,$con)){
            $this->err(mysql_error());
        }
        mysql_query("set names ".$dbcharset);
    }

    /*执行sql语句
    @param string $sql
    @return bool 返回执行成功、资源或执行失败*/
    function query($sql){
        if(!($query = mysql_query($sql))){
            $this->err($sql."<br/>".mysql_error());
        }else{
            return $query;
        }
    }

    // 列表,多条数据
    // @param source $query sql语句通过mysql_query执行出来的资源
    // @return array 返回列表数组
    function findAll($query){
        while($rs=mysql_fetch_array($query,MYSQL_ASSOC)){
            $list[] = $rs;
        }
        return isset($list)?$list:"";
    }


    // 单条数据
    // @param source $query sql语句通过mysql_query执行出来的资源
    // @return array 返回单条信息数组
    function findOne($query){
        $rs = mysql_fetch_array($query,MYSQL_ASSOC);
        return $rs;
    }

    /*指定行的指定字段的值
    @param source $query sql语句通过mysql_query执行出来的资源
    @return array 返回指定行的指定字段的值*/
    function findResult($query, $row = 0, $filed = 0){
        $rs = mysql_result($query,$row,$filed);
        return $rs;
    }

    /*添加数据
    @param string $table表名
    @param array $arr 添加数据（包含字段和值的一维数组）*/
    function insert($table,$arr){
        foreach($arr as $key=>$value){
            $value = mysql_real_escape_string($value);
            $keyArr[] = "`".$key."`"; //把$arr数组当中的键名保存到$keyArr数组当中
            $valueArr[] = "'".$value."'"; //把$arr数组当中的的键值保存到$valueArr当中
        }
        $keys = implode(",",$keyArr); //implode是把数组组合成字符串
        $values = implode(",",$valueArr);
        $sql = "insert into ".$table."(".$keys.") values(".$values.")"; //sql的插入语句，格式:insert into 表(多个字段) values(多个值)
        $this->query($sql); //调用类自身的query方法执行这条sql语句
        return mysql_insert_id();
    }

    /*修改函数
    @param string $table 表名
    @param array $arr 修改数组(包含字段和值的一维数组)
    @param string $where 条件*/
    function update($table,$arr,$where){
        // update 表名 set 字段=字段值 where...
        foreach($arr as $key=>$value){
            $value = mysql_real_escape_string($value);
            $keyAndvalueArr[] = "`".$key."`='".$value."'";
        }
        $keyAndvalues = implode(",",$keyAndvalueArr);
        $sql = "update ".$table." set ".$keyAndvalues." where ".$where; //修改操作 格式:update 表名 字段=值 where 条件
        $this->query($sql);
    }

    /*删除函数
    @param string $table 表名
    @param string $where 条件*/
    function del($table,$where){
        $sql = "delete from ".$table." where ".$where; //删除sql语句 格式:delete from 表名 where 条件
        $this->query($sql);
    }

}

?>
