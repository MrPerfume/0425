<?php
//后台商品控制器
namespace Admin\Controller;
use Think\Controller;
//Controller父类：ThinkPHP/Library/Think/Controller.class.php
class GoodsController extends Controller{
    //列表展示
    function showlist(){
        $this -> display();
    }
    //添加商品
    function tianjia(){
        $this -> display();
    }
    //修改商品
    function upd(){
        $this -> display();
    }
}
