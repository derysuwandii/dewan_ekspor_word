<?php
//Menggabungkan dengan file koneksi yang telah kita buat
include 'koneksi.php';

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=dewan-word.doc");
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div align="center">
		<h2>Cara Ekspor Laporan/Data dari Database MySQL ke dalam Word Tanpa Plugin</h2>
		<h3>Sub Judul</h3>
		<p style="text-indent: 50px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>TABEL :</p>
		<table border="1">
	    	<thead>
	    		<tr>
	    			<td>No</td>
	    			<td>Nama Mahasiswa</td>
	    			<td>Alamat</td>
	    			<td>Jenis Kelamin</td>
	    			<td>Tanggal Masuk</td>
	    		</tr>
	    	</thead>
	    	<tbody>
				<?php
			        $no = 1;
			        $query = "SELECT * FROM tbl_mahasiswa ORDER BY nama_mahasiswa ASC";
			        $dewan1 = $db1->prepare($query);
			        $dewan1->execute();
			        $res1 = $dewan1->get_result();

			        if ($res1->num_rows > 0) {
				        while ($row = $res1->fetch_assoc()) {
				            $nama_mahasiswa = $row['nama_mahasiswa'];
				            $alamat = $row['alamat'];
				            $jenis_kelamin = $row['jenis_kelamin'];
				            $tgl_masuk = $row['tgl_masuk'];

							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$nama_mahasiswa."</td>";
								echo "<td>".$alamat."</td>";
								echo "<td>".$jenis_kelamin."</td>";
								echo "<td>".$tgl_masuk."</td>";
							echo "</tr>";
			    	} } else { 
			    		echo "<tr>";
			    			echo "<td colspan='5'>Tidak ada data ditemukan</td>";
			    		echo "</tr>";
			     	}
			    ?>
	    	</tbody>
	    </table>

	    <p>www.dewankomputer.com</p>
    </div>

</body>
</html>