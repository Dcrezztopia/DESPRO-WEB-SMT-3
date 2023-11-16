<?php
    // $a = 10;
    // $b = 5;

    // $hasilTambah = $a + $b;
    // $hasilKurang = $a - $b;
    // $hasilKali = $a * $b;
    // $hasilBagi = $a / $b;
    // $sisaBagi = $a % $b;
    // $pangkat = $a ** $b;

    // echo "Hasil Tambah: {$hasilTambah} <br>";
    // echo "Hasil Kurang: {$hasilKurang} <br>";
    // echo "Hasil Kali: {$hasilKali} <br>";
    // echo "Hasil Bagi: {$hasilBagi} <br>";
    // echo "Sisa Bagi: {$sisaBagi} <br>";
    // echo "Pangkat: {$pangkat} <br>";
    // echo "<br>";
    
    // $hasilSama = $a == $b;
    // $hasilTidakSama = $a != $b;
    // $hasilLebihKecil = $a < $b;
    // $hasilLebihBesar = $a > $b;
    // $hasilLebihKecilSama = $a <= $b;
    // $hasilLebihBesarSama = $a >= $b;
    
    // echo "Hasil Sama: ";
    // var_dump($hasilSama);
    // echo "<br>";
    // echo "Hasil Tidak Sama: ";
    // var_dump($hasilTidakSama);
    // echo "<br>";
    // echo "Hasil Lebih Kecil: ";
    // var_dump($hasilLebihKecil);
    // echo "<br>";
    // echo "Hasil Lebih Besar: ";
    // var_dump($hasilLebihBesar);
    // echo "<br>";
    // echo "Hasil Lebih Kecil Sama: ";
    // var_dump($hasilLebihKecilSama);
    // echo "<br>";
    // echo "Hasil Lebih Besar Sama: ";
    // var_dump($hasilLebihBesarSama);
    // echo "<br> <br>";


    // $hasilAnd = $a && $b;
    // $hasilOr = $a || $b;
    // $hasilNotA = !$a;
    // $hasilNotB = !$b;

    // echo "Hasil And: ";
    // var_dump($hasilAnd);
    // echo "<br>";
    // echo "Hasil Or: ";
    // var_dump($hasilOr);
    // echo "<br>";
    // echo "Hasil Not A: ";
    // var_dump($hasilNotA);
    // echo "<br>";
    // echo "Hasil Not B: ";
    // var_dump($hasilNotB);
    // echo "<br> <br>";
 
    // $a += $b;
    // echo "Hasil +=: {$a} <br>";
    // $a -= $b;
    // echo "Hasil -=: {$a} <br>";
    // $a *= $b;
    // echo "Hasil *=: {$a} <br>";
    // $a /= $b;
    // echo "Hasil /=: {$a} <br>";
    // $a %= $b;
    // echo "Hasil %=: {$a} <br>";
    // echo "<br>";

    // $hasilIdentik = $a === $b;
    // $hasilTidakIdentik = $a !== $b;
    // echo "Hasil Identik: ";
    // var_dump($hasilIdentik);
    // echo "<br>";
    // echo "Hasil Tidak Identik: ";
    // var_dump($hasilTidakIdentik);
    // echo "<br>";

    echo "<h3>Menghitung Kursi Restoran Yang Sudah Ditempati </h3>";
    $jumlahTotalKursi = 45;
    $jumlahKursiTerisi = 28;
    $jumlahKursiKosong = $jumlahTotalKursi - $jumlahKursiTerisi;
    $persentaseKursiKosong = ($jumlahKursiKosong / $jumlahTotalKursi) * 100;
    echo "Persentase kursi yang masih kosong: " . round($persentaseKursiKosong, 2) . "%";
?>