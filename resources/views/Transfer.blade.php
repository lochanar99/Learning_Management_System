<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Transfer Form</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="seo_version">

	<!-- LOADER -->
	<div id="preloader">
		<div id="cupcake" class="box">
			<span class="letter">L</span>
			<div class="cupcakeCircle box">
				<div class="cupcakeInner box">
					<div class="cupcakeCore box"></div>
				</div>
			</div>
			<span class="letter box">A</span>
			<span class="letter box">D</span>
			<span class="letter box">I</span>
			<span class="letter box">N</span>
			<span class="letter box">G</span>
		</div>
	</div>
	<!-- END LOADER -->
	
<header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logos/logoX.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right hidden-md hidden-sm hidden-xs">
                        <li><a class="btn-light btn-radius btn-brd top-btn" href="#"><i class="fa fa-angle-double-right"></i>User ID and Name</a></li>
                    </ul>
                     <ul class="nav navbar-nav navbar-right menu-top">
                        <li><a href="/index">About</a></li>
                        <li><a href="/sProfile">Profile </a></li>
                        <li><a href="/Student_Module_Home">Lectures</a></li>
                        <li><a  href="{{ url('Events')}} ">Events & Extra Lectures</a></li>
                        <li><a class="active" href="/DigLibandStudAff">Student Affairs & Digital Library</a></li>
                        <li><a href="/sexam">Exams & Assignments </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   

<br>
<br>
<br>
<br>
<br>
   <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Transfer Form</h3>
            </div><!-- end title -->
            
			        <div class="row">
						<div class="col-md-6">
							<div class="contact_form">
								<div id="message"></div>
									<form id="contactform" class="row" action="contact.php" name="contactform" method="post">
										<fieldset class="row-fluid">
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required>
												</div>
												
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required>
												</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
												
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone Number" required>
												</div>
								
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<input type="text" name="IdNum" id="IdNum" class="form-control" placeholder="ID Number" required>
												</div>
								
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<input type="text" name="semi" id="semi" class="form-control" placeholder="Your Semester" required>
												</div>
												
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<label class="sr-only">Select Transfer Places</label>
													<select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
															<option value="pla1">Wellawate</option>
															<option value="pla2">Nugegoda</option>
															<option value="pla3">Malabe</option>
															<option value="pla4">Battaramulla</option>
													</select>
												</div>
												
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<textarea class="form-control" name="trans" id="trans" rows="6" placeholder="Reasons for Your Transfer"></textarea>
												</div>
												
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
													<button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Request</button>
												</div>
										</fieldset>
								</form>
                    </div>
                </div><!-- end col -->
							<div class="col-md-6">
								<div class="map-box">
									<br>
									<br>
									<br>
									<br>
									<img src ="uploads/Transf.jpg"></div>
							</div>
				</div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	

		<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                           <br> <img src="images/logos/logo-light.png" alt="">
                            </div>
							<p> All inquiries and doubts must be addressed to the priciple at the 3rd floor</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <br><h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>Colombo 7, Ward Place Road</li>
                            <li>+94 112 729729</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <br><h3>Information</h3>
                        </div>

                        <ul class="footer-links">
                          <li><a href="#">About</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Events & Extra Lectures</a></li>
                            <li><a href='DigLibandStudAff'>Student Affairs & Digital Library </a></li>
                            <li><a href="#">Exams & Assignments</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                 <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <br>
							<h3>Social</h3>
                        </div>
                        <ul class="footer-links social-md">
                            <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a class="gi" href="#"><i class="fa fa-github"></i> Github</a></li>
                            <li><a class="tw" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a class="dr" href="#"><i class="fa fa-dribbble"></i> Dribbble</a></li>
                            <li><a class="pi" href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
        </div><!-- end container -->
    </footer><!-- end footer -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>