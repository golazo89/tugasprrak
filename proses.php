<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $agama = htmlspecialchars($_POST["agama"]);
    $jabatan = $_POST["jabatan"];
    $status = $_POST["status"];
    $jumlah_anak = isset($_POST["jumlah_anak"]) ? intval($_POST["jumlah_anak"]) : 0;
} else {
    // Jika form tidak disubmit, redirect ke halaman utama
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Informasi Pegawai</h2>
        <p>Nama Pegawai: <?php echo $nama; ?></p>
        <p>Agama: <?php echo $agama; ?></p>
        <p>Jabatan: <?php echo ucfirst($jabatan); ?></p>
        <p>Status Pernikahan: <?php echo ucfirst($status); ?></p>
        <?php
            if ($status === "menikah") {
                echo "<p>Jumlah Anak: $jumlah_anak</p>";
            }
        ?>
        <a href="index.html">Kembali ke Form</a>
    </div>
</body>
</html>
