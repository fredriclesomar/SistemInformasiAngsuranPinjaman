<?php
/********************************************************
 * dibuat oleh    : FredricLesomar   
 * CRUD generator : Yii Bootstrap  
 * tanggal        : 2017-10-10 01:31:32
 ********************************************************/
?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pinjaman-form',
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
<?php if (Yii::app()->user->hasFlash('error')) :  ?>
<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('error'); ?>
</div>
<?php endif; ?>
<?php echo $form->errorSummary($model); ?>
	
	<?php //echo $form->textFieldRow($model,'anggota_id',array('class'=>'span5')); ?>
	<?php 
		echo $form->dropDownListRow($model, 'anggota_id', 
		CHtml::listData(Anggota::model()->findAll(), 'id', 'nama'), array('prompt' => '-- Pilih Member --'),
		array('prepend'=>'<i class="icon-user"></i>')); 
	?>
	<?php //echo $form->textFieldRow($model,'jenis_pinjaman_id',array('class'=>'span5')); ?>
	<?php 
		// echo $form->dropDownListRow($model, 'jenis_pinjaman_id', 
		// CHtml::listData(JenisPinjaman::model()->findAll(), 'id', 'jenis_pinjaman'), array('prompt' => '-- Pilih Jenis Pinjaman --'),
		// array('prepend'=>'<i class="icon-pencil"></i>')); 
	?>

	<?php echo $form->dropDownListRow($model,'jenis_pinjaman_id',CHtml::listData(
		               JenisPinjaman::model()->findAll(),'id','jenis_pinjaman'),
                      array('prompt'=>'-- Pilih Jenis Pinjaman --','style'=>'width:300px;',
					        'onChange'=>"{selectBunga();}")); ?>

	<?php 
		if(!$model->isNewRecord) { //jika ubah
			$model->bunga = JenisPinjaman::model()
											->findByPk($model->jenis_pinjaman_id)
											->bunga; 
			$model->besar_angsuran = ($model->besar_pinjaman + ($model->besar_pinjaman * $model->bunga / 100)) / $model->diangsur_kali;
		}
	?>

	<?php echo $form->textFieldRow($model,'bunga',array('readOnly'=>true, 'class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'besar_pinjaman',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'diangsur_kali',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pokok_dibayar',array('readOnly'=>true, 'class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'besar_angsuran',array('readOnly'=>true, 'class'=>'span5')); ?>

	<?php echo $form->datepickerRow($model,'tanggal_jatuh_tempo',
										array('options'=>array('format'=>'yyyy-mm-dd')),
										array('prepend'=>'<i class="icon-calendar"></i>')); ?>

	<?php //echo $form->textFieldRow($model,'tanggal',array('class'=>'span5')); ?>
 
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Simpan' : 'Update',
		)); ?>
</div> 	

<?php $this->endWidget(); ?>

<script type="text/javascript">
	function selectBunga()
	{
		
	var data = "id="+$('#Pinjaman_jenis_pinjaman_id').val() ;
	//  alert(data);
	jQuery.ajax({
	        'type':'GET',
	        'url':'<?php echo CController::createUrl('pilihBunga');?>',
	        'data': data,
	        'success':function(data){
	                    $('#Pinjaman_bunga').val(data.bunga);
				        },
			'error': function(data) { // if error occured
	             alert('error'+data);
	        },
	        'dataType':'json'
	      });
	}

	// menghitung besar pokok pinjaman//
	 $("#Pinjaman_pokok_dibayar").live('blur',
	 function(event) 
	   {
	   var a = $("#Pinjaman_besar_pinjaman").val();
	   var b = $("#Pinjaman_bunga").val();
	   
	   if ((a==0) || (b==0))
	      {
		  $('#Pinjaman_pokok_dibayar').val("0");
		  return false;
		  }
	  else	  
	    {
		var pokok = parseInt(a)+(parseInt(a) * parseInt(b)/100);
	    //var p=pokok.toFixed(2); 
	      $('#Pinjaman_pokok_dibayar').val(pokok);
		  return false; 
		}   
	  }
	 );

	  // menghitung besar pokok pinjaman//
 $("#Pinjaman_besar_angsuran").live('blur',
 function(event) 
   {
   var a = $("#Pinjaman_pokok_dibayar").val();
   var b = $("#Pinjaman_diangsur_kali").val();
   
   if ((a==0) || (b==0))
      {
	  $('#Pinjaman_besar_angsuran').val("0");
	  return false;
	  }
  else	  
    {
	var ang = parseInt(a)/parseInt(b);
    //var p=pokok.toFixed(2); 
      $('#Pinjaman_besar_angsuran').val(ang);
	  return false; 
	}   
  }
 );
</script>
