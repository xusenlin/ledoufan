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
                            echo '<li><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="'.$siteUrl.'/'.$slugs.'?id='.$categoryNameToId[$v['title']].'"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
                        }
                        ?>
                    </ul>

                </div><!--about-center-left 结束-->
                <div class="about-center-right  food-center">
                    <?php
                    include_once 'breadcrumb.php';
                    ?>

                    <div class="right-top1" style="border: none;height: 0">
<!--                        <ul class="right-title2">-->
<!--                            <li>2018-04-19</li>-->
<!--                            <li>11:39:04</li>-->
<!--                            <li>中国青年网</li>-->
<!--                            <li class="about-item">参与评论0人</li>-->
<!--                        </ul>-->
<!--                        <div class="about-photo">-->
<!--                            <a class="side-a" href="javascript:"></a>-->
<!--                            <a class="side-a" href="javascript:"></a>-->
<!--                            <a class="side-a" href="javascript:"></a>-->
<!--                            <a class="side-a" href="javascript:"></a>-->
<!--                            <a class="side-a" href="javascript:"></a>-->
<!--                            <a class="side-a" href="javascript:"></a>-->
<!--                        </div>-->
                    </div>

                    <div class="food-new-center">
                        <ul class="food-new-list">
                            <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail();
                            }

                            $amoun=get_category($_GET['id'])->count;
                            $paging=3;
                            if($_GET['present']){
                                $present=$_GET['present'];
                            }else{
                                $present=0;
                            }
                            //                    print_r($present);
                            $amoun=ceil($amoun/$paging);

//                            echo '<pre>';
//                            var_dump(get_posts( ['category'  =>$_GET['id']]));
                            $food=get_posts( ['category'  =>$_GET['id'],'numberposts'=> $paging,  'offset'  => $present*$paging]);
                            foreach ($food as $v){
                                $img_id = get_post_thumbnail_id($v->ID);
                                $img_url = wp_get_attachment_image_src($img_id,'full');
//                                echo '<pre>';
//                                var_dump($img_url);
                                $img_url = $img_url[0];

                                echo '<li><a href="'.$siteUrl.'/?p='.$v->ID.'&&tag='.$slugs.'">
                                          <img src="'.$img_url.'"/>
                                          <p>'.$v->post_excerpt.'</p>
                                          </a>
                                     </li>
                                ';
                            }
                            ?>
                        </ul>
                        <div class="center-paging">
                            <span class="item"><a href="<?php echo $siteUrl.'/'.$slugs.'?id='.$_GET['id'].'&present=0'; ?>">Home</a></span>
                            <ul class="center-paging-list">
                                <?php for($i=0;$i<$amoun;$i++) {

                                    $ps= $siteUrl.'/'.$slugs.'?id='.$_GET["id"].'&present='.$i;
                                    $classpaging = $i == $present ? "itemss" : "";
                                    ?>
                                    <li class="food-paging"><a class=" <?php echo $classpaging ;?>" href="<?php echo  $ps;  ?>">
                                            <?php echo $i+1; ?>
                                        </a></li>
                                <?php } ?>
                            </ul>
                            <span class="item"><a href="<?php echo $siteUrl.'/'.$slugs.'?id='.$_GET['id'].'&present='.($amoun-1) ?>">End</a></span>
                        </div>
                    </div>


                </div><!--about-center-right 结束-->
            </div>
        </div><!--container 结束-->
    </div>
    <script>
        //Your JAVASCRIPT Code
            var paging=document.getElementsByClassName('food-paging');
            var present=<?pHp echo $present ?>;
            var amoun=<?pHp echo $amoun ?>;
            var index=0;
            for (var k = 0; k < paging.length; k++) {
                paging[k].style.display="none";
            }
            for (var i = 0; i < paging.length; i++) {

                index=i;

                if ( index ==present) {
                    if(index>=2){
                        if(index+1==amoun){
                            paging[index-2].style.display='block';
                            paging[index-1].style.display='block';
                            paging[index].style.display='block';
                            paging[index].style.marginRight='14px';

                        }else {
                            paging[index-1].style.display='block';
                            paging[index].style.display='block';
                            paging[index+1].style.display='block';
                            paging[index+1].style.marginRight='14px';

                        }

                    }else {
                        paging[0].style.display='block';
                        paging[1].style.display='block';
                        paging[2].style.display='block';
                        paging[2].style.marginRight='14px';
                    }
                }
            }
    </script>
<?php
include 'footer.php';
?>