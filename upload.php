<?php
header('Content-Type: application/json');

// Check if the 'uploads' directory exists; if not, create it
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the file was uploaded
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $uploadPath = $uploadDir . basename($file['name']);

        // Move the uploaded file to the 'uploads' folder
        if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
            echo json_encode(['success' => true, 'filename' => basename($file['name'])]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to save file']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'No file uploaded']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>
