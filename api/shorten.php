<?php
header("Content-Type: application/json");
include "../db.php";

$data = json_decode(file_get_contents("php://input"), true);
$longUrl = $data['url'] ?? '';

if (empty($longUrl) || !filter_var($longUrl, FILTER_VALIDATE_URL)) {
    echo json_encode(["error" => "Invalid URL"]);
    exit;
}

function generateCode($length = 6) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

$code = generateCode();

$stmt = $conn->prepare("INSERT INTO short_urls (code, long_url) VALUES (?, ?)");
$stmt->bind_param("ss", $code, $longUrl);
$stmt->execute();

echo json_encode([
    "shortUrl" => "http://localhost/shortener/api/redirect.php?c=" . $code
]);
?>
