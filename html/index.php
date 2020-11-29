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
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <style>
    body {
        font-family: 'Kalpurush', Arial, sans-serif !important;
    }
    </style>
</head>




<body>
    <div class="form-area">
        <div class="row">
            <div class="col-md-6 offset-md-3">


                <?php
                $fname = '';
                $lname = '';
                ?>

                <?php 

                if( isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){
                 $fname = $_REQUEST['fname'];
                }

                if( isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){
                  $lname = $_REQUEST['fname'];
                 }

                 function isChecked ($array, $value){
                    if(in_array($value, $array)){
                     echo "checked";
                    }
                 }


                 ?>

                <form action="" method="$_POST">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="fname" value=<?php echo $fname ?>>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="lname" value=<?php echo $fname ?>>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="fruits[]" value="mango"
                                <?php isChecked($_REQUEST['fruits'], "mango") ?>>
                            Mango
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="fruits[]" value="banana"
                                <?php isChecked($_REQUEST['fruits'], "banana") ?>>
                            Banana
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="fruits[]" value="orange"
                                <?php isChecked($_REQUEST['fruits'], "orange") ?>>
                            Orange
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="fruits[]" value="pineapple"
                                <?php isChecked($_REQUEST['fruits'], "pineapple") ?>>
                            Pineapple
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>






            </div>
        </div>
    </div>
</body>

</html>