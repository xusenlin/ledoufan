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
<?php include_once 'config.php' ?>
<header>
    <div class="container header">
        <a href="#" class="header-logo"></a>
        <ul class="header-nav" id="nav">
            <?php
            
                foreach ($navInfo as $k=>$item){
                    $id_url=$categoryNameToId[$item["child"][0]["title"]];
                    $classActive = $k == $slugs ? " active" : "";

                    if($slugs == 'job' && $k == 'contact')$classActive = ' active';
                    echo '<li><a class="'.$item['class'].' ' .$classActive.'" href="'.$siteUrl.'/'.$k.'?id='.$id_url.'">'.$item['title'].'</a>';
                    echo '<ul class="header-nav-list">';
                    foreach ($item['child'] as $key=>$value){
                        $hasIconClass = $value['class'] == 'icon' ? 'icon' : '';
                        if($value['url'])
                            echo '<li class="'.$hasIconClass.'"><a href="'.$value["url"].'">'.$value['title'].'</a></li>';
                        else
                            echo '<li class="'.$hasIconClass.'"><a href="'.$siteUrl.'/'.$k.'?id='.$categoryNameToId[$value['title']].'">'.$value['title'].'</a></li>';

                    }
                    echo '</ul>';
                    echo '</li>';
                }
            ?>
        </ul>
    </div>
</header>

