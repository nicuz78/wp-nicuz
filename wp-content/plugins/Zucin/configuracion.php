<?php
if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.'));
?>
	<div class="wrap">
		<h2><?php _e( 'Raiola', 'raiola' ) ?></h2>
		<form>
			<input type="text" name="Titulo 1" placeholder="Primer Titulo">
			
		</form>
	</div>
<?php
 ?>