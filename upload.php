<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = $_FILES["file"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($file["name"]);

    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        echo "Tệp tin đã được tải lên thành công.";
    } else {
        echo "Đã xảy ra lỗi khi tải lên tệp tin.";
    }
}
?>
