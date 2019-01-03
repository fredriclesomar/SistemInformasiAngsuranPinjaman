<?php
/********************************************************
 * dibuat oleh : FredricLesomar  
 * tanggal     : 2017-09-26 04:21:18
 ********************************************************/
?>
<?php

class KotaController extends Controller
{
	/*****************************************************
	 * tiap tampilan menggunakan seting 2 kolom'//layouts/column2', 
	 * menggunakan file di'protected/views/layouts/column2.php'.
	 *****************************************************/
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/****************************************************************************
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 * pembatasan akses lewat fungsi dengan nama actionX... dengan allow
	 * user '*' semua user / tanpa login (guest)
	 * user '@' lewat login password
	 * user 'fredricls' hanya untuk admin
	 * deny  yang tidak boleh diakses
	 ****************************************************************************/
	
	public function accessRules()
	{
		return array(
			array('allow',  
			     // semua user boleh akse 'index' dan 'view' 
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', 
			     // user harus login utk akses'create' dan 'update' a
				'actions'=>array('create','update', 'daftarKota', 'provinsi'),
				'users'=>array('@'),
			),
			array('allow', 
			     // hanya user admin yang boleh akses'admin' dan 'delete' 
				'actions'=>array('admin','delete'),
				'users'=>array('fredricls'),
			),
			array('deny',  // tidak boleh utk semua user
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 * menampilkan detail 
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionDaftarKota()
	{
		$this->render('daftarKota');
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Kota;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kota']))
		{
			$model->attributes=$_POST['Kota'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_kota));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionProvinsi()
	{
		$model=new Kota;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kota']))
		{
			$model->attributes=$_POST['Kota'];
			$id=$_POST['Kota']['id_provinsi'];

			$this->redirect(array('daftarKota','id'=>$id));
		}

		$this->render('provinsi',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kota']))
		{
			$model->attributes=$_POST['Kota'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_kota));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view),
 			// we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,
			    'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Kota');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 * halaman admin utk menajemen data
	 */
	public function actionAdmin()
	{
		$model=new Kota('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kota']))
			$model->attributes=$_GET['Kota'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary
	 * key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Kota::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 * ajax untuk validasi
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kota-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
