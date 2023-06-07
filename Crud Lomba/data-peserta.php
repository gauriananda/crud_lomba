<?php 
    session_start();
    include 'koneksi.php';
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
            <li><a href="Logout.php">Logout</a></li>
</header>

    <section class="content">
    <h2>Data Peserta</h2>
    <div class="box">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Instansi</th>
                    <th>Alamat</th>
                    <th>Lomba</th>
                    <th>Aksi</th>
                <tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    $list_peserta = mysqli_query($conn, "SELECT * FROM pendaftar");
                    while($row = mysqli_fetch_array($list_peserta)){
                ?>
                <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['instansi'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td><?php echo $row['lomba'] ?></td>
                <td>
                    <a href="detail-peserta.php?id=<?php echo $row['id']?>">Detail</a> ||
                    <a href="hapus-peserta.php?id=<?php echo $row['id']?>" onclick="return confirm('Yakin ?')">Hapus</a>
                    </td>
                <tr>
                    <?php } ?>
        </table>
    </div>

</div>
</section>
</body>
</html>