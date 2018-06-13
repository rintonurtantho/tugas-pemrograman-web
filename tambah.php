<html>
<head>
    <title>Silahkan Tambah Data</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <h2 align="center">Input Data</h2>

  
    <p align="center">
        <a href="index.php">Home</a> /
        <a href="tambah.php">Input Data</a>
    </p>
  

    <form action="" method="POST">
        <table align="center">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td> <input type="text" name="nim" placeholder="Masukan Nim"> </td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
               <td> <input type="text" name="nama" placeholder="Masukan Nama"> </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td> <input type="text" name="alamat" placeholder="Masukan Alamat"> </td>
            </tr>
			<tr>
                <td>KELAS</td>
                <td>:</td>
                <td> <input type="text" name="kelas" placeholder="Masukan Kelas"> </td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>:</td>
                <td> <input type="text" name="jurusan" placeholder="Masukan Jurusan"> </td>
            </tr>
            </table>
			<br/>	
<p align = "center">
<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </p>
			
    </form>
</body>
</html>


<?php
    include 'config.php';
    if (isset($_POST['simpan']))
    {
        $nim = $dbconnect -> real_escape_string($_POST['nim']);
        $nama = $dbconnect -> real_escape_string($_POST['nama']);
        $alamat = $dbconnect -> real_escape_string($_POST['alamat']);
		        $kelas = $dbconnect -> real_escape_string($_POST['kelas']);
        $jurusan = $dbconnect -> real_escape_string($_POST['jurusan']);
      
        $SQL = $dbconnect -> prepare("INSERT INTO siswa(id,nim,nama,alamat,kelas,jurusan) VALUES(?,?,?,?,?,?)");
		$SQL -> bind_param("ssssss",$id,$nim,$nama,$alamat,$kelas,$jurusan);
        $SQL -> execute();
      
            if(!$SQL)
                {
                    echo $mysqliconn -> error;
                }
                    header("location: index.php");
                }
?>