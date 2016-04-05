<?php
$name = $_COOKIE['cookie'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Videos</title>
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
	<link rel="stylesheet" href="//releases.flowplayer.org/6.0.4/skin/minimalist.css" >
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/video.min.js" type="text/javascript"></script>
	<script src="js/ajax.js"></script>
	<link href="css/myPage.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/video-js.min.css"/>
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
		videojs.options.flash.swf = "videos/video-js.swf";
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
<div class="header head-top " id="home">
	<div class="container">
		<div class="header-top">
			<div class="top-menu">
				<span class="menu"><img src="img/nav.png" alt=""/> </span>

				<ul>
					<li><a href="index.php" >主页</a></li><label>/</label>
					<li><a href="about.php">课程概述</a></li><label>/</label>
					<li><a href="content.php">课程内容</a></li><label>/</label>
					<li><a href="video.php" class="active">课程视频</a></li><label>/</label>
					<li><a href="discussion.php">讨论区</a></li>
					 <label>/</label>
                            <li class="upload hide"><a href="upload.php" class="upload_a">上传文件</a></li>
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
		<div class="logo logo1">
			<a href="index.php">Teaching video</a>
		</div>

	</div>
</div>
<ol class="breadcrumb text-center" >
	<li class="pointer a1 guide active">绪论</li>
	<li class="pointer a2">第一章</li>
	<li class="pointer a3">第二章</li>
	<li class="pointer a4">第三章</li>
	<li class="pointer a5">第四章</li>
	<li class="pointer a6">第五章</li>
	<li class="pointer a7">第六章</li>
	<li class="pointer a8">第七章</li>
	<li class="pointer a9">第八章</li>
	<li class="pointer a10">第九章</li>
	<li class="pointer a11">第十章</li>
	<li class="pointer a12">第十一章</li>
	<li class="pointer a13">第十二章</li>

</ol>
<script>
$(function () {
	function pointer(n){
		for(var num=1;num<=13;num++){
			if(n==num){
				$(".a"+num).addClass("active");
			}else{
				$(".a"+num).removeClass("active");
			}
		}
	}
	$('.video_change').attr('src','videos/chapter10.mp4');
	$('#video').load("file/video0.html");
	$('.intro').html('这一章的主要内容是：运筹学与系统分析绪论</br>主要内容为：运筹学与系统分析的构成、运筹学的主要内容、系统工程的主要内容、运筹学的绪论和内容简介等等。');
	$(".a1").bind("click",function(){
		pointer(1);
		$('.intro').html('这一章的主要内容是：运筹学与系统分析绪论</br>主要内容为：运筹学与系统分析的构成、运筹学的主要内容、系统工程的主要内容、运筹学的绪论和内容简介等等。');
		$('#video').load("file/video0.html");
	})
	$(".a2").bind("click",function(){
		pointer(2);
		$(".video_change").attr("src","#");
		$('.intro').html('这一章的介绍是：第一章线性规划与单纯形法</br>主要内容有：线性规划问题的数学模型、线性规划问题的基本理论、线性规划问题的求解。');
		$('#video').load("file/video1.html");
	})
	$(".a3").bind("click",function(){
		pointer(3);
		$('.intro').html('这一章的介绍是：第二章线性规划的对偶理论与灵敏度分析</br>本章的要点为：线性规划对偶问题的提出、线性规划问题的对偶理论、对偶解的经济解释、对偶单纯形法、灵敏度分析。');
		$('#video').load("file/video0.html");
	})
	$(".a4").bind("click",function(){
		pointer(4);
		$('.intro').html('这一章的介绍是：第三章整数规划</br>主要内容有：整数规划的数学模型及解的特点、分枚定界法、0-1型整数规划、指派问题。');
		$('#video').load("file/video0.html");
	})
	$(".a5").bind("click",function(){
		pointer(5);
		$('.intro').html('这一章的介绍是：第四章动态规划</br>主要内容有：什么是动态规划、动态规划的模型分类、多阶段决策过程的最优化、基本概念和原理、动态规划模型的建立与求解。');
		$('#video').load("file/video0.html");
	})
	$(".a6").bind("click",function(){
		pointer(6);
		$('.intro').html('这一章的介绍是：第五章图与网络分析</br>主要内容有：5.1图与网络的基本知识、5.2树、5.3最短路问题、5.4最大流问题。');
		$('#video').load("file/video0.html");
	})
	$(".a7").bind("click",function(){
		pointer(7);
		$('.intro').html('这一章的介绍是：第六章网络计划</br>主要内容是介绍网络计划方法和网络计划技术、网络图的组成和介绍、网络图的参数和计算等等。');
		$('#video').load("file/video0.html");
	})
	$(".a8").bind("click",function(){
		pointer(8);
		$('.intro').html('这一章的介绍是：第七章系统工程概述</br>主要内容有系统工程的产生、发展及应用。');
		$('#video').load("file/video0.html");
	})
	$(".a9").bind("click",function(){
		pointer(9);
		$('.intro').html('这一章的介绍是：第八章系统工程方法论</br>主要内容是什么是系统工程方法论、典型的系统工程方法论、霍尔三维结构模型特点、切克兰德方法论等等。');
		$('#video').load("file/video0.html");
	})
	$(".a10").bind("click",function(){
		pointer(10);
		$('.intro').html('这一章的介绍是：第九章系统评价方法</br>主要内容有系统评价问题的六要素、系统评价的一般过程、综合评价方法等等。');
		$('#video').load("file/video0.html");
	})
	$(".a11").bind("click",function(){
		pointer(11);
		$('.intro').html('这一章的介绍是：第十章系统模型与模型化</br>主讲老师是俞守华教授，同学们在观看视频之后可以到教学内容的页面去做习题或者下载习题做进一步的巩固。');
		$('#video').load("file/video10.html");
	})
	$(".a12").bind("click",function(){
		pointer(12);
		$('.intro').html('这一章的介绍是：第十一章决策分析方法</br>主要内容有管理决策概述、基本概念和四个阶段、决策问题的基本模式和常见类型、几类基本决策问题的分析、系统决策中的三个重要问题。');
		$('#video').load("file/video0.html");
	})
	$(".a13").bind("click",function(){
		pointer(13);
		$('.intro').html('这一章的介绍是：第十二章系统仿真及系统动力学方法</br>主要内容有系统仿真概述、实质和作用、系统仿真的方法、蒙特卡洛仿真、SD模型的特点和基本原理、DYNAMO语言和其仿真工具。');
		$('#video').load("file/video0.html");
	})
})

</script>
<div class="content categories-section">
	<div class="project-section wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		<div class="container">
			<h3 style="color:black;">视频&nbsp;Videos</h3>
			<h2 style="margin-bottom:30px;line-height:1.8em;" class="intro"></h2>
					<div id="video"></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>


<!--<div class="categories-section">-->
	<!--<div class="container">-->
		<!--<div class="footer-grids">-->

			<!--<div class="clearfix"></div>-->
		<!--</div>-->
	<!--</div>-->
<!--</div>-->
<div class="footer-section">
	<div class="container">
		<div class="footer-bottom wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
        <p class="float_r">developer&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Junwen Su</p>
		</div>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
</div>

</body>
</html> 