<!DOCTYPE html>
<html lang="en">

<head>
    <title>Asosiatif</title>

    <style>
        .desain-kotak{
            width: 50px;
            height: 50px;
            text-align: center;
            float: right;
            background-color: chartreuse;
            text-transform: capitalize;
            line-height: 50px;
            transition: 2s;
            margin: 5px;
        }

        .desain-kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .pemisah {
            clear: both;
        }

        

    </style>

</head>


<body>

<?php
    $array = [[1,2,3],[4,5,6]];
?>

    <?php for($i=0;$i<count($array);$i++){ ?>
        <?php for($j=0;$j<=count($array);$j++){ ?>
        
        <div class="desain-kotak"> <?php echo $array[$i][$j]; ?> </div>

        <?php } ?>

        <div class="pemisah"></div>

    <?php } ?>

</body>




</html>