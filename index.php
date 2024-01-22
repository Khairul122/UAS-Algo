<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <h2>Formulir Biodata</h2>

    <form action="add.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" required>

        <label for="jenis-kelamin">Jenis Kelamin:</label>
        <select id="jenis-kelamin" name="jenis-kelamin" required>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4" required></textarea>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="no-hp">Nomor HP:</label>
        <input type="tel" id="no-hp" name="no-hp" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="tanggal-lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal-lahir" name="tanggal-lahir" required>

        <label for="website">Website (opsional):</label>
        <input type="url" id="website" name="website">

        <button type="submit">Submit</button>
    </form>
    <br>
    <button><a href="tabel.php" class="back-button">Lihat Data</a></button>
</body>

</html>