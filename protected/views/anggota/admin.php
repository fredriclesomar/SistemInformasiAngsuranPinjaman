 <?php
/********************************************************
 * dibuat oleh : Badiyanto  
 * CRUD generator : Yii Bootstrap  
 * tanggal     : 2017-10-10 01:25:44
 ********************************************************/
?>

 <?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Anggotas'),
));


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('anggota-grid', {
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
Menampilkan Data  Member
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

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'anggota-grid',
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
			'name'=>'nama',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->nama)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'alamat',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->alamat)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'jenis_kelamin',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->jenis_kelamin)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'tanggal_lahir',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->tanggal_lahir)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'agama_id',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->agama_id)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'pekerjaan_id',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->pekerjaan_id)',
			'htmlOptions'=>array('width'=>''),
		),
		/*
		array(
			'name'=>'penghasilan_perbulan',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->penghasilan_perbulan)',
			'htmlOptions'=>array('width'=>''),
		),
		*/
		array(
		    'header'=>'AKSI',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width:50px','style'=>'text-align:center'),
        ),
		
	),
)); ?>

