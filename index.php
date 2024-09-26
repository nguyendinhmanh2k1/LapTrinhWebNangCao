<?php


session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...

}



?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>Math ManhND</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----------email notification-------->







<!-- <link rel="stylesheet" href="assets/tether/tether.min.css">
 
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> -->
 





	<style type="text/css">
	
	.servicebody
	{
		

	}


	html
	{
		scroll-behavior: smooth;
	}
	</style>

</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">Math ManhND</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Trang Chủ</a></li>
					<li> <a href="#myservice_section">kHÓA HỌC</a></li>
					<li> <a href="#work">HOẠT ĐỘNG</a></li>
					<!-- <li> <a href="#our-members">Team</a></li> -->
					<li> <a href="#myfaq">HỖ TRỢ</a></li>
					<!-- <li> <a href="">Carrier</a></li> -->
					<li> <a href="logout.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">

							<i class="fa fa-apple"></i>
							<i class="fa fa-android"></i>
							<i class="fa fa-windows"></i>
						</div>
						<br>
						<div class="text"></div> <!-- jquery typed effect -->
							<div class="cta-div">
								<a href="#myfaq" class="btn1">LIÊN HỆ VỚI CHÚNG TÔI</a>
								<a href="#myservice_section" class="btn2">HỌC NGAY HÔM NAY</a>
							</div>
							<br><br>
							<div class="social-networks">
								<a href="" class="fa fa-facebook"></a>
								<a href="" class="fa fa-twitter"></a>
								<a href="" class="fa fa-instagram"></a>
								<a href="" class="fa fa-reddit"></a>
								<a href="" class="fa fa-linkedin"></a>
								<a href="" class="fa fa-cog"></a>
							</div>
					</div>
				</div>
			</section>

			<!---Slider Section ends------->

			<!---Login Start------->

			<div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username :</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Password :</label>
								<input type="password" name="password" class="form-control">
								<button id="btn-login" type="submit">Login</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>
						
					</div>
					
						
				</div>
			</div>
		</div>

         <!---Login Ends------->

         <!---Our Services Section Start------->

         <br><br>
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b>KHÓA HỌC</b></h2>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="programmingdemo.php">CHƯƠNG TRÌNH HỌC</a></h3>
         				<p>
						 Ở đây bạn sẽ tìm thấy tất cả các hướng dẫn bài giảng liên quan đến toán trung học như toán 6,7,8,...
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="video_tutorials\toan\display_video_courses.php">VIDEO BÀI GIẢNG</a></h3>
         				<p>
						 Ở đây bạn sẽ tìm thấy tất cả các video hướng dẫn liên quan đến toán trung học như toán 6,7,8,...
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">BÀI TRẮC NGHIỆM</a></h3>   <!--  exercise/exercise.php -->
         				<p>
						 Ở đây bạn sẽ tìm thấy các bài toán vấn đề để thực hành và việc thực hiện chúng cũng sẽ cải thiện kiến thức, kỹ năng toán của bạn
         				</p>
         			</div>
         		</div>
<!-- 
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="">WEB DESIGN</a></h3>
         				<p>
         					this is our serices theses are the services provided by us <br>this are the services provided by us
         				</p>
         			</div>
         		</div>
 -->
         		<!-- <div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="">COMPUTER SCIENCE</a></h3>
         				<p>
         					this is our serices theses are the services provided by us <br>this are the services provided by us
         				</p>
         			</div>
         		</div>
 -->
         		<!-- <div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-user"></i>
         				</div>
         				<h3><a href="">TECH NEWS</a></h3>
         				<p>
         					this is our serices theses are the services provided by us <br>this are the services provided by us
         				</p>
         			</div>
         		</div> -->
         	</div>
         </div>
     </div>

			<!---Our Services Section Ends------->

			<!---Emailnotification Section Start------->



			<!---Emailnotification Section Start------->


			<!---Our Services Section Ends------->

			<section class="work" id="work"><br>
				<h2 id="work-heading" class="text-center" style="font-weight: bold;">NỔI BẬT</h2>
				<p class="text-center">Các lớp có kiến thức nền quan trọng</p>
				<div class="container-fluid">
					<!---first row start-->
					<div class="row no-gutters">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/toan8.jpg" title="this is a sky image">
								<img src="img/toan8.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/toan9.jpg" title="this is a sky image">
								<img src="img/toan9.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/toan10.jpg" title="this is a sky image">
								<img src="img/toan10.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/toan12.png" title="this is a sky image">
								<img src="img/toan12.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>


					
					<!---first row ends-->


					<!-------second row starts  --->
					
					<!-- <div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/toan10.jpg" title="this is a sky image">
								<img src="img/toan10.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/toan11.jpg" title="this is a sky image">
								<img src="img/toan11.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/toan12.png" title="this is a sky image">
								<img src="img/toan12.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/toan10.jpg" title="this is a sky image">
								<img src="img/toan10.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div> -->

					
					
					<!---second row ends-->
					
				</div>
				


			</section>

			<!---Our Services Section Ends------->

			<!-- introduction video section starts -->

		<!-- 	<br><br><br><br>

		<section class="header7 cid-rjrjygOfd1" id="header7-3">

    
		    <div class="container">
		        <div class="media-container-row">

		            <div class="media-content align-right">
		                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-1">
		                    Intro with Video
		                </h1>
		                <div class="mbr-section-text mbr-white pb-3">
		                    <p class="mbr-text mbr-fonts-style display-5">
		                        Intro with background color, paddings and a video on the right. Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface.
		                    </p>
		                </div>
		                <div class="mbr-section-btn">
		                        <a class="btn btn-md btn-primary display-4" href="https://mobirise.co">LEARN MORE</a>
		                        <a class="btn btn-md btn-white-outline display-4" href="https://mobirise.co">LIVE DEMO</a>
		                </div>
		            </div>

		            <div class="mbr-figure" style="width: 100%;"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/uNCr7NdOJgw?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>

		        </div>
    	</div>
		</section> -->


  

			<!-- introduction video section ends -->







			<!---Our Team Section Ends------->
<!-- =============================================================================================================================== -->




<!-- =============================================================================================================================== -->
			<!---FAQs Section Start------->

			<br><br><br>
			<section class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>CÂU HỎI THƯỜNG GẶP</b></h2>
							<div class="sub-heading">
								<p>
								Bạn có thể hỏi về các vấn đề. <br>Giải quyết điều đó cùng nhau cho chắc chắn
								</p>
								
							</div>
						</div>	

					</div>
				</div> <br><br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">


								<?php 

								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }

									mysqli_select_db($con,'uniquedeveloper');

									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>

								<div class="panel panel-default">
									<div class="panel-heading" id="headingOne">
										<h4 class="panel-title">
											<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
										</h4>
									</div>
									<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
										<div class="panel-body">
											<p>
												<?php echo $row['faq_description']; ?>
											</p>
										</div>
									</div>
								</div>

							<?php } ?>



								<div class="panel panel-default">
									<div class="panel-heading" id="headingTwo">
										<h4 class="panel-title">
											<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">Nó hoạt động như thế nào?</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>
											Math ManhND là một trang web E-learning trực tuyến <br>
											ở đây bạn có thể học toán trung học và cải thiện kiến thức, kỹ năng toán của bạn	
											</p>
										</div>
									</div>
								</div>




								
							</div>
						</div>

						<div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset">
								<img src="img/faq1.png">
							</div>
						</div>

					</div>
				</div>
				

			</section>


			<!---FAQs Section Ends------->


			<!---Contact us Section Start------->


<!------ Include the above in your HEAD tag ---------->

<div class="row text-center">
	<h2><b>LIÊN HỆ VỚI CHÚNG TÔI</b></h2><br><br>
	<center>
	<div class="card" style="width: 30rem;">
  <div class="card-body border-info">
   
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">message</label>
    <input type="password" class="form-control"  placeholder="enter your message">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div></center>
</div>

    



			<!---Contact us Section Ends------->




 			<!---footer Section Start	----->



 			<!---footer Section Ends	----->



  			<!---This is script section------->

<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>






<!--   <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> -->

</body>
</html>