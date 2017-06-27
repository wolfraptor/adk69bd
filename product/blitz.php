<!DOCTYPE html>
<html lang = "en">
   <head>
      <script src="js/jquery-3.2.1.min.js"></script>	
      <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link href="menu/style.css" rel="stylesheet">
	  <script>
			if (screen.width<=500)
			window.location.replace("mblitz.html")
		</script>
	  <style>
			.fadeInUp  {
				-webkit-animation-name: fadeInUp;
				animation-name: fadeInUp;
				-webkit-animation-duration: 2.5s;
				animation-duration: 2.5s;
			}
			.fadeInDown  {
				-webkit-animation-name: fadeInDown;
				animation-name: fadeInDown;
				-webkit-animation-duration: 2.5s;
				animation-duration: 2.5s;
			}
			.fadeInLeft  {
				-webkit-animation-name: fadeInLeft;
				animation-name: fadeInLeft;
				-webkit-animation-duration: 2.5s;
				animation-duration: 2.5s;
			}
			.fadeInRight  {
				-webkit-animation-name: fadeInRight;
				animation-name: fadeInRight;
				-webkit-animation-duration: 2.5s;
				animation-duration: 2.5s;
			}
			.fadeIn {
				-webkit-animation-name: fadeIn;
				animation-name: fadeIn;
				-webkit-animation-duration: 6s;
				animation-duration: 6s;
			}
		</style>
      <script>
         $(document).ready(function() {
         $(".bookmark").hide();
         	
         });
         $(window).scroll(function() {    
         	
         	var scroll = $(window).scrollTop();
         	if (scroll >= 600) {
         		//console.log('a');
         		$(".bookmark").show();
         	}
         	if (scroll <= 600) {
         		//console.log('a');
         		$(".bookmark").hide();
         	}
         	
         	var scroll = $(window).scrollTop();
         	 //console.log(scroll);
         	 
         	if (scroll >= 6600) {
         		//console.log('a');
         		$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(36% - 125px)");
         	} else if(scroll <= 6600){
         		//console.log('a');
         		$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(100% - 80px)");
         	}
         	if(scroll >= 9200){
         		//console.log('a');
         		$(".vertical-sub-nav.first-top li:last-child").css("top","calc(35% - 80px)");
         	}
         	else if(scroll <= 9200){
         		//console.log('a');
         		$(".vertical-sub-nav.first-top li:last-child").css("top","calc(100% - 46px)");
         	}
         });
      </script>
      <style>
         .buy-now, .faq-bullet {
         background: #fff !important;
         }
         .input-section-main {
         background-color: #333333;
         padding: 0 50px;
         padding-top: 50px;
         }
      </style>
	  <script>
			$.ajax({
			  url: '//cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.js',
			  dataType: 'script',
			  cache: true,
			  success: function() {
				$("#rmv-ani").appear();
				$("#blitz").appear();

				$("body").on("appear", "#rmv-ani", function() {
					$('.animated').removeClass('fadeInUp');
					$('.bz-sec1-blitz-text').removeClass('fadeInLeft');
					$('.bz-sec1-goldstrip').removeClass('fadeInRight');
				});
				
				$("body").on("appear", "#blitz", function() {
					$('.animated').addClass('fadeInUp');
					$('.bz-sec1-blitz-text').addClass('fadeInLeft');
					$('.bz-sec1-goldstrip').addClass('fadeInRight');
				});
			  }
			});
		</script>
   </head>
   <body class = "bz-background">
      <!-- HEADER --> 
      <?php include('header.php') ?>
      <div class="vertical-sub-nav first-top is-fixed bookmark">
         <div class="sub-nav-wrapper">
            <ul>
               <li data-menuanchor="1"><a class="fp-anchor" href="#1">THE PRODUCT</a></li>
               <li data-menuanchor="8"><a class="fp-anchor" href="#8">SUPPLEMENT FACTS</a></li>
               <li data-menuanchor="10"><a class="fp-anchor" href="#10">QUERIES</a></li>
            </ul>
         </div>
      </div>
      <!-- SECTION - 1 -->
      <div class ="col-md-12 p-r-null bz-sec1">
         <div class ="col-md-12 m-t-140 p-r-null">
            <div class = "col-md-6">
               <img src="images/blitz/section1/blitz.png" class ="bz-sec1-blitz-text animated fadeInLeft" id="blitz">
            </div>
            <div class="col-md-6 p-r-null">
               <img src="images/blitz/section1/goldstrip.png" class = "bz-sec1-goldstrip animated fadeInRight">
            </div>
         </div>
         <div class = "col-md-12 m-t-30 null-pad animated fadeInUp">
            <div class = "col-md-12 null-pad">
               <img src = "images/blitz/section1/6.png" class = "bz-sec1-6img">
            </div>
            <div class = "col-md-4">
            </div>
            <div class = "col-md-4">
               <p class = "bz-sec1-p">EXTREME PRE-WORKOUT<br>HANDLE WITH CARE</p>
            </div>
            <div class = "col-md-4">
               <img src = "images/blitz/section1/bjar.png" class = "bz-sec1-jar-img">
            </div>
         </div>
      </div>
	  
      <div class="clearfix"></div>
	  
      <div class = "bz-sec1-part2">
         <p class = "bz-sec1-p1">STRICTLY PRO STUFF – HANDLE WITH CARE</p>
         <p class = "bz-sec1-p2 m-t-30">Craziest pre-workout ever created on the planet // 27 grams serving // Fully loaded</p>
         <p class = "bz-sec1-p3 m-t-30">Each ingredient rightly dozed for athletes competing for medals</p>
         <p class = "bz-sec1-p4 m-t-30">BANNED SUBSTANCE FREE // RESTRICTED SUBSTANCES (BE CAREFULL)</p>
         <p class = "bz-sec1-p5 m-t-30">Strength & Speed Boosters // ATP Amplification // Dedicated Nitrogen Delivery Blend </p>
         <p class = "bz-sec1-p6 m-t-30">Blood Flow Enhancers // Energy – Hydration Support // Lactic Acid Combat </p>
         <p class = "bz-sec1-p7 m-t-30">Instant Recovery matrix // Mental Focus Enhancers</p>
      </div>
	  
      <!-- SECTION - 2 -->
      <div class = "col-md-10 col-md-offset-1 text-center m-t-140" id="rmv-ani">
         <img src = "images/blitz/section2/s2.png" class = "img-w-100p">
      </div>
	  
      <!-- SECTION - 3 -->
      <div class = "col-md-10 col-md-offset-1 m-t-140 text-center">
         <img src = "images/blitz/section3/s3.png" class = "img-w-100p">
      </div>
	  
      <!-- SECTION - 4 -->
      <div class = "col-md-12 m-t-140 main-padding">
         <div class = "col-md-12">
            <img src = "images/blitz/section4/part1.png" class = "img-h-166"> 
         </div>
         <div class = "col-md-12 m-t-140">
            <img src = "images/blitz/section4/part2.png" alt = "" class = "img-h-374"> 
         </div>
         <div class = "col-md-12 text-center m-t-100">
            <h4 class = "bz-sec4-heading">RIBOSE<sup>®</sup> (by BioEnergy)</h4>
            <p class = "bz-sec4-paragraph m-t-30 m-b-30">Fastest digesting carbohydrate on the planet<br>Immediate ATP production</p>
            <a href = "http://www.bioenergyribose.com/" target="_blank" class = "bz-sec4-link">View Details - Official website</a>
         </div>
      </div>
	  
      <!-- SECTION - 5 -->
      <div class = "col-md-10 col-md-offset-1 m-t-140">
         <img src = "images/blitz/section5/s5.png" class = "img-w-100p">
      </div>
	  
      <!-- SECTION - 7 -->
      <div class = "col-md-10 col-md-offset-1 m-t-140">
         <div class = "col-md-12">
            <h2 class = "bz-sec7-h2">VITAMINS</h2>
         </div>
         <div class = "col-md-12">
            <p class = "bz-sec7-paragraph p-l-50">B1<span class = "p-l-40 p-r-40">+</span>B2<span class = "p-l-40 p-r-40">+</span>B3<span class = "p-l-40 p-r-40">+</span>B5<span class = "p-l-40 p-r-40">+</span>B6<span class = "p-l-40 p-r-40">+</span>H<span class = "p-l-40 p-r-40">+</span>B8<span class = "p-l-40 p-r-40">+</span>CH</p>
         </div>
         <div class = "col-md-12 m-t-50">
            <h2 class = "bz-sec7-h2">MINERALS</h2>
         </div>
         <div class = "col-md-12">
            <p class = "bz-sec7-paragraph p-l-50">Mg<span class = "p-l-40 p-r-40">+</span>P<span class = "p-l-40 p-r-40">+</span>Ka<span class = "p-l-40 p-r-40">+</span>Zn<span class = "p-l-40 p-r-40">+</span>Fe<span class = "p-l-40 p-r-40">+</span>Ca<span class = "p-l-40 p-r-40">+</span>Cr<span class = "p-l-40 p-r-40">+</span>Na</p>
         </div>
      </div>
      <!-- SUPPLEMENT FACTS -->
      <!-- SECTION - 8 -->
      <div class="col-md-12 main-padding t22-supplement-facts s-sec8-m-t-6 m-t-100">
         <div class="col-md-12 b-sec7-border">
            <h1>Supplement Facts</h1>
            <img src="images/bullet/sec6-vita/start-line.png" style="" class="full-width-image">
            <h5 class="p-b-30">Serving Size: 1 levelled scoop (27 g)</h5>
            <div class="col-md-6">
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                  </div>
                  <div class="col-md-3">
                     <p>Amount Per Serving</p>
                  </div>
                  <div class="col-md-2">
                     <p>% Daily Value*</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Calories</p>
                  </div>
                  <div class="col-md-3">
                     <p>24 kcal</p>
                  </div>
                  <div class="col-md-2">
                     <p>1.2%</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Calories from Fat</p>
                  </div>
                  <div class="col-md-3">
                     <p>0 kcal</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Total Fats</p>
                  </div>
                  <div class="col-md-3">
                     <p>0 g</p>
                  </div>
                  <div class="col-md-2">
                     <p>0%</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Cholestrol</p>
                  </div>
                  <div class="col-md-3">
                     <p>0 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Total Carbohydrates</p>
                  </div>
                  <div class="col-md-3">
                     <p>6 g</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Sugars</p>
                  </div>
                  <div class="col-md-3">
                     <p>1.5 g</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <h3>Protein</h3>
                  </div>
                  <div class="col-md-3">
                     <h3>0.2 g</h3>
                  </div>
                  <div class="col-md-2">
                     <h3>0.3%</h3>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="clearfix b-sec7-bor-b m-t-40"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Vitamin B1(as Thiamine)</p>
                  </div>
                  <div class="col-md-3">
                     <p>40 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>2858%</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Vitamin B2(as Riboflavin)</p>
                  </div>
                  <div class="col-md-3">
                     <p>30 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>1875%</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Vitamin B3 (as Niacin)</p>
                  </div>
                  <div class="col-md-3">
                     <p>100 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>556%</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Vitamin B6(as Pyridoxine HCL)</p>
                  </div>
                  <div class="col-md-3">
                     <p>30 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>1500%</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Biotin(Vitamin H)</p>
                  </div>
                  <div class="col-md-3">
                     <p>100 mcg</p>
                  </div>
                  <div class="col-md-2">
                     <p>100%</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Pantothenic Acid(Vitamine B5)</p>
                  </div>
                  <div class="col-md-3">
                     <p>70 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Choline(as Alpha GPC)</p>
                  </div>
                  <div class="col-md-3">
                     <p>100 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Inositol</p>
                  </div>
                  <div class="col-md-3">
                     <p>100 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="clearfix b-sec7-bor-b m-t-40"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Calcium (as Calcium Carbonate)</p>
                  </div>
                  <div class="col-md-3">
                     <p>150 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>38%</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Magnesium (as Di-Magnesium Malate)</p>
                  </div>
                  <div class="col-md-3">
                     <p>100 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>33%</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Ptassium(Potassium Bicarbonate + Di-<br>Potassium Phosphate)</p>
                  </div>
                  <div class="col-md-3">
                     <p>100 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Phosphorous (as Di-Potassium<br> Phosphate)</p>
                  </div>
                  <div class="col-md-3">
                     <p>50 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Sodium(as Sodium Bicarbonate)</p>
                  </div>
                  <div class="col-md-3">
                     <p>200 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Iron(as Ferrous Fumarate)</p>
                  </div>
                  <div class="col-md-3">
                     <p>15 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>54%</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad">
                  <div class="col-md-7">
                     <p>Chromium(as Chromium Picolinate)</p>
                  </div>
                  <div class="col-md-3">
                     <p>5 mg</p>
                  </div>
                  <div class="col-md-2">
                     <p>-|-</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 row b-sec7-div-pad p-t-10">
                  <div class="col-md-2" style="width: 10%;">
                     <p>-|-</p>
                  </div>
                  <div class="col-md-10">
                     <p>Daily value not extablished.</p>
                  </div>
                  <div class="col-md-2" style="width: 10%;">
                     <p>*</p>
                  </div>
                  <div class="col-md-10">
                     <p>Percent Daily Values are based on 2000 calorie diet.</p>
                  </div>
                  <div class="col-md-2" style="width: 10%;">
                     <p>**</p>
                  </div>
                  <div class="col-md-10">
                     <p>Processing and Life Time overages added for vitamin compounds to compensate for loss of active ingredients during production; shelf life of the product.</p>
                  </div>
                  <div class="col-md-2" style="width: 10%;">
                     <p>***</p>
                  </div>
                  <div class="col-md-10">
                     <p>Claimed values are averaged and might vary slightly between different flavor variants of the product.</p>
                  </div>
               </div>
               <!-- <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <h4 style=" font-family: Lato Regular;">All claimed ingredient values on the label are for 1 full serving of the product</h4>
                  </div> -->
            </div>
            <div class="col-md-6">
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-8">
                     <h2 class="pad-t-b-10">BLITZ<sup> TM</sup> - Proprietary Blend</h2>
                  </div>
                  <div class="col-md-2">
                     <p></p>
                  </div>
                  <div class="col-md-2">
                     <p class="pad-t-b-10">20.1 g</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-7">
                     <p class="s-heading">Strength // Speed Boosters</p>
                  </div>
                  <div class="col-md-3">
                     <p></p>
                  </div>
                  <div class="col-md-2">
                     <p class="pad-t-b-10">4100 mg</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null">
                  <div class="col-md-12">
                     <p class="pad-t-b-14">[Beta-Alanine + L-Taurine] (Micronized FFAS, 99% pure); Agmatine Sulphate; Gamma - AminoButyric Acid (GABA); Cordyceps Sinensis Extract (std. to 50% polysaccharides, 30% cordycepic acid)</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-7">
                     <p class="s-heading">ATP Amplification // Growth  </p>
                  </div>
                  <div class="col-md-3">
                     <p></p>
                  </div>
                  <div class="col-md-2">
                     <p class="pad-t-b-10">3900 mg</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-12">
                     <p class="pad-t-b-14">D-Aspartic Acid (micronized); [Creatine HCL + Creatine Monohydrate] (200 mesh, 99% pure)</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-7">
                     <p class="s-heading">Nitrogen Delivery // Blood Flow </p>
                  </div>
                  <div class="col-md-3">
                     <p></p>
                  </div>
                  <div class="col-md-2">
                     <p class="pad-t-b-10">1400 mg</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-12">
                     <p class="pad-t-b-14">Betaine (90% pure); [L-Ornithine HCL + L-Norvaline] (Micronized FFAS, 99% pure);  Salvia Miltiorrhiza (Dan Shen) (20:1 full spectrum)</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-7">
                     <p class="s-heading">Energy // Hydration // Endurance</p>
                  </div>
                  <div class="col-md-2">
                     <p></p>
                  </div>
                  <div class="col-md-3 text-right">
                     <p class="pad-t-b-10">11100 mg</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-12">
                     <p class=" pad-t-b-14">L-Citrulline-DL-Malate (micronized); Glucuronolactone; Pterostilbene; Ribose; Dextrose; Natural Fruit concentrates</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-7">
                     <p class="s-heading">Lactic Acid Combat // Instant Recovery </p>
                  </div>
                  <div class="col-md-3">
                     <p></p>
                  </div>
                  <div class="col-md-2">
                     <p class="pad-t-b-10">2500 mg</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-12">
                     <p class=" pad-t-b-14">[N-Acetyl-L-Carnitine (NALC) + L-Histidine HCL + L-Leucine] (micronized, 98% pure); Schisandra  Chinensis-Berry Extract (std. to 13% Schisandrins); Potassium Bicarbonate;  Sodium Bicarbonate; Calcium Carbonate; Citric Acid</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-7">
                     <p class="s-heading">Intense Focus // Mood Enhancers  </p>
                  </div>
                  <div class="col-md-3">
                     <p></p>
                  </div>
                  <div class="col-md-2">
                     <p class="pad-t-b-10">2000 mg</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-12">
                     <p class=" pad-t-b-14">[Acetyl-L-Tyrosine + L-Theanine] (micronized, 99% pure); Theobromine (99% pure); Caffeine (natural, 95% pure); Dendrobium NOBILE extract (std. to 30% PEA); Ephedra Gerardiana Extract (std. to 8% Ephedrine); Alpha GPC (choline); Pantothenic Acid; Inositol</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-12">
                     <p class="s-heading">Other Ingredients	</p>
                  </div>
                  <div class="clearfix b-sec7-bor-b"></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <div class="col-md-12">
                     <p class=" pad-t-b-14">Artificial Flavors; Malt Extract; Sucralose; Silicon Di-Oxide</p>
                  </div>
                  <div class="clearfix "></div>
               </div>
               <div class="col-md-12 p-r-null b-sec7-div-pad">
                  <h4 style=" font-family: Lato Regular;">All claimed ingredient values on the label are for 1 full serving of the product</h4>
               </div>
            </div>
         </div>
         <div class="col-md-6 m-t-30">
            <div class="col-md-12 b-sec7-border row">
               <div class="b-sec7-bor-b m-t-20"></div>
               <h3>DIRECTIONS FOR USE</h3>
               <div class=" b-sec7-bor-b"></div>
               <p class="dash-left m-t-10">-</p>
               <p class="b-sec7-div-pad m-t-10">BLITZ is intended to be consumed as an Intra-Workout only.</p>
               <p class="dash-left">-</p>
               <p style="">Add 1 scoop of SHOT in 220 ml of water. Shake well before use.</p>
               <p class="dash-left">-</p>
               <p style="">Do NOT consume with milk.</p>
               <div class="b-sec7-bor-b"></div>
               <h3>ALLERGY INFORMATION</h3>
               <div class="b-sec7-bor-b"></div>
               <p class="b-sec7-div-pad pad-t-b-10">This product is manufactured in a plant that also processes soy, egg, fish and tree nuts ingredients.</p>
               <div class="b-sec7-bor-b"></div>
               <h3>EXPIRY // STORAGE</h3>
               <div class="b-sec7-bor-b"></div>
               <p class="dash-left m-t-10">-</p>
               <p class="m-t-10 m-t-10">Best before 24 months of manufacturing.</p>
               <p class="dash-left">-</p>
               <p>Store in a cool dry place.</p>
            </div>
            <div class="col-md-12 b-sec7-border row" >
               <p style="text-transform:uppercase; padding-top: 13px; text-align:center; color:#dc9f39 !important">( To be consumed as dietary supplement only )</p>
            </div>
            <div class="col-md-12 b-sec7-border m-b-15 row">
               <p style="font-size: 12px; padding-top: 2px;color: #dc9f39;">Ingredients used to formulate this product are NOT Sports Banned Substances. Professional athletes should refer to the WADA website for more information on prohibited substances in sports.</p>
            </div>
         </div>
         <div class="col-md-6  m-t-30" style="padding-right: 0px;">
            <div class="col-md-12 b-sec7-border" style="">
               <div class="clearfix b-sec7-bor-b m-t-20"></div>
               <h3>WARNINGS</h3>
               <div class="clearfix b-sec7-bor-b"></div>
               <p class="dash-left m-t-10">-</p>
               <p class="m-t-10"> Only intended for use by professional athletes. </p>
               <p class="dash-left">-</p>
               <p>Do NOT consume if training period less than 2 hours per session.</p>
               <p class="dash-left">-</p>
               <p>Do NOT consume full dose if you have never been exposed any other pre-workout supplement before; start with half dose instead. </p>
               <p class="dash-left">-</p>
               <p>Do NOT exceed recommended dose (strictly). Overdose may cause nausea / headache / dizziness. </p>
               <p class="dash-left">-</p>
               <p>Do NOT use in combination with other supplements/pharmaceuticals that are considered to be stimulants. </p>
               <p class="dash-left">-</p>
               <p>Do NOT use BLITZ for more than 8 weeks of continuous usage. </p>
               <p class="dash-left">-</p>
               <p>Do NOT consume BLITZ on non-training days.</p>
               <p class="dash-left">-</p>
               <p>Consult your physician before using this product if you are taking any medication or are under a physician's care. </p>
               <p class="dash-left">-</p>
               <p>Do NOT consume if exposed to high blood pressure. Discontinue use if you experience any adverse reaction to this product.</p>
               <p class="dash-left">-</p>
               <p>Only intended for use by healthy adults, 18 years and older. </p>
               <p class="dash-left">-</p>
               <p>Keep out of reach of children. Not for lactating/pregnant women.</p>
            </div>
         </div>
      </div>
      <!--<div class=" col-md-12 b-sec8 main-padding m-t-100 m-b-60" >
         <div class="col-md-3">
         	<h2>FLAVOURS</h2>
         </div>
         <div class="col-md-4">
         	<h4>FRUIT PARADE</h4>
         </div>
         <div class=" col-md-4">
         
         </div>
         </div>
         <div class=" col-md-12 b-sec8 main-padding m-b-100" >
         <div class="col-md-3">
         	<h2>PACKAGES</h2>
         </div>
         <div class="col-md-4">
         	<h4>950 G // 45 SERVINGS</h4>
         </div>
         <div class=" col-md-3">
         	<h4 style="color:#000; font-weight: bold;">BUY NOW</h4>
         </div>
         </div>-->
      <div class=" col-md-12  main-padding null-pad buy-now" >
         <div class=" col-md-12 m-t-100 m-b-60" >
            <div class="col-md-3">
               <h2>FLAVOURS</h2>
            </div>
            <div class="col-md-3">
               <h4>TANGO MANGO</h4>
            </div>
            <div class=" col-md-3">
               <h4>FRUIT PARADE</h4>
            </div>
            <div class=" col-md-3">
            </div>
         </div>
         <div class=" col-md-12 m-b-100" >
            <div class="col-md-3">
               <h2>PACKAGES</h2>
            </div>
            <div class="col-md-3">
               <h4>1.35 Kg/50 Servings</h4>
            </div>
            <div class="col-md-3" style="padding:11px 0px;">
               <a href="" class="btn-ani" style="color:#000; padding: 12px 44px; margin-left: 15px;">
               <span></span>
               <span></span>
               <span></span>
               <span></span>Add to cart</a>
            </div>
         </div>
      </div>
      <div class=" col-md-12 null-pad">
         <div class="b-sec7-bor-b"></div>
      </div>
      <div class="col-md-12 faq main-padding faq-bullet">
         <div class="col-sm-12 col-md-12 input-section-main">
            <div class="col-sm-12 col-md-12 input-section">
               <div class="col-sm-6 col-md-6 input-left">
                  <h2><img src="images/faq-icon.png" class="faq-icon-img">ANY QUESTIONS ?</h2>
                  <p>Ask us anything about the product. Team DAAKI shall  analyze and respond to each post. We publish the most helpful questions for the community here so that others can learn better about DAAKI supplements.</p>
               </div>
               <div class="col-sm-6 col-md-6 input-right">
                  <textarea  type="text" class="faq-textarea" placeholder="Leave us a line"></textarea>
                  <p class="faq-submit">SUBMIT</p>
               </div>
            </div>
            <div class="col-sm-12 col-md-12 faq-content">
               <h1>FAQ</h1>
               <div class="name-date">
                  <p><img src="images/faq-icon.png" class="">MATHEW G. <span> 08/02/15 |	03:49 pm</span></p>
               </div>
               <div class="user-que-ans">
                  <div class="user-que">
                     Q.   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ?
                  </div>
                  <div class="col-md-12 user-ans null-pad">
                     <div class="col-sm-1 col-md-1 ans-head null-pad" >
                        <p>Answer :</p>
                     </div>
                     <div class="col-sm-8 col-md-8 ans-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 null-pad faq-see-more">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4 see-more-rep">
                     <p>See More Replies <i class="fa fa-angle-down"></i></p>
                  </div>
                  <div class="col-md-4 null-pad">
                     <p class="faq-preview"><span>WAS THIS PREVIEW HELPFUL? <i class="fa fa-thumbs-up"> 0 </i> <i class="fa fa-thumbs-down"> 0 </i> </span></p>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-12 faq-content">
               <div class="name-date">
                  <p><img src="images/faq-icon.png" class="">MATHEW G. <span> 08/02/15 |	03:49 pm</span></p>
               </div>
               <div class="user-que-ans">
                  <div class="user-que">
                     Q.   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ?
                  </div>
                  <div class="col-md-12 user-ans null-pad">
                     <div class="col-sm-1 col-md-1 ans-head null-pad" >
                        <p>Answer :</p>
                     </div>
                     <div class="col-sm-8 col-md-8 ans-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</p>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
               <div class="user-que-ans m-t-40">
                  <div class="user-que">
                     Q.   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ?
                  </div>
                  <div class="col-md-12 user-ans null-pad">
                     <div class="col-sm-1 col-md-1 ans-head null-pad" >
                        <p>Answer :</p>
                     </div>
                     <div class="col-sm-8 col-md-8 ans-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 null-pad faq-see-more">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4 see-more-rep">
                     <!-- <p>See More Replies <i class="fa fa-angle-down"></i></p> -->
                  </div>
                  <div class="col-md-4 null-pad">
                     <p class="faq-preview"><span>WAS THIS PREVIEW HELPFUL? <i class="fa fa-thumbs-up"> 0 </i> <i class="fa fa-thumbs-down"> 0 </i> </span></p>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-8 col-md-offset-4 faq-pagination">
               <ul>
                  <li>1</li>
                  <li>2</li>
                  <li>3</li>
                  <li>4</li>
                  <li>5</li>
                  <li>6</li>
               </ul>
            </div>
         </div>
         <div class="clearfix"></div>
         <p class="slide-up-inner">SLIDE UP <i class="fa fa-chevron-up"></i></p>
      </div>
      <!-- Slide up -->
      <!-- Line after review -->
      <!-- Footer -->
      <?php include('footer.php') ?>
   </body>
</html>