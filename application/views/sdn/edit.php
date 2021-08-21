<div class="container-fluid">
	<?php foreach($formulir_masuk_dosen as $fmsk_dsn) : ?>

		 	<form action="<?php echo base_url().'sdn/formulir_masuk_dosen/update' ?>" method="POST" >
		 		
		 		<div class="form-group">
		 		<label>Status Update</label>
		 		<input type="hidden" name="id" class="form-control" value="<?php echo $fmsk_dsn->id ?>">
		 		<select class="form-control" name="status" value="<?php echo $fmsk_dsn->status ?>">

		 			<option>Diterima</option>
		 			<option>Ditolak</option>
		 		</select>
		 		</div>

		 		<div class="form-group">
		 		<label>Alasan</label>
		 		<input type="hidden" name="id" class="form-control" value="<?php echo $fmsk_dsn->id ?>">
		 		<br>
		 		<textarea rows="7" cols="70" name="alasan" value="<?php echo $fmsk_dsn->alasan ?>"></textarea>

		 		</div>
		 		
		 		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		 	</form>

		 <?php endforeach; ?>
</div>