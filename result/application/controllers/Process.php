<?php
class process extends CI_Controller
{

    function index()
    {

              $this->load->model("checkresult");
              $data=array
              (
                  'Name'=>$this->input->post('Name'),
                  'Email'=>$this->input->post('Email'),
                  'Bdday'=>$this->input->post('BdDay'),
                  'BdMonth'=>$this->input->post('BdMonth'),
                  'BdYear'=>$this->input->post('BdYear'),
                  'cone'=>$this->input->post('Cone'),
                  'ctwo'=>$this->input->post('Ctwo'),
                  'cthree'=>$this->input->post('Cthree'),
                  'date'=>time()
            );
            $inserted=$this->checkresult->add_to_userlog($data);

            $resultdata=array(
                'name'=>$this->input->post('Name'),
                'email'=>$this->input->post('Email'),
                'id'=>$inserted
                 );

             $this->load->view("header");
             $this->load->view("resultprocess",$resultdata);
             $this->load->view("footer");

    }

}
?>
