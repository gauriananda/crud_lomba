<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pendaftar ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    a {
        color: black;
        text-decoration: none;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-4">
        <div class="container-fluid">
            <a class="navbar-brand text-dark"><b>CAVIGASA</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="admin.php">Home</a>
                    <a class="nav-link active" href="peserta.php">Peserta</a>
                    <a href="input.php"><button class="btn btn-danger ms-3 btn-md" type="submit">DAFTAR SEKARANG</button></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="row">
        <img src="assets/bg-peserta.jpeg" alt="" style="height: 495px;">
        <div class="card-img-overlay mx-auto" style="width: 65rem; margin-top: 12rem;">
            <div class="card p-3" style="opacity: 0.9;">
                <div class="card-body">
                    <h3 class="card-title font-weight-bolder text-center" style="margin-bottom: 50px;">Daftar Anda</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nama</th> <th>Telepon</th> <th>Instansi</th> <th>Alamat</th> <th>Lomba</th> <th>Action</th>
                        </tr>
                        </thead>
                        <?php  
                        while($user_data = mysqli_fetch_array($result)) {         
                            echo "<tr>";
                            echo "<td>".$user_data['name']."</td>";
                            echo "<td>".$user_data['mobile']."</td>";
                            echo "<td>".$user_data['instansi']."</td>";    
                            echo "<td>".$user_data['alamat']."</td>";    
                            echo "<td>".$user_data['lomba']."</td>";    
                            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>