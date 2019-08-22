<?php

/**
 * Plugin Upgrade Routine
 *
 * @since 1.0.0
 */
class WCCS_Upgrades {

    /**
     * The upgrades
     *
     * @var array
     */
    private static $upgrades = array(
        '1.0.3' => 'updates/update-1.0.3.php',
    );

	/**
	 * The $wc_cat_showcase_version
	 *
	 * @var null
	 */
	private $wc_cat_showcase_version = null;

	/**
	 * WCCS_Upgrades constructor.
	 */
	public function __construct() {

		$this->wc_cat_showcase_version = wc_category_showcase()->version;
	}

    /**
     * Get the plugin version
     *
     * @return string
     */
    public function get_version() {
        return get_option( 'wccs_version', '1.0.0' );
    }

    /**
     * Check if the plugin needs any update
     *
     * @return boolean
     */
    public function needs_update() {

        if ( version_compare( $this->get_version(), $this->wc_cat_showcase_version, '<' ) ) {
            return true;
        }

        return false;
    }

    /**
     * Perform all the necessary upgrade routines
     *
     * @return void
     */
    function perform_updates() {
        $installed_version = $this->get_version();
        $path              = trailingslashit( dirname( __FILE__ ) );

        foreach ( self::$upgrades as $version => $file ) {
            if ( version_compare( $installed_version, $version, '<' ) ) {
                include $path . $file;
                update_option( 'wccs_version', $version );
            }
        }

        update_option( 'wccs_version', $this->wc_cat_showcase_version );
    }
}
