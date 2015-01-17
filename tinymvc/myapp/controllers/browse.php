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
	$this->view->display('category_page');
	$this->dummy_show($art_array);
  }
	function dummy_show($art_array){
		 foreach($art_array as $category => $index){?>
	  		<div class="category">
  				<h2><?php echo $category; ?></h2>
  				<?php foreach($index as $catId => $artic){?>
	  				<div class="article content">
	  					<h2><?php echo $artic['Title'];	?></h2>
  						<p><?php echo $artic['date'];?></p>
  						<p><?php echo $artic['content']; ?></p>
  					</div><?php } ?>
  				<?php } ?>
	  		</div><?php
	
	}
}
?>