<?php
/**
 * The Template for displaying all single posts.
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">

<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					//get_template_part( 'content', get_post_format() );
					//Movie Description
					echo types_render_field("description", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));
					
					//Movie Ratings
					echo types_render_field("ratings", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));
						
					//Movie Image
                   echo types_render_field("image", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));
 

	

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>

	<div class="container">
		<div class="content-left-wrap col-md-9">
			<div id="primary" class="content-area">
				<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); 
						
						 get_template_part( 'content', 'single' );
						 
						 zerif_post_nav(); 
					 
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template('');
						endif;
					endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="sidebar-wrap col-md-3 content-left-wrap">
			<?php get_sidebar(); ?>
		</div><!-- .sidebar-wrap -->
	</div><!-- .container -->
<?php get_footer(); ?>