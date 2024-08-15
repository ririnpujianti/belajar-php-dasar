<?php
    // Tipe Data Number (integer dan float)
    $umur = 16; // integer
    $tinggi_badan = 153.0; // float

    // Tipe Data String
    $nama = "Ririn Pujianti";
    $alamat = "Jl. Cikole, Rt/Rw 01/02, Ds. Cikole, Dsn. Cikole, Kec. Cimalaka, Kab. Sumedang";
    $pekerjaan = "Programmer";

    // Tipe Data Boolean
    $is_married = false; // Menyatakan apakah sudah menikah atau belum
    $punya_sim = false; // Menyatakan apakah memiliki SIM atau tidak

    // Output Data Diri
    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . " tahun<br>";
    echo "Tinggi Badan: " . $tinggi_badan . " cm<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
    echo "Status Menikah: " . ($is_married ? "Sudah Menikah" : "Belum Menikah") . "<br>";
    echo "Memiliki SIM: " . ($punya_sim ? "Ya" : "Tidak") . "<br>";
?>