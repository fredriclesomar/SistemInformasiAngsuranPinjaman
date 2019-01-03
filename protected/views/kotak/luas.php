<?php 
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
	    'links'=>array('Hasil'),
	));
	$model->panjang=$_GET['panjang'];
	$model->lebar=$_GET['lebar'];
	echo "Panjang = ".$model->panjang."<br>";
	echo "Lebar = ".$model->lebar."<br>";
	echo "Luas = ".$model->luas()."<br>";
	echo "Keliling = ".$model->keliling()."<br>";
?>