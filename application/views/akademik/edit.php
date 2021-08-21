<div class="container-fluid">
	<?php foreach($formulir_masuk_mhs as $fmsk_mhs) : ?>

		 	<form action="<?php echo base_url().'akademik/formulir_masuk_mhs/update' ?>" method="POST" >
		 		
		 		<div class="form-group">
		 		<label>Status Update</label>
		 		<input type="hidden" name="id_mhs" class="form-control" value="<?php echo $fmsk_mhs->id_mhs ?>">
		 		<select class="form-control" name="status" value="<?php echo $fmsk_mhs->status ?>">

		 			<option>Diterima</option>
		 			<option>Ditolak</option>
		 		</select>
		 		</div>

		 		<div class="form-group">
		 		<label>Alasan</label>
		 		<input type="hidden" name="id" class="form-control" value="<?php echo $fmsk_mhs->id_mhs ?>">
		 		<br>
		 		<textarea rows="7" cols="70" name="alasan" value="<?php echo $fmsk_mhs->alasan ?>"></textarea>

		 		</div>
		 		
		 		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		 	</form>

		 <?php endforeach; ?>
</div>