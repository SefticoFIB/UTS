<?php
$servername = "DB-redlock";
$username = "php_docker";
$password = "password";
$dbname = "redlock-db";

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) as total FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Menampilkan jumlah user
    $row = mysqli_fetch_assoc($result);
    echo "Jumlah user: " . $row["total"];
} else {
    echo "0 results";
}