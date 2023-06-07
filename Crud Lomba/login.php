<?php 
session_start();
    include 'koneksi.php';

    if(isset($_POST['login'])){
      
      //cek akun
      $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$_POST['user']."' AND password = '".($_POST['pass'])."' ");
    
      if(mysqli_num_rows($cek) > 0){
        $a = mysqli_fetch_object($cek);

        $_SESSION['stat_login'] = true;
        $_SESSION['id'] = $a->id_admin;
        $_SESSION['nama'] = $a->nama_admin;
        echo '<script>window.location="admin.php"</script>';
      }else{
        echo '<script>alert("Gagal, username atau passsword salah")</script>';
      }
    }
 ?> 

<!DOCTYPE html> 
<html lang="en">
<head>
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="global-container bg-danger">
  <div class="card login-form bg-light">
      <div class="card-body">
        <h1 class="card-title text-center text-danger">Login Admin</h1>
     
      </div>
      <div class="card-text ">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="username" class="form-label text-danger ">username</label>
            <input type="username" name="user" class="form-control border border-danger" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label text-danger">Password</label>
            <input type="password" name="pass" class="form-control border border-danger bg-light" required>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" name="login" value="login" class="btn btn-danger mt-3 mb-3 text-light" >Submit</button>
          </div>
        </form> 
      </div>
  </div>
  </div>
 
</body>
</html>