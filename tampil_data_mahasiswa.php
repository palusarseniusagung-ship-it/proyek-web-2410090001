<?php  
  require_once "koneksi.php";
  $sql = "SELECT * FROM tb_mahasiswa";
  $result = mysqli_query($con, $sql);
?>
<html>
 <head>
  <title>Daftar Mahasiswa</title>
 </head>	
 <body>
  <h3><a href='form_tambah_data_mahasiswa.php'> Tambah Data</a></h3> <p> 
  <form action='hasil_cari_mahasiswa.php' METHOD='POST'>
   Cari : 
   <input type='text' name='id_cari'> <input type='submit' value='cari'>
  </form>
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