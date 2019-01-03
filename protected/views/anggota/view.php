<?php
/********************************************************
* dibuat oleh    : Badiyanto
* CRUD generator : Yii Bootstrap  \n";
* tanggal        : 2017-10-10 01:25:44
********************************************************/

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Anggota'=>array('index'), $model->id),
));
?>

<legend>Informasi Detail Member #<?php echo $model->id; ?></legend>

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
			'name'=>'nama',
			'type'=>'html',
			'value'=>$model->nama,
		   ),
 
		 array(
			'name'=>'alamat',
			'type'=>'html',
			'value'=>$model->alamat,
		   ),
 
		 array(
			'name'=>'jenis_kelamin',
			'type'=>'html',
			'value'=>$model->jenis_kelamin,
		   ),
 
		 array(
			'name'=>'tanggal_lahir',
			'type'=>'html',
			'value'=>$model->tanggal_lahir,
		   ),
 
		 array(
			'name'=>'agama_id',
			'type'=>'html',
			'value'=>$model->agama_id,
		   ),
 
		 array(
			'name'=>'pekerjaan_id',
			'type'=>'html',
			'value'=>$model->pekerjaan_id,
		   ),
 
		 array(
			'name'=>'penghasilan_perbulan',
			'type'=>'html',
			'value'=>$model->penghasilan_perbulan,
		   ),
   ),
)); ?>
 



