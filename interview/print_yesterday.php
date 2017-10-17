<?php 

//打印昨天的日期
// echo date('Y-y-d H:i:s',time()-3600*24);

// 还有一种

echo date('Y-y-d H:i:s',strtotime('-1 day'));