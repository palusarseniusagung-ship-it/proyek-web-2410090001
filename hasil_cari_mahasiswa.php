<?php 
 require_once "koneksi.php";
 $cari=$_POST['id_cari'];
 $sql = "SELECT * FROM tb_mahasiswa WHERE txt_nm LIKE '%$cari%'";
 $result = mysqli_query($con, $sql);
?>
<html>
 <head>	<title>Daftar Mahasiswa</title></head>	
 <body>
   <a href='tampil_data_mahasiswa2.php'> Kembali</a> <p> 
   <table border="1">
   <tr>
	<th>ID Mahasiswa</th>
	<th>Nama Mahasiswa</th>
	<th>Alamat</th>
	<th>Telp</th>
	<th>Email</th>
   </tr>
   <?php while ($data = mysqli_fetch_row($result)): ?>
    <tr>
    	<td><?php echo $data[0]; ?></td>
      <td><?php echo $data[1]; ?></td>
      <td><?php echo $data[2]; ?></td>      
      <td><?php echo $data[3]; ?></td>   
      <td><?php echo $data[4]; ?></td>  
    </tr>	
   <?php endwhile; ?>
   </table>
  </body>
</html>
<?php
  // Membebaskan sumber daya hasil query
  mysqli_free_result($result);
  // Menutup koneksi dengan menggunakan fungsi umum
  db_disconnect($con);
?>  