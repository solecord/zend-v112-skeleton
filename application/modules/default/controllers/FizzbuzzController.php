<?php

class FizzbuzzController extends Saffron_AbstractController
{

	public function indexAction()
	{
		$this->view->headTitle('FizzBuzz Controller');
		$fb = null;
		for ($i = 1; $i <= 100; $i++) {
		    $mod3 = $i % 3;
		    $mod5 = $i % 5;
		    if($i%3==0 && $i%5==0) {
		          $fb .= "FizzBuzz<br/>";
		        } elseif ($i%3==0) {
		          $fb .= "Fizz<br/>";
		        } elseif($i%5==0) {
		          $fb .= "Buzz<br/>";
		        } else {
		          $fb .= $i."<br/>";
		        }
		}
		$this->view->fizzbuzz = "FizzBuzz Controller";
		$this->view->fb_output = $fb;
	}

}
