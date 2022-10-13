<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../login/1.jpg">
    <title>Data Siswa</title>
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
                  <a class="nav-link active" href="index.php"><b>Data Siswa</b></a>
                </li>
                <li class="nav-item ms-4">
                  <a class="nav-link" href="../datapetugas/index.php"><b>Data Petugas</b></a>
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

        <h2 class="text-center fw-bold mb-3 mt-2" style="color: black;">Tambahkan Data Siswa</h2>        
 
    <form action="add.php" method="post" name="form1">
        <table width="80%" border="1" class="text-center">
        <center><div class="mb-3 col-sm-6">
        <input class="form-control form-control-lg" type="number" placeholder="NISN" name="nisn" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" type="number" placeholder="NIS" name="nis" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" type="text" placeholder="Nama" name="nama" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" type="text" placeholder="Kelas" name="kelas" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" type="text" placeholder="Alamat" name="alamat" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" type="number" placeholder="No Telepon" name="no_telp" required></div>
        <div class="mb-4 col-sm-6">
          <input class="form-control form-control-lg" type="number" placeholder="ID SPP" name="id_spp" required></div>
            
            <button class="btn btn-dark btn-lg px-5" type="submit" name="Submit">Tambahkan</button></center>

        </table>
    </form>
    
    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nisn = $_POST['nisn'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $id_spp = $_POST['id_spp'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(nisn, nis, nama, kelas, alamat, no_telp, id_spp) VALUES('$nisn','$nis','$nama','$kelas','$alamat','$no_telp','$id_spp')");
        
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