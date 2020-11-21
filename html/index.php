<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
  <input type=" text" name="firstName">
  <input type="text" name="lastName">
  <button type="submit">click</button>
</form>


<?php  if (isset($_REQUEST["firstName"]) && !empty($_REQUEST["firstName"])) { ?>
    <p><?php echo $_REQUEST["firstName"] ?> </p>
<?php } ?>

<?php  if (isset($_REQUEST["lastName"]) && !empty($_REQUEST["firstName"])) { ?>
    <p><?php echo $_REQUEST["lastName"] ?> </p>
<?php } ?>


</body>
</html>