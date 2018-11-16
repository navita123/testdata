<?php
 class User extends CI_Controller
 {
	 function __construct() {
        parent::__construct();
       $this->load->model('Mymodel','navi');
    }

    public function show()
	{
	
	  $this->load->view("myview");
	  
	}
	 public function modify()
	{
		$id=$this->uri->segment(3);
	   $resultdata=array();
	  $select=$this->navi->modifydata($id);
	  $resultdata['selectedData']=$select;
	  $this->load->view("myview",$resultdata);

	  
	}
	 public function delete()
	{
		$id=$this->uri->segment(3);
	   $resultdata=array();
	  $select=$this->navi->deletedata($id);
	  echo "<script>alert('Data Deleted Successfully');</script>";
	        redirect('User/Navi','refresh');

	  
	}
	 public function insertData()
	{
	 
		$email = $this->input->post('email');
		$pass=  $this->input->post('password');
		$textarea=  $this->input->post('textarea1');
		$mobile=   $this->input->post('mobile');
		$city=   $this->input->post('citycode');
		$id=   $this->input->post('id');
	  	
$data1=array(
				'email'=> $email,
				'password' => $pass,
				'textarea1'=>$textarea,
				'mobile'=>$mobile,
				'citycode'=>$city
	);


	 
	  if($id>0){
			
	  		$this->navi->updatedata($data1,$id);
			echo "<script>alert('Data Updated Successfully');</script>";
	        redirect('User/Navi','refresh');
	  }else{
	  $this->navi->getdata($data1);
	  echo "<script>alert('Data Insert Successfully');</script>";
	  redirect('User/show','refresh');
	}
	 }
public function Navi(){
	 $resultdata=array();
	  $new=$this->navi->selectdata();
	  $resultdata['Rdata']=$new;
	  $this->load->view('table1',$resultdata);	
}
//public function update(){
	  //// $resultdata=array();
	 //  $this->load->model('Mymodel','navi');
	  //$new=$this->navi->selectdata();
	 // $resultdata['Rdata']=$new;
	 // $this->load->view('table1',$resultdata);	

	  //$this->load->view('myview',$resultdata);	
		

	
 }