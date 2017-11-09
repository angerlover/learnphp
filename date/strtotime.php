<?php 
// strtotime有点吊

// 最好加一个时区的手动设置
echo date_default_timezone_set('Asia/Shanghai'); 
echo strtotime('next Monday');
echo '<hr>';

echo strtotime('1 week') - strtotime('6 days');