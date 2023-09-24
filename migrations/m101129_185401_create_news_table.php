<?php

class m101129_185401_create_news_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_posts', array(
			'id' => 'pk',
			'title' => 'string NOT NULL',
			'description' => 'text NOT NULL',
            'create_time' => 'INTEGER',
			'status' => 'INTEGER'
		));
	}

	public function down()
	{
		$this->dropTable('tbl_posts');
	}
}