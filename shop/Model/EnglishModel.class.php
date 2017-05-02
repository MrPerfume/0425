<?php

//命名空间 php5.3以后版本支持
namespace Model;
use Think\Model;

//Goods模型model类
//父类：ThinkPHP/Library/Think/Model.class.php
//以下goods的model类就是一个空类，不影响对数据库的操作
//因为 tp框架已经把许多简单操作封装给Model了
class EnglishModel extends Model{
    //自定义当前model操作的真实数据表名字
    // 实际数据表名（包含表前缀）
    protected $trueTableName    =   'english';
}
