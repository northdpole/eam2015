<?php

class Subscription extends TinyMVC_Model
{
  function get($id)
  {
     $this->db->query('select * from  userSubscriptions where userid = ?',array($id));
    while($row = $this->db->next())
      $results[] = $row;
    return $results;
  }
  function add($userid,$categid){
  		$this->db->insert('userSubscriptions',array('userid'=>$userid,'categ_id'=>$categid));
  }
}

?>