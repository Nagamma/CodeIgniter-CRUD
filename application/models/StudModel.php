<?php

class StudModel extends CI_Model{

public function getAllrecords(){

$query=$this->db->get('student');
return $query->result();
}


public function saveRecord($data){
$query=$this->db->insert('student', $data);
return $query;
}

public function deleteRecord($id){
  $query=$this->db->delete('student',array('id'=>$id));
return $query;
}

}


?>
