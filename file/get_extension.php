<?php 
// 获取一个全路径的文件名扩展

// echo __FILE__;

// 1 通过数组的方式获取
var_dump(pathinfo(__FILE__)['extension']);
// 2 通过.分割数组然后拿最后一个
$splited =  explode('.', __FILE__);
echo $splited[count($splited)-1];
// 3 神器strrchr
echo strrchr(__FILE__, '.');
// 4 使用正则
echo preg_replace('/^[^\.]+\.([\w])/', '\\1', basename(__FILE__));

// 5 借助strrpos
echo substr(__FILE__, strrpos(__FILE__,'.'));