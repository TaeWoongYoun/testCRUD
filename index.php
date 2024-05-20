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
        <ul>
            <?php
                $sql = "SELECT * FROM company";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<a href='index.php?id={$row['id']}'>
                            <li>
                                <img src=''>        
                                <h3>{$row['name']}</h3>
                                <p>{$row['description']}</p>
                            </li>
                        </a>";
                }

                // if(isset($_GET['id'])){
                //     $sql = "SELECT * FROM company WHERE id={$_GET['id']}";
                //     $result = mysqli_query($conn, $sql);
                //     $row = mysqli_fetch_array($result);
                //     $article = array(
                //         'name' => $row['name'],
                //         'description' => $row['description']
                //     );
                // };
            ?>
        </ul>
    </section>
    <!-- <h2><?=$article['name']?></h2>
    <p><?=$article['description']?></p> -->
    <script src="index.js"></script>
</body>
</html>