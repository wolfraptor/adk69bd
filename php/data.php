<?php

	include('config/config.php');
	//echo "came here";
	if(isset($_POST['name'])){
	
	$name = $_POST['name'];
	$email  = $_POST['email'];
	$phone  = $_POST['phone'];
	$comment  = $_POST['comment'];
	
	
	$sql="INSERT INTO `contact`(`name`, `email`, `phone`, `comment`)
		VALUES ('$name', '$email', '$phone', '$comment')";
	
	//echo $sql;
	
		
	$res=mysqli_query($conn,$sql);
	 
	if($res){ 
		
		if (isset($_REQUEST['email']))  {

			//Email information

			// $to = 'faizan.jjbytes@gmail.com';
			// $user_mail = $_POST['email'];

			// $subject = ''.$name.' wrote to Daaki';
			// $subject_user = 'Thanks for choosing Daaki';
			
			// $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
			// $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
			// $headers .= "MIME-Version: 1.0\r\n";
			// $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
			
			// $message .= '<p>Name   : '.$name.'</p>
				     // <p>Email  : '.$email.'</p>
				     // <p>Phone  : '.$phone.'</p>
				     // <p>Comment: '.$comment.'</p>';
			
			// $message_user .= '<html>
	// <head>
		// <style>
		// body {    margin: 0px;}
		// header{
			// background-color:#e4e4e4;
			// border-bottom: 2px solid #d6d6d6;
		// }
		// footer{
			// border-top: 3px solid #d6d6d6;
			// background-color:#e4e4e4;
		// }
		// p{text-align:justify;font-family: Century gothic, Arial, sans-serif;color:#737070}
		// .logo-height{
			// text-align: center;
			// padding: 20px;
            // margin: 0px;
			
		// }
		// .logo{
			// height: 60px;
		// }
		// .middle-section{
			// width:70%;
			// margin:0 auto;
			// background-color:#fff;
		// }
		// .inside-middle-section{
			    // padding: 20px 50px 20px 50px;
		// }
		// .cust-div{
			// width:80%;
			// margin:0 auto;
			// border:2px solid #d6d6d6;
			// padding:20px;
			// font-size: 12px;
		// }
		// .footer-middle-section{
			    // height: 115px;
			// width: 1000px;;
			// margin:0 auto;
		// }
		// .footer-div-left{
			// width:200px;
			// padding: 20px 50px 20px 50px;
			// display: inline-table;
		// }
		// .footer-div-right{
			// padding: 20px 50px 20px 50px;
			// width: 500px;
			// display: -webkit-inline-box;
		// }
		// </style>
	// </head>
	// <body>
		// <header>
			// <p class="logo-height"><img src="http://developeronrent.in/daaki-new/php/email-images/Daaki.png" class="logo" ></p>
		// </header>
		// <div class="middle-section">
			// <div class="inside-middle-section">
				// <p>Hi '.$name.'</p>
				// <p>Thanks for making contact. This is to confirm that we received your queryand the same is being reviewed by Team DAAKI.</p>
				// <p>We will surely and get back to you soon with an answer.</p>
				
				// <!--Cutomers Message -->
				// <br/>
				// <div class="cust-div">
					// <p>You wrote</p>
					// <p>('.$comment.')</p>
					// <!-- <p>Thanks for making contact. This is to confirm that we received your queryand the same is being reviewed by Team DAAKI.</p> -->
				// </div>
				// <br/>
				// <!--Cutomers Message ends -->
				
				// <p>Alternativey, if you wish to add your query - you may reply to this email or may write directly to us at support@daaki.com</p>
				// <p>For queries related to sales(online/offline), please write to sales@daaki.com</p>
				// <br/>
				// <p>Best Regards<br/>Consumer Relations | DAAKI<br/>www.daaki.com</p>
			// </div>
		// </div>
		// <footer>
			// <!-- <div class="footer-middle-section">
				// <div class="footer-div-left">
					
						// <p>Socialize with DAAKI</p>
						// <img src="#" alt="">
						// <img src="#" alt="">
						// <img src="#" alt="">
					
				// </div>
				
				// <div class="footer-div-right">
					// <p>Brand Stores</p>
					// <img src="#" alt="">
				// </div>
			// </div> -->
			// <table data-module="footer" width="100%" bgcolor="#F8F8F8" align="center" border="0" cellspacing="0" cellpadding="0">
		// <tr>
			// <td height="40">
			// </td>
		// </tr>
		
		// <tr>
			// <td data-bgcolor="Footer BG" align="center" bgcolor="#F8F8F8">
				// <table align="center" border="0" cellpadding="0" cellspacing="0">
					// <tr>
						// <td width="1000" align="center">
							// <table width="1000" align="center" border="0" cellpadding="0" cellspacing="0">
								
								// <tr>
									// <td align="center" style="text-align:center;vertical-align:top;font-size:0;">
										
										// <div style="display:inline-block;vertical-align:top;">
											// <table align="center" border="0" cellpadding="0" cellspacing="0">
												// <tr>
													// <td width="440" align="center">
														// <table align="center" width="90%" border="0" cellspacing="0" cellpadding="0">
															// <!--title-->

															// <tr>
																// <td data-link-style="text-decoration:none; color:#3b3b3b;" data-link-color="Title" data-size="Title" data-color="Title" align="left" style="font-family: Century gothic, Arial, sans-serif; color:#4A4A4A; font-size:18px;font-weight: bold;">
																	// <singleline>
																		// Socialize with DAAKI
																	// </singleline>
																// </td>
															// </tr>
															// <!--end title-->

															// <tr>
																// <td height="15">
																// </td>
															// </tr>
															// <!--content-->

															
															// <!--end content-->

															// <tr>
																// <td height="10">
																// </td>
															// </tr>
															// <!--social-->

															// <tr>
																// <td align="left">
																	// <table border="0" align="left" cellpadding="0" cellspacing="0">
																		// <tr>
																			// <td align="center" style="line-height: 0px;">
																				// <a href="https://www.facebook.com/DAAKIsport"><img src="http://developeronrent.in/daaki-new/php/email-images/facebook.png" alt="img" width="35" data-crop="false" /></a>
																			// </td>
																			
																			// <td width="10">
																			// </td>
																			// <td align="center" style="line-height: 0px;">
																				// <a href="https://www.instagram.com/daakisport/"><img src="http://developeronrent.in/daaki-new/php/email-images/instagram.png" alt="img" width="35" data-crop="false" /></a>
																			// </td>
																			// <td width="10">
																			// </td>
																			// <td align="center" style="line-height: 0px;">
																				// <a href="https://www.youtube.com/user/DAAKIsport"><img src="http://developeronrent.in/daaki-new/php/email-images/youtube.png" alt="img" width="35" data-crop="false" /></a>
																			// </td>
																		// </tr>
																	// </table>
																// </td>
															// </tr>
															// <!--end social-->

															// <tr>
																// <td height="10">
																// </td>
															// </tr>
															// <!--preference-->

															// <!-- <tr>
																// <td data-link-style="text-decoration:none; color:#41B5B0;" data-link-color="Content" data-size="Content" data-color="Content" align="left" style="font-family: Open sans, Arial, sans-serif; color:#9B9B9B; font-size:14px;line-height: 28px;">
																	// <unsubscribe>
																		// Unsubscribe
																	// </unsubscribe>
																// </td>
															// </tr> -->
															// <!--end preference-->

															// <tr>
																// <td height="20">
																// </td>
															// </tr>
														// </table>
													// </td>
												// </tr>
											// </table>
										// </div>
										
										// <!--left-->
								
										// <div style="display:inline-block;vertical-align:top;">
											// <table align="center" border="0" cellpadding="0" cellspacing="0">
												// <tr>
													// <td width="500" align="center">
														// <table align="center" width="90%" border="0" cellspacing="0" cellpadding="0">
															// <!--title-->

															// <tr>
																// <td data-link-style="text-decoration:none; color:#3b3b3b;" data-link-color="Title" data-size="Title" data-color="Title" align="left" style="font-family: Century gothic, Arial, sans-serif; color:#4A4A4A; font-size:18px;font-weight: bold;">
																	// Brand Stores
																// </td>
															// </tr>
															// <!--end title-->

															// <tr>
																// <td height="15">
																// </td>
															// </tr>
															// <!--content-->

															
															// <!--end content-->

															// <tr>
																// <td height="10">
																// </td>
															// </tr>
															// <!--social-->

															// <tr>
																// <td align="left">
																	// <table border="0" align="left" cellpadding="0" cellspacing="0">
																		// <tr>
																			// <td align="center" style="line-height: 0px;">
																				// <img src="http://developeronrent.in/daaki-new/php/email-images/flipkart.png" alt="img"  style="width: 145px; border-right:1px solid #bfb9b9;padding:0 10px" data-crop="false" />
																			// </td>
																			// <td width="10">
																			// </td>
																			// <td align="center" style="line-height: 0px;">
																				// <a href="https://www.healthkart.com/brand/daaki?navKey=BR-1868&ac_sel=DAAKI"><img src="http://developeronrent.in/daaki-new/php/email-images/healthkart.png" alt="img" style="width: 130px; border-right:1px solid #bfb9b9;padding:0 10px " data-crop="false" /></a>
																			// </td>
																			// <td width="10">
																			// </td>
																			// <td align="center" style="line-height: 0px;">
																				// <a href="https://paytm.com/shop/search?category=21572&q=daaki&from=autosuggest"><img src="http://developeronrent.in/daaki-new/php/email-images/paytm.png" alt="img" style="width: 100px; padding:0 10px" data-crop="false" /></a>
																			// </td>
																			
																			
																		// </tr>
																	// </table>
																// </td>
															// </tr>
															// <!--end social-->

															// <tr>
																// <td height="10">
																// </td>
															// </tr>
															// <!--preference-->

															// <!-- <tr>
																// <td data-link-style="text-decoration:none; color:#41B5B0;" data-link-color="Content" data-size="Content" data-color="Content" align="left" style="font-family: Open sans, Arial, sans-serif; color:#9B9B9B; font-size:14px;line-height: 28px;">
																	// <unsubscribe>
																		// Unsubscribe
																	// </unsubscribe>
																// </td>
															// </tr> -->
															// <!--end preference-->

															// <tr>
																// <td height="20">
																// </td>
															// </tr>
														// </table>
													// </td>
												// </tr>
											// </table>
										// </div>
										// <!--end left-->
 // <!--[if (gte mso 9)|(IE)]>
									// </td>
									// <td align="center" style="text-align:center;vertical-align:top;font-size:0;">
										// <![endif]-->
										// <!--right-->

										
										// <!--end right-->

									// </td>
								// </tr>
							// </table>
						// </td>
					// </tr>
				// </table>
			// </td>
		// </tr>
	// </table>
		// </footer>
	// </body>
// </html>';
			
			// mail($to, $subject, $message, $headers);
			
			// mail($user_mail, $subject_user, $message_user, $headers);

			}
		
		echo "1" ;
			// echo '<script>alert("Data submitted succesfully")</script>';
			// echo '<script>window.location.assign("../index.html")</script>';
			}
		else{ 
			echo "0";
			// echo '<script>alert("Something went wrong. Please do fill the form again")</script>';
			
			}	
	}
?>