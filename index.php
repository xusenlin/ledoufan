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
                <p class="conten-p">
                    <?php the_excerpt(); ?>
<!--                    贵州大学明德学院数字传媒系成立于2014年，设有数字媒体艺术、数字媒体艺术、艺术与科技、视觉传达与设计四个专业。围绕贵州大数据贵州创意文化产业，以泰豪创意产业集群为依托平台，以“互联网+文化/艺术/产品”为指导思想示范效应的数字艺术、技术人才培养高地干货黄金客户好几个号结构化即可国家法规环境法规和见过好几个环节赶紧回家都给他凡人歌人控股集团考虑过深刻了解公司考虑到该 我看过图片搜几个登记公司考虑到该。-->
                </p>

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
                            <p class="ppppp"><?php echo  $ietm->post_date;?></p>
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