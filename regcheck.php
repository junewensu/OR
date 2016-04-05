<?php  
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "娉ㄥ唽")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];
        $psw_confirm = $_POST["confirm"];
        $length = strlen($user);
        if($user == "" || $psw == "" || $psw_confirm == "" ||  $length!=12)
        {  
           echo "<script>alert('请输入12位学号'); history.go(-1);</script>";
        }  
        else  
        {  
            if($psw == $psw_confirm)  
            {  
                mysql_connect("localhost","root","qwer1234");   //杩炴帴鏁版嵁搴?
                mysql_select_db("login");  //閫夋嫨鏁版嵁搴?
                mysql_query("set names 'gdk'"); //璁惧畾瀛楃闆? 
                $sql = "select username from user where username = '$_POST[username]'"; //SQL璇彞  
                $result = mysql_query($sql);    //鎵цSQL璇彞  
                $num = mysql_num_rows($result); //缁熻鎵ц缁撴灉褰卞搷鐨勮鏁? 
                if($num)    //濡傛灉宸茬粡瀛樺湪璇ョ敤鎴? 
                {  
                    echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
                }  
                else    //涓嶅瓨鍦ㄥ綋鍓嶆敞鍐岀敤鎴峰悕绉? 
                {  
                    $sql_insert = "insert into user (username,password,phone,address) values('$_POST[username]','$_POST[password]','','')";  
                    $res_insert = mysql_query($sql_insert);  
                    //$num_insert = mysql_num_rows($res_insert);  
                    if($res_insert)  
                    {  
                        echo "<script>alert('注册成功'); history.go(-1);</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                    }  
                }  
            }  
            else  
            {  
                echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
            }  
        }  
    }  
    // else  
    // {  
    //     echo "<script>alert('鎻愪氦鏈垚鍔燂紒'); history.go(-1);</script>";  
    // }  
?>  