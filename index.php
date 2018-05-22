<?php
include 'header.php';
?>
<div class="top">
    <img src="<?php bloginfo('template_url'); ?>/img/top-img.jpg">
    <div class="top-item">欢迎来到乐豆坊食品有限公司</div>
</div>
<div class="index">
    <div class="about-us">
        <div class="container">
            <div class="left-img">
                <?php
                $catid =$categoryNameToId['公司简介'];//获取id
                $data = get_posts(['category'=>$catid,'numberposts'=>1]);
                ?>
                <?php foreach ($data as $ietm):?>
               <?php  $img_id = get_post_thumbnail_id($ietm->ID);
                       $img_url = wp_get_attachment_image_src($img_id,'full');
                       $img_url = $img_url[0];?>
                <img class="imgsd" src="<?php echo $img_url; ?>" alt="">
            </div>

            <div class="right-characters">
                <div class="center-top right-characters-top">
                    <span class="item1">关于我们</span>
                    <span class="item2"></span>
                    <span class="item3">ABOUT US</span>
                </div>
                <p class="conten-p">
                    <?php echo $ietm->post_excerpt;?>
                </p>
                <a href="<?php echo $siteUrl;?>/?p=<?php echo $ietm->ID.'&&tag='.$slugs; ?>">
                    <img class="right-point" src="<?php bloginfo('template_url'); ?>/img/right-point.png" alt="">
                </a>
            <?php endforeach;?>
            </div>
        </div>
        </div>

    <div class="bottom container">
        <div class="list-left">
                    <div class="center-top">
                        <span class="item1">新闻中心</span>
                        <span class="item2"></span>
                        <span class="item3">NEWS</span>
                    </div>
        </div>
        <div class="news">
            <ul class="new-ul clearfloat">
            <?php
            $catid =$categoryNameToId['新闻资讯'];//获取id
            $data = get_posts(['category'=>$catid,'numberposts'=>3]);
            ?>
                <?php foreach ($data as $ietm):
                    $img_id = get_post_thumbnail_id($ietm->ID);
                    $img_url = wp_get_attachment_image_src($img_id,'full');
                    $img_url = $img_url[0];
                    ?>
                <li class="new-list-left">
                    <div class="left">
                        <h3><?php echo $ietm->post_title; ?></h3>
                        <p class="ppkk">
                            <?php echo $ietm->post_excerpt;?>
                        </p>
                        <div class="sape">
                             <a href="<?php echo $siteUrl;?>/?p=<?php echo $ietm->ID.'&&tag='.$slugs;?>">
                                <img class="img-left" src="<?php bloginfo('template_url'); ?>/img/right-point.png" alt="">
                            </a>
                            <p class="ppppp"><?php echo  substr($ietm->post_date,0,10);?></p>
                        </div>
                    </div>
                    <img class="img-right" src="<?php echo $img_url;?>" alt="">
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>