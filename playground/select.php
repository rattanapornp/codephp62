<?php
require_once 'connectdb.php';

$strSQL = "SELECT id, username, status FROM user WHERE 1";
$result = $myconn->query($strSQL);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td> รหัส </td>
            <td> ชื่อผู้ใช้</td>
            <td> สถานะ</td>
            <td> แก้ไข</td>
            <td> ลบ</td>
        <tr>
            <?php
            while ($row = $result->fetch_array()) {
                //echo $row["username"] . "<br>";
            ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["username"] ?></td>
            <td><?= $row["status"] ?></td>
            <td><a href="update.php?id=<?= $row["id"] ?>&username=<?= $row["username"] ?>&status=<?= $row["status"] ?>"><i class="fas fa-edit"></i></a></td>
            <td><a href="delete.php?id=<?= $row["id"] ?>"><i class="fas fa-trash"></i></a></td>
        </tr>
    <?php
            }
    ?>
    </table>
</body>

</html>