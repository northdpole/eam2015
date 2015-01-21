<?php 

class Register_Controller extends Base_Controller
{
  function index()
  {
  	$this->load->model("User","user");
	$uid = $_SESSION['uid'];
	if(isset($_POST['submit'])){
	$this->user->update($_POST["name"],
						$_POST["surname"],
					  	$_POST["address"],
    					$_POST["postcode"],
    					$_POST["city"],
    					$_POST["afm"],
    					$_POST["kyt"],
    					$_POST["amka"],
    					1,
    					$_POST["pensionNo"],
    					$_POST["iban"],
    					$_POST["bank"],$uid);}
	
	$u = $this->user->get($uid);
	
	$this->view->assign('name',$u['name']);
	$this->view->assign('surname',$u['surname']);
	$this->view->assign('address',$u['address']);
	$this->view->assign('postcode',$u['postcode']);
	$this->view->assign('city',$u['city']);
	$this->view->assign('iban',$u['iban']);
	$this->view->assign('afm',$u['afm']);
	$this->view->assign('kyt',$u['kyt']);
	$this->view->assign('amka',$u['amka']);
	$this->view->assign('retired',$u['retired']);
	$this->view->assign('pensionNo',$u['pensionNo']);
	$this->view->assign('bank',$u['bank']);
	$this->view->display("profile");
	
    //if not registered ask for info otherwise go to 
  }
}

?>