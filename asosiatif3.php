<?php
    $daftar_anime = [["Nama Anime" => "Naruto Shippuden", "Tanggal Rilis Anime" => "15 Februari 2007", "Jumlah Episode" => "500 Episode", "Foto" => "naruto.jpeg"], 
    ["Nama Anime" => "One Piece", "Tanggal Rilis Anime" => "20 Oktober 1999", "Jumlah Episode" => "850 Episode", "Foto" => "op.jpeg"],
    ["Nama Anime" => "Bleach", "Tanggal Rilis Anime" => "5 Oktober 2004", "Jumlah Episode" => "366 Episode", "Foto" => "pemutih.jpeg"]];

    
?>

<!DOCTYPE html>

<html>  

<head>
    <title>ANIMEHHH</title>

</head>

<body>
    <h1>Best Anime Ever (Big Three)</h1>

    <?php foreach($daftar_anime as $anime){ ?>
        <ul>
            <img src="img/<?php $anime["Foto"]; ?>">  
            
            <li> Nama Anime : <?php echo $anime["Nama Anime"]; ?> </li>
            <li> Tanggal Rilis : <?php echo $anime["Tanggal Rilis Anime"]; ?> </li>
            <li> Jumlah Episode : <?php echo $anime["Jumlah Episode"]; ?> </li>
        </ul>
    
    
    
    <?php } ?>

    

</body>







</html>