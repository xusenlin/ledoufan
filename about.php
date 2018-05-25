<?php
/*
Template Name:关于我们（about）
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
                        <span class="item1">关于我们</span>
                        <span class="item2"></span>
                        <span class="item3">ABOUT US</span>
                    </div>
                    <ul class="center-list">
                        <?php
                        foreach ($navInfo[$slugs]['child'] as $v){
                            $className = $categoryNameToId[$v["title"]] == $_GET["id"] ? "active" : "";
                            echo '<li><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="../about?id='.$categoryNameToId[$v['title']].'"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
                        }
                        ?>
                    </ul>
                </div><!--about-center-left 结束-->

                <div class="about-center-right">
                        <?php
                        include_once 'breadcrumb.php';
                        ?>
<!--                    <div class="center-top about-right-title">-->
<!--                        <h2>--><?php //echo $categoryIdToName[$_GET['id']] ?><!--</h2>-->
<!--                        <ul class="right-ul food-ul">-->
<!--                            <li><a href="javascript:">首页</a></li>-->
<!--                            <li class="time1"><img src="--><?php //bloginfo('template_url'); ?><!--/img/about-right-pic.png" alt="" style="width: 13px;height: 14px"></li>-->
<!--                            <li><a href="javascript:">--><?php //echo $navInfo[$slugs]['title'] ?><!--</a></li>-->
<!--                            <li class="time1"><img src="--><?php //bloginfo('template_url'); ?><!--/img/about-right-pic.png" alt="" style="width: 13px;height: 14px"></li>-->
<!--                            <li><a class="time2" href="javascript:">--><?php //echo $categoryIdToName[$_GET['id']] ?><!--</a></li>-->
<!--                        </ul>-->
<!--                    </div><!--about-right-title 结束-->

                    <?php
                    //echo '<pre>';
                    //var_dump(get_posts( ['category'  =>$categoryNameToId[$navInfo[$slugs]['title']]]));
                    if (has_post_thumbnail()){
                        the_post_thumbnail();
                    }
                    $amoun=get_category($_GET['id'])->count;

                    $paging = 3;


                    if ($_GET['present']){
                        $present = $_GET['present'];
                    }
                    else{
                        $present = 0;
                    }
                    //echo $present;
                    $amoun = ceil($amoun/$paging);

                    //echo $amoun;
                    $ab=get_posts( [ 'category' =>$_GET["id"] ,'numberposts'=> $paging,  'offset'  => $present*$paging]);
                       // var_dump($ab);
                    //echo $ab;
                    //print_r($_SERVER);
                    foreach ($ab as $AA){

                        $img_id = get_post_thumbnail_id($AA->ID);
                        $img_url = wp_get_attachment_image_src($img_id,'full');
                        $img_url = $img_url[0];
                    ?>
                        <div class="about-center-a">
                            <div class="about-img">
                                <img src="<?php echo $img_url ?>" width="846">
                            </div>

                            <h2> <?php echo($AA->post_title); ?></h2>
                            <div class="about-wenzhang">
                                <p> <?php print_r($AA->post_excerpt); ?></p>
                            </div>

                            <div class="about-center-img-down">
                                <p style="float: right;color: #b7b7b7;"><?php print_r($AA->post_date_gmt); ?></p>
                                <a class="more" href="<?php echo $siteUrl.'?p='.$AA->ID.'&&tag='.$slugs; ?>">[查看详情]</a>
                            </div><!--about-center-img-down 结束-->
                        </div>
    <?php  } ?>


               <!--翻页-->
              <div class="page-turning">
                  <div style="float: right">
                      <div class="center-paging clearfloat">
                          <span class="item"><a href="<?php echo  $siteUrl.'/'.$slugs.'?id='.$_GET["id"].'&present=0' ?>">Home</a></span>
                          <ul class="center-paging-list">
                              <?php for($i=0;$i<$amoun;$i++) {
                                  $ps= $siteUrl.'/about?id='.$_GET["id"].'&present='.$i;
                                  $classpaging = $i == $present ? "itemss" : "";
                                  ?>
                                  <li class="article-paging" style="display: none"><a class=" <?php echo $classpaging ;?>" href="<?php echo  $ps;  ?>">
                                          <?php echo $i+1; ?>
                                      </a></li>

                              <?php } ?>
                          </ul>
                          <span class="item"><a href="<?php echo  $siteUrl.'/'.$slugs.'?id='.$_GET["id"].'&present='.($amoun-1) ?>">End</a></span>
                      </div>
                  </div>
              </div><!--page-turning 结束-->
                </div><!--about-center-right 结束-->
            </div>
        </div><!--container 结束-->
    </div>
    <script>
        //var api= '<?php echo $siteUrl; ?>/?json=get_category_posts';

        var paging=document.getElementsByClassName('article-paging');

        var present=<?pHp echo  $present ?>;
        var amoun=<?pHp echo $amoun ?>;
        //for(var i=0;i<paging.length;i++){
        //
        //
        //}
        //alert(11);
        for (var i= 0; i<paging.length; i++) {

          this.index=i;

          if ( this.index==present) {
            if(this.index>=2){
              if(this.index+1==amoun){
                paging[this.index-2].style.display='block';
                paging[this.index-1].style.display='block';
                paging[this.index].style.display='block';

              }else {
                paging[this.index-1].style.display='block';
                paging[this.index].style.display='block';
                paging[this.index+1].style.display='block';
              }

            }else {
              paging[0].style.display='block';
              paging[1].style.display='block';
              paging[2].style.display='block';
            }




          }

        }
    </script>
<?php
include 'footer.php';
?>