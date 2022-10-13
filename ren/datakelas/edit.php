<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $id_kelas = $_POST['id_kelas'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET id_kelas='$id_kelas',kelas='$kelas',jurusan='$jurusan' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id_kelas = $user_data['id_kelas'];
    $kelas = $user_data['kelas'];
    $jurusan = $user_data['jurusan'];
}
?>
<html>
<head>	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../login/1.jpg">
    <title>Edit Data</title>
    <style>
        table{
            background-color: white;
        }
        button{
            color: white;
        }
    </style>
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
                  <a class="nav-link" href="../datapetugas/index.php"><b>Data Petugas</b></a>
                </li>
                <li class="nav-item ms-4">
                  <a class="nav-link active" href="index.php"><b>Data Kelas</b></a>
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
    
    <h2 class="text-center fw-bold mb-3 mt-2" style="color: white;">Edit Data Petugas</h2><br>

    <form name="update_user" method="post" action="edit.php">
    <center>
    <button type="button" class="btn btn-primary" ><a href="index.php" style="color:white; text-decoration:none;">Kembali</a></button><br/><br/>
        <table width="40%" border="1" class="text-center">
        
        <div class="mb-3 col-sm-6 color-white" >
            <tr class="mb-3"> 
                <td><b>ID Kelas</b></td>
                <td><input type="number" name="id_kelas" value=<?php echo $id_kelas;?>></td>
            </tr>
        </div>
        <div class="mb-3 col-sm-6">
            <tr> 
            <td><b>Kelas</b></td>
                <td><input type="text" name="kelas" value=<?php echo $kelas;?>></td>
            </tr>
        </div>
        <div class="mb-3 col-sm-6">
            <tr> 
            <td><b>Jurusan</b></td>
                <td><select name="jurusan" class="mb-4">
	            <option name="jurusan" value="Multimedia">Multimedia</option>
	            <option name="jurusan" value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
	            <option name="jurusan" value="Audio Video">Audio Video</option>
	            <option name="jurusan" value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
	            <option name="jurusan" value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                <option name="jurusan" value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
	            <option name="jurusan" value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
	            <option name="jurusan" value="Teknik Permesinan">Teknik Permesinan</option>
          </select><br> </td>
            </tr>
        </div>
        <div class="mb-3 col-sm-6">
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </div>
        </center>
        </table>
    </form>
</body>
</html>