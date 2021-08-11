<?php
/**
 * Create a menu item within our localhost tools pull down menu.
 */
global $ds_runtime;
if ( false == $ds_runtime->is_localhost ) return; // Not localhost


/**
 * Add our stylesheet to color the button
 */
$ds_runtime->add_action( 'ds_head', 'phpmyadmin_ds_head' );
function phpmyadmin_ds_head() {
    echo '<link rel="stylesheet" href="http://localhost/ds-plugins/ds-phpmyadmin/style.css?">';
}

/**
 * Add our menu to the localhost page.
 */
$ds_runtime->add_action( 'append_tools_menu', 'phpmyadmin_tools_menu' );
function phpmyadmin_tools_menu() {
  echo '<b-dropdown-item href="http://localhost/ds-plugins/ds-phpmyadmin/app" target="_blank">
            phpMyAdmin - MySQL Administration
        </b-dropdown-item>';
}

/**
 * Add the database button to the site listing
 */
$ds_runtime->add_action( 'domain_button_group_after', 'phpmyadmin_domain_button_group_after' );
function phpmyadmin_domain_button_group_after($domain) {
    global $ds_runtime;
    $dbName = $ds_runtime->preferences->sites->{$domain}->dbName;
    echo "<a href=\"http://localhost/ds-plugins/ds-phpmyadmin/app/index.php?route=/database/structure&db=$dbName\" ";
    echo "class=\"btn btn-db\" target=\"_blank\">Database</a>";
}
