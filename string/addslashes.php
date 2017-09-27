<?php
// 在一个字符串前面加上转义
$str = "my name is Mac's M";
echo addslashes($str);


// 相反的镜像方法
$str2 = "My na\me is m\ac";
echo stripslashes($str2);


// 在特定字符前面加转义 同样的对应镜像方法就是stripcslashes
echo addcslashes($str,'s');