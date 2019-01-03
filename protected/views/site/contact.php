<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Hubungi'),
));

?>

<h1>Hubungi Kami</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
		<?php echo $form->textFieldRow($model,'name',array("class"=>"span5")); ?>
	
		<?php echo $form->textFieldRow($model,'email'); ?>
		<?php echo $form->textFieldRow($model,'subject',array("class"=>"span5","maxlength"=>128)); ?>
	
		<?php echo $form->textAreaRow($model,'body',array("class"=>"span5", "cols"=>50)); ?>
	
	<?php if(CCaptcha::checkRequirements()): ?>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textFieldRow($model,'verifyCode'); ?>
	
     	<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
	<?php endif; ?>
   <div class="form-actions"> 

	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Submit',
		)); ?>
	
   </div>
<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>