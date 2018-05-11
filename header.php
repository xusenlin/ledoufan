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
<?php
    $siteUrl = get_bloginfo( 'url', 'display' );
    $navInfo = [
        ''=>[
            'title'=>'网站首页',
            'class'=>'',
            'child'=>[
                    ['title'=>'关于我们','class'=>''],
                    ['title'=>'新闻资讯','class'=>'']
            ]
        ],
        'about'=>[
            'title'=>'关于我们',
            'class'=>'',
            'child'=>[
                ['title'=>'公司简介','class'=>''],
                ['title'=>'企业文化','class'=>''],
                ['title'=>'公司资质','class'=>''],
                ['title'=>'企业荣誉','class'=>''],
                ['title'=>'发展历程','class'=>''],
            ]
        ],
        'news'=>[
            'title'=>'新闻资讯',
            'class'=>'',
            'child'=>[
                ['title'=>'公司动态','class'=>''],
                ['title'=>'行业动态','class'=>''],
            ]
        ],
        'food'=>[
            'title'=>'美食文化',
            'class'=>'',
            'child'=>[
                ['title'=>'豆腐美食','class'=>''],
                ['title'=>'豆腐宴','class'=>''],
            ]
        ],
        'product'=>[
            'title'=>'公司产品',
            'class'=>'',
            'child'=>[
                ['title'=>'产品展示','class'=>''],
                ['title'=>'天猫商城','class'=>'icon'],
            ]
        ],
        'hierarchy'=>[
            'title'=>'溯源体系',
            'class'=>'ict1',
            'child'=>[
                ['title'=>'原产料基地','class'=>''],
            ]
        ],
        'affiliate'=>[
            'title'=>'连锁加盟',
            'class'=>'ict2',
            'child'=>[
                ['title'=>'连锁加盟','class'=>''],
            ]
        ],
        'contact'=>[
            'title'=>'联系我们',
            'class'=>'item ict3',
            'child'=>[
                ['title'=>'联系方式','class'=>''],
                ['title'=>'在线招聘','class'=>''],
            ]
        ],
    ];
    $slugs = is_page() ? get_post($post->ID, ARRAY_A)['post_name'] : '';

?>
<header>
    <div class="container header">
        <a href="#" class="header-logo"></a>
        <ul class="header-nav" id="nav">
            <?php
            
                foreach ($navInfo as $k=>$item){
                    $classActive = $k == $slugs ? " active" : "";
                    echo '<li><a class="'.$item['class'].$classActive.'" href="'.$siteUrl.'/'.$k.'">'.$item['title'].'</a>';
                    echo '<ul class="header-nav-list">';
                    foreach ($item['child'] as $key=>$value){
                        if($value['class'] == 'icon')
                            echo '<li class="icon"><a href="'.$siteUrl.'/'.$k.'?id='.$key.'">'.$value['title'].'</a></li>';
                        else
                            echo '<li><a href="'.$siteUrl.'/'.$k.'?id='.$key.'">'.$value['title'].'</a></li>';
                    }
                    echo '</ul>';
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
</header>
<div class="top">
    <img src="<?php bloginfo('template_url'); ?>/img/top-img.jpg">
    <div class="top-item">欢迎来到乐豆坊食品有限公司</div>
</div>
