<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="firstName">
        <input type="text" name="lastName">
        <button type="submit">Submit</button>
    </form>

    <p><?php echo  $_GET["firstName"];?></p>
    <p></p>
</body>
</html>