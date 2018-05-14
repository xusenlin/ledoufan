<?php
include 'header.php';
?>
<div class="index">
    <div class="about-us">
        <div class="container">
            <div class="left-img">
                <img src="<?php echo catch_that_image() ?>" alt="">
            </div>

            <div class="right-characters">
                <div class="center-top right-characters-top">
                    <span class="item1">关于我们</span>
                    <span class="item2"></span>
                    <span class="item3">ABOUT US</span>
                </div>
                <?php
                $args=array(
                    'cat' => 1,   // 分类ID
                    'posts_per_page' => 1, // 显示篇数
                );
                query_posts($args);
                if(have_posts()) : while (have_posts()) : the_post();
                ?>
                <p class="conten-p">
                    <?php the_excerpt(); ?>
<!--                    贵州大学明德学院数字传媒系成立于2014年，设有数字媒体艺术、数字媒体艺术、艺术与科技、视觉传达与设计四个专业。围绕贵州大数据贵州创意文化产业，以泰豪创意产业集群为依托平台，以“互联网+文化/艺术/产品”为指导思想示范效应的数字艺术、技术人才培养高地干货黄金客户好几个号结构化即可国家法规环境法规和见过好几个环节赶紧回家都给他凡人歌人控股集团考虑过深刻了解公司考虑到该 我看过图片搜几个登记公司考虑到该。-->
                </p>
                <?php  endwhile; endif; wp_reset_query(); ?>
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
        <div class="left-list">
            <ul>
                <li class="list-li">
                    <?php
                    $args=array(
                        'cat' => 12,   // 分类ID
                        'posts_per_page' => 3, // 显示篇数
                    );
                    query_posts($args);
                    if(have_posts()) : while (have_posts()) : the_post();
                        ?>
                    <ul>
                      <li class="list-li">
                        <h3>
                          <?php the_title();?>
                        </h3>
                          <p class="pde">
                              <?php the_excerpt(); ?>
                          </p>

                    <span class="spanspan">
                        <a href=""><img src="<?php bloginfo('template_url'); ?>/img/right-point.png" alt=""></a>
                        <p class="tigh-p"><?php  the_time('Y年n月j日'); ?></p>
                   </span>
                   <?php  endwhile; endif; wp_reset_query(); ?>
                </li>
               </ul>
<!--            <ul>-->
<!--                <li class="list-li">-->
<!--                    <h3></h3>-->
<!--                    <p class="pde"></p>-->
<!--                    <span class="spanspan">-->
<!--                      <a href="">-->
<!--                          <img src="--><?php //bloginfo('template_url'); ?><!--/img/right-point.png" alt="">-->
<!--                      </a>-->
<!--                        <p class="tigh-p"> 2016-04-12</p>-->
<!--                    </span>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <ul>-->
<!--                <li class="list-li">-->
<!--                    <h3></h3>-->
<!--                    <p class="pde"></p>-->
<!--                    <span class="spanspan">-->
<!--                      <a href="">-->
<!--                          <img src="--><?php //bloginfo('template_url'); ?><!--/img/right-point.png" alt="">-->
<!--                      </a>-->
<!--                        <p class="tigh-p"> 2016-04-12</p>-->
<!--                    </span>-->
<!--                </li>-->
<!--            </ul>-->
        </div>


        <div class="right-list">

            <ul>
                <?php ?>
                <li><img class="imgs1" src="" alt=""></li>
            </ul>
            <ul>
                <li><img class="imgs2" src="" alt=""></li>
            </ul>
            <ul>
                <li><img class="imgs3" src="<?php echo catch_that_image() ?>" alt=""></li>

            </ul>

        </div>
    </div>
</div>
<script>


</script>

<?php
include 'footer.php';
?>