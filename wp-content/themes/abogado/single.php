<?php get_header(); ?>

  	<div class="container my-5 pt-5 single-post">
		<div class="row">
			<!-- articulo -->
			<div class="col-12 col-md-9">
				<?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
					<div class="img-contenedor-post">
						<?php if ( has_post_thumbnail() ) {
						    the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid' ));
							} ?>
					</div>
					<div class="texto-contenedor-post bg-base">
						<h2 class="my-3"><?php the_title(); ?></h2>
						<p class="lead"><?php echo get_the_date(); ?> </p>
						<div class="text-justify">
							<?php the_excerpt(); ?>
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<!-- fin articulo -->
			<!-- aside -->
			<div class="col-12 col-md-3">
				<?php get_sidebar(); ?>
			</div>
			<!-- fin aside -->
		</div>
  	</div>

  <?php get_footer( ); ?>