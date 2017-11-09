<?php 
// mktime 好像和strtotime没什么区别啊
date_default_timezone_set('Asia/Shanghai');
// 一个特点时间的时间戳 好像
echo mktime(0,0,0,1,1,2017);
echo '<hr>';
echo strtotime('2017-1-1 0:0:0');