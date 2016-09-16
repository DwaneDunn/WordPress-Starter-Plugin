<?php
/**
 * Description
 *
 * @package     KnowITMedia
 * @since       1.0.0
 * @author      Dwane Dunn
 * @link        https://dwanedunn.com
 * @license     GNU General Public License 2.0+
 */

namespace KnowITMedia;

add_action( 'loop_start',__NAMESPACE__ .'\demo' );

/**
 * Demo - testing purposes only.
 *
 * @since 1.0.0
 *
 * @return void
*/

function demo() {
	var_dump( get_the_ID() );
	echo get_the_ID();
	d(get_the_ID());
}