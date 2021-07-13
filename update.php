<?php
require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $feedback = $_POST['feedback'];

    $dt = $conn->query("UPDATE tb_feedback SET nama='$nama', nim='$nim', feedback='$feedback' WHERE id = '$id'");

    if ($dt) {
        echo "<script>alert('Feedback berhasil diubah'); window.location.href='showData.php'</script>";
    }else{
        echo "<script>alert('Feedback gagal diubah'); window.location.href='showData.php'</script>";
    }
}