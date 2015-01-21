<?php 

class Homepage_Controller extends Base_Controller
{
  function index()
  {
  	
	$uid = 0;//$_SESSION['uid'];
	load_articles();
	
	$this->view->assign('articles',load_articles);
    $this->view->assign('cat_names',array_values($categories));
	$this->view->display('logged_in');
    
    ////echo "<p>";var_dump($documents);
	//echo "<p>";var_dump($articles);
    //for each article in each category the user is subscribed
    // show the articles grouped by category
  }
  function load_articles(){
  	if(!isset($_SESSION['uname'])){
		$username = "";
		$uid = -1;
	}else{
	  	$username = $_SESSION['uname'];
		$uid = $_SESSION['uid'];
	}
	$this->load->model('Category','categ');
	$this->load->model('Subscription','sub');
	$this->load->model('UserDocuments','udoc');
	$this->load->model('ArticleCategory','artcat');
	$this->load->model('Article','art');
	
	$categories =  $this->sub->get($uid);
	$articles = array();
	$articlesC = "";
	
	//for category
	foreach ($categories as $rel) {
		$cat = $this->categ->get_id($rel['categ_id']);
		$cat = array_shift($cat);
		$catName = $this->categ->get($cat['name']);

		$ars = $this->artcat->get_articles($cat['id']);		

		$articlesC .= '<div class="categ"><h2>'.$cat['name'].'</h2>';

		foreach($ars as $index => $id) {
			$articles_array = $this->art->get_id($id['article_id']);
			foreach ($articles_array as $index => $ar) {
				
			$articlesC = $articlesC. '<div class="article_content">
									<h4>'.$ar['Title'].'</h4>'.
									'<div class="article">'.
									$ar['content'].'</div></div>';
		
			$articles[$cat['name']] = $this->categ->get($cat['name']);
			}
		}

	$articlesC .='</div>';

	}
	
	
	$documents = array();
	$d_categories = $this->udoc->get($uid);
	//echo "<p>dcats:";var_dump($d_categories);
	foreach ($d_categories as $rel) {
		$cat = $this->categ->get_id($rel['categ_id']);
		$cat = array_shift($cat);
		////echo "<p>cat2:";var_dump($cat);
		$documents[$cat['name']] = $this->categ->get_id($cat['name']);
	}
		return $articlesC;
  }
}

?>