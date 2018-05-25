<?php
include 'header.php';
$post = get_post($_POST['p']);
$time=explode(' ',$post->post_date_gmt);
//print_r($post);
?>
<div class="about">
    <div class="container  clearfloat">
        <div class="about-center-box">
            <div class="about-center-left1 " style="float: left">
                <?php
                $keyy=array_keys($navInfo);
//                var_dump($keyy);
                $aa=$navInfo[$_GET['tag']];
//                var_dump($aa);
                ?>
                <div class="center-top about-bottom">
                    <span class="item1">  <?php  echo $aa['title'];?></span>
                    <span class="item2"></span>
                    <span class="item3"><?php echo strtoupper($_GET['tag']); ?></span>
                </div>
                <ul class="center-list">
                    <?php
//                    foreach ($aa['child'] as $v){
//
//                        echo '<li><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="javascript:;"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
//                    }

                    foreach ($aa['child'] as $v){

                   $className = $categoryNameToId[$v["title"]] == $_GET["id"] ? "active" : "";

                    $chaining='http://'.$_SERVER['HTTP_HOST'].'/'.$_GET['tag'].'?id='.$categoryNameToId[$v["title"]];


                    echo '<li><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="'.$chaining.'"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
                    } ?>
                </ul>
            </div>
            <!--about-center-left 结束-->
            <div class="about-center-right">
                <div class="center-top about-right-title">
                    <h2>文章详情</h2>
                    <ul class="right-ul food-ul">
                        <li><a href="javascript:"><?php echo $aa['title'] ?></a></li>
                        <li class="time1"><img src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png" alt="" style="width: 13px;height: 14px"></li>
                        <li><a class="time2" href="javascript:">文章详情</a></li>
                    </ul>
                </div><!--about-right-title 结束-->

                <div class="right-top1">
                    <ul class="right-title2">
                        <li><?php echo $time[0]; ?></li>
                        <li><?php echo $time[1];  ?></li>
<!--                        <li>中国青年网</li>-->
<!--                        <li class="about-item">参与评论0人</li>-->
                    </ul>
                    <div class="about-photo">
                        <a class="side-a" target="_blank" href="javascript:"></a>
                        <a class="side-a" target="_blank" href="http://v.t.sina.com.cn/share/share.php?url=<?php echo $siteUrl; ?>&title='<?php echo $post->post_title; ?>'"></a>
                        <a class="side-a" target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php echo $siteUrl; ?>"></a>
                        <a class="side-a" target="_blank" href="http://v.t.qq.com/share/share.php?url=<?php echo $siteUrl; ?>&title='<?php echo $post->post_title; ?>'"></a>
                        <a class="side-a" href="javascript:"></a>
                        </span>
                    </div>
                </div>

                <div class="about-new-details1">
                 <h1><?php echo $post->post_title; ?></h1>
                    <h3 style="font-size: 13px;color: #888"><?php echo $post->post_excerpt; ?></h3>
                    <p class="about-new-center-details"><?php echo $post->post_content; ?></p>

                </div>
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






<!---->
<!--post_date：(字符）文章发表的日期和时间（YYYY-MM-DD HH-MM-SS)-->
<!---->
<!--post_date_gmt：（字符）文章发表的格林尼治标准时间（GMT） （YYYY-MM-DD HH-MM-SS)-->
<!---->
<!--post_content：（字符）文章内容-->
<!---->
<!--post_title：（字符）文章标题-->
<!---->
<!--post_category：（整数）文章类别的编号。注意：该值在WordPress 2.1之后的版本总为0。定义文章的类别时可使用 get_the_category()函数。-->
<!---->
<!--post_excerpt：（字符）文章摘要-->
<!---->
<!--post_status：(字符）文章状态（publish|pending|draft|private|static|object|attachment|inherit|future）-->
<!---->
<!--comment_status：（字符）评论状态（open|closed|registered_only）-->
<!---->
<!--ping_status：（字符）pingback/trackback状态（open|closed）-->
<!---->
<!--post_password：(字符）文章密码-->
<!---->
<!--post_name：(字符）文章的URL嵌套-->
<!---->
<!--to_ping：(字符）要引用的URL链接-->
<!---->
<!--pinged：（字符）引用过的链接-->
<!---->
<!--post_modified：(字符）文章最后修改时间（YYYY-MM-DD HH-MM-SS)-->
<!---->
<!--post_modified_gmt：(字符）文章最后修改GMT时间（YYYY-MM-DD HH-MM-SS)-->
<!---->
<!--post_parent：(整数）父级文章编号（供附件等）-->
<!---->
<!--guid：（字符）文章的一个链接。注意：不能将GUID作为永久链接（虽然在2.5之前的版本中它的确被当作永久链接），也不能将它作为文章的可用链接。GUID是一种独有的标识符，只是目前恰巧成为文章的一个链接。-->
<!---->
<!--post_type：（字符）（日志 | 页面 | 附件）-->
