<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2017-11-14 03:05:52
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Angsuran'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data Angsuran</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>