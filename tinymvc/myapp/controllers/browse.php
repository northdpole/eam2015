<?php 
require_once("homepage.php");

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
	$home = new Homepage_Controller();
	$arts = "";
	$this->view->assign('articles',$arts);	
	if(isset($_SESSION['uid'])){
		$arts = $home->load_articles();
		$this->view->assign('articles',$arts);		
		$this->view->display('category_page_login');
	}else
		$this->view->display('category_page');
	//$this->dummy_show($art_array);
  }
}
?>