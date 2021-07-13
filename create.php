<?php
require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $feedback = $_POST['feedback'];

    $create = $conn->query("INSERT INTO tb_feedback VALUES('','$nama','$nim','$feedback')");

    if ($create) {
        echo "<script>alert('Berhasil input Feedback'); window.location.href='showData.php'</script>";
    }else{
        echo "<script>alert('Gagal input Feedback'); window.location.href='inputData.php'</script>";
    }
}

?>