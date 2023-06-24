<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!$_SESSION['admin_email']){   
    redirect('dash/login','refresh');   
}
?> 

<?php $this->load->view('dashboard/include/navbar');?>

<!-- content design -->

<div class="container">
	<div class="row my-3">
		<!-- sidebar design -->

<div class="col-md-4">
<?php $this->load->view('dashboard/include/sidebar');?>	
</div>

<div class="col-md-8">
<h3 class="text-center mt-3">Images Details</h3>
<table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Image</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
          
<!-- backend coding -->

<?php
           $images=$this->db->get('images');
           foreach ($images->result() as $images) 
           { ?>
           <tr>       
                <td><?php echo $images->img_id?></td>
                <td><?php 
            // echo $images->img_category_id;
                $this->db->where('category_id', $images->img_category_id);
               $mydata= $this->db->get('image_category');
               foreach($mydata->result() as $act){
                echo $act->category;
               }
               ?></td>
                <td><img style="height:5rem;width:8rem" src="<?php echo base_url(); ?>assets/upload/product/<?php echo $images->img_path ?>" alt=""></td>
                <td><a href="<?php echo base_url(); ?>Image_operation/edit_image/<?php echo $images->img_id;?>" class="btn btn-warning w-100 btn-xs">Edit</a></td>
                <td><a href="<?php echo site_url()?>Image_operation/delete_image/<?php echo $images->img_id;?>" class="btn btn-danger w-100 btn-xs">Delete</a></td>
                </td>
            </tr>
                <?php } 
           ?>

<!-- backend coding -->


           </table>
		</div>
	</div>
</div>

