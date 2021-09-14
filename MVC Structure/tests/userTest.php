<?php
class UserTest extends \PHPUnit\Framework\TestCase
{
	protected $user;

	public function setUp()
	{
		
		$this->user = new \App\Models\User;
		
	}


	public function testFirstName()
	{
		$this->user->setFirstName('Sadman');

		$this->assertEquals($this->user->getFirstName(), 'Sadman');
	}

	public function testLastName()
	{
		$this->user->setLastName('Showmik');

		$this->assertEquals($this->user->getLastName(), 'Showmik');
	}

	public function testFullName()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Sadman');

		$user->setLastName('Showmik');

		$this->assertEquals($user->getFullName(), 'Sadman Showmik');
	}

	public function testFirstAndLastName()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Sadman     ');

		$user->setLastName('     Showmik');

		$this->assertEquals($user->getFirstName(), 'Sadman');

		$this->assertEquals($user->getLastName(), 'Showmik');
	}
}