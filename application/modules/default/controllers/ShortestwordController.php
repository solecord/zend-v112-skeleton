<?php

class ShortestwordController extends Saffron_AbstractController
{

	public function indexAction()
	{
		$this->view->headTitle('Shortest Word Controller');
		$string = 'turns out random test cases are easier than writing out basic ones';
		$shortest_word_length = $this->getWordCount($string);

		$this->view->title = "Shortest Word Controller";
		$this->view->swl = $shortest_word_length;
	}

	public function getWordCount($string)
	{
		$word_array = explode(" ",$string);
		$shortest_word = $word_array[0];
		foreach($word_array as $word)
		{
			if(strlen($word) < strlen($shortest_word)) {
				$shortest_word = $word;
			}
		}
		return strlen($shortest_word);
	}
}
