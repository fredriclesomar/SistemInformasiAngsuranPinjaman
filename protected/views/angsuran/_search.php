<?php 
/********************************************************
* dibuat oleh : Badiyanto 
* CRUD generator : Yii Bootstrap  
* tanggal     : 2017-11-14 03:05:52
********************************************************/
?>
<br>
<?php 
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'type'=>'horizontal',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
  )); ?>

    <?php echo $form->textFieldRow($model,'pinjaman_id',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'anggota_id',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'angsuran_ke',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'besar_angsuran',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'tanggal_jatuh_tempo',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'tanggal_bayar',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'status_bayar',array('class'=>'span5')); ?>

	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'C a r i',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
