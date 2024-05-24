<?php
/**
 * Plugin Name:     Client Customization
 * Plugin URI:https://www.yogh.com.br/
 * Description:     Plugins with Project Customization
 * Author:          Yogh Soluções
 * Author URI:      https://www.yogh.com.br/
 * Text Domain:     client-customization
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Client_Customization
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
die( 'not allowed' );
}

add_filter('the_content', function ( $content ) {    

$message = '<p><b>This content is created by: ' . get_bloginfo( 'name' ) . ' (' . get_bloginfo( 'url' ) . ')</b></p>';

if(is_page()){  // Se for uma página
    
    return $content; // Retornar somente o conteúdo sem a mensagem

} else { // senao

    return $content . $message; // Retornar o conteudo e a mensagem

}

}, 10 );