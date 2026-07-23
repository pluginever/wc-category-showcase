<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @since   1.0.0
 * @package PluginEver\CategoryShowcase
 */

defined( 'WP_UNINSTALL_PLUGIN' ) || exit;

delete_option( 'wccs_installed' );
delete_option( 'wccs_db_version' );
delete_option( 'wccs_install_date' );
delete_option( 'wccs_data_migrated' );
delete_option( 'wccs_installed' );
delete_option( 'wccs_activation_redirect' );
