<?php

class TypesTest extends WebTestCase
{
	public $fixtures=array(
		'types'=>'Types',
	);

	public function testShow()
	{
		$this->open('?r=types/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=types/create');
	}

	public function testUpdate()
	{
		$this->open('?r=types/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=types/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=types/index');
	}

	public function testAdmin()
	{
		$this->open('?r=types/admin');
	}
}
