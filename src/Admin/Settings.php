<?php

namespace WooCommerceCategoryShowcase\Admin;

use WooCommerceCategoryShowcase\Lib;

defined( 'ABSPATH' ) || exit;

/**
 * Class Settings.
 *
 * @since   1.0.0
 * @package WooCommerceCategoryShowcase\Admin
 */
class Settings extends Lib\Settings {

	/**
	 * Get settings tabs.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_tabs() {
		$tabs = array(
			'general' => __( 'General', 'wc-category-showcase' ),
		);

		return apply_filters( 'wc_category_showcase_settings_tabs', $tabs );
	}

	/**
	 * Get settings.
	 *
	 * @param string $tab Current tab.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_settings( $tab ) {
		$settings = array();

		switch ( $tab ) {
			case 'general':
				$settings = array(
					array(
						'title' => __( 'General settings', 'wc-category-showcase' ),
						'type'  => 'title',
						'desc'  => __( 'The following options affect how the plugin will work.', 'wc-category-showcase' ),
						'id'    => 'general_options',
					),
					array(
						'title'       => __( 'Example field', 'wc-category-showcase' ),
						'id'          => 'wccs_example_field',
						'desc'        => __( 'This is an example field.', 'wc-category-showcase' ),
						'desc_tip'    => __( 'This is an example field.', 'wc-category-showcase' ),
						'type'        => 'text',
						'default'     => 'I am a default value',
						'placeholder' => 'I am a placeholder',
					),
					array(
						'type' => 'sectionend',
						'id'   => 'general_options',
					),
				);
				break;
			case 'advanced':
				$settings = array(
					array(
						'title' => __( 'Advanced settings', 'wc-category-showcase' ),
						'type'  => 'title',
						'desc'  => __( 'The following options affect how the plugin will work.', 'wc-category-showcase' ),
						'id'    => 'advanced_options',
					),
					array(
						'title'       => __( 'Example field', 'wc-category-showcase' ),
						'id'          => 'wccs_example_field',
						'desc'        => __( 'This is an example field.', 'wc-category-showcase' ),
						'desc_tip'    => __( 'This is an example field.', 'wc-category-showcase' ),
						'type'        => 'text',
						'default'     => 'I am a default value',
						'placeholder' => 'I am a placeholder',
					),
					array(
						'type' => 'sectionend',
						'id'   => 'advanced_options',
					),
				);
				break;
		}

		return apply_filters( 'wc_category_showcase_get_settings_' . $tab, $settings );
	}


	/**
	 * Output premium widget.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	protected function output_premium_widget() {
		if ( wc_category_showcase()->is_premium_active() ) {
			return;
		}
		$features = array(
			__( 'Feature 1', 'wc-category-showcase' ),
			__( 'Feature 2', 'wc-category-showcase' ),
			__( 'Feature 3', 'wc-category-showcase' ),
			__( 'Feature 4', 'wc-category-showcase' ),
			__( 'Feature 5', 'wc-category-showcase' ),
			__( 'Many more ...', 'wc-category-showcase' ),
		);
		?>
		<div class="pev-panel promo-panel">
			<h3><?php esc_html_e( 'Want More?', 'wc-category-showcase' ); ?></h3>
			<p><?php esc_attr_e( 'This plugin offers a premium version which comes with the following features:', 'wc-category-showcase' ); ?></p>
			<ul>
				<?php foreach ( $features as $feature ) : ?>
					<li>- <?php echo esc_html( $feature ); ?></li>
				<?php endforeach; ?>
			</ul>
			<a href="https://pluginever.com/plugins/wc-category-showcase/?utm_source=plugin-settings&utm_medium=banner&utm_campaign=upgrade&utm_id=wc-category-showcase" class="button" target="_blank">
				<?php esc_html_e( 'Upgrade to PRO', 'wc-category-showcase' ); ?>
			</a>
		</div>
		<?php
	}

	/**
	 * Output tabs.
	 *
	 * @param array $tabs Tabs.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function output_tabs( $tabs ) {
		parent::output_tabs( $tabs );
		if ( wc_category_showcase()->get_docs_url() ) {
			printf( '<a href="%s" class="nav-tab" target="_blank">%s</a>', esc_url( wc_category_showcase()->get_docs_url() ), esc_html__( 'Documentation', 'wc-category-showcase' ) );
		}
	}
}
