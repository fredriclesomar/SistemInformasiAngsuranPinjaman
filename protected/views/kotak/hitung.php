<?php 
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    	'links'=>array('Menghitung'),
	));
	echo $this->renderPartial('_form', array('model'=>$model));
?>