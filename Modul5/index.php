<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-image: url("gambar/perpus.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        table {
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
        }

        th {
            background-color: white;
            font-weight: bold;
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Perpus</title>
</head>
<body>
    <h2 style ="text-align:center;">Selamat Datang Di E-Perpus</h2>
    <br></br>
    <table style = "margin-left:auto;margin-right:auto;">
        <tr>
            <th>Daftar Buku</th>
            <th>Daftar Anggota</th>
            <th>Daftar Peminjaman</th>
        </tr>
        <tr>
            <td style="background-color: white;"><a href="Buku.php"><img src="gambar/book.png" alt="" border = 0 height= 170 width = 200></a></td>
            <td style="background-color: white;"><a href="Member.php"><img src="gambar/anggota.png" alt=""  border = 0 height= 200s width = 300></a></td>
            <td style="background-color: white;"><a href="Peminjaman.php"><img src="gambar/pinjam.png" alt="" border = 0 height = 170 width = 170 ></a></td>
        </tr>
    </table>
</body>
</html>