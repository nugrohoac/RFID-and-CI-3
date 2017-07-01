<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
</head>
<body>
    <h1>
        <?php echo $head; ?>
    </h1>

    <p>
        <?php
            //echo $semuadata['artikel2']['isi'];
            foreach ($semuadata as $data1 => $value) {
                echo '<h1>', $value['judul'], '</h1>', '<br>';
                // foreach ($data1 as $data2) {
                //     echo $data2;
                // }
                //cara untuk akses array
               // echo $data1['isi'];
            }
        ?>
    </p>
</body>
</html>