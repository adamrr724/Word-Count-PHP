<?php
	 class RepeatCounter
		{
				private $word;
				private $str_of_words;

				function __construct($word, $str_of_words)
				{
						$this->word = $word;
						$this->str_of_words = $str_of_words;
				}

				function getWord()
				{
						return $this->word;
				}

				function getPhrase()
				{
						return $this->str_of_words;
				}

				function CountRepeats()
				{
						$compare_word_array = explode(" ", $this->str_of_words);

						$count = 0;

						foreach ($compare_word_array as $compare_word) {
								if ($compare_word == $this->word)
								{
										$count += 1;
								}
						} return $count;
				}

	}
 ?>
