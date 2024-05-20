<?php
$conn =  mysqli_connect('localhost', 'root', '', 'company');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인페이지</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><a href="index.php">상품판매</a></h1>
    <section>
        <ol>
            <?php
                $sql = "SELECT * FROM company";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<li><a href='index.php?id={$row['id']}'>{$row['name']}</a></li>";
                }
            ?>
        </ol>
    </section>

    <script src="index.js"></script>
</body>
</html>