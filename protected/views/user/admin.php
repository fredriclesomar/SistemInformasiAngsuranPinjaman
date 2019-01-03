 <?php
/********************************************************
 * dibuat oleh : FredricLesomar  
 * CRUD generator : Yii Bootstrap  
 * tanggal     : 2017-11-21 03:53:18
 ********************************************************/
?>

 <?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Users'),
));


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
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
Menampilkan Data  Users
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
	'id'=>'user-grid',
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
			'name'=>'full_name',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->full_name)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'username',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->username)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'password',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->password)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'email',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->email)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
			'name'=>'active',
			'type'=>'raw',
			'value'=>'CHtml::encode($data->active)',
			'htmlOptions'=>array('width'=>''),
		),
		array(
		    'header'=>'AKSI',
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width:50px','style'=>'text-align:center'),
        ),
		
	),
)); ?>

