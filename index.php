<?php
include "configdb.php";

$sqlStatement = "SELECT * FROM buku ORDER BY id_buku ASC";
$query = mysqli_query($conn, $sqlStatement);
$arrBuku = mysqli_fetch_all($query, MYSQLI_ASSOC);
//var_dump($arrBuku);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>

<h2>Data Buku</h2>

<table border="1">
    <tr>
        <th>ID Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
    </tr>
    <?php foreach ($arrBuku as $buku) { ?>
    <tr>
        <td><?= $buku['id_buku'] ?></td>
        <td><?= $buku['judul'] ?></td>
        <td><?= $buku['pengarang'] ?></td>
        <td><?= $buku['tahun_terbit'] ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>