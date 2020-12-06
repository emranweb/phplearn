<?php 
//$filename = "/Users/emran/work/phplearn/file/file2.txt";
$filename = "D:\\work\\phplearn\\file\\file2.txt";


$students = array(
    array(
        "fname"=>"emran",
        "age"=>30,
    ),
    array(
        "fname"=>"sabit",
        "age"=>30,  
    )
);

$encode = json_encode($students);

file_put_contents($filename, $encode, LOCK_EX);