<?php

class ArticleCategory extends TinyMVC_Model
{
  function get_articles($catid){
     $this->db->query('select * from  articleCategories where categ_id = ?',array($catid));
    while($row = $this->db->next())
      $results[] = $row;
    return $results;
  	
  }
  function get($id)
  {
     $this->db->query('select * from  articleCategories where article_id = ?',array($id));
    while($row = $this->db->next())
      $results[] = $row;
    return $results;
  }
  function add_user($article_id,$categ_id){
  		$this->db->insert('articleCategories',array($article_id,$categ_id));
  }
}

?>