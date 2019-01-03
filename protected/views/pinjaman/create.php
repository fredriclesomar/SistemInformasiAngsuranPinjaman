
<?php
/********************************************************
* dibuat oleh    : FredricLesomar  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2017-10-10 01:31:32 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Pinjaman'=>array('index'), 'Tambah'),
));
?>
<legend>Buat Data Pinjaman </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>