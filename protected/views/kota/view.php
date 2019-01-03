<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2017-09-26 04:21:18
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kota'=>array('index'), $model->id_kota),
));
?>

<legend>Informasi Detail Kota #<?php echo $model->id_kota; ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
   'data'=>$model,
   'type'=>'bordered striped condensed',
   'attributes'=>array(
 
		 array(
			'name'=>'id_kota',
			'type'=>'html',
			'value'=>$model->id_kota,
		   ),
 
		 array(
			'name'=>'id_provinsi',
			'type'=>'html',
			'value'=>$model->id_provinsi,
		   ),
 
		 array(
			'name'=>'nama_kota',
			'type'=>'html',
			'value'=>$model->nama_kota,
		   ),
   ),
)); ?>
 



