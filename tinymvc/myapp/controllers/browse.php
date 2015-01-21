<?php 

class Browse_Controller extends Base_Controller
{
  function index()
  {
    // Load all individual articles by category and provide the table to the view
    $this->load->model('Category','cat');
	$this->load->model('Article','art');
	$this->load->model('ArticleCategory','artcat');
  	$allcat = $this->cat->get_all();
	$art_array = array();
	//var_dump($allcat);
	foreach ($allcat as $cat) {	
		$artIds = $this->artcat->get_articles($cat['id']);
		//var_dump($artIds);
		foreach ($artIds as $arts) {
			$art_array[$cat['name']] = $this->art->get_id($arts['article_id']);
		}
	}
	//echo"<p>Art array: ";var_dump($art_array);
	$this->view->assign('articles',$art_array);	
	if(isset($_SESSION['uid']))
			$this->view->display('category_page_login');
	else
		$this->view->display('category_page');
	//$this->dummy_show($art_array);
  }
}
?>