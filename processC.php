<?php $conn =  mysqli_connect('localhost', 'root', '', 'company');?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>process create</title>
</head>
<body>
    <?php
        $sql = "INSERT INTO company (name, description, day) VALUES('{$_GET['name']}', '{$_GET['description']}', NOW())";
        mysqli_query($conn, $sql);
    ?>

    <a href="index.php">돌아가기</a>
</body>
</html>