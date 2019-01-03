<?php
/********************************************************
* dibuat oleh    : FredricLesomar
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2017-11-21 03:53:18
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('User'=>array('index'), $model->id),
));
?>

<legend>Informasi Detail User #<?php echo $model->id; ?></legend>

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
			'name'=>'full_name',
			'type'=>'html',
			'value'=>$model->full_name,
		   ),
 
		 array(
			'name'=>'username',
			'type'=>'html',
			'value'=>$model->username,
		   ),
 
		 array(
			'name'=>'password',
			'type'=>'html',
			'value'=>$model->password,
		   ),
 
		 array(
			'name'=>'email',
			'type'=>'html',
			'value'=>$model->email,
		   ),
 
		 array(
			'name'=>'active',
			'type'=>'html',
			'value'=>$model->active,
		   ),
   ),
)); ?>
 



