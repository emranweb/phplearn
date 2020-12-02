<?php 
$fileName = "/Users/emran/work/phplearn/file/file1.txt";

$fp = fopen($fileName, 'r');
$line = fgets($fp);
echo $line;