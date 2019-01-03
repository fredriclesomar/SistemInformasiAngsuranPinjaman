<?php 
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    	'links'=>array('Angsuran'),
	));
	echo $this->renderPartial('_formAngsuran', array('model'=>$model));
?>