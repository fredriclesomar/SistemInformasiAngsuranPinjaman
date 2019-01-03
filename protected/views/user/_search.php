<?php 
/********************************************************
* dibuat oleh : FredricLesomar 
* CRUD generator : Yii Bootstrap  
* tanggal     : 2017-11-21 03:53:18
********************************************************/
?>
<br>
<?php 
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'type'=>'horizontal',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
  )); ?>

    <?php echo $form->textFieldRow($model,'full_name',array('class'=>'span5','maxlength'=>50)); ?>

    <?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>128)); ?>

    <?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>128)); ?>

    <?php echo $form->checkBoxRow($model,'active'); ?>

	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'C a r i',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
