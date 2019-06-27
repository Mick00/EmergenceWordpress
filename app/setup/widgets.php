<?php
/**
 * Register widgets.
 *
 * @link https://developer.wordpress.org/reference/functions/register_widget/
 *
 * @hook    widgets_init
 * @package WPEmergeTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// phpcs:ignore
// register_widget( MyWidgetClass::class );

/**
 * Rich Text widget
 */
register_widget( App\Widgets\Carbon_Rich_Text_Widget::class );
