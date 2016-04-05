<?php 
	if($_FILES["file"]["error"] > 0)
	{
		echo "Error:".$_FILES["file"]["error"]."<br>";
		
	}
	else 
	{
		echo "Upload:".$_FILES["file"]["name"]."<br>";
		echo "Type:".$_FILES["file"]["type"]."<br>";
		echo "Size:".($_FILES["file"]["size"]/1024/1024)."MB<br>";
		echo "Temp file:".$_FILES["file"]["tmp_name"]."<br>";
		
		if(file_exists("./upload/".$_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"]."文件已存在!";
		}
		else 
		{
			//move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/".$_FILES["file"]["name"]);
			move_uploaded_file($_FILES["file"]["tmp_name"],iconv("UTF-8","gb2312//IGNORE","./upload/".$_FILES["file"]["name"]));
			echo $_FILES["file"]["name"]."文件已上传!";
		}
	}
	header("Location:uploadmain.php");
?>