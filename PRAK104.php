<?php

$daftarSmartphone = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
// var_dump($daftarSmartphone);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {

            color: #232323;
        }

        table,
        th,
        td {
            border: 2px solid;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>

        <?php foreach ($daftarSmartphone as $ds): ?>
            <tr>
                <td>
                    <?= $ds; ?>
                </td>
            </tr>
        <?php endforeach ?>

    </table>

</body>

</html>