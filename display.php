
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

// Ambil data dari database
$sql = "SELECT * FROM benda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nama Merk</th><th>Warna</th><th>Jumlah</th></tr>";
    // Output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nama_merk"]."</td><td>".$row["warna"]."</td><td>".$row["jumlah"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 hasil";
}
$conn->close();
?>
