<?php 
$name = 'nicky';
$str = <<<SHOW
  这里是heredoc,
  我的名字是$name
SHOW;

echo $str;


// 测试newdoc
$str2 = <<<'HAHA'
this is newdoc,my name is $name
HAHA;
echo $str2;