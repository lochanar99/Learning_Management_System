<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Admin General Notices</title>  
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
                        <li><a href="/indexx">About </a></li>
						<li><a href="/profile">profile</a></li>
                        <li><a href="/modulehome">Lectures</a></li>
                        <li><a href="/aEvents">Events & Extra Lectures</a></li>
                        <li><a class="active" href="/AdminDigLibandStudAff">Student Affairs & Digital Library</a></li>
                        <li><a href="/index1">Student Management</a></li>
                        <li><a href="/inventry">Invetory</a></li>
						<li><a href="/exam">Exams & Assignments </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<div class="all-page-title" style="background-image:url(images/pattern-4.png);">
        <div class="container text-center">
            <h1>General Notices</h1>
        </div>
		<!--Page -->
        <div class="page-info">
            <div class="container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                       
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page-->
    </div><!-- end section -->

    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>General Notices</h3>
            </div><!-- end title -->
            <div class="row">
        <div class="col-md-12">

       

            <form method="post" action="/saveResult">
            {{csrf_field()}}
            <input type="text" class="form-control" name="NoticeID" placeholder="Notice ID">
            <br>
            <input type="text" class="form-control" name="NoticeName" placeholder="Notice Name">
            <br>
            <input type="text" class="form-control" name="Desc" placeholder="Description">
            <br>
            <input type="text" class="form-control" name="LecID" placeholder="Lecturer ID">
            <br>
            <input type="text" class="form-control" name="LecName" placeholder="Lecturer Name">
            <br>
            <input type="submit" class="btn btn-primary" value="SAVE">
            <input type="button" class="btn btn-warning" value="CLEAR">
            </form>
            <br><br>

            <div class="container text-center">
			<form action="upload.php" method="post" enctype="multiple/form-data"><h4>Select Files To Upload:</h4></br></br><input type="file" name="FileToUpload" id="filetoupload">
				<input type="submit" value="Upload" name="Submit">
			</form>
	        </div>
            <br>
            <br>

            <table class="table table-light">
                        <th>Notice ID</th>
                        <th>Notice Name</th>
                        <th>File</th>
						<th>Description</th>
						<th>Lecturer ID</th>
                        <th>Lecturer Name</th>
            </table>
            <br>
			<br>
            <div class="row text-center">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="pricing-table-sign-up">
                            <a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1">ADD NEW</a>
                        </div>
					</div><!-- end service -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="pricing-table-sign-up">
                            <a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1">DELETE</a>
                        </div>
					</div><!-- end service -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="service-widget">
                        <div class="pricing-table-sign-up">
                            <a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1">UPDATE</a>
                        </div>
					</div><!-- end service -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div>
</div>
				
		
		</div>
	</div>
		
		<hr class="invis">


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
                            <li><a href="DigLibandStudAff.html">Student Affairs & Digital Library </a></li>
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