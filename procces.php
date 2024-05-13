
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "input_data";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses form jika disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_merk = $_POST['nama_merk'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    // Masukkan data ke database
    $sql = "INSERT INTO benda (nama_merk, warna, jumlah) VALUES ('$nama_merk', '$warna', $jumlah)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    include ('display.php');
}

$conn->close();
?>
