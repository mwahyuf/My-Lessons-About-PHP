<?php

    $mahasiswa = [["Nama" => "Wahyu", "NIM" => "09011381823086", "Jurusan" => "Sistem Komputer", "foto" => "yuh.jpg"],
                    ["Nama" => "Alfian", "NIM" => "09011381823046", "Jurusan" =>  "Teknik Sipil", "foto" => "image.jpg"]];

?>


<!DOCTYPE html>
<html>

<head>
    <title>Asosiatif Kedua</title>
</head>

<body>
    
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs){ ?>

    <ul>
        
        <li> 
            <img src="img/<?php $mhs["foto"]; ?>">
        </li>
        <li> Nama : <?php echo $mhs["Nama"]; ?> </li>
        <li> NIM :<?php echo $mhs["NIM"]; ?> </li>
        <li> Jurusan : <?php echo $mhs["Jurusan"]; ?> </li>
    
    </ul>

    <?php } ?>


</body>




</html>