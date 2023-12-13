<?php
// Hubungkan ke database MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "topupgame";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Ambil nilai dari form
$id = $_POST['id'];
$server = $_POST['server'];
$email = $_POST['email'];
$diamondType = $_POST['diamondType'];
$paymentMethod = $_POST['paymentMethod'];

// Simpan nilai ke dalam database
$sql = "INSERT INTO mobile_legend (id, server, email, diamond, metode) VALUES ('$id', '$server', '$email', '$diamondType', '$paymentMethod')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan ke MySQL";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
