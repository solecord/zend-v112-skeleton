<?php

class Zend_View_Helper_MissingletterHelper extends Zend_View_Helper_Abstract
{
    public function missingletterHelper()
    {
        $code_string = '
        public function indexAction()
      	{
      		$this->view->headTitle("Missing Letter Controller");

      		$this->view->title = "Missing Letter Controller";
      		$alpha_snippet = ["A","B","C","D","E","G"];

      		$this->view->missing = find_missing_letter($alpha_snippet);;
      	}
      	public function find_missing_letter(array $array) : string {
      		if(ctype_upper($array[0])) {
      			$alphabet = range("A","Z");
      		} else {
      			$alphabet = range("a","z");
      		}
      		$missing = array_values(array_diff($alphabet,$array));
      		return $missing[0];
      	}
        ';
        return "<pre>". htmlspecialchars($code_string) . "</pre>";
    }
}
