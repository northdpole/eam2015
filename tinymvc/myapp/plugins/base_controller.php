<?php

class Base_Controller extends TinyMVC_Controller
{
  function __construct()
  {
    parent::__construct();
	session_start();
	//error_log("plugin ok");
  }
  // do your class extensions here
}

?>