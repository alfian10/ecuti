<!DOCTYPE html>
<html>
<head>
</head>

<body>

	<table>
		<div class="card">
	  <div class="card-body">
	  	<?php foreach($formulir_masuk_dosen as $fmsk_dsn): ?>
	    <div class="row">
	    	<p align="right">Yogyakarta, <?php echo $fmsk_dsn->tgl ?></p>
	    	<br>
	    	<p align="left">Kepada Yth.	<br>
	    	Kepala Pimpinan STMIK AKAKOM <br>
	    	Jl. Janti Yogyakarta</p>
	    	<br>
	    	<p>Dengan Hormat,<br>
	    	Saya yang bertanda tangan dibawah ini :</p>

	    	<div class="col-md8">
	    		<table class="table" >
	    			<tr>
	    				<td></td>
	    				<td>No. Surat</td>
	    				<td><strong> : <?php echo $fmsk_dsn->no_surat ?></strong></td>
	    			</tr>
	    			<br>

	    			<tr>
	    				<td></td>
	    				<td>NIP</td>
	    				<td><strong> : <?php echo $fmsk_dsn->nip_dosen ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Nama</td>
	    				<td><strong> : <?php echo $fmsk_dsn->nama_dosen ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Email</td>
	    				<td><strong> : <?php echo $fmsk_dsn->email ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Prodi</td>
	    				<td><strong> : <?php echo $fmsk_dsn->prodi ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>No. Hp</td>
	    				<td><strong> : <?php echo $fmsk_dsn->no_hp ?></strong></td>
	    			</tr>
	    			<br>
	    			<tr>
	    				<td></td>
	    				<td>Awal Cuti</td>
	    				<td><strong> : <?php echo $fmsk_dsn->awal_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Akhir Cuti</td>
	    				<td><strong> : <?php echo $fmsk_dsn->akhir_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Keterangan</td>
	    				<td><strong> : <?php echo $fmsk_dsn->ket_cuti ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td></td>
	    				<td>Status</td>
	    				<td><strong> : <?php echo $fmsk_dsn->status ?></strong></td>
	    			</tr>
	    			<tr>

	    				<td></td>
	    				<td>Alasan</td>
	    				<td><strong> : <?php echo $fmsk_dsn->alasan ?></strong></td>
	    			</tr>
	    		</table>
	    	</div>
	    	

	    </div>
	<?php endforeach; ?>
	  </div>
	</div>
	</table>

	<p>Dengan surat ini saya bermaksud untuk memohon cuti kerja selama <?php echo $fmsk_dsn->awal_cuti ?> sampai <?php echo $fmsk_dsn->akhir_cuti ?> hari kerja, hal ini dikarenakan saya <?php echo $fmsk_dsn->ket_cuti ?>.</p>
	<p>Demikian surat cuti kerja ini saya ajukan. Atas perhatian serta kebijaksanaannya saya ucapkan terimakasih.</p>
	<br>
	<p>Hormat saya,</p>
	<br>
	<br>
	<p><?php echo $fmsk_dsn->nama_dosen ?></p>

	<script type="text/javascript">

		window.print("print_dosen");

	</script>
</body>

</html>