<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Sistem Pakar - Pendeteksi Coronavirus</title>
</head>

<body>
    <div class="container">
        <!-- Awal Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><?php include("_header.php"); ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="diagnosa.php">Mulai Diagnosa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="penyakit.php">Daftar Penyakit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div> <!-- Akhir Navbar -->
    <br><br>

    <div class="container">
        <!-- Awal Containter -->
        <div class="jumbotron text-center">
            <h2 class="">Masukkan Data Diri</h2>
            <hr class="my-4">
            <div class="row justify-content-center">
                <div class="col-5">

                    <form action="proses.php" method="POST">
                        <div class="form-group row">
                            <label for="nama" class="col-2 col-form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control col" placeholder="Masukkan Nama..">
                        </div><br>

                        <div class="form-group row">
                            <label for="jk" class="col-2 col-form-label">Gender</label>
                            <select name="jk" id="jk" class="form-control col">
                                <option value="">- Pilih Jenis Kelamin</option>
                                <option value="">Laki-laki</option>
                                <option value="">Perempuan</option>
                            </select>
                        </div><br>

                        <div class="form-group row">
                            <label for="umur" class="col-2 col-form-label">Umur</label>
                            <input type="text" name="umur" id="umur" class="form-control col" placeholder="Masukkan Umur..">
                        </div><br>

                        <div class="form-group row">
                            <label for="alamat" class="col-2 col-form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control col" placeholder="Masukkan Alamat..">
                        </div><br>
                        <input type="submit" class="btn btn-outline-success" name="submit" value="submit"></input>
                        <button type="reset" class="btn btn-outline-danger" onclick="javascript:hapusTeks();">Reset</button>
                    </form>

                </div>
            </div>
            <hr class="my-4">
            <p class="lead">
            </p>
        </div>
    </div> <!-- Akhir Jumbotron -->
    <br><br>

    <footer>
        <!-- Awal Footer -->
        <p class="text-center">
            Develop by<a href="#" style="text-decoration: none;"> Kelompok 7</a>
        </p>
    </footer> <!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>