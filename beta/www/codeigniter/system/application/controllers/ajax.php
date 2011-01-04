<?php

class Ajax extends Controller {

	function Ajax()
	{
		parent::Controller();
                $this->load->helper("url");
                $this->load->model("Category");
                $this->load->model("Post");
                $this->load->model("Template");
                $this->load->model("User");
                  $this->load->model("Comment");
	}
        function newpost($id=0){
          $text="";
            foreach($this->Post->doNewPost($id) as $rows){
                $text=$text."".$this->Template->doPost($rows->title,$rows->id,$this->Post->doText($rows->texts,1),$rows->category,$this->Category->getName($rows->category),$rows->date,$this->Comment->doSumm($rows->id));
            }
            echo $text;
        }
        function category($id_cat,$page=0){
                $text="";
            foreach($this->Category->doPageCat($id_cat,$page) as $rows){
                $text=$text."".$this->Template->doPost($rows->title,$rows->id,$this->Post->doText($rows->texts,1),$rows->category,$this->Category->getName($rows->category),$rows->date,$this->Comment->doSumm($rows->id));
            }
            echo $text;
        }
        function post($id){
             $text="";
            foreach($this->Post->getPost($id) as $rows){
                $text=$this->Template->doPost($rows->title,$rows->id,$this->Post->doText($rows->texts),$rows->category,$this->Category->getName($rows->category),$rows->date,$this->Comment->doSumm($rows->id));
            }
            $comment="";
            foreach($this->Comment->doListComment($id) as $row){
               
                $comment=$comment." ".$row->name.":".$row->texts."<br>";
            }
            echo $text."<br>".$comment."<br><form action='' onsubmit='doAddComment(".$rows->id.");return false;' method='POST'>
            <input  id='name_form' type='text' name='name' value='nick'><br>
            <textarea  id='text_form' rows=7 cols=50 name='text'></textarea><br>
            <input type=submit value='поперли'>
            </form>";
        }
        function addcomment($id_post=null){
            if($id_post!=null){
                $text=$this->input->post("text");
                $name=$this->input->post("name");
                if($text!="" and $name!=""){
                    $this->Comment->doAdd($id_post,$name,$text);
                }
            }
        }
        function listcategory(){
            echo $this->Category->doListCategory();
        }
        function contact(){
            $contact="<h2>Контакты</h2>backdoor FOREVER<br>
            icq 267173
            email:a.t@mir-saratov.ru<br>
            vkontakte  http://backdoor.vkontakte.ru";
            echo $contact;
        }
        function about(){
            $about="<h2>Hello world;</h2>
            <p>Привет !!! Меня зовут Татаринов Артем,я увлекаюсь программированием,и при этом еще учусь в СГТУ на программиста</p>
            <p>В свободное время я всегда пишу на php,так уж вышло что  я на третьем курсе ,и я очень ждал когда  у нас начнется   php
            к сожелению этого не случилось  и вот я сейчас помогаю  своему другу  однокурснику,пишем с ним этот блог </p>";
            echo $about;
        }
        
}
