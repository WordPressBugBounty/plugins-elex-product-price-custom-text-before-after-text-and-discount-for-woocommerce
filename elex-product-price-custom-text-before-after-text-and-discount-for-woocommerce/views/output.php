System Info!!

Multisite:                <?php echo esc_html_e( is_multisite() ) ? 'Yes' . "\n" : 'No' . "\n"; ?>

SITE_URL:                 <?php echo esc_url( get_site_url() ) . "\n"; ?>
HOME_URL:                 <?php echo esc_url( get_home_url() ) . "\n"; ?>

WordPress Version:        <?php echo esc_attr( get_bloginfo( 'version' ) ) . "\n"; ?>
Permalink Structure:      <?php echo esc_attr( get_option( 'permalink_structure' ) ) . "\n"; ?>
Active Theme:             <?php echo esc_html_e( $theme ) . "\n"; ?>
<?php if ( $host ) : ?>
Host:                     <?php echo esc_html_e( $host ) . "\n"; ?>
<?php endif; ?>

Registered Post Stati:    <?php echo esc_html_e( implode( ', ', get_post_stati() ) . "\n\n" ); ?>
<?php 
if ( isset( $_REQUEST['_wpnonce'] ) && ! wp_verify_nonce( sanitize_text_field( $_REQUEST['_wpnonce'] ) ) ) {
	return;
	
}
if ( isset( $_GET['system_info'] ) ) {

	echo '// Browser of Current Viewer //';
	echo "\r\n\r\n";
} 
?>
<?php echo esc_html_e( $browser ); ?>
<?php 
if ( isset( $_GET['system_info'] ) ) {
	echo "\r\n";
	echo '// End Browser of Current Viewer //';
	echo "\r\n\r\n";
} 
?>

PHP Version:              <?php echo PHP_VERSION . "\n"; ?>
Web Server Info:          <?php echo esc_html_e( ! empty( $_SERVER['SERVER_SOFTWARE'] ) ? sanitize_text_field( $_SERVER['SERVER_SOFTWARE'] ) : '' ) . "\n"; ?>

WordPress Memory Limit:   <?php echo esc_html_e( self::let_to_num( WP_MEMORY_LIMIT ) / ( 1024 ) ) . 'MB'; ?><?php echo "\n"; ?>
PHP Memory Limit:         <?php echo esc_html_e( ini_get( 'memory_limit' ) . "\n" ); ?>
PHP Upload Max Size:      <?php echo esc_html_e( ini_get( 'upload_max_filesize' ) . "\n" ); ?>
PHP Post Max Size:        <?php echo esc_html_e( ini_get( 'post_max_size' ) . "\n" ); ?>
PHP Upload Max Filesize:  <?php echo esc_html_e( ini_get( 'upload_max_filesize' ) . "\n" ); ?>
PHP Time Limit:           <?php echo esc_html_e( ini_get( 'max_execution_time' ) . "\n" ); ?>
PHP Max Input Vars:       <?php echo esc_html_e( ini_get( 'max_input_vars' ) . "\n" ); ?>
PHP Arg Separator:        <?php echo esc_html_e( ini_get( 'arg_separator.output' ) . "\n" ); ?>
PHP Allow URL File Open:  <?php echo esc_html_e( ini_get( 'allow_url_fopen' ) ? 'Yes' : "No\n" ); ?>

WP_DEBUG:                 <?php echo defined( 'WP_DEBUG' ) ? ( WP_DEBUG ? 'Enabled' . "\n" : 'Disabled' ) . "\n" : 'Not set' . "\n"; ?>

WP Table Prefix:          
<?php 
echo esc_html_e( 'Length: ' . strlen( $wpdb->prefix ) );
echo esc_html_e( ' Status:' );
if ( strlen( $wpdb->prefix ) > 16 ) {
echo esc_html_e( ' ERROR: Too Long' );
} else {
echo esc_html_e( ' Acceptable' );
} echo esc_html_e( "\n" ); 
?>

Show On Front:            <?php echo esc_html_e( get_option( 'show_on_front' ) . "\n" ); ?>
Page On Front:            
<?php 
$ids = get_option( 'page_on_front' );
echo esc_html_e( get_the_title( $ids ) . ' (#' . $ids . ')' ) . "\n"; 
?>
Page For Posts:           
<?php 
$ids = get_option( 'page_for_posts' );
echo esc_html_e( get_the_title( $ids ) . ' (#' . $ids . ')' ) . "\n"; 
?>

WP Remote Post:           <?php echo esc_html_e( $WP_REMOTE_POST ); ?>

Session:                  <?php echo esc_html_e( isset( $_SESSION ) ? 'Enabled' : 'Disabled' ); ?><?php echo "\n"; ?>
Session Name:             <?php echo esc_html( ini_get( 'session.name' ) ); ?><?php echo "\n"; ?>
Cookie Path:              <?php echo esc_html( ini_get( 'session.cookie_path' ) ); ?><?php echo "\n"; ?>
Save Path:                <?php echo esc_html( ini_get( 'session.save_path' ) ); ?><?php echo "\n"; ?>
Use Cookies:              <?php echo ini_get( 'session.use_cookies' ) ? 'On' : 'Off'; ?><?php echo "\n"; ?>
Use Only Cookies:         <?php echo ini_get( 'session.use_only_cookies' ) ? 'On' : 'Off'; ?><?php echo "\n"; ?>

DISPLAY ERRORS:           <?php echo esc_html_e( ( ini_get( 'display_errors' ) ) ? 'On (' . ini_get( 'display_errors' ) . ')' : 'N/A' ); ?><?php echo esc_html_e( "\n" ); ?>
FSOCKOPEN:                <?php echo esc_html_e( ( function_exists( 'fsockopen' ) ) ? 'Your server supports fsockopen.' : 'Your server does not support fsockopen.' ); ?><?php echo esc_html_e( "\n" ); ?>
cURL:                     <?php echo esc_html_e( ( function_exists( 'curl_init' ) ) ? 'Your server supports cURL.' : 'Your server does not support cURL.' ); ?><?php echo "\n"; ?>
SOAP Client:              <?php echo esc_html_e( ( class_exists( 'SoapClient' ) ) ? 'Your server has the SOAP Client enabled.' : 'Your server does not have the SOAP Client enabled.' ); ?><?php echo esc_html_e( "\n" ); ?>

ACTIVE PLUGINS:

<?php 
$plugins_list   = get_plugins();
$active_plugins = get_option( 'active_plugins', array() );

foreach ( $plugins_list as $plugin_path => $plugin_name ) {
	// If the plugin isn't active, don't show it.
	if ( ! in_array( $plugin_path, $active_plugins, true ) ) {
		continue;
	}

	echo esc_html_e( $plugin_name['Name'] ) . ': ' . esc_html_e( $plugin_name['Version'] ) . "\n";
}

?>

// Generated by the WordPress Site Health //
<?php 

if ( ! class_exists( 'WP_Debug_Data' ) ) {
	require_once ABSPATH . 'wp-admin/includes/class-wp-debug-data.php';
}
if ( ! class_exists( 'WP_Site_Health' ) ) {
	require_once ABSPATH . 'wp-admin/includes/class-wp-site-health.php';
}

$sitehealth_info = WP_Debug_Data::debug_data();
echo esc_html_e( 'Site Health Info:', 'elex-abandoned-cart' );
echo esc_attr( WP_Debug_Data::format( $sitehealth_info, 'debug' ) );

if ( is_multisite() ) : 
	?>

NETWORK ACTIVE PLUGINS:

	<?php 
	$plugins_list   = wp_get_active_network_plugins();
	$active_plugins = get_site_option( 'active_sitewide_plugins', array() );

	foreach ( $plugins_list as $plugin_path ) {
		$plugin_base = plugin_basename( $plugin_path );

		// If the plugin isn't active, don't show it.
		if ( ! array_key_exists( $plugin_base, $active_plugins ) ) {
			continue;
		}

		$plugin_name = get_plugin_data( $plugin_path, false, false );

echo esc_html_e( $plugin_name['Name'] ) . ' :' . esc_html_e( $plugin_name['Version'] ) . "\n";
	}
endif;

if ( has_action( 'ssi_extra_info' ) ) {
	echo esc_html_e( "\n" );
	/**
	 * This is a action hook which is responsible for ssi extra info
	 *
	 * @since 1.0.0
	 */
	do_action( 'ssi_extra_info' );
}
