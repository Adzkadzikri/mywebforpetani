<?php
include 'config.php'; // Pastikan file ini terhubung dengan database

// Query untuk mengambil data dari tabel jawaban
if (isset($_GET['hapus'])) {
    $idHapus = $_GET['hapus'];
    $queryHapus = "DELETE FROM jawaban WHERE idjawaban = ?";
    $stmt = $koneksi->prepare($queryHapus);
    $stmt->bind_param("i", $idHapus);
    $stmt->execute();
    $stmt->close();
    // Redirect untuk menghindari penghapusan berulang pada refresh halaman
    header("Location: questionadmin.php");
    exit;
}
$query = "SELECT jawaban.idjawaban, jawaban.idpertanyaan, jawaban.jawaban, jawaban.likes, jawaban.user_id, pertanyaan.pertanyaan AS pertanyaan_teks FROM jawaban JOIN pertanyaan ON jawaban.idpertanyaan = pertanyaan.idpertanyaan JOIN laporan ON laporan.item_id = jawaban.idjawaban WHERE laporan.type = 'jawaban' ORDER BY jawaban.idjawaban DESC";
$result = $koneksi->query($query);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Jawaban</title>
</head>
<body>
    <h1>Daftar Jawaban</h1>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID Jawaban</th><th>ID Pertanyaan</th><th>Pertanyaan</th><th>Jawaban</th><th>Likes</th><th>User ID</th><th>Aksi</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['idjawaban'] . "</td>";
            echo "<td>" . $row['idpertanyaan'] . "</td>";
            echo "<td>" . $row['pertanyaan_teks'] . "</td>"; // Tambahkan ini sebelum kolom jawaban
            echo "<td>" . $row['jawaban'] . "</td>";
            echo "<td>" . $row['likes'] . "</td>";
            echo "<td>" . $row['user_id'] . "</td>";
            echo "<td><a href='?hapus=" . $row['idjawaban'] . "'>Hapus</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada jawaban.";
    }
    $koneksi->close();
    ?>
</body>
</html>

