<?php
$name = $_COOKIE['cookie'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>About</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cultivation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href='http://fonts.useso.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
	<link href="css/swiper.min.css"/>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/ajax.js" ></script>
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<!---End-smoth-scrolling---->
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!--Animation-->
	<script src="js/wow.min.js"></script>
	<link href="css/animate.css" rel='stylesheet' type='text/css' />
	<script>
		new WOW().init();
	</script>
	<!---/End-Animation---->
</head>
<body>
<div class="header head-top" id="home">
	<div class="container">
		<div class="header-top">
			<div class="top-menu">
				<span class="menu"><img src="img/nav.png" alt=""/> </span>
				<ul>
					<li><a href="index.php" >主页</a></li><label>/</label>
					<li><a href="about.php"  class="active">课程概述</a></li><label>/</label>
					<li><a href="content.php">课程内容</a></li><label>/</label>
					<li><a href="video.php">课程视频</a></li><label>/</label>
					<li><a href="discussion.php">讨论区</a></li>
					 <label>/</label>
                            <li class="upload hide"><a href="uploadmain.php" class="upload_a">上传文件</a></li>
					<li></li>
					<li></li>
					<li class="login_success" style="margin-left:340px;vertical-align:2px;"></li>
				</ul>

				  <?php
                       echo " <script src='js/jquery-1.11.1.min.js'></script>";
                       if($name){
                       echo "<script>
                      if($name == '20160216'){
						 $('.login_success').html('欢迎管理员！');
						  $('.upload').removeClass('hide');
						}
						else{
                        $('.login_success').html('欢迎&nbsp;&nbsp;'+$name+'&nbsp;&nbsp;同学');
						$('.upload_a').html('新增内容');
						$('.upload').removeClass('hide');	}	
                       </script>";
                         };
                        ?>
				<!-- script for menu -->

				<script>
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle("slow" , function(){
						});
					});
				</script>
				<!-- //script for menu -->
			</div>


			<div class="clearfix"></div>

		</div>
		<div class="logo logo1" style="width:100%;">
			<a href="index.php" >Operational Research & System Analysis</a>
		</div>

	</div>
</div>
<div class="content">
	<div class="aboutus-section">
		<div class="container">
			<h3>课程概述 About</h3>
			<div class="aboutus-grids">
				<div class="col-md-5 left-grid wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<div class="aboutus1 fix_height">
						<h4>目录</h4>
						<ul>
							<li class="course_overview">课程概况</li>
							<li class="courseIntro">课程简介</li>
							<li class="courseBackground">课程背景</li>
							<li class="teachingMethod">教学方法</li>
						</ul>
					</div>
					<div class="aboutus2 ">
						<h4>教学条件 Teaching conditions</h4>
						<div class="ab1 fix_height1">
							<p>理论教学在学校的多媒体教室进行，基于配备PowerPoint和相关课程软件的高性能电脑以及投影仪进行电子化教学。
								</p>
							<a href="http://www.scau.edu.cn/" target="_blank">More</a>
						</div>
						<div class="ab2 fix_height1">
							<p>实验教学在数学与信息学院机房进行，拥有可容纳80人进行实验的机房2个（共160实验机位，可同时进行实验），实验电脑配备所需的软件工具如Excel、Tora和Lingo/Lindo。</p>
							<a href="http://www.scau.edu.cn/" target="_blank">More</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-7 right-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<div id="box1" style="height: 28em;overflow: auto">
					</div>
					<div class="aboutus4">
						<h4>教师团队 The teachers</h4>
						<div class="col-md-4 team-grid">
							<img src="img/teacher1.png" class="img-responsive fix_img" alt="" />
							<h5>俞守华教授</h5>
							<p>(1964-)，男，福建福清人，博士，教授，研究方向为农业系统工程、信息系统与管理</p>
						</div>
						<div class="col-md-4 team-grid">
							<img src="img/teacher2.png" class="img-responsive fix_img" alt="" />
							<h5>余平祥副教授</h5>
							<p>(1972-)，男，湖南冷水江人，博士，副教授，研究方向为农业系统工程</p>
						</div>
						<div class="col-md-4 team-grid">
							<img src="img/teacher3.png" class="img-responsive fix_img" alt="" />
							<h5>杨振刚副教授</h5>
							<p>(1976-)，男，广西北海人，博士，副教授，研究方向为信息系统工程</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="footer-section" style="margin-top:20px;">
			<div class="container">
				<div class="footer-top">

				</div>

				<div class="footer-bottom wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<p class="footer-developer">developer&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Junwen Su</p>									</div>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
	</div></div>
</body>
</html> 