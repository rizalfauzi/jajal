<!DOCTYPE html>
<html>
<head>
  <title>Tugas Pertama</title>
  <link rel="stylesheet" type="text/css" href="tamp.css" />
  <link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
</head>
<body background="wall.jpg">
<div class="head">
	<div class="atas">
		<div class="judul">
				<br><span><h3>LEMBAGA PENELITIAN <BR>UNIVERSITAS NEGERI SURABAYA</h3></span>
		</div>
	</div>
</div>
<div class="back">
	<div class="satu" align="center">
        <?php
require( 'database.php' );
?>
	<table border="1" style="border-collapse:collapse;text-align:left;" width="500px;">
  <tr>
    <th><font color="white">NIK</font></th>
    <th><font color="white">tanggal</font></th>
	<th><font color="white">jam</font></th>
    <th><font color="white">Ruang</font></th>
    <th colspan="2"><font color="white">Action</font></th>
  </tr>
  <?php foreach($test->tampil() as $value){ ?>
  
  <tr>
    <td><font color="white"><?php echo $value['NIK']; ?></font></td>
    <td><font color="white"><?php echo $value['tanggal']; ?></font></td>
	<td><font color="white"><?php echo $value['jam']; ?></font></td>
    <td><font color="white"><?php echo $value['ruang']; ?></font></td>
    <td><font color="white"><a href="edit.php?id=<?php echo $value['id']; ?>">Edit</a></font></td>
    <td><font color="white"><a href="hapus.php?id=<?php echo $value['id']; ?>">Delete</a></font></td>
  </tr>
  <?php } ?>
</table>
    </div>
	</div>
	<div class="menu" align="center">
	<br><br>
	<li><a href="depan.php">Home</a></li><br>
    <li><a class="current" href="jadwal.php">Lihat Jadwal</a></li><br>
    <li><a href="nilai.php">Lihat Nilai</a></li><br>
    <li><a href="#">Contact</a></li><br>
	</div>
	<div class="baru">
	</div>
	<div class="isi">
		<p>Dari sejarah institusinya, Universitas Negeri Surabaya (UNESA) berawal dari cikal bakal intergrasi kursus B-I dan B-II yang ada di Surabaya ke dalam FKIP pada tahun 1960. Kemudian pada tahun 1961 FKIP diintegrasikan dengan PTPG menjadi FKIP Universitas Airlangga di Malang Cabang Surabaya. Pada tahun 1963 FKIP Airlangga Surabaya diintergrasikan lagi dengan IPG menjadi IKIP. Setelah IKIP berdiri, FKIP Malang menjadi IKIP Malang dan melepaskan diri dari Universitas Airlangga. Pada saat itu IKIP memiliki banyak cabang, antara lain Cabang Surabaya, Cabang Madiun, Cabang Singaraja, dan Cabang Kupang. FKIP Malang Cabang Surabaya menjadi IKIP Malang Cabang Surabaya.</p>
		<p>Selanjutnya berdasarkan Surat Keputusan Menteri PTIP Nomor 182 Tahun 1964, berdirilah IKIP Surabaya. Peresmiannya dilaksanakan pada tanggal 19 Desember 1964 pukul 08.00 WIB, di jalan Kayoon 72-74 Surabaya. Saat itu IKIP Surabaya memiliki lima fakultas, yaitu Fakultas Ilmu Pendidikan (FIP), Fakultas Keguruan Ilmu Sosial (FKIS), Fakultas Keguruan Sastra Seni (FKSS), Fakultas Keguruan Ilmu Eksakta (FKIE), Fakultas Keguruan Ilmu Teknik (FKIT). Kemudian bertambah satu fakultas lagi, berdasarkan SK Menteri Pendidikan dan Kebudayaan Nomor: 042/O/1977 Sekolah Tinggi Olahraga (STO) berintegrasi ke IKIP Surabaya dengan nama Fakultas Keguruan Ilmu Keolahragaan (FKIK).</p>
	</div>
</div>
<div class="foot">
	<img src="t.png" width="100px" height="100px"/>
	<img src="f.png" width="100px" height="100px"/><p align="right">Copyright &copy; 2015 <a href="#">Independent</a> | Designed by <a href="#">Nena Saraswati</a></p>
	</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>
