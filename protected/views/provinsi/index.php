<?php
/********************************************************
 * dibuat oleh : Badiyanto  
 * CRUD generator : Yii Bootstrap  
 * tanggal     : 2017-09-26 04:02:18
 ********************************************************/
?>
<?php
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Provinsis'),
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

<legend>Provinsi</legend>
<p>Halaman perekaman data provinsi.</p>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
