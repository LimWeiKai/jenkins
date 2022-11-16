<?php
use PHPUnit\Framework\TestCase;
require 'login.php';

class loginTest extends TestCase {

	public $userInstance;
	
	public function setup():void {
		
		$this->userInstance;
	}
	
	public function testIfLoginSuccess() {
		
		$this->userInstance->checkAccount("ben", "ben23");
		
	}
}