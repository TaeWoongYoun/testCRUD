<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $conn = mysqli_connect( 'localhost', 'root', '', 'company');
        $id = $_POST['id'];

        $sql = "DELETE FROM company WHERE id = {$id}";
        mysqli_query($conn, $sql);
        ?>

        <a href="index.php">돌아가기</a>
</body>
</html>