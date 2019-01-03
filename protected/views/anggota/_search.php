<?php 
/********************************************************
* dibuat oleh : FredricLesomar 
* CRUD generator : Yii Bootstrap  
* tanggal     : 2017-10-10 01:25:44
********************************************************/
?>
<br>
<?php 
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'type'=>'horizontal',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
  )); ?>

    <?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>60)); ?>

    <?php echo $form->textFieldRow($model,'alamat',array('class'=>'span5','maxlength'=>75)); ?>

    <?php echo $form->textFieldRow($model,'jenis_kelamin',array('class'=>'span5','maxlength'=>1)); ?>

    <?php echo $form->textFieldRow($model,'tanggal_lahir',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'agama_id',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'pekerjaan_id',array('class'=>'span5')); ?>

    <?php echo $form->textFieldRow($model,'penghasilan_perbulan',array('class'=>'span5')); ?>

	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'C a r i',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
