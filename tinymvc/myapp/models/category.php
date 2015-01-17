<?php

class Category extends TinyMVC_Model
{
  function get($name)
  {
     $this->db->query('select * from  Category where name = ?',array($name));
    $results = array();
    while($row = $this->db->next())
      $results[] = $row;
    return $results;
  }
  function get_all()
  {
     $this->db->query('select * from  Category');
    $results = array();
    while($row = $this->db->next())
      $results[$row['id']] = $row;
    return $results;
  }
  function add_user($category,$categ_id){
  		$this->db->insert('articleCategories',array($category.array()));
  }
}

?>