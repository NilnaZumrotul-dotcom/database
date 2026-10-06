<?php
include "services/koneksi.php";

$sql = "SELECT mahasiswa.nama, mahasiswa.npm, kelas.nama_kelas FROM mahasiswa
JOIN kelas
ON mahasiswa.id_kelas = kelas.id_kelas";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "nama: " . $row['nama'] . " npm: " . $row['npm'] . "<br>". "kelas: ". $row['nama_kelas'];
}
?>