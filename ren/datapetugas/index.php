<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: black;
            color: white;
        }
        .z {
            background-color: white;
            color: black;
        }
        a{
          text-decoration: none;
          color: black;
        }
        a:hover{
            color: white;
        }
        .ya {
          color: white;
        }
    </style>
    <link rel="shortcut icon" href="../login/1.jpg">
    <title>Data Petugas</title>
</head>
<body style="background-image: linear-gradient( #899c95 , #185c43 );">
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
                  <a class="nav-link active" href="#"><b>Data Petugas</b></a>
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

        <h2 class="text-center fw-bold mb-3 mt-2" style="color: white;">Data Petugas</h2><br>
    <?php
      // Create database connection using config file
      include_once("config.php");
 
      // Fetch all users data from database
      $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
    ?>
    <center>
    <button type="button" class="btn btn-secondary"><a href="add.php" style="color: white;">Tambahkan Data Petugas</a></button><br/><br/>
    <table width="80%" border="1" class="text-center">
        <thead>
            <tr>
                <td>No</td>
                <td>ID Petugas</td>
                <td>Username</td>
                <td>Password</td>  
                <td>Nama</td>
                <td>Level</td>  
                <td>Option</td>
            </tr>
        </thead>
        <?php
        include "config.php";
        $no = 1;
        $query = mysqli_query($mysqli, 'SELECT * FROM users');
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <div>
            <tr  class="z">
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['id_petugas'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['level'] ?></td>
                <td>
                <button type="button" class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                </svg>
                <?php echo"<a href='edit.php?id=$data[id]'>Edit</a>"?>
              </button>
              <button type="button" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                </svg>
                <?php echo"<a href='delete.php?id=$data[id]'>Delete</a>"?>
              </button></td>
            </tr>
            </div>
        <?php } ?>
    </table>
    </center>
    </section>
</body>
</html>