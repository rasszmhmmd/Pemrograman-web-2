<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td>
            <b>Daftar Smartphone Samsung</b>
        </td>
    </tr>
    <?php
    $daftar_samsung = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");

    foreach ($daftar_samsung as $ponsel) {
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
