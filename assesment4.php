<?php 
$total_detik;
$sisa_detik;
$jam;
$menit;
$detik; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Hitung Total detik menjadi Jam/menit/detik</h3>
    <form action="" method="post">
        <label for="total_detik">Masukan Total detik</label>
        <input type="number" name="total_detik" id="total_detik">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php 

    if(isset($_POST['submit'])) {
        $total_detik = $_POST['total_detik'];

        $jam = floor($total_detik / 3600);
        $sisa_detik = $total_detik % 3600;

        $menit = floor($sisa_detik / 60); 

        $detik = $sisa_detik % 60; 

        echo $jam . " Jam" . $menit . " menit" . $detik . " detik";

    } ; 

?>