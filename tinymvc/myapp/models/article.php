<?php

class Article extends TinyMVC_Model
{
	
  function get_count_date(){
  	 $this->db->query('SELECT * FROM Article ORDER BY DATE LIMIT 0 , 3');
	$results = array();
    while($row = $this->db->next())
      $results[$row['id']] = $row;
    return $results;
  }
  function get_id($id)
  {
     $this->db->query('select * from  Article where id = ?',array($id));
   	$results = array();
    while($row = $this->db->next())
      $results[$row['id']] = $row;
    return $results;
  }
  function get($title)
  {
     $this->db->query('select * from  Article where title = ?',array($title));
   	$results = array();
    while($row = $this->db->next())
      $results[$row['id']] = $row;
    return $results;
  }
  function add($article){
  		$this->db->insert('Article',array($article.array()));
  }
  function search($title){
  	$this->db->query('select * from  Article where title LIKE ?  ',array('%'.$title.'%'));
   	$results = array();
    while($row = $this->db->next())
      $results[$row['id']] = $row;
    return $results;
	
  }
}

?>