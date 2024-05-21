<?php $conn = mysqli_connect('localhost', 'root', '', 'company');?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (int)$_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    
    $sql = "UPDATE company SET name='$name', description='$description' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        echo '텍스트 정보가 성공적으로 업데이트되었습니다. <br> ';
    } else {
        echo '텍스트 업데이트 중 문제가 발생했습니다.';
    }
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $id = (int)$_POST['id'];
        
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            $file_path = mysqli_real_escape_string($conn, $target_file);
            $sql = "UPDATE company SET file='$file_path' WHERE id=$id";
            
            if (mysqli_query($conn, $sql)) {
                echo '이미지가 성공적으로 업데이트되었습니다. <br>';
            } else {
                echo '이미지 업데이트 중 문제가 발생했습니다.';
            }
        } else {
            echo '이미지 업로드 중 문제가 발생했습니다.';
        }
    } else {
        echo '이미지가 선택되지 않았거나 업로드 중 문제가 발생했습니다.';
    }
}
?>

<a href="index.php">돌아가기</a>
