<?php
/**
 * Fonts settings tab.
 *
 * @package WooCommerceCategoryShowcase
 */

defined( 'ABSPATH' ) || exit;

$wccshowcase_font_google_support = 'yes';
$wccshowcase_font_main_title     = array(
	'text_tag'        => 'h2',
	'font_family'     => 'Roboto',
	'text_weight'     => 'default',
	'text_size'       => '14',
	'line_height'     => '16',
	'letter_spacing'  => '2',
	'text_align'      => 'left',
	'text_decoration' => 'bold',
	'text_color'      => '#000000',
);
$wccshowcase_font_category_title = array(
	'text_tag'        => 'h1',
	'font_family'     => 'Roboto',
	'text_weight'     => 'semibold',
	'text_size'       => '16',
	'line_height'     => '15',
	'letter_spacing'  => '6',
	'text_align'      => 'left',
	'text_decoration' => 'bold',
	'text_color'      => '#000000',
);

?>
<div class="wccshowcase-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.607 15.4393H20.2284C20.1275 14.93 19.9299 14.4452 19.6466 14.0117L20.628 13.0204C20.6645 12.9834 20.6935 12.9396 20.7133 12.8913C20.7331 12.8431 20.7433 12.7914 20.7433 12.7391C20.7433 12.6869 20.7331 12.6352 20.7133 12.5869C20.6935 12.5387 20.6645 12.4948 20.628 12.4579L20.0325 11.8563C19.9959 11.8194 19.9525 11.7901 19.9047 11.7701C19.857 11.7501 19.8058 11.7398 19.7541 11.7398C19.7024 11.7398 19.6512 11.7501 19.6034 11.7701C19.5556 11.7901 19.5122 11.8194 19.4757 11.8563L18.4955 12.8465C18.0664 12.5601 17.5865 12.3604 17.0823 12.2582V10.8661C17.0823 10.7607 17.0409 10.6595 16.967 10.585C16.8932 10.5104 16.7931 10.4685 16.6887 10.4685H15.8985C15.7941 10.4685 15.694 10.5104 15.6201 10.585C15.5463 10.6595 15.5048 10.7607 15.5048 10.8661V12.2588C15.0006 12.3609 14.5208 12.5607 14.0917 12.8471L13.1103 11.8551C13.0738 11.8182 13.0304 11.7889 12.9826 11.7689C12.9348 11.7489 12.8836 11.7386 12.8319 11.7386C12.7802 11.7386 12.729 11.7489 12.6812 11.7689C12.6335 11.7889 12.5901 11.8182 12.5535 11.8551L11.958 12.4567C11.9214 12.4936 11.8924 12.5375 11.8726 12.5857C11.8529 12.634 11.8427 12.6857 11.8427 12.7379C11.8427 12.7902 11.8529 12.8419 11.8726 12.8901C11.8924 12.9384 11.9214 12.9822 11.958 13.0192L12.9394 14.0105C12.6561 14.444 12.4585 14.9288 12.3576 15.4381H10.9778C10.8734 15.4381 10.7733 15.48 10.6995 15.5545C10.6257 15.6291 10.5842 15.7302 10.5842 15.8357V16.631C10.5842 16.7364 10.6257 16.8376 10.6995 16.9122C10.7733 16.9867 10.8734 17.0286 10.9778 17.0286H12.3564C12.4573 17.5379 12.6549 18.0227 12.9382 18.4561L11.9568 19.4493C11.9203 19.4863 11.8912 19.5301 11.8715 19.5784C11.8517 19.6266 11.8415 19.6783 11.8415 19.7306C11.8415 19.7828 11.8517 19.8345 11.8715 19.8828C11.8912 19.931 11.9203 19.9749 11.9568 20.0118L12.5523 20.6134C12.5889 20.6503 12.6323 20.6796 12.6801 20.6996C12.7278 20.7196 12.779 20.7299 12.8307 20.7299C12.8824 20.7299 12.9336 20.7196 12.9814 20.6996C13.0292 20.6796 13.0726 20.6503 13.1091 20.6134L14.0905 19.622C14.5196 19.9082 14.9995 20.1077 15.5036 20.2097V21.6024C15.5036 21.7078 15.5451 21.809 15.6189 21.8835C15.6928 21.9581 15.7929 22 15.8973 22H16.6845C16.7889 22 16.8891 21.9581 16.9629 21.8835C17.0367 21.809 17.0782 21.7078 17.0782 21.6024V20.2109C17.5823 20.1089 18.0622 19.9094 18.4913 19.6232L19.4727 20.6146C19.5092 20.6515 19.5526 20.6808 19.6004 20.7008C19.6482 20.7208 19.6994 20.7311 19.7511 20.7311C19.8028 20.7311 19.854 20.7208 19.9018 20.7008C19.9495 20.6808 19.9929 20.6515 20.0295 20.6146L20.625 20.013C20.6616 19.9761 20.6906 19.9322 20.7104 19.884C20.7301 19.8357 20.7403 19.784 20.7403 19.7318C20.7403 19.6795 20.7301 19.6278 20.7104 19.5796C20.6906 19.5313 20.6616 19.4875 20.625 19.4505L19.646 18.4604C19.9293 18.0269 20.1269 17.5421 20.2278 17.0328H21.6064C21.6581 17.0328 21.7092 17.0225 21.757 17.0026C21.8048 16.9826 21.8482 16.9533 21.8847 16.9164C21.9213 16.8794 21.9503 16.8356 21.97 16.7874C21.9898 16.7391 22 16.6874 22 16.6352V15.8369C22 15.7316 21.9586 15.6305 21.8849 15.556C21.8112 15.4814 21.7113 15.4394 21.607 15.4393ZM16.2921 18.4002C15.8681 18.4002 15.4536 18.2732 15.1011 18.0352C14.7485 17.7973 14.4737 17.459 14.3115 17.0633C14.1492 16.6676 14.1068 16.2321 14.1895 15.8121C14.2722 15.392 14.4764 15.0061 14.7762 14.7032C15.076 14.4003 15.458 14.1941 15.8739 14.1105C16.2897 14.0269 16.7208 14.0698 17.1125 14.2337C17.5042 14.3977 17.839 14.6752 18.0746 15.0314C18.3102 15.3875 18.4359 15.8062 18.4359 16.2345C18.4359 16.5189 18.3805 16.8006 18.2727 17.0633C18.165 17.3261 18.0071 17.5648 17.808 17.7659C17.6089 17.967 17.3726 18.1265 17.1125 18.2354C16.8524 18.3442 16.5736 18.4002 16.2921 18.4002Z" fill="#2270B1"/>
		<path d="M9.55337 18.6408H3.19101V6.60942H19.8651V9.98122C20.2906 10.2303 20.6897 10.5227 21.0561 10.8541V3.60157C21.0561 3.44202 20.9934 3.28901 20.8817 3.1762C20.77 3.06338 20.6186 3 20.4606 3H2.5955C2.43757 3 2.2861 3.06338 2.17442 3.1762C2.06274 3.28901 2 3.44202 2 3.60157V19.2424C2 19.4019 2.06274 19.555 2.17442 19.6678C2.2861 19.7806 2.43757 19.844 2.5955 19.844H10.1018C9.88298 19.4607 9.69939 19.058 9.55337 18.6408Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Fonts Settings', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wccshowcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccshowcase-settings-title"><?php esc_html_e( 'Google Fonts Support', 'wc-category-showcase' ); ?></h3>
		<p class="wccshowcase-settings-description"><?php esc_html_e( 'Enable or disable the integration of Google Fonts for customizing text styles and typography.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccshowcase_font_google_support" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $wccshowcase_font_google_support ) { echo 'checked'; } ?>>
			<div class="wccshowcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wccshowcase-settings-row-title"></div>
<div class="wccshowcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccshowcase-settings-title"><?php esc_html_e( 'Main Title', 'wc-category-showcase' ); ?></h3>
		<p class="wccshowcase-settings-description"><?php esc_html_e( 'Custom font styling for specific text elements within the plugin.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="tw-w-[348px] tw-h-[450px] tw-bg-input-grey-50 tw-rounded-md tw-p-4 wccshowcase-category-list-item">
			<div class="">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'DEFAULT TEXT TAG', 'wc-category-showcase' ); ?></h4>
				<div class="tw-flex tw-justify-around">
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'p' === $wccshowcase_font_main_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'p' ); ?>"><?php echo esc_attr( 'P' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h1' === $wccshowcase_font_main_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h1' ); ?>"><?php echo esc_attr( 'H1' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h2' === $wccshowcase_font_main_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h2' ); ?>"><?php echo esc_attr( 'H2' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h3' === $wccshowcase_font_main_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h3' ); ?>"><?php echo esc_attr( 'H3' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h4' === $wccshowcase_font_main_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h4' ); ?>"><?php echo esc_attr( 'H4' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h5' === $wccshowcase_font_main_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h5' ); ?>"><?php echo esc_attr( 'H5' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h6' === $wccshowcase_font_main_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h6' ); ?>"><?php echo esc_attr( 'H6' ); ?></p>
					</div>
					<input type="hidden" name="wccshowcase_font_main_title[text_tag]" value="<?php echo esc_attr( $wccshowcase_font_main_title['text_tag'] ); ?>">
				</div>
			</div>
			<div class="wccshowcase-settings-row-title tw-mt-3"></div>
			<div class="tw-mt-2">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'FONT FAMILY', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex tw-mt-2">
					<div class="select-wrapper wccshowcase-select-font-family">
						<div class="select wccshowcase-sort-order tw-w-[336px] tw-bg-white tw-border-divider-grey-100 tw-rounded-md">
							<div class="select__trigger tw-bg-white">
								<span class="tw-flex tw-items-center tw-gap-1 tw-text-text-grey-500">
									<?php esc_html_e( 'Roboto', 'wc-category-showcase' ); ?>
								</span>
								<div class="wccshowcase-arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" fill="none">
										<path d="M4.66663 10L7.99996 13.3333L11.3333 10" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M4.66663 6.00033L7.99996 2.66699L11.3333 6.00033" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</div>
							</div>
							<div class="custom-options tw-w-[336px] tw-bg-white tw-border-divider-grey-100 tw-rounded-md tw-hidden">
								<span class="custom-option <?php echo 'Roboto' === $wccshowcase_font_main_title['font_family'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'Roboto' ); ?>">
									<?php esc_html_e( 'Roboto', 'wc-category-showcase' ); ?>
								</span>
								<span class="custom-option <?php echo 'Italic' === $wccshowcase_font_main_title['font_family'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'Italic' ); ?>">
									<?php esc_html_e( 'Italic', 'wc-category-showcase' ); ?>
								</span>
								<span class="custom-option <?php echo 'Bengali' === $wccshowcase_font_main_title['font_family'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'Bengali' ); ?>">
									<?php esc_html_e( 'Bengali', 'wc-category-showcase' ); ?>
								</span>
							</div>
						</div>
						<input type="hidden" name="wccshowcase_font_main_title[font_family]" value="<?php echo esc_attr( $wccshowcase_font_main_title['font_family'] ); ?>">
					</div>
				</div>
			</div>
			<div class="tw-mt-2 tw-flex tw-gap-3">
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'TEXT WEIGHT', 'wc-category-showcase' ); ?></h4>
					<div class="tw-relative tw-flex tw-mt-2">
						<div class="select-wrapper wccshowcase-select-font-family">
							<div class="select wccshowcase-sort-order tw-w-[158px] tw-bg-white tw-border-divider-grey-100 tw-rounded-md">
								<div class="select__trigger tw-bg-white">
									<span class="tw-flex tw-items-center tw-gap-1 tw-text-text-grey-500">
										<?php esc_html_e( 'Default', 'wc-category-showcase' ); ?>
									</span>
									<div class="wccshowcase-arrow">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" fill="none">
											<path d="M4.66663 10L7.99996 13.3333L11.3333 10" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M4.66663 6.00033L7.99996 2.66699L11.3333 6.00033" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</div>
								</div>
								<div class="custom-options tw-w-[158px] tw-bg-white tw-border-divider-grey-100 tw-rounded-md tw-hidden">
									<span class="custom-option <?php echo 'default' === $wccshowcase_font_main_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'default' ); ?>">
										<?php esc_html_e( 'Default', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '100' === $wccshowcase_font_main_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '100' ); ?>">
										<?php esc_html_e( '100', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '200' === $wccshowcase_font_main_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '200' ); ?>">
										<?php esc_html_e( '200', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '300' === $wccshowcase_font_main_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '300' ); ?>">
										<?php esc_html_e( '300', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '400' === $wccshowcase_font_main_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '400' ); ?>">
										<?php esc_html_e( '400', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '500' === $wccshowcase_font_main_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '500' ); ?>">
										<?php esc_html_e( '500', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '600' === $wccshowcase_font_main_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '600' ); ?>">
										<?php esc_html_e( '600', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '700' === $wccshowcase_font_main_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '700' ); ?>">
										<?php esc_html_e( '700', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '800' === $wccshowcase_font_main_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '800' ); ?>">
										<?php esc_html_e( '800', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '900' === $wccshowcase_font_main_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '900' ); ?>">
										<?php esc_html_e( '900	', 'wc-category-showcase' ); ?>
									</span>
								</div>
							</div>
							<input type="hidden" name="wccshowcase_font_main_title[text_weight]" value="<?php echo esc_attr( $wccshowcase_font_main_title['text_weight'] ); ?>">
						</div>
					</div>
				</div>
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'SIZE', 'wc-category-showcase' ); ?></h4>
					<div class="tw-relative tw-flex tw-mt-2">
						<span class="tw-absolute tw-top-[10px] tw-left-[10px] wccshowcase-change-font-style tw-text-text-grey-500">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
								<path d="M7.75 10C7.8163 10 7.87989 10.0263 7.92678 10.0732C7.97366 10.1201 8 10.1837 8 10.25V11.75C8 11.8163 7.97366 11.8799 7.92678 11.9268C7.87989 11.9737 7.8163 12 7.75 12H7.25C7.1837 12 7.12011 11.9737 7.07322 11.9268C7.02634 11.8799 7 11.8163 7 11.75V11H5V16H5.75C5.8163 16 5.87989 16.0263 5.92678 16.0732C5.97366 16.1201 6 16.1837 6 16.25V16.75C6 16.8163 5.97366 16.8799 5.92678 16.9268C5.87989 16.9737 5.8163 17 5.75 17H3.25C3.1837 17 3.12011 16.9737 3.07322 16.9268C3.02634 16.8799 3 16.8163 3 16.75V16.25C3 16.1837 3.02634 16.1201 3.07322 16.0732C3.12011 16.0263 3.1837 16 3.25 16H4V11H2V11.75C2 11.8163 1.97366 11.8799 1.92678 11.9268C1.87989 11.9737 1.8163 12 1.75 12H1.25C1.1837 12 1.12011 11.9737 1.07322 11.9268C1.02634 11.8799 1 11.8163 1 11.75V10.25C1 10.1837 1.02634 10.1201 1.07322 10.0732C1.12011 10.0263 1.1837 10 1.25 10H7.75Z"/>
								<path d="M5.5 3C5.36739 3 5.24021 3.05268 5.14645 3.14645C5.05268 3.24021 5 3.36739 5 3.5V6.5C5 6.63261 5.05268 6.75979 5.14645 6.85355C5.24021 6.94732 5.36739 7 5.5 7H6.5C6.63261 7 6.75979 6.94732 6.85355 6.85355C6.94732 6.75979 7 6.63261 7 6.5V5H11V15H9.5C9.36739 15 9.24021 15.0527 9.14645 15.1464C9.05268 15.2402 9 15.3674 9 15.5V16.5C9 16.6326 9.05268 16.7598 9.14645 16.8536C9.24021 16.9473 9.36739 17 9.5 17H14.5C14.6326 17 14.7598 16.9473 14.8536 16.8536C14.9473 16.7598 15 16.6326 15 16.5V15.5C15 15.3674 14.9473 15.2402 14.8536 15.1464C14.7598 15.0527 14.6326 15 14.5 15H13V5H17V6.5C17 6.63261 17.0527 6.75979 17.1464 6.85355C17.2402 6.94732 17.3674 7 17.5 7H18.5C18.6326 7 18.7598 6.94732 18.8536 6.85355C18.9473 6.75979 19 6.63261 19 6.5V3.5C19 3.36739 18.9473 3.24021 18.8536 3.14645C18.7598 3.05268 18.6326 3 18.5 3H5.5Z"/>
							</svg>
						</span>
						<input class="wccshowcase-focus-color wccshowcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[40px] tw-p-2" type="number" name="wccshowcase_font_main_title[text_size]" value="<?php echo esc_attr( $wccshowcase_font_main_title['text_size'] ); ?>">
						<span class="tw-absolute tw-bg-input-grey-50 tw-py-[10px] tw-px-4 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'px' ); ?></span>
					</div>
				</div>
			</div>
			<div class="tw-mt-2 tw-flex tw-gap-3">
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'LINE HEIGHT', 'wc-category-showcase' ); ?></h4>
					<div class="tw-relative tw-flex tw-mt-2">
						<div class="tw-relative tw-flex">
							<span class="tw-absolute tw-top-[10px] tw-left-[10px] tw-text-text-grey-500">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
									<path d="M17.5 2.99996H7.5C7.22386 2.99996 7 3.22382 7 3.49996V4.49996C7 4.7761 7.22386 4.99996 7.5 4.99996H17.5C17.7761 4.99996 18 4.7761 18 4.49996V3.49996C18 3.22382 17.7761 2.99996 17.5 2.99996Z"/>
									<path d="M17.5 8.99996H7.5C7.22386 8.99996 7 9.22382 7 9.49996V10.5C7 10.7761 7.22386 11 7.5 11H17.5C17.7761 11 18 10.7761 18 10.5V9.49996C18 9.22382 17.7761 8.99996 17.5 8.99996Z"/>
									<path d="M17.5 15H7.5C7.22386 15 7 15.2238 7 15.5V16.5C7 16.7761 7.22386 17 7.5 17H17.5C17.7761 17 18 16.7761 18 16.5V15.5C18 15.2238 17.7761 15 17.5 15Z"/>
									<path d="M5.5 16H4.497L4.5 4.99996H5.503C5.5693 4.99996 5.63289 4.97362 5.67978 4.92674C5.72666 4.87985 5.753 4.81627 5.753 4.74996C5.753 4.71737 5.74651 4.6851 5.73389 4.65506C5.72127 4.62501 5.70278 4.59778 5.6795 4.57496L3.912 2.55646C3.86734 2.51995 3.81143 2.5 3.75375 2.5C3.69607 2.5 3.64016 2.51995 3.5955 2.55646L1.8275 4.57296C1.80416 4.59575 1.78559 4.62297 1.77288 4.65301C1.76018 4.68306 1.75359 4.71534 1.7535 4.74796C1.7535 4.81427 1.77984 4.87785 1.82672 4.92474C1.87361 4.97162 1.9372 4.99796 2.0035 4.99796H3.0075L3.0045 16H2C1.9337 16 1.87011 16.0263 1.82322 16.0732C1.77634 16.1201 1.75 16.1837 1.75 16.25C1.75 16.2826 1.75649 16.3148 1.76911 16.3449C1.78174 16.3749 1.80022 16.4021 1.8235 16.425L3.592 18.4415C3.63662 18.4778 3.69243 18.4977 3.75 18.4977C3.80757 18.4977 3.86338 18.4778 3.908 18.4415L5.676 16.425C5.69934 16.4022 5.71791 16.375 5.73062 16.3449C5.74332 16.3149 5.74991 16.2826 5.75 16.25C5.75 16.1837 5.72366 16.1201 5.67678 16.0732C5.62989 16.0263 5.5663 16 5.5 16Z"/>
								</svg>
							</span>
							<input class="wccshowcase-focus-color wccshowcase-focus-color wccshowcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[40px] tw-p-2" type="text" name="wccshowcase_font_main_title[line_height]" value="<?php echo esc_attr( $wccshowcase_font_main_title['line_height'] ); ?>">
							<span class="tw-absolute tw-bg-input-grey-50 tw-py-[10px] tw-px-4 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'px' ); ?></span>
						</div>
					</div>
				</div>
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'LETTER SPACING', 'wc-category-showcase' ); ?></h4>
					<div class="tw-relative tw-flex tw-mt-2">
						<span class="tw-absolute tw-top-[10px] tw-left-[10px] tw-text-text-grey-500">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
								<path d="M14.183 4.35C13.967 5.2545 13.283 7.2535 12.8785 8.482H15.5285C15.245 7.5905 14.467 5.2955 14.1965 4.35H14.183Z"/>
								<path d="M18.75 2H1.25C1.1837 2 1.12011 2.02634 1.07322 2.07322C1.02634 2.12011 1 2.1837 1 2.25V12.75C1 12.8163 1.02634 12.8799 1.07322 12.9268C1.12011 12.9737 1.1837 13 1.25 13H18.75C18.8163 13 18.8799 12.9737 18.9268 12.9268C18.9737 12.8799 19 12.8163 19 12.75V2.25C19 2.1837 18.9737 2.12011 18.9268 2.07322C18.8799 2.02634 18.8163 2 18.75 2ZM7.0365 11.7775C7.03089 11.8077 7.01367 11.8345 6.98853 11.8522C6.96338 11.8698 6.93232 11.877 6.902 11.872H5.335C5.30664 11.877 5.27742 11.8717 5.25271 11.8569C5.22799 11.8421 5.20945 11.8189 5.2005 11.7915L2.027 3.1215C2 3.054 2.027 3 2.1075 3H3.661C3.67341 2.99803 3.68609 2.99857 3.69828 3.00161C3.71047 3.00464 3.72192 3.0101 3.73196 3.01766C3.74199 3.02522 3.7504 3.03473 3.75668 3.04561C3.76296 3.05649 3.76698 3.06853 3.7685 3.081C5.05 6.633 5.929 9.2525 6.1725 10.25H6.2C6.5 9.197 7.1725 6.9 8.455 3.1065C8.482 3.0255 8.5095 2.9985 8.5765 2.9985H10.05C10.117 2.9985 10.1575 3.039 10.1305 3.12L7.0365 11.7775ZM16.7355 11.872C16.7074 11.8742 16.6792 11.8677 16.655 11.8533C16.6307 11.8389 16.6115 11.8173 16.6 11.7915L15.9335 9.872H12.477L11.8465 11.764C11.8403 11.7979 11.8212 11.828 11.7932 11.8482C11.7653 11.8683 11.7306 11.8768 11.6965 11.872H10.35C10.2685 11.872 10.2415 11.8315 10.2555 11.737L13.035 3.824C13.1193 3.59018 13.1604 3.34301 13.1565 3.0945C13.1565 3.0405 13.184 3 13.2375 3H15.1145C15.182 3 15.196 3.0135 15.209 3.081L18.3285 11.75C18.3425 11.8315 18.3285 11.872 18.25 11.872H16.7355ZM17.3615 16.075L15.3845 14.0935C15.3554 14.0661 15.3193 14.0473 15.2802 14.0392C15.2411 14.0311 15.2005 14.034 15.163 14.0476C15.1254 14.0612 15.0924 14.0849 15.0675 14.1161C15.0426 14.1473 15.0269 14.1849 15.022 14.2245V15.5075H4.978V14.2245C4.97315 14.1849 4.95741 14.1473 4.93252 14.1161C4.90763 14.0849 4.87457 14.0612 4.83701 14.0476C4.79945 14.034 4.75887 14.0311 4.71976 14.0392C4.68066 14.0473 4.64457 14.0661 4.6155 14.0935L2.6385 16.075C2.59178 16.1219 2.56555 16.1853 2.56555 16.2515C2.56555 16.3177 2.59178 16.3811 2.6385 16.428L4.616 18.414C4.6451 18.4414 4.68123 18.4602 4.72038 18.4683C4.75952 18.4763 4.80013 18.4734 4.8377 18.4598C4.87527 18.4461 4.90833 18.4224 4.93318 18.3911C4.95804 18.3598 4.97373 18.3222 4.9785 18.2825V17H15.022V18.2825C15.0268 18.3222 15.0425 18.3598 15.0673 18.3911C15.0922 18.4224 15.1252 18.4461 15.1628 18.4598C15.2004 18.4734 15.241 18.4763 15.2801 18.4683C15.3193 18.4602 15.3554 18.4414 15.3845 18.414L17.362 16.428C17.4086 16.3811 17.4348 16.3176 17.4347 16.2514C17.4346 16.1852 17.4083 16.1218 17.3615 16.075Z"/>
								<path d="M17.417 16.064L15.417 14.064C15.3714 14.0224 15.3117 13.9995 15.25 14C15.1837 14 15.1201 14.0263 15.0732 14.0732C15.0263 14.1201 15 14.1837 15 14.25V15.5H5V14.25C5 14.1837 4.97366 14.1201 4.92678 14.0732C4.87989 14.0263 4.8163 14 4.75 14C4.68871 14 4.62966 14.0231 4.5845 14.0645L2.5845 16.0645C2.55839 16.0879 2.53752 16.1166 2.52322 16.1487C2.50893 16.1807 2.50154 16.2154 2.50154 16.2505C2.50154 16.2856 2.50893 16.3203 2.52322 16.3523C2.53752 16.3844 2.55839 16.4131 2.5845 16.4365L4.5845 18.4365C4.62981 18.4776 4.68884 18.5002 4.75 18.5C4.8163 18.5 4.87989 18.4737 4.92678 18.4268C4.97366 18.3799 5 18.3163 5 18.25V17H15V18.25C15 18.3163 15.0263 18.3799 15.0732 18.4268C15.1201 18.4737 15.1837 18.5 15.25 18.5C15.3113 18.5 15.3703 18.4769 15.4155 18.4355L17.4155 16.4355C17.4416 16.4121 17.4625 16.3834 17.4768 16.3513C17.4911 16.3193 17.4985 16.2846 17.4985 16.2495C17.4985 16.2144 17.4911 16.1797 17.4768 16.1477C17.4625 16.1156 17.4416 16.0869 17.4155 16.0635L17.417 16.064Z"/>
							</svg>
						</span>
						<input class="wccshowcase-focus-color wccshowcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[40px] tw-p-2" type="text" name="wccshowcase_font_main_title[letter_spacing]" value="<?php echo esc_attr( $wccshowcase_font_main_title['letter_spacing'] ); ?>">
						<span class="tw-absolute tw-bg-input-grey-50 tw-py-[10px] tw-px-4 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'px' ); ?></span>
					</div>
				</div>
			</div>
			<div class="tw-mt-2 tw-flex tw-gap-3">
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'ALIGNMENT', 'wc-category-showcase' ); ?></h4>
					<div class="tw-flex tw-justify-between tw-mt-2">
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'left' === $wccshowcase_font_main_title['text_align'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'left' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
									<path d="M15.167 15H4.16699C3.89085 15 3.66699 15.2239 3.66699 15.5V16.5C3.66699 16.7761 3.89085 17 4.16699 17H15.167C15.4431 17 15.667 16.7761 15.667 16.5V15.5C15.667 15.2239 15.4431 15 15.167 15Z"/>
									<path d="M18.167 3H4.16699C3.89085 3 3.66699 3.22386 3.66699 3.5V4.5C3.66699 4.77614 3.89085 5 4.16699 5H18.167C18.4431 5 18.667 4.77614 18.667 4.5V3.5C18.667 3.22386 18.4431 3 18.167 3Z"/>
									<path d="M15.167 7H4.16699C3.89085 7 3.66699 7.22386 3.66699 7.5V8.5C3.66699 8.77614 3.89085 9 4.16699 9H15.167C15.4431 9 15.667 8.77614 15.667 8.5V7.5C15.667 7.22386 15.4431 7 15.167 7Z"/>
									<path d="M18.167 11H4.16699C3.89085 11 3.66699 11.2239 3.66699 11.5V12.5C3.66699 12.7761 3.89085 13 4.16699 13H18.167C18.4431 13 18.667 12.7761 18.667 12.5V11.5C18.667 11.2239 18.4431 11 18.167 11Z"/>
								</svg>
							</p>
						</div>
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'middle' === $wccshowcase_font_main_title['text_align'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'middle' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
									<path d="M14.5 15H5.5C5.22386 15 5 15.2239 5 15.5V16.5C5 16.7761 5.22386 17 5.5 17H14.5C14.7761 17 15 16.7761 15 16.5V15.5C15 15.2239 14.7761 15 14.5 15Z"/>
									<path d="M17.5 11H2.5C2.22386 11 2 11.2239 2 11.5V12.5C2 12.7761 2.22386 13 2.5 13H17.5C17.7761 13 18 12.7761 18 12.5V11.5C18 11.2239 17.7761 11 17.5 11Z"/>
									<path d="M17.5 3H2.5C2.22386 3 2 3.22386 2 3.5V4.5C2 4.77614 2.22386 5 2.5 5H17.5C17.7761 5 18 4.77614 18 4.5V3.5C18 3.22386 17.7761 3 17.5 3Z"/>
									<path d="M14.5 7H5.5C5.22386 7 5 7.22386 5 7.5V8.5C5 8.77614 5.22386 9 5.5 9H14.5C14.7761 9 15 8.77614 15 8.5V7.5C15 7.22386 14.7761 7 14.5 7Z"/>
								</svg>
							</p>
						</div>
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'right' === $wccshowcase_font_main_title['text_align'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'right' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
									<path d="M16.834 15H5.83398C5.55784 15 5.33398 15.2239 5.33398 15.5V16.5C5.33398 16.7761 5.55784 17 5.83398 17H16.834C17.1101 17 17.334 16.7761 17.334 16.5V15.5C17.334 15.2239 17.1101 15 16.834 15Z"/>
									<path d="M16.834 3H2.83398C2.55784 3 2.33398 3.22386 2.33398 3.5V4.5C2.33398 4.77614 2.55784 5 2.83398 5H16.834C17.1101 5 17.334 4.77614 17.334 4.5V3.5C17.334 3.22386 17.1101 3 16.834 3Z"/>
									<path d="M16.834 7H5.83398C5.55784 7 5.33398 7.22386 5.33398 7.5V8.5C5.33398 8.77614 5.55784 9 5.83398 9H16.834C17.1101 9 17.334 8.77614 17.334 8.5V7.5C17.334 7.22386 17.1101 7 16.834 7Z"/>
									<path d="M16.834 11H2.83398C2.55784 11 2.33398 11.2239 2.33398 11.5V12.5C2.33398 12.7761 2.55784 13 2.83398 13H16.834C17.1101 13 17.334 12.7761 17.334 12.5V11.5C17.334 11.2239 17.1101 11 16.834 11Z"/>
								</svg>
							</p>
						</div>
						<input type="hidden" name="wccshowcase_font_main_title[text_align]" value="<?php echo esc_attr( $wccshowcase_font_main_title['text_align'] ); ?>">
					</div>
				</div>
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'DECORATION', 'wc-category-showcase' ); ?></h4>
					<div class="tw-flex tw-justify-between tw-mt-2">
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'bold' === $wccshowcase_font_main_title['text_decoration'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'bold' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
									<path d="M4.66699 3.254C4.66699 3.148 4.68949 3.0845 4.80649 3.0635C5.64149 3.0425 7.75299 3 9.30899 3C14.159 3 14.901 5.3295 14.901 6.685C14.9094 7.22998 14.7798 7.76823 14.5243 8.24967C14.2687 8.7311 13.8956 9.14006 13.4395 9.4385C14.0949 9.70259 14.6567 10.1559 15.0535 10.7406C15.4502 11.3253 15.6638 12.0149 15.667 12.7215C15.667 15.39 13.138 17 9.30899 17C7.28999 17 5.71149 16.979 4.82899 16.9575C4.71349 16.9365 4.66699 16.873 4.66699 16.788V3.254ZM7.65599 8.991H9.33549C10.0087 8.98517 10.6811 9.03534 11.346 9.141C11.6244 8.89954 11.8445 8.59828 11.9901 8.25974C12.1356 7.9212 12.2028 7.55414 12.1865 7.186C12.1865 5.725 11.2135 5.007 9.40249 5.007C8.69499 5.007 8.12099 5.032 7.65599 5.032V8.991ZM7.65599 14.9765C8.14549 14.9975 8.70099 15.0185 9.36799 15.0185C11.456 15.0395 12.7895 14.365 12.7895 12.952C12.7895 12.087 12.3455 11.391 11.1895 11.1175C10.6938 11.005 10.1861 10.9546 9.67799 10.9675H7.65599V14.9765Z"/>
								</svg>
							</p>
						</div>
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'italic' === $wccshowcase_font_main_title['text_decoration'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'italic' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
									<path d="M9.84098 16.8315C9.82048 16.938 9.80098 16.9815 9.69998 16.9815H7.65998C7.55998 16.9815 7.52048 16.96 7.53998 16.811L9.78048 3.1275C9.80098 3.021 9.86048 3 9.92098 3H11.9815C12.1015 3 12.121 3.0635 12.121 3.17L9.84098 16.8315Z"/>
								</svg>
							</p>
						</div>
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'underline' === $wccshowcase_font_main_title['text_decoration'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'underline' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
									<path d="M15.584 15.9999H5.08398C4.94591 15.9999 4.83398 16.1118 4.83398 16.2499V16.7499C4.83398 16.8879 4.94591 16.9999 5.08398 16.9999H15.584C15.7221 16.9999 15.834 16.8879 15.834 16.7499V16.2499C15.834 16.1118 15.7221 15.9999 15.584 15.9999Z"/>
									<path d="M12.584 3.00586C12.5177 3.00586 12.4541 3.0322 12.4072 3.07908C12.3603 3.12597 12.334 3.18956 12.334 3.25586V10.0059C12.334 10.0059 12.575 13.1059 9.83398 13.1059C7.10448 13.1059 7.33398 10.0059 7.33398 10.0059V3.25586C7.33398 3.18956 7.30765 3.12597 7.26076 3.07908C7.21388 3.0322 7.15029 3.00586 7.08398 3.00586H5.58398C5.51768 3.00586 5.45409 3.0322 5.40721 3.07908C5.36032 3.12597 5.33398 3.18956 5.33398 3.25586V10.0059C5.33398 10.7119 5.26348 15.0059 9.83398 15.0059C14.4045 15.0059 14.334 10.4999 14.334 9.99386V3.25586C14.334 3.18956 14.3076 3.12597 14.2608 3.07908C14.2139 3.0322 14.1503 3.00586 14.084 3.00586H12.584Z"/>
								</svg>
							</p>
						</div>
						<input type="hidden" name="wccshowcase_font_main_title[text_decoration]" value="<?php echo esc_attr( $wccshowcase_font_main_title['text_decoration'] ); ?>">
					</div>
				</div>
			</div>
			<div class="wccshowcase-settings-row-title tw-mt-3"></div>
			<div class="tw-mt-2">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'COLOR', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex tw-mt-2">
					<span class="tw-p-3 tw-bg-[#000000] tw-absolute tw-top-[6px] tw-left-[8px] tw-rounded-[50%] wccshowcase-change-font-style"></span>
					<input class="wccshowcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" name="wccshowcase_font_main_title[text_style]" value="<?php echo esc_attr( $wccshowcase_font_main_title['text_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wccshowcase-settings-row-title"></div>
<div class="wccshowcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccshowcase-settings-title"><?php esc_html_e( 'Category Title', 'wc-category-showcase' ); ?></h3>
		<p class="wccshowcase-settings-description"><?php esc_html_e( 'Custom font styling for specific text elements within the plugin.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="tw-w-[348px] tw-h-[450px] tw-bg-input-grey-50 tw-rounded-md tw-p-4 wccshowcase-category-list-item">
			<div class="">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'DEFAULT TEXT TAG', 'wc-category-showcase' ); ?></h4>
				<div class="tw-flex tw-justify-around">
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'p' === $wccshowcase_font_category_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'p' ); ?>"><?php echo esc_attr( 'P' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h1' === $wccshowcase_font_category_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h1' ); ?>"><?php echo esc_attr( 'H1' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h2' === $wccshowcase_font_category_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h2' ); ?>"><?php echo esc_attr( 'H2' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h3' === $wccshowcase_font_category_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h3' ); ?>"><?php echo esc_attr( 'H3' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h4' === $wccshowcase_font_category_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h4' ); ?>"><?php echo esc_attr( 'H4' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h5' === $wccshowcase_font_category_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h5' ); ?>"><?php echo esc_attr( 'H5' ); ?></p>
					</div>
					<div class="wccshowcase-choose-style-tag">
						<p class="wccshowcase-font-tag-select <?php echo 'h6' === $wccshowcase_font_category_title['text_tag'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'h6' ); ?>"><?php echo esc_attr( 'H6' ); ?></p>
					</div>
					<input type="hidden" name="wccshowcase_font_category_title[text_tag]" value="<?php echo esc_attr( $wccshowcase_font_category_title['text_tag'] ); ?>">
				</div>
			</div>
			<div class="wccshowcase-settings-row-title tw-mt-3"></div>
			<div class="tw-mt-2">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'FONT FAMILY', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex tw-mt-2">
					<div class="select-wrapper wccshowcase-select-font-family">
						<div class="select wccshowcase-sort-order tw-w-[336px] tw-bg-white tw-border-divider-grey-100 tw-rounded-md">
							<div class="select__trigger tw-bg-white">
								<span class="tw-flex tw-items-center tw-gap-1 tw-text-text-grey-500">
									<?php esc_html_e( 'Roboto', 'wc-category-showcase' ); ?>
								</span>
								<div class="wccshowcase-arrow">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" fill="none">
										<path d="M4.66663 10L7.99996 13.3333L11.3333 10" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M4.66663 6.00033L7.99996 2.66699L11.3333 6.00033" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</div>
							</div>
							<div class="custom-options tw-w-[336px] tw-bg-white tw-border-divider-grey-100 tw-rounded-md tw-hidden">
								<span class="custom-option <?php echo 'Roboto' === $wccshowcase_font_main_title['font_family'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'Roboto' ); ?>">
									<?php esc_html_e( 'Roboto', 'wc-category-showcase' ); ?>
								</span>
								<span class="custom-option <?php echo 'Italic' === $wccshowcase_font_main_title['font_family'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'Italic' ); ?>">
									<?php esc_html_e( 'Italic', 'wc-category-showcase' ); ?>
								</span>
								<span class="custom-option <?php echo 'Bengali' === $wccshowcase_font_main_title['font_family'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'Bengali' ); ?>">
									<?php esc_html_e( 'Bengali', 'wc-category-showcase' ); ?>
								</span>
							</div>
						</div>
						<input type="hidden" name="wccshowcase_font_category_title[font_family]" value="<?php echo esc_attr( $wccshowcase_font_category_title['font_family'] ); ?>">
					</div>
				</div>
			</div>
			<div class="tw-mt-2 tw-flex tw-gap-3">
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'TEXT WEIGHT', 'wc-category-showcase' ); ?></h4>
					<div class="tw-relative tw-flex tw-mt-2">
						<div class="select-wrapper wccshowcase-select-font-family">
							<div class="select wccshowcase-sort-order tw-w-[158px] tw-bg-white tw-border-divider-grey-100 tw-rounded-md">
								<div class="select__trigger tw-bg-white">
									<span class="tw-flex tw-items-center tw-gap-1 tw-text-text-grey-500">
										<?php esc_html_e( 'Default', 'wc-category-showcase' ); ?>
									</span>
									<div class="wccshowcase-arrow">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" fill="none">
											<path d="M4.66663 10L7.99996 13.3333L11.3333 10" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M4.66663 6.00033L7.99996 2.66699L11.3333 6.00033" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</div>
								</div>
								<div class="custom-options tw-w-[158px] tw-bg-white tw-border-divider-grey-100 tw-rounded-md tw-hidden">
									<span class="custom-option <?php echo 'default' === $wccshowcase_font_category_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'default' ); ?>">
										<?php esc_html_e( 'Default', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '100' === $wccshowcase_font_category_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '100' ); ?>">
										<?php esc_html_e( '100', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '200' === $wccshowcase_font_category_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '200' ); ?>">
										<?php esc_html_e( '200', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '300' === $wccshowcase_font_category_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '300' ); ?>">
										<?php esc_html_e( '300', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '400' === $wccshowcase_font_category_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '400' ); ?>">
										<?php esc_html_e( '400', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '500' === $wccshowcase_font_category_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '500' ); ?>">
										<?php esc_html_e( '500', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '600' === $wccshowcase_font_category_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '600' ); ?>">
										<?php esc_html_e( '600', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '700' === $wccshowcase_font_category_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '700' ); ?>">
										<?php esc_html_e( '700', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '800' === $wccshowcase_font_category_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '800' ); ?>">
										<?php esc_html_e( '800', 'wc-category-showcase' ); ?>
									</span>
									<span class="custom-option <?php echo '900' === $wccshowcase_font_category_title['text_weight'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( '900' ); ?>">
										<?php esc_html_e( '900	', 'wc-category-showcase' ); ?>
									</span>
								</div>
							</div>
							<input type="hidden" name="wccshowcase_font_category_title[text_weight]" value="<?php echo esc_attr( $wccshowcase_font_category_title['text_weight'] ); ?>">
						</div>
					</div>
				</div>
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'SIZE', 'wc-category-showcase' ); ?></h4>
					<div class="tw-relative tw-flex tw-mt-2">
						<span class="tw-absolute tw-top-[10px] tw-left-[10px] wccshowcase-change-font-style tw-text-text-grey-500">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
								<path d="M7.75 10C7.8163 10 7.87989 10.0263 7.92678 10.0732C7.97366 10.1201 8 10.1837 8 10.25V11.75C8 11.8163 7.97366 11.8799 7.92678 11.9268C7.87989 11.9737 7.8163 12 7.75 12H7.25C7.1837 12 7.12011 11.9737 7.07322 11.9268C7.02634 11.8799 7 11.8163 7 11.75V11H5V16H5.75C5.8163 16 5.87989 16.0263 5.92678 16.0732C5.97366 16.1201 6 16.1837 6 16.25V16.75C6 16.8163 5.97366 16.8799 5.92678 16.9268C5.87989 16.9737 5.8163 17 5.75 17H3.25C3.1837 17 3.12011 16.9737 3.07322 16.9268C3.02634 16.8799 3 16.8163 3 16.75V16.25C3 16.1837 3.02634 16.1201 3.07322 16.0732C3.12011 16.0263 3.1837 16 3.25 16H4V11H2V11.75C2 11.8163 1.97366 11.8799 1.92678 11.9268C1.87989 11.9737 1.8163 12 1.75 12H1.25C1.1837 12 1.12011 11.9737 1.07322 11.9268C1.02634 11.8799 1 11.8163 1 11.75V10.25C1 10.1837 1.02634 10.1201 1.07322 10.0732C1.12011 10.0263 1.1837 10 1.25 10H7.75Z"/>
								<path d="M5.5 3C5.36739 3 5.24021 3.05268 5.14645 3.14645C5.05268 3.24021 5 3.36739 5 3.5V6.5C5 6.63261 5.05268 6.75979 5.14645 6.85355C5.24021 6.94732 5.36739 7 5.5 7H6.5C6.63261 7 6.75979 6.94732 6.85355 6.85355C6.94732 6.75979 7 6.63261 7 6.5V5H11V15H9.5C9.36739 15 9.24021 15.0527 9.14645 15.1464C9.05268 15.2402 9 15.3674 9 15.5V16.5C9 16.6326 9.05268 16.7598 9.14645 16.8536C9.24021 16.9473 9.36739 17 9.5 17H14.5C14.6326 17 14.7598 16.9473 14.8536 16.8536C14.9473 16.7598 15 16.6326 15 16.5V15.5C15 15.3674 14.9473 15.2402 14.8536 15.1464C14.7598 15.0527 14.6326 15 14.5 15H13V5H17V6.5C17 6.63261 17.0527 6.75979 17.1464 6.85355C17.2402 6.94732 17.3674 7 17.5 7H18.5C18.6326 7 18.7598 6.94732 18.8536 6.85355C18.9473 6.75979 19 6.63261 19 6.5V3.5C19 3.36739 18.9473 3.24021 18.8536 3.14645C18.7598 3.05268 18.6326 3 18.5 3H5.5Z"/>
							</svg>
						</span>
						<input class="wccshowcase-focus-color wccshowcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[40px] tw-p-2" type="number" name="wccshowcase_font_category_title[text_size]" value="<?php echo esc_attr( $wccshowcase_font_category_title['text_size'] ); ?>">
						<span class="tw-absolute tw-bg-input-grey-50 tw-py-[10px] tw-px-4 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'px' ); ?></span>
					</div>
				</div>
			</div>
			<div class="tw-mt-2 tw-flex tw-gap-3">
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'LINE HEIGHT', 'wc-category-showcase' ); ?></h4>
					<div class="tw-relative tw-flex tw-mt-2">
						<div class="tw-relative tw-flex">
							<span class="tw-absolute tw-top-[10px] tw-left-[10px] tw-text-text-grey-500">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
									<path d="M17.5 2.99996H7.5C7.22386 2.99996 7 3.22382 7 3.49996V4.49996C7 4.7761 7.22386 4.99996 7.5 4.99996H17.5C17.7761 4.99996 18 4.7761 18 4.49996V3.49996C18 3.22382 17.7761 2.99996 17.5 2.99996Z"/>
									<path d="M17.5 8.99996H7.5C7.22386 8.99996 7 9.22382 7 9.49996V10.5C7 10.7761 7.22386 11 7.5 11H17.5C17.7761 11 18 10.7761 18 10.5V9.49996C18 9.22382 17.7761 8.99996 17.5 8.99996Z"/>
									<path d="M17.5 15H7.5C7.22386 15 7 15.2238 7 15.5V16.5C7 16.7761 7.22386 17 7.5 17H17.5C17.7761 17 18 16.7761 18 16.5V15.5C18 15.2238 17.7761 15 17.5 15Z"/>
									<path d="M5.5 16H4.497L4.5 4.99996H5.503C5.5693 4.99996 5.63289 4.97362 5.67978 4.92674C5.72666 4.87985 5.753 4.81627 5.753 4.74996C5.753 4.71737 5.74651 4.6851 5.73389 4.65506C5.72127 4.62501 5.70278 4.59778 5.6795 4.57496L3.912 2.55646C3.86734 2.51995 3.81143 2.5 3.75375 2.5C3.69607 2.5 3.64016 2.51995 3.5955 2.55646L1.8275 4.57296C1.80416 4.59575 1.78559 4.62297 1.77288 4.65301C1.76018 4.68306 1.75359 4.71534 1.7535 4.74796C1.7535 4.81427 1.77984 4.87785 1.82672 4.92474C1.87361 4.97162 1.9372 4.99796 2.0035 4.99796H3.0075L3.0045 16H2C1.9337 16 1.87011 16.0263 1.82322 16.0732C1.77634 16.1201 1.75 16.1837 1.75 16.25C1.75 16.2826 1.75649 16.3148 1.76911 16.3449C1.78174 16.3749 1.80022 16.4021 1.8235 16.425L3.592 18.4415C3.63662 18.4778 3.69243 18.4977 3.75 18.4977C3.80757 18.4977 3.86338 18.4778 3.908 18.4415L5.676 16.425C5.69934 16.4022 5.71791 16.375 5.73062 16.3449C5.74332 16.3149 5.74991 16.2826 5.75 16.25C5.75 16.1837 5.72366 16.1201 5.67678 16.0732C5.62989 16.0263 5.5663 16 5.5 16Z"/>
								</svg>
							</span>
							<input class="wccshowcase-focus-color wccshowcase-focus-color wccshowcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[40px] tw-p-2" type="number" name="wccshowcase_font_category_title[line_height]" value="<?php echo esc_attr( $wccshowcase_font_category_title['line_height'] ); ?>">
							<span class="tw-absolute tw-bg-input-grey-50 tw-py-[10px] tw-px-4 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'px' ); ?></span>
						</div>
					</div>
				</div>
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'LETTER SPACING', 'wc-category-showcase' ); ?></h4>
					<div class="tw-relative tw-flex tw-mt-2">
						<span class="tw-absolute tw-top-[10px] tw-left-[10px] tw-text-text-grey-500">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
								<path d="M14.183 4.35C13.967 5.2545 13.283 7.2535 12.8785 8.482H15.5285C15.245 7.5905 14.467 5.2955 14.1965 4.35H14.183Z"/>
								<path d="M18.75 2H1.25C1.1837 2 1.12011 2.02634 1.07322 2.07322C1.02634 2.12011 1 2.1837 1 2.25V12.75C1 12.8163 1.02634 12.8799 1.07322 12.9268C1.12011 12.9737 1.1837 13 1.25 13H18.75C18.8163 13 18.8799 12.9737 18.9268 12.9268C18.9737 12.8799 19 12.8163 19 12.75V2.25C19 2.1837 18.9737 2.12011 18.9268 2.07322C18.8799 2.02634 18.8163 2 18.75 2ZM7.0365 11.7775C7.03089 11.8077 7.01367 11.8345 6.98853 11.8522C6.96338 11.8698 6.93232 11.877 6.902 11.872H5.335C5.30664 11.877 5.27742 11.8717 5.25271 11.8569C5.22799 11.8421 5.20945 11.8189 5.2005 11.7915L2.027 3.1215C2 3.054 2.027 3 2.1075 3H3.661C3.67341 2.99803 3.68609 2.99857 3.69828 3.00161C3.71047 3.00464 3.72192 3.0101 3.73196 3.01766C3.74199 3.02522 3.7504 3.03473 3.75668 3.04561C3.76296 3.05649 3.76698 3.06853 3.7685 3.081C5.05 6.633 5.929 9.2525 6.1725 10.25H6.2C6.5 9.197 7.1725 6.9 8.455 3.1065C8.482 3.0255 8.5095 2.9985 8.5765 2.9985H10.05C10.117 2.9985 10.1575 3.039 10.1305 3.12L7.0365 11.7775ZM16.7355 11.872C16.7074 11.8742 16.6792 11.8677 16.655 11.8533C16.6307 11.8389 16.6115 11.8173 16.6 11.7915L15.9335 9.872H12.477L11.8465 11.764C11.8403 11.7979 11.8212 11.828 11.7932 11.8482C11.7653 11.8683 11.7306 11.8768 11.6965 11.872H10.35C10.2685 11.872 10.2415 11.8315 10.2555 11.737L13.035 3.824C13.1193 3.59018 13.1604 3.34301 13.1565 3.0945C13.1565 3.0405 13.184 3 13.2375 3H15.1145C15.182 3 15.196 3.0135 15.209 3.081L18.3285 11.75C18.3425 11.8315 18.3285 11.872 18.25 11.872H16.7355ZM17.3615 16.075L15.3845 14.0935C15.3554 14.0661 15.3193 14.0473 15.2802 14.0392C15.2411 14.0311 15.2005 14.034 15.163 14.0476C15.1254 14.0612 15.0924 14.0849 15.0675 14.1161C15.0426 14.1473 15.0269 14.1849 15.022 14.2245V15.5075H4.978V14.2245C4.97315 14.1849 4.95741 14.1473 4.93252 14.1161C4.90763 14.0849 4.87457 14.0612 4.83701 14.0476C4.79945 14.034 4.75887 14.0311 4.71976 14.0392C4.68066 14.0473 4.64457 14.0661 4.6155 14.0935L2.6385 16.075C2.59178 16.1219 2.56555 16.1853 2.56555 16.2515C2.56555 16.3177 2.59178 16.3811 2.6385 16.428L4.616 18.414C4.6451 18.4414 4.68123 18.4602 4.72038 18.4683C4.75952 18.4763 4.80013 18.4734 4.8377 18.4598C4.87527 18.4461 4.90833 18.4224 4.93318 18.3911C4.95804 18.3598 4.97373 18.3222 4.9785 18.2825V17H15.022V18.2825C15.0268 18.3222 15.0425 18.3598 15.0673 18.3911C15.0922 18.4224 15.1252 18.4461 15.1628 18.4598C15.2004 18.4734 15.241 18.4763 15.2801 18.4683C15.3193 18.4602 15.3554 18.4414 15.3845 18.414L17.362 16.428C17.4086 16.3811 17.4348 16.3176 17.4347 16.2514C17.4346 16.1852 17.4083 16.1218 17.3615 16.075Z"/>
								<path d="M17.417 16.064L15.417 14.064C15.3714 14.0224 15.3117 13.9995 15.25 14C15.1837 14 15.1201 14.0263 15.0732 14.0732C15.0263 14.1201 15 14.1837 15 14.25V15.5H5V14.25C5 14.1837 4.97366 14.1201 4.92678 14.0732C4.87989 14.0263 4.8163 14 4.75 14C4.68871 14 4.62966 14.0231 4.5845 14.0645L2.5845 16.0645C2.55839 16.0879 2.53752 16.1166 2.52322 16.1487C2.50893 16.1807 2.50154 16.2154 2.50154 16.2505C2.50154 16.2856 2.50893 16.3203 2.52322 16.3523C2.53752 16.3844 2.55839 16.4131 2.5845 16.4365L4.5845 18.4365C4.62981 18.4776 4.68884 18.5002 4.75 18.5C4.8163 18.5 4.87989 18.4737 4.92678 18.4268C4.97366 18.3799 5 18.3163 5 18.25V17H15V18.25C15 18.3163 15.0263 18.3799 15.0732 18.4268C15.1201 18.4737 15.1837 18.5 15.25 18.5C15.3113 18.5 15.3703 18.4769 15.4155 18.4355L17.4155 16.4355C17.4416 16.4121 17.4625 16.3834 17.4768 16.3513C17.4911 16.3193 17.4985 16.2846 17.4985 16.2495C17.4985 16.2144 17.4911 16.1797 17.4768 16.1477C17.4625 16.1156 17.4416 16.0869 17.4155 16.0635L17.417 16.064Z"/>
							</svg>
						</span>
						<input class="wccshowcase-focus-color wccshowcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[40px] tw-p-2" type="number" name="wccshowcase_font_category_title[letter_spacing]" value="<?php echo esc_attr( $wccshowcase_font_category_title['letter_spacing'] ); ?>">
						<span class="tw-absolute tw-bg-input-grey-50 tw-py-[10px] tw-px-4 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'px' ); ?></span>
					</div>
				</div>
			</div>
			<div class="tw-mt-2 tw-flex tw-gap-3">
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'ALIGNMENT', 'wc-category-showcase' ); ?></h4>
					<div class="tw-flex tw-justify-between tw-mt-2">
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'left' === $wccshowcase_font_category_title['text_align'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'left' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
									<path d="M15.167 15H4.16699C3.89085 15 3.66699 15.2239 3.66699 15.5V16.5C3.66699 16.7761 3.89085 17 4.16699 17H15.167C15.4431 17 15.667 16.7761 15.667 16.5V15.5C15.667 15.2239 15.4431 15 15.167 15Z"/>
									<path d="M18.167 3H4.16699C3.89085 3 3.66699 3.22386 3.66699 3.5V4.5C3.66699 4.77614 3.89085 5 4.16699 5H18.167C18.4431 5 18.667 4.77614 18.667 4.5V3.5C18.667 3.22386 18.4431 3 18.167 3Z"/>
									<path d="M15.167 7H4.16699C3.89085 7 3.66699 7.22386 3.66699 7.5V8.5C3.66699 8.77614 3.89085 9 4.16699 9H15.167C15.4431 9 15.667 8.77614 15.667 8.5V7.5C15.667 7.22386 15.4431 7 15.167 7Z"/>
									<path d="M18.167 11H4.16699C3.89085 11 3.66699 11.2239 3.66699 11.5V12.5C3.66699 12.7761 3.89085 13 4.16699 13H18.167C18.4431 13 18.667 12.7761 18.667 12.5V11.5C18.667 11.2239 18.4431 11 18.167 11Z"/>
								</svg>
							</p>
						</div>
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'middle' === $wccshowcase_font_category_title['text_align'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'middle' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
									<path d="M14.5 15H5.5C5.22386 15 5 15.2239 5 15.5V16.5C5 16.7761 5.22386 17 5.5 17H14.5C14.7761 17 15 16.7761 15 16.5V15.5C15 15.2239 14.7761 15 14.5 15Z"/>
									<path d="M17.5 11H2.5C2.22386 11 2 11.2239 2 11.5V12.5C2 12.7761 2.22386 13 2.5 13H17.5C17.7761 13 18 12.7761 18 12.5V11.5C18 11.2239 17.7761 11 17.5 11Z"/>
									<path d="M17.5 3H2.5C2.22386 3 2 3.22386 2 3.5V4.5C2 4.77614 2.22386 5 2.5 5H17.5C17.7761 5 18 4.77614 18 4.5V3.5C18 3.22386 17.7761 3 17.5 3Z"/>
									<path d="M14.5 7H5.5C5.22386 7 5 7.22386 5 7.5V8.5C5 8.77614 5.22386 9 5.5 9H14.5C14.7761 9 15 8.77614 15 8.5V7.5C15 7.22386 14.7761 7 14.5 7Z"/>
								</svg>
							</p>
						</div>
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'right' === $wccshowcase_font_category_title['text_align'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'right' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
									<path d="M16.834 15H5.83398C5.55784 15 5.33398 15.2239 5.33398 15.5V16.5C5.33398 16.7761 5.55784 17 5.83398 17H16.834C17.1101 17 17.334 16.7761 17.334 16.5V15.5C17.334 15.2239 17.1101 15 16.834 15Z"/>
									<path d="M16.834 3H2.83398C2.55784 3 2.33398 3.22386 2.33398 3.5V4.5C2.33398 4.77614 2.55784 5 2.83398 5H16.834C17.1101 5 17.334 4.77614 17.334 4.5V3.5C17.334 3.22386 17.1101 3 16.834 3Z"/>
									<path d="M16.834 7H5.83398C5.55784 7 5.33398 7.22386 5.33398 7.5V8.5C5.33398 8.77614 5.55784 9 5.83398 9H16.834C17.1101 9 17.334 8.77614 17.334 8.5V7.5C17.334 7.22386 17.1101 7 16.834 7Z"/>
									<path d="M16.834 11H2.83398C2.55784 11 2.33398 11.2239 2.33398 11.5V12.5C2.33398 12.7761 2.55784 13 2.83398 13H16.834C17.1101 13 17.334 12.7761 17.334 12.5V11.5C17.334 11.2239 17.1101 11 16.834 11Z"/>
								</svg>
							</p>
						</div>
						<input type="hidden" name="wccshowcase_font_category_title[text_align]" value="<?php echo esc_attr( $wccshowcase_font_category_title['text_align'] ); ?>">
					</div>
				</div>
				<div class="tw-w-1/2">
					<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'DECORATION', 'wc-category-showcase' ); ?></h4>
					<div class="tw-flex tw-justify-between tw-mt-2">
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'bold' === $wccshowcase_font_category_title['text_decoration'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'bold' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
									<path d="M4.66699 3.254C4.66699 3.148 4.68949 3.0845 4.80649 3.0635C5.64149 3.0425 7.75299 3 9.30899 3C14.159 3 14.901 5.3295 14.901 6.685C14.9094 7.22998 14.7798 7.76823 14.5243 8.24967C14.2687 8.7311 13.8956 9.14006 13.4395 9.4385C14.0949 9.70259 14.6567 10.1559 15.0535 10.7406C15.4502 11.3253 15.6638 12.0149 15.667 12.7215C15.667 15.39 13.138 17 9.30899 17C7.28999 17 5.71149 16.979 4.82899 16.9575C4.71349 16.9365 4.66699 16.873 4.66699 16.788V3.254ZM7.65599 8.991H9.33549C10.0087 8.98517 10.6811 9.03534 11.346 9.141C11.6244 8.89954 11.8445 8.59828 11.9901 8.25974C12.1356 7.9212 12.2028 7.55414 12.1865 7.186C12.1865 5.725 11.2135 5.007 9.40249 5.007C8.69499 5.007 8.12099 5.032 7.65599 5.032V8.991ZM7.65599 14.9765C8.14549 14.9975 8.70099 15.0185 9.36799 15.0185C11.456 15.0395 12.7895 14.365 12.7895 12.952C12.7895 12.087 12.3455 11.391 11.1895 11.1175C10.6938 11.005 10.1861 10.9546 9.67799 10.9675H7.65599V14.9765Z"/>
								</svg>
							</p>
						</div>
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'italic' === $wccshowcase_font_category_title['text_decoration'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'italic' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
									<path d="M9.84098 16.8315C9.82048 16.938 9.80098 16.9815 9.69998 16.9815H7.65998C7.55998 16.9815 7.52048 16.96 7.53998 16.811L9.78048 3.1275C9.80098 3.021 9.86048 3 9.92098 3H11.9815C12.1015 3 12.121 3.0635 12.121 3.17L9.84098 16.8315Z"/>
								</svg>
							</p>
						</div>
						<div class="wccshowcase-choose-style-tag tw-w-1/3">
							<p class="wccshowcase-font-design-select <?php echo 'underline' === $wccshowcase_font_category_title['text_decoration'] ? 'active' : ''; ?>" data-value="<?php echo esc_attr( 'underline' ); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
									<path d="M15.584 15.9999H5.08398C4.94591 15.9999 4.83398 16.1118 4.83398 16.2499V16.7499C4.83398 16.8879 4.94591 16.9999 5.08398 16.9999H15.584C15.7221 16.9999 15.834 16.8879 15.834 16.7499V16.2499C15.834 16.1118 15.7221 15.9999 15.584 15.9999Z"/>
									<path d="M12.584 3.00586C12.5177 3.00586 12.4541 3.0322 12.4072 3.07908C12.3603 3.12597 12.334 3.18956 12.334 3.25586V10.0059C12.334 10.0059 12.575 13.1059 9.83398 13.1059C7.10448 13.1059 7.33398 10.0059 7.33398 10.0059V3.25586C7.33398 3.18956 7.30765 3.12597 7.26076 3.07908C7.21388 3.0322 7.15029 3.00586 7.08398 3.00586H5.58398C5.51768 3.00586 5.45409 3.0322 5.40721 3.07908C5.36032 3.12597 5.33398 3.18956 5.33398 3.25586V10.0059C5.33398 10.7119 5.26348 15.0059 9.83398 15.0059C14.4045 15.0059 14.334 10.4999 14.334 9.99386V3.25586C14.334 3.18956 14.3076 3.12597 14.2608 3.07908C14.2139 3.0322 14.1503 3.00586 14.084 3.00586H12.584Z"/>
								</svg>
							</p>
						</div>
						<input type="hidden" name="wccshowcase_font_category_title[text_decoration]" value="<?php echo esc_attr( $wccshowcase_font_category_title['text_decoration'] ); ?>">
					</div>
				</div>
			</div>
			<div class="wccshowcase-settings-row-title tw-mt-3"></div>
			<div class="tw-mt-2">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'COLOR', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex tw-mt-2">
					<span class="tw-p-3 tw-bg-[#000000] tw-absolute tw-top-[6px] tw-left-[8px] tw-rounded-[50%] wccshowcase-change-font-style"></span>
					<input class="wccshowcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" name="wccshowcase_font_category_title[text_style]" value="<?php echo esc_attr( $wccshowcase_font_category_title['text_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
