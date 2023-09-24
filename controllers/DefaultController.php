<?php

class DefaultController extends Controller
{	
	public function actionIndex()
	{
		$this->render('index', [
			'dataProvider' => Yii::app()->post->list()
		]);
	}
}