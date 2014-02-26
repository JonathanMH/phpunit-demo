<?php

class MyClassTest extends PHPunit_Framework_Testcase {
	
	/*
	 * Testing the addition function
	 */

	public function testAddition(){
		$myclass = new MyClass();
		$result = $myclass->addition(1,1);
		$this->assertEquals(2, $result);
	}
}
