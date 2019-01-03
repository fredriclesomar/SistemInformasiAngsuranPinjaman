<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2017-09-26 04:02:18
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Provinsi'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data Provinsi</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>