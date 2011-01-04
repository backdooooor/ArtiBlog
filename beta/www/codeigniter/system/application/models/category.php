<?php

class Category extends Model {

	function Category()
	{
		parent::Model();
                $this->load->helper("url");
	}
        function doAdd($name){
               $data = array(
               'name' => $name ,
               
            );

$this->db->insert('category', $data); 
        }
        function doPageCat($id_cat,$page=0){
            $col=10;
             $this->load->database();
            $this->db->where('category',$id_cat);
            $this->db->order_by("id", "desc"); 
           
            $this->db->limit($col,$page);
            $CI = get_instance();
            $res=$this->db->get("post");
            return $res->result();
        }
        function getName($id_cat){
           $this->load->database();
           $this->db->where("id",$id_cat);
           $res=$this->db->get("category");
           $row = $res->row();
           return $row->name;
        }
        function doListCategory(){
            $result="";
            $this->load->database();
            $res=$this->db->get("category");
            foreach($res->result() as $row){
                $result=$result.'<li><a href="#" onclick="getPostCat('.$row->id.',1);return false;">'.$row->name.'</a></li>';
            }
            return $result;
            
        }
        
}

