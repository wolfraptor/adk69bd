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
			window.location.replace("mkasuta.html")
		</script>
		<script>
			$(document).ready(function() {
				$('.b-sec1-left-img-line').delay(500).queue(function(){
				  $(this).addClass("b-line-height");
				});
				
				$('.k-sec1-img').delay(1000).queue(function(){
				  $(this).addClass("k-sec1-img-ani");
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
				 
				if (scroll >= 6700) {
					//console.log('a');
					$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(36% - 125px)");
				} else if(scroll <= 6700){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(100% - 80px)");
				}
				if(scroll >= 9700){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(35% - 80px)");
				}
				else if(scroll <= 9700){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(100% - 46px)");
				}
			});
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
			.fadeIn {
				-webkit-animation-name: fadeIn;
				animation-name: fadeIn;
				-webkit-animation-duration: 6s;
				animation-duration: 6s;
			}
		</style>
		<script>
			$.ajax({
			  url: '//cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.js',
			  dataType: 'script',
			  cache: true,
			  success: function() {
				$("#rmv-ani").appear();
				$("#kasuta").appear();

				$("body").on("appear", "#rmv-ani", function() {
					$('.animated').removeClass('fadeInUp');
				});
				
				$("body").on("appear", "#kasuta", function() {
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
					<li data-menuanchor="10"><a class="fp-anchor" href="#10">QUERIES</a></li>
				</ul>
			</div>
		</div>
		
		<!-- Section 1 -->
		<div class="col-md-12 k-sec1 main-padding">
			<div class="col-md-9">
				<div class="col-md-4 text-center">
				</div> 
				<div class="col-md-8 text-center" >
					<img src="images/kasuta/3.png" class="k-sec1-mid animated fadeInUp" >
					<img src="images/kasuta/kasuta.png" class="k-sec1-mid2 animated fadeIn">
				</div> 
				<div class="col-md-8 col-md-offset-4 animated fadeInUp">
					<p class="k-sec1-p1">A proprietary blend of 8 unique slow-release protein sources coupled with the goodness of Anti-Oxidant and Immunity boosting Herbs + All Essential Fatty Acids + Fiber + Vitamins + Minerals // Deliver a 3600 solution for an athlete's nutrition vows.</p>
				</div>
			</div> 
			
			<div class="col-md-3 text-center animated fadeInUp" id="kasuta">
				<img src="images/kasuta/kasuta-jar-pouch.png" class="k-sec1-img" >
			</div> 
		</div> 
		
		<!-- Section 2 -->
		<div class="col-md-12 main-padding k-sec2">
			<div class="col-md-12">
				<p class="k-sec2-p1">KASUTA<sup><span style=" font-size: 13px; top: -18px;">TM</span></sup> is the Complete Nutrition for athletes</p>
			</div>
			
			<div class="col-md-12">
				<p class="k-sec2-p2">A Perfect Meal Replacement to fill-in the Nutrition Gaps</p>
			</div>
			
			<div class="col-md-8 col-md-offset-2">
				<p class="k-sec2-p3">A perfect blend of all Macro + Micro + Phyto Nutrients that might go missing with most protein supplements.</p>
			</div>
			
			<div class="col-md-10 col-md-offset-1">
				<p class="k-sec2-p3">Sustained - Slow Release - Multi Functional Formula</p>
			</div>
		</div>
		
		<!-- Section 3 -->
		<div class="col-md-12 main-padding k-sec3">
			
			<div class="col-md-12">
				<h1><img src="images/kasuta/left-arrow.png" class="k-sec3-arrow-left" id="rmv-ani">THE MOST VERSTAILE<img src="images/kasuta/right-arrow.png" class="k-sec3-arrow-right"></h1>
				<h1>MULTI<span style="font-family: sans-serif">-</span>FUNCTIONAL PROTEIN BLEND</h1>
				
				<p class="k-sec3-p1 m-t-60">Blend of Fast, Medium and Slow digesting proteins</p>
				<p class="k-sec3-p1">Xtended Time-boxed protein delivery system</p>
				<p class="k-sec3-p1">6-PHASED AMINO DELIVERY</p>
			</div>
			
			<div class="col-md-12 m-t-100">
			
				<div class="col-md-4 k-sec3-outbor">
					<div class="col-md-12 k-sec3-bor ">
						<div class="col-md-12 k-sec3-shad">
							<div class="col-md-12 text-center null-pad p-t-30">
								<img src="images/kasuta/milk-can.png">
							</div>
							<div class="col-md-12 null-pad m-t-30">
								<h4>MILK PROTEIN</h4>
								<ul style="padding-bottom: 0px;">
									<li><span style="color:#fff">Cold Temperature Processed - Micro Filtered concentrates purified to 80% proteins</span></li>
								</ul>
							</div>
							<div class="col-md-12 text-center null-pad m-t-40">
								<img src="images/kasuta/beef-cows.png">
							</div>
							<div class="col-md-12 null-pad m-t-30">
								<h4>COLOSTRUM</h4>
								<ul>
									<li><span style="color:#fff">Pure Freeze Dried Cow Colostrum</span></li>
									<li><span style="color:#fff">Absolute Immunity booster</span></li>
									<li><span style="color:#fff">>1.5 grams of Colostrum per serving</span></li>
								</ul>
							</div>
							
							<div class="col-md-12 null-pad m-t-30">
								<h4>MISCELLAR CASEIN</h4>
								<ul>
									<li><span style="color:#fff">70% pure microfiltered Milk Casein</span></li>
									<li><span style="color:#fff">Anti-Catabolic + Better Muscle Retention</span></li>
									<li><span style="color:#fff">Colon Health booster</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-8">
					<div class="col-md-6 k-sec3-outbor">
						<div class="col-md-12 k-sec3-bor">
							<div class="col-md-12 k-sec3-shad">
								<div class="col-md-12 text-center null-pad m-t-30">
									<img src="images/kasuta/fish.png">
								</div>
								<div class="col-md-12 null-pad m-t-30 m-b-30">
									<h4>COLLAGEN PEPTIDES</h4>
									<ul>
										<li><span style="color:#fff">90% pure isolated Fish Collagen</span></li>
										<li><span style="color:#fff">Tendons and Bone health support</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 null-pad-right">
						<div class="col-md-12 k-sec3-outbor">
							<div class="col-md-12 k-sec3-bor">
								<div class="col-md-12 k-sec3-shad">
									<div class="col-md-12 text-center null-pad m-t-30">
										<img src="images/kasuta/roasted-gram.png">
									</div>
									<div class="col-md-12 null-pad m-t-30 m-b-30">
										<h4>ROASTED GRAM CONC.</h4>
										<ul>
											<li><span style="color:#fff">80% pure Microfiltered Organic White Pea Protein</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 k-sec3-outbor m-t-15">
						<div class="col-md-12 k-sec3-bor">
							<div class="col-md-12 k-sec3-shad">
								<div class="col-md-12 text-center null-pad m-t-60">
									<img src="images/kasuta/eggs.png">
								</div>
								<div class="col-md-12 null-pad m-t-30">
									<h4>EGG WHOLE</h4>
									<ul>
										<li><span style="color:#fff">82% Microfiltered Egg Whites</span></li>
									</ul>
								</div>
								<div class="col-md-12 null-pad m-t-30" style="padding-bottom: 10px;">
									<h4>EGG ALBUMIN</h4>
									<ul>
										<li><span style="color:#fff">60% Whole Egg protein Protein coupled with much needed Fats</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 null-pad-right m-t-15">
						<div class="col-md-12 k-sec3-outbor">
							<div class="col-md-12 k-sec3-bor">
								<div class="col-md-12 k-sec3-shad">
									<div class="col-md-12 text-center null-pad m-t-60">
										<img src="images/kasuta/rice-bag.png">
									</div>
									<div class="col-md-12 null-pad m-t-30">
										<h4>BROWN RICE CONC</h4>
										<ul style="margin-top: 54px;">
											<li><span style="color:#fff">80% pure Microfiltered Organic Brown Rice Protein</span></li>
											<li style=" margin-top:30px; margin-bottom:28px"><span style="color:#fff;">Prefect source for organic protein and fiber</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Section 4 -->
		<div class=" col-md-12 k-sec4">
			<div class=" col-md-12 text-center">
				<img src="images/kasuta/dotted-line.png">
			</div>
			<div class=" col-md-12 text-center m-t-80">
				<img src="images/kasuta/herbs-head.png" >
			</div>
			
			<div class="col-md-12 healing-herbs">
				<div class=" col-md-12 m-t-80 ">
					<div class="col-md-5" style="margin-left: 4%;">
						<div class="col-md-4">
							<img src="images/kasuta/spinach.png">
						</div>
						<div class="col-md-8">
							<h4>SPINACH</h4>
							<ul>
								<li class="k-se4-bor-t"><span>10:1 full spectrum extract</span></li>
								<li class="k-se4-bor-b"><span>Great Anti-Oxidant // Regulates Cholesterol // Protects from free radicals in the colon // Boosts Cardiovascular Health</span></li>
							</ul>
						</div>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<div class="col-md-8">
							<h4>ROYAL JELLY</h4>
							<ul>
								<li class="k-se4-bor-t"><span>10:1 full spectrum extract</span></li>
								<li class="k-se4-bor-b"><span>Boosts Immune System // Counters Allergic Reactions // Contains Beneficial Probiotics // Improves Collagen Levels for Great Skin // Aids in Healing Wounds</span></li>
							</ul>
						</div>
						<div class=" col-md-4">
							<img src="images/kasuta/royal-jelly.png">
						</div>
					</div>
				</div>
				
				<div class=" col-md-12 m-t-80 ">
					
					<div class="col-md-5" style="margin-left: 4%;">
						<div class=" col-md-4">
							<img src="images/kasuta/aloevera.png">
						</div>
						<div class=" col-md-8">
							<h4>ALOEVERA</h4>
							<ul>
								<li class="k-se4-bor-t"><span>10:1 full spectrum extract</span></li>
								<li class="k-se4-bor-b"><span>Great Anti-Oxidant // Regulates Cholesterol // Protects from free radicals in the colon // Boosts Cardiovascular Health</span></li>
							</ul>
						</div>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<div class=" col-md-8">
							<h4>AMLA</h4>
							<ul>
								<li class="k-se4-bor-t"><span>Standardized to 40% Tannins,10% Gallic acid</span></li>
								<li class="k-se4-bor-b"><span>Enhances Metabolic Activity // Improves Appetite // Anti-Aging </span></li>
							</ul>
						</div>
						<div class=" col-md-4">
							<img src="images/kasuta/amla.png">
						</div>
					</div>
				</div>
				
				<div class=" col-md-12 m-t-80 ">
					<div class="col-md-5" style="margin-left: 4%;">
						<div class=" col-md-4">
							<img src="images/kasuta/garlic.png">
						</div>
						<div class=" col-md-8">
							<h4>GARLIC</h4>
							<ul>
								<li class="k-se4-bor-t"><span>10:1 full spectrum extract</span></li>
								<li class="k-se4-bor-b"><span>Great Anti-Oxidant // Regulates Cholesterol // Protects from free radicals in the colon // Boosts Cardiovascular Health</span></li>
							</ul>
						</div>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<div class=" col-md-8">
							<h4>TOMATO</h4>
							<ul>
								<li class="k-se4-bor-t"><span>20:1 full spectrum extract // Standardized to 5% lycopene</span></li>
								<li class="k-se4-bor-b"><span>Regulates blood sugar // Muscle Recovery</span></li>
							</ul>
						</div>
						<div class=" col-md-4">
							<img src="images/kasuta/tomato.png">
						</div>
					</div>
				</div>
				
				<div class=" col-md-12 m-t-80 m-b-100">
					<div class="col-md-5" style="margin-left: 4%;">
						<div class=" col-md-4">
							<img src="images/kasuta/fenugreek.png">
						</div>
						<div class=" col-md-8">
							<h4>FENUGREEK</h4>
							<ul>
								<li class="k-se4-bor-t"><span>10:1 full spectrum extract</span></li>
								<li class="k-se4-bor-b"><span>Great Anti-Oxidant // Regulates Cholesterol // Protects from free radicals in the colon // Boosts Cardiovascular Health</span></li>
							</ul>
						</div>
					</div>
					<div class="col-md-5 col-md-offset-1">
						<div class=" col-md-8">
							<h4>TRIKATU EXTRACT</h4>
							<ul>
								<li class="k-se4-bor-t"><span>10:1 full spectrum extract</span></li>
								<li class=""><span>Black Pepper + Ginger + Pippil</span></li>
								<li class="k-se4-bor-b"><span>Improves digestion and nutrient absorption</span></li>
							</ul>
						</div>
						<div class=" col-md-4">
							<img src="images/kasuta/trikatu.png">
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="col-md-12 main-padding ph-balance">
				<h1>BODY PH BALANCERS</h1>
				
				<div class="col-md-11 k-body-ph m-t-80">
					<div class="col-md-3 text-center">
						<img src="images/kasuta/barleygrass.png">
						<h4 class="m-t-30">BARLEY GRASS</h4>
					</div>
					<div class="col-md-1 text-center m-t-60">
						<img src="images/kasuta/plus-sign.png" style="height: 20px;">
					</div>					
					<div class="col-md-3 text-center">
						<img src="images/kasuta/wheatgrass.png">
						<h4 class="m-t-30">WHEAT GRASS</h4>
					</div>
					<div class="col-md-1 text-center m-t-60">
						<img src="images/kasuta/plus-sign.png" style="height: 20px;">
					</div>
					<div class="col-md-3 text-center">
						<img src="images/kasuta/algaegrass.png">
						<h4 class="m-t-30">ALGAE GRASS</h4>
					</div>
				</div>	
			</div>
		</div>
		
		<!-- Section 5 -->
		
		<div class="col-md-12 main-padding k-sec5">
			
			<div class="col-md-12 text-center m-b-100">
				<img src="images/kasuta/dotted-line.png">
			</div>
			
			<div class="col-md-5 m-t-20">
				<img src="images/kasuta/omega.png" style="height: 500px;">
			</div>
			<div class="col-md-6 null-pad">
				<div class="col-md-12 row">
					<img src="images/kasuta/omega-head.png" class="full-width-image">
					<h1>COMPLETE OMEGA PROFILE</h1>
					<h2>ALL ESSENTIAL FATTY ACIDS</h2>
					<h3>OVERALL METABOLISM BOOSTERS</h3>
					<img src="images/kasuta/omega-head.png" class="full-width-image">
				</div>
				
				<div class="clearfix"></div>
				
				<div class="col-md-12 null-pad m-t-40">
					<div class="col-md-6 row">
						<h4>OMEGA 3</h4>
						<ul>
							<li><span>[EPA + DHA + ALA]</span></li>
							<li><span>Sourced from ALGAE GRASS</li>
							<li><span>Most Bioavailable form of Omega 3</li>
						</ul>
					</div>
					<div class="col-md-6">
						<h4>OMEGA 6</h4>
						<ul>
							<li><span>[GLA + CLA]</span></li>
							<li><span>CLA: sourced from Sunflower Oil</li>
							<li><span>GLA: sourced from Borage Oil</li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6 row m-t-30">
						<h4>OMEGA 7</h4>
						<ul>
							<li><span>Sea Buckthorn Oil extract (rarest form of Omega)</li>
							<li><span>37% Palmitoleic acid</li>
						</ul>
					</div>
					<div class="col-md-6 m-t-30">
						<h4>OMEGA 9</h4>
						<ul>
							<li><span>Sourced from Primrose Oil</span></li>
							<li><span>40% Oleic Acid</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Section 6 -->
		
		<div class=" col-md-12 k-sec6 main-padding">
			<div class="col-md-12 text-center">
				<img src="images/kasuta/fiber-line.png">
			</div>
			
			<div class="col-md-12 null-pad m-t-100">
				<div class="col-md-3 text-center">
					<h4>CARRAGREENAN</h4>
					<img src="images/kasuta/carragreenan.png">
					<ul>
						<li><span>Sourced from Primrose Oil</span></li>
						<li><span>40% Oleic Acid</li>
					</ul>
				</div>
				<div class="col-md-3 text-center">
					<h4>ACACIA GUM</h4>
					<img src="images/kasuta/acacia-gum.png">
					<ul>
						<li><span>Relieves pain and irritation</span></li>
						<li><span>Helps wound healing</li>
						<li><span>Improves Metabolism</li>
					</ul>
				</div>
				<div class="col-md-3 text-center">
					<h4>INULIN</h4>
					<img src="images/kasuta/inulin.png">
					<ul>
						<li><span>Boosts Bowel Movements // Better Digestion // Prebiotic</li>
					</ul>
				</div>
				<div class="col-md-3 text-center">
					<h4>FOS</h4>
					<img src="images/kasuta/fos.png">
					<ul>
						<li><span>Benefits Bone health // Enhances Calcium and Magnesium absorption<br> // Great Prebiotic</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-12 text-center m-t-50">
				<img src="images/kasuta/fiber-line.png">
			</div>
		</div>
		
		<!-- Section 7 -->
		<div class="col-md-12 k-sec7 main-padding text-center">
			<div class="col-md-6">
				<img src="images/kasuta/coenzymeq.png">
				<h4>CO-ENZYME - CoQ10</h4>
			</div>
			<div class="col-md-6">
				<img src="images/kasuta/melatonin.png">
				<h4>MELATONIN</h4>
			</div>
			<div class="col-md-12 m-t-100">
				<img src="images/kasuta/proteoltyic-enzymes.png">
			</div>
		</div>
		
		<!-- Section 8-->
		
		<div class="col-md-12 k-sec8 main-padding">
			<div class="col-md-12 text-center">
				<img src="images/kasuta/fiber-line.png">
			</div>
			
			<div class="col-md-12 null-pad m-t-80">
				<div class="col-md-3 text-right m-t-30 null-pad">
					<img src="images/kasuta/sec8-i-left.png">
				</div>
				<div class="col-md-6">
					<h2>VITAMIN - COMPLEX</h2>
					<h3>REGENERATE AND ENERGIZE</h3>
				</div>
				<div class="col-md-3 text-left m-t-30 null-pad">
					<img src="images/kasuta/sec8-i-right.png">
				</div>
			</div>
			
			<div class="col-md-12 null-pad m-t-80">
				<div class="col-md-4 k-sec8-vita">
					<h4>VITAMINS</h4>
					<p class="col-md-4">Vitamin B1</p><p class="col-md-2">+</p><p class="col-md-4">Vitamin B2</p>
					<p class="col-md-4">Vitamin B3</p><p class="col-md-2">+</p><p class="col-md-4">Vitamin B6</p>
					<p class="col-md-4">Vitamin H</p><p class="col-md-2">+</p><p class="col-md-4">Vitamin C</p>
					<p class="col-md-4">Menaquinone</p><p class="col-md-2">+</p><p class="col-md-6">Pantothenic acid</p>
					<p class="col-md-7">Choline (as Alph GPC)</p><p class="col-md-1">+</p><p class="col-md-3">Inositol</p>
				</div>
				<div class="col-md-4 k-sec8-mid">
					<h5>Regenerate and Energize</h5>
					<p class="k-sec8-mid-p1">Overall Metabolism boosters</p>
					<p class="k-sec8-mid-p2">Asist in Protein synthesis</p>
					<p class="k-sec8-mid-p3">Combat Lactic Acid Generation</p>
					<p class="k-sec8-mid-p4">Supplement mineral loss during</p>
					<p class="k-sec8-mid-p5">sweating and strenuous physical </p>
					<p class="k-sec8-mid-p5">exercises</p>
						
				</div>
				<div class="col-md-4 k-sec8-mine">
					<h4 class="m-b-30">MINERALS</h4>
					<p class="col-md-4">Calsium</p><p class="col-md-2">+</p><p class="col-md-4">Copper</p>
					<p class="col-md-4">Chromium</p><p class="col-md-2">+</p><p class="col-md-4">Selenium</p>
					<p class="col-md-4">Iodine</p><p class="col-md-2">+</p><p class="col-md-4">Manganese</p>
					<p class="col-md-4">Molybdenum</p>
				</div>
			</div>
			
		</div>
		
		<!-- Section 7 Supplement Fact-->
		
		<div class=" col-md-12 b-sec7 main-padding">
			<div class="col-md-12 b-sec7-border">
				<h1>Supplement Facts</h1>
				<img src="images/non-veg-sign.jpg" class="veg-non-sym">
				<img src="images/bullet/sec6-vita/start-line.png" style="" class="full-width-image">
				<h5 class="p-b-30">Serving Size: 1 levelled scoop (40 g)</h5>
				
				<div class="col-md-6">
					<div class="col-md-12 row  ">
						<div class="col-md-7">
						</div>
						<div class="col-md-3">
							<p>Amount Per Serving</p>
						</div>
						<div class="col-md-2">
							<p style="letter-spacing: 1px; !important">% Daily Value*</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
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
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Calories from fat </p>
						</div>
						<div class="col-md-3">
							<p>5.4 kcal</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Total Fat</p>
						</div>
						<div class="col-md-3">
							<p>0.6 g</p>
						</div>
						<div class="col-md-2">
							<p>3%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
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
					<div class="col-md-12 row  ">
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
					</div><div class="col-md-12 row  ">
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
					</div><div class="col-md-12 row  ">
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
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Total Carbohydrates</p>
						</div>
						<div class="col-md-3">
							<p>< 1 g</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
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
					<div class="col-md-12 row  ">
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
					
					<div class="col-md-12 row  ">
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
					
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Vitamin A (as Beta-Carotene) </p>
						</div>
						<div class="col-md-3">
							<p>1000 IU</p>
						</div>
						<div class="col-md-2">
							<p>30%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Vitamin C (as Ascorbic Acid)</p>
						</div>
						<div class="col-md-3">
							<p>100 mg</p>
						</div>
						<div class="col-md-2">
							<p>250%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Vitamin B1 (as Thiamine)</p>
						</div>
						<div class="col-md-3">
							<p>20 mg</p>
						</div>
						<div class="col-md-2">
							<p>1250%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Vitamin B3 (as Niacin)</p>
						</div>
						<div class="col-md-3">
							<p>25 mg</p>
						</div>
						<div class="col-md-2">
							<p>1785%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Vitamin B2 (as Riboflavin)</p>
						</div>
						<div class="col-md-3">
							<p>20 mg</p>
						</div>
						<div class="col-md-2">
							<p>1250%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div><div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Vitamin B3 (as Niacin)</p>
						</div>
						<div class="col-md-3">
							<p>80 mg</p>
						</div>
						<div class="col-md-2">
							<p>444%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div><div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Biotin (Vitamin H)</p>
						</div>
						<div class="col-md-3">
							<p>150 mcg</p>
						</div>
						<div class="col-md-2">
							<p>150%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Potassium (as natural fruit)</p>
						</div>
						<div class="col-md-3">
							<p>80 g</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Vitamin K2 ( as Menaquinone MK-7)</p>
						</div>
						<div class="col-md-3">
							<p>50 mcg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Choline (as Alpha GPC)</p>
						</div>
						<div class="col-md-3">
							<p>70 mg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Inositol</p>
						</div>
						<div class="col-md-3">
							<p>70 mg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Pantothenic Acid</p>
						</div>
						<div class="col-md-3">
							<p>40 mg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Calcium</p>
						</div>
						<div class="col-md-3">
							<p>80 mg</p>
						</div>
						<div class="col-md-2">
							<p>20%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Copper (as Copper Glycinate)</p>
						</div>
						<div class="col-md-3">
							<p>400 mcg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Chromium (as Chromium Picolinate)</p>
						</div>
						<div class="col-md-3">
							<p>40 mcg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Selenium (as Selenium Chelate)</p>
						</div>
						<div class="col-md-3">
							<p>60 mcg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Iodine (as Potassium Iodine) </p>
						</div>
						<div class="col-md-3">
							<p>150 mcg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Manganese (as Manganese Chelate)</p>
						</div>
						<div class="col-md-3">
							<p>3 mg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  ">
						<div class="col-md-7">
							<p>Molybdenum (as Molybdenum Chelate)</p>
						</div>
						<div class="col-md-3">
							<p>50 mcg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 row   p-t-10">
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
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-7">
							<p class="pad-t-b-10"  style="margin-top: 20px;"><strong>KASUTA<sup> TM</sup> - Core composition</strong></p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">29.8g</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p><strong>6 Hr Timed Release Protein Matrix</strong></p>
						</div>
						
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null">
						<div class="col-md-12">
							<p class="pad-tb-30">Cold Temperature Processed - Micro filtered - Instantized [Whey Protein HYDROLYSATE + Whey Protein CONCENTRATE]; Egg Albumin Isolate; Whole Egg Protein concentrate; Micellar Casein; Collagen Peptides (Marine origin)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Anti-Oxidants // Detox</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class="pad-tb-30">L-Glutamine (micronized); Coenzyme Q10 (CoQ10); Spinach extract (10:1 full spectrum); Aloe Vera Gel extract (100:1 full spectrum); Tomato extract (20:1 full spectrum); Gooseberry Fruit (Amla) extract (std. to 40% Tannins,10% Gallic acid); Black Grape Seed extract (std. to 90% polyphenols); Ascorbic Acid</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Immunity // Core Strength </strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class="pad-tb-30">Colostrum (Cow, freeze dried); Melatonin (4mg); Garlic (whole clove) (bulb) extract (std. to 1.5% Allicin); Fenugreek (seed) extract (std. to 60% Fenusides); Royal Jelly extract (10:1 full spectrum)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Hydration//Endurance//Anti Fatigue</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class="pad-tb-30">Coconut Milk powder; Water Melon concentrate; Banana concentrate; B-Hydroxy B-Methyl-Butyric Acid (H-M-B)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Essential Fats</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class="pad-tb-30">Omega 3 fatty acids (Algae source, EPA+DHA+ALA); Omega 6 (Primrose Oil, GLA+CLA); Sea Buckthorn extract (std. to 35% Palmitoleic acid (Omega 7)); Omega 9 (Oleic Acid)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Digestion Support </strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class="pad-tb-30">Proteara-X Enzymes (Protease  I, Protease II, Papain, Amylase, Lipase, Cellulase, Lacto Bacillus Spores(6 Billion)); Trikatu extract (10:1 full spectrum)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>PH Balancers</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class="pad-tb-30">Algae Grass powder; Wheat Grass powder; Barley Grass powder	</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Other Ingredients</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null  ">
						<div class="col-md-12">
							<p class="pad-tb-30">Cocoa powder (only for select flavor variants);  Natural Fruit Pulp (only for select flavor variants); Malt extract; Artificial Flavors; Non-Dairy Creamer; Sucralose; Salt; SiO2</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null m-t-60">
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
					<p class="  m-t-10">Meal Replacement: Consume between meals - empty stomach. Do NOT consume food 1 hr. prior/post intake. </p>
					
					<p class="dash-left">-</p>
					<p style="">For best night time recovery: consume KASUTA with milk and organic honey (taken separately) 30 minutes before sleep.  </p>
					
					<p class="dash-left">-</p>
					<p style="">For best results: combine KASUTA (as a meal replacement) with METER (as a post workout) as your daily dose.</p>
					
					<p class="dash-left">-</p>
					<p style="">Add 1 scoop of KASUTA in 220-300 ml of water / milk. Shake well before use.</p>
					
					<div class="b-sec7-bor-b"></div>
					<h3>ALLERGY INFORMATION</h3>
					<div class="b-sec7-bor-b"></div>
					<p class="  pad-t-b-10">This product is manufactured in a plant that also processes soy, egg, fish and tree nuts ingredients.</p>
					
				</div>
				
				<div class="col-md-12 b-sec7-border row" style="margin-top:15px;">
					<p style="text-transform:uppercase; padding-top: 22px; padding-bottom: 22px; text-align:center;">( To be consumed as dietary supplement only )</p>
				</div>
				
			</div>
			<div class="col-md-6  m-t-30" style="padding-right: 0px;">
				<div class="col-md-12 b-sec7-border" style="">
					<div class="clearfix b-sec7-bor-b m-t-20"></div>
						<h3>WARNINGS</h3>
					<div class="clearfix b-sec7-bor-b"></div>
					<p class="dash-left m-t-10">-</p>
					<p class="m-t-10">Meal Replacement: Consume between meals - empty stomach. Do NOT consume food 1 hr. prior/post intake. </p>
					<p class="dash-left">-</p>
					<p>For best night time recovery: consume KASUTA with milk and organic honey (taken separately) 30 minutes before sleep. </p>
					<p class="dash-left">-</p>
					<p>For best results: combine KASUTA (as a meal replacement) with METER (as a post workout) as your daily dose.</p>
					<p class="dash-left">-</p>
					<p>Add 1 scoop of KASUTA in 220-300 ml of water / milk. Shake well before use.</p>
					
					<div class="col-md-12 b-sec7-border m-t-10" style="margin-bottom:15px;">
						<p style="font-size: 14px; padding-top: 3px; color: #dc9f39;">Ingredients used to formulate this product are NOT Sports Banned Substances. Professional athletes should refer to the WADA website for more information on prohibited substances in sports.</p>
					</div>
					
					<div class="b-sec7-bor-b clearfix"></div>
					<h3>EXPIRY // STORAGE</h3>
					<div class="b-sec7-bor-b"></div>
					<p class="pad-t-b-10">- Best before 24 months of manufacturing. - Store in a cool dry place.</p>
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
		
		<div class="col-md-12 b-sec9 main-padding m-t-80" hidden>
			<div class="col-md-4">
				<div class="col-md-12 overall-rating">
					<h4 class="m-t-40">OVERALL RATING</h4>
					<div class="rating-number">
						<span>4.5</span> <i>/</i> 5.0
					</div>
				</div>
				
				<div class="col-md-12 p-t-40 total-rating" style="">
					<div class="col-md-12">
						<p style="float:left;">Results</p>
						<div style="float:right;"><span>4.5</span> <i>/</i> 5.0</div>
					</div>
					<div class="col-md-12">
						<p style="float:left;">Solubility</p>
						<div style="float:right;"><span>4.5</span> <i>/</i> 5.0</div>
					</div>
					<div class="col-md-12">
						<p style="float:left;">Absorption</p>
						<div style="float:right;"><span>4.5</span> <i>/</i> 5.0</div>
					</div>
					<div class="col-md-12">
						<p style="float:left;">Taste</p>
						<div style="float:right;"><span>4.5</span> <i>/</i> 5.0</div>
					</div>
				</div>
				
				<div class="col-md-12 rating-l-line" style="background-color: #131313;">
					<p class="">Based on averaged overall ratinng by customers</p>
					
					
				</div>
			</div>
			<div class="col-md-8 reviews null-pad">
				<div class="col-md-12">
					<h2>Reviews</h2>
					
					<p style="float:left;font-size: 18px" class="review-title">Score</p>
					<div class="write-rev-button">WRITE A REVIEW</div>
				</div> 
				
				<div class="col-md-5 m-t-40 rating-star">
					<div class="col-md-12">
						<p>RESULTS 
							<span style="padding-left: 55px;">
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star"></i>
							</span>
						</p>
					</div>
					<div class="col-md-12">
						<p>SOLUBILITY 
							<span style="padding-left: 41px;">
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</span>
						</p>
					</div>
					<div class="col-md-12">
						<p>ABSORPTION 
							<span style="padding-left: 32px;">
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</span>
						</p>
					</div>
					<div class="col-md-12">
						<p>TASTE 
							<span style="padding-left: 74px;">
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star t-color"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</span>
						</p>
					</div>
				</div>
				<div class="col-md-5 m-t-100 text-left overall">
					<p class="m-t-25"><span style="font-size: 18px;">OVERALL</span>
						<span style="padding-left: 66px;">
							<i class="fa fa-star t-color"></i>
							<i class="fa fa-star t-color"></i>
							<i class="fa fa-star t-color"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</span>
					</p>
				</div>
				
				<div class="col-md-12 m-t-30">
					<p class="review-title">Title : </p>
					<div class="col-md-10 row">
						<input type="text" name="" class="rev-title-input">
					</div>
				</div> 
				
				<div class="col-md-12 m-t-30">
					<p class="review-title">REVIEW : </p>
					<div class="col-md-10 row">
						<input type="text" name="" class="rev-title-input" style="height: 65px;">
						<p class="b-rev-post-b">POST</p>
					</div>
				</div> 
				
				<div class="col-md-12 m-t-30">
					<p class="review-user">REVIEWS (44)</p>
					
				</div> 
				
				<div class="col-md-12 m-t-30 main-review-sec">
					<p class="review-user-name float-l"> <img src="images/icon-header-profile.png"> MATHEW G.</p>
					<div class="float-r w-color">08/02/15</div>
					<div class="clearfix"></div>
					<p class="veri-user-status"><i class="fa fa-check-circle veri-b-color"></i> <span>VERIFIED BUYER</span></p>
						<span style="padding-left: 10px;">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</span>
					<p class="click-comment">COMMENTS</p>
					
					<p class="share-comment"><i class="fa fa-share-alt"></i> <span> SHARE</p>
					<p class="comment-preview"><span>WAS THIS PREVIEW HELPFUL? <i class="fa fa-thumbs-up"> 0 </i> <i class="fa fa-thumbs-down"> 0 </i> </p>
					<div class="p-user-comment"></div>
					
				</div> 
				<div class="col-md-12 m-t-30 main-review-sec">
					<p class="review-user-name float-l"> <img src="images/icon-header-profile.png"> MATHEW G.</p>
					<div class="float-r w-color">08/02/15</div>
					<div class="clearfix"></div>
					<p class="veri-user-status"><i class="fa fa-check-circle veri-b-color"></i> <span>VERIFIED BUYER</span></p>
						<span style="padding-left: 10px;">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</span>
					<p class="click-comment">COMMENTS</p>
					
					<p class="share-comment"><i class="fa fa-share-alt"></i> <span> SHARE</p>
					<p class="comment-preview"><span>WAS THIS PREVIEW HELPFUL? <i class="fa fa-thumbs-up"> 0 </i> <i class="fa fa-thumbs-down"> 0 </i> </p>
					<div class="p-user-comment"></div>
					
				</div> 
				<div class="col-md-12 m-t-30 p-b-30 review-contact ">
					<h2 class="m-t-50">QUESTIONS</h2>
					<form class="col-md-12 row m-l-10" >
						<div class="col-md-6">
							<input type="text" name="Name" class="rev-form-input" placeholder="Name">
							
							<input type="text" name="Email" class="rev-form-input m-t-25" placeholder="Email">
							
							<input type="text" name="Phone No" class="rev-form-input m-t-25" placeholder="Phone No">
						</div>
						<div class="col-md-6">
							<textarea  type="text" class="rev-form-msgbox" placeholder="Leave us a line"></textarea>
							
							<p class="rev-form-submit">SUBMIT</p>
						</div>
					</form>
				</div> 
			</div>
		</div>		
		<!-- Footer -->
		<?php include('footer.php') ?>
	</body>
</html>