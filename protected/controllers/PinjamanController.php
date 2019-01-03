<?php
/********************************************************
 * dibuat oleh : FredricLesomar  
 * tanggal     : 2017-10-10 01:31:32
 ********************************************************/
?>
<?php

class PinjamanController extends Controller
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
				'actions'=>array('create','update', 'pilihBunga'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Pinjaman;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$con = Yii::app()->db;
		$transaksi = Yii::app()->db->beginTransaction();
		if(isset($_POST['Pinjaman']))
		{
			$model->attributes=$_POST['Pinjaman'];
			$jum=(int)$_POST['Pinjaman']['diangsur_kali'];
		    $ang=(int)$_POST['Pinjaman']['besar_angsuran'];
			$tgl=$_POST['Pinjaman']['tanggal_jatuh_tempo'];
			$model->tanggal = date("Y-m-d");
			try{
				// if($model->save())
				// {
				//  $con = Yii::app()->db;	
				 // simpan ke angusran
				$model->save();
				 	for ($i=1; $i<=$jum; $i++)
					{
					 $tglTempo =strtotime(date("Y-m-d", strtotime($tgl)) . " +$i month");	
					  $con->createCommand()->insert('angsuran',
						array(
						  'pinjaman_id'=>$model->id,
						  'anggota_id'=> $_POST['Pinjaman']['anggota_id'],
						  'besar_angsuran'=>$ang,
						  'tanggal_jatuh_tempo'=>date("Y-m-d",$tglTempo),
						  'angsuran_ke' => $i
						 ));
					}
				//}
				$transaksi->commit();
			} catch(Exception $e) {
				$transaksi->rollBack();
				Yii::app()->user->setFlash('error', 'Terjadi kesalahan, penyimpanan dibatalkan');
			}
			$this->redirect(array('view','id'=>$model->id));	
		}

		$this->render('create',array(
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

		$con = Yii::app()->db;
		$transaksi = Yii::app()->db->beginTransaction();
		if(isset($_POST['Pinjaman']))
		{
			$model->attributes=$_POST['Pinjaman'];
			$jum=(int)$_POST['Pinjaman']['diangsur_kali'];
		    $ang=(int)$_POST['Pinjaman']['besar_angsuran'];
			$tgl=$_POST['Pinjaman']['tanggal_jatuh_tempo'];
			$model->tanggal = date("Y-m-d");
			try{
				$model->save();
				//hapus rekaman lama
				$con->createCommand("DELETE FROM angsuran WHERE pinjaman_id=".$id)
					->execute();
				//simpan ke angsuran
				 	for ($i=1; $i<=$jum; $i++)
					{
					 $tglTempo =strtotime(date("Y-m-d", strtotime($tgl)) . " +$i month");	
					  $con->createCommand()->insert('angsuran',
						array(
						  'pinjaman_id'=>$model->id,
						  'anggota_id'=> $_POST['Pinjaman']['anggota_id'],
						  'besar_angsuran'=>$ang,
						  'tanggal_jatuh_tempo'=>date("Y-m-d",$tglTempo),
						  'angsuran_ke' => $i
						 ));
					}
				//}
				$transaksi->commit();
			} catch(Exception $e) {
				$transaksi->rollBack();
				Yii::app()->user->setFlash('error', 'Terjadi kesalahan, penyimpanan dibatalkan');
			}
			$this->redirect(array('view','id'=>$model->id));	
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
		$dataProvider=new CActiveDataProvider('Pinjaman');
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
		$model=new Pinjaman('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pinjaman']))
			$model->attributes=$_GET['Pinjaman'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionPilihBunga()
	{
	
		  $bunga=JenisPinjaman::model()->findByPk($_GET["id"])->bunga;
           
		  echo CJSON::encode(array(
			 'error'=>'false',
			 'bunga'=> $bunga
			));
         Yii::app()->end();		  
	 }

	/**
	 * Returns the data model based on the primary
	 * key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Pinjaman::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='pinjaman-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
