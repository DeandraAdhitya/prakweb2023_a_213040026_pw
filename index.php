<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_2023_a_213040026");

// Ambil data dari tabel buku
$result = mysqli_query($conn, "SELECT * FROM buku");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Buku</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>ID Buku</th>
    <th>Judul Buku</th>
    <th>Kode Buku</th>
    <th>Penerbit</th>
</tr>

<?php $i = 1; ?>
<?php while( $row = mysqli_fetch_assoc($result)) : ?>

<tr>
    <td><?= $i; ?></td>
    <td><?= $row["id_buku"]; ?></td>
    <td><?= $row["judul_buku"]; ?></td>
    <td><?= $row["kode_buku"]; ?></td>
    <td><?= $row["penerbit"]; ?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>

</table>

</body>
</html>