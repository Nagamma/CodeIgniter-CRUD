<?php
class StudentCtrl extends CI_Controller{

public function index(){
//  $this->load->helper('url');
$this->load->model('StudModel');
$records['records']=$this->StudModel->getAllrecords();
$this->load->view('StudRecords',$records);
}


public function save(){
   $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('marks', 'Marks', 'required');
  $this->form_validation->set_rules('grade', 'Grade', 'required');
$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
if ($this->form_validation->run())
  {
$data=$this->input->post();
$this->load->model('StudModel');
if($this->StudModel->saveRecord($data))
{
  $this->session->set_flashdata('response','Record saved successfully');
}
else{
  $this->session->set_flashdata('response','Record Failed to save');

}
return redirect('StudentCtrl');
  }
    else
  {
    $this->load->view('create');
  }
    //  $insert = $this->input->post();

//$this->db->insert('student', $insert);

}

public function create(){
  echo "this is create section";
  $this->load->view('create');
}
public function delete($id){
  $this->load->model('StudModel');
  if($this->StudModel->deleteRecord($id))
  {
    $this->session->set_flashdata('response','Record Deleted successfully');
  }
  else{
    $this->session->set_flashdata('response','Failed to delete record');

  }
  return redirect('StudentCtrl');

  }


public function edit($id){
  $this->load->view('update',$id);

      /*echo "this is edit section";
      $this->db->where('id',$id);
      $query=$this->db->get('student');
      $records['records']= $query->result();*/

    }





}




?>
