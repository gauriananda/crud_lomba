<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $instansi = $_POST['instansi'];
    $alamat = $_POST['alamat'];
    $lomba = $_POST['lomba'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE pendaftar SET name='$name',mobile='$mobile', instansi='$instansi', alamat='$alamat',lomba='$lomba' WHERE id=$id ");
    

    // Redirect to peserta to display updated user in list
    header("Location: peserta.php");

}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pendaftar WHERE id= $id ");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $mobile = $user_data['mobile'];
    $instansi = $user_data['instansi'];
    $alamat = $user_data['alamat'];
    $lomba = $user_data['lomba'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Edit Peserta</title>
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
                    <a class="nav-link" href="peserta.php">Peserta</a>
                    <a href="input.php"><button class="btn btn-danger ms-3 btn-md" type="submit">DAFTAR SEKARANG</button></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="row">
        <img src="assets/bg-peserta.jpeg" alt="" style="height: 495px;">
        <div class="card-img-overlay mx-auto" style="width: 65rem; margin-top: 8rem;">
            <div class="card p-3" style="opacity: 0.9;">
                <div class="card-body">
                    <h4 class="card-title font-weight-bolder text-center" style="margin-bottom: 50px;">Formulir Edit Peserta</h4>
                    <form name="update_user" method="post" action="edit.php" class="row gd-5 gy-3">
                        <div class="col-md-3">
                            <label for="name" class="form-label ">Nama Peserta</label>
                            <input type="text" class="form-control" id="nama" name="name" value=<?php echo $name;?> placeholder="Masukkan Nama Peserta" required>
                        </div>
                        <div class="col-md-3">
                            <label for="mobile" class="form-label">Telepon</label>
                            <input type="tel" class="form-control" id="no_hp" name="mobile" value=<?php echo $mobile;?> placeholder="Masukkan Nomor Telepon" required>
                        </div>
                        <div class="col-md-3">
                            <label for="instansi" class="form-label">Instansi</label>
                            <input type="text" class="form-control" id="instansi" name="instansi" value=<?php echo $instansi;?> placeholder="Masukkan Nama Instansi" required>
                        </div>
                        <div class="col-md-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value=<?php echo $alamat;?> placeholder="Masukkan Alamat Tinggal" required>
                        </div>
                        <div class="mb-5">
                            <label for="lomba" class="form-label">Pilih Lomba Yang Akan Diikuti</label>
                            <select class="form-select" aria-label="Pilih Lomba" name="lomba" value=<?php echo $lomba;?> id="lomba" required>
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
                            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                            <td><input type="submit" name="update" value="Update" class="btn btn-danger border-0 rounded text-light"></td>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>