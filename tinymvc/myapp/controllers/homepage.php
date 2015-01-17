<?php 

class Homepage_Controller extends Base_Controller
{
  function index()
  {
  	$username = 'lakis';//$_SESSION['username'];
	$uid = 0;//$_SESSION['uid'];
	$this->load->model('Category','categ');
	$this->load->model('Subscription','sub');
	$this->load->model('UserDocuments','udoc');
	$categories =  $this->sub->get($uid);
	//error_log($categories);
	$articles = array();
	//echo "<p>";var_dump($categories);
	foreach ($categories as $rel) {
		//echo "<p>";var_dump($rel['categ_id']);
		$cat = $this->categ->get_id($rel['categ_id']);
		$cat = array_shift($cat);
		//echo "<p>";var_dump($cat['name']);
		$articles[$cat['name']] = $this->categ->get($cat['name']);
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
	$this->view->assign('articles',$articles);
    $this->view->assign('cat_names',array_values($categories));
	$this->view->display('show_homepage');
    ////echo "<p>";var_dump($documents);
	//echo "<p>";var_dump($articles);
    //for each article in each category the user is subscribed
    // show the articles grouped by category
  }
}

?>