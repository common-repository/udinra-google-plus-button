<?php


function Udinra_Google_function( $Udinra_Google_atts ) {

    $Udinra_Google_parameters = shortcode_atts( array(
									'size' => 'standard',
									'annotation' => 'none',
									'like' => '',									
									'header' => '',
									'body' => '',
									'style' => 'UdinraGoogleAqua'
									), $Udinra_Google_atts );


		$create_google_html = '<div class="' . $Udinra_Google_parameters["style"] . '">';
		if($Udinra_Google_parameters["header"] != '' || !ctype_space($Udinra_Google_parameters["header"])) {
			$create_google_html .= '<h3>' . $Udinra_Google_parameters["header"] . '</h3><hr />';
		}	
		if($Udinra_Google_parameters["body"] != '' || !ctype_space($Udinra_Google_parameters["body"])) {
			$create_google_html .= '<p>' . $Udinra_Google_parameters["body"] . '</p>';
		}										

		$create_google_button = $create_google_html . '<div class="g-plusone" data-callback="logDownload" ';

		if($Udinra_Google_parameters["size"] != 'standard'){
			$create_google_button = $create_google_button . 'data-size="' . $Udinra_Google_parameters["size"] . '" ' ;
		}
		if($Udinra_Google_parameters["annotation"] != 'bubble'){
			$create_google_button = $create_google_button . 'data-annotation="' . $Udinra_Google_parameters["annotation"]  . '" ' ;
		}
		if($Udinra_Google_parameters["like"] != '' || !ctype_space($Udinra_Google_parameters["like"])) {
			$create_google_button = $create_google_button . 'data-href="' . $Udinra_Google_parameters["like"]  . '" ' ;
		}

		$create_google_button = $create_google_button . '></div>';
		$create_google_button = $create_google_button . '</div>';
		
		$return_shortcode_value = $create_google_button;
		Udinra_Google_script();
		Udinra_Google_css();
		return $return_shortcode_value;
}

function Udinra_Google_script() {
	wp_enqueue_script( 'udinra-google-js', 'https://apis.google.com/js/platform.js',NULL,NULL, false );
}

function Udinra_Google_css() {
		wp_enqueue_style( 'udinra-google-css', plugins_url( 'css/color.css',dirname( __FILE__ )) );
}
	
add_shortcode( 'Udinra_Google', 'Udinra_Google_function' );

?>