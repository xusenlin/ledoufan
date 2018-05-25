<?php
/*
Template Name:连锁加盟
*/
?>
<?php
include 'header.php';
?>
<div class="affiliate">
    <div class="container">
        <div class="container-l">
            <div class="con-left fl">
                <div class="center-top about-bottom">
                    <span class="item1">连锁加盟</span>
                    <span class="item2"></span>
                    <span class="item3">AFFILIATE</span>
                </div>
                <ul class="center-list">
                    <?php
                    foreach ($navInfo[$slugs]['child'] as $v){
                        $className = $categoryNameToId[$v["title"]] == $_GET["id"] ? "active" : "";
                        echo '<li><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="'.$siteUrl.'/'.$slugs.'?id='.$categoryNameToId[$v['title']].'"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="container-r">
            <?php
            include_once 'breadcrumb.php';
            ?>
            <div class="container-rb">
                <div class="container-rb-l"><img src="<?php bloginfo('template_url'); ?>/img/affiliate-a.jpg" alt=""></div>
                <div class="container-rb-z"></div>
                <div class="container-rb-r">
                    <div class="container-rb-ra">
                        <b style="font-size: 20px;color: #c27a02">诚邀金额：10万—20万</b><br><br>
                        <b style="font-size: 18px;color: #6a6869;">所属行业：零售</b>
                    </div>
                    <div class="container-rb-rb">
                        <div class="fl">
                            <span>成立时间：2010年8月5日</span><br><br>
                            <span>加盟区域：全国</span><br><br>
                            <span>经营范围：豆类食品</span>
                        </div>
                        <div class="fr">
                            <span>门店数：23家</span><br><br>
                            <span>适合人群：自由创业</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-rc">
                <div class="container-rc-a">
                    <span>加盟优势</span>
                </div>
            </div>
            <div class="container-rd">
                <span>1、品牌支持:针对中国市场,豆乐坊洲小小豆腐制定立体化的品牌推广战略,全面锁定目标消费群体,为投资者聚敛人气,提高投资者终端经营业绩,加大利润收入</span><br>
                <span>2、装修支持:豆乐坊潘小小豆以专业的知识指导加盟店商寻找合适的店销位置,在签订合作协议提供由设计人员提供店铺设计图井指导装修</span><br>
                <span>3、开业支持:豆乐坊潘小小豆提供全方位的店铺营运管理咨询及培训,专业的培训师对终端导购进行营销技巧、标准化服务规则及产品陈列产品推广等培训</span><br>
                <span>4、产品支持:豆小小豆观将确保投资者提高终端销售业绩</span><br>
                <span>5、物流支持:豆乐坊潘小小豆拥有快的电子商务平台和高效物流配送系统,保保证每个加盟店新品上架全国司步,迅速占领市场。</span><br>
                <span>6、市场支持:豆乐坊潘小小豆总部制定统一的市场规划,实施区域保护政策,让投资者能够在本区域范国内享受到庞大市场吸引力的待遇从而轻松经营、快乐钱!</span><br>
                <span>7、后续服务支持:豆乐坊潘小小豆总部快速高效的服务理念,保证月月有新品</span><br>
            </div>
            <div class="container-re"><img src="<?php bloginfo('template_url'); ?>/img/affiliate-b.jpg" alt=""></div>
            <div class="container-rf">
                <span>1、品牌支持:针对中国市场,豆乐坊潘小小三商制定立体化的品牌推广战路,全面锁定目标消费群体,为投资者聚敛人气,提高投资者终端经</span><br>
                <span>2、装修支持:三乐坊潘小小豆以专业的知识指导加店商寻找合适的店铺位置,在签订合作协议后,可提供由设计人员提供店铺设计图并指导装修</span><br>
                <span>3、开业支持:豆乐坊潘小小豆提供全方位的店铺营运管理咨询及培训,专业的培训师对终端导购进行营销技巧、标准化服务规则及产品陈列产品推广等培训、指导</span><br>
                <span>4、产品支持小豆观将确保投资者提高终销售业绩</span><br>
                <span>5、物流支持小豆观拥有快捷的电子商务平台和高效物流配送系统,保保证每个加盟店新品上架全国司步,迅速占领市场</span><br>
                <span>6、市场支持:豆乐坊潘小小豆总部</span><br>
            </div>
            <div class="container-rg"></div>
        </div>
    </div>

</div>
<!--<script>
    //Your JAVASCRIPT Code
</script>-->
    <script>
        var api= '<?php echo $siteUrl; ?>/?json=get_category_posts';
        //Your JAVASCRIPT Code
    </script>
<?php
include 'footer.php';
?>