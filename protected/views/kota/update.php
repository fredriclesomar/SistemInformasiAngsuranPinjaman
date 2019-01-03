<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2017-09-26 04:21:18
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Kota'=>array('index'), 'Ubah Data'),
));
?>
<legend>Pembaruan Data Kota</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>