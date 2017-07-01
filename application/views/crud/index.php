<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>
</head>
<body>
<a href="<?php echo base_url(); ?>" class="menu">BERANDA</a> ||
<a href="<?php echo base_url('mapres/tambah'); ?>" class="menu">TAMBAH DATA</a> ||
<a href="<?php echo base_url('mapres/search'); ?>" class="menu">SEARCH</a>
<br>
<br>
<?php
    //print_r($all); 
    //foreach ($all as $key => $value) {
       //echo $value['alamat'];
?>


<?php if($this->session->flashdata('nama')) {?>
<p> <?php echo $this->session->flashdata('nama'); ?> </p>
<?php } ?>
<table border="1" cellspacing="0" cellpadding="4">
    <thead style="text-align:center;background-color:#1abc9c">
        <tr>
            <td>No</td>
            <td>Nama awal</td>
            <td>Nama akhir</td>
            <td>Alamat</td>
            <td>Id gelang</td>
            <td colspan=2>Aksi</td>
        </tr>
    </thead>

    <tbody>
    <?php $no=1; foreach($all as $value) { ?>
        
            <tr>
        
            <td> <?php echo $no; ?></td>
            <td> <?php echo $value['nama_awal']; ?> </td>
            <td> <?php echo $value['nama_akhir']; ?> </td>
            <td> <?php echo $value['alamat']; ?> </td>
            <td> <?php echo $value['idGelang']; ?> </td>
            <td>
            <form action="<?php echo base_url('Mapres/edit'); ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $value['id_pst']; ?>">
                    
                    <!--<button style="background-color:#9780F9" type="submit" value="ubah">Edit</button>-->
                    <button style="background-color:#9780F9" type="submit" value="hapus">Edit</button>
            </form>    
            
            <td>
                <form action="<?php echo base_url('Mapres/hapus'); ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $value['id_pst']; ?>">
                    
                    <!--<button style="background-color:#9780F9" type="submit" value="ubah">Edit</button>-->
                    <button style="background-color:#9780F9" type="submit" value="hapus">Hapus</button>
            </form>    
            </td>
            
            </td>
            
        </tr>
        
    </tbody>

    <?php $no++; } ?>
  

</table>

</body>
</html>