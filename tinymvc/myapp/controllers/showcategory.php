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
	$this->load->model('ArticleCategory','artcat');
	$this->load->model('DocumentCategory','doccat');

	$cat = $this->cat->get_id($id);
	$cat = array_shift($cat);
	$artIds = $this->artcat->get_articles($id);
	$docIds =$this->doccat->get_documents($id);
	$art_array = array();
	$doc_array = array();
	
	var_dump($cat);
	//var_dump($artIds);
	foreach ($artIds as $arts) {
		$art_array[$cat['name']] = $this->art->get_id($arts['article_id']);
	}
	//var_dump($artIds);
	foreach ($docIds as $docs) {
		$doc_array[$cat['name']] = $this->doc->get_id($docs['document_id']);
	}
	//echo"<p>Art array: ";var_dump($art_array);
	$this->view->assign('articles',$art_array);	
	//$this->view->display('browse');
	//$this->dummy_show($art_array);
  
	var_dump($art_array);
	var_dump($doc_array);
  	$this->view->assign('article',$art_array);
	$this->view->assign('article',$doc_array);
	//$this->view->display('show_article');
  }
}

