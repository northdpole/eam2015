<?php 

class User_Home_Controller extends TinyMVC_Controller
{
  function index()
  {
  	$username = $_SESSION['username'];
	$uid = $_SESSION['uid'];
	$this->load->model('Category','cat');
	$this->load->model('Subscription','sub');
	$categories =  $this->sub->get($uid);
	error_log($categories);
	$articles = array();
	foreach ($categories as $cat) {
		$articles[$cat['name']] = $this->cat->get($cat['name']);
	}
	$this->view->assign('articles',$articles);
    $this->view->assign('cat_names',array_values($categories));
	$this->view->display('user_home');
    //for each article in each category the user is subscribed
    // show the articles grouped by category
  }
}

?>