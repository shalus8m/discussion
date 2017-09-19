<?php
/**
*
*/
class discuss_model extends CI_Model
{
  public function insert_comment($insert_data){
    $this->db->insert('discuss',$insert_data);
  }

  public function fetch_comment(){
    $this->db->order_by("time", "aes");
   $query= $this->db->get('discuss')->result_array();
   return $query;
  }
}

?>
