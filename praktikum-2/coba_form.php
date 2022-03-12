<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="coba_form.php" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="nama">
        <input type="submit" value="Submit" name="simpan">
    </form>
</body>
</html>
<?php

$storage = $_POST['simpan'];
$nama = $_POST['nama'];

echo "proses : " . $storage;
echo "<br>";
echo "Nama : " . $nama;

?>