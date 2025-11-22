<?php
include "../db.php";

$code = $_GET['c'] ?? '';

if (!$code) {
    die("Invalid short URL");
}

$stmt = $conn->prepare("SELECT long_url FROM short_urls WHERE code = ?");
$stmt->bind_param("s", $code);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    header("Location: " . $row['long_url']);
    exit;
} else {
    echo "Invalid or expired short link";
}
?>