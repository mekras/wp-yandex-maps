<?php
/**
 * Главный файл плагина
 *
 * @wordpress-plugin
 * Plugin Name: WP Yandex.Maps
 * Plugin URI:  https://github.com/mekras/wp-yandex-maps
 * Description: Add Yandex maps to your WordPress site.
 * Version:     1.0
 * Author:      Михаил Красильников
 * Author URI:  https://github.com/mekras
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /languages
 * Text Domain: wp-yandex-maps
 *
 * WP Yandex.Maps is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * WP Yandex.Maps is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WP Yandex.Maps. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( is_admin() ) {
	require plugin_dir_path( __FILE__ ) . 'admin/init.php';
} else {
	require plugin_dir_path( __FILE__ ) . 'public/init.php';
}