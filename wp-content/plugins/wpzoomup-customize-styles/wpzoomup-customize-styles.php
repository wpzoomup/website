<?php
/**
 * Plugin name: WPZoomUP Customize Styles
 * Description: SnowMonkeyをWPZoomUP向けにスタイルをカスタムします。
 * Version: 0.0.1
 *
 * @package WPZoomUP
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Snow Monkey 以外のテーマを利用している場合は有効化してもカスタマイズが反映されないようにする
 */
$theme = wp_get_theme( get_template() );
if ( 'snow-monkey' !== $theme->template && 'snow-monkey/resources' !== $theme->template ) {
	return;
}

/**
 * Directory url of this plugin
 *
 * @var string
 */
define( 'WPZOOMUP_CUSTOMIZE_STYLES_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
 * Directory path of this plugin
 *
 * @var string
 */
define( 'WPZOOMUP_CUSTOMIZE_STYLES_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

require WPZOOMUP_CUSTOMIZE_STYLES_PATH . '/include/classes/class-wpzoomup-customize-style-base.php';
