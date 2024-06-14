<?php

// membuat variabel

    $Nama_Mahasiswa = "Ariel Tatum";
    $Nama_Kamu = 'Budi';
    $Pekerjaan = "Ibu Rumah Tangga";

    if($Nama_Mahasiswa == "Ariel Tatum"){
        if($Pekerjaan == 'Aktris'){
            $Jenis_Kelamin = 'Perempuan';
            $Penghasilan = 1000000000;
        }else{
            $Jenis_Kelamin = 'Perempuan';
            $Penghasilan = 2000000;
        }
    }elseif($Nama_Kamu == 'Budi'){
        $Jenis_Kelamin = 'Laki-Laki';
    }else{
        $Jenis_Kelamin = '???';
    }

    echo "Hallo " . $Nama_Mahasiswa . " Selamat <br> datang. Saya " . $Nama_Kamu . " Jenis Kelamin Kamu Adalah " . $Jenis_Kelamin. " Penghasilan Anda ". $Penghasilan ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Hello World</h1>
</body>
</html>