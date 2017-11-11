<?php 

// 深复制和浅复制的区别.
//深复制表示完全脱离源对象，浅复制表示对源对象还有瓜葛。

$m = 2;
$n = $m;  // 普通对象都是深复制
$n = 3;
echo $m;


class Test
{
	var $name;
}

$t = new Test;
$t->name = 'nicky';
$p = $t; // 对象赋值是浅复制 引用传递的
$p->name = 'wang'; // 因此p改了t也要跟着改
// print_r($p);


// 那么如何实现对象的深复制呢？ clone
$c = clone $t;
$c->name = '克隆人';  // 互不影响
print_r($t);
print_r($c);


// 但是clone 对于一个对象的对象属性来说依然是浅复制。这时
// 可以使用序列化 然后再反序列化的方法实现
// $n = serialize($t);
// $n = unserialize($n);
// 这样即使对象中包含另一个对象属性，也可以毫无瓜葛