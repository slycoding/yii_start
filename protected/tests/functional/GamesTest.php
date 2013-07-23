<?php

class GamesTest extends WebTestCase
{
	public $fixtures=array(
		'games'=>'Games',
	);

	public function testShow()
	{
		$this->open('?r=games/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=games/create');
	}

	public function testUpdate()
	{
		$this->open('?r=games/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=games/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=games/index');
	}

	public function testAdmin()
	{
		$this->open('?r=games/admin');
	}
}
