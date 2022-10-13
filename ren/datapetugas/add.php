<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../login/1.jpg">
    <title>Data Petugas</title>
</head>
<body class="text-center" style="background-image: linear-gradient( #899c95 , #185c43 );">
    <section class="vh-100 gradient-custom">
        
        <nav class="navbar navbar-expand-lg navbar navbar-light bg-light">
            <a class="navbar-brand" href="">
              <img class="ms-4" src="logo (3).png" alt="" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item ms-4">
                  <a class="nav-link" href="../dashboard/index.php"><b>Data Siswa</b></a>
                </li>
                <li class="nav-item ms-4">
                  <a class="nav-link active" href="index.php"><b>Data Petugas</b></a>
                </li>
                <li class="nav-item ms-4">
                  <a class="nav-link" href="../datakelas/index.php"><b>Data Kelas</b></a>
                </li>
                <li class="nav-item ms-4">
                    <a class="nav-link" href="../dataspp/index.php"><b>Data SPP</b></a>
                  </li>
                  <li class="nav-item ms-4">
                    <a class="nav-link" href="../entripembayaran/add.php"><b>Entri Transaksi Pembayaran</b></a>
                  </li>
                  <li class="nav-item ms-4">
                    <a class="nav-link" href="../historypembayaran/index.php"><b>Lihat History Pembayaran</b></a>
                  </li>
                  <li class="nav-item ms-4 me-5">
                    <a class="nav-link" href="#"><b>Generate Laporan</b></a>
                  </li>
                  <li class="nav-item ms-4 me-4">
                  <button type="button" class="btn btn-outline-dark">
                  <a class="nav-link" href="../login/logout.php"><b>Logout</b></a></button>
                  </li>
              </ul>
            </div>
        </nav><br>

        <h2 class="text-center fw-bold mb-3 mt-2" style="color: dark;">Tambahkan Data Petugas</h2>        
 
    <form action="add.php" method="post" name="form1">
        <table width="80%" border="1" class="text-center">
        <center><div class="mb-3 col-sm-6">
        <input class="form-control form-control-lg" placeholder="ID Petugas" name="id_petugas" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" placeholder="Username" name="username" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" placeholder="Password" name="password" required></div>
          <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" placeholder="Nama" name="nama" required></div>
        <div class="mb-3 col-sm-6"></div>
        <label for="level"><h4> Level  :     </h4></label>
            <label><input type="radio" name="level" value="Admin"> Admin</label>
            <label><input type="radio" name="level" value="Petugas"> Petugas</label><br>
            
            
            <button class="btn btn-dark btn-lg px-5" type="submit" name="Submit">Tambahkan</button></center>

        </table>
    </form>
    
    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_petugas = $_POST['id_petugas'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $level = $_POST['level'];

        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(id_petugas, username, password, nama, level) VALUES('$id_petugas','$username','$password','$nama','$level')");
        
        // Show message when user added
        
        echo "<script> 
            alert('Data berhasil Ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
    }
    ?>
</body>
</html>