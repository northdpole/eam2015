<?php

class User extends TinyMVC_Model
{
  function get_info($username)
  {
     $this->db->query('select * from  User where username = ?',array($username));
    while($row = $this->db->next())
      $results[] = $row;
    return $results;
  }
  function add($user){
  		$this->db->insert('User',array($user.array()));
  }
}

?>