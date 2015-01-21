<?php

class User extends TinyMVC_Model
{
  function get_info($username)
  {
     $this->db->query('select * from  User where name = ?',array($username));
    $results = array();
    while($row = $this->db->next())
      $results[$row[$i]] = $row;
    return $results;
  }
  function get($id)
  {
     $this->db->query('select * from  User where id = ?',array($id));
    $results = array();
    while($row = $this->db->next())
      $results[$row['id']] = $row;
    return array_shift($results);
  }
  function update($name,
			   $surname,
			   $address,
    	       $postcode,
    		   $city,
    		   $afm,
    		   $kyt,
    		   $amka,
    		   $retired,
    		   $pensioNo,
    		   $iban,
    		   $bank,$id){
    		   		
    		  // 	error_log(1);
				
  		$f = $this->db->pdo->prepare('UPDATE User SET name=?,
  													  surname=?,
  													  address=?,
  													  postcode=?,
  													  city=?,
  													  afm=?,
 												      kyt=?,
 												      amka=?,
 												      retired=?,
 												      pensionNo=?,
 												      iban=?,
 												      bank=?
 												      WHERE id=?');
  		$f->execute(array(
  				$name,
			   $surname,
			 $address,
    		$postcode ,
    		$city ,
    		$afm ,
    		$kyt ,
    		$amka ,
    		$retired,
    		$pensioNo ,
    		$iban ,
    		$bank,
    		$id));
  }
}

?>