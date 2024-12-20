<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "tsunami";

$connect = mysqli_connect($host, $user, $pass, $db);

if(!$connect) {
    die("Cannot connect to database!");
}
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Tsunami Center</title>

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

        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">

		<!-- untuk MAPS -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>

		<!-- CSS MAP -->
		<style type="text/css">
			#map {
				z-index: 0;
				position: relative;
				padding: 20px;
				width: 100%;
				height: 500px;
			}
		</style>

		<!-- css info histori -->
		<style>
			.single-testimonial-box.hidden {
				display: none;
			}

			.single-testimonial-box.visible {
				display: block;
			}

			/* CSS untuk link Show More */
			.show-more-link, .show-less-link {
				display: inline-block;
				color: #888; /* Warna abu-abu */
				cursor: pointer;
			}

			.show-more-link, .show-less-link:hover {
				color: #555; /* Warna sedikit lebih gelap saat hover */
			}

			/* CSS untuk testimonial carousel */
			.testimonial-carousel {
				display: flex;
				flex-wrap: wrap; /* Membuat testimonial bisa membungkus ke baris baru jika lebih dari 3 kolom */
				justify-content: space-between; /* Menyebarkan ruang antar kotak */
				gap: 20px; /* Jarak antara kotak testimonial */
			}

			/* CSS untuk setiap kotak testimonial */
			.single-testimonial-box {
				width: 32%; /* 3 kotak dalam satu baris, jadi 100% dibagi 3 */
				box-sizing: border-box; /* Menjamin padding dan border tidak mempengaruhi lebar elemen */
				border: 1px solid #ddd; /* Tambahkan border untuk kotak */
				padding: 20px;
				background-color: #f9f9f9;
				border-radius: 8px;
				transition: all 0.3s ease; /* Transisi jika ingin animasi */
				max-height: 350px; /* Menambahkan batasan tinggi */
    			overflow-y: auto; /* Menambahkan scroll jika konten lebih panjang */
			}

			/* CSS untuk kotak testimonial saat diperlihatkan */
			.single-testimonial-box.visible {
				display: block; /* Menampilkan testimonial */
			}

			/* Responsif untuk tampilan di perangkat lebih kecil */
			@media (max-width: 768px) {
				.single-testimonial-box {
					width: 48%; /* 2 kotak dalam satu baris untuk layar lebih kecil */
				}
			}

			@media (max-width: 480px) {
				.single-testimonial-box {
					width: 100%; /* 1 kotak dalam satu baris untuk layar lebih kecil */
				}
			}
		</style>

		<style>
		.single-blog-item-img {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100%; /* Sesuaikan tinggi container */
			background-color: #fff; /* Opsional: warna kotak putih */
		}

		.single-blog-item-img img {
			max-width: 100%;
			max-height: 100%;
			object-fit: contain; /* Menjaga proporsi gambar agar tidak terdistorsi */
		}
		</style>
    </head>
	
	<body>
		<!--Navigation Start -->
		<section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.php">Tsunami<span> Center</span></a>

			            </div>
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class=" scroll active"><a href="#home">About</a></li>
			                    <li class="scroll"><a href="#works">Mitigation</a></li>
			                    <li class="scroll"><a href="#explore">Berita</a></li>
			                    <li class="scroll"><a href="#reviews">History</a></li>
			                    <li class="scroll"><a href="#blog">Aduan</a></li> 
			                </ul>
			            </div>
			        </div>
			    </nav>
			</div>
		    <div class="clearfix"></div>
		</section>

		<!--welcome-hero start -->
		<section id="home" class="welcome-hero">
			<div class="container">
				<div class="welcome-hero-txt">
					<h2 style="color: azure;">keselamatan adalah tanggung jawab bersama <br> bersiaplah hari ini untuk masa depan yang aman </h2>
					<p>
						Tsunami datang tanpa peringatan, tapi kita bisa bersiap! Kenali tanda-tanda, lindugi diri dan ornag tercinta 
					</p>
				</div>
			</div>
		</section>

		<!--list-topics start -->
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									 <i class="flaticon-gps-fixed-indicator"></i>
								</div>
								<h2><a href="teori.html">About Tsunami</a></h2>
								<p><a href="teori.html" style="text-decoration: none; color: inherit;">click for more</a></p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-travel"></i>
								</div>
								<h2><a href="#explore">Berita Tsunami</a></h2>
								<p><a href="#explore" style="text-decoration: none; color: inherit;">click for more</a></p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-building"></i>
								</div>
								<h2><a href="#works">Mitigation</a></h2>
								<p>click for more</p>							
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-pills"></i>
								</div>
								<h2><a href="#blog">Aduan</a></h2>
								<p><a href="#blog" style="text-decoration: none; color: inherit;">click for more</a></p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<i class="flaticon-transport"></i>
								</div>
								<h2><a href="#reviews">History Bencana</a></h2>
								<p><a href="#reviews" style="text-decoration: none; color: inherit;">click for more</a></p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<!--works start -->
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">
					<h2>Mitigasi Tsunami</h2>
					<p>Bagikan pengetahuanmu tentang tsunami. Satu informasi kecil, menyelamatkan banyak nyawa</p>
					<div class="works-content">
						<div class="row">
							<!-- Mitigasi Pra Bencana -->
							<div class="col-md-4 col-sm-6">
								<div class="single-how-works">
									<div class="single-how-works-icon">
										<i class="flaticon-lightbulb-idea"></i>
									</div>
									<h2><a href="prabencana.html">Mitigasi <span>Pra Bencana</span></a></h2>
									<p>
										Langkah-langkah persiapan dan perencanaan untuk menghadapi potensi bencana secara efektif.
									</p>
									<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='prabencana.html'">
										Selengkapnya
									</button>
								</div>
							</div>
					
							<!-- Mitigasi Saat Bencana -->
							<div class="col-md-4 col-sm-6">
								<div class="single-how-works">
									<div class="single-how-works-icon">
										<i class="flaticon-networking"></i>
									</div>
									<h2><a href="saatbencana.html">Mitigasi <span>Saat Bencana</span></a></h2>
									<p>
										Tindakan dan langkah darurat yang dilakukan untuk menyelamatkan diri saat bencana terjadi.
									</p>
									<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='saatbencana.html'">
										Selengkapnya
									</button>
								</div>
							</div>
					
							<!-- Mitigasi Pasca Bencana -->
							<div class="col-md-4 col-sm-6">
								<div class="single-how-works">
									<div class="single-how-works-icon">
										<i class="flaticon-location-on-road"></i>
									</div>
									<h2><a href="pascabencana.html">Mitigasi <span>Pasca Bencana</span></a></h2>
									<p>
										Langkah pemulihan dan penanganan dampak bencana untuk mendukung komunitas yang terdampak.
									</p>
									<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='pascabencana.html'">
										Selengkapnya
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</section>

		<!--explore start -->
		<section id="explore" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>Berita Tsunami</h2>
					<p>Berita-berita mengenai bencana tsunami yang terjadi di Indobesia</p>
				</div>
				<div class="explore-content">
					<div class="row">
						<div class=" col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/berita/b1.jpg" alt="berita image">
									<div class="single-explore-img-info">
										<div class="single-explore-image-icon-box">
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-1">
									<h2><a href="#">Tsunami Aceh, Bencana Terbesar di Indonesia pada 2004 </a></h2><br>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-12">
												<p>
													Tsunami Aceh terjadi pada hari Minggu, 26 Desember 2004 silam dengan guncangan gempa sebesar 9,1 hingga 9,3 SR 
												</p>
											</div>
										</div>
									</div>
									<br>
									<center>
									<button 
										class="welcome-hero-btn how-work-btn" 
										onclick="window.location.href='https://www.kompas.com/stori/read/2023/08/03/140000379/tsunami-aceh-bencana-terbesar-di-indonesia-pada-2004'">
										selengkapnya
									</button>
								</center>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/berita/b2.jpg" alt="berita image">
									<div class="single-explore-img-info">
										<div class="single-explore-image-icon-box">
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-2">
									<h2><a href="#">Sore di Palu dan Donggala: Gempa, Tsunami, dan Likuifasi</a></h2>
									<br>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-12">
												<p>
													Gempa bermagnitudo 7,4 SR mengguncang kota Palu dan Donggala dengan pusat gempa 10 km yang menyebabkan tsunami setinggi 6 meter dengan kecepatan 800 km/jam juga disertai likuifasi
												</p>
											</div>
										</div>
									</div>
									<br>
									<center>
									<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='https://search.app?link=https%3A%2F%2Fnews.detik.com%2Fberita%2Fd-4361370%2Fsore-di-palu-dan-donggala-gempa-tsunami-dan-likuifaksi&utm_campaign=aga&utm_source=agsadl2%2Csh%2Fx%2Fgs%2Fm2%2F4'">
										selengkapnya
									</button>
								</center>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/berita/b3.jpg" alt="berita image">
									<div class="single-explore-img-info">
										<div class="single-explore-image-icon-box">
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-3">
									<h2><a href="#">Hari ini dalam Sejarah: Tsunami Selat Sunda Menewaskan 437 Orang</a></h2>
									<br>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-12">
												<p>
													Gelombang tsunami di Selat Sunda terjadi pada hari Sabtu, 22 Desember 2018 malam hingga Minggu pagi menewaskan sedikitnya 437 orang 
												</p>
											</div>
										</div>
									</div>
									<br>
									<center>
									<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='https://amp.kompas.com/tren/read/2021/12/22/091202565/hari-ini-dalam-sejarah-tsunami-selat-sunda-menewaskan-437-orang'">
										selengkapnya
									</button>
								</center>
								</div>
							</div>
						</div>
						<div class=" col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/berita/b4.jpg" alt="berita image">
									<div class="single-explore-img-info">
										<div class="single-explore-image-icon-box">
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-4">
									<h2><a href="#">Kilas Balik Gempa Mentawai 25 Oktober 2010, Disertai Tsunami dan Ratusan Orang Meninggal</a></h2>
									<br>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-12">
												<p>
													Gempa bumi yang terjadi pada 25 Oktober 2010 memiliki kekuatan sekitar 7,2 SR. Gempa ini terjadi di dasar laut sejauh 10 km sehingga menyebabkan tsunami dengan ketinggian 3 meter yang merusak lingkungan sekitar lokasi
												</p>
											</div>
										</div>
									</div>
									<br>
									<center>
									<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='https://search.app?link=https%3A%2F%2Fwww.tempo.co%2Fpolitik%2Fkilas-balik-gempa-mentawai-25-oktober-2010-disertai-tsunami-dan-ratusan-orang-meninggal-128351&utm_campaign=aga&utm_source=agsadl2%2Csh%2Fx%2Fgs%2Fm2%2F4'">
										selengkapnya
									</button>
								</center>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/berita/b5.jpg" alt="berita image">
									<div class="single-explore-img-info">
										<div class="single-explore-image-icon-box">
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-2">
									<h2><a href="#">Gempa NTT dan Trauma Tahun 1992</a></h2>
									<br>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-12">
												<p>
													Bencana tsunami diketahui pernah menghantam Pulau Flores bagian tengah dan timur pada 29 tahun lalu tepatnya 12 Desember 1992. Saat itu lebih dari 1.500 orang dinyatakan meninggal, 500 orang hilang, dan ribuan bangunan rusak. Kala itu gelombnag setinggi 6 hingga 25 menet menyapu wilayah daratan sejauh 300 meter setelah gempa berkekuatan 7,5 SR mengguncang wilayah yang masuk dalam Provinsi Nusa Tenggara Timur. Pusat gempa terdeteksi terletak di kedalaman 36 km di Laut Sawu di lepas Pantai Maumere. Rumah penduduk, tempat ibadah, gedung-gedung sekolah, rumah sakit, dan beragam fasilitas umum lainnya porak-poranda akibat guncangan gempa dan tsunami. Dua kabupaten yang peling terdampak dari kejadian ini adalah Kabupaten Sikka dan Kabupaten Ende.
												</p>
											</div>
										</div>
									</div>
									<br>
									<center>
									<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='https://search.app?link=https%3A%2F%2Fregional.kompas.com%2Fread%2F2021%2F12%2F15%2F060000678%2Fgempa-ntt-dan-trauma-tragedi-tsunami-flores-tahun-1992%3Fpage%3Dall&utm_campaign=aga&utm_source=agsadl2%2Csh%2Fx%2Fgs%2Fm2%2F4'">
										selengkapnya
									</button>
								</center>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/berita/b6.jpg" alt="berita image">
									<div class="single-explore-img-info">
										<div class="single-explore-image-icon-box">
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-5">
									<h2><a href="#">Peringatan Tragedi Tsunami Pangandaran: Mengenang 18 Tahun Tragedi yang Tidak Pernah Terlupakan</a></h2>
									<br>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-12">
												<p>
													Pada tanggal 17 Juli 2006, tragedi besar melanda Pantai Pangandaran, Jawa Barat. Terjadinya tsunami dahsyat diakibatkan oleh gempa bumi dengan kekuatan 7,8 SR mengguncang wilayah ini dan meninggalkan luka mendalam bagi masyarakat. Gempa ini memicu gelombang tsunami setinggi 5 hingga 7 meter yang menghantam pesisir Pangandaran dan sekitarnya. Korban jiwa akibat tsunami ini mencapai lebih dari 6000 orang, sementara ribuan lainnya mengalami luka-luka dan kehilangan tempat tinggal. Tragedi ini juga merusak infrastruktur dan menyebabkan kerugian materi yang tidak sedikit. Setiap tahun, peringatan tragedi ini menjadi momen penting.
												</p>
											</div>
										</div>
									</div>
									<br>
									<center>
									<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='https://www.mypangandaran.com/blog/read/ragam/534/peringatan-tragedi-tsunami-pangandaran-mengenang-18-tahun-tragedi-yang-tidak-pernah-terlupakan'">
										selengkapnya
									</button>
								</center>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--reviews start -->
		<section id="reviews" class="reviews">
			<div class="section-header">
				<h2>History Tsunami</h2>				
			</div><!--/.section-header-->
			<div class="container" style="width: 90%;">
				<div id='map'></div>
			</div>
			<div class="reviews-content">
				<div class="container" style="width: 90%;">
				<div class="testimonial-carousel">
					<?php 
					$sql = "select id, tanggal, waktu, latitude, longitude, magnitudo, sumber_tsunami, catatan from histori";
					$q = mysqli_query($connect, $sql);
					$count = 0;
					while ($row = mysqli_fetch_assoc($q)) { 
						$count++;
						$sumber = htmlspecialchars($row['sumber_tsunami'], ENT_QUOTES);
						$magnitudo = htmlspecialchars($row['magnitudo'], ENT_QUOTES);
						$tanggal = htmlspecialchars($row['tanggal'], ENT_QUOTES);
						$waktu = htmlspecialchars($row['waktu'], ENT_QUOTES);
						$catatan = htmlspecialchars($row['catatan'], ENT_QUOTES);

						$class = $count <= 3 ? "visible" : "hidden";
					?>
						<div class="single-testimonial-box <?=$class?>">
							<div class="testimonial-description">
								<div class="testimonial-info">
									<div class="testimonial-person">
										<h1><?=$sumber?></h1>
										<h3><?=$magnitudo?>M</h3>
										<div class="testimonial-person-star">
											<?=$tanggal?>, <?=$waktu?>
										</div>
									</div><!--/.testimonial-person-->
								</div><!--/.testimonial-info-->
								<div class="testimonial-comment">
									<p style="text-align: justify;">
										<?=$catatan?>
									</p>
								</div><!--/.testimonial-comment-->
							</div><!--/.testimonial-description-->
						</div><!--/.single-testimonial-box-->
					<?php } ?>
					<a href="javascript:void(0);" id="show-more-link" class="show-more-link"><u>Show More</u></a>
					<a href="javascript:void(0);" id="show-less-link" class="show-less-link" style="display:none;"><u>Show Less</u></a>
				</div>
				</div>
			</div>

		</section>

		<!-- statistics strat -->
		<section id="statistics"  class="statistics">
			<div class="container">
				<div class="statistics-counter"> 
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">175 </div>
							</div><!--/.statistics-content-->
							<h3>Peristiwa</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">1629</div> 
							</div><!--/.statistics-content-->
							<h3>Mulai dari</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">2016</div> 
							</div><!--/.statistics-content-->
							<h3>Hingga Tahun</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">500</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>Korban Jiwa</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section>

		<!-- Blog Start -->
		<section id="blog" class="blog">
			<div class="container centered-container">
			<div class="section-header">
				<h2>Daftar Orang Hilang</h2>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<!-- Item 1 -->
						<div class="col-md-6 col-sm-12">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="assets/images/blog/bg2.jpg" alt="blog image" class="img-fluid center-img">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="daftar.php">Find the name here</a></h2>
									<p>
										Halaman ini berfungsi sebagai platform informasi untuk membantu menemukan orang-orang yang dilaporkan hilang.
									</p>
								</div>
							</div>
						</div>

						<!-- Form Section -->
						<div class="col-md-6 col-sm-12">
							<div class="card p-4 shadow">
								<h3 class="text-center mb-3">Tambah Data Laporan</h3>
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
										<label for="ciri" class="form-label">Umur</label>
										<input type="text" name="ciri" id="ciri" class="form-control" required>
									</div>
									<div class="mb-3">
										<label for="status" class="form-label">Status</label>
										<br><select name="status" id="status" class="form-select" required>
										<option value="dicari">Dicari</option>
										<option value="ditemukan">Ditemukan</option>
									</select>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-danger">Tambah</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <a class="navbar-brand" href="index.html">Tsunami<span>Center</span></a>
				            </div>
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							<p>
								&copy;copyright. designed and developed by TsunamiCenter
							</p>
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<a href="https://www.facebook.com/profile.php?id=100064544566008"><i class="fa fa-facebook"></i></a>	
								<a href="https://x.com/infoBMKG"><i class="fa fa-twitter"></i></a>
								<a href="https://www.linkedin.com/school/upn-yogyakarta/posts/?feedView=all"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
			</div>
        </footer>
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!-- slick.min.js
        <script src="assets/js/slick.min.js"></script> -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
		<!-- script maps -->
		<script type="text/javascript">
			var locations = [
				<?php
					$sql = "select id, tanggal, waktu, latitude, longitude, magnitudo from histori";
					$q = mysqli_query($connect, $sql);
					$locations = [];
					while ($row = mysqli_fetch_assoc($q)) {
						$popupContent = "Tanggal: ".$row['tanggal'].
										"<br>Waktu: ".$row['waktu'].
										"<br>Magnitudo: ".$row['magnitudo']."M";
						$locations[] = '["'.$popupContent.'", '.$row['latitude'].', '.$row['longitude'].']';
					}
					echo implode(",\n", $locations);
				?>
			];

			var map = L.map('map').setView([-1.0944148303884083, 116.30786556865158], 5);
			mapLink =
			'<a href="http://openstreetmap.org">OpenStreetMap</a>';
			L.tileLayer(
			'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: '&copy; ' + mapLink + ' Contributors',
				maxZoom: 18,
			}).addTo(map);

			for (var i = 0; i < locations.length; i++) {
			marker = new L.marker([locations[i][1], locations[i][2]])
				.bindPopup(locations[i][0])
				.addTo(map);
			}
		</script>

		<!-- script info histori -->
		<script>
			document.addEventListener("DOMContentLoaded", function () {
			const showMoreLink = document.getElementById("show-more-link");
			const showLessLink = document.getElementById("show-less-link");
			const allTestimonials = document.querySelectorAll(".single-testimonial-box");

			// Event untuk Show More
			showMoreLink.addEventListener("click", function () {
				// Menampilkan semua testimonial
				allTestimonials.forEach(function (box) {
					box.classList.add("visible");
					box.classList.remove("hidden");
				});

				// Sembunyikan link Show More dan tampilkan Show Less
				showMoreLink.style.display = "none";
				showLessLink.style.display = "inline-block";
			});

			// Event untuk Show Less
			showLessLink.addEventListener("click", function () {
				// Menyembunyikan testimonial yang lebih dari 3
				allTestimonials.forEach(function (box, index) {
					if (index >= 3) {
						box.classList.add("hidden");
						box.classList.remove("visible");
					}
				});

				// Sembunyikan link Show Less dan tampilkan Show More
				showLessLink.style.display = "none";
				showMoreLink.style.display = "inline-block";
			});
		});
		</script>
    </body>
</html>