<?php  
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];
        $psw_confirm = $_POST["confirm"];
        $length = strlen($user);
        if($user == "" || $psw == "" || $psw_confirm == "" ||  $length!=12)
        {  
           echo "<script>alert('������12λѧ��'); history.go(-1);</script>";
        }  
        else  
        {  
            if($psw == $psw_confirm)  
            {  
                mysql_connect("localhost","root","qwer1234");   //连接数据�?
                mysql_select_db("login");  //选择数据�?
                mysql_query("set names 'gdk'"); //设定字符�? 
                $sql = "select username from user where username = '$_POST[username]'"; //SQL语句  
                $result = mysql_query($sql);    //执行SQL语句  
                $num = mysql_num_rows($result); //统计执行结果影响的行�? 
                if($num)    //如果已经存在该用�? 
                {  
                    echo "<script>alert('�û����Ѵ���'); history.go(-1);</script>";  
                }  
                else    //不存在当前注册用户名�? 
                {  
                    $sql_insert = "insert into user (username,password,phone,address) values('$_POST[username]','$_POST[password]','','')";  
                    $res_insert = mysql_query($sql_insert);  
                    //$num_insert = mysql_num_rows($res_insert);  
                    if($res_insert)  
                    {  
                        echo "<script>alert('ע��ɹ�'); history.go(-1);</script>";  
                    }  
                    else  
                    {  
                        echo "<script>alert('ϵͳ��æ�����Ժ�'); history.go(-1);</script>";  
                    }  
                }  
            }  
            else  
            {  
                echo "<script>alert('���벻һ�£�'); history.go(-1);</script>";  
            }  
        }  
    }  
    // else  
    // {  
    //     echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    // }  
?>  