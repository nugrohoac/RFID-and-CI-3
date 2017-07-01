<!DOCTYPE html>
 <html>
 <head>
  <title>EDIT DATA</title>

 </head>
 <body>
 <a href="<?php echo base_url() ?>" class="menu">BERANDA</a>
  <h1>EDIT DATA</h1>

   <form action="<?php echo base_url('mapres/editProcess'); ?>" method="POST">
    <?php echo validation_errors(); ?>
    <label>Nama Awal</label><br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="text" name="nama_awal" autofocus placeholder="nama awal" value="<?php echo $nama_awal; ?>"> <br> <br>

    <label>Nama Akhir</label> <br>
    <input type="text" name="nama_akhir" placeholder="nama awal" value="<?php echo $nama_akhir; ?>"> <br> <br>

    <label>Alamat</label> <br>
    <input type="text" name="alamat" placeholder="alamat" value="<?php echo $alamat; ?>"> <br> <br>

    <label>Id Gelang</label> <br>
    <input type="text" name="idGelang" placeholder="Scan Gelang anda" value="<?php echo $idGelang; ?>"> <br> <br>
  
    <button type="submit" name="tambah" value="hmm">Update</button>
    <button type="reset" value="Reset">Reset</button>
 </body>
 </html>
