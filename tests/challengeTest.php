<?php
namespace TDD\Tests;
require dirname(dirname(__FILE__)). DIRECTORY_SEPARATOR . "vendor".DIRECTORY_SEPARATOR."autoload.php";
use PHPUnit\Framework\TestCase;
use TDD\challenge;


class ChallengeTest extends TestCase
{
	
	public function testPrintOutput()
	{
		$stackMulti = new Challenge();
		$stackMulti->findOutMultiples();
		$result = $stackMulti->getOutput();
		$this->assertEquals("Linio", $result[3]);
		$this->assertEquals("IT", $result[5]);
		$this->assertEquals("Liniano", $result[15]);
		$this->assertEquals("IT", $result[20]);
	}

}