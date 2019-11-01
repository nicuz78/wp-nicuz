<!-- incluido desde el index.php -->
<?php 
  $args = array(
   'post_type' => 'slider_for_banner',
   'posts_per_page' => '10'
  );

  $the_query = new WP_Query( $args );
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <?php 
        $link = get_post_custom();
        if (isset($link['_link_slider'])) {
          //aca deberia ir algo
          $my_custom_field = $link['_link_slider'];
        }
      ?>
      <a href="<?php echo $link['_link_slider'][0]; ?> " class="carousel-item">
        <div class="content-slider">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('full', array( 'class' => 'd-block w-100' ));
            } ?>
          <div class="texto-banner-home">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt();?></p>
          </div>

        </div>
      </a>
    <?php endwhile; endif; ?>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<script type="text/javascript">
  activadorDeBanner();
</script>
