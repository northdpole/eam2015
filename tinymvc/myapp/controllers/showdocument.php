<?php 

class ShowDocument_Controller extends Base_Controller
{
  function index()
  {	
  	if(!isset($_GET['id']))
		$_GET['id'] = '';
    //return the article id you find in the GET
    $id = $_GET['id'];
	$this->load->model('Document','doc');
	$document = $this->doc->get_id($id);
	if(sizeof($document) === 0)
		$document = "Your document couldn't be found";
  	$this->view->assign('article',$document[$id]['content']);
	$this->view->assign('date',$document[$id]['date']);
	$this->view->assign('title',$document[$id]['title']);
	$this->view->display('show_article');
  }
}

?>
