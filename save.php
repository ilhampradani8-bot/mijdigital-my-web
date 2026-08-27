<?php
// Mencegah Error CORS & Method Not Allowed
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

// Cek apakah data dikirim via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Method Not Allowed. Harus di-upload ke Hosting (cPanel) agar PHP jalan."]);
    exit;
}

// Ambil Data
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Password Admin (Bisa diganti)
$password_admin = "mij123"; 

if (isset($data['password']) && $data['password'] === $password_admin) {
    // Simpan ke file data.json
    if (file_put_contents('data.json', json_encode($data['content'], JSON_PRETTY_PRINT))) {
        echo json_encode(["status" => "success", "message" => "✅ Data Berhasil Disimpan!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "❌ Gagal menulis file. Pastikan permission folder public_html adalah 755."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "⛔ Password Salah!"]);
}
?>