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
            <h2 class="">Proses Diagnosa Penyakit</h2>
            <hr class="my-4">
            <div class="row justify-content-center">
                <div class="col-5">

                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Pilih Gejala yang Kamu Alami:</td>
                        </tr>

                        <tr>
                            <td>
                                <form method="post">
                                    <div class="form-check">
                                        <?php
                                        include "koneksi.php";
                                        $koneksi = koneksi();

                                        $sql = "select * from tb_gejala";
                                        $result = mysqli_query($koneksi, $sql);
                                        while ($row = mysqli_fetch_object($result)) {
                                            echo "<input type='checkbox' class='form-check-input' name='evidence[]' value='{$row->id}'"
                                                . (isset($_POST['evidence']) ? (in_array($row->id, $_POST['evidence']) ? " checked" : "") : "")
                                                . "> 
                                                
                                                ({$row->kdgejala}) &rarr; {$row->gejala}<br>";
                                        }
                                        ?>
                                    </div><br>
                                    <input type="submit" value="Proses Diagnosa" class="btn btn-outline-primary">
                                </form>
                            </td>
                        </tr>
                    </table><br>

                    <h2>Menentukan Nilai Densitas (m)</h2>

                    <?php
                    if (isset($_POST['evidence'])) {
                        echo "<div><h5>Gejala yang dipilih:</h5>";
                        $gejala = $_POST['evidence'];
                        foreach ($gejala as $g) {
                            echo "(G" . $g . ") &rarr; ";
                            $sql = "select * from tb_gejala WHERE id='$g'";
                            $result = mysqli_query($koneksi, $sql);
                            while ($data = mysqli_fetch_array($result)) {
                                echo $data['gejala'] . "<br>";
                            }
                        }
                        echo "</div>";
                        $sql = "SELECT GROUP_CONCAT(b.kdpenyakit), a.cf, a.id_evidence
			FROM tb_rules a
			JOIN tb_penyakit b ON a.id_problem=b.id
			WHERE a.id_evidence IN(" . implode(',', $_POST['evidence']) . ") 
            GROUP BY a.id_evidence ORDER BY a.id_evidence ASC ";

                        $result = mysqli_query($koneksi, $sql);
                        $evidence = array();
                        while ($row = mysqli_fetch_row($result)) {
                            $evidence[] = $row;
                        }

                        $no = 0;
                        echo "<br>";
                        echo "<table class='table table-bordered'> ";
                        echo "<tr><td colspan='5'>Tabel Densitas (m)</td></tr>";
                        echo "<tr>";
                        echo "<td><strong>No</strong></td>";
                        echo "<td><strong>Gejala</strong></td>";
                        echo "<td><strong>Penyakit</strong></td>";
                        echo "<td><strong>Densitas</strong></td>";
                        echo "<td><strong>Plausability</strong></td>";
                        echo "</tr>";
                        foreach ($evidence as $kdgejala) {
                            echo "<tr>";
                            $no = $no + 1;
                            echo "<td>$no</td>";
                            echo "<td>";
                            $queryG = mysqli_query($koneksi, "SELECT * FROM tb_gejala WHERE id='$kdgejala[2]' ");
                            $dataG = mysqli_fetch_array($queryG);
                            echo "(G" . $dataG['id'] . ")" . " &rarr; " . $dataG['gejala'] . "<br>";
                            echo "</td>";
                            echo "<td>";
                            print_r($kdgejala[0]);
                            echo "</td>";
                            echo "<td>";
                            print_r($kdgejala[1]);
                            echo "</td>";
                            echo "<td>";
                            print_r(1 - $kdgejala[1]);
                            echo "</td>";
                            echo "</tr>";
                        }
                        unset($kdgejala);
                        echo "</table>";
                    } /* Akhir */
                    ?>

                    <!-- Aturan Kombinasi -->
                    <?php
                    echo "<br>";
                    echo "<table class='table table-bordered'> ";
                    echo "<tr><td colspan='6'>Aturan Kombinasi</td></tr>";
                    foreach ($evidence as $kd) {
                        echo "<td>1";
                        echo "</td>";
                    }
                    echo "</table>";
                    ?>


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