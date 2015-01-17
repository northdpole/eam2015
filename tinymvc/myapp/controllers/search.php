<?php 

class Search_Controller extends Base_Controller
{
  function index()
  {
  	if(!isset($_GET['q']))
		$_GET['q'] = '';
    $query = $_GET['q'];
    $this->load->model('Article','art');
    $result = $this->art->search($query);
	//var_dump($result);
	$this->view->assign('res',$result);
	$this->view->display('search_results');
    // return the result array
  }
}

?>