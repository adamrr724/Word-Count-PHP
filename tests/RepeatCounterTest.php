<?php

	require_once 'src/RepeatCounter.php';

	class RepeatCounterTest extends PHPUnit_Framework_TestCase
	{

		function test_getWord()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'foo';
		$test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);

		//Act
		$result = $test_RepeatCounter->getWord();

		//Assert
		$this->assertEquals('beowulf', $result);
		}

		function test_getPhrase()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'fred';
		$test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);

		//Act
		$result = $test_RepeatCounter->getPhrase();

		//Assert
		$this->assertEquals('fred', $result);
		}

		function test_count_one_Word()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'beowulf';
		$test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);

		//Act
		$result = $test_RepeatCounter->CountRepeats();

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_count_one_Wordfail()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'china';
		$test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);

		//Act
		$result = $test_RepeatCounter->CountRepeats();

		//Assert
		$this->assertEquals('0', $result);
		}

		function test_count_many_Words()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'beowulf and fred';
		$test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);

		//Act
		$result = $test_RepeatCounter->CountRepeats();

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_count_with_punctuation()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'fred and his friend beowulf.';
		$test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);

		//Act
		$result = $test_RepeatCounter->CountRepeats();

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_count_with_cases()
		{
		//Arrange
		$word_input = 'beowulf';
		$phrase_input = 'Fred and his friend BeOwUlF.';
		$test_RepeatCounter = new RepeatCounter($word_input, $phrase_input);

		//Act
		$result = $test_RepeatCounter->CountRepeats();

		//Assert
		$this->assertEquals('1', $result);
		}
	}

?>
