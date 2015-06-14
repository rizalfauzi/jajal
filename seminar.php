<b>Input Alamat Penduduk</b>
<form action="tambah.php" method="get">
  <table border="0">
    <tr>
      <td>NIK</td>
      <td>:</td>
      <td><input type="text" value="" name="NIK" /></td>
    </tr>
    <tr>
      <td>tanggal</td>
      <td>:</td>
      <td><input type="text" value="" name="tanggal" /></td>
	  <td>:</td>
    </tr>
	<tr>
      <td>jam</td>
      <td>:</td>
      <td><input type="text" value="" name="jam" /></td>
    </tr>
    <tr>
      <td>ruang</td>
      <td>:</td>
      <td><input type="text" value="" name="ruang" /></td>
    </tr>
    <tr>
      <td><input type="submit" value="Kirim" name="kirim" /></td>
    </tr>
  </table>
</form>

<?php
require( 'database.php' );
?>
<a href = "proposal.php">proposal</a>
<a href = "index.php">peneliti</a>
<b>Daftar Nama peneliti</b>
<table border="1" style="border-collapse:collapse;text-align:left;" width="500px;">
  <tr>
    <th>NIK</th>
    <th>tanggal</th>
	<th>jam</th>
    <th>ruang</th>
    <th colspan="2">Action</th>
  </tr>
  <?php foreach($test->tampil() as $value){ ?>
  <tr>
    <td><?php echo $value['NIK']; ?></td>
    <td><?php echo $value['tanggal']; ?></td>
	<td><?php echo $value['jam']; ?></td>
    <td><?php echo $value['ruang']; ?></td>
    <td><a href="edit.php?id=<?php echo $value['id']; ?>">Edit</a></td>
    <td><a href="hapus.php?id=<?php echo $value['id']; ?>">Delete</a></td>
  </tr>
  <?php } ?>
</table>