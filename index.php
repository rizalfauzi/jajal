<b>Input Alamat Penduduk</b>
<form action="insert.php" method="get">
  <table border="0">
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" value="" name="nama" /></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><input type="text" value="" name="alamat" /></td>
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
<a href = "seminar.php">seminar</a>
<b>Daftar Nama peneliti</b>
<table border="1" style="border-collapse:collapse;text-align:left;" width="500px;">
  <tr>
    <th>Nama</th>
    <th>Alamat</th>
    <th colspan="2">Action</th>
  </tr>
  <?php foreach($test->Select() as $value){ ?>
  <tr>
    <td><?php echo $value['nama']; ?></td>
    <td><?php echo $value['alamat']; ?></td>
    <td><a href="update.php?id=<?php echo $value['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $value['id']; ?>">Delete</a></td>
  </tr>
  <?php } ?>
</table>