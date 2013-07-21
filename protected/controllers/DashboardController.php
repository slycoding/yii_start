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