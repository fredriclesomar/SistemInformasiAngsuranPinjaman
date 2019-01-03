<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
		if(Yii::app()->user->isGuest)
			$this->redirect(array('login'));
		else
		{
			$this->layout='column2';
			$this->render('index');
		}
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Terimakasih telah menghubungi kami, secepatnya akan kami respon.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/********************************
	 * Halama Login
	 ********************************/
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/************************************
	 * keluar/logut.
	 ************************************/

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	/**************************************** 
         bagian ini hanya prototipe 
          bisa diubah sendiri sesui kebutuhan
       *****************************************/

	public function actionTblUser()
	{
		// contoh memanggil view tblUser.php
		$this->layout='column2';
		$this->render('tblUser');
	}
	public function actionGantiPassword()
	{
		// contoh memanggil view gantiPassword.php
		$this->layout='column2';
		$this->render('gantiPassword');
	}
	
	public function actionTblKota()
	{
		// contoh memanggil view tblKota.php
		$this->layout='column2';
		$this->render('tblKota');
	}
	public function actionTblPropinsi()
	{
		// contoh memanggil view tblKota.php
		$this->layout='column2';
		$this->render('tblPropinsi');
	}
	
	public function actionHelp()
	{
		// contoh memanggil view help.php
		$this->layout='column2';
		$this->render('help');
	}

	public function actionHello()
	{
		$this->layout='column2';
		$this->render('hello');
	}
}