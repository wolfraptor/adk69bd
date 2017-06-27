<!DOCTYPE html>
<html lang = "en">
	<head>
		<script src="js/jquery-3.2.1.min.js"></script>	
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="menu/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<script>
			if (screen.width<=500)
			window.location.replace("mshot.html")
		</script>
		<style>
			.fadeInUp  {
				-webkit-animation-name: fadeInUp;
				animation-name: fadeInUp;
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
				$('.img-h-320').delay(1000).queue(function(){
				  $(this).addClass("img-h-320-ani");
				});
			});
		</script>
		
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
				 
				if (scroll >= 3050) {
					//console.log('a');
					$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(36% - 125px)");
				} else if(scroll <= 3050){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(100% - 80px)");
				}
				if(scroll >= 5300){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(35% - 80px)");
				}
				else if(scroll <= 5300){
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
				$(".img-h-360").appear();

				$("body").on("appear", "#rmv-ani", function() {
					$('.animated').removeClass('fadeInUp');
				});
				
				$("body").on("appear", ".img-h-360", function() {
					$('.animated').addClass('fadeInUp');
				});
			  }
			});
		</script>
	</head>
	<body class = "s-background"> 
		
	<!-- HEADER --> 
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

	<!-- SECTION - 1 -->

		<div class = "col-md-12 main-padding m-t-140">
			<div class = "col-md-4 text-center">
				<img src = "images/shot/section1/7.png" class = "img-h-360 animated fadeInUp">
			</div>
			<div class = "col-md-4 text-center animated fadeInUp">
				<div class = "col-md-12 s-sec1-cross-sign ">
					<div class = "col-md-12 text-center s-sec1-shot-background">
						<h1 class = "s-sec1-h">SHOT<span class = "s-sec1-tm">TM</span></h1>				
					</div> 
				</div>
				
				<div class = "col-md-12 text-center m-t-40 null-pad">
					<img src = "images/shot/section1/ub.png" class = "img-w-100p">
					<p class = "s-sec1-p">The Intra-Workout Charge</p>
					<img src = "images/shot/section1/lb.png" class = "img-w-100p">
				</div>
			</div>
			<div class = "col-md-4 text-center s-sec1-shot-background1 p-t-17 animated fadeInUp">
				<img src = "images/shot/section1/shot_jar.png" class="img-h-320">
			</div>
		</div>

	<!-- SECTION - 2 -->
		<div class = "col-md-12 s-main-padding m-t-200">
			<div class = "col-md-4 p-r-100 null-pad">
				<div class = "col-md-12 s-sec2-border text-center">
					<h3 class = "s-sec2-h3">L-Leucine</h3>
					<img src = "images/shot/section2/ml.png" class = "img-w-50">
					<h3 class = "s-sec2-h3">L-Isoleucine</h3>
					<img src = "images/shot/section2/ml.png" class = "img-w-50">
					<h3 class = "s-sec2-h3">L-Valine</h3>
				</div>
			</div>
			<div class = "col-md-3 text-center p-r-50 p-l-0">
				<img src = "images/shot/section2/bcaa.png" class = "img-h-180">
			</div>
			<div class = "col-md-1 text-center">
				<img src = "images/shot/section2/vl.png" class = "m-t-50 img-h-80">
			</div>
			<div class = "col-md-4 p-l-50 null-pad">
				<div class = "col-md-12 s-sec2-border text-center">
					<h3 class = "s-sec2-h3 s-sec2-padding">RECOVER INSTANTLY</h3>
					<img src = "images/shot/section2/ml.png" class = "img-w-50">
					<h3 class = "s-sec2-h3 s-sec2-padding">FIGHTS FATIGUE</h3>
				</div>
			</div>
		</div>

	<!-- SECTION - 3 -->
		<div class = "col-md-12 s-main-padding m-t-80">
			<img src = "images/shot/section3/line.png" class = "img-w-100p">
			<div class = "col-md-6 null-pad">
				<div class = "col-md-12 null-pad">
					<h3 class = "s-sec3-h3 m-t-80">QUICK CARBS</h3>
					<img src = "images/shot/section3/4800mg.png" class = "img-w-90p m-t-20">
					<p class = "s-sec3-p m-t-20">REPLENISH// ENERGIZE ON THE GO</p>
				</div>
			</div>
			<div class = "col-md-6 p-l-75 null-pad">
				<div class = "col-md-12 text-center m-t-20 null-pad">
					<h4 class = "s-sec4-heading">RIBOSE<sup>®</sup> (by BioEnergy)</h4>
					<p class = "s-sec3-paragraph m-t-20 m-b-30">Fastest digesting carbohydrate on the planet<br>Immediate ATP production</p>
					<a href = "http://www.bioenergyribose.com/" target="_blank" class = "s-sec3-link">View Details - Official website</a>
				</div>
				<div class = "col-md-12 text-center m-t-30">
					<img src = "images/shot/section3/small_line.png" class = "img-w-60">
				</div>
				<div class = "col-md-12 text-center m-t-20">
					<h4 class ="s-sec4-heading" id="rmv-ani">DEXTROSE</h4>
					<p class = "s-sec3-paragraph m-t-20 m-b-20">Complex Carbohydrates</p>
				</div>
			</div>
			<img src = "images/shot/section3/line.png" class = "img-w-100p">
		</div>

	<!-- SECTION - 4 -->

		<div class = "col-md-12 s-main-padding m-t-80">
			<div class = "col-md-4 null-pad">
				<img src ="images/shot/section4/l.png" class = "img-w-100p m-t-10 img-h-173">
			</div>
			<div class = "col-md-1">
			</div>
			<div class = "col-md-7 text-center null-pad">
				<p class="s-sec4-p1">L-Leucine Metabolites</p>
				<div class = "col-md-12 s-sec4-bg">
					<p class = "s-sec4-p2">900grams</p>
				</div>
				<img src = "images/shot/section4/h.png" class = "m-t-20 img-w-100p">
			</div>
		</div>

	<!-- SECTION - 5 -->

		<div class = "col-md-12 s-main-padding m-t-80 text-center">
			<img src = "images/shot/section3/line.png" class = "img-w-100p">
			<h3 class = "s-sec5-h">LONG LASTING CARBS</h3>
			<img src = "images/shot/section3/line.png" class = "img-w-100p">
			<p class = "s-sec5-p m-t-30 m-b-30">Natural Fruit Pulp</p>
			<img src = "images/shot/section5/f.png" class = "img-w-100p img-h-280">
		</div>

	<!-- SECTION - 6 -->

		<div class = "col-md-12 s-main-padding m-t-80">
			<div class = "col-md-4 text-center s-sec6-rotate">
				<h3 class = "s-sec6-h p-t-10">endurance</h3>
				<h3 class = "s-sec6-h p-t-10">boost</h3>
				<p class = "s-sec6-p p-t-10">1.25</p>
				<p class = "s-sec6-p p-t-10">grams</p>
			</div>
			<div class = "col-md-1 m-t-45">
				<img src = "images/shot/section6/vl.png" class = "img-h-430">
			</div>
			<div class = "col-md-7">
				<h3 class = "s-sec6-h-r"><span><img src = "images/shot/section6/d.png" class = "s-sec6-dash"></span> NATURAL CAFFEINE</h3>
				<p class = "s-sec6-p-r">98% - extracted from herbal sources</p>
				<h3 class = "s-sec6-h-r p-t-10"><span><img src = "images/shot/section6/d.png" class = "s-sec6-dash"></span> Theobromine</h3>
				<p class = "s-sec6-p-r">Combines with caffeine to provide great performance results</p>
				<h3 class = "s-sec6-h-r p-t-10"><span><img src = "images/shot/section6/d.png" class = "s-sec6-dash"></span> Agmatine Sulphate</h3>
				<p class = "s-sec6-p-r">L-Arginine metabolite<br>Improved muscle pumps (Nitric oxide synthase (NOS)</p>
				<h3 class = "s-sec6-h-r p-t-10"><span><img src = "images/shot/section6/d.png" class = "s-sec6-dash"></span> Glucuronolactone</h3>
				<p class = "s-sec6-p-r">Inhibits toxic by-product synthesis (fatigue) of intensive exercise </p>
				<h3 class = "s-sec6-h-r p-t-10"><span><img src = "images/shot/section6/d.png" class = "s-sec6-dash"></span> Betaine</h3>
				<p class = "s-sec6-p-r">40% Beetroot extract // Enhances NO delivery</p>
			</div>
		</div>

	<!-- SECTION - 7 -->

		<div class = "col-md-12 s-main-padding m-t-100">
			<div class = "col-md-4 text-center s-sec7-m p-l-null">
				<h3 class = "s-sec7-h">PERFORMANCE</h3>
				<h3 class = "s-sec7-h p-t-10">booster</h3>
				<h3 class = "s-sec7-h p-t-10">aminos</h3>
				<p class = "s-sec7-p p-t-10"><span class = "f-s-50">2.7</span><br>grams</p>
			</div>
			<div class = "col-md-1 m-t-45 m-t-60 p-l-null">
				<img src = "images/shot/section6/b.png" class = "img-h-430">
			</div>
			<div class = "col-md-7">
				<img src = "images/shot/section6/tl.png" class = "img-w-100p">
				<h3 class = "s-sec6-h-r p-t-10"><span><img src = "images/shot/section6/d.png" class = "s-sec6-dash"></span> Citrulline Malate</h3>
				<p class = "s-sec6-p-r">NO production // Combats Lactic Acid<br>Increases ATP and Phosphocreatine recovery</p>
				<h3 class = "s-sec6-h-r p-t-10"><span><img src = "images/shot/section6/d.png" class = "s-sec6-dash"></span> L-Norvaline</h3>
				<p class = "s-sec6-p-r">Relaxes blood vessels and Stimulate Nitric Oxide production<br>Floods muscles with oxygen</p>
				<h3 class = "s-sec6-h-r p-t-10"><span><img src = "images/shot/section6/d.png" class = "s-sec6-dash"></span> L-Theanine</h3>
				<p class = "s-sec6-p-r">Promotes relaxation // Boost concentration and alertness</p>
				<h3 class = "s-sec6-h-r p-t-10"><span><img src = "images/shot/section6/d.png" class = "s-sec6-dash"></span> Glucuronolactone</h3>
				<p class = "s-sec6-p-r">Inhibits toxic by-product synthesis (fatigue) of intensive exercise </p>
				<h3 class = "s-sec6-h-r p-t-10"><span><img src = "images/shot/section6/d.png" class = "s-sec6-dash"></span> L-Taurine</h3>
				<p class = "s-sec6-p-r">Improves Insulin Sensitivity // Fights Oxidative Stress<br>Cardiovascular Health</p>
				<img src = "images/shot/section6/tl.png" class = "img-w-100p m-t-20">
			</div>
		</div>

	<!-- SECTION - 8 -->

		<div class="col-md-12 main-padding t22-supplement-facts s-sec8-m-t-6 m-t-100">
			<div class="col-md-12 b-sec7-border">
				<h1>Supplement Facts</h1>
				<img src="images/bullet/sec6-vita/start-line.png" style="" class="full-width-image">
				<h5 class="p-b-30">Serving Size: 1 levelled scoop (21 g)</h5>
				
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
							<p>65 kcal</p>
						</div>
						<div class="col-md-2">
							<p>3.3%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Calories from Fat</p>
						</div>
						<div class="col-md-3">
							<p>31 kcal</p>
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
							<p>3.5 g</p>
						</div>
						<div class="col-md-2">
							<p>17.5%</p>
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
							<p>8 g</p>
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
							<p>2.5 g</p>
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
							<h3>0.4 g</h3>
						</div>
						<div class="col-md-2">
							<h3>0.7%</h3>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 row b-sec7-div-pad">
						
						<div class="clearfix b-sec7-bor-b m-t-40"></div>
					</div>

					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin C</p>
						</div>
						<div class="col-md-3">
							<p>150 mg</p>
						</div>
						<div class="col-md-2">
							<p>375%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin B3 (as Niacin)</p>
						</div>
						<div class="col-md-3">
							<p>50 mcg</p>
						</div>
						<div class="col-md-2">
							<p>278%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin B6 (as Pyridoxine HCL)</p>
						</div>
						<div class="col-md-3">
							<p>25 mg</p>
						</div>
						<div class="col-md-2">
							<p>1250%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Pantothenic Acid(Vitamin B5)</p>
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
							<p>75 mg</p>
						</div>
						<div class="col-md-2">
							<p>25%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Ptassium(Potassium Bicarbonate)</p>
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
							<p>Sodium(as Sodium Bicarbonate)</p>
						</div>
						<div class="col-md-3">
							<p>100 mg</p>
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
							<p>Daily value not established.</p>
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
							<h2 class="pad-t-b-10">SHOT<sup> TM</sup> - Proprietary Blend</h2>
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
							<p class="s-heading">Instant Recovery</p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">6500 mg</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null">
						<div class="col-md-12">
							<p class="pad-t-b-14">BCAAs [L-Leucine, L-Isoleucine, L-Valine]; Alpha-Hydroxy-Isocaproic Acid (HICA); Beta-Hydroxy Beta-Methylbutyric acid (H-M-B); Di-Magnesium Malate; Niacin; Pyridoxine HCL</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-7">
							<p class="s-heading">Instant Energy</p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">8700 mg</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="pad-t-b-14">L-Citrulline-DL-Malate (micronized); Glucuronolactone; Dextrose; Medium-chain Triglycerides (M-C-T); Ribose</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-7">
							<p class="s-heading">Hydration // Endurance</p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">3150 mg</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="pad-t-b-14">Watermelon concentrate; Banana powder; Coconut Water powder; Mixed Fruit concentrates (propreitary blend, natural); L Taurine  (micronized)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-7">
							<p class="s-heading">Nitrogen and Blood Flow Mechanics</p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">900 mg</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-14">Betaine (90% pure); L-Norvaline (micronized, 99% pure); Agmatine Sulphate</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-7">
							<p class="s-heading">Lactic Acid Combat</p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">500 mg</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-14">Potassium Bicarbonate;  Sodium Bicarbonate; Calcium Carbonate; Vitamin C; Citric Acid</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-7">
							<p class="s-heading">Mental Perfomance boosters</p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">350 mg</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-14">L-Theanine (micronized, 99% pure); Theobromine (99% pure); Pantothenic Acid</p>
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
							<p class=" pad-t-b-14">Artificial Flavors; Malt Extract; Sucralose; Salt; SiO2</p>
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
					<p class="b-sec7-div-pad m-t-10">SHOT is intended to be consumed as an Intra-Workout only.</p>
					
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
				<div class="col-md-12 b-sec7-border m-t-15 row" >
						<p style="text-transform:uppercase; padding-top: 13px; text-align:center; color:#dc9f39 !important">( To be consumed as dietary supplement only )</p>
					</div>
				
			</div>
			<div class="col-md-6  m-t-30" style="padding-right: 0px;">
				<div class="col-md-12 b-sec7-border" style="">
					<div class="clearfix b-sec7-bor-b m-t-20"></div>
						<h3>WARNINGS</h3>
					<div class="clearfix b-sec7-bor-b"></div>
					<p class="dash-left m-t-10">-</p>
					<p class="m-t-10">Do NOT exceed recommended dose. Overdose may cause nausea / headache / dizziness.</p>
					<p class="dash-left">-</p>
					<p>Do NOT use in combination with other supplements/pharmaceuticals that are considered to be stimulants.</p>
					<p class="dash-left">-</p>
					<p>Do NOT use SHOT for more than 12 weeks of continuous usage.</p>
					<p class="dash-left">-</p>
					<p>Consult your physician before using this product if you are taking any medication or are under a physician's care.</p>
					<p class="dash-left">-</p>
					<p> Do NOT consume if exposed to high blood pressure. Discontinue use if you experience any adverse reaction to this product.</p>
					<p class="dash-left">-</p>
					<p>Only intended for use by healthy adults, 18 years and older.</p>
					<p class="dash-left">-</p>
					<p>Keep out of reach of children. Not for lactating/pregnant women.</p>
					
					<div class="col-md-12 b-sec7-border m-b-15">
						<p style="font-size: 14px; padding-top: 5px;color: #dc9f39;">Ingredients used to formulate this product are NOT Sports Banned Substances. Professional athletes should refer to the WADA website for more information on prohibited substances in sports.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class=" col-md-12  main-padding null-pad buy-now" >
			<div class=" col-md-12 m-t-100 m-b-60" >
					<div class="col-md-3">
						<h2>FLAVOURS</h2>
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
						<h4>950 G//45 Servings</h4>
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
		
		<!-- Footer -->
		<?php include('footer.php') ?>
		
		
	</body>
</html>