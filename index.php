<?php
/**
Template Name: Homepage
 */
get_header(); 

?>
	<div id="myCarousel" class="carousel slide">
	  <!-- Carousel items -->
	  <div class="carousel-inner">
	  <?php $j=0; query_posts('category_name=slider'); ?>
		<?php while (have_posts()) : the_post(); 
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
		<?php if ($j==0) 
			{
			echo '<div class="active item"><img src="'. $url .'" /></div>';
			}
			else
			{
			echo '<div class="item"><img src="'. $url .'" /></div>';
			}
		?>
		<?php $j++ ?>
		<?php endwhile;?>
	  <?php wp_reset_query(); ?>
	  </div>
	  <!-- Carousel nav -->
	  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

	</div>
    <article class="container">
      <!-- Featured Contente Start -->
	  
	  <div class="row">
	  <?php query_posts('category_name='. get_option('dt_fcat') .'&posts_per_page='. get_option('dt_fcatnum') .''); ?>
	  <?php while (have_posts()) : the_post(); ?>
			<div class="span4 featured">
				<?php if ( get_post_meta( get_the_ID(), 'fontawesome_icon_class', true ) ) : ?>
				<div class="flatshadow shapewrap">
						<i class="<?php echo get_post_meta( get_the_ID(), 'fontawesome_icon_class', true ) ?>"></i>
				</div>
				<?php endif; ?>

				<h2><?php echo the_title(); ?></h2>
				<div class="featured-par">
					<?php the_excerpt(); ?>
				</div>
				<a class="push-button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">View details &raquo;</a>
			</div>
	  <?php endwhile;?>
	  <?php wp_reset_query(); ?>
	  </div>

      <hr>
	  
	  <!-- Featured Portfolio Start -->
	  <div class="row">
		<?php query_posts('category_name='. get_option('dt_fcat2') .'&posts_per_page='. get_option('dt_fcatnum2') .''); ?>
		
		  <?php while (have_posts()) : the_post(); ?>
			<?php
				$args = array('post_type' => 'attachment', 'post_parent' => $post->ID,  'orderby' => menu_order, 'order' => ASC); 
				$attachments = get_children($args); 							

				foreach ($attachments as $attachment) { 
					$full_url = wp_get_attachment_url($attachment->ID);
					$image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
					$full = wp_get_attachment_image_src($attachment->ID, 'full');
					$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
					$image_title = $attachment->post_title;
			?>
				<div class="span4 portfolio-img">
					<a href="<?php echo $full_url;?>" data-rel="prettyPhoto" rel="prettyPhoto">
						<img src="<?php echo $full_url; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
					</a>
				</div>
			<?php } ?>
		  <?php endwhile;?>
		  <?php wp_reset_query(); ?>
	  </div>

      <hr>

    </article> <!-- /article -->
<?php get_footer(); ?>