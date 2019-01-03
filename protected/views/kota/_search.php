<?php 
/********************************************************
* dibuat oleh : Badiyanto 
* CRUD generator : Yii Bootstrap  
* tanggal     : 2017-09-26 04:21:18
********************************************************/
?>
<br>
<?php 
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'type'=>'horizontal',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
  )); ?>

    <?php echo $form->textFieldRow($model,'id_provinsi',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'nama_kota',array('class'=>'span5','maxlength'=>75)); ?>

	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'C a r i',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
