<?php
/********************************************************
 * dibuat oleh    : FredricLesomar   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-10-10 01:31:32
 ********************************************************/
?>
<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anggota_id')); ?>:</b>
	<?php echo CHtml::encode($data->anggota_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_pinjaman_id')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_pinjaman_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('besar_pinjaman')); ?>:</b>
	<?php echo CHtml::encode($data->besar_pinjaman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diangsur_kali')); ?>:</b>
	<?php echo CHtml::encode($data->diangsur_kali); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_jatuh_tempo')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_jatuh_tempo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pokok_dibayar')); ?>:</b>
	<?php echo CHtml::encode($data->pokok_dibayar); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	*/ ?>

</div>