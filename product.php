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
                   <li><a class="active" href="<?php echo $siteUrl.'/'.$slugs.'?id='.$categoryNameToId[$navInfo[$slugs]['child'][0]['title']];    ?>"><span><span><?php echo $navInfo[$slugs]['child'][0]['title'];?></span><strong></strong></span></a></li>
                   <li><a target="_blank" class="" href="<?php echo $navInfo[$slugs]['child'][1]['url'];?>"><span><span>天猫商城</span><strong></strong></span></a></li>
               </ul>
       </div>
       <div class="product_item_right">

           <?php
           include_once 'breadcrumb.php';
           ?>


           <div class="product_food_list">
               <?php
               if ( has_post_thumbnail() ) {
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

                       <a href="<?php echo $siteUrl ?>?p=<?php echo $TT->ID ?>" class="product_food_list_box" style="position:relative ">

                           <div style="background-size: auto 100%;background-repeat:no-repeat;background-position: center;overflow: hidden;width: 100%;height: 100%;background-image: url('<?php echo $img_url ?>')" ></div>
                           <span style="position: absolute;top:288px;left:0px"><?php print_r($TT->post_title);  ?></span>
                       </a>
               <?php }  ?>

           </div>

       </div>

               <div style="width: 286px" class="center-paging clearfloat">
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
           <br>

   </div>
</div>
<script>
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