<?php
header('Content-Type: application/json');
$uploadDir = 'uploads/';
$fileList = [];

if (is_dir($uploadDir)) {
    $files = scandir($uploadDir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $fileList[] = $file; // Add file to list
        }
    }
}

echo json_encode($fileList);
?>
