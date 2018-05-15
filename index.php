<?php
include 'header.php';
?>
<div class="index">
    <div class="about-us">
        <div class="container">
            <div class="left-img">
                <img src="<?php ?>" alt="">
            </div>

            <div class="right-characters">
                <div class="center-top right-characters-top">
                    <span class="item1">关于我们</span>
                    <span class="item2"></span>
                    <span class="item3">ABOUT US</span>
                </div>

                <?php
                $args=array(
                    'cat' => $categoryNameToId['关于我们'],   // 分类ID
                    'posts_per_page' => 1, // 显示篇数
                );?>
                <?php
                query_posts($args);
                 if(have_posts()) : while (have_posts()) : the_post();
                if (has_excerpt()) {?>
                    <p class="conten-p">
                          <?php echo $description = get_the_excerpt();?>
                    </p>
          <?php  }else {
                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 170,"……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
            } ?>
             <?php endwhile; endif; wp_reset_query(); ?>

                <a href=""><img class="right-point" src="<?php bloginfo('template_url'); ?>/img/right-point.png" alt=""></a>
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
            <ul class="new-ul">
            <?php
            $catid =$categoryNameToId['新闻资讯'];//获取id
            $data = get_posts(['category'=>$catid,'numberposts'=>3]);
//var_dump($data);die();
            ?>
                <?php foreach ($data as $ietm): ?>

                <li class="new-list-left">
                    <div class="left">
                        <h3><?php echo $ietm->post_title; ?></h3>
                        <p class="ppkk">
                            <?php echo $ietm->post_excerpt;?>

                        </p>

                        <div class="sape">
                             <a href="<?php echo $siteUrl;?>/?p=<?php echo $ietm->ID;?>">
                                <img class="img-left" src="<?php bloginfo('template_url'); ?>/img/right-point.png" alt="">
                            </a>
                            <p class="ppppp"><?php echo  substr($ietm->post_date,0,10);//字符串截取?></p>
                        </div>
                    </div>
                    <img class="img-right" src="<?php ;?>" alt="">
                </li>
                <?php endforeach; ?>
                <!--                <li class="new-list-left">-->
<!--                    <div class="left">-->
<!--                        <h3>攀枝花李先生成功签约宏油庄</h3>-->
<!--                        <p class="ppkk">隆先生是在攀枝花宏油庄冒菜店，经常吃冒菜的冒菜店，经常吃冒菜的隆先生是在攀枝花-->
<!--                            宏油庄冒菜店，经常吃冒菜的冒菜店，经常吃                  </p>-->
<!--                        <span class="sape">-->
<!--                             <a href="">-->
<!--                                <img class="img-left" src="--><?php //bloginfo('template_url');?><!--/img/right-point.png" alt="">-->
<!--                            </a>-->
<!--                            <p class="ppppp">2014-02-01</p>-->
<!--                        </span>-->
<!--                    </div>-->
<!--                    <img class="img-right" src="--><?php //bloginfo('template_url');?><!--/img/list-right2.png" alt="">-->
<!--                </li>-->
<!--                <li class="new-list-left">-->
<!--                    <div class="left">-->
<!--                        <h3>攀枝花李先生成功签约宏油庄</h3>-->
<!--                        <p class="ppkk">隆先生是在攀枝花宏油庄冒菜店，经常吃冒菜的冒菜店，经常吃冒菜的隆先生是在攀枝花-->
<!--                            宏油庄冒菜店，经常吃冒菜的冒菜店，经常吃                  </p>-->
<!--                        <span class="sape">-->
<!--                             <a href="">-->
<!--                                <img class="img-left" src="--><?php //bloginfo('template_url'); ?><!--/img/right-point.png" alt="">-->
<!--                            </a>-->
<!--                            <p class="ppppp">2014-02-01</p>-->
<!--                        </span>-->
<!--                    </div>-->
<!--                    <img class="img-right" src="--><?php //bloginfo('template_url'); ?><!--/img/list-right2.png" alt="">-->
<!--                </li>-->
            </ul>
        </div>
    </div>
</div>
<script>
</script>

<?php
include 'footer.php';
?>