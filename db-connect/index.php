<?php 
include_once "./connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$query = "SELECT * FROM users;";

$result = mysqli_query($connect, $query);

?>
    
</body>
</html>