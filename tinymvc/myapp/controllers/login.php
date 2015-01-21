<?php 

class Login_Controller extends Base_Controller
{
  function index()
  {
  	
	$_SESSION['uid'] = 0;
	$_SESSION['uname'] = "Γεώργιος Γκουσγκούνης";
	if(isset($_GET['out']))
	$_SESSION = array();
  	header('Location: '.$_SERVER['HTTP_REFERER']); 
	
 }
}

?>