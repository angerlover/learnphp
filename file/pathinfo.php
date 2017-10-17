<?php 

// 在面试宝典中遇到的一个问题啦
$path = str_replace('\\', '/', __FILE__);
$path_parts = pathinfo($path);
echo $path_parts['extension'];