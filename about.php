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
             

                        foreach ($navInfo[$slugs]['child'] as $v){
                            $className = $categoryNameToId[$v["title"]] == $_GET["id"] ? "active" : "";
                            echo '<li><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="javascript:;"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
                        }
                        ?>
                    </ul>


                    <!--<div class="center-top about-bottom about-top">
                        <span class="item1">联系我们</span>
                        <span class="item2"></span>
                        <span class="item3">CONTACT US</span>
                    </div>
                    <div class="about-phone">
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
                    </div>-->
                </div><!--about-center-left 结束-->

                <div class="about-center-right">
                    <div class="center-top about-right-title">
                        <ul class="right-ul">
                            <li><a href="javascript:">首页<span><img
                                                src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png" alt=""></span></a>
                            </li>
                            <li><a href="javascript:">关于我们<span><img
                                                src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png" alt=""></span></a>
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


                    <div class="about-new-center"></div>


<<<<<<< HEAD
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
=======
                    <!--翻页-->
                    <div style="float: right;width: 300px">
                        <div class="center-paging clearfloat">
                            <span class="item"><a href="#">Prev</a></span>
                            <ul class="center-paging-list">
                                <li><a class="itemss" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
>>>>>>> 84d69df157ea4728430d4c6efe9bff3bedffbe2e

                            </ul>
                            <span class="item"><a href="#">Next</a></span>
                        </div>
                    </div>


                </div><!--about-center-right 结束-->
            </div>
        </div><!--container 结束-->
    </div>
    <script>
        var api= '<?php echo $siteUrl; ?>/?json=get_category_posts';
        //Your JAVASCRIPT Code
    </script>
<?php
include 'footer.php';
?>