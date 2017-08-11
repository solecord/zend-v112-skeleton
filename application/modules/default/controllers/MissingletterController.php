<?php

class MissingletterController extends Saffron_AbstractController
{

	public function indexAction()
	{
		$this->view->headTitle('Missing Letter Controller');

		$this->view->title = "Missing Letter Controller";
		$alpha_snippet = ["A","B","C","D","E","G"];

		$this->view->alpha_array = implode(" ",$alpha_snippet);
		$this->view->missing = $this->find_missing_letter($alpha_snippet);;
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
}
