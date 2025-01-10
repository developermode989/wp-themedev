<?php get_header();
	the_post();
?>


  <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4"><?php wp_title(); ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white" aria-current="page"><?php wp_title(); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="container-fluid blog py-5">
			
           <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
					
			   <h1><?php the_title(); ?></h1>
					
					<?php 
                        $imagepath = wp_get_attachment_image_src( get_post_thumbnail_id(),  'large'); ?>
					
					<img src="<?php echo $imagepath[0] ?>"width="100%"/>
			        <div><?php echo the_author(); ?></div>
			        <div><h4><?php echo get_the_date(); ?></h4></div>
                    <div><?php the_content(); ?></div>
			         <div><?php comments_template(); ?></div>
 
            </div> </div>


 <?php get_footer(); ?>
