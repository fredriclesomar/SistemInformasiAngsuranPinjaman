
<?php
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2017-11-14 03:05:52 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Angsuran'=>array('index'), 'Tambah'),
));
?>
<legend>Buat Data Angsuran </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>