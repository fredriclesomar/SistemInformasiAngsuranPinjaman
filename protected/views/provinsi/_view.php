<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-09-26 04:02:18
 ********************************************************/
?>
<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_provinsi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_provinsi),array('view','id'=>$data->id_provinsi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_provinsi')); ?>:</b>
	<?php echo CHtml::encode($data->nama_provinsi); ?>
	<br />


</div>