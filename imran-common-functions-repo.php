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

/* integrate Icon8 lib in wordpress*/

/* ============== IJ Icon8 SVG ============ */
	
	if (!function_exists('ij_icon8')) {

		function ij_icon8($icon) {
			$output = '';
			  if($icon == 'checked'){
				$output = '
												<img class="icon icons8-Checked" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFLklEQVRoQ+1azXHbOBT+nm/2Zb0VREgDUSow1IF9DHWwXYG1FaxTQZIKohykHC1XIGwFtiuAXEHsS7wnv50HghRJgSQoMc5OJpzxjDwEQXzv53sfHkj4RS76RXDgN5CQJ0dze8QEDXZ/h0QYZuOYcQvCg/ufYPCMazNWt31FxM4e0V+txjNOiXDWdVEMrMAw2MMX806Zrs8Xx28NRM/tMYALAnRhwjsGZEEGjFXR4npmh9jDoXgKgCbmYxC9yj0mzxDebwuoMxD91Q7A+JwDYL5n0BR7mJp3atXFqg4ccEzEE4D+kGedIfZxYk5UGoaRVycgzgsCgsSq/MigS5Ooj5Hvqh2mr+whvmOSAfIhd1LNIRlXBzAaiJ7ZCyK4RTPjGgc462q1NsCyUHpyofnGv+fcjNVUfuuZlRz8AGAUIokoIHpmxQsumRn4qw8vNIHSc/uRgAtmvJVFC6EQY1kF1ynZ9dxOyFmCH5lpklmozbq73pdclJzzebSUcGbGezNWl6G5Gz0iOUHAVZMldl1wo2fS3BEQQwa+mETVUnwtEMdOz7hxlniBcAoB0jMr7xdmu+N96KacrAcyt0uhWElsM1ZSM170yvNS6P2AhgJCcqWuzgSBrEOKH3mfBn2zU5tFKnmpiwnPhFEITB2Q1Bs/IaSEZonw2TPkiUnUwtPvJRH+loJpEjWqGmMDSE51zPfL8etBm/X6vF9hqLyGOCCuxvBKFEDIK5tA5nZKwGkT1fW5+GyuCrkEGUrPbOaVjfsbQEZzy86tBNVVO20L0EsUR7MA/lkmqihE82kFLDEsMx5wAFXM3RKQQt24WyYq30tsu8DY5/TcXhEgzNhKs6O5lT3Mm2p4lYGsXffJJGoSu5Bdxq3lDz8y0bAtCgrypVTlS0BGcyuC7YiBnC12WWTbs2uGcvLH0WzsM9X6VvWIq6SZWGubdJf7MUIwWO3XArKUS1WPuERfJipaFUtydhWSsUIwCCSV+t8k4c1Y/ZmN2RpIqXAxSpzfKgSfcEPAoE0I1s2TMWvR4FsD8dV2XYUZIvE/tYVbUQhuy4y9AwmAmZqxOq8DExKCbcBD92OApBztd2axL6mEWRBMVpX9Bi2KoYI5MrNDItxIzSl6tDf6TVmIF04LMUpgSkBr1Gu00dabvXrWKmiZrQqisBERGwfGt3XwHQNvQWlaRJNCbXiu9/P1BTHjdmlvmrF6G2ul4rgSGGmTwgGRXWbjVjX2XRlZNEoUmawP0ZiCgbRxsrZOL7vMTDRKni2T19KxzK8fJuMLPSq07bc7eCNexufhBaxMolTsS+qqMP7FYZsQjH2HntlvLkwDhBGUIgXx+MObcdEg8v5aeL/S2HwIbWBiX9znOL/xsnXekHfVisOCVxYmUSd9LqzrXNnGq6k11digI+ZbXxN+WoiVWkMNG6//d8u0pjUU8mjrviOziMsX6XP5Nn/X8Og6vtLfao2IViBO4foWkfzmSLnedeEVdbA+i4lUBFFAPBh/vODOSBbYx3nfrVTHTk/uWM/1mrt0OqOBeDDHBJ56hSuhdhmzmYrxjpyIyXyFY72zrF0a83wnIA5M2iQTHXXkrbZCqqvkiLnbYagcXQCnYJzJ1teH7jX2MOk6V2cgmXV8M096Xw6QX4R8FGCIYRi43zjMFDEJvMo+Kih+UCBNDCZcvtjxdNXN7oOB1KKnMSFQHuNOhhfi0W0BZPNt7ZHQov1XEJrkMw64DwOcjC9cdwAeOP3awey6+OLEvQLp7pH+nvgNpD9b9jPTfwQDNWCupe5qAAAAAElFTkSuQmCC" alt="icon-check" />';
			  }
			 elseif($icon == 'unchecked'){
				$output = '
												<img class="icon icons8-Cancel" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFCUlEQVRoQ9Va7XEaSRB9g36ZperkCCxFcO0IDkVgK4JDERhFcHIExhFYisAiAuEI3BeBRATHVYH8y9qrt/TgYcXuzi4L4qaKki0ts/2mu19/jUNL64fIyU/gDwDCjwNOsPyE6yEFHgAoP0fAt1eq/P/Wy22zA4V/Av4EMNggdOzWDw4YOWC8DahGQAzAXwYgEzgF/nXAhCfdWf58yAvG7xHwE9Cn1lKg74DfAsTXHeBjE0C1gKQix4/ApxAAgBsAt4nqbawKwucWIu8B8EPN+nXdBS6d6ix2z2ggfGEKfHHAsZ3+qEuTqPGyMqFMy4MUGFJLKTBzwEXsAUUBmYt8csDQBBl3gGET9cecrpHGtVsSB0121FO9rPpuKRCa0gL46oA+tQBg2FO9rtq0jb/PRUggJAFqZ5IA52XaLwRi/nBnTkkQ/Z4qaXNvay5CKp8YIWgXOCsCUwhkLnJHTQD4uwO835UpVZ0KwTiAVvC7kcr5pu9sBDIXoUo/0JyOAHkpEF7gUDMp8Lmn6v11hekZEKPDr+YTezenIg3lzOw8z2ZrQMy5741iL/bl2FXmFWhm4IAvpOYEOA39ZQ3IQoS2yMA0TlQZpA5uzUXo/KTmm0SVzJatFRALSPeH4hdFJ2hxRslkHeDU++8KSKCNj4nq1cGpIhBoIUL5mOuttJIB8drgv7vA69i0YyFyD2BWxu9VBxLEKySqb6uez8vrtZIB2YQwZsOFCAMk+b00WBXtFQZdxqtElQEwankLcsBlV5XhIgPCk2WK/YzWynY1QZiy1waTB9FlSl8jAfVhguVConrqQifvqR5HHUfwUBMw24II6JgZcub0jskZuXkbyq0Dpi0QZkmsgd6lwAWBZOkIgK3YKgZMmyBC32baQiBZgOkAZ69Uae+NVxmYtkEYe/WfgLsU+Oa8o4fBpTESFkLLcniNALjfI5CVBGSnuo5dJI9lxt/p8ASS8sFEGSzbWXkwtmurILykXv6dAOFLcmD4q9Y0ER73voB4c+K7GwXNKhvZKZC8Y5swtYNmFQhjrsw1aFpsWb5p2dnXHNucvVEGUAYmyBGnu6DfjewUE2diNBA+80PkF/22HBBLKbZtMD7Z9QGxrRQlKk60CWYh8itFCZLGWU/1dV31NonYbYGZi/zD/kKWNJrnZw7fMI2P0kT+gLYFE6Tx00T1JAPyKDJMl132tYK+SjsLEaYHjSN2HkxshWiHnzVK1gqrsNStQ8NWIbI8rlUUhQcUgGGaFFUhbpL3f9l8CJh2vflgKTEnSWwHzY6Aty/dJi0ya2sHffdO/qwdFNpdWbO4ym92/fegub65Qecz1gVz++VM4uBapp6U2ERMgJPClqlpha1SNrE5vzvb90ykSKPWxOaogw2S8ia23yQYKxyEv4QgoscKARjfLOa4+fylnN/KWXZ5SM2FzfWq0VuWer+UmeXMqbTCjBmG3rLLYmAu9zUzeRT58ARcmU+Mu8Cg0TA0dLogAHFcPDkCLnZlahYnOM/n/JLv2zhqy5NCdOfELgxw/u2H+aMOcNMWoOBeSzbSsEsJg1YvDHj0lheN8tctLICOmwTDhcg7u8Kxmj4xee3yBkSNpna0RnIlJtMZntzq/ohduVheqnFugjSdbrxU49ybpzQNL9WEjfObDnDVRMuNgHhQNIcU4B0VjotZzzRZU7vmdNsEgH/hVkDyWvpp15eCi2d5cNPcxbPJNsKH7/8PkcItXz99rKgAAAAASUVORK5CYII=" alt="icon-cross" />';
			  }
			  return $output;
			
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
	


/*
* 		implement User capability in wordpress on theme initialized
*/

if ( ! function_exists( 'ij_admin_capabilities' ) ) {

    add_action('init', 'ij_admin_capabilities');

    function ij_admin_capabilities() {
            $contributor = get_role('administrator');
            $contributor->add_cap('assign_location');
            $contributor->add_cap('assign_list-tags');
            $contributor->add_cap('assign_listing-category');
            $contributor->add_cap('assign_features');
    }

}

// for any further help you need, please drop me a message on whatsApp +923044887447
?>