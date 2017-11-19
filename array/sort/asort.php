<?php 
// 基于值排序 保持索引关系,我觉得这是最正常的排序方式
$arr = ['name'=>'nicky','age'=>'unknown','test'=>'aa'];
// asort($arr);
// print_r($arr);


// 测试一下sort会是什么效果？？果然，没有了关联了，变成了一般的索引数组
sort($arr);
print_r($arr);