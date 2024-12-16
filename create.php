<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--title of site-->
    <title>Tambah Data Laporan</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
   
    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--slick.css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css" >  
    
    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Custom form styles -->
    <style>
        .form-control, .form-select {
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 3px 6px;
        }

        .form-label {
            font-weight: 600;
            font-size: 1.1rem;
        }

        .card {
            background-color: #f8f9fa;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .card h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #343a40;
        }

        .btn-danger {
            background-color: #d9534f;
            border-color: #d9534f;
            border-radius: 8px;
            padding: 10px 25px;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            border-radius: 8px;
            padding: 10px 25px;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .d-flex {
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <!--header-->
    <section class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">Tsunami<span>Center</span></a>
                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class=" scroll active"><a href="index.html#home">About</a></li>
                            <li class="scroll"><a href="index.html#works">Mitigation</a></li>
                            <li class="scroll"><a href="index.html#explore">News</a></li>
                            <li class="scroll"><a href="index.html#reviews">History</a></li>
                            <li class="scroll"><a href="index.html#blog">Aduan</a></li> 
                            <li class="scroll"><a href="index.html#contact">Contact</a></li>
                        </ul><!--/.nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!--/.container-->
            </nav><!--/nav-->
        </div><!--/.header-area-->
        <div class="clearfix"></div>
    </section><!-- /.top-area-->
    <!-- top-area End -->

    <div class="container my-5">
        <h2 class="text-center mb-4">Tambah Laporan</h2>
        <div class="card p-4 shadow">
            <form action="insert.php" method="POST">
                <div class="mb-3">
                    <label for="nm_pelapor" class="form-label">Nama Pelapor</label>
                    <input type="text" name="nm_pelapor" id="nm_pelapor" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="number" name="no_hp" id="no_hp" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nm_korban" class="form-label">Nama Korban</label>
                    <input type="text" name="nm_korban" id="nm_korban" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="ciri" class="form-label">Ciri</label>
                    <input type="text" name="ciri" id="ciri" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <br>
                    <select name="status" id="status" class="form-select" required>
                        <option value="dicari">Dicari</option>
                        <option value="ditemukan">Ditemukan</option>
                    </select>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-danger">Tambah</button>
                    <a href="daftar.php" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
