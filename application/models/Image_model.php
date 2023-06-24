<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image_model extends CI_Model {

  public function __construct() 
  {
    parent::__construct();
    
  }

  public function insert_category($category){
   $this->db->insert('image_category', $category);
  }

  function save_image($data)
	{
    // echo "run hua";
		$insert_data['title'] = $data['img_name'];
		$insert_data['desc'] = $data['img_desc'];
		$insert_data['img_category_id'] = $data['category'];
		$insert_data['img_path'] = $data['product_img'];
		$query = $this->db->insert('images', $insert_data);
    redirect('dash/view_product');
    // print_r($data);
	}

  function get_images($id){
    $this->db->where('img_id', $id);
    $query=$this->db->get('images');
   return $query->result();
  }

  function update_image($id,$data){
    // print_r($data);
    $this->db->set('title', $data['img_name']);
		$this->db->set('desc', $data['img_desc']);
		$this->db->set('img_category_id', $data['category']);
		$this->db->set('img_path', $data['e_product_img']);

		$this->db->where('img_id', $id);
		$this->db->update('images');
    redirect('dash/view_product');
  //  return $query->result();
  }

  function getAll_image(){
    $query=$this->db->get('images');
   return $query->result();
  }

}