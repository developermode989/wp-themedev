<!-- for direct call images and text form directly -->
<!-- <?php echo get_template_directory_uri();?>/ -->

<?php get_header() ?>

  <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4">Blogss</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page">Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->



        <!-- Blog Start-->
        <div class="container-fluid blog py-5">
			
        <div class="container py-5">
           <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
           <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Latest News & Blog</h4>
           <h1 class="mb-5 display-3">Read Our Latest News & Blog</h1></div>
				
				 <!-- start -->
                <div class="row g-5 justify-content-center">
					
             <!-- for all blog showing here using below code -->
					
					
					<?php 
                         while (have_posts()) {
                             the_post();
                             $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
					?>
					
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
						
                        <div class="blog-item rounded-bottom">
                            <div class="blog-img overflow-hidden position-relative img-border-radius">	
							<img src="<?php echo esc_url($imagepath[0]); ?>" alt="<?php the_title_attribute(); ?>">
                            </div>
							
         <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments">
                           <small class="text-dark"><i class="fas fa-calendar me-1 text-dark"></i> 29 Nov 2023</small>
                         <small class="text-dark"><i class="fas fa-comment-alt me-1 text-dark"></i> Comments (15)</small>
                            </div>
							
                            <div class="blog-content d-flex align-items-center px-4 py-3 bg-light">
                                <div class="overflow-hidden rounded-circle rounded-top border border-primary">
                                 <img src="img/program-teacher.jpg" class="img-fluid rounded-circle p-2 rounded-top" alt="Image" style="width: 70px; height: 70px; border-style: dotted; border-color: var(--bs-primary) !important;">
                                </div>
								
                                <div class="ms-3">
                                    <h6 class="text-primary">Mary Mordern</h6>
                                    <p class="text-muted">Baby Care</p>
                                </div>
								
                            </div>
                            <div class="px-4 pb-4 bg-light rounded-bottom">
                                <div class="blog-text-inner">
                                    <a href="#" class="h4"><?php the_title(); ?></a>
                                    <p class="mt-3 mb-4"><?php the_excerpt(); ?></p>
                               </div>
								
                          <div class="text-center">
                          <a href="<?php the_permalink(); ?>" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">View Details</a>
                          </div>
								
						 </div>
                        </div>
                    </div>
					
	<?php } ?> 
	<?php  echo wp_pagenavi();?>
	
					
					
                </div>
            </div>
        </div>
        <!-- Blog End-->

        

 <?php get_footer() ?>
