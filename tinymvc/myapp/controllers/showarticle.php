<?php 

class ShowArticle_Controller extends Base_Controller
{
  function index()
  {	
  	if(!isset($_GET['id']))
		$_GET['id'] = '';
    //return the article id you find in the GET
    $id = $_GET['id'];
	$this->load->model('Article','art');
	$article = $this->art->get($id);
  	$this->view->assign('article',$article);
	$this->view->display('show_article');
  }
}

?>