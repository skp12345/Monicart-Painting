<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Image_operation extends CI_Controller {

     function __construct()
    {
        parent::__construct();
        $this->load->model('Image_model');   
    }

    function add_category_process(){
   
    if($this->input->post('img_category'))
   {
    $category=$this->input->post('img_category');
  
    $data = array(
        'category' => $category,
);
$this->Image_model->insert_category($data);
redirect('dash/add_category','refresh');
   }else{
    echo "failed to insert the data";
   }

    }



    function delete_category_process($id){
        $this->db->where('category_id', $id);
        $this->db->delete('image_category');
        redirect('dash/add_category','refresh');
        // echo "Suceessfully Delete category";
    }
 

    function delete_employee(){


   }
    

   function save_image(){

        //get the form values
        $data['img_name'] = $this->input->post('img_name', TRUE);
        $data['img_desc'] = $this->input->post('img_desc', TRUE);
        $data['category'] = $this->input->post('category', TRUE);

        //file upload code 
        //set file upload settings 
        $config['upload_path']          = APPPATH. '../assets/upload/product/';
        $config['allowed_types']        = 'jpg|jpeg|gif|png';

        $this->load->library('upload', $config);
          if ( ! $this->upload->do_upload('product_img')){
            $error = array('error' => $this->upload->display_errors());
            redirect('dash/view_product');
        }else{

            //file is uploaded successfully
            //now get the file uploaded data 
            $upload_data = $this->upload->data();

            //get the uploaded file name
            $data['product_img'] = $upload_data['file_name'];

            //store pic data to the db
            $this->Image_model->save_image($data);

            // redirect('dash/view_product');
        }
      
}

    function delete_image($id){
        $this->db->where('img_id', $id);
        $this->db->delete('images');
        redirect('dash/view_product','refresh');
    }

    function edit_image($id){
        $data['images'] = $this->Image_model->get_images($id);
        $this->load->view('dashboard/include/header');
        $this->load->view('dashboard/edit_product', $data);
        $this->load->view('dashboard/include/footer');
        // print_r($images);
    }

    function update_image($id){
      //get the form values
      $data['img_name'] = $this->input->post('e_img_name', TRUE);
      $data['img_desc'] = $this->input->post('e_img_desc', TRUE);
      $data['category'] = $this->input->post('e_category', TRUE);
      $data['e_product_img'] = '';


      if($_FILES['e_product_img']['name']!=""){
      //file upload code 
      //set file upload settings 
      $config['upload_path']          = APPPATH. '../assets/upload/product/';
      $config['allowed_types']       = 'jpg|jpeg|gif|png';

      $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('e_product_img')){
          $error = array('error' => $this->upload->display_errors());
          redirect('dash/view_product');
      }else{

          //file is uploaded successfully
          //now get the file uploaded data 
          $upload_data = $this->upload->data();

          //get the uploaded file name
          $data['e_product_img'] = $upload_data['file_name'];

          //store pic data to the db
          $this->Image_model->update_image($id,$data);
          }
      }else{
        $data['e_product_img'] = $this->input->post('selected_img');
        $this->Image_model->update_image($id,$data);
      }

}

function Get_all(){
  $data['images'] = $this->Image_model->getAll_image();
    $this->load->view('include/header');
		$this->load->view('gallery',$data);
		$this->load->view('include/footer');
    // print_r($data);
}


function Oil(){
    $this->load->view('include/header');
		$this->load->view('oil_painting');
		$this->load->view('include/footer');
    // print_r($data);
}

function Charcoal(){
    $this->load->view('include/header');
		$this->load->view('charcoal');
		$this->load->view('include/footer');
    // print_r($data);
}


}
