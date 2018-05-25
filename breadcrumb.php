<?php
    $currentCategoryId = $_GET['id'];
    $newNav = $currentCategoryId?['title'=>$categoryIdToName[$currentCategoryId],'url'=>'javascript:;']:null;
    $breadcrumb = $breadcrumb ?:  [
        'title'=>$categoryIdToName[$currentCategoryId],
        'info'=>[
            ['title'=>$navInfo[$slugs]['title'],'url'=>$siteUrl.'/'.$slugs.'?id='],
            $newNav
        ]
    ];
?>

<div class="center-top about-right-title">
    <h2><?php echo $breadcrumb['title'] ?></h2>
    <ul class="right-ul food-ul">
        <li><a href="<?php echo $siteUrl ?>">首页</a></li>
        <li class="time1"><img src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png" alt="" style="width: 13px;height: 14px"></li>
        <li><a href="<?php echo $breadcrumb['info'][0]['url'] ?>"><?php echo $breadcrumb['info'][0]['title'] ?></a></li>
        <?php if ($breadcrumb['info'][1]): ?>
            <li class="time1"><img src="<?php bloginfo('template_url'); ?>/img/about-right-pic.png" alt="" style="width: 13px;height: 14px"></li>
            <li><a class="time2" href="<?php echo $breadcrumb['info'][1]['url'] ?>"><?php echo $breadcrumb['info'][1]['title'] ?></a></li>
        <?php endif; ?>
    </ul>
</div>
