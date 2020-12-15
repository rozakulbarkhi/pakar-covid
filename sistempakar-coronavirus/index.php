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
                    </ul>
                </div>
            </div>
        </nav>
    </div> <!-- Akhir Navbar -->
    <br><br>

    <div class="container">
        <!-- Awal Containter -->
        <div class="jumbotron text-center">
            <h2 class="">Selamat Datang di Sistem Pendeteksi <i>Coronavirus</i></h2>
            <hr class="my-4">
            <h5 class="lead" style="text-align: justify; text-indent: 40px;"><i>Coronavirus</i> merupakan keluarga besar virus yang menyebabkan penyakit pernapasan ringan sampai berat, seperti <i>common cold</i> atau
                pilek dan penyakit yang serius seperti MERS (<i>Middle-East Respiratory Syndrome</i>), SARS (<i>Severe Acute Respiratory Syndrome</i>), dan yang terbaru ini adalah penyakit COVID-19. <i>Severe Acute Respiratory Syndrome</i> atau SARS adalah infeksi saluran pernapasan yang disebabkan oleh <i>SARS-Associated CoronaVirus</i> (SARS-CoV). Gejala awalnya mirip dengan influenza, namun dapat memburuk dengan cepat. MERS atau <i>Middle East Respiratory Syndrome</i> adalah suatu subtipe baru dari virus corona yang belum pernah ditemukan menginfeksi manusia sebelumnya. Kebanyakan pasien MERS mengalami gangguan pernapasan akut yang parah, dengan gejala demam, batuk, dan sesak. Sedangkan infeksi virus Corona atau yang biasa disebut sebagai COVID-19, pertama kali ditemukan di Kota Wuhan, China pada akhir Desember 2019. Virus ini menular dengan cepat dan telah menyebar hampir ke semua negara, termasuk Indonesia, hanya dalam kurun waktu beberapa bulan (Pane., 2020).</h5>
            <hr class="my-4">
            <p class="lead">
                <a class="btn btn-outline-primary btn-lg" href="#" role="button">Mulai Diagnosa</a>
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