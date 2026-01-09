<?php
class two extends CI_Controller {

    function index()
    {

      if(!isset($_POST['firstcard']) || !isset($_POST['secondcard']) || !isset($_POST['thirdcard']) || !isset($_POST['name']) ||
      !isset($_POST['inputDateMonth']) || !isset($_POST['inputDateDay'])  || !isset($_POST['inputDateYear']))
      {
                echo "Invalid Token!";
      }
      else
      {

        // // your code
        // your code
        $this->load->model("checkresult");

        $data=array(
            'name'=>$this->input->post('name'),
            'birthday_month'=>$this->input->post('inputDateMonth'),
            'birthday_day'=>$this->input->post('inputDateDay'),
            'birthday_year'=>$this->input->post('inputDateYear'),
            'firstcard'=>$this->input->post('firstcard'),
            'secondcard'=>$this->input->post('secondcard'),
            'thirdcard'=>$this->input->post('thirdcard'),
            'date'=>time()
                   );

            $inserted=$this->checkresult->add_to_logs($data);

            $data=$this->checkresult->get_users($this->input->post('secondcard'),'select_two');
            $resultdata=array("title"=>$data[0]->card_title,"image"=>$data[0]->card_image, "description"=>$data[0]->card_description,
            "email"=>$this->input->post('email'),
            "firstcard_content"=>$this->checkresult->get_users($this->input->post('firstcard'),'select_one'),
            "secondcard_content"=>$this->checkresult->get_users($this->input->post('secondcard'),'select_two'),
            "thirdcard_content"=>$this->checkresult->get_users($this->input->post('thirdcard'),'select_three'),
            "firstcard"=>$this->input->post('firstcard'),
            "secondcard"=>$this->input->post('secondcard'),
            "thirdcard"=>$this->input->post('thirdcard'),
            "bdaymonth"=>$this->input->post('inputDateMonth'),
            "bdayday"=>$this->input->post('inputDateDay'),
            "bdayyear"=>$this->input->post('inputDateYear'),
            "name"=>$this->input->post('name'),
            "logged_data"=>$inserted,
            "salespage"=>"true");
            // //reg result for the first data

                $this->load->view("header");
                // //show data based on generated random db
                $this->load->view("resulttwo",$resultdata);
                $this->load->view("footer");


      }
   }

}
?>
