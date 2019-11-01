
	<?php get_header(); ?>
  	<!-- Banner Home -->
  	<div class="container my-5 carousel-contenedor">
		<?php //include('single-slider_for_banner.php') ?>
  	</div>
		<!-- Fin Banner Home -->
  	<!-- Contenido -->
		<div class="container my-5">
			<div class="row">
				<!-- Articulo -->
				<?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
				<div class="col-12 col-sm-6 col-md-4 mb-3">
					<div class="card"> 
						<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
					    the_post_thumbnail('thumbnail', array( 'class' => 'card-img-top img-fluid' ));
						} ?></a>
					  <div class="card-body">
					    <a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
					    <p class="card-text"><?php the_excerpt(); ?></p>
					    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
					  </div>
					  <div class="card-footer">
					  	<small class="text-muted"><?php echo get_the_date(); ?> / <?php the_category(', '); ?> / <?php the_author(); ?></small>
					  </div>
					</div>
				</div>
			<?php endwhile; endif; ?>
				<!-- Fin Articulo -->
			</div>
		</div>
  	<!-- Fin Contenido -->
  	<?php //get_footer(); ?>
