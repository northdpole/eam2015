<?php

class Base_Controller extends TinyMVC_Controller
{
  function __construct()
  {
    parent::__construct();
	if(!isset($_SESSION['s'])){
	session_start();
	$_SESSION['s'] ="a";
	}
	//error_log("plugin ok");
  }
  // do your class extensions here
}

?>