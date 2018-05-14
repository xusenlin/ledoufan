<?php
/*
Template Name:新闻资讯
*/
?>

<?php
include 'header.php';
?>
<div class="article">
<!--    Your Code-->
<!--    3.新闻资讯-->
    <div class="container   article-content">
        <div class="article-content-right">
            <div class="center-top " style="width: 850px;margin-bottom: 30px">
                <span class="item1">关于我们</span>
            <div class="article-content-right-right">
<!--                <span class="">首页》关于我们》公司展示</span>-->
                <ul>
                    <li>首页<span>  <img src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png"></span></li>
                    <li>新闻资讯<span> <img src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png"></span></li>
                    <li>公司动态</li>
                </ul>

            </div></div>
            <div class="article-content-right-content">
                <div class="article-content-right-content-top">

                    <img src="<?php bloginfo('template_url'); ?>/img/article-content-right-content-top.jpg">
                </div>
                <div class="article-content-right-content-bottom">
                    <p style="float: right;">2018.01.1101</p>
                    <p>贵州五福坊食品有限公司相关领导到公司调研合作</p>

                    <a href="">[查看详情]</a>
                </div>

            </div>
            <div class="article-content-right-content">
                <div class="article-content-right-content-top">
                    <img src="<?php bloginfo('template_url'); ?>/img/article-content-right-content-top.jpg">
                </div>
                <div class="article-content-right-content-bottom">
                    <p style="float: right;">2018.01.1101</p>
                    <p>贵州五福坊食品有限公司相关领导到公司调研合作</p>
                    <a href="">[查看详情]</a>
                </div>

            </div>
            <div class="article-content-right-content">
                <div class="article-content-right-content-top">
                    <img src="<?php bloginfo('template_url'); ?>/img/article-content-right-content-top.jpg">
                </div>
                <div class="article-content-right-content-bottom">
                    <p style="float: right;">2018.01.01</p>
                    <p>贵州五福坊食品有限公司相关领导到公司调研合作</p>
                    <a href="">[查看详情]</a>
                </div>

            </div>
           <div style="float: right;width: 300px"> <div class="center-paging clearfloat">
                   <span class="item"><a href="#">Prev</a></span>
                   <ul class="center-paging-list">
                       <li><a class="itemss" href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                   </ul>
                   <span class="item"><a href="#">Next</a></span>
               </div></div>
        </div>
        <div class="article-content-left">
            <div class="article-content-left-content">
            <div class="center-top article-content-left-div ">
                <span class="item1">新闻咨询</span>
                <span class="item2"></span>
                <span class="item3">NEWS</span>
            </div>
            <ul class="center-list">

                <?php
                    $active = $_GET['id'];

                ?>

                <li><a href="#">
            <span class="<?php echo $active == 0 ? 'active':'' ?>">
                <span>公司简介</span>
                <strong></strong>
            </span>
                    </a></li>
                <li><a href="#">
            <span class="<?php echo $active == 1 ? 'active':'' ?>">
                <span>行业形态</span>
                <strong></strong>
            </span>
                    </a></li>
            </ul>
            </div>




    </div>
        $cat=get_category_by_slug($works);
        wp_list_categories(array("child_of"=>$cat->term_id,


    </div>
<script>
    var api= '<?php bloginfo('url'); ?>/?json=get_category_posts';
    var catId = '<?php  echo  $_GET['id']  ?>';
    $.get(api,{id:catId,count:10,page:1},function (data) {

        if(data.status){
            console.log(data);
        }
        else {
            alert("请求出错");
        }
    },'json');

</script>
<?php
include 'footer.php';
?>