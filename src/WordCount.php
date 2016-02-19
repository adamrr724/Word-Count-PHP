<?php
	 class WordCount
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

				function countWord()
				{
						$count = 0;
						if ($this->word = $this->str_of_words)
						{
								$count += 1;
						} return $count;
				}

	}
 ?>
