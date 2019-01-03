<?php
/********************************************************
 * dibuat oleh    : Badiyanto   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-09-26 04:21:18
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
	<!--?php echo $form->textFieldRow($model,'id_provinsi',array('class'=>'span5')); ?-->
	<?php 
		echo $form->dropDownListRow($model, 'pinjaman_id', 
		CHtml::listData(Angsuran::model()->findAll(), 'pinjaman_id', 'pinjaman_id'), array('prompt' => '-- pilih --', 'class'=> 'span5')); 
	?>
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'info',
			'label'=>'Lihat',
		)); ?>
</div> 	

<?php $this->endWidget(); ?>
