<?php
/*
Plugin Name: Zucin
Description: Plugins generales para mi web
Version: 0.1
Author: Nicuz
*/
defined('ABSPATH') or die("Bye bye");

define('ZUCIN_RUTA',plugin_dir_path(__FILE__));

/*
function activacion_del_plugin()
{
	add_option('mi_opcion',255,'yes');
}
register_activation_hook( __FILE__, 'activacion_del_plugin' );
*/


//Agrega el menu banners y slider para editor


// Crea un tipo de post para los sliders
function sliderPostType()
{
	$args = array(
		'label'                 => __( 'Sliders', 'NicuzTheme' ),
		'description'           => __( 'Crea Sliders para el Banner', 'NicuzTheme' ),
		'supports'              => array( 'title', 'thumbnail', 'excerpt', 'page-attributes' ),
		'public'                => true,
		'menu_position'         => 5,
		'has_archive'           => true,
		'rewrite'               =>  array('slug' => 'sliders'),
		'menu_icon'				=> 'dashicons-palmtree',
	 );
	
	register_post_type( 'slider_for_banner', $args );
}
add_action( 'init', 'sliderPostType' );


									/*  ESTO ES PARA EL LINK DEL SLIDER  */

//Agrega box al post Sliders para ingresar links
function addBoxForLinksSlider()
{
	add_meta_box( 'links_for_banner', 'Link', 'outForLinksSlider', 'slider_for_banner', $context = 'normal', $priority = 'low');
}
add_action( 'add_meta_boxes', 'addBoxForLinksSlider' );

//Esto es lo q se muestra en el editor de wordpress
function outForLinksSlider($post)
{
	$link_slider = get_post_meta($post->ID, '_link_slider', true);
	wp_nonce_field( 'graba_link_slider', 'link_slider_wpnonce' );

	echo ('<div style="position: relative;">');
	echo ('<label for="link_slider">' .__('Link  ', 'text_domain').'</label>');
	echo ('<input style="width: 80%;" type="text" name="link_slider" id="link_slider" value="'.esc_attr($link_slider).'">');
	echo ('<button type="button" onclick="zucin_ShowMenuLinks();">...</button>');
		echo ('<div id="zucin-menu-links" style="display: none; position: relative; background: #23282d; top: 20px; padding: 30px 35px; max-height: 150px; overflow-y:scroll; margin-bottom:40px;">
		<ul style="margin:0;">');
	zucin_loop_wp();
	echo ('</ul>
		</div>');
	echo (' </div>');

echo ('<script type="text/javascript">
	function zucin_ShowMenuLinks()
	{
		$("#zucin-menu-links").slideToggle(500);
	}

	function zucin_CambiarLink(e)
	{
		$("#link_slider").val(e);
		zucin_ShowMenuLinks();
	}
</script>');

}

//esto va a devolver todos los post de entrada que estan cargados en una lista.
function zucin_loop_wp()
{
	$args = array(
		'post_type' => 'post'
	);

	$the_query = new WP_Query( $args );

    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
	echo ('<a href="#" onclick="zucin_CambiarLink(this.id);');
	echo ('" id="');
	echo (the_permalink());
	echo ('"><li>');
	echo (the_title());
	echo ('</li></a>');
	endwhile; endif;
}

//Esto guarda los campos del formulario
function saveForLinksSlider($post_id)
{
	//comprueba que el nonce es el correcto para evitar ataques
	if (!isset($_POST['link_slider_wpnonce']) || !wp_verify_nonce( $_POST['link_slider_wpnonce'], 'graba_link_slider' ) ) {
		return $post_id;
	}
	// Comprueba que el tipo de post es el del slider
	if ('slider_for_banner' != $_POST['post_type']) {
		return $post_id;
	}
	//comprueba que el usuario actual tiene permiso para editar este post
	if (!current_user_can( 'edit_post', $post_id )) {
		return $post_id;
	}

	// Ahora hay que grabar los datos
	// Hay que agregar el _ a la variable para que se guarden como campos de meta
	$link_slider = sanitize_text_field( $_POST['link_slider'] );
	update_post_meta( $post_id, '_link_slider', $link_slider );
	return true;
}

add_action ('save_post', 'saveForLinksSlider');
// Crea un shortcode
/*
function shortcode_links_banner() {
return '<p>www.google.com</p>';
}
add_shortcode('linkBanner', 'shortcode_links_banner');
*/

									/*  ESTO ES PARA EL ORDEN DE LOS SLIDERS  */

//Agrega box al post Sliders para seleccionar el orden
function addBoxForOrderSliders() {
	add_meta_box( 'order_for_banner', 'Order', 'outForOrderSliders', 'slider_for_banner', $context = 'normal', $priority = 'low');
}

add_action( 'add_meta_boxes', 'addBoxForOrderSliders' );

//Esto es lo q se muestra en el editor de wordpress
function outForOrderSliders($post)
{
	$order_slider = get_post_meta($post->ID, '_order_slider', true);
	wp_nonce_field( 'graba_order_slider', 'order_slider_wpnonce' );

	echo ('<div style="position: relative;">');
		echo ('<label for="order_slider">' .__('Link  ', 'text_domain').'</label>');
		echo ('<select style="width: 80%;" name="order_slider" id="order_slider">');
		echo ('<option value="1">'. esc_attr($order_slider).'</option>  <option value="2">'.the_title().'</option>  </select>');
	echo (' </div>');
}

//Esto guarda los campos del formulario del orden
function saveForOrderSliders($post_id)
{
	//comprueba que el nonce es el correcto para evitar ataques
	if (!isset($_POST['order_slider_wpnonce']) || !wp_verify_nonce( $_POST['order_slider_wpnonce'], 'graba_order_slider' ) ) {
		return $post_id;
	}
	// Comprueba que el tipo de post es el del slider
	if ('slider_for_banner' != $_POST['post_type']) {
		return $post_id;
	}
	//comprueba que el usuario actual tiene permiso para editar este post
	if (!current_user_can( 'edit_post', $post_id )) {
		return $post_id;
	}

	// Ahora hay que grabar los datos
	// Hay que agregar el _ a la variable para que se guarden como campos de meta
	$order_slider = sanitize_text_field( $_POST['order_slider'] );
	update_post_meta( $post_id, '_order_slider', $order_slider );
	return true;
}

add_action ('save_post', 'saveForOrderSliders');

?>
