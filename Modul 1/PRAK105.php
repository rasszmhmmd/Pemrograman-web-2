<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: 1px solid black;
        }

        .judul {
            background-color: red;
            height: 60px;
            font-size: 20px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td class="judul"><b>Daftar Smartphone Samsung</b></td>
    </tr>
    <?php
    $daftar_samsung = array(1 => "Samsung Galaxy S22",
                            2 => "Samsung Galaxy S22+",
                            3 => "Samsung Galaxy A03",
                            4 => "Samsung Galaxy Xcover 5");

    foreach ($daftar_samsung as $index => $ponsel) {
        ?>
        <tr>
            <td>
                <?php echo $ponsel; ?>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>
