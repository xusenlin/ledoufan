<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php if ( is_home() ) {
            bloginfo('name'); echo " - ";
            bloginfo('description');
        } elseif ( is_category() ) {
            single_cat_title(); echo " - ";
            bloginfo('name');
        } elseif (is_single() || is_page() ) {
            single_post_title();
        } elseif (is_search() ) {
            echo "搜索结果"; echo " - ";
            bloginfo('name');
        } elseif (is_404() ) {
            echo '页面未找到!';
        } else {
            wp_title('',true);
        } ?>
    </title>
    <link href="<?php bloginfo('template_url'); ?>/css/base.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/common.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" rel="stylesheet">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
</head>
<body>

<header>
    <div class="container header">
        <a href="#" class="header-logo"></a>
        <ul class="header-nav">
            <li>
                <a href="<?php bloginfo('url');?>">网站首页</a>
                <ul class="header-nav-list">
                    <li><a href="#">关于我们</a></li>
                    <li><a href="#">新闻资讯</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/about">关于我们</a>
                <ul class="header-nav-list">
                    <li><a href="<?php bloginfo('url');?>/about?id=1">公司简介</a></li>
                    <li><a href="<?php bloginfo('url');?>/about?id=2">企业文化</a></li>
                    <li><a href="<?php bloginfo('url');?>/about?id=3">公司资质</a></li>
                    <li><a href="<?php bloginfo('url');?>/about?id=4">企业荣誉</a></li>
                    <li><a href="<?php bloginfo('url');?>/about?id=5">发展历程</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/news">新闻资讯</a>
                <ul class="header-nav-list">
                    <li><a href="<?php bloginfo('url');?>/news?id=1">公司动态</a></li>
                    <li><a href="<?php bloginfo('url');?>/news?id=2">行业动态</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/food">美食文化</a>
                <ul class="header-nav-list">
                    <li><a href="<?php bloginfo('url');?>/food?id=1">豆腐美食</a></li>
                    <li><a href="<?php bloginfo('url');?>/food?id=2">豆腐宴</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/product">公司产品</a>
                <ul class="header-nav-list">
                    <li><a href="<?php bloginfo('url');?>/product?id=1">产品展示</a></li>
                    <li class="icon"><a href="<?php bloginfo('url');?>/product?id=2">天猫商城</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/hierarchy" class="ict1">溯源体系</a>
                <ul class="header-nav-list">
                    <li><a href="<?php bloginfo('url');?>/hierarchy?id=1">原产料基地</a></li>
                </ul>
            </li>

            <li> <li>
                <a href="<?php bloginfo('url');?>/affiliate" class="ict2">连锁加盟</a>
                <ul class="header-nav-list">
                    <li><a href="<?php bloginfo('url');?>/affiliate?id=1">连锁加盟</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/contact" class="item ict3">联系我们</a>
                <ul class="header-nav-list">
                    <li><a href="<?php bloginfo('url');?>/contact?id=1">联系方式</a></li>
                    <li><a href="<?php bloginfo('url');?>/contact?id=2">在线招聘</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
<div class="top">
    <img src="<?php bloginfo('template_url'); ?>/img/top-img.jpg">
    <div class="top-item">欢迎来到乐豆坊食品有限公司</div>
</div>
