<?php 

// 此函数的类型是回调类型，说白了就是另一个函数
function t(callable $callback)
{
	call_user_func($callback);
}


function hello()
{
	echo 'hello,world';
}

t('hello');