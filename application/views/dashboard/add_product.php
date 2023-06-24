<?php $this->load->view('dashboard/include/navbar');?>

<!-- content design -->

<div class="container">
	<div class="row my-3">
		<!-- sidebar design -->

<div class="col-md-4">
<?php $this->load->view('dashboard/include/sidebar');?>	
</div>

<div class="col-md-8">
<h3 class="text-center mt-3">Add Image Here</h3>
			<!-- <form action="<?php echo base_url();?>save_image" method="post">
				<div class="mb-3">
					<label for="product" class="form-label"
						>Title</label
					>
					<input
						type="product"
						name="title"
						class="form-control"
						id="product"
						required
					/>
				</div>
				<div class="mb-3">
					<label for="pro_desc" class="form-label"
						>Image Description</label
					>

					<textarea name="pro_desc" id="pro_desc" class="form-control" cols="30" rows="3"></textarea required>
				</div>
				<div class="mb-3">
					<label for="pro_category" class="form-label"
						>Select image category</label
					>

					<select class="form-control" name="category" id="pro_category" required>
                        <option value="" disabled selected>Select Category <span style="width:0.5rem"> &#9660;</span></option>
						<?php
                   $category=$this->db->get('image_category');
				   foreach ($category->result() as $cat)
           {?>
                <option value=""><?php echo $cat->category;?></option>
         <?php }        
           ?>
						
                    </select>
				</div>
				<div class="mb-3">
				
					<input type="file" id="myFile" name="filename">
				</div>

				<button type="submit" class="btn btn-primary">Add Now</button>
			</form> -->

			<form enctype="multipart/form-data" action="<?php echo site_url('Image_operation/save_image');?>" method="post">

	      		<div class="form-group mt-2">
				    <label>Image Title</label>
				    <input type="text" class="form-control" name="img_name" placeholder="Image Name" required>
				</div>

	      		<div class="form-group mt-2">
				    <label>Image Description</label>
				<textarea type="text" class="form-control" name="img_desc" id="" placeholder="Image description" cols="30" rows="3" required></textarea>
				</div>

				<div class="form-group mt-2">
				    <label>Category</label>
				    <select class="form-control" name="category" id="category" required>
					<option value="" disabled selected>Select Category <span style="width:0.5rem"> &#9660;</span></option>
						<?php
                   $category=$this->db->get('image_category');
				   foreach ($category->result() as $cat)
           {?>
                <option value="<?php echo $cat->category_id;?>"><?php echo $cat->category;?></option>
         <?php }        
           ?>
				    </select>
				</div>

			
				<div class="form-group mt-2">
				    <label>Image</label>
				    <input type="file" class="form-control" id="product_img" name="product_img" placeholder="product image" required>
					
				</div>

				<button class="btn btn-success mt-3" type="submit">Save Image</button>

			</form>

		</div>
	</div>
</div>
