<?php

class Comment extends Model {

	function Comment()
	{
		parent::Model();
        }
        function doAdd($id_post,$name,$text){
              $this->load->database();
        $data = array(
               'id_post' => $id_post ,
               'texts' => $text ,
               'name' => $name
             
            );

$this->db->insert('comment', $data); 
        }
        function doListComment($id_post){
             $this->load->database();
            $this->db->where('id_post',$id_post);
            $this->db->order_by("id", "desc"); 
           
            $res=$this->db->get("comment");
            return $res->result();
        }
        function doSumm($id_post){
             $this->load->database();
              $this->db->where('id_post', $id_post);
$query = $this->db->get('comment');
        return  $query->num_rows();
        }
}
