<?php

namespace WooCommerceCategoryShowcase\Admin;

defined( 'ABSPATH' ) || exit;

/**
 * Admin class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Admin {

	/**
	 * Admin constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'init' ), 1 );
		add_action( 'admin_menu', array( $this, 'main_menu' ) );
		add_shortcode( 'wccs_showcase', array( $this, 'shortcode_render_callback' ) );
	}

	/**
	 * Init.
	 *
	 * @since 1.0.0
	 */
	public function init() {
		wp_enqueue_style( 'wccs-frontend', WCCS_ASSETS_URL . '/css/wccs-frontend.css', false, '2.0.0' );
	}

	/**
	 * Main menu.
	 *
	 * @since 1.0.0
	 */
	public function main_menu() {
		add_menu_page(
			esc_html__( 'WC Category Showcase', 'wc-category-showcase' ),
			esc_html__( 'WC Category Showcase', 'wc-category-showcase' ),
			'manage_options',
			'wc-category-showcase',
			null,
			'dashicons-grid-view',
			'55.5'
		);

		add_submenu_page(
			'wc-category-showcase',
			esc_html__( 'All Category Showcase', 'wc-category-showcase' ),
			esc_html__( 'All Category Showcase', 'wc-category-showcase' ),
			'manage_options',
			'wc-category-showcase',
			array( $this, 'output_main_page' )
		);
	}

	/**
	 * Output main page.
	 *
	 * @throws \Exception Throws exception if the request is invalid.
	 *
	 * @since 1.0.0
	 * @return \Exception
	 */
	public function output_main_page() {
		try {
			if ( ! empty( $_POST ) && ! check_admin_referer( 'save_category_ids' ) ) {
				throw new \Exception( __( 'Error - please try again', 'wc-category-showcase' ) );
			}

			if ( isset( $_POST['submit'] ) ) {
				$category_showcase_ids = isset( $_POST['category_showcase_ids'] ) ? sanitize_text_field( wp_unslash( $_POST['category_showcase_ids'] ) ) : '';

				$redirect_to = admin_url( 'admin.php?page=wc-category-showcase' );

				if ( ! empty( $category_showcase_ids ) ) {
					update_option( 'category_showcase_ids', $category_showcase_ids );
					wp_safe_redirect( $redirect_to );
					exit();
				}
			}
		} catch ( \Exception $e ) {
			return new \Exception( __( 'Error - please try again', 'wc-category-showcase' ) );
		}
		?>
		<h1>
		<?php esc_html_e( 'WC Category Showcase', 'wc-category-showcase' ); ?>
		</h1>
		<p><?php esc_html_e( 'You can manage plugin functionality from here.', 'wc-category-showcase' ); ?></p>
		<form action="" method="post">
			<div class="pev-poststuff" id="wccs-category-showcase">
				<div class="column-1">
					<div class="pev-card">
						<div class="pev-card__header">
							<h3 class="pev-card__title">
								<label for="category_showcase_ids">
									<strong><?php esc_html_e( 'Add category ids', 'wc-category-showcase' ); ?></strong>
								</label>
							</h3>
							<p><?php esc_html_e( 'Add this shortcode to show category showcase ', 'wc-category-showcase' ); ?><code><?php echo esc_attr( 'wccs_showcase' ); ?></code></p>
						</div>
						<div class="pev-card__body form-inline">
							<div class="pev-form-field">
								<input type="text" name="category_showcase_ids" id="category_showcase_ids" class="regular-text" value="<?php echo esc_attr( get_option( 'category_showcase_ids', '' ) ); ?>"/>
								<p><?php esc_html_e( 'Add category ids and seperated with comma.', 'wc-category-showcase' ); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php wp_nonce_field( 'save_category_ids' ); ?>
		<?php submit_button( __( 'Save changes', 'wc-category-showcase' ) ); ?>
		</form>
		<?php
	}

	/**
	 * Slider shortcode render callback
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function shortcode_render_callback() {
		$category_ids = get_option( 'category_showcase_ids', '' );
		$category_ids = explode( ',', $category_ids );
		?>
		<div class="category-showcase">
			<?php
			foreach ( $category_ids as $category ) {
				$category_details = self::wccs_get_term_details( $category );
				?>
				<div class="column">
					<a href="<?php echo esc_url( $category_details['link'] ); ?>">
						<img src="<?php echo esc_url( $category_details['image'] ); ?>" alt="<?php esc_attr( $category ); ?>">
						<h3><?php echo esc_attr( $category_details['title'] ); ?></h3>
					</a>
				</div>
			<?php } ?>
		</div>
		<?php
	}

	/**
	 * Get a specific term details
	 *
	 * @param string $category Term id.
	 *
	 * @return array|bool
	 */
	public static function wccs_get_term_details( $category ) {
		$term = get_term( $category );

		if ( is_wp_error( $term ) ) {
			return false;
		}

		if ( ! $term ) {
			return false;
		}

		$thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
		$image_url    = wp_get_attachment_url( $thumbnail_id ) ? wp_get_attachment_url( $thumbnail_id ) : '';

		$response = array(
			'term_id' => $term->term_id,
			'title'   => $term->name,
			'image'   => $image_url,
			'col'     => 1,
			'link'    => get_term_link( $term->term_id, 'product_cat' ),
		);

		return $response;
	}
}
