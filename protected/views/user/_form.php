<?php
/********************************************************
 * dibuat oleh    : FredricLesomar   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-11-21 03:53:18
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'method'=>'post',
            'type'=>'horizontal',
            'clientOptions'=>array(
             'validateOnType'=>true,
             'validateOnChange' => true,
            ),
            'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>
<br>
<p class="help-block">Yang bertanda  <span class="required">*</span> isian tidak boleh kosong.</p>
<br>

<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->textFieldRow($model,'full_name',array('class'=>'span5','maxlength'=>50)); ?>
	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>128)); ?>
	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>128)); ?>
	<?php echo $form->passwordFieldRow($model,'password_repeat',array('class'=>'span5','maxlength'=>128)); ?>
	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>128)); ?>
	<?php echo $form->checkBoxRow($model,'active'); ?>
 
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'S i m p a n' : 'U p d a t e',
		)); ?>
</div> 	

<?php $this->endWidget(); ?>
