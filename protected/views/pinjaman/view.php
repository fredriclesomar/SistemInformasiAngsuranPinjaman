<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2017-10-10 01:31:32
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Pinjaman'=>array('index'), $model->id),
));
?>

<legend>Informasi Detail Pinjaman #<?php echo $model->id; ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
   'data'=>$model,
   'type'=>'bordered striped condensed',
   'attributes'=>array(
 
		 array(
			'name'=>'id',
			'type'=>'html',
			'value'=>$model->id,
		   ),
 
		 array(
			'name'=>'anggota_id',
			'type'=>'html',
			'value'=>$model->anggota_id,
		   ),
 
		 array(
			'name'=>'jenis_pinjaman_id',
			'type'=>'html',
			'value'=>$model->jenis_pinjaman_id,
		   ),
 
		 array(
			'name'=>'besar_pinjaman',
			'type'=>'html',
			'value'=>$model->besar_pinjaman,
		   ),
 
		 array(
			'name'=>'diangsur_kali',
			'type'=>'html',
			'value'=>$model->diangsur_kali,
		   ),
 
		 array(
			'name'=>'tanggal_jatuh_tempo',
			'type'=>'html',
			'value'=>$model->tanggal_jatuh_tempo,
		   ),
 
		 array(
			'name'=>'pokok_dibayar',
			'type'=>'html',
			'value'=>$model->pokok_dibayar,
		   ),
 
		 array(
			'name'=>'tanggal',
			'type'=>'html',
			'value'=>$model->tanggal,
		   ),
   ),
)); ?>
 



