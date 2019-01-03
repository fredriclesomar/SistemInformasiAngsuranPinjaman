<?php 
	$model = new Kota;
	$id=$_GET['id'];
	// $sql = "SELECT kota.id_kota, kota.nama_kota, provinsi.nama_provinsi 
	// 		FROM kota INNER JOIN provinsi 
 //        	ON (kota.id_provinsi = provinsi.id_provinsi)
 //        	WHERE kota.id_provinsi = ".$id;
	//$hasil = Yii::app()->db->createCommand($sql)->query();
	$hasil = $model->model()->findAll(array("condition"=>"id_provinsi=$id",));
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	    'links'=>array('Daftar Kota Provinsi '.Provinsi::model()->findByPk($id)->nama_provinsi),
	));
?>
  	<table class="table table-striped table-responsive table-hover table-bordered">
		<tr>
			<th>ID Provinsi</th>
			<th>Nama Provinsi</th>
			<th>Nama Kota</th>
		</tr>
		<tr>
			<?php 
				foreach ($hasil as $data) {
			?>
				<tr>
					<td><?php echo $data->id_kota; ?></td>
					<td><?php echo $data->idProvinsi->nama_provinsi ?></td>
					<td><?php echo $data->nama_kota; ?></td>
				</tr>
			<?php } ?>
		</tr>
	</table>