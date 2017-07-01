<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>
</head>
<body>
<a href="index.php" class="menu">BERANDA</a> ||
<a href="tambah.php" class="menu">TAMBAH DATA</a>
<br>
<br>
<form action="ubah.php" method="POST">
<table border="1" cellspacing="0" cellpadding="4">
 <tr style="text-align:center;background-color:#1abc9c">
 <?php
    $no = 1;
 ?>
  <td>No</td>
  <td>Nama Hewan</td>
  <td>Tindakan</td>
 </tr>
  
 <tr style="text-align:center">
  <td></td>
  <td></td>
  <td>
   <a href="">Edit</a> ||
   <a href="">Hapus</a>
  </td>
 </tr>

</table>
</form>
</body>
</html>