<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="file" class="form-control-file" name="photo" id="" placeholder="" aria-describedby="fileHelpId">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <p>
        <pre>
            <?php
              if($_FILES['photo']){
                  move_uploaded_file($_FILES['photo']["tmp_name"], "file/".$_FILES['photo']['name']);
              }
            ?>
        </pre>
    </p>

    
</body>

</html>