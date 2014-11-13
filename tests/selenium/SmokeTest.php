<?php
// require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class SmokeTest
	extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser('chrome');
    $this->setBrowserUrl('http://www.example.com/');
    parent::setUp();
  }

  public function testTitle()
  {
    $this->open('http://www.example.com/');
    $this->assertTitle('Example WWW Page');
  }
}
