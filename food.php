<?php
/*
Template Name:美食文化
*/
?>

<?php
include 'header.php';
?>
    <div class="about">
        <div class="container  clearfloat">
            <div class="about-center-box">
                <div class="about-center-left ">
                    <div class="center-top about-bottom">
                        <span class="item1"><?php print_r($navInfo[$slugs]['title'])?></span>
                        <span class="item2"></span>
                        <span class="item3"><?php echo strtoupper($slugs) ?></span>
                    </div>
                    <ul class="center-list">
                        <?php
                        foreach ($navInfo[$slugs]['child'] as $v){
                            $className = $categoryNameToId[$v["title"]] == $_GET["id"] ? "active" : "";
                            echo '<li><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="javascript:;"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
                        }
                        ?>
                    </ul>

                </div><!--about-center-left 结束-->
                <div class="about-center-right  food-center">
                    <div class="center-top about-right-title">
                        <ul class="right-ul food-ul">
                            <li><a href="javascript:">首页<span><img src="img/about-right-pic.png" alt=""></span></a></li>
                            <li class="time1">>></li>
                            <li><a href="javascript:">关于我们<span><img src="img/about-right-pic.png" alt=""></span></a></li>
                            <li class="time1">>></li>
                            <li><a class="time2" href="javascript:">展示公司介绍</a></li>
                        </ul>
                    </div><!--about-right-title 结束-->
                    <div class="right-top1">
                        <ul class="right-title2">
                            <li>2018-04-19</li>
                            <li>11:39:04</li>
                            <li>中国青年网</li>
                            <li class="about-item">参与评论0人</li>
                        </ul>
                        <div class="about-photo">
                            <a class="side-a" href="javascript:"></a>
                            <a class="side-a" href="javascript:"></a>
                            <a class="side-a" href="javascript:"></a>
                            <a class="side-a" href="javascript:"></a>
                            <a class="side-a" href="javascript:"></a>
                            <a class="side-a" href="javascript:"></a>
                            </span>
                        </div>
                    </div>


                    <div class="about-new-center"></div>



                </div><!--about-center-right 结束-->
            </div>
        </div><!--container 结束-->
    </div>
    <script>
        //Your JAVASCRIPT Code
        var nav =document.querySelectorAll('#nav a');
        var url = window.location.href;
        for(var i=0;i<nav.length;i++){
            if()
        }
    </script>
<?php
include 'footer.php';
?>