<?php
class checkresult extends CI_Model

{
/* we will use the function getUsers */
  function get_users($c,$table)
  {

    /* all the queries relating to the data we want to retrieve will go in here. */
    $this->db->where(array('card_code'=>$c));
    $this->db->select('*');
    $q = $this->db->get($table);

    /* after we've made the queries from the database, we will store them inside a variable called $data, and return the variable to the controller */
    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }


  }


  function get_userlog($id)
  {

    /* all the queries relating to the data we want to retrieve will go in here. */
    $this->db->where(array('id'=>$id));
    $this->db->select('*');
    $q = $this->db->get('userlog');

    /* after we've made the queries from the database, we will store them inside a variable called $data, and return the variable to the controller */
    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }
  }



  function get_logs($c,$table)
  {

    /* all the queries relating to the data we want to retrieve will go in here. */
    $this->db->where(array('id'=>$c));
    $this->db->select('*');
    $q = $this->db->get($table);

    /* after we've made the queries from the database, we will store them inside a variable called $data, and return the variable to the controller */
    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }


  }

  function add_to_logs($data)
  {

    $this->db->insert('logs',$data);
    return $this->db->insert_id();
  }

  function add_to_userlog($data)
  {

    $this->db->insert('userlog',$data);
    return $this->db->insert_id();

  }


  function get_part_one($birthday_number)
  {

    /* all the queries relating to the data we want to retrieve will go in here. */

    $this->db->where(array('card_number'=>$birthday_number));

    $this->db->select('*');

    $q = $this->db->get("part_one");


    /* after we've made the queries from the database, we will store them inside a variable called $data, and return the variable to the controller */

    if($q->num_rows() > 0)

    {

      foreach ($q->result() as $row)

      {

        $data[] = $row;

      }

      return $data;

    }


  }


}
