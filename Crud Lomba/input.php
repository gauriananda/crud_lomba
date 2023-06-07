<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head> 
<body> 
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-4">
        <div class="container-fluid">
            <a class="navbar-brand text-dark"><b>CAVIGASA</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    <a href="#input"><button class="btn btn-danger ms-3 btn-md" type="submit">DAFTAR SEKARANG</button></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="card text-bg-light opacity-75">
        <img src="assets/bg-input.jpeg" class="card-img" alt="...">
        <div class="card-img-overlay text-uppercase text-white font-weight-bolder mt-5 text-center">
            <h2 class="card-title ">daftar/login</h2>
        </div>
    </div>
    <div class="container" id="input">
        <br/><br/>
        <div class="row mb-5">
            <div class="col-sm-8 mb-3 mb-sm-0">
                <div class="card p-2">
                    <div class="card-body">
                    <h5 class="card-title">Daftar Lomba 17 Agustus 2023</h5>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted">Data Profil</h6>
                    <br>
                        <form action="input.php" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Peserta</label>
                                <input type="text" class="form-control" id="nama" name="name" placeholder="Masukkan Nama Peserta" required>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Telepon</label>
                                <input type="tel" class="form-control" id="no_hp" name="mobile" placeholder="Masukkan Nomor Telepon" required>
                            </div>
                            <div class="mb-3">
                                <label for="instansi" class="form-label">Instansi</label>
                                <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Masukkan Nama Instansi" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Tinggal" required>
                            </div>
                            <div class="mb-5">
                                <label for="lomba" class="form-label">Pilih Lomba Yang Akan Diikuti</label>
                                <select class="form-select" aria-label="Pilih Lomba" name="lomba" id="lomba" required>
                                    <option selected>Pilih Lomba</option>
                                    <option value="Lomba Panjat Pinang">Lomba Panjat Pinang</option>
                                    <option value="Lomba Makan Kerupuk">Lomba Makan Kerupuk</option>
                                    <option value="Lomba Balap Karung">Lomba Balap Karung</option>
                                    <option value="Lomba Gebuk Bantal">Lomba Gebuk Bantal</option>
                                    <option value="Lomba Tarik Tambang">Lomba Tarik Tambang</option>
                                    <option value="Lomba Balap Karung">Lomba Balap Karung</option>
                                    <option value="Lomba Joget Balon">Lomba Joget Balon</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2 col-3 mx-auto">
                                <td><input type="submit" name="Submit" value="Daftar" class="btn btn-danger border-0 rounded text-light"></td>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card p-2">
                    <div class="card-body">
                    <h5 class="card-title">Kontak Kami</h5>
                    <hr>
                    <p class="card-subtitle mb-2 text-muted">Untuk informasi lebih lengkap, silahkan kontak kami.</p>
                    <br>
                    <ul class="list-group" style="list-style-type:none;">
                        <li class="list-item"><i class="fa-solid fa-phone"></i> 0858 5872 9918 (Gauri)</a></li>
                        <li class="list-item"><i class="fa-solid fa-phone"></i> 0821 4581 3616 (Icha)</a></li>
                        <li class="list-item"><i class="fa-solid fa-phone"></i> 0859 3538 5416 (Nesa)</a></li>
                        <li class="list-item"><i class="fa-solid fa-phone"></i> 0831 1435 2875 (Novia)</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $instansi = $_POST['instansi'];
        $alamat = $_POST['alamat'];
        $lomba = $_POST['lomba'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pendaftar(name,mobile,instansi,alamat,lomba) VALUES('$name','$mobile','$instansi','$alamat','$lomba')");
        
        // Show message when user added
        echo "<script> alert('Pendaftaran Berhasil Dilakukan')</script>";
        
    }
    ?>
    <section class="bg-dark text-light p-4">
        <h5 class="text-sm-center">CAVIGASA &copy; Copyright 2023 </h5>
    </section>

    
</body>
</html>
