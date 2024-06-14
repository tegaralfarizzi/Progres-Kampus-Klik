<?php
// mengambil data inputan dari form
    $npm = $_POST['npm'];
    $nilai = $_POST['nilai'];
    $ulangi = $_POST['ulangi'];

    if($nilai != ""){
        if($nilai >= 85){
            $hurufMutu = "A";
        }elseif($nilai >= 75){
            $hurufMutu = "B";
        }elseif($nilai >= 65){
            $hurufMutu = "C";
        }else{
            $hurufMutu = "E";
        }
    
        for($i = 0; $i < $ulangi; $i++){
            echo $npm. " Nilai Anda Adalah ". $hurufMutu. "<br>";

            // echo "<script>alert ('".$npm. " Nilai Anda Adalah ". $hurufMutu. "')</script>";
        }
    }

?>