<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2017-10-09 23:26:42
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Pekerjaan'=>array('index'), 'Ubah Data'),
));
?>
<legend>Pembaruan Data Pekerjaan</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>