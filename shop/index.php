<?php
/**
 * Created by PhpStorm.
 * User: 83571
 * Date: 2017/4/25
 * Time: 21:34
 */

//解决乱码问题
header('content-type:text/html;charset=utf-8');

//设置模式
define('APP_DEBUG',true);  //true为开发模式
//define('APP_DEBUG',false);  //生产模式

//给系统静态资源文件请求路径设置常量
//Home前台
define('CSS_URL','/shop/Home/Public/css/');
define('IMG_URL','/shop/Home/Public/images/');
define('JS_URL','/shop/Home/Public/js/');
//Admin后台
define('ADMIN_CSS_URL','/shop/Admin/Public/css/');
define('ADMIN_IMG_URL','/shop/Admin/Public/img/');
define('ADMIN_JS_URL','/shop/Admin/Public/js/');


//引入php框架
include '../ThinkPHP/ThinkPHP.php';