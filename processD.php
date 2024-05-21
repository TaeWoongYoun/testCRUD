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

        // settype($_POST['id'], 'integer');
        // $filtered = array(
        //     'id'=>mysqli_real_escape_string($conn, $_POST['id'])
        // );
        // $sql = "DELETE FROM company WHERE id = {$filtered['id']}";
        // $result = mysqli_query($conn, $sql);
        // if($result === false){
        //     echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        //     error_log(mysqli_error($conn));
        // } else {
        //     echo '삭제했습니다. <a href="index.php">돌아가기</a>';
        //     error_log(mysqli_error($conn));
        // };

        $id = $_POST['id'];

        $sql = "DELETE FROM company WHERE id = {$id}";
        mysqli_query($conn, $sql);
        ?>

        <a href="index.php">돌아가기</a>
</body>
</html>