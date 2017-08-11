<?php

class Zend_View_Helper_UniquenumberHelper extends Zend_View_Helper_Abstract
{
    public function uniquenumberHelper()
    {
        $code_string = '
        public function indexAction()
      	{
      		$this->view->headTitle("Unique Number Controller");

      		$shortest_word_length = $this->getWordCount($string);

      		$this->view->title = "Unique Number Controller";
      		$number_list = [0, 0, 0, 0, 0.55, 0];
      		$this->view->un = $this->getUniqueNumber($number_list);

      	}

      	public function getUniqueNumber($array)
      	{
      		$first_number = $array[0];
      		foreach($array as $n) {
      		        if($n != $first_number) {
      		                $unique_number = $n;
      		        }
      		}
      		return $unique_number;
      	}
        ';
        return "<pre>". htmlspecialchars($code_string) . "</pre>";
    }
}
