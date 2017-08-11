<?php

class InterfaceController extends Saffron_AbstractController
{

	public function indexAction()
	{
		$this->view->headTitle('Interface Controller');

		$this->view->title = "Interface Controller";

		$this->question = "";
		$this->answer = new Answer;
		$this->question = new Question($this->answer);
	}

}

class Question
{
    public function __construct(AnswerInterface $answer)
    {
        echo "What is 2 + 2?\n";
        $answer = $answer->get()->the()->answer();
        if ($answer instanceof AnswerInterface) {
            echo $answer . PHP_EOL;
        }
    }
}

interface AnswerInterface
{
    public function get();
    public function the();
    public function answer();
}

// start editing here
class Answer implements AnswerInterface
{
  private $_answer;
  public function __construct()
  {
        $this->_answer = 4;
  }
  public function __toString()
  {
        return (string) $this->_answer;
  }
  public function get()
  {
        return $this;
  }
  public function the()
  {
        return $this;
  }
  public function answer()
  {
        return $this;
  }
}
// end editing here
