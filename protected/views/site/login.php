<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Login'),
));
?>
<legend>Login</legend>
<div class="form-back">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Yang Bertanda <span class="required">*</span> wajib diisi.</p>

		<?php echo $form->textFieldRow($model,'username'); ?>
		<?php echo $form->passwordFieldRow($model,'password'); ?>
		<?php echo $form->checkBoxRow($model,'rememberMe'); ?>
	
	<div class="form-actions"> 

	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Login',
		)); ?>
	
   </div>
	

<?php $this->endWidget(); ?>

</div>