<?php
/**
 * WeCodeArt Framework
 *
 * WARNING: This file is part of the core WeCodeArt Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package		WeCodeArt Framework
 * @subpackage  Gutenberg CSS Frontend
 * @copyright   Copyright (c) 2022, WeCodeArt Framework
 * @since		5.0.0
 * @version		5.5.8
 */

namespace WeCodeArt\Gutenberg\Modules\Styles\Blocks;

defined( 'ABSPATH' ) || exit();

use WeCodeArt\Singleton;
use WeCodeArt\Gutenberg\Modules\Styles\Blocks as Base;
use function WeCodeArt\Functions\get_prop;

/**
 * Block CSS Processor
 */
class Button extends Base {
	/**
	 * Parses an output and creates the styles array for it.
	 *
	 * @return 	void
	 */
	protected function process_extra() {
		$output 			= [];
		$output['element'] 	= apply_filters( 'wecodeart/filter/gutenberg/styles/element', $this->element, $this->name );

		// Inline Style
		if( $css_style = get_prop( $this->attrs, 'style' ) ) {
			// Color
			if( $color = get_prop( $css_style, 'color' ) ) {
				if( $text = get_prop( $color, 'text' ) ) {
					$value 	= wecodeart( 'styles' )::hex_to_rgba( $text );
					preg_match( '/\((.*?)\)/', $value, $color );
					
					// We put CSS vars first!
					array_unshift( $this->output, wp_parse_args( [
						'property' 	=> '--wp--color--rgb',
						'value'	  	=> $color[1]
					], $output ) );
				}
			}
		}
	}
}