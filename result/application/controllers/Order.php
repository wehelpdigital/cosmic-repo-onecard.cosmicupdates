<?php
class order extends CI_Controller {

    function index()
    {
			$bday=$this->input->get('bdaymonth')."/".$this->input->get('bdayday')."/".$this->input->get('bdayyear');
  
			$resultdata=array(
            "birthday"=>$bday,
            "name"=>$this->input->get('name'),
			"email"=>$this->input->get('email'));

            // //reg result for the first data

            $this->load->view("header");
            $this->load->view("order",$resultdata);
            $this->load->view("footer");
      }


}
?>
