<?php 
$jam;
$menit;
$detik;
$total_detik;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<h3>Hitung Total Detik</h3>
<body>
    <form action="" method="post">
        <label for="jam">Masukan Jam</label>
        <input type="number" name="jam" id="jam">
        <br>
        <label for="menit">Masukan Menit</label>
        <input type="number" name="menit" id="menit">
        <br>
        <label for="detik">Masukan Detik</label>
        <input type="number" name="detik" id="detik">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>

<?php 

    if(isset($_POST['submit'])) {
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];

        $jam = $jam * 3600;
        $menit = $menit * 60;
        $total_detik = $jam + $menit + $detik;
        
        echo "Total = " . $total_detik;
    }
?>