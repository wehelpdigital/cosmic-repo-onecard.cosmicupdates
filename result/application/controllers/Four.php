<?php
class four extends CI_Controller {

    function index()
    {
      if(!isset($_POST['firstcard']) || !isset($_POST['secondcard']) || !isset($_POST['thirdcard']) || !isset($_POST['name']) || !isset($_POST['birthday']) || !isset($_POST['email']) )
      {
                echo "Invalid Token!";
      }
      else
      {
              // your code

              $data=array(
                  'name'=>$this->input->post('name'),
                  'email'=>$this->input->post('email'),
                  'birthday'=>$this->input->post('birthday'),
                  'firstcard'=>$this->input->post('firstcard'),
                  'secondcard'=>$this->input->post('secondcard'),
                  'thirdcard'=>$this->input->post('thirdcard'),
                  'date'=>time()
              );
              $this->load->model("checkresult");
              $this->checkresult->add_to_logs($data);


              $first_card_data=$this->checkresult->get_users($this->input->post('firstcard'),'select_one');
              $second_card_data=$this->checkresult->get_users($this->input->post('secondcard'),'select_two');
              $third_card_data=$this->checkresult->get_users($this->input->post('thirdcard'),'select_three');


              $resultdata=array("first_title"=>$first_card_data[0]->card_title,"first_image"=>$first_card_data[0]->card_image, "first_description"=>$first_card_data[0]->card_description,
              "second_title"=>$second_card_data[0]->card_title,"second_image"=>$second_card_data[0]->card_image, "second_description"=>$second_card_data[0]->card_description,
              "third_title"=>$third_card_data[0]->card_title,"third_image"=>$third_card_data[0]->card_image, "third_description"=>$third_card_data[0]->card_description,
              "firstcard"=>"c".$this->input->post('one'),
              "secondcard"=>"c".$this->input->post('two'),
              "thirdcard"=>"c".$this->input->post('three'),
              "email"=>$this->input->post('email'),
              "birthday"=>$this->input->post('birthday'),
              "name"=>$this->input->post('name'));

              // //reg result for the first data
              // //show data based on generated random db
              $this->load->view("header");
              $this->load->view("resultfour",$resultdata);
              $this->load->view("footer");
    }
    }

}
?>
