<?php

	require_once 'src/WordCount.php';

	class WordCountTest extends PHPUnit_Framework_TestCase
	{

		function test_getWord()
		{
		//Arrange
		$input = 'beowulf';
		$test_WordCount = new WordCount();

		//Act
		$result = $test_WordCount->getWord();

		//Assert
		$this->assertEquals('beowulf', $result);
		}
	}

?>
