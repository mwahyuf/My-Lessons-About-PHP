<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-10">
    <title>Latihan Lagi</title>

    <style>
        .baris-warna{
            background-color: orange
        }
        .baris-warna2{
            background-color: silver
        }

    </style>

</head>

<body>
    <h2>Tabel</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i=1;$i<=2;$i++){ ?>
            <?php if($i % 2 ==0) { ?>
                <tr class="baris-warna2">
            <?php } else { ?>
                    <tr class="baris-warna">
            <?php } ?>
                <?php for($j=1;$j<=2;$j++){ ?>
                    <?php if(var_dump($i === "Nama")){ ?>
                            <td> <?php echo "Nama" ?> </td>
                <?php } ?>
                    
                    </tr>
        <?php } ?>
    </table>

</body>