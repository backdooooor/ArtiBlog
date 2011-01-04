<?php

class Blog extends Controller {

	function Blog()
	{
		parent::Controller();
                $this->load->helper("url");
	}
	
	function index()
	{
                 $this->load->helper("url");
               
		$this->load->view('index.php');
	}
        function addpost(){
            
        }
} 
