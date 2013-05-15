<?php
/**
 * Plugin Name: Disable Post Format UI
 * Plugin URI: http://themehybrid.com/plugins/disable-post-format-ui
 * Description: Completely disables the post format UI added in WordPress 3.6.
 * Version: 0.1.0
 * Author: Justin Tadlock
 * Author URI: http://justintadlock.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @package   DisablePostFormatUI
 * @version   0.1.0
 * @author    Justin Tadlock <justin@justintadlock.com>
 * @copyright Copyright (c) 2013, Justin Tadlock
 * @link      http://themehybrid.com/plugins/disable-post-format-ui
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_filter( 'enable_post_format_ui', '__return_false' );

?>