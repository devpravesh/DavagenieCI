<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class form_controller extends CI_Controller {  
      
    public function __construct()  
    {  
        parent::__construct();  
  
        //calling model  
        $this->load->model("formmodel", "a");
    }  
    public function index()  
    {  
        $this->load->view("form");  
        // $this->load->savingdata;
    }  
   public function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'name'     => $this->input->post('name'),  
                        'meaning'  => $this->input->post('meaning'),  
                        'gender'   => $this->input->post('gender'),  
                        'religion' => $this->input->post('religion')  
                        );  
        //insert data into database table.  
        $this->db->insert('baby',$data);  
  
        redirect("index.php/welcome");  
    }  
}  
?> 