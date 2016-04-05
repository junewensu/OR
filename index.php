<?php   
$name = $_COOKIE['cookie']; 
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Cultivation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <link href='http://fonts.useso.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic'
          rel='stylesheet' type='text/css'>
    <link href="css/buttons.min.css"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/buttons.js"></script>

    <!-- 只有使用字体图标时才需要加载 Font-Awesome -->
    <link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
            });
        });
    </script>
    <!---End-smoth-scrolling---->
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!--Animation-->
    <script src="js/wow.min.js"></script>
    <link href="css/animate.css" rel='stylesheet' type='text/css'/>
    <script>
        new WOW().init();

    </script>
    <!---/End-Animation---->
</head>
    <body>
    <!--学生登录-->
        <div class="hide_bg hide" style="width: 100%;height:200%;background:rgba(0,0,0,0.5);z-index:10;position:fixed;"></div>
        <div style="background:#fff;z-index:20;position:fixed;width:500px;top:35%;height:300px;border-radius: 10px;" class="1 hide">
            <div class="col-sm-12 form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3 style="margin-top:1.5em;margin-bottom:10px;">请输入您的学号和密码来登录</h3>

                        <p>Enter your username and password to log on:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-key"></i>
                    </div>
                </div>
                <div class="form-bottom" >
                 <form role="form" action="login.php" method="post" class="login-form">
                        <div class="form-group">
                            <label class="sr-only" for="username">学号</label>
                            <input type="text" name="username" placeholder="学号..." class="form-username form-control"
                                   id="username">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">密码</label>
                            <input type="password" name="password" placeholder="密码..." class="form-password form-control"
                                   id="password">
                        </div>
                        <input type="submit" name="submit" value="登陆" class="btn btn-success btn-block" id="commit"/>

                    </form>
                </div>
            </div>
        </div>
        <!--学生注册-->
        <div style="background:#fff;z-index:20;position:fixed;width:500px;top:35%;height:300px;border-radius: 10px;" class="2 hide">
            <div class="col-sm-12 form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3 style="margin-top:1.5em;margin-bottom:10px;">请输入您的学号和密码来注册</h3>
                        <p>Enter your username and password to register:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-key"></i>
                    </div>
                </div>
                <div class="form-bottom" >
                    <form role="form" action="regcheck.php" method="post" class="login-form">
                        <div class="form-group">
                            <label class="sr-only" for="username">学号</label>
                            <input type="text" name="username" placeholder="学号..." class="form-username form-control student_id"
                                   id="username1">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">密码</label>
                            <input type="password" name="password" placeholder="密码..." class="form-password form-control"
                                   id="password1">
                        </div>
                        <div class="form-group">
                             <label class="sr-only" for="password">确认密码</label>
                         <input type="password" name="confirm" placeholder="确认密码..." class="form-password form-control"
                                id="confirm">
                          </div>
                        <input type="submit" name="Submit" value="注册" class="btn btn-warning btn-block" id="register"/>
                    </form>
                </div>
            </div>
        </div>
        <!--管理员登录-->
        <div style="background:#fff;z-index:20;position:fixed;width:500px;top:35%;height:300px;border-radius: 10px;" class="3 hide">
            <div class="col-sm-12 form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3 style="margin-top:1.5em;margin-bottom:10px;">请输入管理员账号</h3>
                        <p>Enter your password:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-key"></i>
                    </div>
                </div>
                <div class="form-bottom" >
                    <form role="form" action="manager.php" method="post" class="login-form">
                        <div class="form-group">
                            <label class="sr-only" for="username">管理员账号</label>
                            <input type="text" name="username" placeholder="管理员账号" class="form-username form-control"
                                   id="username2">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">密码</label>
                            <input type="password" name="password" placeholder="密码..." class="form-password form-control"
                                   id="password2">
                        </div>
                        <!-- <button type="submit" class="btn btn-primary text-center" value="登陆" name="submit">登录!</button> -->
                        <input type="submit" name="submit" value="管理员登录" class="btn btn-info btn-block" id="guanliyuan"/>
                    </form>
                </div>
            </div>
        </div>
        <script>$(function(){
            $(".register").click(function () {
                $(".hide_bg").removeClass("hide");
                $(".2").removeClass("hide");
            })
            $(".guanliyuan").click(function () {
                $(".hide_bg").removeClass("hide");
                $(".3").removeClass("hide");
            })
            $("#register").click(function(){
                var username=$("#username1").val();
                if(username.length()<12){
                    alert("您输入的学号不正确");
                }
            })
        })</script>
        <div class="header" id="home">
            <div class="container">
                <div class="header-top">
                    <div class="top-menu">
                        <span class="menu"><img src="img/nav.png" alt=""/> </span>
                        <ul>
                            <li><a href="index.php" class="active">主页</a></li>
                            <label>/</label>
                            <li><a href="about.php">课程概述</a></li>
                            <label>/</label>
                            <li><a href="content.php">课程内容</a></li>
                            <label>/</label>
                            <li><a href="video.php">课程视频</a></li>
                            <label>/</label>
                            <li><a href="discussion.php">讨论区</a></li>
                             <label>/</label>
                            <li class="upload hide"><a href="uploadmain.php" class="upload_a">上传文件</a></li>
                            <li style="margin-left:10px;">
                                <p>您是第<!-- start http://www.2881.com -->
                                    <script src="http://count.2881.com/count/count.asp?id=65892&sx=2&ys=4" language="JavaScript" charset="gb2312"></script>
                                    <!-- Powered by http://www.2881.com -->位访问的！！
                                </p>
                            </li>
                            <li class="login_success" style="margin-left:100px;"></li>
                            <li style="margin-left:10px;">
                            <a class=" logout hide" href="logout.php" style="color:yellow;">注销</a>
                            </li>
                            <li style="margin-left:10px;">
                                <button class="btn btn-info login hide">登录</button>
                            </li>
                            <li>
                                <button class="btn btn-success register hide">注册</button>
                            </li>
                            <li>
                                <button class="btn btn-warning guanliyuan hide">管理员登录</button>
                            </li>
                        </ul>                   		
			
							
									   
					   <?php 
					   if (isset($name)){
					    echo "<script>
                        $('.login').addClass('hide');
                        $('.register').addClass('hide');
                        $('.guanliyuan').addClass('hide');
                        $('.logout').removeClass('hide');
						if($name == '20160216'){
						 $('.login_success').html('欢迎管理员！')
						 $('.upload').removeClass('hide');
						}
						else{
                        $('.login_success').html('欢迎&nbsp;&nbsp;'+$name+'&nbsp;&nbsp;同学');
						$('.upload_a').html('新增内容');
						$('.login_success').css('margin-left','23px');
						 $('.upload').removeClass('hide');
						
							}			
                        </script>";
					   }
                       else{
                         echo "<script>
                        $('.login').removeClass('hide');
                        $('.register').removeClass('hide');
                        $('.guanliyuan').removeClass('hide');</script>";
                       }
					   ?>
                        <!-- script for menu -->
                        <script>
                            $("span.menu").click(function () {
                                $(".top-menu ul").slideToggle("slow", function () {
                                });
                            });
                            //这个是计数器
                        </script>
                    </div>
                    <div class="clearfix"></div>

                </div>

                <div class="logo wow bounceIn animated" data-wow-delay="0.4s"
                     style="visibility: visible; -webkit-animation-delay: 0.4s;width:100%;">
                    <a href="index.php">Operational Research & System Analysis</a>
                </div>
                <div class="header-bottom" style="    margin-top:2em;">
                    <div class="header-grids">
                        <div class="col-md-3 header-grid fix-margin-top">
                            <div class="header-img1 wow bounceInLeft animated" data-wow-delay="0.4s"
                                 style="visibility: visible; -webkit-animation-delay: 0.4s;">
                                <!--<img src="img/icon4.png" class="img-responsive" alt="/">-->
                                <h4 style="font-family:微软雅黑;">运筹学与系统分析</h4>
                                <p style="text-indent:2em;font-family: 微软雅黑;"><br>是现代管理学的一门重要的专业课。
                                    它是20世纪30年代初发展起来的一门新兴学科，其主要目的是在决策时为管理人员提供科学的依据，是实现有效管理、正确决策和现代化管理的重要方法之一。
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 header-grid fix-margin-top">
                            <div class="header-img2 wow fadeInDownBig animated animated" data-wow-delay="0.4s">
                                <!--<img src="img/icon5.png" class="img-responsive" alt="/">-->
                                <h4 style="font-family: 微软雅黑;">课程背景</h4>

                                <p style="text-indent:2em;font-family: 微软雅黑;"><br>《运筹学与系统分析》课程是一门研究如何有效地组织和管理的科学，讲授系统优化、系统分析的基本概念、理论和方法。《运筹学与系统分析》课程在我校为信息管理与信息系统、工业工程两个专业的核心必修课程。
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 header-grid fix-margin-top">
                            <div class="header-img2 wow fadeInDownBig animated animated" data-wow-delay="0.4s">
                                <!--<img src="img/icon5.png" class="img-responsive" alt="/">-->
                                <h4 style="font-family: 微软雅黑;">课程内容</h4>

                                <p style="text-indent:2em;font-family: 微软雅黑;"><br>《运筹学与系统分析》的总学分为4学分，总学时为64学时，对应的整合实验课程《运筹学与系统分析实验》的总学分为0.5学分，总学时为16学时。理论课与实验课为同一学期开设，相辅相成。
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 header-grid fix-margin-top">
                            <div class="header-img2 wow fadeInDownBig animated animated" data-wow-delay="0.4s">
                                <!--<img src="img/icon5.png" class="img-responsive" alt="/">-->
                                <h4 style="font-family: 微软雅黑;">教学条件</h4>

                                <p style="text-indent:2em;font-family: 微软雅黑;"><br/>理论教学在学校的多媒体教室进行，基于配备PowerPoint和相关课程软件的高性能电脑以及投影仪进行电子化教学，实验教学在数学与信息学院机房进行，拥有可容纳80人进行实验的机房2个（共160实验机位，可同时进行实验），实验电脑配备所需的软件工具如Excel、Tora和Lingo/Lindo。
                                </p>

                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="about-section">
                <div class="container">
                    <h3 style="margin-top:1em;">课程简述 Brief introduction</h3>

                    <div class="about-grids">
                        <div class="col-md-5 about-img wow bounceInRight animated" data-wow-delay="0.4s"
                             style="visibility: visible; -webkit-animation-delay: 0.4s;margin-top: 30px;;">
                            <img src="img/top_pic1.jpg" class="img-responsive col-sm-6" alt="/" style="width: 350px;">

                        </div>
                        <div class="col-md-7 about-grid wow bounceInLeft animated" data-wow-delay="0.4s"
                             style="visibility: visible; -webkit-animation-delay: 0.4s;mar">
                            <p style="font-family:微软雅黑;color: #000;text-indent: 2em;font-size:1.5em;">
                                《运筹学与系统分析》课程是一门研究如何有效地组织和管理的科学，讲授系统优化、系统分析的基本概念、理论和方法。它与管理科学紧密联系，研究解决实际问题时的系统优化思想，以及从提出问题、分析建模、求解到方案实施的一整套科学方法。通过课程的学习，培养学生解决问题时的系统优化思想与系统分析能力，提高学生的综合管理素质。</p>

                            <p style="font-family:微软雅黑;color: #000;text-indent: 2em;font-size:1.5em;">
                                《运筹学与系统分析》课程在我校为信息管理与信息系统、工业工程两个专业的核心必修课程。前期基础课程为《高等数学》、《线性代数》、《概率论》。</p>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="service-section">
                <div class="container">
                    <h3>课程预览 Preview </h3>

                    <div class="service-grids">
                        <div class="col-md-4 service-grid wow bounceInLeft animated" data-wow-delay="0.4s"
                             style="visibility: visible; -webkit-animation-delay: 0.4s;">
                            <a href="about.php" class="button btn-primary" style="margin: auto;border-radius: 2px;">课程背景</a>
                            <h4>Course Background</h4>

                            <p style="font-family:微软雅黑;color:wheat;text-indent: 2em;">
                                《运筹学与系统分析》课程是一门研究如何有效地组织和管理的科学，讲授系统优化、系统分析的基本概念、理论和方法。</p>
                        </div>
                        <div class="col-md-4 service-grid wow fadeInUpBig animated animated" data-wow-delay="0.4s">
                            <a href="about.php" class="button btn-primary" style="margin: auto;border-radius: 2px;">教学条件</a>
                            <h4> Teaching Methods</h4>

                            <p style="font-family:微软雅黑;color:wheat;text-indent: 2em;">
                                理论教学在学校的多媒体教室进行，基于配备PowerPoint和相关课程软件的高性能电脑以及投影仪进行电子化教学。</p>
                        </div>
                        <div class="col-md-4 service-grid wow bounceInRight animated" data-wow-delay="0.4s"
                             style="visibility: visible; -webkit-animation-delay: 0.4s;">
                            <a href="about.php" class="button btn-primary" style="margin: auto;border-radius: 2px;">教师团队</a>
                            <h4>Teaching Team</h4>

                            <p style="color:wheat"><strong>俞守华教授</strong> | <strong>余平祥副教授</strong> | <strong>杨振刚副教授</strong>
                              </p>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="work-section wow bounceIn animated" data-wow-delay="0.4s"
                 style="visibility: visible; -webkit-animation-delay: 0.4s;">
                <div class="container">
                    <h3>课程视频预览 The videos</h3>

                    <div class="latest-grids">
                        <div class="latest-grid1">
                            <div class="col-md-3 latest-grid work">
                                <a href="video.php"> <img src="ppt_img/ppt0/ppt1_1.jpg" class="img-responsive pointer" alt="/"/></a>
                            </div>

                            <div class="col-md-3 latest-grid work">
                                <a href="video.php"> <img src="ppt_img/ppt1/幻灯片1.jpg" class="img-responsive pointer" alt="/"></a>
                            </div>

                            <div class="col-md-3 latest-grid work">
                                <a href="video.php">  <img src="ppt_img/ppt2/幻灯片1.jpg" class="img-responsive pointer" alt="/"></a>
                            </div>

                            <div class="col-md-3 latest-grid work">
                                <a href="video.php"> <img src="ppt_img/ppt3/幻灯片1.jpg" class="img-responsive pointer" alt="/"></a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="latest-grid2">
                        <div class="col-md-3 latest-grid work">
                            <a href="video.php">   <img src="ppt_img/ppt4/幻灯片1.jpg" class="img-responsive pointer" alt="/"></a>
                        </div>

                        <div class="col-md-3 latest-grid work">
                            <a href="video.php">   <img src="ppt_img/ppt5/幻灯片1.jpg" class="img-responsive pointer" alt="/"></a>
                        </div>

                        <div class="col-md-3 latest-grid work">
                            <a href="video.php">  <img src="ppt_img/ppt6/幻灯片1.jpg" class="img-responsive pointer" alt="/"></a>
                        </div>

                        <div class="col-md-3 latest-grid work">
                            <a href="video.php">  <img src="ppt_img/ppt6/幻灯片1.jpg" class="img-responsive" alt="/"></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="clearfix"></div>
            <div class="footer-section">
                <div class="container">
                    <div class="footer-top">

                    </div>

                    <div class="footer-bottom wow bounceInRight animated" data-wow-delay="0.4s"
                         style="visibility: visible; -webkit-animation-delay: 0.4s;">
                        <p class="footer-developer bg">developer&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Junwen Su</p>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            /*
                             var defaults = {
                             containerID: 'toTop', // fading element id
                             containerHoverID: 'toTopHover', // fading element hover id
                             scrollSpeed: 1200,
                             easingType: 'linear'
                             };
                             */

                            $().UItoTop({easingType: 'easeOutQuart'});

                        });
                        var d = $(window).width();
                        var e = $('.1').width();
                        var f = (d - e) / 2;
                        $('.1').css("margin-left", f);
                        $('.2').css("margin-left", f);
                        $('.3').css("margin-left", f);

                        $(".login").click(function () {
                            $(".hide_bg").removeClass("hide");
                            $(".1").removeClass("hide");
                        })
                        $(".hide_bg").click(function(){
                            $(".hide_bg").addClass("hide");
                            $(".1").addClass("hide");
                            $(".2").addClass("hide");
                            $(".3").addClass("hide");

                        })
                    </script>
                    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
                </div>
            </div>
        </div>

    </body>
</html> 