<?php
/*
Template Name:联系我们
*/
?>
<?php
include 'header.php';
?>
    <div class="contact">
        <div class="container main clear">
            <div class="con-left fl">
                <div class="center-top">
                    <span class="item1">联系我们</span>
                    <span class="item2"></span>
                    <span class="item3">CONTACT US</span>
                </div>
                <ul class="center-list nav">

                    <li><a class="active" href="<?php echo  $siteUrl.'/contact/' ?>"><span><span>联系方式</span><strong></strong></span></a></li>

                    <li><a class="" href="<?php echo  $siteUrl.'/job/' ?>"><span><span>在线招聘</span><strong></strong></span></a></li>

                </ul>
            </div>

            <div class="con-right fr">
                <?php
                include_once 'breadcrumb.php';
                ?>
                <div style="width:824px;height:658px;border:#1dd9da solid 4px;" id="dituContent"></div>
                <div class="info clear">
                    <div class="QRcode fl"></div>
                    <div class="info-more fr f20">
                        <ul>
                            <li>公司地址：贵州省黔东南苗族侗族自治州镇远县青溪坪阳小学</li>
                            <li>邮编：5530000</li>
                            <li>联系热线：13800000000</li>
                            <li>官方网站：www.sgxueubvr.com</li>
                            <li>微信公众号：123456789</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
    <script type="text/javascript">
        //创建和初始化地图函数：
        function initMap() {
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMarker();//向地图中添加marker
        }

        //创建地图函数：
        function createMap() {
            var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
            var point = new BMap.Point(108.743008,27.125821);//定义一个中心点坐标
            map.centerAndZoom(point, 18);//设定地图的中心点和坐标并将地图显示在地图容器中
            window.map = map;//将map变量存储在全局
        }

        //地图事件设置函数：
        function setMapEvent() {
            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
            map.enableScrollWheelZoom();//启用地图滚轮放大缩小
            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
            map.enableKeyboard();//启用键盘上下左右键移动地图
        }

        //地图控件添加函数：
        function addMapControl() {
            //向地图中添加缩放控件
            var ctrl_nav = new BMap.NavigationControl({
                anchor: BMAP_ANCHOR_TOP_LEFT,
                type: BMAP_NAVIGATION_CONTROL_LARGE
            });
            map.addControl(ctrl_nav);
            //向地图中添加缩略图控件
            var ctrl_ove = new BMap.OverviewMapControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: 1});
            map.addControl(ctrl_ove);
            //向地图中添加比例尺控件
            var ctrl_sca = new BMap.ScaleControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT});
            map.addControl(ctrl_sca);
        }

        //标注点数组
        var markerArr = [{
            title: "镇远县青溪坪阳小学",
            content: "联系热线： 13765168127 18579066106",
            point: "108.743008|27.125821",
            isOpen: 0,
            icon: {w: 21, h: 21, l: 0, t: 0, x: 6, lb: 5}
        }
        ];

        //创建marker
        function addMarker() {
            for (var i = 0; i < markerArr.length; i++) {
                var json = markerArr[i];
                var p0 = json.point.split("|")[0];
                var p1 = json.point.split("|")[1];
                var point = new BMap.Point(p0, p1);
                var iconImg = createIcon(json.icon);
                var marker = new BMap.Marker(point, {icon: iconImg});
                var iw = createInfoWindow(i);
                var label = new BMap.Label(json.title, {"offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)});
                marker.setLabel(label);
                map.addOverlay(marker);
                label.setStyle({
                    borderColor: "#808080",
                    color: "#f00",
                    cursor: "pointer"
                });

                (function () {
                    var index = i;
                    var _iw = createInfoWindow(i);
                    var _marker = marker;
                    _marker.addEventListener("click", function () {
                        this.openInfoWindow(_iw);
                    });
                    _iw.addEventListener("open", function () {
                        _marker.getLabel().hide();
                    })
                    _iw.addEventListener("close", function () {
                        _marker.getLabel().show();
                    })
                    label.addEventListener("click", function () {
                        _marker.openInfoWindow(_iw);
                    })
                    if (!!json.isOpen) {
                        label.hide();
                        _marker.openInfoWindow(_iw);
                    }
                })()
            }
        }

        //创建InfoWindow
        function createInfoWindow(i) {
            var json = markerArr[i];
            var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
            return iw;
        }

        //创建一个Icon
        function createIcon(json) {
            var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w, 28), {
                imageOffset: new BMap.Size(-46, -18),
                infoWindowOffset: new BMap.Size(json.lb + 5, 1),
                offset: new BMap.Size(json.x, json.h)
            })
            return icon;
        }

        initMap();//创建和初始化地图
    </script>
<?php
include 'footer.php';
?>