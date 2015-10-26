<?php
/*
    PHP 接受 FMS 的 POST 请求使用 Smarty 渲染页面
*/
date_default_timezone_set("Shanghai/Asia");

function __object_array ($array) {
    if(is_object($array)) {  
        $array = (array)$array;  
    }
    if(is_array($array)) {  
        foreach ($array as $key=>$value) {
            $array[$key] = __object_array($value);
        }  
    }
     return $array;  
}
$__settings = __object_array(json_decode($_POST['_fms']));
/*
    template => "/Users/nimojs/Documents/git/fms-demo/simple/view/test.php"
    templateDir => "/Users/nimojs/Documents/git/fms-demo/simple/"
    templatePluginDir => /Users/nimojs/Documents/git/fms-demo/simple/plugin/
    data => {"name":1}
*/

// smarty 初始化
require('libs/Smarty.class.php');
$_smarty = new Smarty();

// 设置模板目录
$_smarty->setTemplateDir($__settings['templateDir']);

// 渲染数据
foreach ($__settings['data'] as $key => $value) {
$_smarty->assign($key, $value);
}
// 渲染页面
$_smarty->display($__settings['template']);