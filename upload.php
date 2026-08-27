<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

// 1. Cek Folder
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0755, true);
}

// 2. Cek File Masuk
if (isset($_FILES["file"])) {
    $file = $_FILES["file"];
    $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
    
    // Validasi Ekstensi (Hanya Gambar)
    $allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
    if (!in_array(strtolower($ext), $allowed)) {
        echo json_encode(["status" => "error", "message" => "Format file tidak dibenarkan (Hanya JPG, PNG, WEBP)."]);
        exit;
    }

    // Buat Nama Unik (Supaya tidak tertimpa)
    $new_name = "porto_" . time() . "_" . rand(100,999) . "." . $ext;
    $target_file = $target_dir . $new_name;

    // Pindahkan File
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        echo json_encode(["status" => "success", "url" => $target_file]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal upload. Cek permission folder."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Tidak ada file dikirim."]);
}
?>