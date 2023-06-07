<?php 
    session_start();
    include 'koneksi.php';
    $peserta = mysqli_query($conn, "SELECT * FROM pendaftar WHERE id = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administrator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- bagian header -->
    <header>
        <h1><a href="index.php">Admin</a></h1>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="data-peserta.php">Data Peserta</a></li>
            <li><a href="logout.php">Logout</a></li>
</header>

<section class="content">
    <h2>Detail Peserta</h2>
    <div class="box">
        <table class"table-data" border="0">
            <tr>
                <td>id</td>
                <td>:</td>
                <td><?php echo $p->id ?>
            </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $p->name ?></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>:</td>
                <td><?php echo $p->mobile ?></td>
            </tr>
            <tr>
                <td>Instansi</td>
                <td>:</td>
                <td><?php echo $p->instansi ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $p->alamat ?></td>
            </tr>
            <tr>
                <td>Lomba</td>
                <td>:</td>
                <td><?php echo $p->lomba ?></td>
            </tr>
        </table>
    </div>
</section>