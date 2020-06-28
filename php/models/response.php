<?php
class Response {

  public $message;
  public $isError;
  public $content;

   function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    function __construct2($message, $isError) {
         $this->message = $message;
         $this->isError = $isError;
         $this->content = [];
    }

    function __construct3($message, $isError, $content) {
          $this->message = $message;
          $this->isError = $isError;
          $this->content = $content;
    }

    function toString()
    {
      return "\nmessage: ".$this->message."\nisError: ".$this->isError."\ncontent: ".$this->content;
    }
}
?>
