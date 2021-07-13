<?php 
require_once 'koneksi.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $del = $conn->query("DELETE FROM tb_feedback WHERE id = '$id'");

    if ($del) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='showData.php'</script>";
    }else {
        echo "<script>alert('Data gagal dihapus'); window.location.href='showData.php'</script>";
      }
}
