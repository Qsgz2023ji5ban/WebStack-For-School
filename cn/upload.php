<?php
if (isset($_POST["submit"])) {
    // 检查是否有文件被上传
    if (!file_exists($_FILES["background"]["tmp_name"]) || !is_uploaded_file($_FILES["background"]["tmp_name"])) {
        echo "没有选择文件，请选择一个PNG图片文件上传。";
        exit;
    }
    
    // 获取用户id
    $userId = isset($_COOKIE['id']) ? $_COOKIE['id'] : 'default';
    $target_dir = "uploads/";
    $target_file = $target_dir . $userId . '.png'; // 使用用户id作为文件名
    
    // 如果已经有同名文件，先删除
    if (file_exists($target_file)) {
        unlink($target_file);
    }
    
    // 获取文件类型
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // 验证是否为PNG文件
    if($imageFileType != "png") {
        echo "抱歉，只允许 PNG 文件。";
        exit;
    }
    
    // 尝试上传文件
    if (move_uploaded_file($_FILES["background"]["tmp_name"], $target_file)) {
        // 上传成功后重定向回原始页面
        header('Location: time.php');
        exit;
    } else {
        echo "抱歉，上传文件时出现错误。";
    }
}
?>
