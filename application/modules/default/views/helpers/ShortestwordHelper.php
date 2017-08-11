<?php

class Zend_View_Helper_ShortestwordHelper extends Zend_View_Helper_Abstract
{
    public function shortestwordHelper()
    {
        $code_string = '
        public function indexAction()
      	{
      		$this->view->headTitle("Wordcount Controller");
      		$string = "turns out random test cases are easier than writing out basic ones";
      		$shortest_word_length = $this->getWordCount($string);

      		$this->view->title = "Wordcount Controller";
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
        ';
        return "<pre>". htmlspecialchars($code_string) . "</pre>";
    }
}
