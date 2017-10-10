<?php 

$file = fopen('users.txt','a');
fwrite($file, 'hello');
fclose($file);