<?php
/********************************************************
 * dibuat oleh : Badiyanto  
 * CRUD generator : Yii Bootstrap  
 * tanggal     : 2017-10-09 23:26:42
 ********************************************************/
?>
<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Pekerjaans'),
));
?>
<div class="form">
 
<center>
<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/admin.png'),
            array('admin'),array('title'=>'Manajemen Data')); ?>
 

<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/tambah.png'),
            array('create'),array('title'=>'Menambah Data')); ?>
 
			
</center>
</div>

<legend>
Pekerjaan</legend>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
