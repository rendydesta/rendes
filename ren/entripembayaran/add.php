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
<body class="text-center" st3w21yle="background-image: linear-gradient(113.31deg, #01004A -6.87%, #00FFF0 135.64%);">
    <section class="vh-100 gradient-custom">
        
        <nav class="navbar navbar-expand-lg navbar navbar-light bg-light">
            <a class="navbar-brand" href="http://smkperguruancikini.sch.id/">
              <img class="ms-4" src="../login/1.jpg" alt="" width="50" height="50">
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
                  <a class="nav-link" href="../datapetugas/index.php"><b>Data Petugas</b></a>
                </li>
                <li class="nav-item ms-4">
                  <a class="nav-link" href="../datakelas/index.php"><b>Data Kelas</b></a>
                </li>
                <li class="nav-item ms-4">
                    <a class="nav-link" href="../dataspp/index.php"><b>Data SPP</b></a>
                  </li>
                  <li class="nav-item ms-4">
                    <a class="nav-link  active" href="#"><b>Entri Transaksi Pembayaran</b></a>
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

        <h2 class="text-center fw-bold mb-3 mt-2" style="color: white;">Tambahkan Data Pembayaran</h2>        
 
    <form action="add.php" method="post" name="form1">
        <table width="80%" border="1" class="text-center">
        <center><div class="mb-3 col-sm-6">
        <input class="form-control form-control-lg" type="number" placeholder="ID Pembayaran" name="id_pembayaran" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" type="number" placeholder="ID Petugas" name="id_petugas" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" type="number" placeholder="NISN" name="nisn" required></div>
          <div class="mb-3 col-sm-6">
        <input class="form-control form-control-lg" type="date" placeholder="Tanggal Pembayaran" name="tanggal" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" type="number" placeholder="ID SPP" name="id_spp" required></div>
        <div class="mb-3 col-sm-6">
          <input class="form-control form-control-lg" type="number" placeholder="Nominal" name="nominal" required></div>
            <button type="button" class="btn btn-danger btn-lg px-5"><a href="../historypembayaran/index.php" style="color: white; text-decoration:none;">Kembali</a></button>
            <button class="btn btn-dark btn-lg px-5" type="submit" name="Submit">Tambahkan</button></center>

        </table>
    </form>
    
    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_pembayaran = $_POST['id_pembayaran'];
        $id_petugas = $_POST['id_petugas'];
        $nisn = $_POST['nisn'];
        $tanggal = $_POST['tanggal'];
        $id_spp = $_POST['id_spp'];
        $nominal = $_POST['nominal'];


        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(id_pembayaran, id_petugas, nisn, tanggal, id_spp, nominal) VALUES('$id_pembayaran','$id_petugas','$nisn','$tanggal', '$id_spp','$nominal')");
        
        // Show message when user added
        
        echo "<script> 
            alert('Data berhasil Ditambahkan!');
            document.location.href = '../historypembayaran/index.php';
        </script>
    ";
    }
    ?>
</body>
</html>