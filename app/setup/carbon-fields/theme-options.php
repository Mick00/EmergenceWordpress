<?php
/**
 * Theme Options.
 *
 * Here, you can register Theme Options using the Carbon Fields library.
 *
 * @link https://carbonfields.net/docs/containers-theme-options/
 *
 * @package WPEmergeCli
 */

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

Container::make( 'theme_options', __( 'Theme Options', 'app' ) )
	->set_page_file( 'app-theme-options.php' )
	->add_fields( array(
		Field::make('image', 'dark_logo', __('Logo pour un fond sombre'))
		->set_value_type( 'url' )->set_width(50),
		Field::make('image', 'light_logo', __('logo pour un fond clair'))
		->set_value_type( 'url' )->set_width(50),
		Field::make( 'text', 'crb_google_maps_api_key', __( 'Google Maps API Key', 'app' ) ),
		Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script', 'app' ) ),
		Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script', 'app' ) ),
	)
)->add_fields(add_socials_fields());

function add_socials_fields(){
	$fields = [];
	foreach (get_supported_social_medias() as $social => $icon) {
		$fields[] = Field::make('text', $social, __(`Profil`));
	}
	return $fields;
}
