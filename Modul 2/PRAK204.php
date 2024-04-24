<html>
<body>
<form method="post">
    Nilai: <input type="number" name="nilai"> <br>
    <input type="submit" value="konversi" name="konversi">
</form>

<?php
    if(isset($_POST['konversi']) && isset($_POST['nilai'])){
        $nilai = $_POST['nilai'];
        if($nilai > 0 && $nilai < 10){
            echo "<h2> Hasil: Satuan </h2>";
        }
        else if($nilai ==0){
            echo "<h2> Hasil: Nol </h2>";
        }
        else if($nilai >= 10 && $nilai < 100){
            echo "<h2> Hasil: Belasan </h2>";;
        }
        else if($nilai >=100 && $nilai < 1000){
            echo "<h2> Hasil: Ratusan </h2>";
        }
        else{
            echo "<h2> Anda Menginput Melebihi Limit Bilangan </h2>";
        }
    }
?>
</body>
</html>