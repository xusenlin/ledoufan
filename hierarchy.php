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


                <div class="center-top hierarchy-bottom hierarchy-top">
                    <span class="item1">联系我们</span>
                    <span class="item2"></span>
                    <span class="item3">CONTACT US</span>
                </div>
                <div class="hierarchy-phone">
                    <h3>镇远乐豆坊食品有限公司</h3>
                    <ul class="top-icon">
                        <li>联系人：</li>
                        <li>座&emsp;机：</li>
                        <li>传&emsp;真：</li>
                        <li>手&emsp;机：</li>
                        <li>Q&emsp;Q： </li>
                        <li>邮&emsp;箱：</li>
                        <li>地&emsp;址：</li>
                        <li>网&emsp;址：</li>
                    </ul>
                </div>
            </div>

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