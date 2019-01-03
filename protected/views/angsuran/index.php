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
Angsuran</legend>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
