<?php
/********************************************************
 * dibuat oleh    : FredricLesomar   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-10-10 01:25:44
 ********************************************************/
?>
<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama_id')); ?>:</b>
	<?php echo CHtml::encode($data->agama_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pekerjaan_id')); ?>:</b>
	<?php echo CHtml::encode($data->pekerjaan_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('penghasilan_perbulan')); ?>:</b>
	<?php echo CHtml::encode($data->penghasilan_perbulan); ?>
	<br />

	*/ ?>

</div>