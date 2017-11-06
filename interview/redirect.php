<?php
// 1️⃣ 用header
// 直接跳转了：牛逼header('location:http://www.baidu.com');
//  前面不能有输出echo '哈哈';
// header('refresh:3;url=http://www.baidu.com');
// 2 用meta

echo "<meta http-equiv=refresh content='0;url=http://www.baidu.com' />";