<?php
/*
Plugin Name: Udinra Google Plus button
Plugin URI: https://udinra.com/downloads/google-plus-to-download-pro
Description: Cool stylish Google plus button to increase visitor engagement.
Author: Udinra
Version: 1.0
Author URI: https://udinra.com
*/

function Udinra_Google() {
	$Udinra_Google_subscribe = '';

?>	
	<div class="wrap">
	<u><h1>Udinra Google Plus(Configuration)</h1></u><br /><br />
	<ul>
		<li>A new button is added in Visual Editor.</li>
		<li>You can create unlimited buttons using Visual Editor button.</li>
		<li>Also you can paste generated shortcode in Text Widget to have the buttons in sidebar.</li>
		<li>In case of any issues mail me at esha@udinra.com.</li>
	</ul>
	<a href="https://udinra.com/downloads/google-plus-download-wordpress-plugin"><u><b>Buy Google Plus to download Pro</b></u></a><br /><br />
	Visitors will be able to download file instantly if they like your Facebook page or like your content on Facebook.<br />
	You can configure each and every button as per your requirement.<br />
	<iframe width="560" height="315" src="https://www.youtube.com/embed/oEDdErqDZ3M" frameborder="0" allowfullscreen></iframe>
	
</div>

<?php
}

function Udinra_Google_subscribe_admin() {
	if (function_exists('add_options_page')) {
		add_options_page('Udinra Google Plus', 'Udinra Google Plus', 'manage_options', basename(__FILE__), 'Udinra_Google');
	}
	Udinra_Google_button();
}

function Udinra_Google_admin_notice() {
		global $current_user ;
		$user_id = $current_user->ID;
		if ( ! get_user_meta($user_id, 'Udinra_Google_admin_notice') ) {
			echo '<div class="notice notice-info"><p>'; 
			printf(__('Buy Udinra Google Plus to download Pro for $6.99 only.PayPal - udinesvi@gmail.com | <a href="%1$s">Hide Notice</a>'), '?Udinra_Google_admin_ignore=0');
			echo "</p></div>";
		}
}

function Udinra_Google_admin_ignore() {
	global $current_user;
	$user_id = $current_user->ID;
	if ( isset($_GET['Udinra_Google_admin_ignore']) && '0' == $_GET['Udinra_Google_admin_ignore'] ) {
		add_user_meta($user_id, 'Udinra_Google_admin_notice', 'true', true);
	}
}

include 'init/udinra-init-google.php';
include 'lib/udinra-google-visual-editor.php';

add_action('admin_menu','Udinra_Google_subscribe_admin');	
add_action('admin_notices', 'Udinra_Google_admin_notice');
add_action('admin_init', 'Udinra_Google_admin_ignore');

?>
