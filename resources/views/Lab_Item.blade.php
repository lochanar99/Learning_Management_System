<!DOCTYPE html>
<html>
<head>
	<title>Lab Items</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--icons of navigation-->
	
    <!--all css files-->
     <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
   

    <!--javascript-->
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!--end of javascript-->



    <style>
body {
  font-family: Arial;
}

input[type=text],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea, select, {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

div.Lab_form {
  border-radius: 5px;
  background-color: #66ffff;
  padding: 20px;
  width: 80%;
  margin-left: 126px
}

label{
    color: black;
}



</style>


</head>
<body>

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


		<!--header starts here-->
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
                    <a class="navbar-brand" href="about.html"><img src="images/logo.jpg" alt="image" height="100px" width="100px"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
					
                    <ul class="nav navbar-nav navbar-right menu-top">
                    <li><a href="/indexx">About </a></li>
						<li><a href="/profile">profile</a></li>
                        <li><a href="/modulehome">Lectures</a></li>
                        <li><a href="/aEvents">Events & Extra Lectures</a></li>
                        <li><a href="/AdminDigLibandStudAff">Student Affairs & Digital Library</a></li>
                        <li><a  href="/index1">Student Management</a></li>
                        <li><a class="active" href="/inventry">Invetory</a></li>
						<li><a href="/exam">Exams & Assignments </a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header ends here-->
    <br> <br> <br> <br> <br> <br> <br> <br> <br>

     <div class="all-page-title" style="background-image:url(images/lab2.jpg);">
        <div class="container text-center">
            <h2>College of Ophthalmologists</h2>
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


    <!--start of navigation bar-->
    <nav class="megamenu navbar navbar-default">

    	<div class="container">

    		<div class="navbar-header">

    <div id="navbar" class="navbar-collapse collapse">

    	<div class="navigation-items">

    	<ul class="nav navbar-nav navbar-right menu-top">
    	


	<li><a href="/lechall">Lecture hall</a></li>

	<li><a class="active" href="/labItem">Lab Item</a></li>

	<li><a href="/stationeryItem">Stationery Item</a></li>

	<li><a href="#">Report</a></li>

	</ul>

	</div>

	</div>
	
	</div>

	</div>

	</nav>
	<!--end of navigation bar-->

    <h2 align="center">Lab Items</h2>
    <div class="Lab_form">
    <div class="container text-center">
	<!--starting form-->
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
        @endforeach

	<form method="post", action="/SAVEDETAILS">
    {{csrf_field()}}
		<!--get lab item values from user and send to database by clicking add value button-->
		<!--inputs-->
		<label>Item code</label>
		<input type="text" name="lab" value="" placeholder="Enter item code" >
		<br>
		<label>Item Name</label>
		<input type="text" name="labname" value="" placeholder="Enter item name">
		<br>
		<label>Current Item</label>
		<input type="text" name="labcur" value="" placeholder="Enter number of current items">
		<br>
		<label>Required Item</label>
		<input type="text" name="labreq" value="" placeholder="Enter number of required items">
		<br>
		<label>Quantity</label>
		<input type="text" name="labqty" value="" placeholder="Enter Quantity">
		<br>
		<label>Status</label>

		<div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="labdrop">
        <option selected>Choose a Status</option>
        <option value="Excelent">Excelent</option>
        <option value="Good">Good</option>
        <option value="Satisfactory">Satisfactory</option>
        <option value="Unsatisfactory">Unsatisfactory</option>
      </select>
    </div>
</div>
    	<!--end of taking inputs-->
    	<br>
		<br>
		<!--button to add value to database-->
		<button type="submit" class="btn btn-success btn-lg">Add value</button>

		<a href="/labItemview"><button  type="button" class="btn btn-danger btn-primary btn-lg" >Update/Delete</button></a>

	</form>
</div>
</div>
	<!--end of form-->
  

    <section class="section nopad cac text-center">
        <a href="#"><h3></h3></a>
    </section>

   


            

    <svg id="clouds1" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logo.jpg" alt="">
                           
                        </div>
                        <p> All inquiries and doubts must be addressed to the priciple at the 3rd floor</p>
  
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
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
                            <h3>Information</h3>
                        </div>

                        <ul class="footer-links">
                           <li><a href="#">About</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Events & Extra Lectures</a></li>
                            <li><a href="#">Student Affairs & Digital Library</a></li>
                            <li><a href="#">Exams & Assignments</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
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
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->
    
   

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>


</body>
</html>