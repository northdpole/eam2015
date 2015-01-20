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
  	if(sizeof($article) === 0)
		$article = "Your article couldn't be found";
  	$this->view->assign('article',$article[$id]['content']);
	$this->view->assign('date',$article[$id]['date']);
	$this->view->assign('title',$article[$id]['title']);
	$this->view->display('show_article');
  }
}

?>