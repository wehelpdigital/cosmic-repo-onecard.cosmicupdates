<?php
class Test extends CI_Controller {

    function index()
    {
		   $this->load->view("header");
            $this->load->view("viewtest");
            $this->load->view("footer");
	}
	
}

?>