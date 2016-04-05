<?php
$name = $_COOKIE['cookie'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Content</title>
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
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/ajax.js"></script>
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
	<li><a href="about.php">课程概述</a></li><label>/</label>
	<li><a href="content.php" class="active">课程内容</a></li><label>/</label>
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
		<a href="index.php">Operational Research & System Analysis</a>
		</div>
		
</div>
</div>

  <nav class="navbar navbar-default">
	  <div class="container-fluid" style="background: wheat;">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">运筹学与系统分析</a>
		  </div>

		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				  <li style="margin-left: 120px;cursor: pointer;"><a class="click1">教学大纲</a></li>
				  <li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">课程章节 <span class="caret"></span></a>
					  <ul class="dropdown-menu fix_downMenu" style="left: 31px;cursor: pointer;">
						  <ol class="xulun">开篇：绪论</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter1">第一章：线性规划及其单纯形法</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter2">第二章：对偶理论和灵敏度分析</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter3">第三章：整数规划</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter4">第四章：动态规划</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter5">第五章：图与网络分析</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter6">第六章：网络计划</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter7">第七章：系统工程概述</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter8">第八章：系统工程方法论</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter9">第九章：系统评价方法</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter10">第十章：系统模型与模型化</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter11">第十一章：决策分析方法</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="chapter12">第十二章：系统仿真与系统动力学</ol>
					  </ul>
				  </li>
			  </ul>
			  <ul class="nav navbar-nav">
				  <li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">教学案例 <span class="caret"></span></a>
					  <ul class="dropdown-menu " style="cursor: pointer;">
						  <ol class="file1">案例一</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="file2">案例二</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="file3">案例三</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="file4">案例四</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="file5">案例五</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="file6">案例六</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="file7">案例七</ol>
						  <ol role="separator" class="divider"></ol>
						  <ol class="file8">案例八</ol>
					  </ul>
				  </li>
			  </ul>
			  <ul class="nav navbar-nav" style="margin-right: 20px;cursor: pointer;">
				  <li class="dropdown disabled download_click">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">课件下载 <span class="caret"></span></a>
					  <ul class="dropdown-menu hide download_click_ul">
						  <li><a href="http://pan.baidu.com/s/1yXOGu" target="_blank" class="dropdown_a disabled">绪论</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1kTLGjJ5" target="_blank" class="dropdown_a">第一章：线性规划及其单纯形法</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1mgzt11m" target="_blank" class="dropdown_a">第二章：对偶理论和灵敏度分析</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1qWnae1u" target="_blank" class="dropdown_a">第三章：整数规划</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1ntyB29V" target="_blank" class="dropdown_a">第四章：动态规划</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1mgk0xZU" target="_blank" class="dropdown_a">第五章：图与网络分析</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1o6y9zBk" target="_blank" class="dropdown_a">第六章：网络计划</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1dZkSY" target="_blank" class="dropdown_a">第七章：系统工程概述</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1i3zzBBv" target="_blank" class="dropdown_a">第八章：系统工程方法论</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1c0wmacC" target="_blank" class="dropdown_a">第九章：系统评价方法</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1c09JhwW" target="_blank" class="dropdown_a">第十章：系统模型与模型化</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1bn3F7QZ" target="_blank" class="dropdown_a">第十一章：决策分析方法论</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1mgMueU0" target="_blank" class="dropdown_a">第十二章：系统仿真与系统动力学</a></li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://pan.baidu.com/s/1ntF6zzj" target="_blank" class="dropdown_a">教学案例</a></li>
					  </ul>
				  </li>
				  <li style="cursor: pointer;"><a class="fEdition">参考教材</a></li>
			  </ul>
		  </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
  </nav>

<?php
if(!$name){
echo "<script>
      	  $(function () {
      		  $('.download_click').click(function () {
      			  alert('在首页注册登录之后就可以下载复习资料和老师上传的最新内容啦！');
      		  })
      	  })
        </script>";
        };
        if($name){
        echo "<script>
         $('.download_click').removeClass('disabled');
         $('.download_click_ul').removeClass('hide');
        </script>";
        };

?>

		 <div class="content">
		 <div class="aboutus-section">
		 <div class="container">
		 <h3>教学内容 Content</h3>
		 <div class="aboutus-grids">
		 <div class="col-md-5 left-grid wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		 <div class="aboutus1 fix_height">


			 <div class="col-md-7 right-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				 <div id="box" style="width: 80em;">
				 </div></div>
		 <div class="clearfix"></div>
		 </div>
			</div>
			</div></div></div>
		   <div class="footer-section" style="margin-top:20px;">
		   <div class="container">
		   <div class="footer-top">

		</div>

		<div class="footer-bottom wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                             <p class="footer-developer">developer&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Junwen Su</p>									</div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
		   </div>
</div></div>
 </body>
</html> 