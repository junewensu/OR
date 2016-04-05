<?php
$name = $_COOKIE['cookie'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Upload</title>
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
	<link href="css/index.css" />
	<link href="css/discussion.css" />
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/animate.js" ></script>
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
  <div class="header head-top " id="home">
		<div class="container">
		<div class="header-top">
		<div class="top-menu">
		<span class="menu"><img src="img/nav.png" alt=""/> </span>
    <ul>
		<li><a href="index.php">主页</a></li><label>/</label>
		<li><a href="about.php">课程概述</a></li><label>/</label>
		<li><a href="content.php">课程内容</a></li><label>/</label>
		<li><a href="video.php">课程视频</a></li><label>/</label>
		<li><a href="discussion.php" >讨论区</a></li>
		 <label>/</label>
                            <li class="upload hide" class="active"><a href="uploadmain.php" class="upload_a">上传文件</a></li>
		<li></li>
        <li></li>
        <li class="login_success" style="margin-left:340px;vertical-align:2px;"></li>
    </ul>

   
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
			<div class="logo wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<a href="index.php">upload</a>
			</div>
		</div>
  </div>

  <div id="content" style="width:80%;height: 700px;margin:auto;overflow:auto;" class="fix-margin-top">
	  <div class="discussion">
		  <h1 class="discussion_h1" style=" margin-bottom: 17px;font-family: 微软雅黑;">上传您的文件  Upload your file!</h1>
		
	<form action="upload.php" method="post" enctype="multipart/form-data" class="form_upload">
	
    <input type="file" name="file" id="file">

	<br>
	<input type="submit" value="提交" class="btn btn-success" />
</form>
<?php 
	$handle = dir("./upload/");
	while(($file = $handle->read()) !== FALSE)
	{
		if($file !="." && $file != "..")
		{
			$file = iconv("gb2312","UTF-8", $file);
			$position = strrpos($file, ".");
			$filename = substr($file, 0,$position);
			$filetype = substr($file,$position+1);	
			if($file!=null){

			echo "<a href='download.php?file=$filename&type=$filetype' style='margin-left:80px;' class='file'>".$file."<a><a class='btn btn-danger hide unlink $position' style='margin-left:30px;margin-bottom:20px;'>删除</a><br>";
				echo "<script>
                  $('.$position').click(function(){							 				
						  	if(confirm('您确定删除这个文件吗?')){						  		
						  		$('.$position').attr('href','unlink.php?file=$filename&type=$filetype');
						  	}
						  	else{
						  		return false;
						  	}
					 });
				</script>";
		}
	}
	}
	$handle->close();


?>
		
	
 <?php
              echo " <script src='js/jquery-1.11.1.min.js'></script>";
               if($name){
               echo "<script>
               if($name == '20160216'){
						 $('.login_success').html('欢迎管理员！');
						  $('.upload').removeClass('hide');
						  $('.unlink').removeClass('hide');
						 
						  
						}
						else{
                        $('.login_success').html('欢迎&nbsp;&nbsp;'+$name+'&nbsp;&nbsp;同学');
						$('.upload_a').html('新增内容');
						$('.discussion_h1').html('下载最新内容');
						$('.upload').removeClass('hide');
						$('.form_upload').addClass('hide');
						$('.file').css('margin-bottom','20px');
					    	}	
               </script>";
               };
         ?>
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