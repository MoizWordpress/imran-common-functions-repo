<?php
// common worpdress functions that need while theme/ plugin development



/* ============== IJ Get Metabox ============ */
if (!function_exists('ij_get_metabox')) {
		function ij_get_metabox($name) {
			global $post;
			if ($post) {
				$metabox = get_post_meta($post->ID, 'lp_' . strtolower(THEMENAME) . '_options', true);
				return isset($metabox[$name]) ? $metabox[$name] : "";
			}
			return false;
		}
	}




/* ============== IJ Author Name ============ */

if (!function_exists('ij_author_name')) {

		function ij_author_name() {
				 if ( is_user_logged_in() ) {
					$current_user = wp_get_current_user();
					$output = $current_user->user_login; 
				} else {
					$output = '';
				}
				return $output;
			
		}

	}
	

// for any further help me please drop me a message on whatsApp +923044887447
?>