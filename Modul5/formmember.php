<?php require('Model.php');
if (isset($_GET['id_member'])) {
    editmember();
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
   <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>": "<title>Tambah Member</title>" ?> 
</head>
<body><div class="container">
<h2 style="text-align: center;">Form Anggota</h2>
    <table>
        <form action="" method="post">
            <tr>
                <td>ID Member</td>
                <td><input type="text" name="id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nama Member</td>
                <td><input type="text" name="Nama" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["alamat"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Daftar</td>
                <td><input type="datetime-local" name="daftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal bayar Terakhir</td>
                <td><input type="date" name="bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_member'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    } else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </form>
    </table>
    <?php
    if (isset($_POST['submit'])) {
        tambahmember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    if (isset($_POST['update'])) {
       updatemember($_POST['id_member'],$_POST['Nama'], $_POST['nomor'], $_POST['alamat'], $_POST['daftar'],$_POST['bayar']);
    }
    ?>
    </div>
    </body>
    </html>