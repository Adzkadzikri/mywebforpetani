<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    $id = $_POST['id'];
    $pertanyaan_teks = $_POST['pertanyaan_teks']; // Ambil teks pertanyaan dari POST
    $jawaban_teks = $_POST['jawaban_teks']; // Ambil teks jawaban dari POST
    $query = "INSERT INTO laporan (type, item_id, pertanyaan_teks, jawaban_teks) VALUES (?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("si", $type, $id, $pertanyaan_teks, $jawaban_teks);
    $stmt->execute();
    echo "Laporan telah dikirim.";
}
?>

