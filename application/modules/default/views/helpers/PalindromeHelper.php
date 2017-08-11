<?php

class Zend_View_Helper_PalindromeHelper extends Zend_View_Helper_Abstract
{
    public function palindromeHelper()
    {
        $code_string = '
        public function indexAction()
      	{
          $this->view->headTitle("Palindrome Controller");
          // Calling the function
          $word = "Kayak";
          $palindrome = $this->isPalindrome($word);
          //
          $this->view->palindromes = $palindromes;
          $this->view->title = "Palindrome Controller";
          $this->view->pals = $palindrome;
      	}

      	public function isPalindrome($word)
      	{
          $b = strrev(strtolower($word));
          if(strtolower($word) == $b) {
          	$palindrome .= "$word is a palindrome<br/>";
          } else {
          	$palindrome .= "$word is not a palindrome<br/>";
          }
          return $palindrome;
      	}
        ';
        return "<pre>". htmlspecialchars($code_string) . "</pre>";
    }
}
