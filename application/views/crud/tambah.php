<!DOCTYPE html>
<html>
<head>
 <title>TAMBAH DATA</title>
 
</head>
<body>  <a href="<?php echo base_url(); ?>" class="menu">BERANDA</a> ||
 <a href="<?php echo base_url('mapres/tambah'); ?>" class="menu">TAMBAH DATA</a>
 <h2>FORM TAMBAH DATA</h2>
 <!--<form action="<?php //echo base_url('mapres/insert'); ?>" method="POST">-->
 <form action="<?php echo base_url('mapres/tambah'); ?>" method="POST">
    <?php echo validation_errors(); ?>
    <label>Nama Awal</label><br>
    <input type="text" name="nama_awal" autofocus placeholder="nama awal" value="<?php echo set_value('nama_awal'); ?>"> <br> <br>

    <label>Nama Akhir</label> <br>
    <input type="text" name="nama_akhir" placeholder="nama awal" value="<?php echo set_value('nama_akhir'); ?>"> <br> <br>

    <label>Alamat</label> <br>
    <input type="text" name="alamat" placeholder="alamat" value="<?php echo set_value('alamat'); ?>"> <br> <br>

    <label>Id Gelang</label> <br>
    <input type="text" name="idGelang" placeholder="Scan gelang anda" value="<?php echo set_value('idGelang'); ?>"> <br> <br>

    <label>Aksi</label> <br>
   
    <button type="submit" name="tambah" value="hmm">Tambah Peserta</button>
    <button type="reset" value="Reset">Reset</button>
  

 </form>
 </body>

