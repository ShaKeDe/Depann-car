
<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
<!-- use jssor.slider.debug.js instead for debug -->
<script>
    jQuery(document).ready(function ($) {

        var jssor_1_SlideoTransitions = [
            [{b:0,d:1200,y:-290,e:{y:27}}],
            [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:87.50,t:-87.50}},{b:11000,d:500,c:{x:-87.50,t:87.50}}],
            [{b:0,d:1200,x:410,e:{x:27}}],
            [{b:-1,d:1,o:-1},{b:0,d:1200,o:1,e:{o:5}}],
            [{b:-1,d:1,c:{x:175.0,t:-175.0}},{b:0,d:800,c:{x:-175.0,t:175.0},e:{c:{x:7,t:7}}}],
            [{b:-1,d:1,o:-1},{b:0,d:1200,x:-570,o:1,e:{x:6}}],
            [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
            [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
            [{b:2000,d:1200,rY:30}],
            [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
            [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
        ];

        var jssor_1_options = {
            $AutoPlay: true,
            $Idle: 2000,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                    [{d:2000,b:1000}]
                ]
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 1200);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>

<style>

    /* jssor slider bullet navigator skin 01 css */
    /*
    .jssorb01 div           (normal)
    .jssorb01 div:hover     (normal mouseover)
    .jssorb01 .av           (active)
    .jssorb01 .av:hover     (active mouseover)
    .jssorb01 .dn           (mousedown)
    */
    .jssorb01 {
        position: absolute;
    }
    .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
        position: absolute;
        /* size of bullet elment */
        width: 12px;
        height: 12px;
        filter: alpha(opacity=70);
        opacity: .7;
        overflow: hidden;
        cursor: pointer;
        border: #000 1px solid;
    }
    .jssorb01 div { background-color: gray; }
    .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
    .jssorb01 .av { background-color: #fff; }
    .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

    /* jssor slider arrow navigator skin 02 css */
    /*
    .jssora02l                  (normal)
    .jssora02r                  (normal)
    .jssora02l:hover            (normal mouseover)
    .jssora02r:hover            (normal mouseover)
    .jssora02l.jssora02ldn      (mousedown)
    .jssora02r.jssora02rdn      (mousedown)
    */
    .jssora02l, .jssora02r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 55px;
        height: 55px;
        cursor: pointer;
        background: url('img/a02.png') no-repeat;
        overflow: hidden;
    }
    .jssora02l { background-position: -3px -33px; }
    .jssora02r { background-position: -63px -33px; }
    .jssora02l:hover { background-position: -123px -33px; }
    .jssora02r:hover { background-position: -183px -33px; }
    .jssora02l.jssora02ldn { background-position: -3px -33px; }
    .jssora02r.jssora02rdn { background-position: -63px -33px; }
</style>


<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1200px; height: 300px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1200px; height: 300px; overflow: hidden;">
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="img/4.jpg" />
            <div data-u="caption" data-t="0" style="position: absolute; top: 320px; left: 30px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">Depann'Car</div>
        </div>
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="img/1.jpg" />
            <div data-u="caption" data-t="0" style="position: absolute; top: 320px; left: 30px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">Totallement gratuit !</div>
        </div>
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="img/1.jpg" />
            <div data-u="caption" data-t="2" style="position: absolute; top: 30px; left: -380px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">Inscrivez vous !</div>
        </div>

    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
        <div data-u="prototype" style="width:12px;height:12px;"></div>
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
</div>