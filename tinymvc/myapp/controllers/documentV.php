<?php 

class DocumentV_Controller extends Base_Controller
{
  function index()
  {	
  	if(!isset($_GET['id']))
		$_GET['id'] = '';
    //return the article id you find in the GET
    $id = $_GET['id'];
	$this->load->model('Document','doc');
	$document = $this->doc->get($id);
  	$this->view->assign('document',$document);
	$this->view->display('show_document');
  }
}

?>
