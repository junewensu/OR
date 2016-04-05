<?php 
	if(!isset($_GET["file"]) || !isset($_GET["type"]))
	{
		echo "没有文件被选择";
		exit;
	}
	//$file = "./upload/".$_GET["file"].".".$_GET["type"];
    $file = iconv("UTF-8","gb2312", "./upload/".$_GET["file"].".".$_GET["type"]);
	if(@$fp=fopen($file, 'r'))
	{
		header("Content-type:octet/stream");
		if(strstr($_SERVER["HTTP_USER_AGENT"], "MSIE"))
		{
			header("Content-Disposition:attachment;filename=".mb_convert_encoding($_GET["file"].".".$_GET["type"], "gb2312","utf8"));
		}
		else 
		{
			header("Content-Disposition:attachment;filename=".mb_convert_encoding($_GET["file"].".".$_GET["type"], "gb2312","utf8"));
		}
		while (!@feof($fp))
		{
			echo fread($fp, 1024);
		}
		exit;
	}
	else 
	{
		echo "文件不存在";
	}
?>
