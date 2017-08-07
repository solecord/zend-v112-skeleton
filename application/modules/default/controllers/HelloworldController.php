<?php

class HelloworldController extends Saffron_AbstractController
{

	public function indexAction()
	{
		$this->view->headTitle('Hello World Example');

		$this->view->helloWorld = 'Hello World!';
	}

}