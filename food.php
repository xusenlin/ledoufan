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
                        <span class="item1"><?php echo $navInfo[$slugs]['title']?></span>
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


                    <div class="food-new-center">
                        <ul class="food-new-list">
                            <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail();
                            }
//                            echo '<pre>';
//                            var_dump(get_posts( ['category'  =>$categoryNameToId[$navInfo[$slugs]['title']]]));
                            $food=get_posts( ['category'  =>$categoryNameToId[$navInfo[$slugs]['title']]]);
                            foreach ($food as $v){
                                $img_id = get_post_thumbnail_id($v->ID);
                                $img_url = wp_get_attachment_image_src($img_id,'full');
//                                echo '<pre>';
//                                var_dump($img_url);
                                $img_url = $img_url[0];

                                echo '<li>
                                          <img src="'.$img_url.'"/>
                                          <p>'.$v->post_excerpt.'</p>
                                     </li>
                                ';
                            }
                            ?>
                        </ul>
                        <div class="center-paging">
                            <span class="item"><a href="#">Prev</a></span>
                            <ul class="center-paging-list">
                                <li><a class="itemss" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                            <span class="item"><a href="#">Next</a></span>
                        </div>
                    </div>


                </div><!--about-center-right 结束-->
            </div>
        </div><!--container 结束-->
    </div>
    <script>
        //Your JAVASCRIPT Code
        var nav =document.querySelectorAll('center-list a');
        var url = window.location.href;
        for(var i=0;i<nav.length;i++){
            if()
        }
    </script>
<?php
include 'footer.php';
?>