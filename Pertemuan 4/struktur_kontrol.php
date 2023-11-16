<?php
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100)
    {
        echo "Nilai huruf: A";
    } else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90)
    {
        echo "Nilai huruf: B";
    } else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80)
    {
        echo "Nilai huruf: C";
    } else if ($nilaiNumerik < 70)
    {
        echo "Nilai huruf: D";
    }

    echo "<br>";
    echo "<br>";
    
    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while($jarakSaatIni < $jarakTarget)
    {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";
    
    echo "<br>";
    echo "<br>";
    
    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;
    
    for($i=0; $i<=$jumlahLahan; $i++)
    {
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }
    
    echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
    
    echo "<br>";
    echo "<br>";
    
    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;
    
    foreach ($skorUjian as $skor)
    {
        $totalSkor += $skor;
    }
    
    echo "Total skor ujian adalah: $totalSkor";
    
    echo "<br>";
    echo "<br>";
    
    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
    foreach ($nilaiSiswa as $nilai)
    {
        if($nilai < 60)
        {
            echo "Nilai: $nilai (Tidak lulus) <br>";
            continue;
        }
        echo "Nilai: $nilai (Lulus) <br>";
    }
    
    echo "<br>";

    $nilaiSoal21 = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    sort($nilaiSoal21);
    array_shift($nilaiSoal21);
    array_shift($nilaiSoal21);
    array_pop($nilaiSoal21);
    array_pop($nilaiSoal21);
    $total_nilai = array_sum($nilaiSoal21);
    $rata_rata = $total_nilai / count($nilaiSoal21);
    echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai . "<br>";
    echo "Nilai rata-rata siswa: " . $rata_rata;

    echo "<br>";

    $hargaProduk = 120000; 
    $diskon = 20;
    $batasDiskon = 100000;
    if ($hargaProduk > $batasDiskon) {
        $diskonAmount = ($diskon / 100) * $hargaProduk;
        $hargaSetelahDiskon = $hargaProduk - $diskonAmount;
    } else {
        $hargaSetelahDiskon = $hargaProduk;
    }
    echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";

    echo "<br>";

    $skorPemain = 600; 
    $mendapatkanHadiah = ($skorPemain > 500) ? "YA" : "TIDAK";
    echo "Total skor pemain adalah: " . $skorPemain . "<br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? " . $mendapatkanHadiah;

?>