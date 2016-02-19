<?php

	require_once 'src/WordCount.php';

	class WordCountTest extends PHPUnit_Framework_TestCase
	{

		function test_getWord()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'beowulf';
		$test_WordCount = new WordCount($word_input, $phrase_input);

		//Act
		$result = $test_WordCount->getWord();

		//Assert
		$this->assertEquals('beowulf', $result);
		}

		function test_getPhrase()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'fred';
		$test_WordCount = new WordCount($word_input, $phrase_input);

		//Act
		$result = $test_WordCount->getPhrase();

		//Assert
		$this->assertEquals('fred', $result);
		}

		function test_count_one_Word()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'beowulf';
		$test_WordCount = new WordCount($word_input, $phrase_input);

		//Act
		$result = $test_WordCount->countWord();

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_count_many_Words()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'beowulf and fred';
		$test_WordCount = new WordCount($word_input, $phrase_input);

		//Act
		$result = $test_WordCount->countWord();

		//Assert
		$this->assertEquals('1', $result);
		}
	}

?>
