<?php
namespace artlyris;



/** Prevent direct access */
defined( 'ABSPATH' ) or exit;



/** Turn off notices */
error_reporting( E_ALL ^ E_NOTICE );



/** Variables and definitions **/
define( __NAMESPACE__ . "\THEME_VERSION", '1.1.3' );                          // The theme's version
define( __NAMESPACE__ . "\THEME_DIR", get_template_directory() . '/' );       // The theme's directory
define( __NAMESPACE__ . "\THEME_URI", get_template_directory_uri() .'/' );    // The theme's uri



/** Include files */
require_once 'includes/setup.php';
require_once 'includes/block-styles.php';
require_once 'includes/block-editor.php';

require_once 'includes/thumbnail-fallback.php';
require_once 'includes/register/index.php';
