<?php

class ContactController extends Controller
{
	public $contact;
	public function actionIndex()
	{
				$dataProvider = new CActiveDataProvider('Contact');
				$this->render('index',array(
						'dataProvider'=>$dataProvider,
					));

	}

	/**
	 * This is the action to update a contact
	 *
	 * @return void
	 */
	public function actionUpdate()
	{
		$this->contact=Contact::model()->findByPk($_POST["pk"]);

		if ($_POST['name'] == "firstName") {
			$this->contact->firstName = $_POST['value'];
		}

		if ($_POST['name'] == "lastName") {
			$this->contact->lastName = $_POST['value'];
		}

		if ($_POST['name'] == "jobTitle") {
			$this->contact->firstName = $_POST['value'];
		}

		if ($_POST['name'] == "phoneNumber") {
			$this->contact->lastName = $_POST['value'];
		}
		$this->contact->save(); // save the change to database

	}

//	public function actionCreateContact()
//	{
//
//		$contact = new Contact;
//		if(Yii::app()->request->isPostRequest) {
//			$model = new User;
//			$model->attributes = $_POST;
//			if($model->save()) {
//				echo CJSON::encode(array('id' => $model->primaryKey));
//			} else {
//				$errors = array_map(function($v){ return join(', ', $v); }, $model->getErrors());
//				echo CJSON::encode(array('errors' => $errors));
//			}
//		} else {
//			throw new CHttpException(400, 'Invalid request');
//		}
//	}

}