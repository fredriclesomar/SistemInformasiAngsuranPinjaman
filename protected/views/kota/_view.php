<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-09-26 04:21:18
 ********************************************************/
?>
<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_kota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kota),array('view','id'=>$data->id_kota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_provinsi')); ?>:</b>
	<?php echo CHtml::encode($data->id_provinsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kota')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kota); ?>
	<br />


</div>