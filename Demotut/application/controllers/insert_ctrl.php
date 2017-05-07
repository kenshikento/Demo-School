<?php

class insert_ctrl extends CI_Controller {

function __construct() {

parent::__construct();


$this->load->model('insert_model');

}
function index() {
$this->load->helper('url');
//$this->load->library('javascript');
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

$this->form_validation->set_rules('Dropdown','Select Options','required|greater_than[0]');
// Dropdown box loader
$this->load->helper('url');
$data1['schooldata'] = $this->insert_model->get_dropdown();
//$this->load->view('insert_view', $data1);
//Print_r ($data1);

//Validating Mobile no. Field
//$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');


if ($this->form_validation->run() == FALSE) {
$this->load->view('insert_view',$data1);
} else {
//Setting values for tabel columns
$data = array(
'MemberName' => $this->input->post('dname'),
'Emailaddress' => $this->input->post('demail'),
'SchoolID' => $this->input->post('Dropdown'),
);
//Transfering data to Model
$this->insert_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Print_r ($data);
//Loading View
$data12 = array_merge($data1,$data);
$this->load->view('insert_view', $data12);

}


}

public function populateBox($Dropdownval)
           {
               $this->load->model('insert_model');

               $result = $this->insert_model->get_Pop($Dropdownval);

               $this->output->set_output(json_encode($result));
            //  Print_r ($result);
           }

   }




?>
