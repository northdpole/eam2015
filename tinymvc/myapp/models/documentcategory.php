<?php

class DocumentCategory extends TinyMVC_Model
{
  function get_Documents($catid){
     $this->db->query('select * from  DocumentCategories where categ_id = ?',array($catid));
    while($row = $this->db->next())
      $results[] = $row;
    return $results;
  	
  }
  function get($id)
  {
     $this->db->query('select * from  DocumentCategories where document_id = ?',array($id));
    $results = array();
    while($row = $this->db->next())
      $results[$row['id']] = $row;
    return $results;
  }
  function add($Document_id,$categ_id){
  		$this->db->insert('DocumentCategories',array($Document_id,$categ_id));
  }
}

?>