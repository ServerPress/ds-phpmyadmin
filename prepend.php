<?php
/**
 * Create a menu item within our localhost tools pull down menu.
 */
global $ds_runtime;
if ( !$ds_runtime->is_localhost ) return; // Not localhost

/**
 * Add our menu to the localhost page.
 */
$ds_runtime->add_action( 'append_tools_menu', 'phpmyadmin_tools_menu' );
function phpmyadmin_tools_menu() {
  echo '<b-dropdown-item href="http://localhost/ds-plugins/ds-phpmyadmin/app" target="_blank">
            phpMyAdmin - MySQL Administration
        </b-dropdown-item>';
}
