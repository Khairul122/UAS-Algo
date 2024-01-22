<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php
    // Koneksi ke database
    include("conn.php");

    // Mengambil semua data dari tabel
    $result = $conn->query("SELECT * FROM tabel_biodata");

    // Menampilkan pesan sukses jika ada
    if (isset($_GET["pesan"]) && $_GET["pesan"] == "success") {
        echo "<p style='color: green;'>Data berhasil disimpan.</p>";
    }
    ?>

    <!-- Tabel untuk menampilkan data -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Password</th>
                <th>Tanggal Lahir</th>
                <th>Website</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Menampilkan data dari hasil query
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["umur"] . "</td>";
                echo "<td>" . $row["jenis_kelamin"] . "</td>";
                echo "<td>" . $row["alamat"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["no_hp"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "<td>" . $row["tanggal_lahir"] . "</td>";
                echo "<td>" . $row["website"] . "</td>";
                echo "</tr>";
            }

            // Menutup koneksi
            $conn->close();
            ?>
        </tbody>
    </table>
</body>

</html>
