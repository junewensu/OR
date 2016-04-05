<?php 

        $user = $_POST["username"];  
        $psw = $_POST["password"];
		$length = strlen($user); 
        if($user == "" || $psw == "" || $length!=12)  
        {  
           echo "<script charset='utf-8' type='text/javascript'>alert('请输入12位学号'); history.go(-1);</script>";
        }  
        else  
        {  
            mysql_connect("localhost","root","qwer1234");
            mysql_select_db("login");
            mysql_query("set names 'gbk'");  
            $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                $row = mysql_fetch_array($result);  
				setcookie('cookie', $_POST["username"]);
               $cookie = $_COOKIE['cookie'];
			   echo "<script>         
            alert('登录成功您可以下载最新内容啦！');
            </script>";
			   header("Location:index.php");			   
            }  
            else  
            {  
                echo "<script>alert('用户名和密码错误');history.go(-1);</script>";
				header("Location:index.php");  
            }  
        }
  
	 
	?>