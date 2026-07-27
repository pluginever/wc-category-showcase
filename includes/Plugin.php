<?php

namespace PluginEver\CategoryShowcase;

use PluginEver\CategoryShowcase\B8\Component;

defined( 'ABSPATH' ) || exit;

/**
 * Main plugin class.
 *
 * @since   1.0.0
 * @package PluginEver\CategoryShowcase
 */
class Plugin extends B8\App {

	/**
	 * Components to register.
	 *
	 * @since 1.0.0
	 * @var array<int|string, class-string>
	 */
	protected array $components = array(
		Installer::class,
		PostTypes::class,
		Shortcodes\Shortcodes::class,
		Admin\Admin::class,
	);

	/**
	 * Register hooks.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function bootstrap(): void {
		define( 'WCCS_VERSION', $this->version );
		define( 'WCCS_FILE', $this->file );
		define( 'WCCS_PATH', $this->plugin_path() . '/' );
		define( 'WCCS_ASSETS_URL', $this->assets_url() . '/build' );
		define( 'WCCS_TEMPLATES_URL', $this->plugin_path() . '/templates/' );
		add_action( 'woocommerce_loaded', array( $this, 'woocommerce_loaded' ), 0 );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );
		add_filter( 'plugin_action_links_' . $this->basename(), array( $this, 'plugin_action_links' ) );
		add_filter( 'plugin_row_meta', array( $this, 'plugin_row_meta' ), 10, 2 );
	}

	/**
	 * Initialize the plugin after WooCommerce loads.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function woocommerce_loaded(): void {
		$this->boot( $this->components );

		/**
		 * Fires when the plugin is initialized.
		 *
		 * @since 1.0.0
		 */
		do_action( 'wc_category_showcase_init' );
		$this->do_action( 'loaded' );
	}

	/**
	 * Add plugin action links.
	 *
	 * @since 1.0.0
	 * @param array<string, string> $links Plugin action links.
	 * @return array<string, string>
	 */
	public function plugin_action_links( array $links ): array {
		if ( ! $this->is_pro_active() ) {
			$links['go_pro'] = '<a href="' . esc_url( (string) $this->get( 'upgrade_url' ) ) . '?utm_source=plugin&utm_medium=plugin-action-link&utm_campaign=go-pro" target="_blank" style="color: orangered;">' . esc_html__( 'Go Pro', 'wc-category-showcase' ) . '</a>';
		}
		$settings_url     = sprintf(
			'<a href="%s">%s</a>',
			esc_url( (string) $this->get( 'settings_url' ) ),
			esc_html__( 'Settings', 'wc-category-showcase' )
		);
		$links['setting'] = $settings_url;

		return $links;
	}

	/**
	 * Add the plugin row meta links.
	 *
	 * @since 1.0.0
	 * @param array<int, string> $links Plugin row meta links.
	 * @param string             $file  Plugin file path relative to the plugins directory.
	 * @return array<int, string>
	 */
	public function plugin_row_meta( array $links, string $file ): array {
		if ( $file !== $this->basename() ) {
			return $links;
		}

		$links[] = sprintf(
			'<a href="%s" target="_blank" rel="noopener noreferrer">%s</a>',
			esc_url( (string) $this->get( 'docs_url' ) ),
			esc_html__( 'Docs', 'wc-category-showcase' )
		);

		$links[] = sprintf(
			'<a href="%s" target="_blank" rel="noopener noreferrer">%s</a>',
			esc_url( (string) $this->get( 'support_url' ) ),
			esc_html__( 'Support', 'wc-category-showcase' )
		);

		return $links;
	}

	/**
	 * Whether the Pro add-on is active.
	 *
	 * @since 1.0.0
	 * @return bool True when the Pro add-on is active.
	 */
	public function is_pro_active(): bool {
		return $this->has( 'pro_basename' ) && $this->plugin_active( $this->pro_basename );
	}

	/**
	 * Enqueue front-end styles and scripts.
	 *
	 * @since 2.3.2
	 * @return void
	 */
	public function register_scripts() {
		$assets  = $this->assets_url() . '/build';
		$version = $this->version;

		// Styles.
		wp_register_style( 'wcc-showcase-fontawesome-icons', $assets . '/fonts/fontawesome/fontawesome-icons.css', array(), $version );
		wp_register_style( 'wcc-showcase-happy-icons', $assets . '/fonts/happy-icons/happy-icons.css', array(), $version );
		wp_register_style( 'wcc-showcase-vendor', $assets . '/styles/vendor.css', array(), $version );
		wp_register_style( 'wcc-showcase-showcase', $assets . '/styles/frontend.css', array( 'wcc-showcase-vendor', 'wcc-showcase-fontawesome-icons', 'wcc-showcase-happy-icons' ), $version );

		// Scripts.
		wp_register_script( 'wcc-showcase-vendor', $assets . '/scripts/vendor.js', array( 'jquery' ), $version, true );
		wp_register_script( 'wcc-showcase-showcase', $assets . '/scripts/frontend.js', array( 'jquery', 'wcc-showcase-vendor' ), $version, true );
	}
}
