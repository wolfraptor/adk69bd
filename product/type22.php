 <!DOCTYPE html>
	<head>
		<script src="js/jquery-3.2.1.min.js"></script>	
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="menu/style.css" rel="stylesheet">
		<script>
			if (screen.width<=500)
			window.location.replace("mtype22.html")
		</script>
		<style>
			.b-sec7{
				background:#fff !important;
			}
			.buy-now, .faq-bullet{
				background:#fff !important;
			}
			.input-section-main {
				background-color: #333333;
				padding: 0 50px;
				padding-top: 50px;
			}
			.fadeInUp {
				-webkit-animation-name: fadeInUp;
				animation-name: fadeInUp;
				-webkit-animation-duration: 2.5s;
				animation-duration: 2.5s;
			}
			.fadeInDown {
				-webkit-animation-name: fadeInDown;
				animation-name: fadeInDown;
				-webkit-animation-duration: 2.5s;
				animation-duration: 2.5s;
			}
			.fadeIn {
				-webkit-animation-name: fadeIn;
				animation-name: fadeIn;
				-webkit-animation-duration: 4s;
				animation-duration: 4s;
			}
			.bounce {
				-webkit-animation-name: bounce;
				animation-name: bounce;
				-webkit-animation-duration: 2s;
				animation-duration: 2s;
			}
		</style>
		<script>
			$(document).ready(function() {
			$(".bookmark").hide();
				
			});
			$(window).scroll(function() {    
				
				var scroll = $(window).scrollTop();
				if (scroll >= 500) {
					//console.log('a');
					$(".bookmark").show();
				}
				if (scroll <= 500) {
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
				if(scroll >= 9080){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(35% - 80px)");
				}
				else if(scroll <= 9080){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(100% - 46px)");
				}
			});
		</script>
		<script>
			$(document).ready(function() {
			$('.t22-sec1-left-img-line').delay(500).queue(function(){
			  $(this).addClass("t22-sec1-left-img-height");
			});
			
			$('.t22-r-img').delay(1000).queue(function(){
			  $(this).addClass("t22-r-img-ani");
			});
		});
		</script>
		<script>
			$.ajax({
			  url: '//cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.js',
			  dataType: 'script',
			  cache: true,
			  success: function() {
				$("#rmv-ani").appear();
				$("#type22").appear();

				$("body").on("appear", "#rmv-ani", function() {
					$('.animated').removeClass('fadeInUp');
					$('.animated').removeClass('fadeInDown');
				});
				
				$("body").on("appear", "#type22", function() {
					$('.animated').addClass('fadeInUp');
					$('.animated').addClass('fadeInDown');
				});
			  }
			});
		</script>
	</head>
	<body bgcolor="#fff">
	
		<!-- <Header> -->
		<?php include('header.php') ?>
		
		<div class="vertical-sub-nav first-top is-fixed bookmark">
		   <div class="sub-nav-wrapper">
				<ul>
					<li data-menuanchor="1"><a class="fp-anchor" href="#1">THE PRODUCT</a></li>
					<li data-menuanchor="8"><a class="fp-anchor" href="#8">SUPPLEMENT FACTS</a></li>
					<!--<li data-menuanchor="9"><a class="fp-anchor" href="#9">COMPARISION</a></li>-->
					<li data-menuanchor="10"><a class="fp-anchor" href="#10">QUERIES</a></li>
				</ul>
			</div>
		</div>
		
		<!-- Section 1 -->
		<div class="col-md-12 t22-sec1 main-padding">
		
			<div class="col-md-4 animated fadeInUp">
				<img src="images/type22/t22-line.png" class="t22-sec1-left-img-line">
				<img src="images/type22/5-word.png" class="t22-sec1-left-img">
			</div> 
						
			<div class="col-md-4" style="color: #dc9f39;">
			
				<div class="col-md-12 row animated fadeInDown">					
					<div class="col-md-11 row" id="type22">					
						<h1 class="t22-sec1-h1">TYPE</h1>
					</div>
					<div class="col-md-1">			
						<p class="t22-tm">TM<p>
					</div>
				</div>
				<div class="col-md-12 row animated fadeInDown">
					<img src="images/type22/22-inclined.png" class="t22-img2" >
				</div>
				
				
				<div class="col-md-12 row animated fadeInUp">
					<p class="m-t-20 t22-sec1-p1">The Fuel for Voluminous Muscle Gains. A Dream Muscle Gainer for pro Athletes. Tank up your Gains //</p>
					<p class="m-t-20 t22-sec1-p2">Flex like never before</p>
				</div>
			</div>
			
			<div class="col-md-4 text-right animated fadeInUp">
				<img src="images/type22/type22.png" class="t22-r-img" >
			</div> 
		</div> 
		
		<!-- Section 2 -->
		<div class="col-md-12 main-padding t22-sec2 animated fadeInUp">
			<div class="col-md-12">
				<div class="col-md-12 text-center">
					<h2>PROTIEN</h2>
					<p class="t22-sec2-p">29 GRAMS</p>
				</div>
				
			</div>
		
		</div>
		
		<div class="col-md-12 main-padding t22-sec2-part2">
		
			<div class="col-sm-6 col-md-3 m-t-60">
				<div class="col-md-12 text-center null-pad">
					<img src="images/type22/milk-bottle.png">
				</div>
				<div class="col-md-12 null-pad">
					<h4>Milk Protein</h4>
					<ul>
						<li id="rmv-ani">80% Pure - Microfiltered Cold Temperature Processed - Cow Milk Protein Concentrate</li>
						<li>Goodness of Whey and Casein</li>
					</ul>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-3 m-t-60">
				<div class="col-md-12 text-center null-pad">
					<img src="images/type22/eggs.png">
				</div>
				<div class="col-md-12 null-pad">
					<h4>Egg Whole</h4>
					<ul>
						<li>60% Pure - Microfiltered - Free Range Egg concentrates</li>
						<li>Great Combination of Proteins and Fats needed for extra gains</li>
					</ul>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-3 m-t-60">
				<div class="col-md-12 text-center null-pad">
					<img src="images/type22/ricebag.png">
				</div>
				<div class="col-md-12 null-pad">
					<h4>Rice Protein</h4>
					<ul>
						<li>Organically Processed - microfiltered Brown Rice protein</li>
						<li>84% pure protein concentrates</li>
						<li>Rich source of protein and fiber</li>
					</ul>
				</div>
			</div>
			
			<div class="col-sm-6 col-md-3 m-t-60">
				<div class="col-md-12 text-center null-pad">
					<img src="images/type22/peanut.png">
				</div>
				<div class="col-md-12 null-pad">
					<h4>Peanut Protein</h4>
					<ul>
						<li>Sattu / Roasted Gram (a North Indian specialty) proteins</li>
						<li>Organically processed - 80% pure Microfiltered Protein concentrates</li>
						<li>Traditional source of mass gainer used in Country Sides of India</li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<!-- Section 3 COMPLEX CARBS-->
		
		<div class="col-md-12 null-pad t22-sec3">
			<div class="col-md-12 main-padding t22-sec3-top">
				<h2>COMPLEX CARBS</h2>
				<p class="t22-sec3-p1">31 GRAMS</p>
				
				<div class="col-md-12 main-padding m-t-30">
					<p class="t22-sec3-p2">- All natural sources of complex carbs // fats // proteins</p>
					<p class="t22-sec3-p2">- Rich in minerals like iron, magnesium, calcium etc.</p>
					<p class="t22-sec3-p2">- Traditional food sources for gaining good weight(Muscles)</p>
					<p class="t22-sec3-p2">- Natural replacement for dextrose from mass gainers</p>
				</div>
			</div>
			<div class="col-md-12 m-t-100 m-b-100 t22-sec3-bot">
				<div class="col-sm-2 col-md-2 adj-width20">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/almond.png">
						<h4>Almond Milk</h4>
					</div>
				</div>
				<div class="col-sm-2 col-md-2 adj-width20">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/coconut.png">
						<h4>Coconut Milk</h4>
					</div>
				</div>
				<div class="col-sm-2 col-md-2 adj-width20">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/honey.png">
						<h4>Raw Honey</h4>
					</div>
				</div>
				<div class="col-sm-2 col-md-2 adj-width20">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/dates.png">
						<h4>Dates</h4>
					</div>
				</div>
				<div class="col-sm-2 col-md-2 adj-width20">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/jaggery.png">
						<h4>Jaggery</h4>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<!-- Section 4 Herbs -->
		
		<div class="col-md-12 null-pad t22-sec4 m-b-100">
			<div class="col-md-12 main-padding t22-sec4-top">
				<h2>TESTBOOSTER HERBS</h2>
				<p class="t22-sec4-p1">5.2 GRAMS</p>
				
				<div class="col-md-12 main-padding m-t-30 m-b-60">
					<p class="t22-sec4-p2">Metabolism is directly proportional to weight / muscle retention capability of a human body.</p>
					<p class="t22-sec4-p2">TYPE 22 comes with a blend of Ginsengs that directly elevate metabolism levels and testosterone levels in a longer term.</p>
				</div>
			</div>
			<div class="col-md-12 main-padding t22-sec4-bottom">
				<div class="col-sm-6 col-md-4 m-t-60">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/cholorophytum.png">
					</div>
					<div class="col-md-12 null-pad">
						<h4>Chlorophytum<br> Borivilianum</h4>
						<ul class="col-md-6 col-md-offset-4">
							<li>30% saponins</li>
							<li>5% alkaloids</li>
						</ul>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4 m-t-60">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/asphaltum.png">
					</div>
					<div class="col-md-12 null-pad">
						<h4>Black <br>Asphaltum</h4>
						<ul class="col-md-6 col-md-offset-4">
							<li>40% Fulvic Acid</li>
						</ul>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4 m-t-60">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/maca.png">
					</div>
					<div class="col-md-12 null-pad">
						<h4>Maca Root<br> Extract</h4>
						<ul class="col-md-6 col-md-offset-4">
							<li>10:1 full spectrum</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-6 col-md-4 m-t-40">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/mucuna.png">
					</div>
					<div class="col-md-12 null-pad">
						<h4>Mucuna Pruriens</h4>
						<ul class="col-md-6 col-md-offset-4">
							<li>80% L-Dopa</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 m-t-40">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/ashwagandha.png">
					</div>
					<div class="col-md-12 null-pad">
						<h4>Ashwagandha</h4>
						<ul class="col-md-6 col-md-offset-4">
							<li>8% Withanolides</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 m-t-40">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/goji-berri.png">
					</div>
					<div class="col-md-12 null-pad">
						<h4>Goji Berries</h4>
						<ul class="col-md-6 col-md-offset-4">
							<li>40% Polysaccharides</li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
		
		<!-- Section 5 -->
		<div class="col-md-12 null-pad t22-sec5 m-b-100">
			<div class="col-md-12 main-padding t22-sec5-top ">
				<h2>TEST BOOSTER AMINOS</h2>
				<p class="t22-sec5-p1 m-b-100">5 GRAMS</p>
			</div>
			<div class="col-md-12 main-padding t22-sec5-bottom">
				<div class="col-sm-6 col-md-6 m-t-60">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/asphartic-acid.png">
					</div>
					<div class="col-md-12 null-pad">
						<h4>D - Aspartic Acid</h4>
						<ul class="col-md-7 col-md-offset-3">
							<li>Boosts metabolism and testosterone levels</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 m-t-60">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/ornithine.png">
					</div>
					<div class="col-md-12 null-pad">
						<h4>L - Ornithine AKG</h4>
						<ul class="col-md-6 col-md-offset-4">
							<li>Boosts Growth Hormone</li>
							<li>Detoxifies Ammonia</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="col-md-12 main-padding t22-sec5-bottom2">
				<div class="col-sm-6 col-md-4 m-t-60">
					<div class="col-md-12 null-pad t22-ryt-border">
						<h5>Creatine<br> monohydrate</h4>
						<img src="images/type22/t22-plus.png" class="t22-sec5-img">
						<h5>Gamma-Aminobutyric <br>Acid (GABA)</h4>
						<img src="images/type22/t22-plus.png" class="t22-sec5-img">
						<h5>M-C-T</h4>
					</div>
				</div>
				<div class="col-sm-6 col-md-2 m-t-60">
					<p class="t22-8gms"> > 8 GRAMS</p>
				</div>
				<div class="col-sm-6 col-md-6 m-t-60 ">
					<div class="col-sm-12 col-md-12 t22-sec5-last-div">
						<ul>
							<li>Increase muscle size </li>
							<li>Improved athletic performance</li>
							<li>Regulate over-stimulation in brain</li>
							<li>Release more Growth Hormone </li>
							<li>Boost ATP production </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Section 6  -->
		
		<div class="col-md-12 t22-sec6 null-pad">
			<div class="col-md-12 t22-sec6-top">
				<h2>OIL EXTRACTS</h2>
				<p class="t22-sec6-p1 m-b-100">1600 MG</p>
			</div>
			
			<div class="col-md-12 main-padding t22-sec6-bottom">
				<div class="col-sm-6 col-md-6 m-t-60">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/primose.png">
					</div>
					<div class="col-md-12 null-pad m-t-30">
						<h4>Primrose</h4>
						<ul class="col-md-7 col-md-offset-4">
							<li>Extracted for Omega 9 [Oleic Acid]</li>
							<li>35% pure extract </li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 m-t-60">
					<div class="col-md-12 text-center null-pad">
						<img src="images/type22/sunflower.png">
					</div>
					<div class="col-md-12 null-pad m-t-30">
						<h4>Sunflower</h4>
						<ul class="col-md-6 col-md-offset-4">
							<li>Extracted for Omega 6 [CLA + GLA]</li>
							<li>40% pure extract </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-12 m-t-100 m-b-100 text-center">
				<img src="images/type22/proteoltyic-enzymes.png" alt="Proteara image" style="width:47%;">
			</div>
		</div>
		
		<!-- Section 7 -->
		
		<div class="col-md-12 t22-sec7 null-pad m-b-100">
			<div class="col-md-12 t22-sec7-top">
				<h2>VITAMINS & MINERALS</h2>
			</div>
			
			<div class="col-md-12 t22-sec7-bottom">
				
				<div class="col-xl-3 col-md-3 col-xs-4 text-right t22-sec7-left m-t-50">
					<p>Calcium<img src="images/vita-mine/ca.png"></p>
					<p>Magnesium<img src="images/vita-mine/mg.png"></p>
					<p>Zinc<img src="images/vita-mine/zn.png"></p>
					<p>Bromine<img src="images/vita-mine/br.png"></p>
				</div>
				
				<div class="col-xl-3 col-md-6 col-xs-4 t22-sec7-center">
					<div class="col-md-10 col-md-offset-2">
						<h4 class="t22-sec7-mid-h">Regenerate and Energize</h4>
						<p class="t22-sec7-p1">Overall Metabolism boosters</p>
						<p class="t22-sec7-p2">Asist in Protein synthesis</p>
						<p class="t22-sec7-p3">Combat Lactic Acid Generation</p>
						<p class="t22-sec7-p4">Supplement mineral loss during</p>
						<p class="t22-sec7-p4" style="letter-spacing: 2.9px !important;">sweating and strenuous physical </p>
						<p class="t22-sec7-p4" style="text-align: left !important;">exercises</p>
					</div>
				</div>
				
				<div class="col-xl-3 col-md-3 col-xs-4 text-left t22-sec7-right m-t-50">
					<p><img src="images/vita-mine/b1.png">Vitamin B1</span></p>
					<p><img src="images/vita-mine/b2.png">Vitamin B2</span></p>
					<p><img src="images/vita-mine/b3.png">Vitamin B3</span></p>
					<p><img src="images/vita-mine/b6.png">Vitamin B6</span></p>
				</div>
				
			</div>
		</div>	
		
		<div class="clearfix"></div>
		
		
		<!-- Section 8 Supplement Fact-->
		
		<div class="col-md-12 main-padding t22-supplement-facts">
			<div class="col-md-12 b-sec7-border">
				<h1>Supplement Facts</h1>
				<img src="images/veg.png" class="veg-non-sym">
				<img src="images/bullet/sec6-vita/start-line.png" style="" class="full-width-image">
				<h5 class="p-b-30">Serving Size: 1 levelled scoop (32 g)</h5>
				
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
							<p>270.75 kcal</p>
						</div>
						<div class="col-md-2">
							<p>5.4%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Calories from Fat</p>
						</div>
						<div class="col-md-3">
							<p>27 kcal</p>
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
							<p>3 g</p>
						</div>
						<div class="col-md-2">
							<p>15%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Saturated Fat</p>
						</div>
						<div class="col-md-3">
							<p>0.3 g</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Trans Fat</p>
						</div>
						<div class="col-md-3">
							<p>0 g</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
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
							<p>Sodium</p>
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
							<p>Total Carbohydrates</p>
						</div>
						<div class="col-md-3">
							<p>31 g</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Dietry Fiber</p>
						</div>
						<div class="col-md-3">
							<p>2.5 g</p>
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
							<p>20 g</p>
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
							<h3>29 g</h3>
						</div>
						<div class="col-md-2">
							<h3>48.3%</h3>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin B6 (as Pyridoxine HCL)</p>
						</div>
						<div class="col-md-3">
							<p>40 mcg</p>
						</div>
						<div class="col-md-2">
							<p>2000%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin B9 (as Folic Acid)</p>
						</div>
						<div class="col-md-3">
							<p>300 mcg</p>
						</div>
						<div class="col-md-2">
							<p>300%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin B12 (as Cyanocobalamin)</p>
						</div>
						<div class="col-md-3">
							<p>500 mcg</p>
						</div>
						<div class="col-md-2">
							<p>50000%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin D3 (as Cholecalciferol)</p>
						</div>
						<div class="col-md-3">
							<p>3000 mcg</p>
						</div>
						<div class="col-md-2">
							<p>1500%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p></p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p>.</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Calcium (as Tri-Calcium Phosphate)</p>
						</div>
						<div class="col-md-3">
							<p>300 mg</p>
						</div>
						<div class="col-md-2">
							<p>75%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Magnesium (as Di-Magnesium Malate)</p>
						</div>
						<div class="col-md-3">
							<p>200 mg</p>
						</div>
						<div class="col-md-2">
							<p>67%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Zinc (as Zinc Gluconate)</p>
						</div>
						<div class="col-md-3">
							<p>25 g</p>
						</div>
						<div class="col-md-2">
							<p>167%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Boron (as Boron Citrate)</p>
						</div>
						<div class="col-md-3">
							<p>3 g</p>
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
					
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<h4 style=" font-family: Lato Regular;">All claimed ingredient values on the label are for 1 full serving of the product</h4>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-8">
							<h2 class="pad-t-b-10">TYPE22<sup> TM</sup> - Core composition</h2>
						</div>
						<div class="col-md-2">
							<p></p>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">73.4g</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-7">
							<p class="s-heading">Muscle Building Protein Matrix</p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null">
						<div class="col-md-12">
							<p class="pad-t-b-14">Micro filtered - Instantized Milk Protein concentrate; Whole Egg Protein concentrate; Microfiltered Brown Rice Protein concentrate; Micro-filtered White Pea Protein concentrate</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null">
						<div class="col-md-12">
							<p class="s-heading">Vascularity // Muscle Pumps</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="pad-t-b-14">L - Ornithine HCL (micronized); Creatine Monohydrate (micronized, 99% pure); Gamma-Aminobutyric acid (GABA); Pyridoxine HCL; Folic Acid; Cyanocobalamin)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="s-heading">Carbs and Essential Fats</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="pad-t-b-14">Roasted Almond concentrate; Dried Dates concentrate; Raw Honey powder; Brown Jaggery (Organic) concentrate; Malt extract; Medium-chain Triglycerides (M-C-T); Omega 6 (Primrose Oil, GLA+CLA); Omega 9 (Oleic Acid)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="s-heading">Ginseng blend</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-14">Ashwagandha (Withania Somnifera) extract (std. to 8% Withanolides); Black Asphaltum extract (std. to 40% Fulvic Acid); Mucuna Pruriens extract (std. to 80% L-Dopa); Goji Berries extract (std. to 40% Polysaccharides); Chlorphytum Borivillianum (Safeed Musli) extract (std. to 30% saponins, 5% alkaloids); Maca Root extract (10:1 full spectrum)</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="s-heading">Testbooster Matrix</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-14">D-Aspartic Acid (micronized); Cholecalciferol; Tri Calcium Phosphate; Di-Magnesium Malate; Zinc Gluconate; Boron Citrate</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="s-heading">Proteolytic Enzymes</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-14">Proteara-X (Protase  I, Protease II, Papain, Amylase, Lipase, Cellulase, Lacto Bacillus Spores(6 Billion))</p>
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
							<p class=" pad-t-b-14">Cocoa Powder; Natural Fruit Pulp (only for select flavor variants); Coffee Powder (only for select flavor variants); Carrageenan Gum; Artificial Flavors; Non-Dairy Creamer; Sucralose; Salt; SiO2</p>
						</div>
						<div class="clearfix "></div>
					</div>
					
				</div>
			</div>
			
			<div class="col-md-6 m-t-30">
				<div class="col-md-12 b-sec7-border row">
					<div class="b-sec7-bor-b m-t-20"></div>
						<h3>DIRECTIONS FOR USE</h3>
					<div class=" b-sec7-bor-b"></div>
					
					<p class="dash-left m-t-10">-</p>
					<p class="b-sec7-div-pad m-t-10">Consume atleast 2 scoops of TYPE 22 per day for best results. </p>
					
					<p class="dash-left">-</p>
					<p style="">Scoop 1: To be consumed atleast 15 minutes post training.</p>
					
					<p class="dash-left">-</p>
					<p style="">Scoop 2: Can be consumed either between meals or 30 minutes before sleep.</p>
					
					<p class="dash-left">-</p>
					<p style="">For best night time gains: consume TYPE 22 with milk and organic honey (taken separately) 30 minutes before sleep.  </p>
					
					<p class="dash-left">-</p>
					<p style="">Add 1 scoop of TYPE 22 in 300 ml of water/milk. Shake well before use.</p>
					
					
					<div class="b-sec7-bor-b"></div>
					<h3>ALLERGY INFORMATION</h3>
					<div class="b-sec7-bor-b"></div>
					<p class="b-sec7-div-pad pad-t-b-10">This product is manufactured in a plant that also processes soy, egg, fish and tree nuts ingredients.</p>
					<div class="b-sec7-bor-b"></div>
					<h3>EXPIRY // STORAGE</h3>
					<div class="b-sec7-bor-b"></div>
					
					<p class="dash-left m-t-30">-</p>
					<p class="m-t-10 m-t-30">Best before 24 months of manufacturing.</p>
					
					<p class="dash-left">-</p>
					<p>Store in a cool dry place.</p>
					
				</div>
				
			</div>
			<div class="col-md-6  m-t-30" style="padding-right: 0px;">
				<div class="col-md-12 b-sec7-border" style="">
					<div class="clearfix b-sec7-bor-b m-t-20"></div>
						<h3>WARNINGS</h3>
					<div class="clearfix b-sec7-bor-b"></div>
					<p class="dash-left m-t-10">-</p>
					<p class="m-t-10">Do NOT exceed recommended dose. Overdose may cause nausea / diarrhea / bloating. </p>
					<p class="dash-left">-</p>
					<p>Do NOT use for more than 12 weeks as continuous usage. Unload for 1 week before starting subsequent cycle.</p>
					<p class="dash-left">-</p>
					<p>Consult your physician before using this product if you are taking any medication or are under a physician's care. </p>
					<p class="dash-left">-</p>
					<p>Do NOT consume if exposed to high blood pressure.</p>
					<p class="dash-left">-</p>
					<p>Discontinue use if you experience any adverse reaction to this product.</p>
					<p class="dash-left">-</p>
					<p>Only intended for use by healthy adults, 18 years and older.</p>
					<p class="dash-left">-</p>
					<p>Keep out of reach of children. Not for lactating/pregnant women.</p>
					
					<div class="col-md-12 b-sec7-border m-b-15">
						<p style="font-size: 14px; padding-top: 5px;color: #dc9f39;">Ingredients used to formulate this product are NOT Sports Banned Substances. Professional athletes should refer to the WADA website for more information on prohibited substances in sports.</p>
					</div>
				</div>
				<div class="col-md-12 b-sec7-border m-t-15" >
						<p style="text-transform:uppercase; padding-top: 13px; text-align:center; color:#dc9f39 !important">( To be consumed as dietary supplement only )</p>
					</div>
			</div>
		</div>
		
		<div class=" col-md-12  main-padding null-pad buy-now" >
			<div class=" col-md-12 m-t-100 m-b-60" >
					<div class="col-md-3">
						<h2>FLAVOURS</h2>
					</div>
					<div class="col-md-3">
						<h4>CHOCOLATE</h4>
					</div>
					<div class=" col-md-3">
						<h4>VANILLA</h4>
					</div>
					<div class=" col-md-3">

					</div>
			</div>
			<div class=" col-md-12 m-b-100" >
				<div class="col-md-3">
						<h2>PACKAGES</h2>
					</div>
					<div class="col-md-3">
						<h4>2.2Lbs / 1Kg</h4>
					</div>
					<div class=" col-md-3">
						<h4>5Lbs / 2.27Kgs</h4>
					</div>
					<div class="col-md-3" style="padding:11px 0px; ">
						<!--<h4 style="color:#fff;">BUY NOW</h4>-->
						<a href="" class="btn-ani" style="color:#000;">
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
		
		<!--Footer-->
		<?php include('footer.php') ?>
	</body>
</html>