<?php
class three extends CI_Controller {

    function index()
    {


		  parse_str($_SERVER['QUERY_STRING'], $output);


      if(!isset($output['custom_id']))
      {
                echo "Invalid Token!";
      }
      else
      {
			 $id=$output['custom_id'];
             // your code
            $this->load->model("checkresult");

            $data=$this->checkresult->get_userlog($id);

            //Day ones digit

      			$digit=$data[0]->Bdday + $data[0] ->BdMonth + $data[0]->BdYear;

      			//Get 4 digits of digit

      			$dgone=intval($digit/1000);
      			$dgone_var=$digit % 1000;

      			$dgtwo=intval($dgone_var/100);
      			$dgtwo_var=$dgone_var % 100;

      			$dgthree=intval($dgtwo_var / 10);
      			$dgfour=$dgtwo_var % 10;

      			$added_birthday=$dgone + $dgtwo + $dgthree + $dgfour;

      			if($added_birthday>22)
      			{
      				$added_birthday=(intval($added_birthday / 10))+($added_birthday % 10);
      			}

            $part_one=$this->checkresult->get_part_one($added_birthday);

            //get card

            $card=$this->checkresult->get_users($data[0]->cthree,"select_three");

            $resultdata=array("title"=>$card[0]->card_title,"image"=>$card[0]->card_image, "description"=>$card[0]->card_description,
            "email"=>$data[0]->Email,  "name"=>$data[0]->Name, "bdayday"=>$data[0]->Bdday, "bdaymonth"=>$data[0] ->BdMonth, "bdayyear"=>$data[0]->BdYear,
               "salespage"=>"true", "part_one"=>$part_one);
            // //reg result for the first data
            $this->load->view("header");
            $this->load->view("resultthree",$resultdata);
            $this->load->view("footer");
      } 
      }



}
?>
