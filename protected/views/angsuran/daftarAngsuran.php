<?php 
	$model = new Angsuran;
	$id=$_GET['idPinjaman'];
	// $sql = "SELECT kota.id_kota, kota.nama_kota, provinsi.nama_provinsi 
	// 		FROM kota INNER JOIN provinsi 
 //        	ON (kota.id_provinsi = provinsi.id_provinsi)
 //        	WHERE kota.id_provinsi = ".$id;
	//$hasil = Yii::app()->db->createCommand($sql)->query();
	$hasil = $model->model()->findAll(array("condition"=>"anggota_id=$id",));
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	    // 'links'=>array('Daftar Kota Provinsi '.Provinsi::model()->findByPk($id)->nama_provinsi),
	    'links'=>array('Daftar Angsuran '),
	));
?>
  	<table class="table table-striped table-responsive table-hover table-bordered">
		<tr>
			<!-- <th>ID Angsuran</th> -->
			<!-- <th>ID Pinjaman</th> -->
			<th>Nama Anggota</th>
			<th>Angsuran Ke</th>
			<th>Besar Angsuran</th>
			<th>Tanggal Jatuh Tempo</th>
			<th>Tanggal Bayar</th>
			<th>Status Bayar</th>
			<th>Aksi</th>
		</tr>
		<tr>
			<?php 
				foreach ($hasil as $data) {
			?>
				<tr>
					<!-- <td><?php echo $data->id; ?></td> -->
					<!-- <td><?php echo $data->pinjaman_id; ?></td> -->
					<td><?php echo $data->anggota->nama; ?></td>
					<td><?php echo $data->angsuran_ke; ?></td>
					<td><?php echo $data->besar_angsuran; ?></td>
					<td><?php echo $data->tanggal_jatuh_tempo; ?></td>
					<td><?php echo $data->tanggal_bayar; ?></td>
					<td>
						<?php 
							$data->status_bayar==0 ? $status="Belum Bayar" : $status="Sudah Bayar";
							echo $status;
						?>
					</td>
					<td>
						<?php if ($status == "Belum Bayar") {?>
						<a href="index.php?r=angsuran/daftarAngsuran&id=<?php echo $data->id; ?>&idPinjaman=<?php echo $data->pinjaman_id; ?>" class="btn btn-info">
							Bayar
						</a>
						<?php } ?>
					</td>
				</tr>
			<?php } ?>
		</tr>
	</table>