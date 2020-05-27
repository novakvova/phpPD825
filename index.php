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
<?php
include_once("navbar.php");
include("connection_database.php");
$sql = "SELECT u.id, u.email FROM tbl_users AS u";
$stmt= $dbh->prepare($sql);
$stmt->execute();

?>

<div class="container">
    <div class="row">
        <h1>Веселі користувачі - огірки</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                ?>
            <tr>
                <th scope="row">1</th>
                <td> <?php echo $row['email']; ?> </td>
            </tr>
            <?php
            }
            ?>

            </tbody>
        </table>

    </div>
</div>



<?php include_once("scripts.php"); ?>

</body>
</html>
