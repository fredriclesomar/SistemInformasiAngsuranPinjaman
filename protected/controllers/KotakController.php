<?php

class KotakController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionHitung()
	{
		$model=new Kotak;
		$model->unsetAttributes();

	    if(isset($_POST['Kotak']))
	    {
	    	$model->attributes=$_POST['Kotak'];
	        $panjang=$_POST['Kotak']['panjang'];
	        $lebar=$_POST['Kotak']['lebar'];
	        $this->redirect(array('luas', 'panjang'=>$panjang, 'lebar'=>$lebar));
	    }

		$this->layout='column2';
		$this->render('hitung', array('model'=>$model));
	}

	public function actionLuas()
	{
		$model=new Kotak;
		$model->unsetAttributes();

		if (isset($_GET['Kotak'])) 
			$model->attributes=$_GET['Kotak'];
		$this->layout='column2';
		$this->render('luas', array('model'=>$model));
		
	}
}