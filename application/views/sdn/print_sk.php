<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>

		<div class="card">
	  <div class="card-body">
	  	<?php foreach($formulir_masuk_sk as $fmsk_sk): ?>

				<p><h4 align="center"><strong>SURAT KEPUTUSAN</strong><br><br>
				KETUA SEKOLAH TINGGI MANAJEMEN INFORMATIKA DAN KOMPUTER AKAKOM YOHYAKARTA<br>
				NOMOR : <?php echo $fmsk_sk->no_surat ?><br><br>
				tentang <br><br>
				PEMBERIAN TUGAS <?php echo $fmsk_sk->deskripsi?> DAN BIAYA PELAKSANAAN <?php echo $fmsk_sk->deskripsi ?><br>
				BAGI PARA DOSEN TETAP STMIK AKAKOM YOGYAKARTA <br>
				TAHUN ANGGARAN 2019/2020
				</h4></p>
				<p>
					Ketua Sekolah Tinggi Manajemen Informatika Dan Komputer AKAKOM Yogyakarta <br></p>
				<p>
					Menimbang  :<br>1. Bahwa dalam rangka peminaan dan pengembangan sumber daya manusia di bidang <?php echo $fmsk_sk->deskripsi?> bagi dosen tetap STMIK AKAKOM Yogyakarta, maka perlu diberikan bantuan biaya kepada para dosen tersebut dalam surat keputusan <br><br>

					2. Bahwa STMIK AKAKOM Yogyakarta melalui Pusat Penelitian dan PPM tahun anggaran 2019/2020 menyediakan dana bantuan pelaksanaan <?php echo $fmsk_sk->deskripsi?> tersebut.
				</p><br>
				<p>
					Mengingat : <br>1. Statuta Sekolah Tinggi Manajemen Informatika Dan Komputer AKAKOM Yogyakarta;<br><br>

					2. Peraturan Yayasan Pendidikan Widya Bakti Nomor 02 Tahun 1993;
				</p>
				<p><br>
					Memperhatikan : <br>1. Undang-Undang Republik Indonesia Nomor : 20 tahun 2003 tentang Sistem Pendidikan Nasional <br><br>
					2. Pencairan dana pengabdian akan dibayarkan sebanyak dua tahap, dengan perincian sebagai berikut :<br>
					a. Tahap I, 30% dari biaya yang ditetapkan, dibayarkan pada saat proposal pengabian tela di review dan disetujui serta diterbitkannya surat keputusan,<br><br>
					b. Tahap II, 70% dari biaya yang ditetapkan, dibayarkan setelah yang bersangkutan melaksanakan pengabdian masyarakat dan menyerahkan laporan dalam bentuk softfile kepada Puslit dan PPM.
				</p><br><br>
	    		<p align="">
	    			Ditetapkan   : di Yogyakarta <br>
	    			Pada Tanggal : <?php echo $fmsk_sk->tgl ?> <br>
	    			Ketua, <br><br><br>
	    			Ir. Totok Suprawoto, M.M.,M.T. <br>
	    			NPP : <?php echo $fmsk_sk->nip ?>
	    		</p>
	    		
	<?php endforeach; ?>
	  </div>
	</div>
	</table>
	
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>