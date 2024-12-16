<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Orang</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
        
        <!-- Font and Style Links -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
            .table th, .table td {
                text-align: center;
                vertical-align: middle;
            }
            .table th {
                background-color: #343a40;
                color: white;
            }
            .table td {
                background-color: #f8f9fa;
            }
            .btn-danger {
                background-color: #e74c3c;
                border-color: #e74c3c;
                color: white;
                font-size: 16px;
                padding: 10px 20px;
                border-radius: 5px;
            }
            .btn-danger:hover {
                background-color: #c0392b;
                border-color: #c0392b;
                color: white;
                font-size: 16px;
                padding: 10px 20px;
                border-radius: 5px;
            }
            .container {
                margin-top: 30px;
            }
            .table-container {
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body>
        <!-- Navbar (unchanged) -->
        <section class="top-area">
            <div class="header-area">
                <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.php">Tsunami<span>Center</span></a>
                        </div>
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="scroll"><a href="index.php#home">About</a></li>
                                <li class="scroll"><a href="index.php#works">Mitigation</a></li>
                                <li class="scroll"><a href="index.php#explore">News</a></li>
                                <li class="scroll"><a href="index.php#reviews">History</a></li>
                                <li class="scroll active"><a href="index.php#blog">Aduan</a></li> 
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

        <!-- Main Content -->
        <div class="container">
            <h2 class="text-center mb-4">Data Orang Hilang</h2>
            <br><br>
            <div class="d-flex justify-content-end mb-3">
                <a href="create.php" class="btn btn-danger">Tambah Data</a>
            </div>
            <br>
            <!-- Table Container -->
            <div class="table-container">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Pelapor</th>
                            <th>No HP</th>
                            <th>Nama Korban</th>
                            <th>Lokasi</th>
                            <th>Ciri</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM missing");
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nm_pelapor']}</td>
                                <td>{$row['no_hp']}</td>
                                <td>{$row['nm_korban']}</td>
                                <td>{$row['lokasi']}</td>
                                <td>{$row['ciri']}</td>
                                <td>{$row['status']}</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

