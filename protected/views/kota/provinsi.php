<?php 
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    	'links'=>array('Provinsi'),
	));
	echo $this->renderPartial('_formProvinsi', array('model'=>$model));
?>