<b>Input Alamat Penduduk</b>
<form action="insertproposal.php" method="get">
  <table border="0">
    <tr>
      <td>Judul</td>
      <td>:</td>
      <td><input type="text" value="" name="judul" /></td>
    </tr>
    <tr>
      <td>NIK</td>
      <td>:</td>
      <td><input type="text" value="" name="NIK" /></td>
    </tr>
	<tr>
      <td>Nilai angka</td>
      <td>:</td>
      <td><input type="text" value="" name="Nilaiangka" /></td>
    </tr>
    <tr>
      <td>Nilai Huruf</td>
      <td>:</td>
      <td><input type="text" value="" name="nilaiHuruf" /></td>
    </tr>
    <tr>
      <td><input type="submit" value="Kirim" name="kirim" /></td>
    </tr>
  </table>
</form>

<?php
require( 'database.php' );
?>
<a href = "index.php">Peneliti</a>
<b>Daftar Nama peneliti</b>
<table border="1" style="border-collapse:collapse;text-align:left;" width="500px;">
  <tr>
    <th>Judul</th>
    <th>NIK</th>
	<th>Nilai Angka</th>
    <th>Nilai Huruf</th>
    <th colspan="2">Action</th>
  </tr>
  <?php foreach($test->Selectp() as $value){ ?>
  <tr>
    <td><?php echo $value['judul']; ?></td>
    <td><?php echo $value['NIK']; ?></td>
	<td><?php echo $value['Nilaiangka']; ?></td>
    <td><?php echo $value['nilaiHuruf']; ?></td>
    <td><a href="up.php?id=<?php echo $value['id']; ?>">Edit</a></td>
    <td><a href="del.php?id=<?php echo $value['id']; ?>">Delete</a></td>
  </tr>
  <?php } ?>
</table>