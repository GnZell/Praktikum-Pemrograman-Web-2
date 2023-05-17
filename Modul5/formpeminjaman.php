<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}

.container {
  width: 400px;
  background-color: #fff;
  border-radius: 6px;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.container h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.container table {
  width: 100%;
}

.container table td {
  padding: 10px 0;
}

.container input[type="text"],
.container input[type="date"],
.container input[type="datetime-local"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.container button {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 10px 16px;
  border-radius: 4px;
  cursor: pointer;
}

.container button:hover {
  background-color: #45a049;
}

.container form tr:last-child td {
  text-align: right;
}
</style>
<html>
<head>
   <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Edit Data Peminjaman</title>": "<title>Tambah Data Peminjaman</title>" ?> 
</head>
<body><div class="container">
    <h2>Form Peminjaman</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_Peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Kembalian</td>
                <td><input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    ?>
</body>
</html>