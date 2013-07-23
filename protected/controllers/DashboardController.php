<?php

class DashboardController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
        
        public function accessRules()
        {
            return array(
                array('allow',
                    'actions'=>array('login','logout'),
                    'users'=>array('*'),
                ),
                array('allow',
                    'actions'=>array('index'),
                    'users'=>array('admin'),
                ),
                array('deny',  // deny all users
                    'users'=>array('*'),
                ),
            );
        }
        
        /**
        * ��������� �������� � ������ �����
        */
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
 
        /**
        * ����� �� ������ ���������� � ������� �� ������� ��������.
        */
        public function actionLogout()
        {   
            Yii::app()->user->logout();
            $this->redirect(Yii::app()->homeUrl);
        }

	/*public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}