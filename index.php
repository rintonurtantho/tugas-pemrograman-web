<html>
<head>
    <title>Selamat Datang</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<p align = "center">
    <a href="index.php">Home</a> /
    <a href="tambah.php">Tambah Data</a>
</p>

<form action = "" method = "POST">
    <table align = "center" cellspacing = "0" cellpadding = "5" border = "3px">
        <tr>
            <td>ID</td>
            <td>NIM</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
			<td>KELAS</td>
            <td>JURUSAN</td>
            <td>OPSI</td>
        </tr>
   

<?php
    include 'config.php';
    $view = $dbconnect -> query ("SELECT * FROM siswa");
    while($row=$view->fetch_array())
    {
?>
    <tr>
        <td> <?php echo $row['id']; ?> </td>
        <td> <?php echo $row['nim']; ?> </td>
        <td> <?php echo $row['nama']; ?> </td>
        <td> <?php echo $row['alamat']; ?> </td>
		<td> <?php echo $row['kelas']; ?> </td>
        <td> <?php echo $row['jurusan']; ?> </td>
        <td>
            <a href="edit.php?edit=<?php echo $row['id']; ?>">Edit</a> ||
            <a href="delete.php?del=<?php echo $row['id']; ?>">Hapus</a>
        </td>
    </tr>
  
 
    <?php
    }
    ?>
    </table>

</form>
</body>
</html>