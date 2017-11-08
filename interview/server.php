<?php 
// 输出客户的ip
echo $_SERVER['REMOTE_ADDR'];
echo '<hr>';
// 输出服务器的ip
echo $_SERVER['SERVER_ADDR'];
echo '<hr>';
// echo $_SERVER['PATH_INFO'];
echo __FILE__;
echo '<hr>';
echo $_SERVER['SCRIPT_NAME'];    // /learnphp/interview/server.php

