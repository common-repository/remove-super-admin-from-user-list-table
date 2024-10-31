<?php
/*
Plugin Name: Remove Super Admin from User List Table
Plugin URI: http://www.php-developer.org/
Description: Remove super admins on user list
Version: 3.0
Author: Codex-m
Author URI: http://www.php-developer.org/
*/

add_action( 'pre_get_users', 'remove_super_admin_users_test' );
function remove_super_admin_users_test($args) {	
	
	if (is_multisite()) {
        //This is multisite, proceed
	 	if (!(is_main_site())) {
	 		//This is a child site, proceed
	 		if (function_exists('get_current_screen')) {
	 			$screen = get_current_screen();
	 			if ((is_object($screen)) && (!(empty($screen)))) {	 				
	 				if (isset($screen->id)) {
	 					//Execute only when user is in the user list page in admin
	 					if (is_admin()) {
	 						$screen_id=$screen->id;
	 						if ('users' == $screen_id) {
	 							if (isset($args->query_vars['exclude'])) {	 								
	 								$network_admins=get_site_option('site_admins');
	 								if ((is_array($network_admins)) && (!(empty($network_admins)))) {
	 									$network_admins_id=array();
	 									foreach ($network_admins as $k=>$v) {
	 										$user = get_user_by( 'login', $v );
	 										if (isset($user->ID)) {
	 											$network_admins_id[]=$user->ID;
	 										}
	 									}	 			
	 									/**
	 									 * Allow other plugins to add former super admin IDs that still appear on the user list
	 									 * When they are downgraded to ordinary admin.
	 									 * 
	 									 */
	 									$network_admins_id		= apply_filters( 'wpvlive_remove_former_superadmin_also', $network_admins_id );
	 									$args->query_vars['exclude'] = $network_admins_id;
	 								}
	 							}
	 									
	 						}
	 					}
	 				}
	 			}
	 		}
	 	}	
	}
}
