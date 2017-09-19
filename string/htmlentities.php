<?php 
// 实体转换
$str = "A 'quote' is <b>bold</b>";

// 输出: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);
