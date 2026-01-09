<?php
class One extends CI_Controller {




    function index()
    {

        // your code

       if(!isset($_POST['one']))
        {

              echo "Invalid Token!";

        }
        else
        {

                $this->load->model("checkresult");

                if($_POST['gender']=='male' || $_POST['gender']=='other')
                {
                    $s_one="select_one";
                    $s_two="select_two";
                    $s_three="select_three";
                } 
                else
                {
                     $s_one="select_one";
                    //$s_one="select_one_old";
                    $s_two="select_two_old";
                    $s_three="select_three_old";
                } 


                $data_one=$this->checkresult->get_users("c".$this->input->post('one'),$s_one);
                
                
                //$data_two=$this->checkresult->get_users("c".$this->input->post('two'),$s_two);
                //$data_three=$this->checkresult->get_users("c".$this->input->post('three'),$s_three);



                $resultdata=array(
                  "title_one"=>$data_one[0]->card_title,
                  "image_one"=>$data_one[0]->card_image,
                  "description_one"=>$data_one[0]->card_description,
                  
                  //"title_two"=>$data_two[0]->card_title,
                  //"image_two"=>$data_two[0]->card_image,
                  //"description_two"=>$data_two[0]->card_description,
                  
                  //"title_three"=>$data_three[0]->card_title,
                  //"image_three"=>$data_three[0]->card_image,
                  //"description_three"=>$data_three[0]->card_description,
                  
                  "name"=>$this->input->post('inputFirstName'),
                  
                );
                //reg result for the first data
                //show data based on generated random db
                
                $this->load->view("header");

                if($_POST['gender']=="male")
                {
                    $this->load->view("resultone_male",$resultdata);
                }
                else if($_POST['gender']=="female")
                {
                    $this->load->view("resultone",$resultdata);
                }
                else
                {
                    $this->load->view("resultone_lgbt",$resultdata);
                }
                 
                
                $this->load->view("footer");


        }
        
    }


}
?>
