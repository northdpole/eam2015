<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Default_Controller extends Base_Controller
{
  function index()
  {
    $this->view->display('show_homepage');
  }
}

?>
