<?php 
	$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    	'links'=>array('Kata Pepatah 1'),
	));
?>
<h1>
	<?php 
		for ($i=0; $i<4 ; $i++) { 
			echo $ang[$i].", ";
		 }
		echo "Siapa cepat pasti dapat"; 
	?>
</h1>