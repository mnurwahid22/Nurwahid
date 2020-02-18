<?php include"include/koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
	<img src="image/header.jpg">
	</header>
		<menu>
			<li><a href="">Beranda</a></li>
			<li><a href="login/formlogin1.php">Admin Area</a></li>
		</menu>
	<table>
		<tr>
			<td>
				<table>
					<?php 
					$querysekilas = "SELECT * FROM tb_sekilas" ;
					$dataquery	  = mysqli_query($koneksi,$querysekilas)or die(mysqli_error($koneksi));
					$hasil=mysqli_fetch_array($dataquery,MYSQLI_ASSOC);
					$foto=$hasil['foto'];
					$keterangan=nl2br($hasil['keterangan']);
					?>
					<tr>
						<td align="center"><img src="image/<?php echo($foto); ?>"></td>
					</tr>
					<tr>
						<td class="pt">
							<p><?php echo$keterangan; ?></p>
						</td>
					</tr>

				</table>
			</td>
			<td>
				<table>
					<?php 
					$tentang = "SELECT * FROM tb_biodata" ;
					$datatentang	  = mysqli_query($koneksi,$tentang)or die(mysqli_error($koneksi));
					$ket=mysqli_fetch_array($datatentang,MYSQLI_ASSOC);
					$nama=$ket['namalengkap'];
					$tempatlahir=$ket['tempatlahir'];
					$tgl=$ket['tanggallahir'];
					$almt=$ket['alamat'];
					$agama=$ket['agama'];
					$stts=$ket['statuspernikahan'];
					$tlpn=$ket['telepon'];
					$email=$ket['email'];
					$web=$ket['website'];
					$hobi=$ket['hobi'];
					?>
					<tr>
						<td colspan="4" style="text-align: center; background-color: green;border-radius: 100px;color: #FFD700"><b>Tentang</b></td>
					</tr>
					<tr>
						<td><b>Nama</b></td>
						<td>:</td>
						<td><?php echo$nama; ?></td>
					</tr>
					<tr>
						<td><b>Tempat,Tanggal Lahir</b></td>
						<td>:</td>
						<td><?php echo$tempatlahir,$tgl; ?></td>
					</tr>
					<tr>
						<td><b>Alamat</b></td>
						<td>:</td>
						<td><?php echo$almt ?></td>
					</tr>
					<tr>
						<td><b>Agama</b></td>
						<td>:</td>
						<td><?php echo$agama ?></td>
					</tr>
					<tr>
								<td><b>Status Pernikahan</b></td>
								<td>:</td>
								<td><?php echo$stts ?></td>
					</tr>
					<tr>
								<td>Nomor Telpon</td>
								<td>:</td>
						<td><?php echo$tlpn ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><?php echo$email ?></td>
					</tr>
					<tr>
						<td>Website</td>
						<td>:</td>
						<td><?php echo$web ?></td>
					</tr>
					<tr>
						<td>Hobi</td>
						<td>:</td>
						<td><?php echo$hobi ?></td>
					</tr>
					<tr>

						<td colspan="4" style="text-align: center; background-color: green;border-radius: 100px;color: #FFD700"><b>Riwayat Jenjang Pendidikan Formal</b></td>
							<?php 
								$pendidikan = "SELECT * FROM tb_pendidikan" ;
								$sekolah	  = mysqli_query($koneksi,$pendidikan)or die(mysqli_error($koneksi));
								$ktrangan=mysqli_fetch_array($sekolah,MYSQLI_ASSOC);
								$sd=$ktrangan['sd'];
								$sdtahun=$ktrangan['sdtahun'];
								$smp=$ktrangan['smp'];
								$smptahun=$ktrangan['smptahun'];
								$sma=$ktrangan['sma'];
								$smatahun=$ktrangan['smatahun'];
								$sd=$ktrangan['sd'];
							?>
						</tr>
							<tr>
								<td><?php echo$sd ?></td>
								<td>:</td>
								<td><?php echo$sdtahun ?></td>
							</tr>
							<tr>
								<td><?php echo$smp ?></td>
								<td>:</td>
								<td><?php echo$smptahun ?></td>
							</tr>
							<tr>
								<td><?php echo$sma ?></td>
								<td>:</td>
								<td><?php echo$smatahun ?></td>
							</tr>
							<tr>
								<td colspan="4" style="text-align: center; background-color: green;border-radius: 100px;color: #FFD700"><b>Kemampuan</b></td>
									<?php 
									$kemampuann="SELECT* FROM tb_kemampuan";
									$dataqueryk= mysqli_query($koneksi,$kemampuann)or die(mysqli_error($koneksi));
									$no=0;

									foreach ($dataqueryk as $row){
									$no++;
									$kemampuann=$row['kemampuan'];
									$persen=$row['persen'];
									$keterangann=$row['keterangan'];
									 ?>
							 <tr>
							 	<td>
							 		<?php echo$no; ?>.
							 		<?php echo$kemampuann; ?>
							 			
							 	</td>
							 </tr>
							 <tr>
							 	<td style="padding-left: 40px;">
							 		<?php echo$persen; ?>%
							 	</td>
							 </tr>
							 <tr>
							 	<td style="padding-left: 40px;">
							 		<?php echo$keterangann; ?>
							 	</td>
							 </tr>
							<?php } ?>
								</table>
							</td>
						</tr>
	</table>

</body>
</html>