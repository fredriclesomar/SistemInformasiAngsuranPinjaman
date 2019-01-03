 <?php
/********************************************************
 * dibuat oleh : Badiyanto  
 * CRUD generator : Yii Bootstrap  
 * tanggal     : 2017-09-26 04:21:18
 ********************************************************/
?>

 <?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kotas'),
));


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('kota-grid', {
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

<legend>Menampilkan Data  Kota</legend>
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

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'kota-grid',
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
			'name'=>'id_kota',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->id_kota)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'id_provinsi',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->id_provinsi)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'nama_provinsi',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->idProvinsi->nama_provinsi)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'nama_kota',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->nama_kota)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
		    'header'=>'AKSI',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width:50px','style'=>'text-align:center'),
        ),
		
	),
)); ?>

