<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>logining</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container"> <div class="row"> <div class="col-md-6"> <div class="card"> <form method="post" action="index.php" class="box">
                    <h1>Login</h1>
                    <p class="text-muted"> </p>
                    <p class="text-muted"> Please enter your login and password!</p>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">

                    <input type="submit" value="Login" href="#">
                    <p class="text-muted"> @Danridep </p></form> </div> </div> </div>
</div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin") {
        header("Location: list_task.php");
        exit();
    } elseif ($username == "Danridep" && $password == "Danridep"){
        echo '<script>alert("Пароль: admin Логин: admin");</script>';
    }
    elseif($username == "" && $password == "") {
        echo '<script>alert("Заполните поля логинизации.");</script>';

    } else {
        header("Location: error.php");
        exit();

    }
}

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>