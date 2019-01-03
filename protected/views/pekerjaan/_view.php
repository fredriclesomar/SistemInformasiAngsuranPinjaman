<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-10-09 23:26:42
 ********************************************************/
?>
<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->pekerjaan); ?>
	<br />


</div>