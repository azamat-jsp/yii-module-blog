<?php

class PostService extends CApplicationComponent
{
    public function list()
    {
        return new CActiveDataProvider('Post', array(
			'criteria'=>array(
				'condition'=>'status=1',
				'order'=>'create_time DESC',
			),
			'countCriteria'=>array(
				'condition'=>'status=1',
				// 'order' and 'with' clauses have no meaning for the count query
			),
			'pagination'=>array(
				'pageSize'=>20,
			),
		));
    }
}