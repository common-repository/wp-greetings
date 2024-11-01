<?php
/*
Plugin Name: Wp Greetings
Plugin URI: http://111waystomakemoney.com/wordpress-plugins/wordpress-greetings/
Description: For using the plugin, read the <a href="http://111waystomakemoney.com/wordpress-plugins/wordpress-greetings/" title="WP Greetingsv instruction">WP Greetings Instruction Page</a> .Show a different message to your visitor depending on which site they are coming from.  For example, you can ask Digg visitors to Digg your post, Google visitors to subscribe to your RSS feed, and more!  Best of all, this plugin is compatible with various WordPress cache plugins.
Version: 1.4.1
Author: Ramesh
Author URI: http://www.111waystomakemoney.com/
*/

/*
Copyright 2008-2010 Ramesh (email : 111waystomakemoney@gmail.com)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(dirname(__FILE__).'/includes/dynamic-wp-greetbox.class.php');
$wpgb = new WPGreetBox();

function wpgb_has_greet_message() {
  global $wpgb;
  if ($wpgb) return $wpgb->has_greet_message();
}

// function used for manually insertion
function wp_greet_box() {
  global $wpgb;
  if ($wpgb) $wpgb->display();
}
?>
