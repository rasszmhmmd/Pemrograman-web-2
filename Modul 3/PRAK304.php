<html>
<head>
    <title>Soal_4_Modul_3</title>
</head>
<body>
    <?php 
    $bintang = NULL;
    $picture = "<img style='width: 70px;' src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png' >";
    if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
        $bintang = $_POST['bintang'];
    }
    if( isset($_POST['tambah']) ) {
        $bintang += 1;
    }
    if( isset($_POST['kurang']) ) {
        $bintang -= 1;
    }
    if( empty($bintang) ) { ?>
        <form action="" method="post">
                <label for="bintang">Jumlah Bintang :</label>
                <input type="text" name="bintang"> </br>
                <button type="submit" name="submit">Submit</button>
        </form>
    <?php } ?>
    <?php if( !empty($bintang) ) {
        echo "Jumlah Bintang : $bintang "; ?>
        <br><br><br><br>
        <?php for( $i = 0; $i < $bintang; $i++ ) {
            echo "$picture";
        } ?>
        <form action="" method="post">
            <input type="text" name="bintang" value="<?= $bintang ?>" hidden>
            <button type="submit" name="tambah" value="Rambah">Tambah</button>
            <button type="submit" name="kurang" value="kurang">Kurang</button> 
        </form>
    <?php } ?>
</body>
</html>