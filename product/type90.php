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
			window.location.replace("mtype90.html")
		</script>
		<script>
			$(document).ready(function() {
			$('.t90-sec1-left-line').delay(1000).queue(function(){
			  $(this).addClass("t90-sec1-left-line-height");
			});
			
			$('.t90-sec1-ryt-img').delay(1000).queue(function(){
			  $(this).addClass("t90-sec1-ryt-img-ani");
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
				 
				if (scroll >= 1080) {
					//console.log('a');
					$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(36% - 125px)");
				} else if(scroll <= 1080){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(100% - 80px)");
				}
				if(scroll >= 3750){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(35% - 80px)");
				}
				else if(scroll <= 3750){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(100% - 46px)");
				}
			});
		</script>
		<style>
			.fadeInUp {
				-webkit-animation-name: fadeInUp;
				animation-name: fadeInUp;
				-webkit-animation-duration: 2.5s;
				animation-duration: 2.5s;
			}
			.slideInUp {
				-webkit-animation-name: slideInUp;
				animation-name: slideInUp;
				-webkit-animation-duration: 2.5s;
				animation-duration: 2.5s;
			}
			.fadeIn {
				-webkit-animation-name: fadeIn;
				animation-name: fadeIn;
				-webkit-animation-duration: 4s;
				animation-duration: 4s;
			}
		</style>
		<script>
			$.ajax({
			  url: '//cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.js',
			  dataType: 'script',
			  cache: true,
			  success: function() {
				$("#rmv-ani").appear();
				$("#type90").appear();

				$("body").on("appear", "#rmv-ani", function() {
					$('.animated').removeClass('fadeInUp');
				});
				
				$("body").on("appear", "#type90", function() {
					$('.animated').addClass('fadeInUp');
				});
			  }
			});
		</script>
	</head>
	<body style="background-color: #000 !important">
	
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
		<div class="col-md-12 t90-sec1 main-padding" >
		
			<div class="col-sm-3 col-md-3 m-b-60 animated fadeInUp" >
				<img src="images/type90/t90-line.png" class="t90-sec1-left-line">
				<img src="images/type90/4-word.png" class="t90-sec1-left-img">
			</div> 
						
			<div class="col-sm-5 col-md-5 m-b-60">
			
				<div class="col-md-12 row animated fadeIn t90-sec1-after" id="type90">
					<h2 class="t90-sec1-p1">90%</h2>
				</div>		
				<div class="col-md-12 row animated fadeInUp">					
					<div class="col-md-9 row">					
						<h1 class="t90-sec1-h1">TYPE 90</h1>
					</div>
					<div class="col-md-2 row null-pad">			
						<p class="t90-sec1-tm">TM<p>
					</div>
				</div>
				<div class="col-md-12 row animated fadeIn t90-sec1-after">
					<h2 class="t90-sec1-p3">PURE PROTIEN</h2>
				</div>
				
				
				<div class="col-md-12 row animated fadeInUp">
					<p class="t90-sec1-p4">TYPE 92 is simply a clean muscle-building fuel by DAAKI. It comprises of the most efficient amino profile ever formulated in the indusry. Each fraction of the proteins have been customized keeping in mind to maximize protein purity. </p>
				</div>
				
				<!--<div class="col-md-12 m-t-40 row" >
					<span class="buy-but">
						<a href="#" class="sec1-buy-now">BUY NOW</a>
					</span>
				</div>-->
				
			</div>
			
			<div class="col-sm-4 col-md-4 text-center animated fadeInUp">
				<img src="images/type90/type90.png" style="" class="t90-sec1-ryt-img" >
			</div> 
			<div class="clearfix"></div>
		</div> 
		
		<!-- Section 2 -->
		<div class="col-md-12 main-padding t90-sec2">
			
			<div class="col-md-12">
				<p class="t90-sec2-p1">TYPE 92 is produced to our highest quality standards // Processed under cold temperatures // Formulated using a cross-flow micro filtration, multi-step purification process - preserves important muscle-building protein fractions while removing excess carbohydrates, fat, lactose and cholesterol. TYPE 92 is made with pre-hydrolyzed protein sources to ensure fast digestion and absorption. Powered with PROTEARA (DAAKI's proprietary enzyme blend) - fastracks the absorption of amino acids even better. This indeed will be DAAKI's flagship product and we are sure it you will love it while realizing your performance goals</p>
			</div>
			
			<div class="col-sm-12 col-md-12 t90-sec2-mid">
				<div class="col-sm-3 col-md-3 t90-ryt-bor">
					<h2>28</h2>
					<p class="t90-sec2-p2">GRAMS<br> PROTIEN</p>
				</div>
				<div class="col-sm-3 col-md-3 t90-ryt-bor">
					<h2>7 </h2>
					<p class="t90-sec2-p2">GRAMS<br> BCAAS</p>
				</div>
				<div class="col-sm-3 col-md-3 t90-ryt-bor">
					<h2>3.5</h2>
					<p class="t90-sec2-p2">GRAMS<br> LEUCINE</p>
				</div>
				<div class="col-sm-3 col-md-3">
					<h2>0 </h2>
					<p class="t90-sec2-p2">GRAMS<br> CARBS</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 t90-sec2-ultra">
				
				<div class="col-sm-6 col-md-6 t90-ryt-bor" id="rmv-ani">
					<p class="t90-sec2-p3">Ultra Fast Absorption</p>
					<p class="t90-sec2-p4">Total Performance</p>
					<p class="t90-sec2-p5">Most Advanced Amino Profile</p>
				</div>
				<div class="col-sm-6 col-md-6 m-t-40">
				
					<div class="col-sm-3 col-md-3">
						<img src="images/type90/left-arrow.png"  style="width: 100%; margin-left: 17px;">
					</div>
					<div class="col-sm-6 col-md-6">
						<p class="t90-sec2-p6">CLEAN & PURE</p>
					</div>
					<div class="col-sm-3 col-md-3">
						<img src="images/type90/right-arrow.png" style="width: 100%; margin-top: 4px; margin-left: -10px;">
					</div>
					
					<p class="t90-sec2-p7">HYDROLYZED WHEY ISOLATES</p>
				</div>
				
			</div>
		
		</div>
		<div class="clearfix"></div>
		<div class=" col-md-12 t90-supplement main-padding">
			<div class="col-md-12 b-sec7-border">
				<h1>Supplement Facts</h1>
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
							<p style="letter-spacing: 1px;">% Daily Value*</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Calories</p>
						</div>
						<div class="col-md-3">
							<p>98.8 kcal</p>
						</div>
						<div class="col-md-2">
							<p>4.9%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Calories from Fat</p>
						</div>
						<div class="col-md-3">
							<p>5.4 kcal</p>
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
							<p>0.6 g</p>
						</div>
						<div class="col-md-2">
							<p>3%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Saturated Fat</p>
						</div>
						<div class="col-md-3">
							<p>0.1 g</p>
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
					</div><div class="col-md-12 row b-sec7-div-pad">
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
					</div><div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Sodium</p>
						</div>
						<div class="col-md-3">
							<p>60 mg</p>
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
							<p><1 g</p>
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
							<p>3.6 g</p>
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
							<p>0 g</p>
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
							<h3>22 g</h3>
						</div>
						<div class="col-md-2">
							<h3>36.6%</h3>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin A</p>
						</div>
						<div class="col-md-3">
							<p><1 mcg</p>
						</div>
						<div class="col-md-2">
							<p>0.1%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin C</p>
						</div>
						<div class="col-md-3">
							<p><1 mg</p>
						</div>
						<div class="col-md-2">
							<p>2.5%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad m-t-30">
						
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Calcium</p>
						</div>
						<div class="col-md-3">
							<p>120 mg</p>
						</div>
						<div class="col-md-2">
							<p>30%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Magnesium</p>
						</div>
						<div class="col-md-3">
							<p>20 g</p>
						</div>
						<div class="col-md-2">
							<p>6.7%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row m-t-30 b-sec7-div-pad">
						
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>TYPE 90TM Core Composition</p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p>28 mg</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-12">
							<p>Cold Temperature Processed - Micro filtered - Instantized [Whey Protein HYDROLYSATE + Whey Protein ISOLATE]; Enriched BCAAs (L-Leucine, L-Isoleucine, L-Valine); L-Glutamine; L-Arginine AKG; Beta-Alanine; Proteara-X Enzymes (Protase  I, Protease II, Papain, Amylase, Lipase, Cellulase, Lacto Bacillus Spores(6 Billion))</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-12">
							<p>Other Ingredients</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-12">
							<p>Cocoa Powder (only for select flavor variants); Natural Fruit Pulp (only for select flavor variants); Carrageenan Gum; Artificial flavors; Non-Dairy Creamer; Sucralose; Salt; SiO2	</p>
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
				</div>
				<div class="col-md-6">
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7 ">
							<h3 style="font-family: Times new Roman; padding: 6px;">AMINO ACID PROFILE</h2>
						</div>
						<div class="col-md-3">
							<h3>%</h3>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">29.8g</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Leucine **</p>
						</div>
						<div class="col-md-3">
							<p>10.4</p>
						</div>
						<div class="col-md-2">
							<p>2.808</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Isoleucine **</p>
						</div>
						<div class="col-md-3">
							<p>6.76</p>
						</div>
						<div class="col-md-2">
							<p>1.8252</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Valine **</p>
						</div>
						<div class="col-md-3">
							<p>5.54</p>
						</div>
						<div class="col-md-2">
							<p>1.4958</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Phenylalanine *</p>
						</div>
						<div class="col-md-3">
							<p>3.08</p>
						</div>
						<div class="col-md-2">
							<p>0.8216</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Threonine *</p>
						</div>
						<div class="col-md-3">
							<p>6.6</p>
						</div>
						<div class="col-md-2">
							<p>1.782</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Methionine *</p>
						</div>
						<div class="col-md-3">
							<p>2.09</p>
						</div>
						<div class="col-md-2">
							<p>0.5643</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Lysine *</p>
						</div>
						<div class="col-md-3">
							<p>9.08</p>
						</div>
						<div class="col-md-2">
							<p>2.4516</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Tryptophan *</p>
						</div>
						<div class="col-md-3">
							<p>2.15</p>
						</div>
						<div class="col-md-2">
							<p>0.5805</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Aspartic Acid</p>
						</div>
						<div class="col-md-3">
							<p>10.91</p>
						</div>
						<div class="col-md-2">
							<p>2.9457</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Serine</p>
						</div>
						<div class="col-md-3">
							<p>4.2</p>
						</div>
						<div class="col-md-2">
							<p>1.134</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Glutamine</p>
						</div>
						<div class="col-md-3">
							<p>18.24</p>
						</div>
						<div class="col-md-2">
							<p>4.9248</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Proline</p>
						</div>
						<div class="col-md-3">
							<p>6.46</p>
						</div>
						<div class="col-md-2">
							<p>1.7442</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Glycine</p>
						</div>
						<div class="col-md-3">
							<p>1.52</p>
						</div>
						<div class="col-md-2">
							<p>0.4104</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Alanine, B-Alanine</p>
						</div>
						<div class="col-md-3">
							<p>4.84</p>
						</div>
						<div class="col-md-2">
							<p>1.3068</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Tyrosine</p>
						</div>
						<div class="col-md-3">
							<p>2.8</p>
						</div>
						<div class="col-md-2">
							<p>0.576</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Histidine</p>
						</div>
						<div class="col-md-3">
							<p>1.65</p>
						</div>
						<div class="col-md-2">
							<p>0.4455</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Arginine</p>
						</div>
						<div class="col-md-3">
							<p>1.96</p>
						</div>
						<div class="col-md-2">
							<p>0.5292</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>L-Cysteine</p>
						</div>
						<div class="col-md-3">
							<p>1.72</p>
						</div>
						<div class="col-md-2">
							<p>0.4644</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row pad-tb-30">
						<div class="col-md-2" style="width: 10%;">
							<p>**</p>
						</div>
						<div class="col-md-10">
							<p>Branched Chain Amino Acids (BCAA)  </p>
						</div>
						<div class="col-md-2" style="width: 10%;">
							<p>*</p>
						</div>
						<div class="col-md-10">
							<p>Essential Amino Acids</p>
						</div>
						<div class="col-md-2" style="width: 10%;">
							<p>-</p>
						</div>
						<div class="col-md-10">
							<p>All values are approximate</p>
						</div>
						
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Total Essential Amino Acids 45.</p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p>7 gms</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row pad-tb-30">
						<div class="col-md-7">
							<p>Total Branched Chain</p>
							<p>Amino Acids (BCAA)</p>
						</div>
						<div class="col-md-2">
							<p></p>
						</div>
						<div class="col-md-3 text-right">
							<p>22.69 g</p>
						</div>
					</div>
					
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 p-r-null m-t-10">
						<h4 class=""><strong>All claimed ingredient values on the label are for 1 full serving of the product</strong></h4>
					</div>
				</div>
			</div>
			
			<div class="col-md-6 m-t-30">
				<div class="col-md-12 b-sec7-border row">
					<div class="b-sec7-bor-b m-t-20"></div>
						<h3>DIRECTIONS FOR USE</h3>
					<div class=" b-sec7-bor-b"></div>
					
					<p class="dash-left m-t-10">-</p>
					<p class="b-sec7-div-pad m-t-10">TYPE 90 should be consumed atleast 15 minutes post	- training. </p>
					
					<p class="dash-left" style="padding-top: 0px;">-</p>
					<p style="padding-top: 0px;">Add 1 scoop of TYPE 90 in 220-300 ml of water/milk. Shake well before use.</p>
					
					<p class="dash-left" style="height: 65px;padding-top: 0px">-</p>
					<p style="padding-top: 0px;">For professional athletes (training 2-3 times a day / more than 3 hours per day) - TYPE 90 may be consumed twice a day. Regular dosage should be carefully monitored under such scenarios.</p>
					
					<div class="b-sec7-bor-b"></div>
					<h3>ALLERGY INFORMATION</h3>
					<div class="b-sec7-bor-b"></div>
					<p class="b-sec7-div-pad pad-t-b-10">This product is manufactured in a plant that also processes soy, egg, fish and tree nuts ingredients.</p>
					<div class="b-sec7-bor-b"></div>
					<h3>EXPIRY // STORAGE</h3>
					<div class="b-sec7-bor-b"></div>
					<p class="b-sec7-div-pad">- Best before 24 months of manufacturing. - Store in a cool dry place.</p>
					
				</div>
				
				<div class="col-md-12 b-sec7-border row" style="margin-top:15px;">
					<p style="text-transform:uppercase; text-align:center;">( To be consumed as dietary supplement only )</p>
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
					<p>Do NOT use for more than 12 weeks as continuous usage. Unload for 1 week before starting subsequent cycle</p>
					<p class="dash-left">-</p>
					<p>Consult your physician before using this product if you are taking any medication or are under a physician's care. </p>
					<p class="dash-left">-</p>
					<p>Do NOT consume if exposed to high blood pressure. Discontinue use if you experience any adverse reaction to this product. </p>
					<p class="dash-left">-</p>
					<p>Only intended for use by healthy adults, 18 years and older.</p>
					
					
					<div class="col-md-12 b-sec7-border m-t-20 m-b-30">
						<p style="font-size: 15px; padding-top: 3px; color: #dc9f39;">Ingredients used to formulate this product are NOT Sports Banned Substances. Professional athletes should refer to the WADA website for more information on prohibited substances in sports.</p>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class=" col-md-12  main-padding null-pad buy-now t90-buy-now" >
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
					<div class="col-md-3" style="padding:11px 0px;">
						<!--<h4 style="color:#fff;">BUY NOW</h4>-->
						<a href="" class="btn-ani">
						<span></span>
						<span></span>
						<span></span>
						<span></span>Add to cart</a>
					</div>
			</div>
			
		</div>
		
		<div class="col-md-12 null-pad">
			<div class="b-sec7-bor-b"></div>
		</div>
		
		<div class="col-md-12 faq main-padding t90-faq">
			<div class="col-sm-12 col-md-12 t90-input-sec-main">
			
				<div class="col-sm-12 col-md-12 t90-input-section">
					<div class="col-sm-6 col-md-6 t90-input-left">
						<h2><img src="images/faq-icon.png" class="t90-faq-icon-img">ANY QUESTIONS ?</h2>
						<p>Ask us anything about the product. Team DAAKI shall  analyze and respond to each post. We publish the most helpful questions for the community here so that others can learn better about DAAKI supplements.</p>
					</div>
					<div class="col-sm-6 col-md-6 input-right">
							<textarea  type="text" class="t90-faq-textarea" placeholder="Leave us a line"></textarea>
							<p class="t90-faq-submit">SUBMIT</p>
					</div>
				</div>	
				
				<div class="col-sm-12 col-md-12 t90-faq-content">
					<h1>FAQ</h1>
					<div class="t90-name-date">
						<p><img src="images/faq-icon.png" class="">MATHEW G. <span> 08/02/15 |	03:49 pm</span></p>
					</div>
					
					<div class="t90-user-que-ans">
						<div class="t90-user-que">
							Q.   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ?
						</div>
						<div class="col-md-12 t90-user-ans null-pad">
							<div class="col-sm-1 col-md-1 ans-head null-pad" >
								<p>Answer :</p>
							</div>
							<div class="col-sm-8 col-md-8 ans-desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</p>
							</div>
						</div>
					</div>
					<div class="col-md-12 null-pad t90-faq-see-more">
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
					
					<div class="t90-name-date">
						<p><img src="images/faq-icon.png" class="">MATHEW G. <span> 08/02/15 |	03:49 pm</span></p>
					</div>
					
					<div class="t90-user-que-ans">
						<div class="t90-user-que">
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
					<div class="t90-user-que-ans m-t-40">
						<div class="user-que">
							Q.   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ?
						</div>
						<div class="col-md-12 t90-user-ans null-pad">
							<div class="col-sm-1 col-md-1 t90-ans-head null-pad" >
								<p>Answer :</p>
							</div>
							<div class="col-sm-8 col-md-8 t90-ans-desc">
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
		
		<?php include('footer.php') ?>
	</body>
</html>