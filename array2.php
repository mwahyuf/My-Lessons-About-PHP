<?php 
    $array = [5,4,3,11,12];

?>
<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <title> Latihan Array Dengan Looping </title>

    <style>
       .square{
            width: 50px;
            height: 50px;
            background-color: greenyellow;
            text-align: center;
            line-height: 50px;
            margin: 40px;
            float: right;
       }
       
       .clear{ clear: both ;}

    </style>

</head>

<body>

       <?php for($i=0;$i<count($array);$i++){ ?>
           <div class="square"> <?php echo $array[$i]; ?> </div>
       
       <?php } ?>

       <div class="clear"></div>

       <?php foreach($array as $arr){ ?>
           <div class="square"> <?php echo $arr ?> </div>
       <?php } ?> 

</body>