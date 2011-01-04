<?
 class Post extends Model {
//модель для работы с записями,получение записей,удаление,добавление,
    function Post()
    {
        parent::Model();
	 $CI = get_instance(); 
    }
    function  getPost($id){
        $this->load->database();
        $this->db->where("id",$id);
        $res=$this->db->get("post");
        return $res->result();
    }
    function doNewPost($page=0){
     
        $col=10;
             $this->load->database();
            
            $this->db->order_by("id", "desc"); 
           
            $this->db->limit($col,$page);
            $CI = get_instance();
            $res=$this->db->get("post");
            return $res->result();
    }
    function doAdd($title,$text,$id_cat,$date){
        $this->load->database();
        $data = array(
               'title' => $title ,
               'texts' => $text ,
               'date' => $date,
               'id_cat'=>$id_cat
            );

$this->db->insert('post', $data); 
    }
    function  doRemove($id_post){
        $this->load->database();
        $this->db->where('id', $id_post);
$this->db->delete('post'); 
    }
    function doEdit($id_post,$title,$text,$id_cat,$date){
        $this->load->database();
        $data = array(
               'title' => $title,
               'texts' => $text,
               'date' => $date,
               'id_cat'=>$id_cat
            );

$this->db->where('id', $id_post);
$this->db->update('post', $data); 

    }
    function doText($text,$option=0){
        $str=explode("[]",$text);
        if($option==0){
            return $str[0]."".$str[1];
        }else return $str[0];
    }

 }
?>