<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2017-10-10 01:31:32
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Pinjaman'=>array('index'), 'Ubah Data'),
));
?>
<legend>Pembaruan Data Pinjaman</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>