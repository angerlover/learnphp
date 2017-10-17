<?php 
//php内置的全局变量

// echo $_SERVER['DOCUMENT_ROOT']; // 显然和网站跟目录有关啦 /Users/pepe/Documents/php/www
// echo $_SERVER['HTTP_HOST']; // 请求头的Host localhost
// echo $_SERVER['REMOTE_ADDR']; // 客户的IP地址
// echo $_SERVER['HTTP_REFERER']; // 链接到当前页面的前一个url地址
// echo $_SERVER['SERVER_NAME'];  // 主机名称
// echo $_SERVER['SCRIPT_FILENAME'];  ///Users/pepe/Documents/php/www/learnphp/interview/global_const.php
echo $_SERVER['PHP_SELF'];  ///learnphp/interview/global_const.php