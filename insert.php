<?php
include 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nm_pelapor = $_POST['nm_pelapor'];
    $no_hp = $_POST['no_hp'];
    $nm_korban = $_POST['nm_korban'];
    $lokasi = $_POST['lokasi'];
    $ciri = $_POST['ciri'];
    $status = $_POST['status'];

    // Gunakan prepared statement untuk keamanan
    $stmt = $conn->prepare("INSERT INTO missing (nm_pelapor, no_hp, nm_korban, lokasi, ciri, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nm_pelapor, $no_hp, $nm_korban, $lokasi, $ciri, $status);

    // Eksekusi statement
    if ($stmt->execute()) {
        $message = "Data berhasil ditambahkan!";
    } else {
        $message = "Error: " . $stmt->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Laporan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container my-5">
        <h2 class="text-center mb-4">Tambah Data Laporan</h2>

        <?php if ($message): ?>
            <div class="alert alert-info">
                <?php echo $message; ?>
                <?php if ($message == "Data berhasil ditambahkan!"): ?>
                    <a href="daftar.php" class="alert-link">Lihat Data</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="card p-4 shadow">
            <form action="" method="POST">
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
                    <select name="status" id="status" class="form-select" required>
                        <option value="dicari">Dicari</option>
                        <option value="ditemukan">Ditemukan</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <a href="daftar.php" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
