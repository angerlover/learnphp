<?php 

// 补集\W到底是啥
$str = 'tomois fa    fas , Yes I love
you';

$pattern = '/\W+/';

preg_match_all($pattern, $str, $match);
var_dump($match);