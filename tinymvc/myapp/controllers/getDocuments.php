<?php 

class Getdocuments_Controller extends Base_Controller
{
  function index()
  {
    // Load all individual articles by category and provide the table to the view
    $this->load->model('DocumentCategory','docCat');
    $this->load->model('Document','doc');
    $this->load->model('Category','cat');
	
	
  	$allcat = $this->cat->get_all();
	$doc_array = array();
	//var_dump($allcat);
	foreach ($allcat as $cat) {	
		$docIds = $this->docCat->get_documents($cat['id']);
		//var_dump($artIds);
		foreach ($docIds as $docs) {
			$doc_array[$cat['name']] = $this->doc->get_id($docs['document_id']);
		}
	}
	//echo"<p>Art array: ";var_dump($art_array);
	$this->view->assign('articles',$doc_array);	
	//$this->view->display('browse');
	$this->dummy_show($doc_array);
  }
	function dummy_show($doc_array){
		
		 	 foreach($doc_array as $category => $index){?>
	  		<div class="category">
  				<h2><?php echo $category; ?></h2>
  				<?php foreach($index as $catId => $dc){?>
	  				<div class="article content">
	  					<h2><?php echo $dc['Title'];	?></h2>
  						<p><?php echo $dc['date'];?></p>
  						<p><?php echo $dc['content']; ?></p>
  					</div><?php } ?>
  				<?php } ?>
	  		</div><?php
	
	}
}
?>