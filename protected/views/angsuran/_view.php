<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-11-14 03:05:52
 ********************************************************/
?>
<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pinjaman_id')); ?>:</b>
	<?php echo CHtml::encode($data->pinjaman_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota_id')); ?>:</b>
	<?php echo CHtml::encode($data->anggota_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('angsuran_ke')); ?>:</b>
	<?php echo CHtml::encode($data->angsuran_ke); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('besar_angsuran')); ?>:</b>
	<?php echo CHtml::encode($data->besar_angsuran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_jatuh_tempo')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_jatuh_tempo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_bayar')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_bayar); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status_bayar')); ?>:</b>
	<?php echo CHtml::encode($data->status_bayar); ?>
	<br />

	*/ ?>

</div>