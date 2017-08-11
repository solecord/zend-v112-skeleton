<?php

class PalindromeController extends Saffron_AbstractController
{

	public function indexAction()
	{
		$this->view->headTitle('Palindrome Controller');
		$word = "Kayak";
		$palindrome = $this->isPalindrome($word);

		$this->view->title = "Palindrome Controller";
		$this->view->pals = $palindrome;
	}

	public function isPalindrome($word)
	{
		$palindrome = null;
		$b = strrev(strtolower($word));
		if(strtolower($word) == $b) {
			$palindrome .= "$word is a palindrome<br/>";
		} else {
			$palindrome .= "$word is not a palindrome<br/>";
		}
		return $palindrome;
	}
}
