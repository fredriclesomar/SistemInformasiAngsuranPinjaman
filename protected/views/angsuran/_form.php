<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-11-14 03:05:52
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'angsuran-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
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
	
	<?php echo $form->textFieldRow($model,'pinjaman_id',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'anggota_id',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'angsuran_ke',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'besar_angsuran',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'tanggal_jatuh_tempo',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'tanggal_bayar',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'status_bayar',array('class'=>'span5')); ?>
 
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'S i m p a n' : 'U p d a t e',
		)); ?>
</div> 	

<?php $this->endWidget(); ?>
