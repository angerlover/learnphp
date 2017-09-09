<?php 

$number = 1234.45;
// 如果没有参数的话就是1,234
echo number_format($number);
echo '<br>';
echo number_format($number,1);
echo '<br>';
// 第二个参数保留小数位 第三个小数点的替换值 第四个是千分位的替换值
echo number_format($number,2,'-','~');