<?php $this->load->view('dashboard/include/navbar');?>

<!-- content design -->

<div class="container">
	<div class="row my-3">
		<!-- sidebar design -->

<div class="col-md-4">
<?php $this->load->view('dashboard/include/sidebar');?>	
</div>

<div class="col-md-8">
<h3 class="text-center mt-3">Edit Image Here</h3>
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
			<?php
	      				$no = 0;
	      				foreach ($images as $row)
	      					$no++;
	      			?>
			<form enctype="multipart/form-data" action="<?php echo site_url('Image_operation/update_image/');?><?php echo $row->img_id?>" method="post">

	      		<div class="form-group mt-2">
				    <label>Image Title</label>
				    <input type="text" class="form-control" name="e_img_name" placeholder="Image Name" value="<?php echo $row->title ?>" required>
				</div>

	      		<div class="form-group mt-2">
				    <label>Image Description</label>
				<textarea type="text" class="form-control" name="e_img_desc" id="" value="<?php echo $row->desc ?>" placeholder="<?php echo $row->desc ?>" cols="30" rows="3" required><?php echo $row->desc ?></textarea>
				</div>

				<div class="form-group mt-2">
				    <label>Category</label>
				    <select class="form-control" name="e_category" id="category" required>
					<option value="" disabled selected>Select Category <span style="width:0.5rem"> &#9660;</span></option>
						<?php
                   $category=$this->db->get('image_category');
				   foreach ($category->result() as $cat)
           {?>
                <option value="<?php echo $cat->category_id;?>" <?php if($cat->category_id==$row->img_category_id) {echo "selected";}?>><?php echo $cat->category;?></option>
         <?php }        
           ?>
				    </select>
				</div>

			
				<div class="form-group mt-2">
				    <label>Image</label>
					<div class="mt-2 mb-2">
					<img style="width:150px;height:100px" src="<?php echo base_url(); ?>assets/upload/product/<?php echo $row->img_path?>" alt="">
					</div>
				    <input type="hidden" value="<?php echo $row->img_path?>" class="form-control" id="selected_img" name="selected_img" placeholder="product image" required>
				    <input  type="file" class="form-control" value="<?php echo $row->img_path?>" id="e_product_img" name="e_product_img" placeholder="product image">
					
				</div>
                
				<button onclick="fun1()" class="btn btn-success mt-3" type="submit">Update Product</button>

			</form>

		</div>
	</div>
</div>


<script>
	function fun1(){
		var ele=document.getElementById("e_product_img").value;
		if(! ele){
			document.getElementById("e_product_img").value=document.getElementById("selected_img").value;
			console.log(document.getElementById("e_product_img").value);
		}
	}

</script>