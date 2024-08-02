<h3>Hitung Bilangan Terbesar</h3>
<?php 
$bilangan1 = 4;
$bilangan2 = 5; 
$bilangan3 = 6;

$bilangan_terbesar = $bilangan3;

if ($bilangan1 > $bilangan_terbesar) {
    $terbesar = $bilangan1; 
};

if ($bilangan2 > $bilangan_terbesar) {
    $terbesar = $bilangan2;
};

if ($bilangan3 > $bilangan_terbesar) {
    $terbesar = $bilangan3;
};

echo $bilangan_terbesar;

?>