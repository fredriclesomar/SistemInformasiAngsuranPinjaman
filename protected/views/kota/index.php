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
?>
<div class="form">
 
<center>
<!-- ?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/admin.png'),
            array('admin'),array('title'=>'Manajemen Data')); ? -->

<?php echo CHtml::button('Admin', array('submit' => array('kota/admin'), 'class'=>'btn btn-danger', 'title'=>'Manajemen Data')); ?>
 
<?php echo CHtml::button('Tambah', array('submit' => array('kota/create'), 'class'=>'btn btn-danger', 'title'=>'Menambah Data')); ?>

<!--?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/tambah.png'),
            array('create'),array('title'=>'Menambah Data')); ?-->
 
			
</center>
</div>

<legend>Kota</legend>
<p>Halaman perekaman data kota.</p>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
