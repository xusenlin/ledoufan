<?php
/*
Template Name:溯源体系
*/
?>
<?php
include 'header.php';
?>
<div class="hierarchy">
    <div class="container  clearfloat">
        <div class="hierarchy-center-box">
            <div class="hierarchy-center-left ">
                <div class="center-top hierarchy-bottom">
                    <span class="item1">溯源体系</span>
                    <span class="item2"></span>
                    <span class="item3">HIERARCHY</span>
                </div>
                <ul class="center-list">
                    <?php
                        foreach ($navInfo[$slugs]['child'] as $v){
                        $className = $categoryNameToId[$v["title"]] == $_GET["id"] ? "active" : "";
                        echo '<li><a data-id="'.$categoryNameToId[$v['title']].'" class="'.$className.'" href="javascript:;"><span><span>'.$v['title'].'</span><strong></strong></span></a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="hierarchy-center-right">
                <?php
                include_once 'breadcrumb.php';
                ?>
                <div class="picture1"><img src="<?php bloginfo('template_url'); ?>/img/1.png" alt="" width="860"></div>
                <div>
                    <p class=" character">
                        公司成立于2015年，注册资金800万元，加工厂房3000多平方米，办公楼及研发
                        中心1200平方米，现有员工36人。注册商标为“潘小小”，现有发明专利11件，
                        《传统青溪豆腐旅游休闲食品研究与产业化生产》通过黔东南州科技成果鉴定，
                        为贵州省科技型企业，黔东南州农业产业化经营重点龙头企业，获得SC认证。公司在
                        保留青溪豆腐特有香味的基础上，规模化生产青溪传统特色豆制品：青溪豆腐、恋爱豆
                        腐、游浆秘制豆腐，酱香豆腐、香蹄豆腐以及豆干旅游休闲食品等豆腐系列产品，
                        公司旗下有综合养殖基地、果树种植基地，很好地解决了豆渣等生产下脚料的综合
                        利用，形成了加、养、种循环利用的立体农业产业链。都会感受到韩国发的规
                        划都是借口借口。
                    </p>
                </div>
                <div><img src="<?php bloginfo('template_url'); ?>/img/2.png" alt="" width="860"></div>
                <div><p class=" character">
                        公司现有在职员工36人，行政   公司现有在职员工36人，行政管理层：总经理、销售
                        副总经理、生产副总经理、会计、出纳等5人；销售人员8人；生产工人员23人。大专以上
                        学历人员15人，其中从事食品加工专业技术人员4人。公司现设办公室、生产部、供应部、
                        销售部、质管部、技术研发中心等6个部门，建立了比较健全的行政、人事、财务等内控管
                        理制度，人员配备齐全，专业结构合理，能够确保公司有效运行，发展壮大。<br>
                        管理层：总经理、销售副总经理、生产副总经理、会计、出纳等5人；销售人员8人；
                        生产工人员23人。大专以上学历人员15人，其中从事食品加工专业技术人员4人。公司现设办公
                        室、生产部、供应部、销售部、质管部、技术研发中心等6个部门，建立了比较健全的行政、
                        人事、财务等内控管理制度，人员配备齐全，专业结构合理，能够确保公司有效运行，发展壮
                        大。欧艾斯发货单ID福is豆腐干ID港囧速度快关键是看到搜到故事哦的感觉好哦如果iOS的井冈
                        山大学瓯双方都贵哦双方的感觉舒服的非事故就偶是发的。
                    </p>
                </div>
                <div class="picture2"><img src="<?php bloginfo('template_url'); ?>/img/3.png" alt="" width="860"></div>
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