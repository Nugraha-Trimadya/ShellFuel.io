<?php
session_start();

// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_bahan_bakar';

$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = md5($_POST['password']); // Gunakan MD5 atau lebih baik lagi hashing seperti bcrypt untuk password

// Cek apakah username dan password cocok
$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$result = $stmt->get_result();

// Jika ada user yang cocok
if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header('Location: landing.php'); // Arahkan ke halaman welcome
} else {
    echo 'Username atau password salah!';
}

$stmt->close();
$conn->close();
?>
