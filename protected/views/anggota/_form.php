<?php
/********************************************************
 * dibuat oleh    : FredricLesomar   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-10-09 23:29:54
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'anggota-form',
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
<p class="help-block">Yang bertanda  <span class="required">*</span> wajib diisi.</p>
<br>

<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>60)); ?>
	<?php echo $form->textAreaRow($model,'alamat',array('class'=>'span5','maxlength'=>75)); ?>

	<?php echo $form->radioButtonListRow($model,'jenis_kelamin', 
										array('L'=> 'Laki-laki', 'P'=>'Perempuan')); ?>

	<?php echo $form->datepickerRow($model,'tanggal_lahir',
										array('options'=>array('format'=>'yyyy-mm-dd')),
										array('prepend'=>'<i class="icon-calendar"></i>')); ?>

	<?php //echo $form->textFieldRow($model,'agama_id',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model,'agama_id', 
										array('1'=> 'Islam', '2'=>'Katolik', '3'=>'Protestan', '4'=>'Hindu', 
										'5'=>'Budha', '6'=>'Lainnya'), array('prompt' => '-- Pilih Agama --'),
										array('prepend'=>'<i class="icon-search"></i>')); ?>

	<?php //echo $form->textFieldRow($model,'pekerjaan_id',array('class'=>'span5')); ?>

	<?php 
		echo $form->dropDownListRow($model, 'pekerjaan_id', 
		CHtml::listData(Pekerjaan::model()->findAll(), 'id', 'pekerjaan'), array('prompt' => '-- Pilih Pekerjaan --'),
		array('prepend'=>'<i class="icon-user"></i>')); 
	?>

	<?php echo $form->textFieldRow($model,'penghasilan_perbulan',array('class'=>'span5')); ?>
 
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'success',
			'label'=>$model->isNewRecord ? 'Simpan' : 'Update',
		)); ?>
</div> 	

<?php $this->endWidget(); ?>
