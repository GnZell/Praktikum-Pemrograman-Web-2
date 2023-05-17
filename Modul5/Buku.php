<?php 
require('model.php');
if (isset($_GET['id_buku'])){
    hapusbuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url("gambar/bgbook.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

table {
  width: 100%;
  max-width: 1000px;
  margin: 0 auto;
}

th, td {
  padding: 12px;
  text-align: center;
  border: none; /* Menghapus border */
}

th {
  background-color: #f8f9fa;
  color: #333;
  font-weight: bold;
}

td {
  background-color: #fff;
  color: #333;
}

.btn {
  position: relative;
  font-size: 17px;
  text-transform: uppercase;
  text-decoration: none;
  padding: 1em 2.5em;
  display: inline-block;
  border-radius: 6em;
  transition: all .2s;
  border: none;
  font-family: inherit;
  font-weight: 500;
  color: black;
  background-color: #ccc;
}

.btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
  transform: translateY(-1px);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn::after {
  content: "";
  display: inline-block;
  height: 100%;
  width: 100%;
  border-radius: 100px;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  transition: all .4s;
}

.btn::after {
  background-color: #fff;
}

.btn:hover::after {
  transform: scaleX(1.4) scaleY(1.6);
  opacity: 0;
}
</style>
<title>Daftar Buku E-Perpus</title>
</head>
<body>
  <h2 style="text-align:center;">Daftar Buku</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      tampilbuku();
      ?>
    </tbody>
  </table>
  <br></br>
  <a href="formbuku.php"><button class="btn">Tambah Buku</button></a> <br></br>
  <a href="index.php"><button class="btn">KEMBALI</button></a>
  <a href="Member.php"><button class="btn">Anggota</button></a>
  <a href="Peminjaman.php"><button class="btn">PEMINJAMAN</button></a>
</body>
</html>