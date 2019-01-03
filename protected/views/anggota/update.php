<?php
/********************************************************
 * dibuat oleh : Badiyanto   
 * tanggal     : 2017-10-10 01:25:44
 ********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Anggota'=>array('index'), 'Ubah Data'),
));
?>
<legend>Mengubah Data Member</legend> 
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>