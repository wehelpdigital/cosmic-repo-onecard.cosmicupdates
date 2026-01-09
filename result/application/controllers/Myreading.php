<?php
class myreading extends CI_Controller {

    function index()
    {

      if(!isset($_GET['id']))
      {
                echo "Invalid Token!";
      }
      else
      {

             // your code
				 $this->load->model("checkresult");
				$data=$this->checkresult->get_userlog($this->input->get('id'),'logs');
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
			 
           
            
			$firstcard=$this->checkresult->get_users($data[0]->cone,'select_one');
            $secondcard=$this->checkresult->get_users($data[0]->ctwo,'select_two');
            $thirdcard=$this->checkresult->get_users($data[0]->cthree,'select_three');
			$part_one=$this->checkresult->get_part_one($added_birthday);	
			
            $resultdata=array(
            "firstcard"=>$firstcard,
            "secondcard"=>$secondcard,
            "thirdcard"=>$thirdcard,
            "name"=>$data[0]->Name,
			"email"=>$data[0]->Email,
			"day"=>$data[0]->Bdday,
			"month"=>$data[0]->BdMonth,
			"year"=>$data[0]->BdYear,
			"part_one"=>$part_one
			);

            //reg result for the first data

            $this->load->view("header");
            $this->load->view("reading",$resultdata);
            $this->load->view("footer");
      }
        }

}
?>
