<?php
/**
 * Template Name: Left Sidebar
 *
 */
get_header(); ?>
    
    <?php if ( ! is_front_page() ) : ?>
    
        <?php if ( function_exists( 'bcn_display' ) ) : ?>
        <div class="breadcrumbs">
            <?php bcn_display(); ?>
        </div>
        <?php endif; ?>
        
    <?php endif; ?>

    <?php get_sidebar(); ?>
    
	<div id="primary" class="content-area <?php echo !is_active_sidebar( 'sidebar-1' ) ? 'full-width' : ''; ?>">
		<main id="main" class="site-main" role="main">
			
			<div class="row-fluid">
				<?php
					global $post;
					$args = array( 'posts_per_page' => 3, 'category' => 'Front_page' );

					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<div class="span4">
							<?php get_template_part( 'library/template-parts/content', 'page' ); ?>
						</div>
					<?php endforeach; 

				wp_reset_postdata();?>
			</div>

			

		</main><!-- #main ??? -->
	</div><!-- #primary -->

<?php get_footer(); ?>
