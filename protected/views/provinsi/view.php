<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2017-09-26 04:02:18
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Provinsi'=>array('index'), $model->id_provinsi),
));
?>

<legend>Informasi Detail Provinsi #<?php echo $model->id_provinsi; ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
   'data'=>$model,
   'type'=>'bordered striped condensed',
   'attributes'=>array(
 
		 array(
			'name'=>'id_provinsi',
			'type'=>'html',
			'value'=>$model->id_provinsi,
		   ),
 
		 array(
			'name'=>'nama_provinsi',
			'type'=>'html',
			'value'=>$model->nama_provinsi,
		   ),
   ),
)); ?>
 



