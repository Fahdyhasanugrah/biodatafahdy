<?php
include 'koneksi.php';

$nama    = $_POST['nama'];
$nim     = $_POST['nim'];
$email   = $_POST['email'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO biodatafahdy (NAMA, NIM, EMAIL, JURUSAN)
        VALUES ('$nama', '$nim', '$email', '$jurusan')";

if (mysqli_query($conn, $sql)) {
    echo "✅ Biodata saved successfully";
} else {
    echo "❌ Failed: NIM or Email already exists";
}
?>

