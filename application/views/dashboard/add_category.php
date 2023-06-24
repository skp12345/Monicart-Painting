<?php $this->load->view('dashboard/include/navbar');?>

<!-- content design -->

<div class="container">
	<div class="row my-3">
		<!-- sidebar design -->

<div class="col-md-4">
<?php $this->load->view('dashboard/include/sidebar');?>	
</div>

<div class="col-md-8">
  <h3 class="text-center mt-3">Add Category Here</h3>
			<form action="<?php echo base_url();?>add_category" method="post">
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label"
						>Enter Category Name</label
					>
					<input
						type="category"
						name="img_category"
						class="form-control"
						id="category"
						required
					/>
				</div>

				<button type="submit" class="btn btn-primary">Add</button>
			</form>
			<?php $this->load->view('dashboard/categorylist');?>	
		</div>
		
	</div>
</div>
