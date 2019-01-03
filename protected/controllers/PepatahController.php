<?php

class PepatahController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionKataPepatah()
	{
		$this->layout='column2';
		$this->render('kataPepatah');
	}

	public function actionKataPepatah1()
	{
		$this->layout='column2';
		$ang = array(1, 2, 3, 4);
		$this->render('kataPepatah1', array('ang'=>$ang));
	}
}