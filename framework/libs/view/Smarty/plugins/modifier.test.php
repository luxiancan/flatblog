<?php
    // 变量调节器插件
    function smarty_modifier_test($utime,$format){
        return date($format,$utime);
    }
?>