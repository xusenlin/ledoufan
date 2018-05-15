<?php
/*
Template Name:公司产品
*/
?>
<?php
include 'header.php';
?>
<div class="product">

   <div class="container">
       <div class="product_item_left">
               <br>
               <div class="center-top">
                   <span class="item1">产品分类</span>
                   <span class="item2"></span>
                   <span class="item3">PRODUCTS</span>
               </div>
               <br>
               <ul class="center-list">
                   <?php

                   foreach ($navInfo[$slugs]['child'] as $v){
                       $className = $categoryNameToId[$v["title"]] == $_GET["id"] ? "active" : "";
                       echo '<li><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="javascript:;"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
                   }
                   ?>

       </div>
       <div class="product_item_right">
<!--           --><?php
//           $data=get_posts( ['category'  =>$categoryNameToId['产品展示']]);
//           echo '<pre>';
//           print_r($data);
//
//           ?>
           <div class="item_right_bar">
               <h2 class="contact_style_adr">联系方式与地址 </h2>
               <div class="front_page"><a href="#">首页</a>
                   <span>&gt;&gt;</span><a href="#">联系我们</a>
                   <span>&gt;&gt;</span><a href="#">联系方式</a>
               </div>
           </div>



           <div class="product_food_list">
               <?php
               if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                   the_post_thumbnail();
               }

               $amoun=get_category($_GET['id'])->count;
               $paging=9;
               if($_GET['present']){
                   $present=$_GET['present'];
               }else{
                   $present=0;
               }
               //                    print_r($present);
               $amoun=ceil($amoun/$paging);

               $data=get_posts( [ 'category' =>$_GET["id"] ,'numberposts'=> $paging,  'offset'  => $present*$paging]);

               foreach ($data as $TT){
               $img_id = get_post_thumbnail_id($TT->ID);
               $img_url = wp_get_attachment_image_src($img_id,'full');
               $img_url = $img_url[0];
               ?>

               <div class="product_food_list_box" style="position:relative ">

                            <img src="<?php echo $img_url ?> "width="100%" height="100%">
                           <span style="position: absolute;top:288px;left:0px"><a href=""><?php print_r($TT->post_title);  ?></a></span>

               </div>

               <?php }  ?>

           </div>

       </div>
       <div class="right_btn_page">
           <?php
           //获取页码
           $page = $_GET['li'];
           $host = "localhost";
           $username = "root";
           $password = "root";
           $db = "ldf";
           //连接数据库
           $conn = mysqli_connect($host,$username,$password);
           if (!$conn) {
               echo "数据库连接失败";
               exit;
           }else{
//               echo '链接数据库成功！';
           }
           //选择要操作的数据库
           mysqli_select_db($conn,$wp_posts);
           //设置数据库编码格式
           mysqli_query($conn,"SET NAMES UTF8");
           //编写sql获取分页数据SELECT * FROM 表名 LIMIT 起始位置,显示条数
           $sql = "select * from wp_posts limit ".($page-1) * 9 .",9 ";
           //把sql语句传送到数据中
           $result = mysqli_query($conn,$sql);


           ?>

               <div class="center-paging clearfloat">
                   <span class="item"><a href="#">Prev</a></span>
                   <ul class="center-paging-list">
                       <li><a class="itemss" href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                   </ul>
                   <span class="item"><a href="#">Next</a></span>
               </div>
           <br>
       </div>
   </div>
</div>
<script>


</script>
<?php
include 'footer.php';
?>