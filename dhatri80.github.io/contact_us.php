<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact us - Temairazu, Inc</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  

  <!-- Main Stylesheet File -->
  <!--<link href="css/style_contact_us.css" rel="stylesheet"> -->
  <!-- Responsive stylesheet -->
  <link href="res/style_contact_us_res.css" rel="stylesheet">
  
  
  <?php
	 
	   if(isset($_GET['lang']) && $_GET['lang']=='japanese')
	   {	   
		 require_once('lang/japanese.php');
		 echo '<link href="css/style_contact_us_jap1582.css" rel="stylesheet">';
	   }
	   else
	   {
		  require_once('lang/english.php');
		  echo '<link href="css/style_contact_us_eng1558.css" rel="stylesheet">';
	   }
	   
   ?>
  
  
  


</head>







<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <!--    -->

    <div class="container">

      <div class="logo float-left">
        <!-- <h1 class="text-light"><a href="index.html" class="scrollto"><span id="header-title">Temairazu</span></a></h1>-->
        <a href="index.php" class="scrollto"><img src="img/tema_corp_logo_hw2.png" alt="" class="img-fluid"></a> 
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="index.php"><div><?php echo $home; ?></div></a></li> 
		  <li><a href=""><div><?php echo $about_us; ?></div></a></li>
		  <li>
		                  <div class="drop-down-menu">
						    <a href="" ><?php echo $services; ?>&nbsp;&nbsp;<span class="fa fa-caret-down"></span></a>
							<div class="drop-down-list" id="drop-down-list-services">
							<a href="" style="display:block;padding:8px;margin-top:20px"><span><?php echo $no_hassle;?></span></a>
							<a href="" style="display:block;padding:8px"><span><?php echo $hassle_free_net2; ?></span></a>
							<a href="" style="display:block;padding:8px"><span><?php echo $temairazu_yield; ?></span></a>
							</div>
						  </div>
			  </a></li>
          <li>
		                  <div class="drop-down-menu">
						    <a href="" ><?php echo $investors; ?>&nbsp;&nbsp;<span class="fa fa-caret-down"></span></a>
							<div class="drop-down-list" id="drop-down-list-investors">
							<a href="" style="display:block;padding:8px;margin-top:20px"><span><?php echo $finances; ?></span></a>
							<a href="" style="display:block;padding:8px"><span><?php echo $market_valuation; ?></span></a>
							<a href="" style="display:block;padding:8px"><span><?php echo $ir_policy; ?></span></a>
							</div>
						  </div>
			  </a></li>
          <li>
		                  <div class="drop-down-menu">
						    <a href="" ><?php echo $employment;?>&nbsp;&nbsp;<span class="fa fa-caret-down"></span></a>
							<div class="drop-down-list" id="drop-down-list-employment">
							<a href="" style="display:block;padding:8px;margin-top:20px"><span><?php echo $recruitment; ?></span></a>
							<a href="" style="display:block;padding:8px"><span><?php echo $life_at_temairazu; ?></span></a>
							<a href="" style="display:block;padding:8px"><span><?php echo $our_employees; ?></span></a>
							</div>
						  </div>
			  </a></li>
          <li><a href="contact_us.php"><?php echo $contact_us; ?></a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Main 
  ============================-->
   
  <main id="footer" class="section-bg clearfix">
    <div class="footer-top">
      <div class="container">
	  
        <div class="contact-us-heading">
	    <h2><?php echo $get_in_touch_with_us; ?></h2><br><br>
	    </div>
	  
        <div class="row contact-form">
		
		  
		
          <div class="col-lg-6">

            <div class="form">
              
              <h3><?php echo $leave_us_a_message; ?></h3>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $name; ?>" data-rule="minlen:5" data-msg="<?php echo $minimum_of_5_characters; ?>" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $email; ?>" data-rule="email" data-msg="<?php echo $enter_a_valid_email; ?>" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo $subject; ?>" data-rule="minlen:5" data-msg="<?php echo $minimum_of_5_characters; ?> " />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                 <textarea class="form-control" name="message" rows="5" placeholder="<?php echo $message; ?>" data-rule="required" data-msg="<?php echo $leave_us_a_message;?>"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage"><?php echo $message_has_been_sent; ?></div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message"><?php echo $send_message; ?></button></div>
              </form>
            </div>

          </div>		  
		

          <div class="col-lg-5">
            
			<div class="row">
			
			</div>
			 
            <div class="row footer-social-links justify-content-center align-self-center">

                <div class="col-sm-9">

                  <div class="footer-links">
                    <h3><?php echo $contact_us; ?></h3>
                    <p>
					  <i class="fa fa-map-marker">&nbsp;</i>
                      <?php echo $address[0]; ?> <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $address[1]; ?><br>
                      &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $address[2]; ?> <br>
					  &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $address[3]; ?> <br><br>
                      <i class="fa fa-phone">&nbsp;</i> +03-3473-4345<br>
                      <i class="fa fa-envelope">&nbsp;</i><?php echo $email_address; ?><br><br><br>
                    </p>
                  </div>

                  <div class="social-links">
				   <h3><?php echo $find_us_on; ?> </h3> 
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          

          

        </div>

      </div>
    </div>

    <div class="container">
	     <div class="useful-links">
		 
		 
		 <a href="index.html#temp-row"><?php echo $about_us; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a>|&nbsp;&nbsp;&nbsp;&nbsp;
		 <a href="#"><?php echo $terms_of_service; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a>|&nbsp;&nbsp;&nbsp;&nbsp;
		 <a href="#"><?php echo $privacy_policy; ?>&nbsp;&nbsp;&nbsp;&nbsp;</a>|&nbsp;&nbsp;&nbsp;&nbsp;
		 <a href="contact_us.php"><?php echo $contact_us; ?>&nbsp;</a>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy; Copyright <strong>Temairazu, Inc</strong>. All Rights Reserved
		 </div>
      
    </div>
		
  </main><!-- #main -->
  
  
  <div id="preloader"></div>
     
	 
	 <?php
  
	  if(isset($_GET['lang']) && $_GET['lang']=='japanese')
	  {
		 echo '<div class="tool-tip">  
		       <span class="tool-tip-text" id="translate-text">'.$translate.'</span>
		       <a href="contact_us.php" class="fixed-btn" id="translate-btn"><span style="font-family:courier;font-size:21px;font-weight:bold;">Aa</span></a>   
		       </div>';
	  }
	  else
	  {
		echo  '<div class="tool-tip">  
		       <span class="tool-tip-text" id="translate-text">'.$translate.'</span>
		       <a href="contact_us.php?lang=japanese" class="fixed-btn" id="translate-btn"><span style="font-size:26px;font-weight:bold;">あ</span></a>   
		       </div>';
      }
  ?>
	 
	
	 
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  
  <!-- Contact Form JavaScript File -->
  <script src="js/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
