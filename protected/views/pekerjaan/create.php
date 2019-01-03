
<?php
/********************************************************
* dibuat oleh    : Badiyanto  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2017-10-09 23:26:42 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Pekerjaan'=>array('index'), 'Tambah'),
));
?>
<legend>Masukkan Data Pekerjaan </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>