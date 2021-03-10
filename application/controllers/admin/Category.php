<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{

	//this method wil show category list page
	public function index()
	{
		$this->load->model('Category_model');
		$categories=$this->Category_model->getCategories();
		$data['categories']=$categories;
		$this->load->view('admin/category/list',$data);
	}

	//this methid will show create category page
	public function create()
	{
				$this->load->helper('common_helper');
		 		$config['upload_path']          = './public/uploads/category/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['encrypt_name'] = true;


                $this->load->library('upload', $config);



		$this->load->model('Category_model');
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<p class="invalid-feedback">','</p>');

		$this->form_validation->set_rules('name','Name','trim|required');



		if($this->form_validation->run()==TRUE)
		{


			if(!empty($_FILES['image']['name']))
			{
				 if($this->upload->do_upload('image'))
				 {
				 	$data=$this->upload->data();

				 	resizeImage($config['upload_path'].$data['file_name'],$config['upload_path'].'thumb/'.$data['file_name'],300,270);


				 	$formArray['image']=$data['file_name'];
					$formArray['name']=$this->input->post('name');
					$formArray['status']=$this->input->post('status');
					$formArray['created_at']=date('Y-m-d H:i:s');

					$this->Category_model->create($formArray);

					$this->session->set_flashdata('success','Category added successfully');
					redirect(base_url().'admin/category/index');
				 }
				 else
				 {
				 	$error = $this->upload->display_errors("<p class='invalid-feedback'>",'</p>');
				 	$data['errorImageUpload']=$error;
					$this->load->view('admin/category/create',$data);


				 }
			}
			else
			{
				$formArray['name']=$this->input->post('name');
				$formArray['status']=$this->input->post('status');
				$formArray['created_at']=date('Y-m-d H:i:s');

				$this->Category_model->create($formArray);

				$this->session->set_flashdata('success','Category added successfully');
				redirect(base_url().'admin/category/index');
			}


			

		}
		else
		{
			$this->load->view('admin/category/create');
		}
		
	}

	//edit category page
	public function edit()
	{
		
	}

	//delete category page
	public function delete()
	{
		
	}
}