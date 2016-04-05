  <?php
            $user = $_POST["username"];
            $psw = $_POST["password"];       
            if($user == "20160216" || $psw == "yunchouxue"){
                mysql_connect("localhost","root","qwer1234");
                mysql_select_db("login");
                mysql_query("set names 'gbk'");
                $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";
                $result = mysql_query($sql);
                $num = mysql_num_rows($result);
                if($num)
                {             
                  setcookie('cookie',$user);
                  $cookie = $_COOKIE['cookie'];				  
				  header("Location:index.php");                  
                }
               
        }
         else{
                echo "<script>alert('用户名或密码错误！');
                </script>";
				header("Location:index.php");
                }

        ?>