<?php 
class News_Controller extends Base_Controller{
  function index(){
  	$this->load->model('Category','cat');
	$this->load->model('Article','art');
	$this->load->model('ArticleCategory','artcat');
	
	$nosilia = $this->cat->get("nosilia");
	$nosilia = $this->artcat->get_articles($nosilia[0]['id']);
	$eisfores = $this->cat->get("eisfores");
	$eisfores = $this->artcat->get_articles($eisfores[0]['id']);
	$pensions = $this->cat->get("pensions");
	$pensions = $this->artcat->get_articles($pensions[0]['id']);
	
	$news = $this->art->get_count_date();
	
	$content = "";
	foreach ($news as $entry => $article) {
		$content = $content. "<h2>". $article['Title']."</h2>
					<p>". $article["content"]." </p>";	
	}
	
	$pensionsC = "";
	$nosiliaC = "";
	$eisforesC = "";
	
	foreach ($pensions as $entry => $maping) {
		$c = $this->art->get_id($maping['article_id']);
		foreach($c as $cons){
			$pensionsC = $pensionsC. "<h2>". $cons['Title']."</h2>
					<p>".$cons["content"]." </p>";
  }	}
	foreach ($eisfores as $entry => $maping) {
		$c = $this->art->get_id($maping['article_id']);
		foreach($c as $cons){
		$eisforesC = $eisforesC. "<h2>". $cons['Title']."</h2>
					<p>". $cons["content"]." </p>";	
		}}
	foreach ($nosilia as $entry => $maping) {
		$c = $this->art->get_id($maping['article_id']);
		foreach($c as $cons){
		$nosiliaC = $nosiliaC. "<h2>". $cons['Title']."</h2>
					<p>". $cons["content"]." </p>";	
		
	}}
	
	$this->view->assign("content",$content);
	$this->view->assign("pensions",$pensionsC);
	$this->view->assign("eisfores",$eisforesC);
	$this->view->assign("nosilia",$nosiliaC);
	$this->view->display('show_news');
	
  }
}
?>
