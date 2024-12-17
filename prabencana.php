<!doctype html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Title -->
    <title>Tsunami Center</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #444;
            background-color: #f8f9fa;
        }

        h2, h3 {
            color: #2c3e50;
            text-align: center;
        }

        p, ol {
            font-size: 18px;
            text-align: justify;
            color: #555;
        }

        ol li {
            margin-bottom: 15px;
        }

        .mitigasi-area {
            padding: 60px 20px;
        }

        .mitigasi-area h2 {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .mitigasi-area h3 {
            font-size: 25px;
            font-weight: 600;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #2980b9;
        }

        @media (max-width: 768px) {
            .mitigasi-area {
                padding: 30px 10px;
            }

            .container {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <section class="top-area">
        <div class="header-area">
            <button class="back-button" onclick="window.history.back()">Back</button>
            <nav class="navbar navbar-default bootsnav navbar-sticky navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
                <div class="container"> 
                    <!-- Navbar Header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index">Tsunami<span>Center</span></a>
                    </div>

                    <!-- Navbar Menu -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="scroll"><a href="index#home">About</a></li>
                            <li class="scroll active"><a href="index#works">Mitigation</a></li>
                            <li class="scroll"><a href="index#explore">Berita</a></li>
                            <li class="scroll"><a href="index#reviews">History</a></li>
                            <li class="scroll"><a href="index#blog">Aduan</a></li> 
                        </ul>
                    </div>
            </nav>
        </div>
    </section>

    <!-- Mitigasi Pra-Bencana Tsunami Section -->
    <section id="mitigasi-pra-bencana" class="mitigasi-area">
        <div class="container">
            <h2>MITIGASI PRA-BENCANA TSUNAMI</h2>
            <p>
                Mitigasi pra-bencana tsunami adalah langkah-langkah yang diambil sebelum terjadinya tsunami untuk mengurangi potensi risiko dan dampaknya. Langkah-langkah mitigasi ini meliputi persiapan masyarakat, pembangunan infrastruktur yang tangguh, dan pengembangan sistem peringatan dini.
            </p>
            <h3>Langkah-Langkah Mitigasi Pra-Bencana Tsunami:</h3>
            <ol>
                <li><strong>Pembangunan Sistem Peringatan Dini:</strong> Memasang sistem peringatan dini tsunami yang dapat memberikan peringatan kepada masyarakat pesisir mengenai kemungkinan terjadinya tsunami.</li>
                <li><strong>Edukasi dan Sosialisasi Masyarakat:</strong> Meningkatkan kesadaran masyarakat mengenai bahaya tsunami dan langkah-langkah yang harus diambil jika terjadi tsunami.</li>
                <li><strong>Penyusunan Rencana Evakuasi:</strong> Menyusun dan menguji rencana evakuasi yang jelas dan terstruktur bagi masyarakat di daerah rawan tsunami.</li>
                <li><strong>Penataan Wilayah dan Infrastruktur:</strong> Mengatur tata ruang yang tepat untuk membangun infrastruktur di kawasan pesisir dengan memperhatikan potensi ancaman tsunami.</li>
                <li><strong>Pemeliharaan Lingkungan:</strong> Melakukan konservasi mangrove dan terumbu karang untuk meredam gelombang tsunami yang menuju pantai.</li>
            </ol>
        </div>
    </section>

    <!-- JavaScript Files -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
