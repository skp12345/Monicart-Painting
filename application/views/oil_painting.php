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
                <h3>Gallery</h3>
                <p>The best paintings inside</p>
            </div>
        </div>
        <!-- <div class="dt-sc-sorting-container">
<a data-filter="*" href="#" title="09" class="dt-sc-tooltip-top active-sort type1 dt-sc-button">All</a>
<a data-filter=".nature" href="#" title="06" class="dt-sc-tooltip-top type1 dt-sc-button">Nature</a>
 <a data-filter=".people" href="#" title="06" class="dt-sc-tooltip-top type1 dt-sc-button">People</a>
<a data-filter=".street" href="#" title="05" class="dt-sc-tooltip-top type1 dt-sc-button">Street</a>
<a data-filter=".still-life" href="#" title="08" class="dt-sc-tooltip-top type1 dt-sc-button">Still life</a>
</div> -->


        <div class="portfolio-fullwidth">
            <div class="portfolio-grid">
                <div class="dt-sc-portfolio-container isotope">

                <?php
            $id = 26;
            $this->db->where('img_category_id', $id);
            $query=$this->db->get('images');
           foreach ($query->result() as $images) 
           { ?>
       
       <div class="portfolio nature still-life dt-sc-one-fourth">
                        <figure>
                            <img src="<?php echo base_url();?>/assets/upload/product/<?php echo $images->img_path ;?>" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=<?php echo $images->img_id  ;?>"></a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url();?>/assets/upload/product/<?php echo $images->img_path ;?>"><?php echo $images->title;?></a></h5>
                                        <!-- <p>Sample text here looks good</p> -->
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
            <?php 
            } 
           ?>

                    <!-- <div class="portfolio nature still-life dt-sc-one-fourth">
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/img2.jpeg" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=assets/images/img2.jpeg"></a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url() ?>single?url=assets/images/img2.jpeg">Lorem, ipsum.</a></h5>
                                        <p>Sample text here looks good</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div> -->
                    <!-- <div class="portfolio nature still-life dt-sc-one-fourth">
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/img3.jpeg" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=assets/images/img3.jpeg"></a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url() ?>single?url=assets/images/img3.jpeg">Lorem, ipsum.</a></h5>
                                        <p>Sample text here looks good</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div> -->
                    <!-- <div class="portfolio nature still-life dt-sc-one-fourth">
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/img4.jpeg" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=assets/images/img4.jpeg"></a>

                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url() ?>single?url=assets/images/img4.jpeg">Lorem, ipsum.</a></h5>
                                        <p>Sample text here looks good</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div> -->
                    <!-- <div class="portfolio nature still-life dt-sc-one-fourth">
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/img5.jpeg" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=assets/images/img5.jpeg"></a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url() ?>single?url=assets/images/img5.jpeg">Lorem, ipsum.</a></h5>
                                        <p>Sample text here looks good</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div> -->
                    <!-- <div class="portfolio nature still-life dt-sc-one-fourth">
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/img6.jpeg" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=assets/images/img6.jpeg"></a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url() ?>single?url=assets/images/img6.jpeg">Lorem, ipsum.</a></h5>
                                        <p>Sample text here looks good</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div> -->
                    <!-- <div class="portfolio nature still-life dt-sc-one-fourth">
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/img7.jpeg" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=assets/images/img7.jpeg"></a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url() ?>single?url=assets/images/img7.jpeg">Dream Big And Achive It</a></h5>
                                        <p>Sample text here looks good</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div> -->
                    <!-- <div class="portfolio nature still-life dt-sc-one-fourth">
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/img8.jpeg" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=assets/images/img8.jpeg"></a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url() ?>single?url=assets/images/img8.jpeg">Lorem, ipsum.</a></h5>
                                        <p>Sample text here looks good</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div> -->
                    <!-- <div class="portfolio nature still-life dt-sc-one-fourth">
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/img9.jpeg" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=assets/images/img9.jpeg"></a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url() ?>single?url=assets/images/img9.jpeg">Lorem, ipsum.</a></h5>
                                        <p>Sample text here looks good</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/img10.jpeg" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=assets/images/img10.jpeg"></a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url() ?>single?url=assets/images/img10.jpeg">Lorem, ipsum.</a></h5>
                                        <p>Sample text here looks good</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/img11.jpeg" alt="" title="">
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a style="font-size:5rem" class="fa fa-camera-retro" href="<?php echo base_url() ?>single?url=assets/images/img11.jpeg"></a>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a href="<?php echo base_url() ?>single?url=assets/images/img11.jpeg">Lorem, ipsum.</a></h5>
                                        <p>Sample text here looks good</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</section>