<?php
/*
 * Plugin Name: PRyC WooCommerce: Edit all orders
 * Plugin URI:
 * Description: Plugin add filter to enable edit options to all orders (all statuses)
 * Author: PRyC
 * Author URI: http://PRyC.pl
 * Version: 1.0.1
 */
 
/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

/* CODE: */

if ( ! defined( 'ABSPATH' ) ) exit;

add_filter( 'wc_order_is_editable', '__return_true' );


/* END */
?>
