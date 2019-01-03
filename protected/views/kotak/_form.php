<?php
/* @var $this KotakController */
/* @var $model Kotak */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kotak-_form-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'panjang'); ?>
		<?php echo $form->textField($model,'panjang'); ?>
		<?php echo $form->error($model,'panjang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lebar'); ?>
		<?php echo $form->textField($model,'lebar'); ?>
		<?php echo $form->error($model,'lebar'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit', array('class'=>'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->