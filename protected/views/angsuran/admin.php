 <?php
/********************************************************
 * dibuat oleh : Badiyanto  
 * CRUD generator : Yii Bootstrap  
 * tanggal     : 2017-11-14 03:05:52
 ********************************************************/
?>

 <?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Angsurans'),
));


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('angsuran-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

$this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'helpdialog',
    'options'=>array(
        'title'=>'Bantuan',
        'autoOpen'=>false,
        'modal'=>true,
        'show'=>'slide',
		'hide'=>'slide',
    ),
));
echo $this->renderPartial('_help');
$this->endWidget();
?>

<legend>
Menampilkan Data  Angsuran
</legend>
<div class="form">
 
<center>
<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/daftar.png'),
            array('index'),array('title'=>'Daftar Detail')); ?>
 			
<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/cari.png'),'#',
            array('class'=>'search-button','title'=>'Pencarian Data')); ?>
 
<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/petunjuk.png'),'#',
            array('title'=>'Bantuan','onclick'=>"$('#helpdialog').dialog('open')",)); ?>
 <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/tambah.png'),
            array('create'),array('title'=>'Menambah Data')); ?>
 			
</center>
</div>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
	
	$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'angsuran-grid',
	'type'=>'bordered striped condensed',
	'dataProvider'=>$model->search(),
	'selectableRows'=>2,
	'template'=>'{items}{summary}{pager}',
	'columns'=>array(
	     array( //nomor urut
	       'header'=>'NO',
		   'value'=>'$this->grid->dataProvider->pagination->currentPage * 
		   $this->grid->dataProvider->pagination->pageSize + ($row+1)',
		   'htmlOptions'=>array('width'=>'3%','style'=>'text-align:center'),
		),
		array(
			'name'=>'id',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->id)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'pinjaman_id',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->pinjaman_id)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'anggota_id',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->anggota_id)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'angsuran_ke',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->angsuran_ke)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'besar_angsuran',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->besar_angsuran)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'tanggal_jatuh_tempo',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->tanggal_jatuh_tempo)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'tanggal_bayar',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->tanggal_bayar)',
			'htmlOptions'=>array('width'=>''),
		),
		
		array(
			'name'=>'status_bayar',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->status_bayar)',
			'htmlOptions'=>array('width'=>''),
		),
		
		array(
		    'header'=>'AKSI',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width:50px','style'=>'text-align:center'),
        ),
		
	),
)); ?>

