<style>
	 #primary.content-full-width {
        margin-top: -5rem !important;
    }
</style>

<!-- mobile caro -->

<div class="mycaro mobile_caro" >
<div id="carouselExampleAutoplaying1" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="assets/images/imgs12.jpeg" class="d-block w-100 myslider" alt="...">
     <div class="carousel-caption d-none d-md-block">
        <!-- <h2>JOINT REPLACEMENT AND ORTHOPAEDIC CENTER</h2> -->
        <!-- <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img  src="assets/images/imgs9.jpeg" class="d-block w-100 myslider" alt="...">
     <div class="carousel-caption d-none d-md-block">
        <!-- <h2>LAPAROSCOPY SURGERY</h2>
        <p>MINIMAL INVASIVE - QUICK RECOVERY</p> -->
      </div>
    </div>
    <div  class="carousel-item">
      <img  src="assets/images/imgs3.jpeg" class="d-block w-100 myslider" alt="...">
    <div class="carousel-caption d-none d-md-block">
        <!-- <h2>MOTHER AND CHILD CARE</h2> -->
        <!-- <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/imgs11.jpeg" class="d-block w-100 myslider" alt="...">
    <div class="carousel-caption d-none d-md-block">
        <!-- <h2>COSMETOLOGY & DERMATOLOGY TREATMENT</h2> -->
        <!-- <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
	<button class="carousel-control-prev mt-5" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next mt-5" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  
</div>
</div>

<!-- mobile caro -->

<!-- laptop caro -->

<div class="mycaro laptop_caro" >
<div id="carouselExampleAutoplaying2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="assets/images/slider1.jpeg" class="d-block w-100" alt="...">
     <div class="carousel-caption d-none d-md-block">
        <!-- <h2>JOINT REPLACEMENT AND ORTHOPAEDIC CENTER</h2> -->
        <!-- <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img  src="assets/images/slider2.jpeg" class="d-block w-100" alt="...">
     <div class="carousel-caption d-none d-md-block">
        <!-- <h2>LAPAROSCOPY SURGERY</h2>
        <p>MINIMAL INVASIVE - QUICK RECOVERY</p> -->
      </div>
    </div>
    <div  class="carousel-item">
      <img  src="assets/images/slider3.jpeg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
        <!-- <h2>MOTHER AND CHILD CARE</h2> -->
        <!-- <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/slider4.jpeg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
        <!-- <h2>COSMETOLOGY & DERMATOLOGY TREATMENT</h2> -->
        <!-- <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
	<button class="carousel-control-prev mt-5" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next mt-5" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  
</div>
</div>
<!-- laptop caro -->




<div id="main">
	<section id="primary" class="content-full-width">
		<div class="dt-sc-hr-invisible-small"></div>
		<div class="fullwidth-section">
			<div class="container">
				<div class="main-title" data-animation="pullDown" data-delay="100">
					<h2 class="aligncenter mt-5 py-5">My Art Work</h2>
					<p> You imagine. We will create. </p>
				</div>
			</div>
			<!-- <div class="dt-sc-sorting-container">
<a data-filter="*" href="#" title="09" class="dt-sc-tooltip-top active-sort type1 dt-sc-button animate" data-animation="fadeIn" data-delay="100">All</a>
<a data-filter=".nature" href="#" title="06" class="dt-sc-tooltip-top type1 dt-sc-button animate" data-animation="fadeIn" data-delay="200">Nature</a>
<a data-filter=".people" href="#" title="06" class="dt-sc-tooltip-top type1 dt-sc-button animate" data-animation="fadeIn" data-delay="300">People</a>
<a data-filter=".street" href="#" title="05" class="dt-sc-tooltip-top type1 dt-sc-button animate" data-animation="fadeIn" data-delay="400">Street</a>
 <a data-filter=".still-life" href="#" title="08" class="dt-sc-tooltip-top type1 dt-sc-button animate" data-animation="fadeIn" data-delay="500">Still life</a>
</div> -->
			<div class="portfolio-fullwidth">
				<div class="portfolio-grid">
					<div class="dt-sc-portfolio-container isotope">
					<?php
					$this->db->limit(8);
           $images_list=$this->db->get('images');
           foreach ($images_list->result() as $images) 
           { ?>
       
	   <div class="portfolio nature still-life dt-sc-one-fourth">
		
							<figure>
								<img src="<?php echo base_url();?>/assets/upload/product/<?php echo $images->img_path ;?>" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											
<div class="mygallery1">
<a  style="font-size:3rem" class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url();?>/assets/upload/product/<?php echo $images->img_path ;?>"></a>
</div>											
<div class="mygallery2">
<a  style="font-size:3rem" class="fa fa-camera-retro"  href="<?php echo base_url();?>/assets/upload/product/<?php echo $images->img_path ;?>"></a>
</div>										</div>
										<div class="portfolio-title">
											<h6><a href="<?php echo base_url();?>/assets/upload/product/<?php echo $images->img_path ;?>"><?php echo $images->title;?></a></h6>
											<!-- <p>Lorem ipsum dolor sit amet.</p> -->
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
            <?php 
            } 
           ?>
						<!-- <div class="portfolio nature people street dt-sc-one-fourth">
							<figure>
								<img src="<?php echo base_url(); ?>assets/images/img2.jpeg" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											<a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url(); ?>assets/images/img2.jpeg"></a>
										</div>
										<div class="portfolio-title">
											<h5><a href="<?php echo base_url(); ?>assets/images/img2.jpeg">Lorem, ipsum.</a></h5>
											<p>Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="portfolio street landscapes still-life dt-sc-one-fourth">
							<figure>
								<img src="<?php echo base_url(); ?>assets/images/img3.jpeg" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											<a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url(); ?>assets/images/img3.jpeg"></a>
										</div>
										<div class="portfolio-title">
											<h5><a href="<?php echo base_url(); ?>assets/images/img3.jpeg">Lorem, ipsum.</a></h5>
											<p>Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="portfolio nature still-life dt-sc-one-fourth">
							<figure>
								<img src="<?php echo base_url(); ?>assets/images/img4.jpeg" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											<a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url(); ?>assets/images/img4.jpeg"></a>
										</div>
										<div class="portfolio-title">
											<h5><a href="<?php echo base_url(); ?>assets/images/img4.jpeg">Lorem, ipsum.</a></h5>
											<p>Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="portfolio people still-life dt-sc-one-fourth">
							<figure>
								<img src="<?php echo base_url(); ?>assets/images/img5.jpeg" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											<a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url(); ?>assets/images/img5.jpeg"></a>
										</div>
										<div class="portfolio-title">
											<h5><a href="<?php echo base_url(); ?>assets/images/img5.jpeg">Lorem, ipsum.</a></h5>
											<p>Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="portfolio people still-life dt-sc-one-fourth">
							<figure>
								<img src="<?php echo base_url(); ?>assets/images/img6.jpeg" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											<a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url(); ?>assets/images/img6.jpeg"></a>
										</div>
										<div class="portfolio-title">
											<h5><a href="<?php echo base_url(); ?>assets/images/img6.jpeg">Lorem, ipsum.</a></h5>
											<p>Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="portfolio people nature still-life street dt-sc-one-fourth">
							<figure>
								<img src="<?php echo base_url(); ?>assets/images/img7.jpeg" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											<a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url(); ?>assets/images/img7.jpeg"></a>
										</div>
										<div class="portfolio-title">
											<h5><a href="<?php echo base_url(); ?>assets/images/img7.jpeg">Dream Big And Achive It</a></h5>
											<p>Mordren contemporary art 🎨 with charcoal and gold flakes..</p>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="portfolio nature people street still-life dt-sc-one-fourth">
							<figure>
								<img src="<?php echo base_url(); ?>assets/images/img8.jpeg" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											<a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url(); ?>assets/images/img8.jpeg"></a>
										</div>
										<div class="portfolio-title">
											<h5><a href="<?php echo base_url(); ?>assets/images/img8.jpeg">Lorem, ipsum.</a></h5>
											<p>Lorem ipsum dolor sit amet.</p>
										</div>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="portfolio nature people street still-life dt-sc-one-fourth">
							<figure>
								<img src="<?php echo base_url(); ?>assets/images/img9.jpeg" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											<a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url(); ?>assets/images/img9.jpeg"></a>
											< </div>
												<div class="portfolio-title">
													<h5><a href="<?php echo base_url(); ?>assets/images/img9.jpeg">Lorem, ipsum.</a></h5>
													<p>Lorem ipsum dolor sit amet.</p>
												</div>
										</div>
								</figcaption>
							</figure>
						</div>
						<div class="portfolio nature people street still-life dt-sc-one-fourth">
							<figure>
								<img src="<?php echo base_url(); ?>assets/images/img10.jpeg" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											<a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url(); ?>assets/images/img10.jpeg"></a>
											< </div>
												<div class="portfolio-title">
													<h5><a href="<?php echo base_url(); ?>assets/images/img10.jpeg">Lorem, ipsum.</a></h5>
													<p>Lorem ipsum dolor sit amet.</p>
												</div>
										</div>
								</figcaption>
							</figure>
						</div>
						<div class="portfolio street nature people still-life dt-sc-one-fourth">
							<figure>
								<img src="<?php echo base_url(); ?>assets/images/img11.jpeg" alt="" title="">
								<figcaption>
									<div class="portfolio-detail">
										<div class="views">
											<a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="<?php echo base_url(); ?>assets/images/img11.jpeg"></a>
											< </div>
												<div class="portfolio-title">
													<h5><a href="<?php echo base_url(); ?>assets/images/img11.jpeg">Lorem, ipsum.</a></h5>
													<p>Lorem ipsum dolor sit amet.</p>
												</div>
										</div>
								</figcaption>
							</figure>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="container">
			<div class="main-title animate" data-animation="pullDown" data-delay="100">
				<h2 class="aligncenter mt-5">Paintings</h2>
				<p style="color: white;"></p>Lets you Decorate better.</p>
				<!-- <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p> -->
			</div>
		</div>
		<div class="fullwidth-section">
			<div class="blog-section">
				<article class="blog-entry">
					<div class="entry-thumb">
					<ul class="blog-slider">
						<?php
            $id = 27;
            $this->db->where('img_category_id', $id);
            $query=$this->db->get('images');
           foreach ($query->result() as $images) 
           { ?>
           
             
             <!-- <a href="<?php echo base_url() ?>single?url=<?php echo $images->img_id;?>"> <img  class="single_img"  style="width:18rem;" src="<?php echo base_url();?>assets/upload/product/<?php echo $myimages->img_path ?>" alt=""></a> -->
             
			                <li> <img class="oil_painting" src="<?php echo base_url();?>assets/upload/product/<?php echo $images->img_path ?>" alt="" title=""> </li>
                <?php } 
           ?>
		   </ul>
					</div>
					<div class="entry-details">
						<div class="entry-title">
							<h3><p href="blog-detail.html">Charcoal</p></h3>
						</div>
						<div class="entry-body">
							<p><b>Charcoal paintings</b>, are a form of artwork where the charred sticks of wood are used to create artworks. The painting style is believed to be a staple for many artists’ study and a great way to practice gestures in the artworks. </p>
						</div>
						<a class="type1 dt-sc-button small" href="<?php echo base_url(); ?>/Image_operation/charcoal">View Gallery<i class="fa fa-angle-right"></i></a>
					</div>
				</article>
			</div>
			<div class="blog-section">
				<article class="blog-entry type2">
					<div class="entry-details">
						<div class="entry-title">
							<h3><p href="blog-detail.html">Oil painting</p></h3>
						</div>
						<div class="entry-body">
							<p><b>Oil painting</b>,  is the process of painting with pigments with a medium of drying oil as the binder. It has been the most common technique for artistic painting on wood panel or canvas for several centuries, spreading from Europe to the rest of the world. </p>
						</div>
						<a class="type1 dt-sc-button small" href="<?php echo base_url(); ?>/Image_operation/oil">View Gallery<i class="fa fa-angle-right"></i></a>
					</div>
					<div class="entry-thumb">
						<ul class="blog-slider">
						<?php
            $id = 26;
            $this->db->where('img_category_id', $id);
            $query=$this->db->get('images');
           foreach ($query->result() as $images) 
           { ?>
           
             
             <!-- <a href="<?php echo base_url() ?>single?url=<?php echo $images->img_id;?>"> <img  class="single_img"  style="width:18rem;" src="<?php echo base_url();?>assets/upload/product/<?php echo $myimages->img_path ?>" alt=""></a> -->
             
			                <li> <img class="oil_painting" src="<?php echo base_url();?>assets/upload/product/<?php echo $images->img_path ?>" alt="" title=""> </li>
                <?php } 
           ?>
						</ul>
					</div>
				</article>
			</div>
			<!-- <div class="blog-section">
				<article class="blog-entry">
					<div class="entry-thumb">
						<ul class="blog-slider">
							<li> <img src="<?php echo base_url(); ?>assets/images/blog-images/blog-img9.jpg" alt="" title=""> </li>
							<li> <img src="<?php echo base_url(); ?>assets/images/blog-images/blog-img10.jpg" alt="" title=""> </li>
							<li> <img src="<?php echo base_url(); ?>assets/images/blog-images/blog-img11.jpg" alt="" title=""> </li>
							<li> <img src="<?php echo base_url(); ?>assets/images/blog-images/blog-img12.jpg" alt="" title=""> </li>
						</ul>
					</div>
					<div class="entry-details">
						<div class="entry-title">
							<h3><a href="blog-detail-with-lhs.html">Oil painting</a></h3>
						</div>
						<div class="entry-body">
							<p><b>Oil painting</b>, technique in which pigments are mixed with hot, liquid wax. After all of the colours have been applied to the painting surface, a heating element is passed over them until the individual brush or spatula marks fuse into a uniform film. </p>
						</div>
						<a class="type1 dt-sc-button small" href="">View Gallery<i class="fa fa-angle-right"></i></a>
					</div>
				</article>
			</div> -->
			<!-- <div class="blog-section">
				<article class="blog-entry type2">
					<div class="entry-details">
						<div class="entry-title">
							<h3><a href="blog-detail-with-rhs.html">Impasto</a></h3>
						</div>
						<div class="entry-body">
							<p><b>Impasto painting</b>, technique in which pigments are mixed with hot, liquid wax. After all of the colours have been applied to the painting surface, a heating element is passed over them until the individual brush or spatula marks fuse into a uniform film. </p>
						</div>
						<a class="type1 dt-sc-button small" href="">View Gallery<i class="fa fa-angle-right"></i></a>
					</div>
					<div class="entry-thumb">
						<ul class="blog-slider">
							<li> <img src="<?php echo base_url(); ?>assets/images/blog-images/blog-img13.jpg" alt="" title=""> </li>
							<li> <img src="<?php echo base_url(); ?>assets/images/blog-images/blog-img14.jpg" alt="" title=""> </li>
							<li> <img src="<?php echo base_url(); ?>assets/images/blog-images/blog-img15.jpg" alt="" title=""> </li>
							<li> <img src="<?php echo base_url(); ?>assets/images/blog-images/blog-img16.jpg" alt="" title=""> </li>
						</ul>
					</div>
				</article>
			</div> -->
		</div>
		<div class="clear"></div>

		<div class="dt-sc-hr-invisible-small"></div>
		<div class="clear"></div>
		<div class="fullwidth-section">
			<div class="">
				<div class="main-title mt-4 animate" data-animation="pullDown" data-delay="100">
					<h2 class="aligncenter"> About Me </h2>
					<p> Heart of Perfect Customer Service </p>
				</div>
				<div class="about-section">
					<div class="dt-sc-one-half column first">
						<img class="aboutme"  src="<?php echo base_url(); ?>assets/images/aboutme.jpeg" title="" alt="">
					</div>
					<div class="dt-sc-one-half column p-4">
						<h3 class="animate" data-animation="fadeInLeft" data-delay="200"> A Little Intro</h3>
						<p>I am from Indore Madhya Pradesh and living with my husband and a lovely daughter. I had opted fashion designing as an opportunity to build my career. I graduated from INIFD, Indore. Due to this course, I have been able to develop a lot of interest in my sketching. I have been able to excel at various levels that are best suited to my career and contribute to my best way possible.</p>
						<h3 class="animate" data-animation="fadeInLeft" data-delay="300">My Exhibitions</h3>
						<p><span class="bullets">•</span> I work as a freelance designer for an aviation academy. </br>

						<span class="bullets">•</span> Designed various clothes for kids up to 3-10 range. <br>

						<span class="bullets">•</span> Taking online art classes from 2020 involving kids above 5 years to 18 years( It was a very good experience for me and various kids from India, USA, UK and Singapore participated) <br>

						<span class="bullets">•</span> I completed a one month workshop at the Minneapolis art center on oil painting. </br>
						<span class="bullets">•</span> I am working as an art teacher in an international school.</p> 

						<div id="ajax_subscribe_msg"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="dt-sc-hr-invisible-small"></div>
	</section>