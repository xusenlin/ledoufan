<?php
/*
Template Name:在线招聘
*/
?>
<?php
include 'header.php';
?>
<div class="recruitment">
    <div class="container" style="display: table">

        <div class="lb fl">
            <div class="center-top">
                <span class="item1">联系我们</span>
                <span class="item2"></span>
                <span class="item3">CONTACTUS</span>
            </div>
            <ul class="center-list">
                <li><a  class="<?php echo $slugs == 'contact' ? 'active' :'' ?>" href="../contact?'"><span><span>联系方式</span><strong></strong></span></a></li>
                <li><a  class="<?php echo $slugs == 'job' ? 'active' :'' ?>" href="<?php echo $siteUrl ?>/job"><span><span>在线招聘</span><strong></strong></span></a></li>

                <!--<li><a href="#">
            <span>
                <span>连锁加盟</span>
                <strong></strong>
            </span>
                    </a></li>
                <li><a href="#">联系方式和地址</a></li>
                <li><a href="#">在线招聘</a></li>-->
            </ul>
        </div>
        <div class="rb fr ">
                <div class="center-top clear"><h2 class="h25 fl">连锁加盟 </h2><div class="fr"><a href="#">首页</a><span>&gt;&gt;</span><a href="#">联系我们</a><span>&gt;&gt;</span><a href="#">在线招聘</a></div></div>
            <div class="b">
                <div class="b-top">
                    <p class="f20 b-top-post">招聘职位</p>
                    <h1 class="por">大区销售助理</h1>
                    <p class="f18 b-c">
                        <span class="b-c-a">五险一金</span>
                        <span class="b-c-a">包住</span>
                        <span class="b-c-a">年底双薪</span>
                        <span class="b-c-a">话补</span>
                        <span class="b-c-a">交通补助</span>
                    </p>
                    <p class="f16 b-d">
                        <span class="b-d-a">招10人</span>
                        <span class="b-d-a">学历不限</span>
                        <span class="b-d-a">经验不限</span>
                        <span class="b-d-a">可接收应届生</span>
                    </p>
                    <div class="b-top-site ">
                        <img src="img/recruitment-site.png" alt="" class="fl">
                        <p class="b-top-site-a">贵阳 贵阳市南明区富贵广场3804</p>

                    </div>
                    <p class="b-top-salary fr">4000-6000元/月</p>
                </div>
                <div class="f18 b-content">
                    <p>岗位职责</p>
                    <p>1、完成所辖区域的产品销售任务，提升产品在区域内的占比；</p>
                    <p>2、负责所辖区域内市场的开拓、客户的开发、网点的布局及新客户前期进场谈判工作；</p>
                    <p>3、负责所辖区域内卖场的出样规划布置，整体形象的维护；</p>
                    <p>4、负责所辖区域内的产品线的设定，产品零售价、标价的制订，整体价格体系的维护；</p>
                    <p>5、掌握所辖区域内客户进、销、存情况，及时跟进客户提货计划和物流发货状况；</p>
                    <p>6、负责渠道促销方案的制订</p>
                    <p>7、负责预算、确认渠道客户的各项费用，及时对账、催款；</p>
                    <p>8、掌握所辖区域内竞品动态及节假日促销活动计划，并制订出相应策略。</p>
                    <p>任职资格</p>
                    <p>1、具有1年以上家电或快消品行业的销售管理经验者优先，对家电行业渠道运作、市场销售有较强理解者尤佳；</p>
                    <p>2、吃苦耐劳，有较强的工作责任心和团队协作精神；</p>
                    <p>2、吃苦耐劳，有较强的工作责任心和团队协作精神；</p>
                    <p>工作时间：早上9：00-下午7:00</p>
                    <p>​如对销售不感兴趣，请勿投本公司简历</p>

                </div>
                <div>
                    <img src="img/recruitment-run.png" alt="" class="run">
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        var api= '<?php echo $siteUrl; ?>/?json=get_category_posts';
        //Your JAVASCRIPT Code
    </script>
<?php
include 'footer.php';
?>