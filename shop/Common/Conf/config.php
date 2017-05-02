<?php
return array(
    //'配置项'=>'配置值'

    //在页面底部设置显示跟踪信息
    'SHOW_PAGE_TRACE' => true,

    //设置请求的默认分组
    'DEFAULT_MODULE'  => 'Home',  // 默认模块
    'MODULE_ALLOW_LIST'=> array('Home','Admin'),//设置一个对比的分组列表

    //开启Smarty模板引擎
    'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 默认模板引擎

    //给smarty做相关配置
    //'TMPL_ENGINE_CONFIG' => array(
        //    'left_delimiter'  => '<%%%',
        //    'right_delimiter'  => '%%%>',
   // ),
);