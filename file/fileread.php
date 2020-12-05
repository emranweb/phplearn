<?php 
$fileName = "/Users/emran/work/phplearn/file/file1.txt";

$fp = fopen($fileName, 'r');

while($line = fgets($fp)){
    echo $line;
}

$data = file($fileName);
print_r($data);



echo $line;