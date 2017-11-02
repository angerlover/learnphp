<?php 
header('Content-type:image/jpeg');
// 远程抓取一张图片
$content = file_get_contents('http://www.ubuntukylin.com/public/images/down1704_newversion1.jpg');
echo $content;