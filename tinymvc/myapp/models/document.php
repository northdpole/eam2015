<?php

class Document extends TinyMVC_Model
{
  function get_id($id)
  {
     $this->db->query('select * from  Document where id = ?',array($id));
   	$results = array();
    while($row = $this->db->next())
      $results[$row['id']] = $row;
    return $results;
  }
  function get($title)
  {
     $this->db->query('select * from  Document where title = ?',array($title));
   	$results = array();
    while($row = $this->db->next())
      $results[$row['id']] = $row;
    return $results;
  }
  function add($Document){
  		$this->db->insert('Document',array($Document.array()));
  }
  function search($title){
  	$this->db->query('select * from  Document where title LIKE ?  ',array('%'.$title.'%'));
   	$results = array();
    while($row = $this->db->next())
      $results[$row['id']] = $row;
    return $results;
	
  }
}

?>