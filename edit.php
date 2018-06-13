<?php

 include 'config.php';


 if (isset($_GET['edit']))

 {

  $SQL = $dbconnect->query ("SELECT * FROM siswa WHERE id=".$_GET['edit']);

  $getRow = $SQL ->fetch_array();

 }

 if(isset($_POST['update']))

{

  $SQL = $dbconnect->prepare("UPDATE siswa SET nim=?, nama=?, alamat=?, kelas=?, jurusan=? WHERE id=?");

  $SQL->bind_param("sssssi",$_POST['nim'],$_POST['nama'],$_POST['alamat'],$_POST['kelas'],$_POST['jurusan'],$_GET['edit']);

  $SQL->execute();

  header("Location: index.php");

}

?>

<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

 <h2 align = "center">Edit Data</h2>
 
<p align = "center">
  <a href = "index.php"> Home </a> /
  <a href = "tambah.php"> Input Data </a>
 </p>

 <form action ="" method ="POST">
 <table align ="center">
  <tr>
   <td>NIM</td>
   <td>:</td>
   <td><input type="text" name="nim"  value="<?php if(isset($_GET['edit'])) echo $getRow['nim'];  ?>" /></td>
  </tr>
  <tr>
   <td>Nama</td>
   <td>:</td>
   <td><input type="text" name="nama"  value="<?php if(isset($_GET['edit'])) echo $getRow['nama'];  ?>" /></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td>:</td>
   <td><input type="text" name="alamat"  value="<?php if(isset($_GET['edit'])) echo $getRow['alamat'];  ?>" /></td>
  </tr>
  <tr>
   <td>Kelas</td>
   <td>:</td>
   <td><input type="text" name="kelas"  value="<?php if(isset($_GET['edit'])) echo $getRow['kelas'];  ?>" /></td>
  </tr>
  <tr>
   <td>Jurusan</td>
   <td>:</td>
   <td><input type="text" name="jurusan" value="<?php if(isset($_GET['edit'])) echo $getRow['jurusan'];  ?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td></td>
   <td>


  <?php
   if(isset($_GET['edit']))
   {
  ?>
<br/>
   <button type="submit" name="update" class="btn btn-primary">Perbaharui</button>

  <?php
   }
   else
   {
  ?>
 
  <?php
   }
  ?>
   </td>
  </tr>
 </table>
 </form>
</body>
</html>