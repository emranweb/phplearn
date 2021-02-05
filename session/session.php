<?php 

session_start();

$_session['counter']= $_session["counter"] ?? 0;
$_session["counter"]++;

echo $_session['counter'];


?>