<?php
    $var1 = $_POST['inputPertama'];
    echo $var1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan6 PHP</title>
</head>
<body>
    <!-- methode POST, value tidak akan muncul pada link urlv(Gunakan post untuk username/password) -->

    <!-- methode GET, value akan muncul pada link url (Gunakan get untuk halaman) -->
    <form action="" method="POST">

        <input type="text" name="inputPertama">

        <button type="submit" name="prosesData">Submit</button>



    </form>
</body>
</html>