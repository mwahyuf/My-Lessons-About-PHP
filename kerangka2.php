<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-10">
    <title> Mencoba </title>
    <style>
        .warna-baris{
            background-color: orange
        }
        .warna-baris2{
            background-color: silver
        }
    </style>

</head>

<body>
    <p7> Tabel </p7>
<table border="1" cellpadding="10" cellspacing="0">

    <?php for($i=1;$i<=4;$i++){ ?>
            <?php if ($i % 2 !=0) { ?>
                <tr class="warna-baris">
        <?php } else { ?>
                <tr class="warna-baris2">
        <?php } ?>
                <?php for($j=1;$j<=5;$j++){ ?>
                    <td> <?php echo "$i,$j"; ?> </td> 
        <?php } ?>
                </tr>
    <?php } ?>
</table>

</body>