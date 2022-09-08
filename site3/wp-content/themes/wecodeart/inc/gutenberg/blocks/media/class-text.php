<?php
/**
 * WeCodeArt Framework
 *
 * WARNING: This file is part of the core WeCodeArt Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package		WeCodeArt Framework
 * @subpackage  Gutenberg\Blocks
 * @copyright   Copyright (c) 2022, WeCodeArt Framework
 * @since		5.0.0
 * @version		5.5.8
 */

namespace WeCodeArt\Gutenberg\Blocks\Media;

defined( 'ABSPATH' ) || exit();

use WeCodeArt\Singleton;
use WeCodeArt\Gutenberg\Blocks\Dynamic;
use function WeCodeArt\Functions\get_prop;

/**
 * Gutenberg Media Text block.
 */
class Text extends Dynamic {

	use Singleton;

	/**
	 * Block namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'core';

	/**
	 * Block name.
	 *
	 * @var string
	 */
	protected $block_name = 'media-text';

	/**
	 * Shortcircuit Register
	 */
	public function register() {}

	/**
	 * Block styles
	 *
	 * @return 	string 	The block styles.
	 */
	public function styles() {
		$breaks 	= wecodeart_json( [ 'settings', 'custom', 'breakpoints' ], [] );
		$tablet		= get_prop( $breaks, 'md', '768px' );
		$desktop	= get_prop( $breaks, 'lg', '992px' );
		
		return "
		.wp-block-media-text {
			--wp--custom--gutter: 1rem;
			display: grid;
			grid-template-columns: 50% 1fr;
			grid-template-rows: auto;
		}
		.wp-block-media-text:not(.has-background) {
			gap: var(--wp--custom--gutter);
		}
		.wp-block-media-text.has-media-on-the-right {
			grid-template-columns: 1fr 50%;
		}
		.wp-block-media-text.has-background .wp-block-media-text__content {
			padding: var(--wp--custom--gutter);
		}
		.wp-block-media-text__media {
			margin: 0;
		}
		.wp-block-media-text__media img,
		.wp-block-media-text__media video {
			display: block;
			width: 100%;
			object-fit: cover;
		}
		.is-image-fill .wp-block-media-text__media {
			position: relative;
			padding: 0;
			min-height: 250px;
			background-size: cover;
		}
		.is-image-fill .wp-block-media-text__media img {
			position: absolute;
			width: 1px;
			height: 1px;
			padding: 0;
			margin: -1px;
			overflow: hidden;
			clip: rect(0, 0, 0, 0);
			border: 0;
		}
		@media (min-width: $tablet) {
			.wp-block-media-text {
				--wp--custom--gutter: 2rem;
			}
			.wp-block-media-text.has-media-on-the-right .wp-block-media-text__media {
				grid-column: 2;
			}
			.wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
				grid-column: 1;
			}
			.wp-block-media-text.is-vertically-aligned-top .wp-block-media-text__content {
				align-self: flex-start;
			}
			.wp-block-media-text.is-vertically-aligned-center .wp-block-media-text__content {
				align-self: center;
			}
			.wp-block-media-text.is-vertically-aligned-bottom .wp-block-media-text__content {
				align-self: flex-end;
			}
			.wp-block-media-text__media {
				grid-column: 1;
				grid-row: 1;
			}
			.wp-block-media-text__content {
				grid-column: 2;
				grid-row: 1;
				align-self: center;
			}
		}
		@media (max-width: 767.98px) {
			.wp-block-media-text.is-stacked-on-mobile {
				grid-template-columns: 100%;
			}
			.wp-block-media-text.is-stacked-on-mobile .wp-block-media-text__media {
				grid-column: 1;
			}
			.wp-block-media-text.is-stacked-on-mobile .wp-block-media-text__content {
				grid-column: 1;
			}
		}
		";
	}
}
