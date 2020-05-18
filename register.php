<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email = $_POST["email"];
    $password = $_POST['password'];
    $user="lopatkin";
    $pass="123456";
    $dbh = new PDO('mysql:host=localhost;dbname=dblopatkin', $user, $pass);

    $sql = "INSERT INTO `tbl_users` (`email`, `password`, `image`) VALUES (?, ?, 'nophoto');";
    $stmt= $dbh->prepare($sql);
    $stmt->execute([$email, $password]);
    header("Location:  index.php");
    exit();
    echo "<script>alert('POST JS".$email."'); </script>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once("style.php"); ?>
    <title>Document</title>
</head>
<body>

<?php include_once("navbar.php"); ?>

<div class="container">
    <div class="row">
        <h1 class="col-12 text-center">Реєстрація</h1>
    </div>
    <div class="row">
        <form class="col-12" action="register.php" method="post" enctype="multipart/form-data">
            <div class="offset-3 col-6 form-group">
                <label for="email">Електронна пошта</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="offset-3 col-6 form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="offset-4 btn btn-primary">Реєстрація</button>
        </form>
    </div>
</div>



<?php include_once("scripts.php"); ?>

</body>
</html>
