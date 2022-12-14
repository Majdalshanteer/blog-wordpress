<?php
/**
 * WeCodeArt Framework.
 *
 * WARNING: This file is part of the core WeCodeArt Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package 	WeCodeArt Framework
 * @subpackage  Footer Credits
 * @since	 	5.0.0
 * @version    	5.5.5
 */

defined( 'ABSPATH' ) || exit();

/**
 * @param   string  $year   Current Year
 * @param   string  $copy   Copy Symbol
 */

?>
<div class="wp-site-credits">
    <div class="has-text-align-center">
        <span class="wp-site-credits__text"><?php
            
            echo wp_kses_post( sprintf( __( 'Copyright %s - All rights reserved.', 'wecodeart' ), join( ' ', [ $copy, $year ] ) ) );
            
        ?></span>
        <span class="wp-site-credits__theme"><?php

            printf(
                esc_html__( 'Built on %1s.', 'wecodeart' ),
                sprintf( '<a href="%s" target="_blank">%s</a>', 'https://www.wecodeart.com/', 'WeCodeArt Framework' )
            );

        ?></span>
    </div>
</div>