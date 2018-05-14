<?php
/*
Template Name:关于我们（about）
*/
?>

<?php
include 'header.php';
?>
    <script src="<?php bloginfo('template_url'); ?>/js/oabout.js"></script>
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
                            echo '<li class="active"><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="../about?tile='.$v['title'].'"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
                        }
                        ?>
                    </ul>
                </div><!--about-center-left 结束-->

                <div class="about-center-right">
                    <div class="center-top about-right-title">
                        <ul class="right-ul">
                            <li>
                                <a href="javascript:">首页<span><img src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png" alt=""></span></a>
                            </li>
                            <li><a href="javascript:">关于我们<span><img src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png" alt=""></span></a>
                            </li>
                            <li><a href="javascript:">展示公司介绍</a></li>
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

                    <div class="bout-centre-content">
                        <?php
                        $about=get_posts( ['category'  =>$categoryNameToId[$_GET['tile']]]);
                        //  echo '<pre>';
                        //  var_dump($about);
                        foreach ($about as $v){
                            echo $v->post_content;
                        }

                        ?>
                    </div><!--bout-centre-content 结束-->
               <!--翻页-->
              <div class="page-turning">
                  <div style="float: right;width: 300px">
                      <div class="center-paging clearfloat">
                          <span class="item"><a href="#">Prev</a></span>
                          <ul class="center-paging-list">
                              <li><a class="itemss" href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                          </ul>
                          <span class="item"><a href="#">Next</a></span>
                      </div>
                  </div>
              </div><!--page-turning 结束-->

                </div><!--about-center-right 结束-->
            </div>
        </div><!--container 结束-->
    </div>
    <script>
        var api= '<?php echo $siteUrl; ?>/?json=get_category_posts';
    </script>
<?php
include 'footer.php';
?>