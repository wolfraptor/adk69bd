$(document).ready(function () {
  
  var kasuta3D = $("#mySpriteSpin"),
      meter3D = $("#mySpriteSpin2"),
      bullet3D = $("#mySpriteSpin3");
  
  var slide = $('#control');
  
    kasuta3D.spritespin({
        // path to the source images.
        source: [
            "images/360/kasuta/1.png",
            "images/360/kasuta/2.png",
            "images/360/kasuta/3.png",
            "images/360/kasuta/4.png",
            "images/360/kasuta/5.png",
            "images/360/kasuta/6.png",
            "images/360/kasuta/7.png",
            "images/360/kasuta/8.png",
            "images/360/kasuta/9.png",
            "images/360/kasuta/10.png",
            "images/360/kasuta/11.png",
            "images/360/kasuta/12.png",
            "images/360/kasuta/13.png",
            "images/360/kasuta/14.png",
            "images/360/kasuta/15.png",
            "images/360/kasuta/16.png",
            "images/360/kasuta/17.png",
            "images/360/kasuta/18.png",
            "images/360/kasuta/19.png",
            "images/360/kasuta/20.png",
            "images/360/kasuta/21.png",
            "images/360/kasuta/22.png",
            "images/360/kasuta/23.png",
            "images/360/kasuta/24.png",
            "images/360/kasuta/25.png",
            "images/360/kasuta/26.png",
            "images/360/kasuta/27.png",
            "images/360/kasuta/28.png",
            "images/360/kasuta/29.png",
            "images/360/kasuta/30.png",
            "images/360/kasuta/31.png",
            "images/360/kasuta/32.png",
            "images/360/kasuta/33.png",
            "images/360/kasuta/34.png",
            "images/360/kasuta/35.png",
            "images/360/kasuta/36.png",
            "images/360/kasuta/37.png",
        ],
        width: 246,
        height: 405,
        sense: -1,
        behavior: "drag", // "hold"
        frameTIme: 40,
        animate: false,

        scrollThreshold: 10,
      onLoad: function(){
        slide.slider({
            min: 0,
            max: 36,
            slide: function(e, ui){
                var api = kasuta3D.spritespin('api');
                api.stopAnimation();
                api.updateFrame(ui.value);
            }
        })
    },
    onFrame: function(e, data){
        slide.slider('value', data.frame);
    }
    });
  
    meter3D.spritespin({
        // path to the source images.
        source: [
            "images/360/meter/1.png",
            "images/360/meter/2.png",
            "images/360/meter/3.png",
            "images/360/meter/4.png",
            "images/360/meter/5.png",
            "images/360/meter/6.png",
            "images/360/meter/7.png",
            "images/360/meter/8.png",
            "images/360/meter/9.png",
            "images/360/meter/10.png",
            "images/360/meter/11.png",
            "images/360/meter/12.png",
            "images/360/meter/13.png",
            "images/360/meter/14.png",
            "images/360/meter/15.png",
            "images/360/meter/16.png",
            "images/360/meter/17.png",
            "images/360/meter/18.png",
            "images/360/meter/19.png",
            "images/360/meter/20.png",
            "images/360/meter/21.png",
            "images/360/meter/22.png",
            "images/360/meter/23.png",
            "images/360/meter/24.png",
            "images/360/meter/25.png",
            "images/360/meter/26.png",
            "images/360/meter/27.png",
            "images/360/meter/28.png",
            "images/360/meter/29.png",
            "images/360/meter/30.png",
            "images/360/meter/31.png",
            "images/360/meter/32.png",
            "images/360/meter/33.png",
            "images/360/meter/34.png",
            "images/360/meter/35.png",
            "images/360/meter/36.png",
            "images/360/meter/37.png",
            "images/360/meter/37.png",
        ],
        width: 246,
        height: 405,
        behavior: "drag", // "hold"
        frameTIme: 40,
        animate: false,

        scrollThreshold: 10,
      onLoad: function(){
        slide.slider({
            min: 0,
            max: 36,
            slide: function(e, ui){
                var api = meter3D.spritespin('api');
                api.stopAnimation();
                api.updateFrame(ui.value);
            }
        })
    },
    onFrame: function(e, data){
        slide.slider('value', data.frame);
    }
    });
  
    bullet3D.spritespin({
        // path to the source images.
        source: [
            "images/360/bullet/1.png",
            "images/360/bullet/2.png",
            "images/360/bullet/3.png",
            "images/360/bullet/4.png",
            "images/360/bullet/5.png",
            "images/360/bullet/6.png",
            "images/360/bullet/7.png",
            "images/360/bullet/8.png",
            "images/360/bullet/9.png",
            "images/360/bullet/10.png",
            "images/360/bullet/11.png",
            "images/360/bullet/12.png",
            "images/360/bullet/13.png",
            "images/360/bullet/14.png",
            "images/360/bullet/15.png",
            "images/360/bullet/16.png",
            "images/360/bullet/17.png",
            "images/360/bullet/18.png",
            "images/360/bullet/19.png",
            "images/360/bullet/20.png",
            "images/360/bullet/21.png",
            "images/360/bullet/22.png",
            "images/360/bullet/23.png",
            "images/360/bullet/24.png",
            "images/360/bullet/25.png",
            "images/360/bullet/26.png",
            "images/360/bullet/27.png",
            "images/360/bullet/28.png",
            "images/360/bullet/29.png",
            "images/360/bullet/30.png",
            "images/360/bullet/31.png",
            "images/360/bullet/32.png",
            "images/360/bullet/33.png",
            "images/360/bullet/34.png",
            "images/360/bullet/35.png",
            "images/360/bullet/36.png",
            "images/360/bullet/37.png",
        ],
        width: 246,
        height: 405,
        behavior: "drag", // "hold"
        frameTIme: 40,
        animate: false,

        scrollThreshold: 10,
      onLoad: function(){
        slide.slider({
            min: 0,
            max: 36,
            slide: function(e, ui){
                var api = bullet3D.spritespin('api');
                api.stopAnimation();
                api.updateFrame(ui.value);
            }
        })
    },
    onFrame: function(e, data){
        slide.slider('value', data.frame);
    }
    });



});
