<?php

/**
 *
 */
class Model
{

  private $mysqli, $db;

  public function __construct($mysqli)
  {
    $this->mysqli 	= $mysqli;
    $this->db 		= $this->mysqli->conn;
  }

  public function to_array(object $data)
  {
  	$arr = [];

  	while ($push = $data->fetch_object()) {
  	    $arr[] = $push;
  	}

  	return $arr;

  }

  public function getData() // contoh
  {
 	return $this->to_array($this->db->query("SELECT * FROM data")); 	
  }

 
} // end class

?>
