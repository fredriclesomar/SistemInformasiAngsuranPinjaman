<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2017-10-09 23:26:42
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Pekerjaan'=>array('index'), $model->id),
));
?>

<legend>Informasi Detail Pekerjaan #<?php echo $model->id; ?></legend>

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
			'name'=>'pekerjaan',
			'type'=>'html',
			'value'=>$model->pekerjaan,
		   ),
   ),
)); ?>
 



