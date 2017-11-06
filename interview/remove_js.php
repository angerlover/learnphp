<?php 
// 去掉页面上所有的js代码
$str = "<script type='text/javascript' > alert(1);</script>";
$pattern = '/<script[^>]*?>.*?<\/script>/si';

echo preg_replace($pattern, '替换', $str);