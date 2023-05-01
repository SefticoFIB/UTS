<?php
$servername = "DB-redlock";
$username = "dockerPhp";
$password = "password";
$dbname = "redlock-db";

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menampilkan seluruh isi tabel users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Menampilkan data setiap baris dari tabel
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["ID"] . " - Nama: " . $row["Nama"] . " - Alamat: " . $row["Alamat"] . " - Jabatan: " . $row["Jabatan"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>