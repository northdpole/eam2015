<?php

class ArticleCategory extends TinyMVC_Model
{
  function get_articles($catid){
     $this->db->query('select * from  articleCategories where categ_id = ?',array($catid));
    $results = array();
    while($row = $this->db->next())
      $results[$row['article_id']] = $row;
    return $results;
  	
  }
  function get($id)
  {
     $this->db->query('select * from  articleCategories where article_id = ?',array($id));
    $results = array();
    while($row = $this->db->next())
      $results[$row['article_id']] = $row;
    return $results;
  }
  function add_user($article_id,$categ_id){
  		$this->db->insert('articleCategories',array($article_id,$categ_id));
  }
}

?>