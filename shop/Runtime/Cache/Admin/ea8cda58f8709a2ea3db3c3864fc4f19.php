<?php if (!defined('THINK_PATH')) exit();?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
    </head>
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
        <!--frame的src属性值需要通过“绝对路径”设置
        具体写法，需要设置一个具体的路由地址
        例如：http://web.0811.com/shop/index.php/Admin/Index/head.html
        -->
        <frame name=head src="/shop/index.php/Admin/Index/head.html" frameborder=0 noresize scrolling=no />
            <frameset cols="170, *">
                <frame name=left src="/shop/index.php/Admin/Index/left.html" frameborder=0 noresize />
                <frame name=right src="/shop/index.php/Admin/Index/right.html" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html>