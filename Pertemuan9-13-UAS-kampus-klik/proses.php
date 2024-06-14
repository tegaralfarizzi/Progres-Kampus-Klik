<?php

    include "koneksi.php";

// mengambil data inputan dari form
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $ulangi = $_POST['ulangi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $proses = mysqli_query($koneksi,"INSERT INTO mahasiswa (nama_mahasiswa, prodi, jenis_kelamin) VALUES ('$nama', '$prodi','$jenis_kelamin')") or die (mysqli_error($koneksi));

    if($proses){
        echo "<script>
                alert('Data Berhasil Disimpan')
                window.location.href='index.php';
            </script>";
    }else{
        echo "<script>
                alert('Data Gagal Disimpan')
                window.location.href='index.php';
            </script>";
    }


?>