<?php
if( get_theme_mod( 'callnow_endis', '1' ) == '1' ) {
	?>
	<a class="callnowfooter" href="<?php echo esc_attr( get_theme_mod( 'callnow_link', 'tel:0123456789' ) ); ?>"><?php echo esc_html( get_theme_mod( 'callnow_text', __( 'Call Now', 'food-business' ) ) ); ?></a>
	<?php
}

