<?php
class thankyou extends CI_Controller {

    function index()
    {
      // //show data based on generated random db
      $this->load->view("header");
      $this->load->view("resultfour");
      $this->load->view("footer");
    }

  }
?>
