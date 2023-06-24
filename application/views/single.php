<?php
$urls = $_GET['url'];
// echo $urls;
$this->db->where('img_id', $urls);
               $mydata= $this->db->get('images');
               foreach($mydata->result() as $act){
                // echo $act->img_path;
               }
?>
<div id="main">
<div class="breadcrumb">
<div class="">
</div>
</div>
</div>
<div class="">
<div class="main-title mt-4" data-animation="pullDown" data-delay="100">
<h3>Gallery</h3>
<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p> -->
</div>
</div>
<div class=" container-fluid">
<div class="row">
    <div class="col-md-8 mt-3">
    <!-- viewd images -->
    <?php
            $id = $_GET['url'];
            $this->db->where('img_id', $id);
            $query=$this->db->get('images');
           foreach ($query->result() as $images) 
           { ?>
          
             <div class="container-fluid">
             <img style="object-fit:cotain;with:100%" src="<?php echo base_url();?>assets/upload/product/<?php echo $images->img_path ?>" alt="">
             </div>
          
            <div class="mx-3">
            <h5 style="color:black"><b>Tittle : </b><?php echo $images->title?></h5>
            <p style="text-align:justify"><b><b>Description : </b></b><?php echo $images->desc?></p>
            </div>
                <?php } 
           ?>
    <!-- viewd images -->
    </div>

    <div class="col-md-4  mb-5">
    
    <?php
            $id = $_GET['url'];
            $this->db->where('img_id', $id);
            $query=$this->db->get('images');
           foreach ($query->result() as $images) 
           { ?>
            <?php
            $category=$images->img_category_id;
            $this->db->where('img_category_id', $category);
            $query=$this->db->get('images');
            foreach ($query->result() as $myimages) 
            { ?>
             <div class="mt-3" style="display:flex; justify-content:center">
             <div class="single_img" >
             <a href="<?php echo base_url() ?>single?url=<?php echo $myimages->img_id;?>"> <img  class="single_img" src="<?php echo base_url();?>assets/upload/product/<?php echo $myimages->img_path ?>" alt=""></a>
             </div>
             </div>

                 <?php } 
            ?>
                <?php } 
           ?>


    <!-- <div class="mt-3" style="display:flex; justify-content:center">
    <div class="card" style="width: 18rem;">
<a href="<?php echo base_url()?>single?url=assets/images/img2.jpeg"> <img class="single_img"  style="width:18rem;" src="<?php echo base_url()?>assets/images/img2.jpeg" alt="">

</a>
    </div>
    </div>
    <div class="mt-3" style="display:flex; justify-content:center">
    <div class="card" style="width: 18rem;">
<a  href="<?php echo base_url()?>single?url=assets/images/img3.jpeg"> <img class="single_img"  style="width:18rem;" src="<?php echo base_url()?>assets/images/img3.jpeg" alt="">
</a>
    </div>
    </div>
    <div class="mt-3" style="display:flex; justify-content:center">
    <div class="card" style="width: 18rem;">
<a  href="<?php echo base_url()?>single?url=assets/images/img4.jpeg"> <img class="single_img"  style="width:18rem;" src="<?php echo base_url()?>assets/images/img4.jpeg" alt="">
</a>
    </div>
    </div>
    <div class="mt-3" style="display:flex; justify-content:center">
    <div class="card" style="width: 18rem;">
<a  href="<?php echo base_url()?>single?url=assets/images/img5.jpeg"> <img class="single_img"  style="width:18rem;" src="<?php echo base_url()?>assets/images/img5.jpeg" alt="">
</a>
    </div>
    </div>
    <div class="mt-3" style="display:flex; justify-content:center">
    <div class="card" style="width: 18rem;">
<a  href="<?php echo base_url()?>single?url=assets/images/img6.jpeg"> <img class="single_img"  style="width:18rem;" src="<?php echo base_url()?>assets/images/img6.jpeg" alt="">
</a>
    </div>
    </div>
    <div class="mt-3" style="display:flex; justify-content:center">
    <div class="card" style="width: 18rem;">
<a  href="<?php echo base_url()?>single?url=assets/images/img7.jpeg"> <img class="single_img"  style="width:18rem;" src="<?php echo base_url()?>assets/images/img7.jpeg" alt="">
</a>
    </div>
    </div>
    <div class="mt-3" style="display:flex; justify-content:center">
    <div class="card" style="width: 18rem;">
<a  href="<?php echo base_url()?>single?url=assets/images/img8.jpeg"> <img class="single_img"  style="width:18rem;" src="<?php echo base_url()?>assets/images/img8.jpeg" alt="">
</a>
    </div>
    </div>
    <div class="mt-3" style="display:flex; justify-content:center">
    <div class="card" style="width: 18rem;">
<a  href="<?php echo base_url()?>single?url=assets/images/img9.jpeg"> <img class="single_img"  style="width:18rem;" src="<?php echo base_url()?>assets/images/img9.jpeg" alt="">
</a>
    </div>
    </div>
    <div class="mt-3" style="display:flex; justify-content:center">
    <div class="card" style="width: 18rem;">
<a  href="<?php echo base_url()?>single?url=assets/images/img10.jpeg"> <img class="single_img"  style="width:18rem;" src="<?php echo base_url()?>assets/images/img10.jpeg" alt="">
</a>
    </div>
    </div> -->


    </div>
</div>


</div>