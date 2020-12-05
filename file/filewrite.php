<?php 
$filename = "/Users/emran/work/phplearn/file/file2.txt";

$fp = fopen($filename, "w");

fwrite($fp, "hello");

