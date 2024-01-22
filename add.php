<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai input dari formulir
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $jenis_kelamin = $_POST["jenis-kelamin"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];
    $no_hp = $_POST["no-hp"];
    $password = $_POST["password"];
    $tanggal_lahir = $_POST["tanggal-lahir"];
    $website = $_POST["website"];

    // Koneksi ke database
    include("conn.php");

    // Menyiapkan kueri SQL untuk menyimpan data
    $query = "INSERT INTO tabel_biodata (nama, umur, jenis_kelamin, alamat, email, no_hp, password, tanggal_lahir, website) VALUES ('$nama', $umur, '$jenis_kelamin', '$alamat', '$email', '$no_hp', '$password', '$tanggal_lahir', '$website')";

    // Menjalankan kueri
    if ($conn->query($query) === TRUE) {
        // Mengarahkan ke index.php
        header("Location: index.php");
        exit();
    } else {
        
        echo "<script>alert('Error: " . $query . "\\n" . $conn->error . "');</script>";
    }
    // Menutup koneksi
    $conn->close();
}
?>
