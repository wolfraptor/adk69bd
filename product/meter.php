<!DOCTYPE html>
<html>
	<head>
		<script src="js/jquery-3.2.1.min.js"></script>	
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="menu/style.css" rel="stylesheet">
		<script>
			if (screen.width<=500)
			window.location.replace("mmeter.html")
		</script>
		<script>
			$(document).ready(function() {
			$('.m-sec1-left-img-line').delay(800).queue(function(){
			  $(this).addClass("m-line-height");
			});
			
			$('.m-sec1-ryt-img').delay(1000).queue(function(){
			  $(this).addClass("m-sec1-ryt-img-ani");
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
				 
				if (scroll >= 5300) {
					//console.log('a');
					$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(36% - 125px)");
				} else if(scroll <= 5300){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:nth-child(2)").css("top","calc(100% - 80px)");
				}
				if(scroll >= 8150){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(35% - 80px)");
				}
				else if(scroll <= 8150){
					//console.log('a');
					$(".vertical-sub-nav.first-top li:last-child").css("top","calc(100% - 46px)");
				}
			});
		</script>
		<style>
			.b-sec7{
				background:#000f15 !important;
			}
			.buy-now, .faq-bullet{
				background:#000f15 !important;
			}
			.fadeInUp {
				-webkit-animation-name: fadeInUp;
				animation-name: fadeInUp;
				-webkit-animation-duration: 2.5s;
				animation-duration: 2.5s;
			}
		</style>
		<script>
			$.ajax({
			  url: '//cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.js',
			  dataType: 'script',
			  cache: true,
			  success: function() {
				$("#rmv-ani").appear();
				$("#meter").appear();

				$("body").on("appear", "#rmv-ani", function() {
					$('.animated').removeClass('fadeInUp');
				});
				
				$("body").on("appear", "#meter", function() {
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
		<div class="col-md-12 main-padding m-sec1">
			<video autoplay loop id="video-background" muted>
				<source src="images/video/index.mp4" type="video/mp4">
			</video>
			<div class="col-sm-4 col-md-4 animated fadeInUp">
				<img src="images/meter/2_word.png" class="m-sec1-left-img" id="meter">
				<img src="images/meter/2-line.png" class="m-sec1-left-img-line">
			</div> 
			<div class="col-sm-4 col-md-4 animated fadeInUp">
				<div class="col-md-9 row" >
					<h1>METER</h1>
				</div>
				<div class="col-md-2" >
					<p class="m-sec1-tm">TM<p>
				</div>
				<div class="clearfix"></div>
				<h2>RE-GENERATION ENGINEERING</h2>
				<p class="m-sec1-p1"><img src="images/meter/4.png" class="m-sec1-icons">POST TRAINING RECOVERY</p>
				<p class="m-sec1-p2"><img src="images/meter/3.png" class="m-sec1-icons">SUPPORT LEAN GROWTH</p>
				<p class="m-sec1-p3"><img src="images/meter/2.png" class="m-sec1-icons">HOLISTIC HEALING</p>
				<p class="m-sec1-p4"><img src="images/meter/1.png" class="m-sec1-icons">QUICK RELEASE</p>
				
				<!--<span class="buy-but">
					<a href="#" class="sec1-buy-now">BUY NOW</a>
				</span>	-->
				
			</div> 
			<div class="col-sm-4 col-md-4 text-center animated fadeInUp">
				<img src="images/bullet/section1/bullet.png" class="m-sec1-ryt-img" >
			</div>
		</div> 
		
		<!-- Section 2 -->
		<div class="col-md-12 main-padding m-sec2" >
			
				<p class="m-sec2-para1">RECOVERY ia a multi-pronged. It involves rebuilding the muscle fibers // Combating Muscular and Adrenal Fatigue // Fighting Cortisol levels // Flushing out the lactic acid // Curing Muscle Inflammation</p>
				<p class="m-sec2-para1 m-t-45">Only Proteins won't help // To get over these challenges you might need to empty your pockets for a stack full of supplements.</p>
				
				<p class="m-sec2-para3 m-t-100">BUT HANG ON!! METER IS THE SAVIOUR<br>Gets you all the goodness in a single serving</p>
				
				<p class="m-sec2-para1 m-t-100">Additional BCCAs to help recover instantly // Rejuvenating Fruits // Anti-Inflammation and Fatigue combating HERBS // Omega 3s to keep you going // Necessary Vitamins and Minerals to Re-Energize</p>
				
				<p class="m-sec2-para4 m-t-60">BULK LOAD OF STUFF AND 21.5 GRAMS OF FAST-DIGESTING WHEY PROTEINS TO <br> BACK IT UP METER<sup>TM</sup> IS THE COMPLETE RECOVERY SUPPLEMENT</p>
		</div>
		
		
		<!-- Section 3 -->
		<div class="col-md-12 main-padding m-sec3" id="rmv-ani">
			<div class="col-md-12 pie-chart">
				<div class="col-md-6">
					
				</div>
				<div class="col-md-6">
					<h1>WHEY</h1>
					<p class="m-sec3-p1">Delivers great protein content with a fast-track<br>delivery into muscle tissues</p>
				</div>
			</div>
			<div class="col-md-12 m-t-60">
				<p class="m-sec3-p1 text-center"><span class="t-color">Fig :</span> A proprietary blend of  All-Whey forms</p>
				</div>
		</div>
		
		
		<!-- Section 4 -->
		<div class="col-md-12 m-sec4 text-center main-padding">
			<img src="images/meter/added_bccas.png" alt="added BCCAs" style="width: 93%;">
		</div>
		
		<!-- Section 5 -->
		
		<div class="col-md-12 m-sec5-main">
			<div class="col-md-12 m-sec5">
				<div class="col-md-12 null-pad m-sec5-div1">
					<div class="col-md-3 text-right">
						<img src="images/meter/left_arrow.png" class="msec5-arrow">
					</div>
					<div class="col-md-6 text-center" >
						<h2>HEALING WITH HERBS</h2>
					</div>
					<div class="col-md-3">
						<img src="images/meter/right_arrow.png"  class="msec5-arrow">
					</div>
				</div>
				
				<div class="clearfix m-t-100 m-b-30"></div>

				<div class="col-md-4">
					<div class="col-md-12">
						<div class="col-md-9 text-right"><p><span class="m-sec5-text1">TURMERIC</span><br><span class="m-sec5-text2">95% Curcuminoids</span></p></div>
						<div class="col-md-3"><img src = "images/meter/turmeric.png" class="img-circle m-sec5-circle-img"></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-9 text-right"><p><span class="m-sec5-text1">CINNAMON</span><br><span class="m-sec5-text2">15% Flavonoids</span></p></div>
						<div class="col-md-3"><img src = "images/meter/cinammon.png" class="img-circle m-sec5-circle-img"></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-9 text-right"><p><span class="m-sec5-text1">GINGER ROOT</span><br><span class="m-sec5-text2">8% Gingerols</span></p></div>
						<div class="col-md-3"><img src="images/meter/ginger.png" class="img-circle m-sec5-circle-img"></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-9 text-right"><p><span class="m-sec5-text1">VALERIAN ROOT</span><br><span class="m-sec5-text2">1% Valeneric Acid</span></p></div>
						<div class="col-md-3"><img src="images/meter/valerian_root.png" class="img-circle m-sec5-circle-img"></div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-12 m-sec5-cent">
						<p class="m-sec5-centext">Complete Body Recovery with Herbs // Best in class standarized extracts // Anti-Inflammation // Heal Muscle Inflammation // Repair Damaged Cells // Relive Pain from Muscle Soreness // Inhibitd COX-2 levels // Prevent long lasting Adrenal Fatigue</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-12">
						<div class="col-md-3"><img src="images/meter/licorice_root.png" class="img-circle m-sec5-circle-img"></div>
						<div class="col-md-9"><p><span class="m-sec5-text1">LICORICE ROOT</span><br><span class="m-sec5-text2">15% Glyccyrhizin Acid</span></p></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-3"><img src="images/meter/mucuna_pruriens.png" class="img-circle m-sec5-circle-img"></div>
						<div class="col-md-9"><p><span class="m-sec5-text1">MUCUNA PRURIENS</span><br><span class="m-sec5-text2">80% L-Dopa</span></p></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-3"><img src="images/meter/holy_basil.png" class="img-circle m-sec5-circle-img"></div>
						<div class="col-md-9"><p><span class="m-sec5-text1">HOLY BASIL</span><br><span class="m-sec5-text2">2% Ursolic Acid</span></p></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-3"><img src="images/meter/peppermint.png" class="img-circle m-sec5-circle-img"></div>
						<div class="col-md-9"><p><span class="m-sec5-text1">PEPPERMINT</span><br><span class="m-sec5-text2">(10:1)</span></p></div>
					</div>
				</div>
			</div>
			
			<div class="col-md-12 m-sec5-part-2 main-padding">
				<div class="col-md-2 text-right">
					<img src="images/meter/left_arrow.png" class="msec5-arrow">
				</div>
				<div class="col-md-8 text-center" >
					<h2>REJUVINATING HERBS & FRUITS</h2>
				</div>
				<div class="col-md-2">
					<img src="images/meter/right_arrow.png"  class="msec5-arrow">
				</div>
				
				<div class="clearfix m-t-100 m-b-30"></div>
				
				<div class="col-md-4">
					<div class="col-md-12">
						<div class="col-md-9 text-right"><p><span class="m-sec5-text1">LEMON GRASS</span><br><span class="m-sec5-text2">20:1</span></p></div>
						<div class="col-md-3"><img src = "images/meter/lemon_grass.png" class="img-circle m-sec5-circle-img"></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-9 text-right"><p><span class="m-sec5-text1">GREEN TEA</span><br><span class="m-sec5-text2">60% ECGC</span></p></div>
						<div class="col-md-3"><img src = "images/meter/green_tea.png" class="img-circle m-sec5-circle-img"></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-9 text-right"><p><span class="m-sec5-text1">CHAMOMILE FLOWER</span><br><span class="m-sec5-text2">1% Apigenin</span></p></div>
						<div class="col-md-3"><img src="images/meter/chamomile.png" class="img-circle m-sec5-circle-img"></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-9 text-right"><p><span class="m-sec5-text1">CITRUS AURANTIUM</span><br><span class="m-sec5-text2">90% BioFlavonoids</span></p></div>
						<div class="col-md-3"><img src="images/meter/citrus.png" class="img-circle m-sec5-circle-img"></div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="col-md-12 m-sec5-cent">
						<p class="m-sec5-centext">Rejuvenate with Herbs and Fruits // Heals Oxidative Stress // Relaxes Muscular and Mental Stress // Energizing and Refreshing // Much needed support after a tiring workout session</p>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="col-md-12">
						<div class="col-md-3"><img src="images/meter/licorice_root.png" class="img-circle m-sec5-circle-img"></div>
						<div class="col-md-9"><p><span class="m-sec5-text1">RHODIOLA ROSSEA</span><br><span class="m-sec5-text2"  style="font-size: 10px;">3% Rosavins,1% Salidrosides</span></p></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-3"><img src="images/meter/mucuna_pruriens.png" class="img-circle m-sec5-circle-img"></div>
						<div class="col-md-9"><p><span class="m-sec5-text1">RESVERATOL</span><br><span class="m-sec5-text2">98% Grape Skin</span></p></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-3"><img src="images/meter/holy_basil.png" class="img-circle m-sec5-circle-img"></div>
						<div class="col-md-9"><p><span class="m-sec5-text1">BANANA</span><br><span class="m-sec5-text2">(8:1)</span></p></div>
					</div>
					<div class="col-md-12 m-t-60">
						<div class="col-md-3"><img src="images/meter/peppermint.png" class="img-circle m-sec5-circle-img"></div>
						<div class="col-md-9"><p><span class="m-sec5-text1">COCONUT WATER</span><br><span class="m-sec5-text2">(10:1)</span></p></div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<div class="col-md-12 m-joint-678 null-pad">
		<!-- Section 6 -->
			<div class="col-md-12 main-padding m-sec6 m-t-100 m-b-100">
				<div class="col-md-4">
					<div class = "col-md-10 col-md-offset-2 sec6-m-t">
						<img src = "images/meter/arrow.png" class="img-responsive">
						<p class="m-sec6-text text-right m-sec6-d-top-text" style = "margin-right:10px;">Leucine Metabolite<br>Instant Recovery<br>~7 grams L-Leucine</p>
						<img src = "images/meter/arrow.png" class="img-responsive" style> 
					</div>
					<div class = "col-md-12 col-md-offset-3 m-sec6-d-bottom">
						<img src = "images/meter/arrow.png" class="img-responsive">
						<p class = "m-sec6-text text-right" style="margin-top: 14%;margin-bottom:14%;margin-right: 10px;">Algae Source (Veg)<br>Most Bioactive form of Omega 3</p>
						<img src = "images/meter/arrow.png" class="img-responsive"> 
					</div>
				</div>
				<div class="col-md-4 text-center">
					<img src = "images/meter/sec6.png" style="height:368px">
				</div>
				<div class="col-md-4">
					<div class = "col-md-10 col-md-offset-2" style="margin-left: 2%;">
						<img src = "images/meter/arrow.png" class="img-responsive">
						<p class="m-sec6-text m-sec6-d-top-text" style = "margin-left:10px;">Repairs Connective Tissues //<br>Joints // Tendons and<br>Ligaments</p>
						<img src = "images/meter/arrow.png" class="img-responsive"> 
					</div>
					<div class = "col-md-12 m-sec6-d-bottom col-md-offset-3" style="margin-left:-27%">
						<img src = "images/meter/arrow.png" class="img-responsive">
						<p class="m-sec6-text" style="margin-top: 11%;margin-bottom:11%;margin-left: 10px;">Combat Muscular Degeneration<br>Fights Joint Tenderness and Stiffness<br>Regeneration of Cartilages</p>
						<img src = "images/meter/arrow.png" class="img-responsive"> 
					</div>
				</div>
			</div>	
			
			<!-- Section 7 -->
			<div class="col-md-12 m-sec7 m-t-100 m-b-100 text-center">
				<img src = "images/meter/protera.png" alt="Proteara image" style="width:47%;">
			</div>
			
			<!-- Section 8 -->
			<div class="col-md-12 m-sec8 main-padding m-t-100 m-b-100">
				
				<div class="col-md-3 m-b-80 text-right">
					
				</div>
				<div class="col-md-6 m8-head m-b-80">
					<h2 class="t-color borderimg">MULTI VITAMIN AND <span style="color: #fff;">MINERAL COMPLEX</span></h2>
				</div>
				<div class="col-md-3 m-b-80 text-left" >
					
				</div>
				
				<div class="clearfix"></div>
				<div class="col-xl-3 col-md-3 col-xs-4 text-right m-sec8-vitamins">
					<h3 class="m-b-25">VITAMINS</h3>
					<p>Vitamin A<img src="images/vita-mine/a.png"></p>
					<p>Vitamin C<img src="images/vita-mine/c.png"></p>
					<p>Vitamin E<img src="images/vita-mine/e.png"></p>
					<p>Pyridoxal Phosphate<img src="images/vita-mine/b6.png"></p>
					<p>Folic Acid<img src="images/vita-mine/b9.png"></p>
					<p>Cobalamin<img src="images/vita-mine/b12.png"></p>
					<p>Vitamin D<img src="images/vita-mine/d.png"></p>
					
				</div>
				<div class="col-xl-3 col-md-6 col-xs-4">
					<div class="col-md-10 col-md-offset-1">
						<h4 class="b-sec6-mid-text-h">Regenerate and Energize</h4>
						<p class="b-sec6-mid-text-p1">Overall Metabolism boosters</p>
						<p class="b-sec6-mid-text-p2">Asist in Protein synthesis</p>
						<p class="b-sec6-mid-text-p3">Combat Lactic Acid Generation</p>
						<p class="b-sec6-mid-text-p4">Supplement mineral loss during</p>
						<p class="b-sec6-mid-text-p4" style="letter-spacing: 2.9px !important;">sweating and strenuous physical </p>
						<p class="b-sec6-mid-text-p4" style="text-align: left !important;">exercises</p>
							
					</div>
				</div>
				<div class="col-xl-3 col-md-3 col-xs-4 text-left m-sec8-mine">
					<h3 class="m-b-25">MINERALS</h3>
					<p><img src="images/vita-mine/c.png">Calcium</p>
					<p><img src="images/vita-mine/k.png">Potassium</p>
					<p><img src="images/vita-mine/mg.png">Magnesium</p>
					<p><img src="images/vita-mine/zn.png">Zinc</p>
					<p><img src="images/vita-mine/p.png">Phosphorus</p>
					<p><img src="images/vita-mine/na.png">Sodium</p>
					<p><img src="images/vita-mine/br.png">Bromine</p>
				</div>
			</div>
		</div>
		
		<!-- Section 7 -->
		
		<div class=" col-md-12 b-sec7 main-padding">
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
							<p>% Daily Value*</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Calories</p>
						</div>
						<div class="col-md-3">
							<p>134.75 kcal</p>
						</div>
						<div class="col-md-2">
							<p>6.7%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Calories from Fat</p>
						</div>
						<div class="col-md-3">
							<p>18 kcal</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Total Fat</p>
						</div>
						<div class="col-md-3">
							<p>2 g</p>
						</div>
						<div class="col-md-2">
							<p>10%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Saturated Fat</p>
						</div>
						<div class="col-md-3">
							<p>0.2 g</p>
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
							<p>120 mg</p>
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
							<p>4.5 g</p>
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
							<p>0.5 g</p>
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
							<p>2 g</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<h3>Proteins</h3>
						</div>
						<div class="col-md-3">
							<h3>21.5g</h3>
						</div>
						<div class="col-md-2">
							<h3>38.5%</h3>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin A (as Beta-Carotene) </p>
						</div>
						<div class="col-md-3">
							<p>25000 IU</p>
						</div>
						<div class="col-md-2">
							<p>75%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin C (as Ascobric Acid)</p>
						</div>
						<div class="col-md-3">
							<p>250 mg</p>
						</div>
						<div class="col-md-2">
							<p>625%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin E (as DL-Alpha Tacopherol)</p>
						</div>
						<div class="col-md-3">
							<p>20 IU</p>
						</div>
						<div class="col-md-2">
							<p>134%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin B6 (as Pyridoxine HCL)</p>
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
							<p>Vitamin B9 (as Folic Acid)</p>
						</div>
						<div class="col-md-3">
							<p>250 mcg</p>
						</div>
						<div class="col-md-2">
							<p>250%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div><div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin B12 (as Cyanocobalamin)</p>
						</div>
						<div class="col-md-3">
							<p>300 mcg</p>
						</div>
						<div class="col-md-2">
							<p>30000%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div><div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Vitamin D3 (as Cholecalciferol)</p>
						</div>
						<div class="col-md-3">
							<p>1500 UI</p>
						</div>
						<div class="col-md-2">
							<p>750%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Calcuim (as Tri Cal. Phosphate)</p>
						</div>
						<div class="col-md-3">
							<p>150 g</p>
						</div>
						<div class="col-md-2">
							<p>38%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Potassium (as Pot. Bicarbonate)</p>
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
							<p>Magnesium (as Di-Magnesium Malate)</p>
						</div>
						<div class="col-md-3">
							<p>100 g</p>
						</div>
						<div class="col-md-2">
							<p>33%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Zinc (as Zinc Gluconate)</p>
						</div>
						<div class="col-md-3">
							<p>20 mg</p>
						</div>
						<div class="col-md-2">
							<p>133%</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
						<div class="col-md-7">
							<p>Phosphorus (as Di-Pot. Phosphate)</p>
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
							<p>Boron (as Boron Citrate)</p>
						</div>
						<div class="col-md-3">
							<p>3 mg</p>
						</div>
						<div class="col-md-2">
							<p>-|-</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 row b-sec7-div-pad">
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
				</div>
				<div class="col-md-6">
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-7">
							<p class="pad-tb-20"><strong>METER<sup> TM</sup>  Core composition</strong></p>
						</div>
						<div class="col-md-3">
							<p></p>
						</div>
						<div class="col-md-2">
							<p class="pad-t-b-10">32 g</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-7">
							<p><strong>100% Whey Protein Matrix</strong></p>
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
							<p class="pad-tb-30">Cold Temperature processed<span style="font-family:sans-serif"> - </span>Micro Filtered<span style="font-family:sans-serif"> -  </span>Instantized [Whey Protein HYDROLYSATE + Whey Protein ISOLATE] + Whey Protein</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Anabolic Reformation and Recovery</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="pad-tb-30">BCAA [L-Leucin, L-Isoleucin, L-Valine]: Mucuna Malate: Zinc Gluconate: Boron Citrate</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Adrenal Fatigue // Muscle Soreness Curation</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="pad-tb-30">Ginger Root extract (std. to 8% gingerols, dried root): Cinnamomum Cassia (bark) extract (std. to 15% flavonoids): Valerian Root extract (std. to 1% Valerenic Acid): Licorice Root extract (std. to 15% Glycyrrhizin) </p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Oxidation stress Combat // Anti-Inflammation</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="pad-tb-30">L-Glutamine: Green Tea extract (std. to 60% ECGC): Chamomile (flower) extract (std. to 1% apigenin, steam distilled): Lemon Grass extract (20:1) </p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Energizers and Rejuvenators</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="pad-tb-30">Rhodiola Rosea extract (std. to 3% Rosavins, 1% Salidrosides); Resveratrol (98% Grape Skin extract); Banana Concentrate; Coconut Water Concentrate; Peppermint extract (10:1 full spectrum) ; Pyridoxine HCL; Di-Potassium Phosphate; Sodium Bicarbonate</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Power Re-Generators</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="pad-tb-30">Omega 3 [EPA + DHA + ALA] (Algae source); Beta-Hydroxy Beta-Methylbutyric acid (H-M-B); Methyl-Sulfonyl-Methane (M-S-M); Cyanocobalamin</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Absorption Booster</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class="pad-tb-30">Proteara - Proteolytic Enzymes (Protease  I, Protease II, Amylase, Lipase, Cellulase)</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p class=" pad-t-b-15"><strong>Other Ingredients</strong></p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12 p-r-null b-sec7-div-pad">
						<div class="col-md-12">
							<p>Cocoa powder (only for select flavor variants);  Malt extract, Caramel Concentrate; Carrageenan Gum; Artificial Flavors; Non-Dairy Creamer; Sucralose; Salt; SiO2</p>
						</div>
						<div class="clearfix b-sec7-bor-b"></div>
					</div>
					<div class="col-md-12">
						<h4 class="m-all-claimed"><strong>All claimed ingredient values on the label are for 1 full serving of the product</strong></h4>
					</div>
					
				</div>
			</div>
			
			<div class="col-md-6 m-t-30">
				<div class="col-md-12 b-sec7-border row">
					<div class="b-sec7-bor-b m-t-25"></div>
						<h3>DIRECTIONS FOR USE</h3>
					<div class=" b-sec7-bor-b"></div>
					
					<p class="b-sec7-div-pad pad-t-b-10"> METER should be consumed atleast 15 minutes post training.</p>
					<p style="margin-top:-14px">- Add 1 scoop of METER in 220-300 ml of water/milk. Shake well before use.</p>
					<p style="margin-top:-10px">- For professional athletes (training 2-3 times a day / more than 3 hours per day) - METER may be consumed twice a day. Regular dosage should be carefully monitored under such scenarios.</p>
					<p style="margin-top:-10px">- For best night time recovery - consume METER with milk and organic honey (taken separately) 30 minutes before sleep.</p>
					<div class="b-sec7-bor-b"></div>
					<h3>ALLERGY INFORMATION</h3>
					<div class="b-sec7-bor-b"></div>
					<p class="b-sec7-div-pad pad-t-b-10">This product is manufactured in a plant that also processes soy, egg, fish and tree nuts ingredients.</p>
					<div class="b-sec7-bor-b"></div>
					<h3>EXPIRY // STORAGE</h3>
					<div class="b-sec7-bor-b"></div>
					<p class="b-sec7-div-pad">- Best before 24 months of manufacturing.</p>
					<p style="margin-top:-14px">- Store in a cool dry place.</p>
					
				</div>
				
				<div class="col-md-12 b-sec7-border row" style="height:60px; margin-top:15px;">
					<p style="text-transform:uppercase; padding-top: 20px; text-align:center;">( To be consumed as dietary supplement only )</p>
				</div>
				
			</div>
			<div class="col-md-6  m-t-30" style="padding-right: 0px;">
				<div class="col-md-12 b-sec7-border" style="">
					<div class="clearfix b-sec7-bor-b m-t-25"></div>
						<h3>WARNINGS</h3>
					<div class="clearfix b-sec7-bor-b"></div>
					<p style="margin-top: 10px">- Do NOT exceed recommended dose (strictly). Overdose may cause nausea / headache / dizziness/ bloating. </p>
					<p style="margin-top:-5px">- Do NOT use in combination with other supplements / pharmaceuticals that are considered to be stimulants. </p>
					<p style="margin-top:-5px">- Do NOT use BULLET for more than 8 weeks of continuous usage.</p>
					<p style="margin-top:-5px">- Do NOT consume BULLET on non-training days.</p>
					<p style="margin-top:-5px">- Consult your physician before using this product if you are taking any medication or are under a physician's care. </p>
					<p style="margin-top:-5px">- Do NOT consume if exposed to high blood pressure. Discontinue use if you experience any adverse reaction to this product. </p>
					<p style="margin-top:-5px">- Only intended for use by healthy adults, 18 years and older.</p>
					<p>- Keep out of reach of children. Not for lactating or pregnant women.</p>
					
					<div class="col-md-12 b-sec7-border" style="font-size: 14px; padding-top: 18px; padding-bottom: 18px; color: #dc9f39; margin :10px 0px;">Ingredients used to formulate this product are NOT Sports Banned Substances. Professional athletes should refer to the WADA website for more information on prohibited substances in sports.</div>
					
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
		
		
		<!-- Footer -->
		<?php include('footer.php') ?>
			
		<script>
			$('#bar').click(function() {
			  $('#foo').slideToggle('slow');
			});
		</script>	
		
	</body>
</html>