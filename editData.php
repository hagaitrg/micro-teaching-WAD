<?php 
require_once 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $feed = $conn->query("SELECT * FROM tb_feedback WHERE id = '$id'");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Feedback Praktikum - Input Data</title>
    <style>
        .card{
            -webkit-box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.75);
            box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.75);
        }

        .submit,a {
            -webkit-box-shadow: 4px 4px 0px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 4px 4px 0px 0px rgba(0,0,0,0.75);
            box-shadow: 4px 4px 0px 0px rgba(0,0,0,0.75);
        }
    </style>

  </head>
  <body>
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-sm-6">
                <a class="btn btn-info" href="showData.php"><= Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card rounded-0">
                    <div class="card-header bg-light text-dark text-center">
                        <strong>Edit Feedback</strong>
                    </div>
                    <div class="card-body">
                        <?php foreach($feed as $f): ?>
                        <form method="POST" action="update.php">
                            <input type="hidden" name="id" value="<?= $f['id'] ?>">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $f['nama'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $f['nim'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="feedback" class="col-sm-2 col-form-label">Feedback</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control mb-5" id="feedback" name="feedback" rows="3" required><?= $f['feedback'] ?></textarea>
                                    <input type="submit" name="submit" class="btn btn-primary btn-block submit">
                                </div>
                            </div>
                        </form>
                        <?php endforeach; ?>
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