<?php 
class News_Controller extends Base_Controller{
  function index(){
	$this->view->display('show_news');
  }
}
?>