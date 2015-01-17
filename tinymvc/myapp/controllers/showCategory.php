<?php 

class ShowCategory_Controller extends Base_Controller
{
  function index()
  {	
  	if(!isset($_GET['id']))
		$_GET['id'] = '';
    //return the articles in the category id you find in the GET
    $id = $_GET['id'];
	$this->load->model('Article','art');
	$this->load->model('Document','doc');
	$this->load->model('Category','cat');
	$category = $this->cat->get_id($id);
	$articles = 
	$article = $this->art->get($id);
	
  	$this->view->assign('article',$article);
	$this->view->display('show_article');
  }
}

