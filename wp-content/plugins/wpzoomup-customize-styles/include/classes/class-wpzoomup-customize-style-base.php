<?php
/**
 * WPZoomUP Customize Styles Base Class
 *
 * WPZoomUP Customize Styles 基盤クラス
 *
 * @package WPZoomUP
 * @since 0.0.1
 */

class WPZoomUP_Customize_Style_Base {
	/**
	 * WPZoomUP_Customize_Style_Base constructor.
	 */
	public function __construct() {
		add_filter( 'snow_monkey_template_part_root_hierarchy', array( $this, 'custom_root_hierarchy' ) );
	}

	/**
	 * SnowMonkeyのテンプレート上書きをこのプラグイン内で可能にする
	 *
	 * @param array $hierarchy
	 * @return mixed
	 */
	public function custom_root_hierarchy( $hierarchy ) {
		$hierarchy[] = WPZOOMUP_CUSTOMIZE_STYLES_PATH;

		return $hierarchy;
	}

}

new WPZoomUP_Customize_Style_Base();
