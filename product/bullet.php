<!DOCTYPE html>
	<head>
		<script src="js/jquery-3.2.1.min.js"></script>	
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="menu/style.css" rel="stylesheet">
		<script>
			if (screen.width<=500)
			window.location.replace("mbullet.html")
		</script>
		<script>
			$(document).ready(function() {
				$('.b-sec1-left-img-line').delay(500).queue(function(){
				  $(this).addClass("b-line-height");
				});
				$('.b-sec1-mid-image').delay(1000).queue(function(){
				  $(this).addClass("b-sec1-mid-image-ani");
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
				 
				if (scroll >= 5800) {
					//console.log('a');
					$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(36% - 125px)");
				} else if(scroll <= 5800){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(100% - 80px)");
				}
				if(scroll >= 8400){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(35% - 80px)");
				}
				else if(scroll <= 8400){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(100% - 46px)");
				}
			});
		</script>
		<script>
			$.ajax({
			  url: '//cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.js',
			  dataType: 'script',
			  cache: true,
			  success: function() {
				$("#rmv-ani").appear();
				$("#bullet").appear();

				$("body").on("appear", "#rmv-ani", function() {
					$('.animated').removeClass('fadeInUp');
				});
				
				$("body").on("appear", "#bullet", function() {
					$('.animated').addClass('fadeInUp');
				});
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
		</style>
		
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
		<div class="col-md-12 b-sec1 main-padding">
			<video autoplay="" loop="" id="video-background" muted="">
				<source src="images/video/bul.mp4" type="video/mp4">
			</video>
			<div class="col-md-4">
					<div class="col-md-12 null-pad animated fadeInUp" >
						<div class="col-md-10 row">
							<h1 class="b-sec1-text-bullet">BULLET</h1>
						</div>
						<div class="col-md-2 row">
							<p class="b-sec1-tm">TM<p>
						</div>
					</div> 
					
					<div class="animated fadeInUp" id="bullet">
						<img src="images/bullet/section1/b-line.png" class="b-sec1-left-img-line">
						<img src="images/bullet/section1/number1.png" class="b-sec1-left-img">
					</div>
			</div>
			<div class="col-md-4 animated fadeInUp">
				<img src="images/bullet/section1/bullet.png" class="b-sec1-mid-image" >
			</div> 
			
			<div class="col-md-4 b-sec1-right animated fadeInUp">
				<h2>WORLD'S FIRST PROTEIN BASED <BR>PRE-WORKOUT FORMULA</sup></h1>
				<img src="images/bullet/section1/right-img.png" style="margin-left: 105px; width: 100px; margin-top: 30px;">
				<p class="m-t-45 aos-init aos-animate" data-aos="fade-up">17 GM PROTEIN +26 PRE - WORKOUTS ELEMENTS</p>
				<p class="m-t-30">32 GRAM PRE-WORKOUT SERVING</p>
				<p class="m-t-30 m-b-50">THE MOST EFFICIENT 2-IN-2 PRODUCT</p>
				
				<a href="https://www.youtube.com/watch?v=XD3QZE_J0Tw" target="_blank" class="btn-ani">
				<span></span>
				<span></span>
				<span></span>
				<span></span>Play Video</a>
			</div>
		</div> 
		
		<!-- Section 2 -->
		<div class="col-md-12 main-padding b-sec2">
			
			<div class="col-md-1"></div>
			<div class="col-md-10 m-t-100 " >
				<p class="b-sec2-para1">BULLET<sup> TM</sup> is a signature product from DAAKI // One of the most innovative fitness supplement of the decade // Combines the greatness of PROTEINS with much need PRE-WORKOUT elements</p>
				<p class="b-sec2-para1 m-t-45">BULLET<sup> TM</sup> comprises of a unique proprietary blend of enzymatically broken  Amino Acid peptides (Hydrolyzed Whey Isolates) // Supports quicker absorption & shuttling into muscle tissues // Injects 17 grams of Pure Lean Muscle Building protein in 1 serving.</p>
				
				<p class="b-sec2-para3 m-t-100" id="rmv-ani">THE MOST SUSTAINABLE PRE-WORKOUT COMPOSITION EVER DESIGNED</p>
				
				<p class="b-sec2-para4 m-t-60">MAXIMIZES THE USE OF NATURAL INGREDIENTS TO ENABLE SUSTINABLE POWER FOR A LONG-LASTING WORKOUT</p>
				
				<p class="b-sec2-para5 m-t-60" id="creatine">NO CREATINE <span class="tnr" style="padding-left: 5px;">-</span> NO SYNTHETIC CAFFEINE <span class="tnr" style="padding-left: 5px;">-</span> NO JITTERS <span class="tnr" style="padding-left: 5px;">-</span> NO CRASH</p>
			</div>
			<div class="col-md-1" ></div>
			
			<!-- Sec 2 Jar -->
			
			<div class="col-md-5 m-t-140" >
				<img src="images/bullet/section2/jar.png" class="b-sec2-jar" >
			</div>
			<div class="col-md-7 m-t-140" >
				<h2 class="b-sec2-jar-rtext-hydro t-color">HYDROLYSATES-70</h2>
				
				<h2 class="b-sec2-jar-rtext-iso">ISOLATES-30</h2>
				
				<h4 class="b-sec2-jar-rtext3"><img src="images/bullet/section2/dash.png"> <span>17G</span> AMINO PEPTIDES</h4>
				<p class="m-t-60 b-sec2-jar-rtext4"><img src="images/bullet/section2/dash.png"> Sufficient and Efficient supply of much<br><span style="padding-left:47px;"> needed 18 Amino Acids pre-workout</span></p>
			
			</div>
		</div>
		
		<!-- Section 3 -->
		<div class="col-md-12 b-sec3 main-padding" >
			
			<div class="col-md-12" >
				<p class="b-sec3-h1 t-color" >THE DEDICATED PRE<span class="tnr" style="padding-left: 5px;">-</span>WORKOUT AMINOS (5.9G)</p>
			</div>
			
			<div class="col-md-10 col-sm-offset-1">
				<div class="col-sm-6 col-md-6">
					<div class="col-md-12 b-sec2-box">
					<img src="images/bullet/sec3/BETA-ALANINE.png" style="" class="b-sec3-img">
						<p class="b-sec3-h2" >BETA-ALANINE</p>
						<p class="b-sec3-p" >Boosts Muscle Power // Strength and Growth during workouts</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 " >
					<div class="col-md-12 b-sec2-box">
						<img src="images/bullet/sec3/l-citrulline.png" style="" class="b-sec3-img">
						<p class="b-sec3-h2" >L-citrulline malate</p>
						<p class="b-sec3-p" > Energy Generation // Vascular Muscle Pumps Endurance</p>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-6 m-t-40">
					<div class="col-md-12 b-sec2-box">
						<img src="images/bullet/sec3/BETA-ALANINE.png" style="" class="b-sec3-img">
						<p class="b-sec3-h2" >N-ACETYL  L-CARNITINE</p>
						<p class="b-sec3-p" > Increase Work Capacity & Cognitive Performance </p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 m-t-40" >
					<div class="col-md-12 b-sec2-box">
						<img src="images/bullet/sec3/l-taurine.png" style="" class="b-sec3-img">
						<p class="b-sec3-h2" >L-TAURINE</p>
						<p class="b-sec3-p" > Perform Longer and Recover Instantly</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-6 col-md-6 m-t-40">
					<div class="col-md-12 b-sec2-box">
						<img src="images/bullet/sec3/Theanine.png" style="" class="b-sec3-img">
						<p class="b-sec3-h2" >THEANINE</p>
						<p class="b-sec3-p" > Increases Nitric-Oxide production, which in turn increases generalized Vasodilation</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 m-t-40" >
					<div class="col-md-12 b-sec2-box">
						<img src="images/bullet/sec3/arginine.png" class="b-sec3-img">
						<p class="b-sec3-h2" >ARGININE-AKG</p>
						<p class="b-sec3-p" > Increases Nitric-Oxide production, which in turn increases generalized Vasodilation</p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<!-- Section 4 -->
		<div class="col-md-12 main-padding b-sec4 text-center">
		
			<img src="images/bullet/section1/right-img.png" class="b-sec4-img1">
			
			<h2 class="b-sec4-h1">PERFORMANCE ENHANCING HERBS ( 3 g )</h2>
			
			<img src="images/bullet/sec4/line2.png" class="m-t-100 m-b-100 full-width-image">
			
			<div class="col-md-12 herbs" >
				<div class="col-sm-4 col-md-4 border-right">
					<img src="images/bullet/sec4/blacktea.png">
					<h4>BLACK TEA</h4>
					<div class="col-md-10 col-md-offset-1">
						<p class="sec4-herbs"">-</p>
						<p class="text-left">Standardized to 40% L-Theanine, 20% Polyphenols</p>
						<p class="sec4-herbs">-</p>
						<p class="text-left">Promotes Relaxation // Reduces Muscular Stress</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 border-right" style="min-height: 245px;">
					<img src="images/bullet/sec4/Gaurana.png">
					<h4>GAURANA</h4>
					<div class="col-md-10 col-md-offset-1">
						<p class="sec4-herbs">-</p>
						<p class="text-left">Standardized to 30% Caffeine</p>
						<p class="sec4-herbs">-</p>
						<p class="text-left">Neural Energy // Stimulates Pain</p>
					</div>
					
				</div>
				<div class="col-sm-4 col-md-4">
					<img src="images/bullet/sec4/danshen.png">
					<h4>DAN SHEN</h4>
					<div class="col-md-10 col-md-offset-1">
						<p class="sec4-herbs">-</p>
						<p class="text-left">20: 1 Full Spectrum extract</p>
						<p class="sec4-herbs">-</p>
						<p class="text-left">Amplifies Coronary Blood circulation</p>
					</div>
				</div>
			</div>
			
			<div class="clearfix"></div>
			<div class="col-md-12 m-t-100 herbs">
				<div class="col-sm-4 col-md-4 border-right">
					<img src="images/bullet/sec4/cordyceps.png">
					<h4>CORDYCEPS SINENSIS</h4>
					<div class="col-md-10 col-md-offset-1">
						<p class="sec4-herbs" style="height:45px">-</p>	
						<p class="text-left">Standardized to 50% Polysaccharides 30% Cordycepic acids</p>
						<p class="sec4-herbs">-</p>
						<p class="text-left">Enhances Blood Flow</p>
						<p class="sec4-herbs">-</p>
						<p class="text-left">Amplifies VO2 Max</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 border-right" style="min-height: 259px;">
					<img src="images/bullet/sec4/fennel.png" style="" class="">
					<h4>FENNEL</h4>
					<div class="col-md-10 col-md-offset-1">
						<p class="sec4-herbs">-</p>
						<p class="text-left">10:1 Full Spectrum extract</p>
						<p class="sec4-herbs" style="height:60px">-</p>
						<p class="text-left">Natural Coolant // Electrolytic Balancer // Maintains  Heart Rate and Body PH <br></p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<img src="images/bullet/sec4/ephedra.png">
					<h4>EPHEDRA GERARDIANA</h4>
					<div class="col-md-10 col-md-offset-1">
						<p class="sec4-herbs">-</p>
						<p class="text-left">Standardized to 8% Ephedrine</p>
						<p class="sec4-herbs">-</p>
						<p class="text-left">Increases rate of perspiration // Stimulates Focus</p>
						<p class="sec4-herbs">-</p>
						<p class="text-left">Improves the overall athletic performance</p>
					</div>
				</div>
			</div>
			
			<div class="clearfix"></div>
			<div class="col-md-12 m-t-100 herbs">
				<div class="col-md-2"></div>
				<div class="col-sm-6 col-md-4 border-right">
					<img src="images/bullet/sec4/BEETROOT.png">
					<h4>BEETROOT</h4>
					<div class="col-md-10 col-md-offset-1">
						<p class="sec4-herbs">-</p>
						<p class="text-left">Standardized for 40% BETAINE</p>
						<p class="sec4-herbs">-</p>
						<p class="text-left">Amplifies NITROGEN DELIVERY to muscle tissues.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<img src="images/bullet/sec4/trikatu.png" style="" class="">
					<h4>TRIKATU</h4>
					<div class="col-md-10 col-md-offset-2">
						<p class="sec4-herbs">-</p>
						<p class="text-left">10: 1 Full Spectrum extract</p>
						<p class="sec4-herbs">-</p>
						<p class="text-left">General Metabolism Booster</p>
					</div>
				</div>
				<div class="col-md-2"></div>
			</div>
			
			<img src="images/bullet/sec4/last-line.png" class="m-t-80 full-width-image">
		</div>
		
		<!-- Section 5 -->
		<div class="col-md-12 b-sec5 null-pad">
			<div class="col-md-11 col-md-offset-1">
				<div class="col-md-3 text-center">
					<h3>GABA</h3>
				</div>
				<div class="col-md-3 text-center">
					<h3>M-C-T</h3>
				</div>
				<div class="col-md-3 text-center">
					<h3>H-M-B</h3>
				</div>
				
				<div class="col-md-12">
					<img src="images/bullet/sec5/gaba.png" style="width:91%;">
				</div>
				
				<div class="col-md-3 m-t-30">
					<p class="sec4-herbs">-</p>
					<p>Stimulates HGH</p>
					<p class="sec4-herbs">-</p>
					<p>Regulates Insulin production + Blood Sugar</p>
				</div>
				<div class="col-md-3 text-center m-t-30">
					<p>- Energy Engine</p>
				</div>
				<div class="col-md-3 m-t-30">
					<p class="sec4-herbs">-</p>
					<p>Instant Recovery for long lasting trainings</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		
		<!-- Section 6 -->
		<div class="col-md-12 main-padding b-sec6" >
			
			<img src="images/bullet/sec6-vita/vita-line.png" class="full-width-image b-sec6-img1">
			
			<div class="col-md-3 m-b-80 text-right" >
				<img src="images/bullet/sec6-vita/LEFT  ARROW.png" class="b-sec6-arrow">
			</div>
			<div class="col-md-6 m-b-80 text-center" >
				<h2 class="t-color">MULTI VITAMIN AND</h2>
				<h2 >MINERAL COMPLEX</h2>
			</div>
			<div class="col-md-3 m-b-80 text-left" >
				<img src="images/bullet/sec6-vita/RIGHT ARROW.png" class="b-sec6-arrow">
			</div>
			
			<div class="clearfix"></div>
			<div class="col-xl-3 col-md-3 col-xs-4 text-right b-sec6-vitamins">
				<h3 class="m-b-25">VITAMINS</h3>
				<p>Vitamin B1<img src="images/vita-mine/b1.png"></p>
				<p>Vitamin B2<img src="images/vita-mine/b2.png"></p>
				<p>Vitamin B3<img src="images/vita-mine/b3.png"></p>
				<p>Vitamin B6<img src="images/vita-mine/b6.png"></p>
				<p>Vitamin H<img src="images/vita-mine/h.png"></p>
					
			</div>
			<div class="col-xl-3 col-md-6 col-xs-4">
				<div class="col-md-10 col-md-offset-1">
					<h4 class="b-sec6-mid-text-h">Regenerate and Energize</h4>
					<p class="b-sec6-mid-text-p1">Overall Metabolism boosters</p>
					<p class="b-sec6-mid-text-p2" >Asist in Protein synthesis</p>
					<p class="b-sec6-mid-text-p3">Combat Lactic Acid Generation</p>
					<p class="b-sec6-mid-text-p4">Supplement mineral loss during</p>
					<p class="b-sec6-mid-text-p4" style="letter-spacing: 2.9px !important;">sweating and strenuous physical </p>
					<p class="b-sec6-mid-text-p4" style="text-align: left !important;">exercises</p>
						
				</div>
			</div>
			<div class="col-xl-3 col-md-3 col-xs-4 text-left b-sec6-minerals">
				<h3 class="m-b-25">MINERALS</h3>
				<p><img src="images/vita-mine/mg.png">Magnesium</p>
				<p><img src="images/vita-mine/p.png">Phosphorus</p>
				<p><img src="images/vita-mine/k.png">Potassium</p>
				<p><img src="images/vita-mine/zn.png">Zinc</p>
				<p><img src="images/vita-mine/b1.png">Iron</p>
			</div>
			
			<img src="images/bullet/sec6-vita/vita-line.png" style="transform: scaleY(-1);" class="full-width-image m-t-100 m-b-100">
			
			<div class="clearfix"></div>
		</div>
		
		<!-- Section 7 -->
		
		<div class=" col-md-12 b-sec7 main-padding">
			<div class="col-md-12 b-sec7-border">
				<h1>Supplement Facts</h1>
				<img src="images/bullet/sec6-vita/start-line.png" style="" class="full-width-image">
				<h5 class="p-b-30">Serving Size: 1 levelled scoop (32 g)</h5>
				
				<div class="col-md-6">
					<div class="col-md-12 row ">
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
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Calories</p>
						</div>
						<div class="col-md-3">
							<p>107.35 kcal</p>
						</div>
						<div class="col-md-2">
							<p>5.4%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Total Fat</p>
						</div>
						<div class="col-md-3">
							<p>2.8 g</p>
						</div>
						<div class="col-md-2">
							<p>14%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row ">
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
					<div class="col-md-12 row ">
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
					</div><div class="col-md-12 row ">
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
					</div><div class="col-md-12 row ">
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
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Total Carbohydrates</p>
						</div>
						<div class="col-md-3">
							<p>5.6 g</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Dietry Fiber</p>
						</div>
						<div class="col-md-3">
							<p>0.5 g</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Sugars</p>
						</div>
						<div class="col-md-3">
							<p>3 g</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<h3>Sugars</h3>
						</div>
						<div class="col-md-3">
							<h3>17 g</h3>
						</div>
						<div class="col-md-2">
							<h3>28.3%</h3>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Vitamin A (as natural fruit) </p>
						</div>
						<div class="col-md-3">
							<p>30 mcg</p>
						</div>
						<div class="col-md-2">
							<p>3%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Vitamin B1 (as Thiamine)</p>
						</div>
						<div class="col-md-3">
							<p>25 mg</p>
						</div>
						<div class="col-md-2">
							<p>1786%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row ">
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
					</div>
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Vitamin B3 (as Niacin)</p>
						</div>
						<div class="col-md-3">
							<p>50 mg</p>
						</div>
						<div class="col-md-2">
							<p>278%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Vitamin B6 (as Pyridoxine HCL)</p>
						</div>
						<div class="col-md-3">
							<p>20 g</p>
						</div>
						<div class="col-md-2">
							<p>1000%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div><div class="col-md-12 row ">
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
					</div><div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Phosphorus (as natural fruit)</p>
						</div>
						<div class="col-md-3">
							<p>10 mg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row ">
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
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Zinc (as Zinc Gluconate)</p>
						</div>
						<div class="col-md-3">
							<p>15 g</p>
						</div>
						<div class="col-md-2">
							<p>100%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row ">
						<div class="col-md-7">
							<p>Iron (as Ferrous Fumarate)</p>
						</div>
						<div class="col-md-3">
							<p>15 g</p>
						</div>
						<div class="col-md-2">
							<p>54%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row  p-t-10">
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
					<div class="col-md-12 p-r-null ">
						<div class="col-md-7">
							<p class="pad-tb-20"><strong>BULLET<sup> TM</sup> - Core composition</strong></p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">29.8g</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null">
						<div class="col-md-7">
							<p><strong>Ultra-Fast Acting Protein Matrix</strong></p>
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
							<p class="pad-tb-30">Cold Temperature processed<span style="font-family:sans-serif"> - </span>Micro Filtered<span style="font-family:sans-serif"> -  </span>Instantized [Whey Protein HYDROLYSATE + Whey Protein ISOLATE]  </p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Max. Strength//ATP Amplification</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null ">
						<div class="col-md-12">
							<p class="pad-tb-30">Added Micronized FFAS [Beta-Alanine + L-Arginine AKG + L-Taurine](99% pure, 100 mesh); Gamma - Aminobutyric Acid (GABA)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null ">
						<div class="col-md-12">
							<p class="pad-tb-30">N-Acetyl-L-Carnitine(micronized); Cordyceps Sinensis extract (std. to 50% polysaccharides, 30% cordycepic acid); Salvia Miltiorrhiza (Dan Shen) extract (20:1 full spectrum); Beetroot extract (std. to 40% betaine); Fennel Root extract (10:1 full spectrum)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null ">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Hydration//Endurance//Anti Fatigue</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null ">
						<div class="col-md-12">
							<p class="pad-tb-30">Coconut Milk powder; Water Melon concentrate; Banana concentrate; B-Hydroxy B-Methyl-Butyric Acid (H-M-B)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null ">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Neural Focus//Energy Blast</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null ">
						<div class="col-md-12">
							<p class="pad-tb-30">L-Citrulline-DL-Malate (micronized - 200 mesh); Ephedra Gerardiana extract (std. to 8% Ephedrine); Guarana extract (std. to 30% caffeine); Black Tea extract (std. to 40% L-Theanine, 20% polyphenols); Trikatu extract (10:1 full spectrum); Medium Chain Triglycerides (M-C-T) (80% pure); Almond powder (roasted)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null ">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Other Ingredients</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null ">
						<div class="col-md-12">
							<p class="pad-tb-30">Cocoa powder (only for select flavor variants); Malt extract, Caramel Concentrate; Carrageenan gum; Artificial Flavors; Non-Dairy Creamer; Sucralose; Salt ; SiO2</p>
						</div>
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
					<p class=" m-t-10">BULLET should be consumed at least 30 - 40 minutes before workout.</p>
					
					<p class="dash-left">-</p>
					<p style="">Add 1 scoop of BULLET in 220-300 ml of water. Shake well before use.</p>
					
					<p class="dash-left">-</p>
					<p style="">Do NOT consume with milk.</p>
					
					<div class="b-sec7-bor-b"></div>
					<h3>ALLERGY INFORMATION</h3>
					<div class="b-sec7-bor-b"></div>
					<p class="pad-tb-20">This product is manufactured in a plant that also processes soy, egg, fish and tree nuts ingredients.</p>
					<div class="b-sec7-bor-b"></div>
					<h3>EXPIRY // STORAGE</h3>
					<div class="b-sec7-bor-b"></div>
					<p class="">- Best before 24 months of manufacturing.</p>
					<p style="margin-top:-14px">- Store in a cool dry place.</p>
					
				</div>
				
				<div class="col-md-12 b-sec7-border row" style="height:102px; margin-top:15px;">
					<p style="text-transform:uppercase; padding-top: 40px; text-align:center;">( To be consumed as dietary supplement only )</p>
				</div>
				
			</div>
			<div class="col-md-6  m-t-30" style="padding-right: 0px;">
				<div class="col-md-12 b-sec7-border" style="">
					<div class="clearfix b-sec7-bor-b m-t-20"></div>
						<h3>WARNINGS</h3>
					<div class="clearfix b-sec7-bor-b"></div>
					<p class="dash-left m-t-10">-</p>
					<p class="m-t-10">Do NOT exceed recommended dose (strictly). Overdose may cause nausea / headache / dizziness/ bloating. </p>
					<p class="dash-left">-</p>
					<p>Do NOT use in combination with other supplements / pharmaceuticals that are considered to be  stimulants. </p>
					<p class="dash-left">-</p>
					<p>Do NOT use BULLET for more than 8 weeks of continuous usage.</p>
					<p class="dash-left">-</p>
					<p>Do NOT consume BULLET on non-training days.</p>
					<p class="dash-left">-</p>
					<p>Consult your physician before using this product if you are taking any medication or are under a physician's care.</p>
					<p class="dash-left">-</p>
					<p>Do NOT consume if exposed to high blood pressure. </p>
					<p class="dash-left">-</p>
					<p>Discontinue use if you experience any adverse reaction to this product.</p>
					<p class="dash-left">-</p>
					<p>Only intended for use by healthy adults, 18 years and older.</p>
					<p class="dash-left">-</p>
					<p>Keep out of reach of children. Not for lactating or pregnant women.</p>
					
					<div class="col-md-12 b-sec7-border" style="height:60px; margin-bottom:15px;">
						<p style="font-size: 12px; padding-top: 3px; color: #dc9f39;">Ingredients used to formulate this product are NOT Sports Banned Substances. Professional athletes should refer to the WADA website for more information on prohibited substances in sports.</p>
					</div>
					
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
							THE MOST SUSTAINABLE PRE-WORKOUT COMPOSITION EVER DESIGN
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