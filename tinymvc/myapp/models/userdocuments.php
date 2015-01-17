<?php

class UserDocuments extends TinyMVC_Model
{
	//get by user id
  function get($user_id)
  {
     $this->db->query('select * from  UserDocuments where user_id = ?',array($user_id));
    $results = array();
    while($row = $this->db->next())
      $results[$row['user_id']] = $row;
    return $results;
  }
  function add($userid,$categid){
  		$this->db->insert('UserDocuments',array('user_id'=>$userid,'doc_id'=>$categid));
  }
}

?>