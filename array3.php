<?php
    $daftar = [["Muhammad Wahyu Fadli","09011381823086"],["M Alfian Gunawan","09011381823046"]];


?>

<html>
<!DOCTYPE html>

<head>
    <title>Daftar Mahasiswa</title>

    <style> 
    

    .warna-tulisan-list{
        color: orangered;
    }

    .tipe{
        font-style: bold;
    }

    h2{
        font-family: Arial;
        color: lightcoral;
        text-align: center;
        font-size: 50px;
    }

    .clear{
        clear : both ;
    }
    </style>

</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach($daftar as $d){ ?>
    <ul class="warna-tulisan-list">
        <li class="tipe"> Nama : <?=  $d[0]; ?> </li>
        <li class="tipe"> NIM : <?=  $d[1]; ?> </li>
        
    </ul>
    <?php } ?>
    

    <div class="clear"></div>

    

    
    
    
   

    



</body>





</html>