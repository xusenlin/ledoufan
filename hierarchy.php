<?php
/*
Template Name:溯源体系
*/
?>
<?php
include 'header.php';
?>
<div class="hierarchy">
    <div class="container  clearfloat">
        <div class="hierarchy-center-box">
            <div class="hierarchy-center-left ">
                <div class="center-top hierarchy-bottom">
                    <span class="item1">溯源体系</span>
                    <span class="item2"></span>
                    <span class="item3">ABOUT US</span>
                </div>
                <ul class="center-list">
                    <?php
                        foreach ($navInfo[$slugs]['child'] as $v){
                        $className = $categoryNameToId[$v["title"]] == $_GET["id"] ? "active" : "";
                        echo '<li><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="javascript:;"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
                    }
                    ?>
                </ul>




            <div class="hierarchy-center-right">
                <div class="center-top hierarchy-right-title">
                    <ul class="right-ul">
                        <li>
                            <a href="javascript:">首页<span><img src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png" alt=""></span></a>
                        </li>
                        <li>
                            <a href="javascript:">关于我们<span><img src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png" alt=""></span></a>
                        </li>
                        <li><a href="javascript:">展示公司介绍</a></li>
                    </ul>
                </div>
                <div class="right-top1">
                    <ul class="right-title2">
                        <li>2018-04-19</li>
                        <li>11:39:04</li>
                        <li>中国青年网</li>
                        <li class="hierarchy-item">参与评论0人</li>
                    </ul>
                    <div class="hierarchy-photo">
                        <a class="side-a" href="javascript:"></a>
                        <a class="side-a" href="javascript:"></a>
                        <a class="side-a" href="javascript:"></a>
                        <a class="side-a" href="javascript:"></a>
                        <a class="side-a" href="javascript:"></a>
                        <a class="side-a" href="javascript:"></a>
                        </span>
                    </div>
                </div>

                <div class="hierarchy-new-center"></div>



            </div><!--about-center-right 结束-->
        </div>
    </div><!--container 结束-->
</div>
<script>
    //Your JAVASCRIPT Code
</script>
<?php
include 'footer.php';
?>