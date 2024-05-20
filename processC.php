<?php
$conn = mysqli_connect('localhost', 'root', '', 'company');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['img'])) {
    $target_file = "uploads/" . basename($_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
    $name = $_POST['name'];
    $description = $_POST['description'];
    mysqli_query($conn, "INSERT INTO company (name, description, day, file) VALUES('$name', '$description', NOW(), '$target_file')");
}

mysqli_close($conn);
?>

<a href="index.php">돌아가기</a>
