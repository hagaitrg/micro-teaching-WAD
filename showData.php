<?php
require_once 'koneksi.php';

$data = $conn->query('SELECT * FROM tb_feedback');
$no = 1;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Feedback Praktikum - Lihat Data</title>
    <style>
        .card{
            -webkit-box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.75);
            box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.75);
        }

        button,a {
            -webkit-box-shadow: 4px 4px 0px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 4px 4px 0px 0px rgba(0,0,0,0.75);
            box-shadow: 4px 4px 0px 0px rgba(0,0,0,0.75);
        }
    </style>

  </head>
  <body>
    <div class="container">
        <div class="row mb-3 mt-5">
            <div class="col-sm-6">
                <a class="btn btn-info" href="inputData.php">Tambah Data +</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card rounded-0">
                    <div class="card-header bg-light text-dark text-center">
                        <strong>Data Feedback</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Feedback</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($f = $data->fetch_assoc()): ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $f['nama'] ?></td>
                                    <td><?= $f['nim']?></td>
                                    <td><?= $f['feedback'] ?></td>
                                    <td>
                                        <a class="btn btn-warning mb-2" href="editData.php?id=<?= $f['id'] ?>">Edit</a>
                                        <a class="btn btn-danger ml-1 mb-2" href="delete.php?id=<?= $f['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')" >Delete</a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>