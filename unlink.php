<?php
/**
 * Created by PhpStorm.
 * User: G150SG
 * Date: 2016/2/28
 * Time: 0:56
 */

$file = iconv("UTF-8","gb2312", "./upload/".$_GET["file"].".".$_GET["type"]);
unlink($file);
header("Location:uploadmain.php");
