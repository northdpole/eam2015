<?php

class Subscribe_Controller extends My_Controller
{
  function index()
  {
  	var_dump($_GET);
//    if(isset($_SESSION['uid'])){
    	$uid = 0;//$_SESSION['uid'];
		$this->load->model('Subscription','sub');
		$this->load->model('UserDocuments','udoc');
		if(isset($_GET['sub']))
			if (isset($_GET['t'])) {
				$type = $_GET['t'];
				switch ($type) {
					case 'd':
						$this->udoc->add($uid,$_GET['id']);
						echo "User ".$uid." subscribed to document category ".$_GET['id']; 
						break;
					case 'c':
						$this->sub->add($uid,$_GET['id']);
						echo "User ".$uid." subscribed to article category ".$_GET['id'];
						break;
					default:
				}
			}
    }
  }
//}

?>