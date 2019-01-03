
<?php
/********************************************************
* dibuat oleh    : FredricLesomar  
* CRUD generator : Yii Bootstrap                        
* tanggal        :   2017-11-21 03:53:18 
********************************************************/
$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('User'=>array('index'), 'Tambah'),
));
?>
<legend>Masukkan Data User </legend> 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>