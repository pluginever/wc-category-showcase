<?php
/**
 * Image settings tab.
 *
 * @since 2.2.0
 * @package WooCommerceCategoryShowcase/Admin/Views/Showcase
 * @var array $showcase_details Showcase details.
 * @var int   $post_id Post ID.
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="wcc_showcase-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.607 15.4393H20.2284C20.1275 14.93 19.9299 14.4452 19.6466 14.0117L20.628 13.0204C20.6645 12.9834 20.6935 12.9396 20.7133 12.8913C20.7331 12.8431 20.7433 12.7914 20.7433 12.7391C20.7433 12.6869 20.7331 12.6352 20.7133 12.5869C20.6935 12.5387 20.6645 12.4948 20.628 12.4579L20.0325 11.8563C19.9959 11.8194 19.9525 11.7901 19.9047 11.7701C19.857 11.7501 19.8058 11.7398 19.7541 11.7398C19.7024 11.7398 19.6512 11.7501 19.6034 11.7701C19.5556 11.7901 19.5122 11.8194 19.4757 11.8563L18.4955 12.8465C18.0664 12.5601 17.5865 12.3604 17.0823 12.2582V10.8661C17.0823 10.7607 17.0409 10.6595 16.967 10.585C16.8932 10.5104 16.7931 10.4685 16.6887 10.4685H15.8985C15.7941 10.4685 15.694 10.5104 15.6201 10.585C15.5463 10.6595 15.5048 10.7607 15.5048 10.8661V12.2588C15.0006 12.3609 14.5208 12.5607 14.0917 12.8471L13.1103 11.8551C13.0738 11.8182 13.0304 11.7889 12.9826 11.7689C12.9348 11.7489 12.8836 11.7386 12.8319 11.7386C12.7802 11.7386 12.729 11.7489 12.6812 11.7689C12.6335 11.7889 12.5901 11.8182 12.5535 11.8551L11.958 12.4567C11.9214 12.4936 11.8924 12.5375 11.8726 12.5857C11.8529 12.634 11.8427 12.6857 11.8427 12.7379C11.8427 12.7902 11.8529 12.8419 11.8726 12.8901C11.8924 12.9384 11.9214 12.9822 11.958 13.0192L12.9394 14.0105C12.6561 14.444 12.4585 14.9288 12.3576 15.4381H10.9778C10.8734 15.4381 10.7733 15.48 10.6995 15.5545C10.6257 15.6291 10.5842 15.7302 10.5842 15.8357V16.631C10.5842 16.7364 10.6257 16.8376 10.6995 16.9122C10.7733 16.9867 10.8734 17.0286 10.9778 17.0286H12.3564C12.4573 17.5379 12.6549 18.0227 12.9382 18.4561L11.9568 19.4493C11.9203 19.4863 11.8912 19.5301 11.8715 19.5784C11.8517 19.6266 11.8415 19.6783 11.8415 19.7306C11.8415 19.7828 11.8517 19.8345 11.8715 19.8828C11.8912 19.931 11.9203 19.9749 11.9568 20.0118L12.5523 20.6134C12.5889 20.6503 12.6323 20.6796 12.6801 20.6996C12.7278 20.7196 12.779 20.7299 12.8307 20.7299C12.8824 20.7299 12.9336 20.7196 12.9814 20.6996C13.0292 20.6796 13.0726 20.6503 13.1091 20.6134L14.0905 19.622C14.5196 19.9082 14.9995 20.1077 15.5036 20.2097V21.6024C15.5036 21.7078 15.5451 21.809 15.6189 21.8835C15.6928 21.9581 15.7929 22 15.8973 22H16.6845C16.7889 22 16.8891 21.9581 16.9629 21.8835C17.0367 21.809 17.0782 21.7078 17.0782 21.6024V20.2109C17.5823 20.1089 18.0622 19.9094 18.4913 19.6232L19.4727 20.6146C19.5092 20.6515 19.5526 20.6808 19.6004 20.7008C19.6482 20.7208 19.6994 20.7311 19.7511 20.7311C19.8028 20.7311 19.854 20.7208 19.9018 20.7008C19.9495 20.6808 19.9929 20.6515 20.0295 20.6146L20.625 20.013C20.6616 19.9761 20.6906 19.9322 20.7104 19.884C20.7301 19.8357 20.7403 19.784 20.7403 19.7318C20.7403 19.6795 20.7301 19.6278 20.7104 19.5796C20.6906 19.5313 20.6616 19.4875 20.625 19.4505L19.646 18.4604C19.9293 18.0269 20.1269 17.5421 20.2278 17.0328H21.6064C21.6581 17.0328 21.7092 17.0225 21.757 17.0026C21.8048 16.9826 21.8482 16.9533 21.8847 16.9164C21.9213 16.8794 21.9503 16.8356 21.97 16.7874C21.9898 16.7391 22 16.6874 22 16.6352V15.8369C22 15.7316 21.9586 15.6305 21.8849 15.556C21.8112 15.4814 21.7113 15.4394 21.607 15.4393ZM16.2921 18.4002C15.8681 18.4002 15.4536 18.2732 15.1011 18.0352C14.7485 17.7973 14.4737 17.459 14.3115 17.0633C14.1492 16.6676 14.1068 16.2321 14.1895 15.8121C14.2722 15.392 14.4764 15.0061 14.7762 14.7032C15.076 14.4003 15.458 14.1941 15.8739 14.1105C16.2897 14.0269 16.7208 14.0698 17.1125 14.2337C17.5042 14.3977 17.839 14.6752 18.0746 15.0314C18.3102 15.3875 18.4359 15.8062 18.4359 16.2345C18.4359 16.5189 18.3805 16.8006 18.2727 17.0633C18.165 17.3261 18.0071 17.5648 17.808 17.7659C17.6089 17.967 17.3726 18.1265 17.1125 18.2354C16.8524 18.3442 16.5736 18.4002 16.2921 18.4002Z" fill="#2270B1"/>
		<path d="M9.55337 18.6408H3.19101V6.60942H19.8651V9.98122C20.2906 10.2303 20.6897 10.5227 21.0561 10.8541V3.60157C21.0561 3.44202 20.9934 3.28901 20.8817 3.1762C20.77 3.06338 20.6186 3 20.4606 3H2.5955C2.43757 3 2.2861 3.06338 2.17442 3.1762C2.06274 3.28901 2 3.44202 2 3.60157V19.2424C2 19.4019 2.06274 19.555 2.17442 19.6678C2.2861 19.7806 2.43757 19.844 2.5955 19.844H10.1018C9.88298 19.4607 9.69939 19.058 9.55337 18.6408Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Images Settings', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Image Layout', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Display the images associated with each category in a rectangle, rounded, or circle shape. This won\'t applicable for the Grid/Overly layout.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center tw-gap-x-4">
		<div class="tw-relative">
			<div class="wcc_showcase_image_layout_select <?php echo 'rectangle' === $showcase_details['image_layout'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
				<input type="radio" name="wcc_showcase_image_layout" class="!tw-hidden" value="<?php echo esc_attr( 'rectangle' ); ?>" <?php if ( 'rectangle' === $showcase_details['image_layout'] ) { echo 'checked'; } ?>>
				<svg class="<?php echo 'rectangle' === $showcase_details['image_layout'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 32 32" fill="currentColor">
					<g clip-path="url(#clip0_940_3509)">
						<path d="M32 0H0V32H32V0Z"/>
					</g>
				</svg>
			</div>
			<p class="tw-text-center tw-text-text-black-950"><?php esc_html_e( 'Rectangle', 'wc-category-showcase' ); ?></p>
		</div>
		<div class="tw-relative">
			<div class="wcc_showcase_image_layout_select <?php echo 'rounded' === $showcase_details['image_layout'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
				<input type="radio" name="wcc_showcase_image_layout" class="!tw-hidden" value="<?php echo esc_attr( 'rounded' ); ?>" <?php if ( 'rounded' === $showcase_details['image_layout'] ) { echo 'checked'; } ?>>
				<svg class="<?php echo 'rounded' === $showcase_details['image_layout'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 32 32" fill="currentColor">
					<g clip-path="url(#clip0_940_3507)">
						<path d="M26 0H6C2.68629 0 0 2.68629 0 6V26C0 29.3137 2.68629 32 6 32H26C29.3137 32 32 29.3137 32 26V6C32 2.68629 29.3137 0 26 0Z"/>
					</g>
				</svg>
			</div>
			<p class="tw-text-center tw-text-text-black-950"><?php esc_html_e( 'Rounded', 'wc-category-showcase' ); ?></p>
		</div>
		<div class="tw-relative">
			<div class="wcc_showcase_image_layout_select <?php echo 'circle' === $showcase_details['image_layout'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
				<input type="radio" name="wcc_showcase_image_layout" class="!tw-hidden" value="<?php echo esc_attr( 'circle' ); ?>" <?php if ( 'circle' === $showcase_details['image_layout'] ) { echo 'checked'; } ?>>
				<svg class="<?php echo 'circle' === $showcase_details['image_layout'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 32 32" fill="currentColor">
					<g clip-path="url(#clip0_940_3505)">
						<path d="M32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16Z"/>
					</g>
				</svg>
			</div>
			<p class="tw-text-center tw-text-text-black-950"><?php esc_html_e( 'Circle', 'wc-category-showcase' ); ?></p>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Zoom on Hover', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Enable the zoom effect to occur when hovering over the images associated with each category. This won\'t applicable for the Grid/Overly layout only.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_image_zoom_on_hover" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( array_key_exists( 'image_zoom_on_hover', $showcase_details ) && 'yes' === $showcase_details['image_zoom_on_hover'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
