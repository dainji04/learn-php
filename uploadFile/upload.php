<?php
echo "<pre>";

/* TODO LIST */
// 1. Create a form with method post and action upload.php
// 2. check exist file
// 3. check file size
// 4. check file type
// 5. move file to directory
// 6. show file in browser

$targetDir = "uploads/"; // directory to save file
$fileAvatar = $_FILES["file"]; // convert array[][] to array[]
$targetFile = $targetDir . time() . "-" . $fileAvatar["name"];
$uploadOk = 1;
$maxSize = 5 * 1024 * 1024; // 5MB
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
// $type = ["image/png", "image/jpeg", "image/jpg", "image/gif"];
$type = ["png", "jpeg", "jpg", "gif"];

if (file_exists(($targetFile))) {
    echo "File already exists";
    $uploadOk = 0;
} else if ($fileAvatar["size"] > $maxSize) {
    echo "File too large";
    $uploadOk = 0;
} else if (!in_array($imageFileType, $type)) {
    echo "File type not allowed, just allowed png, jpeg, jpg, gif";
    $uploadOk = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($uploadOk == 1) {
        if (move_uploaded_file($fileAvatar["tmp_name"], $targetFile)) {
            $name = basename($fileAvatar["name"]);
            echo "
            <div style='width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;'>
                <div style='position: relative; background: #fff; border: 1px solid #000; border-radius: 10px; width: 500px;
                    height: 500px; padding: 20px; box-shadow: 1px 1px 10px #ccc; align-items: center;
                    flex-direction: column; justify-content: center; display: flex;'>
                            <button onclick='window.location.href=\"index.php\"' style='position: absolute; top: 10px; left: 10px'>Back to home.</button>
                            <p>The file $name has been uploaded</p>
                            <br>
                            <img src='$targetFile' alt='avatar' width='200'>
                        </div>
                </div>";
        } else {
            echo "Your File not uploaded";
        }
    } else {
        echo "Your File not uploaded";
    }
}
