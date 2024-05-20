<?php $conn =  mysqli_connect('localhost', 'root', '', 'company');?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create page</title>
</head>
<body>

    <?php
        $sql = "SELECT * FROM company";
        $result = mysqli_query($conn, $sql);
    ?>

    <form action="processC.php" method="post" enctype="multipart/form-data">
        <p><input type="file" name="img" id="img" accept="image/*" onchange="loadFile(this)"></p>
        <p><input type="text" name="name" id="name" placeholder="Dame"></p>
        <p><textarea name="description" id="description" placeholder="Description"></textarea></p>
        <p><input type="submit" value="등록"></p>
    </form>

    <script src="index.js"></script>
</body>
</html>