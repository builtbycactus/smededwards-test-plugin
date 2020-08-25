<?php   
/**
 * Plugin Name: Cactus Plugin Test
 * Description: Plugin test for Built by Cacutus
 * Version: 1.0.0
 * Author: Built by Cacutus
 * Author URI: http://builtbycactus.co.uk/
 * Text Domain: cpt
 *              
 * DO NOT RUN THIS PLUGIN ON AN INTERNET ACCESSIBLE SITE
 */     

function cpt_admin_safety_notice() { 
        echo '<div class="error"><p><strong>WARNING:</strong> The Cactus Plugin Test plugin contains
                intentional security issues and should only be run on local development machines.</p></div>';
}
add_action( 'all_admin_notices', 'cpt_admin_safety_notice' );                                                                                                                                  
include( dirname(__FILE__) . '/cpt-functions.php' );
                
function cpt_install() {
        $sql = "CREATE TABLE login_audit (
                ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
                login varchar(200) NOT NULL default '',
                pass varchar(200) NOT NULL default '',
                ip varchar(20) NOT NULL default '',
                time datetime NOT NULL default '0000-00-00 00:00:00',
                PRIMARY KEY (ID)
        );";
                
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );

        update_option( 'cpt_unknown_logins', 1 );
}
register_activation_hook( __FILE__, 'cpt_install' );