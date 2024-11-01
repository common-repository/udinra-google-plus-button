<?php
function Udinra_Google_button() {
	$Udinra_Google_cap = apply_filters( 'Udinra_Google_button_cap', 'edit_posts' );
	if ( current_user_can( $Udinra_Google_cap ) ) {
		add_filter( 'mce_external_plugins', 'Udinra_Google_subscribe_plugin' );
		add_filter( 'mce_buttons', 'Udinra_Google_register_button' );
	}
}
function Udinra_Google_subscribe_plugin( $plugin_array ) {
	$plugin_array['Udinra_Google_subscribe'] = plugins_url( 'js/udinra_google_button.js',dirname( __FILE__ ));
	return $plugin_array;
}
function Udinra_Google_register_button( $buttons ) {
	array_push( $buttons, "Udinra_Google_subscribe" );
	return $buttons;
}
?>