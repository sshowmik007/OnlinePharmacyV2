<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	
	protected $user;
	public function testEmail()
	{
		$user = new \App\User;

		$user->setFirstName('Sadman');

		$user->setLastName('Showmik');

		$user->setEmail('Sadmanshowmik@gmail.com');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Sadman Showmik');
		$this->assertEquals($emailVariables['email'], 'Sadmanshowmik@gmail.com');
	}
}