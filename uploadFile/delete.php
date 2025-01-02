<?php

$path = "uploads/" . $_GET['file'];

if (file_exists($path)) {
    unlink($path);
    echo "File $path has been deleted";
    echo "<button onclick='window.location.href=\"index.php\"'>Back</button>";
}
