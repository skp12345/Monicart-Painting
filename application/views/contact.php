<div id="main">
	<div class="breadcrumb">
		<div class="container">
		</div>
	</div>
</div>
<section id="primary" class="content-full-width">
	<div class="fullwidth-section">
		<div class="container">
			<div class="main-title mt-4" data-animation="pullDown" data-delay="100">
				<h3> Contact </h3>
				<p style="color: white;"></p>Heart of Perfect Customer Service</p>
			</div>
		</div>
		<div class="contact-section">
			<div id="contact_map" class="animate" data-animation="fadeInRight" data-delay="100">
				<img style="height:60vh;width:100%" src="<?php echo base_url(); ?>assets/images/contact_info.jpeg" alt="" title="">
			</div>
			<div class="dt-sc-contact-info animate" data-animation="fadeInLeft" data-delay="100">
				<h3 style="color:#2c4964">Artist Info</h3>
				<div class="dt-sc-contact-details"><span class="fa fa-map-marker icon"></span> Address: Bengaluru, Karnataka</div>
				<div class="dt-sc-contact-details"><span class="fa fa-tablet icon"></span> Phone: +91-9148450294 </div>
				<!-- <div class="dt-sc-contact-details"><span class="fa fa-paperclip"></span> Fax: 080-35538080 </div> -->
				<div class="dt-sc-contact-details"><span class="fa fa-envelope icon"></span> Email: <span class="__cf_email__" style="color:#2c4964" data-cfemail="344d5b41465a55595174475b595159555d581a575b59">monica.inifd@gmail.com</span> </div>
				<!-- <div class="dt-sc-contact-details"><span class="fa fa-globe"></span> Web: <a href="https://ficuslot.com/">https://ficuslot.com/</a> </div> -->
				<ul class="type3 dt-sc-social-icons">
					<!-- <li class="twitter"><a href="#"> <i class="fa fa-twitter"></i> </a></li> -->
					<li class="facebook"><a href="#"> <i class="fa fa-facebook"></i> </a></li>
					<!-- <li class="google"><a href="#"> <i class="fa fa-google"></i> </a></li> -->
					<li class="dribbble"><a style="background: green;" href="https://wa.me/9148450294?text="> <i style="background: green;" class="fa fa-whatsapp"></i> </a></li>
					<!-- <li class="pinterest"><a href="#"> <i class="fa fa-pinterest"></i> </a></li> -->
					<li class="linkedin"><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
					<li class="flickr"><a href="https://instagram.com/monicamalviya1?igshid=ZDdkNTZiNTM="> <i class="fa-brands my-auto fa-instagram"></i> </a></li>
					<!-- <li class="tumblr"><a href="#"> <i class="fa fa-tumblr"></i> </a></li> -->
				</ul>
			</div>
		</div>
		<div class="dt-sc-hr-invisible-toosmall"></div>
		<div class="container">
			<div class="dt-sc-three-fourth column first animate" data-animation="fadeInDown" data-delay="100">
				<h3 class="sms">Get in Touch</h3>
				<form class="enquiry-form" action="<?php base_url()?>sms" method="post" novalidate="novalidate" name="enqform">
					<div class="column dt-sc-one-third first">
						<p class="input-text">
							<input class="input-field" type="text" onclick="user('user_name')" value="<?php if(isset($_POST['name'])) echo $_POST['name']?>" required="" name="name" title="Enter your Name" placeholder="Name *" required/>
						</p>
						<div style="color:red" id="user_name" class="form-group">
                         <?php echo form_error('name')	;?>
                         </div>
					</div>
					<div class="column dt-sc-one-third">
						<p class="input-text">
							<input class="input-field" type="email" onclick="user('user_email')" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>" required="" autocomplete="off" name="email" title="Enter your valid id" placeholder="Email *" required/>
						</p>
						<div style="color:red" id="user_email" class="form-group">
                         <?php echo form_error('email')	;?>
                         </div>
					</div>
					<div class="column dt-sc-one-third">
						<p class="input-text">
							<input class="input-field" type="text" onclick="user('user_phone')" autocomplete="off" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']?>" name="phone" placeholder="Contact Number *" required/>
						</p>
						<div style="color:red" id="user_phone" class="form-group">
                         <?php echo form_error('phone')	;?>
                         </div>
					</div>
					<p class="input-text">
						<textarea class="input-field" required="" onclick="user('user_message')" rows="3" cols="5" value="<?php if(isset($_POST['message'])) echo $_POST['message']?>" name="message" title="Enter your Message" placeholder="Message *" required></textarea>
					</p>
					<div style="color:red" id="user_message" class="form-group">
                         <?php echo form_error('message')	;?>
                         </div>
					<p class="submit"> <input type="submit" value="Send"  name="submit" class="button" /> </p>
				</form>
				<div id="ajax_contactform_msg"></div>
			</div>


			<div class="dt-sc-one-fourth column animate" data-animation="fadeInRight" data-delay="100">
				<h5 class="sms">Bengaluru Office</h5>
				<div class="enquiry-details">
					<p> <i class="fa fa-cab icon"></i>Bengaluru, Karnataka</p>
					<p> <i class="fa fa-phone icon"></i> +91-9148450294 </p>
					<p> <i class="fa fa-globe icon"></i> <a href="<?php base_url();?>"> monicart.in </a> </p>
					<p> <i class="fa fa-envelope icon"></i> <span class="__cf_email__" style="color:#2c4964" data-cfemail="344d5b41465a55595174475b595159555d581a575b59">monica.inifd@gmail.com</span> </p>
				</div>
				
			</div>

</section>


<script>
	 function user(str){
   let val=document.getElementById(str);
   val.innerHTML="";
  }
</script>

