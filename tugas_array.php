<?php   

//soal 1//
$hari = ['Senin ' ,'selasa ','rabu ','kamis ','jumat ','sabtu ','minggu '];

$bulan = ['januari ','februari ','maret ','april ','mei ','juni ','juli ',
            'agustus ','september ','oktober ','november ','desember '];

$jumlah = $bulan;
$jumlah_bulan = count($bulan);

var_dump ($hari);

echo "<br> <br>";

var_dump ($bulan);

echo "<br> <br>";

echo $jumlah_bulan;

echo "<br>";
$hasil = $jumlah_bulan * 18;
echo "<br>";
echo $hasil;
if ($hasil %2 == 0 ) {
    echo " merupakan angka genap";
}
else{
    echo " merupakan angka ganjil";
}
?>