<?php

class Zend_View_Helper_InterfaceHelper extends Zend_View_Helper_Abstract
{
    public function interfaceHelper()
    {
        $code_string = '
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
        ';
        return "<pre>". htmlspecialchars($code_string) . "</pre>";
    }
}
