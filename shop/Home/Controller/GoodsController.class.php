<?php

//商品控制器
//命名空间
namespace Home\Controller;
use Think\Controller;
//Controller父类：ThinkPHP/Library/Think/Controller.class.php
class GoodsController extends Controller{
    //商品列表展示
    function showlist(){
        $this -> display();
    }
    //详情
    function detail(){
        $this -> display();
    }
}