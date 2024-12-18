<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Buku</title>
    <style> h2 {
            text-align: center;
        }
        table {
            width: 600px;
            border: 1px solid black;
            border-collapse: collapse;
            margin: 30px auto;
        }
        table td {
            padding: 10px;
            font-size: 15px;
            vertical-align: top;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            font-size: 15px;
            box-sizing: border-box;
        }
        .form-buttons {
            text-align: center;
        }
        .form-buttons input {
            width: 100px;
            padding: 5px;
            font-size: 14px;
            cursor: pointer;
        }
        input[type="reset"]:hover {
            background: red;
            border: 1px solid black;
            color: white;
        }
        input[type="submit"]:hover {
            background: green;
            border: 1px solid black;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Form Buku Tamu</h2>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td><input id="nim" type="integer" name="nim" placeholder="Masukkan NIM" size="11" required></td>
            </tr>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input id="nama" type="varchar" name="nama" placeholder="Masukkan Nama Lengkap" size="30" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input id="email" type="varchar" name="email" placeholder="Masukkan Alamat Email" size="30" required></td>
            </tr>
            <tr>
                <td><label for="pesan">Pesan</label></td>
                <td>
                    <textarea id="pesan" name="pesan" placeholder="Masukkan pesan atau kalimat panjang..." rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="form-buttons">
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" name="batal" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
