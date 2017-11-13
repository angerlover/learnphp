<?php 
header('Content-type:text/html;charset=utf8');
//  测试get请求的中文编码问题

// echo urlencode('我'); // 把得到的结果放入url中，再测试能否得到中文的‘我’
// echo $_GET['a'];
echo urldecode($_GET['a']);   
