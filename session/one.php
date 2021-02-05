<?php
session_name("myapp");
session_start(["cookie_lifetime"=> 50]); 

$_SESSION["count"] = $_SESSION["count"] ?? 1;
$_SESSION["count"] ++;

 $_SESSION["name"]= "Shahin";


echo $_SESSION["name"];






