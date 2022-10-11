<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="btcss.css">
</head>
<body>
    <?php if($_SESSION['password']) : ?>
        <h1>Hello madafaca</h1>
        <a href="SessionLogout.php" class="btn btn-primary ms-2">log out</a>
    <?php else :  ?>
        <form action="SessionIndex.php" method="POST">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8 ">
                        <div class="form-group mt-5">
                            <label for="name">name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group mt-1">
                            <label for="password">password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <button class="btn btn-primary mt-2">log in</button>
                    </div>
                </div>
            </div>
        </form>
    <?php endif ; ?>
</body>
</html>