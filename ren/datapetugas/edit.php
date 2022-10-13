<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $level = $_POST['level'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET id_petugas='$id_petugas',username='$username',password='$password',nama='$nama',level='$level' WHERE id=$id");
    
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
    $id_petugas = $user_data['id_petugas'];
    $username = $user_data['username'];
    $password = $user_data['password'];
    $nama = $user_data['nama'];
    $level = $user_data['level'];
}
?>
<html>
<head>	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Edit Data</title>
    <style>
        table{
            background-color: white;
        }
        button{
            color: white;
        }
    </style>
    <link rel="shortcut icon" href="../login/1.jpg">
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
                  <a class="nav-link" href="index.php"><b>Data Siswa</b></a>
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
    
    <h2 class="text-center fw-bold mb-3 mt-2" style="color: white;">Edit Data Petugas</h2><br>

    <form name="update_user" method="post" action="edit.php">
    <center>
    <button type="button" class="btn btn-primary" ><a href="index.php" style="color:white; text-decoration:none;">Kembali</a></button><br/><br/>
        <table width="40%" border="1" class="text-center">
        
        <div class="mb-3 col-sm-6 color-white" >
            <tr class="mb-3"> 
                <td><b>ID Petugas</b></td>
                <td><input type="number" name="id_petugas" value=<?php echo $id_petugas;?>></td>
            </tr>
        </div>
        <div class="mb-3 col-sm-6">
            <tr> 
            <td><b>Username</b></td>
                <td><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
        </div>
        <div class="mb-3 col-sm-6">
            <tr> 
            <td><b>Password</b></td>
                <td><input type="text" name="password" value=<?php echo $password;?>></td>
            </tr>
        </div>
        <div class="mb-3 col-sm-6">
            <tr> 
            <td><b>Nama Petugas</b></td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
        </div>
        <div class="mb-3 col-sm-6">
            <tr> 
                <td>
                    <label for="level"><b> Level  :  </b>
                </td>
                <td>
                    <label><input type="radio" name="level" value="Admin"> Admin</label>
                    <label><input type="radio" name="level" value="Petugas"> Petugas</label>
                </td>
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