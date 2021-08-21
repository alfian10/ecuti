<div class="container-fluid">
	<?php foreach($formulir_masuk_sk as $fmsk_sk) : ?>

		 	<form action="<?php echo base_url().'sdn/formulir_masuk_sk/update' ?>" method="POST" >
		 		
		 		<div class="form-group">
		 		<label>Status Update</label>
		 		<input type="hidden" name="id" class="form-control" value="<?php echo $fmsk_sk->id ?>">
		 		<select class="form-control" name="status" value="<?php echo $fmsk_sk->status ?>">

		 			<option>Diterima</option>
		 			<option>Ditolak</option>
		 		</select>
		 		</div>

		 		<div class="form-group">
		 		<label>Alasan</label>
		 		<input type="hidden" name="id" class="form-control" value="<?php echo $fmsk_sk->id ?>">
		 		<br>
		 		<textarea rows="7" cols="70" name="alasan" value="<?php echo $fmsk_sk->alasan ?>"></textarea>

		 		</div>
		 		
		 		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		 	</form>

		 <?php endforeach; ?>
</div>