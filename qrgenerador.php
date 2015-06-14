<?php
/**
 * @package QRgenerador
 * @version 0.1
 */
/*
Plugin Name: QRgenerador
Description: Insertar códigos QR en el contenido de post y páginas de Wordpress
Author: José Fernández
Version: 0.1
Author URI: http://www.jose-fernandez.com.es/
Plugin URI: http://www.jose-fernandez.com.es/laboratorio/plugin-para-insertar-codigos-qr-en-wordpress
License: GPLv3
*/


function codigoQR( $atts ) {
	extract( shortcode_atts( array( 'url' => '', 'texto' => '', ), $atts ) );
	ob_start();
	$urlpost = get_permalink();
		if ( $url == '' ) { echo "<center><img title='$texto' src='https://chart.googleapis.com/chart?chs=250x250&#038;cht=qr&#038;chl=$urlpost'></center>"; }
		if ( $url != '' ) { echo "<center><img title='$texto' src='https://chart.googleapis.com/chart?chs=250x250&#038;cht=qr&#038;chl=$url'></center>"; }
		
	$output_string = ob_get_contents();
	ob_end_clean();
		return $output_string;
}
add_shortcode( QR, codigoQR);

?>
