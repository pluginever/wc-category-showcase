<?php
/**
 * General settings tab.
 *
 * @package WooCommerceCategoryShowcase
 */

defined( 'ABSPATH' ) || exit;

$wcss_showcase_layout          = 'block';
$wccs_pre_loader               = 'yes';
$wccs_number_of_grid_column    = 3;
$wccs_number_of_block_column   = 2;
$wccs_column_adjustment        = 'yes';
$wccs_hide_empty_categories    = 'yes';
$wccs_includes_sub_categories  = 'yes';
$wcss_category_display_limit   = 12;
$wccs_block_slider_category    = array( 17 );
$wccs_specific_category_select = array();
$wccs_category_filter          = 'all';
$wccs_display_mode             = 'slider';
$wcss_column_breakpoint        = array(
	'desktop' => '4',
	'laptop'  => '3',
	'tablet'  => '2',
	'mobile'  => '1',
);
?>
<div class="wcss-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.607 15.4393H20.2284C20.1275 14.93 19.9299 14.4452 19.6466 14.0117L20.628 13.0204C20.6645 12.9834 20.6935 12.9396 20.7133 12.8913C20.7331 12.8431 20.7433 12.7914 20.7433 12.7391C20.7433 12.6869 20.7331 12.6352 20.7133 12.5869C20.6935 12.5387 20.6645 12.4948 20.628 12.4579L20.0325 11.8563C19.9959 11.8194 19.9525 11.7901 19.9047 11.7701C19.857 11.7501 19.8058 11.7398 19.7541 11.7398C19.7024 11.7398 19.6512 11.7501 19.6034 11.7701C19.5556 11.7901 19.5122 11.8194 19.4757 11.8563L18.4955 12.8465C18.0664 12.5601 17.5865 12.3604 17.0823 12.2582V10.8661C17.0823 10.7607 17.0409 10.6595 16.967 10.585C16.8932 10.5104 16.7931 10.4685 16.6887 10.4685H15.8985C15.7941 10.4685 15.694 10.5104 15.6201 10.585C15.5463 10.6595 15.5048 10.7607 15.5048 10.8661V12.2588C15.0006 12.3609 14.5208 12.5607 14.0917 12.8471L13.1103 11.8551C13.0738 11.8182 13.0304 11.7889 12.9826 11.7689C12.9348 11.7489 12.8836 11.7386 12.8319 11.7386C12.7802 11.7386 12.729 11.7489 12.6812 11.7689C12.6335 11.7889 12.5901 11.8182 12.5535 11.8551L11.958 12.4567C11.9214 12.4936 11.8924 12.5375 11.8726 12.5857C11.8529 12.634 11.8427 12.6857 11.8427 12.7379C11.8427 12.7902 11.8529 12.8419 11.8726 12.8901C11.8924 12.9384 11.9214 12.9822 11.958 13.0192L12.9394 14.0105C12.6561 14.444 12.4585 14.9288 12.3576 15.4381H10.9778C10.8734 15.4381 10.7733 15.48 10.6995 15.5545C10.6257 15.6291 10.5842 15.7302 10.5842 15.8357V16.631C10.5842 16.7364 10.6257 16.8376 10.6995 16.9122C10.7733 16.9867 10.8734 17.0286 10.9778 17.0286H12.3564C12.4573 17.5379 12.6549 18.0227 12.9382 18.4561L11.9568 19.4493C11.9203 19.4863 11.8912 19.5301 11.8715 19.5784C11.8517 19.6266 11.8415 19.6783 11.8415 19.7306C11.8415 19.7828 11.8517 19.8345 11.8715 19.8828C11.8912 19.931 11.9203 19.9749 11.9568 20.0118L12.5523 20.6134C12.5889 20.6503 12.6323 20.6796 12.6801 20.6996C12.7278 20.7196 12.779 20.7299 12.8307 20.7299C12.8824 20.7299 12.9336 20.7196 12.9814 20.6996C13.0292 20.6796 13.0726 20.6503 13.1091 20.6134L14.0905 19.622C14.5196 19.9082 14.9995 20.1077 15.5036 20.2097V21.6024C15.5036 21.7078 15.5451 21.809 15.6189 21.8835C15.6928 21.9581 15.7929 22 15.8973 22H16.6845C16.7889 22 16.8891 21.9581 16.9629 21.8835C17.0367 21.809 17.0782 21.7078 17.0782 21.6024V20.2109C17.5823 20.1089 18.0622 19.9094 18.4913 19.6232L19.4727 20.6146C19.5092 20.6515 19.5526 20.6808 19.6004 20.7008C19.6482 20.7208 19.6994 20.7311 19.7511 20.7311C19.8028 20.7311 19.854 20.7208 19.9018 20.7008C19.9495 20.6808 19.9929 20.6515 20.0295 20.6146L20.625 20.013C20.6616 19.9761 20.6906 19.9322 20.7104 19.884C20.7301 19.8357 20.7403 19.784 20.7403 19.7318C20.7403 19.6795 20.7301 19.6278 20.7104 19.5796C20.6906 19.5313 20.6616 19.4875 20.625 19.4505L19.646 18.4604C19.9293 18.0269 20.1269 17.5421 20.2278 17.0328H21.6064C21.6581 17.0328 21.7092 17.0225 21.757 17.0026C21.8048 16.9826 21.8482 16.9533 21.8847 16.9164C21.9213 16.8794 21.9503 16.8356 21.97 16.7874C21.9898 16.7391 22 16.6874 22 16.6352V15.8369C22 15.7316 21.9586 15.6305 21.8849 15.556C21.8112 15.4814 21.7113 15.4394 21.607 15.4393ZM16.2921 18.4002C15.8681 18.4002 15.4536 18.2732 15.1011 18.0352C14.7485 17.7973 14.4737 17.459 14.3115 17.0633C14.1492 16.6676 14.1068 16.2321 14.1895 15.8121C14.2722 15.392 14.4764 15.0061 14.7762 14.7032C15.076 14.4003 15.458 14.1941 15.8739 14.1105C16.2897 14.0269 16.7208 14.0698 17.1125 14.2337C17.5042 14.3977 17.839 14.6752 18.0746 15.0314C18.3102 15.3875 18.4359 15.8062 18.4359 16.2345C18.4359 16.5189 18.3805 16.8006 18.2727 17.0633C18.165 17.3261 18.0071 17.5648 17.808 17.7659C17.6089 17.967 17.3726 18.1265 17.1125 18.2354C16.8524 18.3442 16.5736 18.4002 16.2921 18.4002Z" fill="#2270B1"/>
		<path d="M9.55337 18.6408H3.19101V6.60942H19.8651V9.98122C20.2906 10.2303 20.6897 10.5227 21.0561 10.8541V3.60157C21.0561 3.44202 20.9934 3.28901 20.8817 3.1762C20.77 3.06338 20.6186 3 20.4606 3H2.5955C2.43757 3 2.2861 3.06338 2.17442 3.1762C2.06274 3.28901 2 3.44202 2 3.60157V19.2424C2 19.4019 2.06274 19.555 2.17442 19.6678C2.2861 19.7806 2.43757 19.844 2.5955 19.844H10.1018C9.88298 19.4607 9.69939 19.058 9.55337 18.6408Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Display Settings', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Select Layout', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Choose how you want your product categories to be visually presented on your store page.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center tw-gap-x-4">
		<div class="tw-relative">
			<div class="wccs_layout_select <?php echo 'grid' === $wcss_showcase_layout ? 'wccs-layout-active-before-content-2' : ''; ?>">
				<input type="radio" name="wcss_showcase_layout" class="!tw-hidden" value="<?php echo esc_attr( 'grid' ); ?>" <?php if ( 'grid' === $wcss_showcase_layout ) { echo 'checked'; } ?>>
				<svg class="<?php echo 'grid' === $wcss_showcase_layout ? 'wccs-layout-active' : 'wccs-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 32 32" fill="currentColor">
					<g clip-path="url(#clip0_233_3496)">
						<path d="M13 0H2C0.89543 0 0 0.89543 0 2V13C0 14.1046 0.89543 15 2 15H13C14.1046 15 15 14.1046 15 13V2C15 0.89543 14.1046 0 13 0Z"/>
						<path d="M13 17H2C0.89543 17 0 17.8954 0 19V30C0 31.1046 0.89543 32 2 32H13C14.1046 32 15 31.1046 15 30V19C15 17.8954 14.1046 17 13 17Z"/>
						<path d="M30 0H19C17.8954 0 17 0.89543 17 2V13C17 14.1046 17.8954 15 19 15H30C31.1046 15 32 14.1046 32 13V2C32 0.89543 31.1046 0 30 0Z"/>
						<path d="M30 17H19C17.8954 17 17 17.8954 17 19V30C17 31.1046 17.8954 32 19 32H30C31.1046 32 32 31.1046 32 30V19C32 17.8954 31.1046 17 30 17Z"/>
					</g>
				</svg>
			</div>
			<p class="tw-text-center tw-text-text-black-950"><?php esc_html_e( 'Grid', 'wc-category-showcase' ); ?></p>
		</div>
		<div class="tw-relative">
			<div class="wccs_layout_select <?php echo 'block' === $wcss_showcase_layout ? 'wccs-layout-active-before-content-2' : ''; ?>">
				<input type="radio" name="wcss_showcase_layout" class="!tw-hidden" value="<?php echo esc_attr( 'block' ); ?>" <?php if ( 'block' === $wcss_showcase_layout ) { echo 'checked'; } ?>>
				<svg class="<?php echo 'block' === $wcss_showcase_layout ? 'wccs-layout-active' : 'wccs-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 32 32" fill="currentColor">
					<g clip-path="url(#clip0_265_819)">
						<path d="M18 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H18C19.1046 32 20 31.1046 20 30V2C20 0.89543 19.1046 0 18 0Z"/>
						<path d="M30 0H24C22.8954 0 22 0.89543 22 2V7.33333C22 8.4379 22.8954 9.33333 24 9.33333H30C31.1046 9.33333 32 8.4379 32 7.33333V2C32 0.89543 31.1046 0 30 0Z"/>
						<path d="M30 11.332H24C22.8954 11.332 22 12.2275 22 13.332V18.6654C22 19.7699 22.8954 20.6654 24 20.6654H30C31.1046 20.6654 32 19.7699 32 18.6654V13.332C32 12.2275 31.1046 11.332 30 11.332Z"/>
						<path d="M30 22.668H24C22.8954 22.668 22 23.5634 22 24.668V30.0013C22 31.1059 22.8954 32.0013 24 32.0013H30C31.1046 32.0013 32 31.1059 32 30.0013V24.668C32 23.5634 31.1046 22.668 30 22.668Z"/>
					</g>
				</svg>
			</div>
			<p class="tw-text-center tw-text-text-grey-500"><?php esc_html_e( 'Block', 'wc-category-showcase' ); ?></p>
		</div>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Display Mode', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Choose how you want your product categories to be visually presented on your store page.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center tw-gap-2 tw-rounded-md tw-max-w-[385px]">
		<span class="tw-isolate tw-flex tw-flex-row tw-items-center tw-bg-input-grey-50 tw-p-1 tw-rounded-md tw-shadow-sm tw-min-w-[385px]">
			<label class="tw-w-1/3 wccs-display-mode <?php echo 'fixed' === $wccs_display_mode ? 'wcss-group-button-active' : 'wcss-group-button'; ?>">
				<svg class="<?php echo 'fixed' === $wccs_display_mode ? 'wcss-group-button-active-icon' : 'wcss-group-button-icon'; ?>" xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
					<path d="M6.83325 18H3.33325C3.20064 18 3.07347 17.9473 2.9797 17.8536C2.88593 17.7598 2.83325 17.6326 2.83325 17.5V2.5C2.83325 2.36739 2.88593 2.24021 2.9797 2.14645C3.07347 2.05268 3.20064 2 3.33325 2H6.83325V18ZM8.83325 2H12.8333V18H8.83325V2ZM18.3333 18H14.8333V2H18.3333C18.4659 2 18.593 2.05268 18.6868 2.14645C18.7806 2.24021 18.8333 2.36739 18.8333 2.5V17.5C18.8333 17.6326 18.7806 17.7598 18.6868 17.8536C18.593 17.9473 18.4659 18 18.3333 18Z"/>
				</svg>
				<input type="radio" name="wccs_display_mode" checked class="!tw-hidden" value="<?php echo esc_attr( 'fixed' ); ?>" <?php if ( 'fixed' === $wccs_display_mode ) { echo 'checked'; } ?>>
				<?php esc_html_e( 'Fixed', 'wc-category-showcase' ); ?>
			</label>
			<label class="tw-w-1/3 wccs-display-mode <?php echo 'slider' === $wccs_display_mode ? 'wcss-group-button-active' : 'wcss-group-button'; ?>">
				<svg class="<?php echo 'slider' === $wccs_display_mode ? 'wcss-group-button-active-icon' : 'wcss-group-button-icon'; ?>" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
					<path d="M16.1111 2.00003H3.88889C3.58206 2.00003 3.33333 2.24876 3.33333 2.55559V13.6667C3.33333 13.9735 3.58206 14.2223 3.88889 14.2223H16.1111C16.4179 14.2223 16.6667 13.9735 16.6667 13.6667V2.55559C16.6667 2.24876 16.4179 2.00003 16.1111 2.00003Z"/>
					<path d="M2.22222 13.1111H0.555556C0.408213 13.1111 0.266905 13.0526 0.162718 12.9484C0.0585316 12.8442 0 12.7029 0 12.5556V4.77781C0 4.63047 0.0585316 4.48916 0.162718 4.38497C0.266905 4.28078 0.408213 4.22225 0.555556 4.22225H2.22222V13.1111ZM19.4444 13.1111H17.7778V4.22225H19.4444C19.5918 4.22225 19.7331 4.28078 19.8373 4.38497C19.9415 4.48916 20 4.63047 20 4.77781V12.5556C20 12.7029 19.9415 12.8442 19.8373 12.9484C19.7331 13.0526 19.5918 13.1111 19.4444 13.1111Z"/>
					<path d="M4.44444 18.3334C4.874 18.3334 5.22222 17.9851 5.22222 17.5556C5.22222 17.126 4.874 16.7778 4.44444 16.7778C4.01489 16.7778 3.66667 17.126 3.66667 17.5556C3.66667 17.9851 4.01489 18.3334 4.44444 18.3334Z"/>
					<path d="M7.77778 18.7223C8.42211 18.7223 8.94445 18.1999 8.94445 17.5556C8.94445 16.9113 8.42211 16.3889 7.77778 16.3889C7.13345 16.3889 6.61111 16.9113 6.61111 17.5556C6.61111 18.1999 7.13345 18.7223 7.77778 18.7223Z"/>
					<path d="M11.1111 18.3334C11.5407 18.3334 11.8889 17.9851 11.8889 17.5556C11.8889 17.126 11.5407 16.7778 11.1111 16.7778C10.6816 16.7778 10.3333 17.126 10.3333 17.5556C10.3333 17.9851 10.6816 18.3334 11.1111 18.3334Z"/>
					<path d="M14.4444 18.3334C14.874 18.3334 15.2222 17.9851 15.2222 17.5556C15.2222 17.126 14.874 16.7778 14.4444 16.7778C14.0149 16.7778 13.6667 17.126 13.6667 17.5556C13.6667 17.9851 14.0149 18.3334 14.4444 18.3334Z"/>
				</svg>
				<input type="radio" name="wccs_display_mode" class="!tw-hidden" value="<?php echo esc_attr( 'slider' ); ?>" <?php if ( 'slider' === $wccs_display_mode ) { echo 'checked'; } ?>>
				<?php esc_html_e( 'Slider', 'wc-category-showcase' ); ?>
			</label>
			<label class="tw-w-1/3 wccs-display-mode <?php echo 'ticker' === $wccs_display_mode ? 'wcss-group-button-active' : 'wcss-group-button'; ?>">
				<svg class="<?php echo 'ticker' === $wccs_display_mode ? 'wcss-group-button-active-icon' : 'wcss-group-button-icon'; ?>" xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
					<path d="M17.6665 2H14.6665V18H17.6665C17.9317 18 18.1861 17.8946 18.3736 17.7071C18.5611 17.5196 18.6665 17.2652 18.6665 17V3C18.6665 2.73478 18.5611 2.48043 18.3736 2.29289C18.1861 2.10536 17.9317 2 17.6665 2ZM12.6665 2H3.6665C3.40129 2 3.14693 2.10536 2.9594 2.29289C2.77186 2.48043 2.6665 2.73478 2.6665 3V17C2.6665 17.2652 2.77186 17.5196 2.9594 17.7071C3.14693 17.8946 3.40129 18 3.6665 18H12.6665V2Z"/>
				</svg>
				<input type="radio" name="wccs_display_mode" class="!tw-hidden" value="<?php echo esc_attr( 'ticker' ); ?>" <?php if ( 'ticker' === $wccs_display_mode ) { echo 'checked'; } ?>>
				<?php esc_html_e( 'Ticker', 'wc-category-showcase' ); ?>
			</label>
		</span>
	</div>
</div>
<div class="wcss-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.375 3H2.625C2.45924 3 2.30027 3.06773 2.18306 3.18829C2.06585 3.30885 2 3.47236 2 3.64286V20.3571C2 20.5276 2.06585 20.6912 2.18306 20.8117C2.30027 20.9323 2.45924 21 2.625 21H21.375C21.5408 21 21.6997 20.9323 21.8169 20.8117C21.9342 20.6912 22 20.5276 22 20.3571V3.64286C22 3.47236 21.9342 3.30885 21.8169 3.18829C21.6997 3.06773 21.5408 3 21.375 3ZM8.25 18.4286H4.5V12H8.25V18.4286ZM19.5 18.4286H9.5V15.8571H19.5V18.4286ZM19.5 14.5714H9.5V12H19.5V14.5714ZM19.5 10.7143H4.5V5.57143H19.5V10.7143Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Layout Settings', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcss-settings-row wccs-grid-selection <?php echo 'grid' === $wcss_showcase_layout ? '' : 'tw-hidden'; ?>">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Number of Columns', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Choose how you want your product categories to be visually presented on your store page.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-flex-col tw-max-w-[385px] tw-rounded-md">
		<div class="tw-max-w-[230px] tw-grid tw-grid-cols-3 tw-gap-x-4 tw-gap-y-4">
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-column">
				<div class="<?php echo 1 === $wccs_number_of_grid_column ? 'wccs-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 1 === $wccs_number_of_grid_column ? 'wccs-layout-active' : 'wccs-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="16" viewBox="0 0 48 16" fill="currentColor">
						<g clip-path="url(#clip0_358_9312)">
							<path d="M46 0H2C0.89543 0 0 0.89543 0 2V14C0 15.1046 0.89543 16 2 16H46C47.1046 16 48 15.1046 48 14V2C48 0.89543 47.1046 0 46 0Z"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_grid_column" value="<?php echo esc_attr( 1 ); ?>" <?php echo 1 === $wccs_number_of_grid_column ? 'checked' : ''; ?>>
				<span><?php esc_html_e( '1', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-column">
				<div class="<?php echo 2 === $wccs_number_of_grid_column ? 'wccs-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 2 === $wccs_number_of_grid_column ? 'wccs-layout-active' : 'wccs-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="16" viewBox="0 0 48 16" fill="currentColor">
						<g clip-path="url(#clip0_358_9326)">
							<path d="M20.5 0H2C0.89543 0 0 0.89543 0 2V14C0 15.1046 0.89543 16 2 16H20.5C21.6046 16 22.5 15.1046 22.5 14V2C22.5 0.89543 21.6046 0 20.5 0Z"/>
							<path d="M46 0H27.5C26.3954 0 25.5 0.89543 25.5 2V14C25.5 15.1046 26.3954 16 27.5 16H46C47.1046 16 48 15.1046 48 14V2C48 0.89543 47.1046 0 46 0Z"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_grid_column" value="<?php echo esc_attr( 2 ); ?>" <?php echo 2 === $wccs_number_of_grid_column ? 'checked' : ''; ?>>
				<span><?php esc_html_e( '2', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-column">
				<div class="<?php echo 3 === $wccs_number_of_grid_column ? 'wccs-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 3 === $wccs_number_of_grid_column ? 'wccs-layout-active' : 'wccs-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="16" viewBox="0 0 48 16" fill="currentColor">
						<g clip-path="url(#clip0_358_9329)">
							<path d="M12 0H2C0.89543 0 0 0.89543 0 2V14C0 15.1046 0.89543 16 2 16H12C13.1046 16 14 15.1046 14 14V2C14 0.89543 13.1046 0 12 0Z"/>
							<path d="M29 0H19C17.8954 0 17 0.89543 17 2V14C17 15.1046 17.8954 16 19 16H29C30.1046 16 31 15.1046 31 14V2C31 0.89543 30.1046 0 29 0Z"/>
							<path d="M46 0H36C34.8954 0 34 0.89543 34 2V14C34 15.1046 34.8954 16 36 16H46C47.1046 16 48 15.1046 48 14V2C48 0.89543 47.1046 0 46 0Z"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_grid_column" value="<?php echo esc_attr( 3 ); ?>" <?php echo 3 === $wccs_number_of_grid_column ? 'checked' : ''; ?>>
				<span><?php esc_html_e( '3', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-column-pro">
				<div class="wccs-number-of-column wccs-layout-pro-before-content-2">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="16" viewBox="0 0 48 16" fill="currentColor">
						<g clip-path="url(#clip0_358_9314)">
							<path d="M7.75 0H2C0.89543 0 0 0.89543 0 2V14C0 15.1046 0.89543 16 2 16H7.75C8.85457 16 9.75 15.1046 9.75 14V2C9.75 0.89543 8.85457 0 7.75 0Z"/>
							<path d="M20.5 0H14.75C13.6454 0 12.75 0.89543 12.75 2V14C12.75 15.1046 13.6454 16 14.75 16H20.5C21.6046 16 22.5 15.1046 22.5 14V2C22.5 0.89543 21.6046 0 20.5 0Z"/>
							<path d="M33.25 0H27.5C26.3954 0 25.5 0.89543 25.5 2V14C25.5 15.1046 26.3954 16 27.5 16H33.25C34.3546 16 35.25 15.1046 35.25 14V2C35.25 0.89543 34.3546 0 33.25 0Z"/>
							<path d="M46 0H40.25C39.1454 0 38.25 0.89543 38.25 2V14C38.25 15.1046 39.1454 16 40.25 16H46C47.1046 16 48 15.1046 48 14V2C48 0.89543 47.1046 0 46 0Z"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_grid_column" value="<?php echo esc_attr( 4 ); ?>" <?php echo 4 === $wccs_number_of_grid_column ? 'checked' : ''; ?>>
				<span><?php esc_html_e( '4', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-column-pro">
				<div class="wccs-number-of-column wccs-layout-pro-before-content-2">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="16" viewBox="0 0 48 16" fill="currentColor">
						<g clip-path="url(#clip0_358_9306)">
							<path d="M5.2 0H2C0.89543 0 0 0.89543 0 2V14C0 15.1046 0.89543 16 2 16H5.2C6.30457 16 7.2 15.1046 7.2 14V2C7.2 0.89543 6.30457 0 5.2 0Z"/>
							<path d="M15.4 0H12.2C11.0954 0 10.2 0.89543 10.2 2V14C10.2 15.1046 11.0954 16 12.2 16H15.4C16.5045 16 17.4 15.1046 17.4 14V2C17.4 0.89543 16.5045 0 15.4 0Z"/>
							<path d="M25.5999 0H22.3999C21.2953 0 20.3999 0.89543 20.3999 2V14C20.3999 15.1046 21.2953 16 22.3999 16H25.5999C26.7045 16 27.5999 15.1046 27.5999 14V2C27.5999 0.89543 26.7045 0 25.5999 0Z"/>
							<path d="M35.8001 0H32.6001C31.4955 0 30.6001 0.89543 30.6001 2V14C30.6001 15.1046 31.4955 16 32.6001 16H35.8001C36.9047 16 37.8001 15.1046 37.8001 14V2C37.8001 0.89543 36.9047 0 35.8001 0Z"/>
							<path d="M46 0H42.8C41.6955 0 40.8 0.89543 40.8 2V14C40.8 15.1046 41.6955 16 42.8 16H46C47.1046 16 48 15.1046 48 14V2C48 0.89543 47.1046 0 46 0Z" fill="#D3D9DF"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_grid_column" value="<?php echo esc_attr( 5 ); ?>" <?php echo 5 === $wccs_number_of_grid_column ? 'checked' : ''; ?>>
				<span><?php esc_html_e( '5', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-column-pro">
				<div class="wccs-layout-pro-before-content-2">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="16" viewBox="0 0 48 16" fill="currentColor">
						<g clip-path="url(#clip0_358_9319)">
							<path d="M3.5 0H2C0.89543 0 0 0.89543 0 2V14C0 15.1046 0.89543 16 2 16H3.5C4.60457 16 5.5 15.1046 5.5 14V2C5.5 0.89543 4.60457 0 3.5 0Z"/>
							<path d="M12 0H10.5C9.39543 0 8.5 0.89543 8.5 2V14C8.5 15.1046 9.39543 16 10.5 16H12C13.1046 16 14 15.1046 14 14V2C14 0.89543 13.1046 0 12 0Z"/>
							<path d="M20.5 0H19C17.8954 0 17 0.89543 17 2V14C17 15.1046 17.8954 16 19 16H20.5C21.6046 16 22.5 15.1046 22.5 14V2C22.5 0.89543 21.6046 0 20.5 0Z"/>
							<path d="M29 0H27.5C26.3954 0 25.5 0.89543 25.5 2V14C25.5 15.1046 26.3954 16 27.5 16H29C30.1046 16 31 15.1046 31 14V2C31 0.89543 30.1046 0 29 0Z"/>
							<path d="M37.5 0H36C34.8954 0 34 0.89543 34 2V14C34 15.1046 34.8954 16 36 16H37.5C38.6046 16 39.5 15.1046 39.5 14V2C39.5 0.89543 38.6046 0 37.5 0Z"/>
							<path d="M46 0H44.5C43.3954 0 42.5 0.89543 42.5 2V14C42.5 15.1046 43.3954 16 44.5 16H46C47.1046 16 48 15.1046 48 14V2C48 0.89543 47.1046 0 46 0Z"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_grid_column" value="<?php echo esc_attr( 6 ); ?>" <?php echo 6 === $wccs_number_of_grid_column ? 'checked' : ''; ?>>
				<span><?php esc_html_e( '6', 'wc-category-showcase' ); ?></span>
			</div>
		</div>
		<div class="tw-max-w-[385px] ">
			<div class="tw-mt-3 tw-flex tw-flex-row tw-items-center tw-gap-1 tw-w-full">
				<svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M15.1337 15.5891L17.3499 7.57164L13.7187 9.62914C13.6292 9.67993 13.5304 9.71235 13.4283 9.72449C13.3261 9.73663 13.2225 9.72825 13.1236 9.69984C13.0247 9.67144 12.9325 9.62357 12.8523 9.55906C12.7722 9.49454 12.7057 9.41468 12.6568 9.32414L9.9999 4.41602L7.34303 9.32352C7.29394 9.41387 7.22737 9.49355 7.14719 9.55792C7.067 9.62229 6.97481 9.67006 6.87598 9.69845C6.77715 9.72683 6.67366 9.73527 6.57154 9.72326C6.46942 9.71126 6.3707 9.67905 6.28115 9.62852L2.6499 7.57102L4.86615 15.5891H15.1337Z" fill="#FFD731"/>
					<path d="M17.35 7.56836L15.1312 15.5871H12.6375C13.2106 14.6374 13.5723 13.5754 13.6981 12.4734C13.8018 11.5489 13.7368 10.6133 13.5062 9.71211C13.5812 9.69961 13.65 9.66836 13.7187 9.63086L17.35 7.56836Z" fill="#FFC933"/>
					<path d="M16.9055 15.334C16.9067 15.5781 16.8256 15.8156 16.6754 16.0081C16.5252 16.2006 16.3145 16.337 16.0774 16.3952C14.0568 16.8702 12.0249 17.0983 9.99988 17.0983C7.97487 17.0983 5.94238 16.8702 3.92238 16.3952C3.68524 16.337 3.4746 16.2006 3.32438 16.0081C3.17416 15.8156 3.0931 15.5781 3.09425 15.334C3.09425 14.6483 3.72363 14.1258 4.39363 14.2702C6.25863 14.6727 8.13238 14.8671 9.99988 14.8671C11.8674 14.8671 13.7411 14.6733 15.6061 14.2702C16.2761 14.1258 16.9055 14.6483 16.9055 15.334Z" fill="#FFD731"/>
					<path d="M16.906 15.3367C16.906 15.8367 16.5623 16.2805 16.0748 16.393C15.4248 16.543 14.7748 16.6742 14.1248 16.7742C14.4498 16.5492 14.6498 16.1742 14.6498 15.768C14.6498 15.1992 14.2623 14.7305 13.7498 14.5992C14.3685 14.5117 14.9873 14.4055 15.606 14.268C16.2748 14.1242 16.906 14.6492 16.906 15.3367Z" fill="#FFC933"/>
					<path d="M2.64976 8.97188C3.42295 8.97188 4.04976 8.34507 4.04976 7.57188C4.04976 6.79868 3.42295 6.17188 2.64976 6.17188C1.87656 6.17188 1.24976 6.79868 1.24976 7.57188C1.24976 8.34507 1.87656 8.97188 2.64976 8.97188Z" fill="#FFD731"/>
					<path d="M17.35 8.97188C18.1231 8.97188 18.75 8.34507 18.75 7.57188C18.75 6.79868 18.1231 6.17188 17.35 6.17188C16.5768 6.17188 15.95 6.79868 15.95 7.57188C15.95 8.34507 16.5768 8.97188 17.35 8.97188Z" fill="#FFC933"/>
					<path d="M9.99985 5.70039C10.7731 5.70039 11.3999 5.07359 11.3999 4.30039C11.3999 3.52719 10.7731 2.90039 9.99985 2.90039C9.22665 2.90039 8.59985 3.52719 8.59985 4.30039C8.59985 5.07359 9.22665 5.70039 9.99985 5.70039Z" fill="#FFD731"/>
					<path d="M9.99981 13.3123C10.7261 13.3123 11.3148 12.601 11.3148 11.7235C11.3148 10.8461 10.7261 10.1348 9.99981 10.1348C9.27356 10.1348 8.68481 10.8461 8.68481 11.7235C8.68481 12.601 9.27356 13.3123 9.99981 13.3123Z" fill="#FF7F0E"/>
					<path d="M11.3125 11.7242C11.3125 12.5992 10.725 13.3117 10 13.3117C9.85005 13.3117 9.71255 13.2805 9.5813 13.2305C10.1 13.018 10.475 12.4242 10.475 11.7242C10.475 11.0242 10.1 10.4305 9.5813 10.218C9.71255 10.168 9.85005 10.1367 10 10.1367C10.725 10.1367 11.3125 10.8492 11.3125 11.7242Z" fill="#FF7F0E"/>
					<path d="M5.25379 11.6526L4.76379 9.88074C4.75477 9.84704 4.73912 9.81547 4.71776 9.78788C4.69639 9.7603 4.66975 9.73724 4.63937 9.72008C4.60899 9.70291 4.5755 9.69197 4.54084 9.6879C4.50619 9.68383 4.47107 9.68671 4.43754 9.69637C4.40396 9.70562 4.37253 9.7214 4.34505 9.74281C4.31757 9.76422 4.29458 9.79084 4.2774 9.82114C4.26022 9.85144 4.24918 9.88483 4.24491 9.9194C4.24065 9.95398 4.24324 9.98905 4.25254 10.0226L4.74254 11.7945C4.76151 11.8623 4.80655 11.9198 4.8678 11.9545C4.92906 11.9891 5.00154 11.9981 5.06942 11.9795C5.13718 11.9605 5.19465 11.9155 5.22921 11.8542C5.26378 11.7929 5.27262 11.7204 5.25379 11.6526ZM5.55942 12.757C5.5504 12.7232 5.53473 12.6916 5.51333 12.6639C5.49194 12.6362 5.46524 12.6131 5.43481 12.5959C5.40437 12.5787 5.37081 12.5677 5.33608 12.5636C5.30135 12.5595 5.26615 12.5623 5.23254 12.572C5.19896 12.5812 5.16753 12.597 5.14005 12.6184C5.11257 12.6398 5.08958 12.6665 5.0724 12.6968C5.05522 12.7271 5.04418 12.7605 5.03991 12.795C5.03565 12.8296 5.03824 12.8647 5.04754 12.8982L5.09317 13.0639C5.11583 13.1271 5.16155 13.1794 5.22116 13.2104C5.28078 13.2413 5.34988 13.2486 5.41463 13.2307C5.47937 13.2128 5.53497 13.1711 5.57029 13.114C5.6056 13.0569 5.61801 12.9885 5.60504 12.9226L5.55942 12.757ZM8.72254 9.20449C8.7532 9.22125 8.78687 9.23176 8.82162 9.23542C8.85636 9.23908 8.89149 9.23582 8.92496 9.22582C8.95844 9.21582 8.9896 9.19929 9.01665 9.17718C9.04369 9.15507 9.06609 9.12781 9.08254 9.09699L9.50567 8.31574C9.53915 8.25375 9.54664 8.18099 9.52648 8.11348C9.50632 8.04597 9.46016 7.98923 9.39817 7.95574C9.33617 7.92226 9.26342 7.91478 9.1959 7.93494C9.12839 7.9551 9.07165 8.00125 9.03817 8.06324L8.61567 8.84449C8.58229 8.90644 8.5748 8.97909 8.59483 9.04655C8.61485 9.114 8.66077 9.17079 8.72254 9.20449Z" fill="#FFE576"/>
					<path d="M17.3499 5.90539C16.9083 5.90589 16.4849 6.08153 16.1727 6.39379C15.8604 6.70605 15.6848 7.12942 15.6843 7.57102C15.6843 7.77477 15.7261 7.96789 15.7936 8.14852L13.588 9.39977C13.5291 9.43314 13.464 9.4544 13.3967 9.46231C13.3295 9.47021 13.2613 9.4646 13.1962 9.44579C13.1311 9.42699 13.0704 9.39537 13.0177 9.3528C12.965 9.31023 12.9213 9.25757 12.8893 9.19789L10.9661 5.65164C11.1818 5.4983 11.3577 5.29569 11.4792 5.06066C11.6007 4.82563 11.6644 4.56498 11.6649 4.30039C11.6649 3.38164 10.918 2.63477 9.99927 2.63477C9.08052 2.63477 8.33364 3.38164 8.33364 4.30039C8.33364 4.85789 8.61114 5.34914 9.03239 5.65164L7.10927 9.19789C7.07732 9.25752 7.03376 9.31017 6.98117 9.35272C6.92858 9.39528 6.86801 9.42689 6.80303 9.4457C6.73804 9.46451 6.66995 9.47013 6.60276 9.46224C6.53557 9.45436 6.47063 9.43311 6.41177 9.39977L4.20552 8.14852C4.27638 7.96415 4.31343 7.76852 4.31489 7.57102C4.31489 6.65227 3.56802 5.90539 2.64927 5.90539C1.73052 5.90539 0.983643 6.65227 0.983643 7.57102C0.983643 8.48977 1.73052 9.23664 2.64927 9.23664C2.71177 9.23664 2.77114 9.22477 2.83177 9.21852L4.14989 13.9816C3.79647 13.9895 3.46018 14.1355 3.21309 14.3883C2.966 14.6411 2.82777 14.9806 2.82802 15.3341C2.82802 15.9579 3.26239 16.5135 3.86052 16.6541C7.89816 17.6018 12.1004 17.6018 16.138 16.6541C16.7368 16.5129 17.1705 15.9579 17.1705 15.3341C17.1712 14.9805 17.0332 14.6407 16.786 14.3877C16.5388 14.1348 16.2022 13.989 15.8486 13.9816L17.1668 9.21914C17.2274 9.22602 17.2868 9.23727 17.3493 9.23727C18.268 9.23727 19.0149 8.49039 19.0149 7.57164C19.0149 6.65289 18.268 5.90539 17.3499 5.90539ZM9.99989 3.16602C10.6255 3.16602 11.1343 3.67477 11.1343 4.30039C11.1343 4.92602 10.6255 5.43539 9.99989 5.43539C9.37427 5.43539 8.86552 4.92664 8.86552 4.30102C8.86552 3.67539 9.37427 3.16602 9.99989 3.16602ZM1.51552 7.57102C1.51552 6.94539 2.02427 6.43664 2.64989 6.43664C3.27489 6.43664 3.78427 6.94539 3.78427 7.57102C3.78427 8.19664 3.27552 8.70602 2.64989 8.70602C2.02427 8.70602 1.51552 8.19664 1.51552 7.57102ZM16.6405 15.3341C16.6411 15.5183 16.5801 15.6973 16.4671 15.8427C16.3542 15.9881 16.1959 16.0916 16.0174 16.1366C12.0592 17.061 7.94123 17.061 3.98302 16.1366C3.8045 16.0916 3.64618 15.9881 3.53326 15.8427C3.42035 15.6973 3.35932 15.5183 3.35989 15.3341C3.35989 15.0835 3.47239 14.8491 3.66739 14.691C3.75986 14.6157 3.86808 14.5621 3.98404 14.5342C4.10001 14.5062 4.22077 14.5047 4.33739 14.5298C8.06994 15.3304 11.9298 15.3304 15.6624 14.5298C15.8974 14.4804 16.143 14.5379 16.3324 14.691C16.528 14.8491 16.6405 15.0835 16.6405 15.3341ZM15.2755 14.0623C11.794 14.7691 8.20583 14.7691 4.72427 14.0623L3.34552 9.07977C3.57989 8.97102 3.78177 8.80852 3.94239 8.60914L6.14989 9.86227C6.2699 9.93077 6.40248 9.97437 6.53972 9.99048C6.67696 10.0066 6.81604 9.99487 6.94864 9.95602C7.08188 9.91832 7.20617 9.85418 7.31408 9.76742C7.422 9.68066 7.51134 9.57305 7.57677 9.45102L9.51052 5.88477C9.66677 5.93289 9.82864 5.96664 9.99989 5.96664C10.1711 5.96664 10.333 5.93289 10.4886 5.88477L12.4224 9.45102C12.5561 9.69852 12.7793 9.87789 13.0505 9.95602C13.1831 9.99513 13.3223 10.0069 13.4596 9.99072C13.5969 9.9745 13.7294 9.93058 13.8493 9.86164L16.0568 8.60852C16.2174 8.80789 16.4193 8.97102 16.6536 9.07914L15.2755 14.0623ZM17.3499 8.70602C16.7249 8.70602 16.2155 8.19727 16.2155 7.57164C16.2155 6.94602 16.7243 6.43727 17.3499 6.43727C17.9755 6.43727 18.4843 6.94602 18.4843 7.57164C18.4843 8.19727 17.9755 8.70602 17.3499 8.70602Z" fill="#020617"/>
					<path d="M9.99981 9.86914C9.12794 9.86914 8.41919 10.701 8.41919 11.7235C8.41919 12.746 9.12794 13.5779 9.99981 13.5779C10.8717 13.5779 11.5804 12.746 11.5804 11.7235C11.5804 10.701 10.8717 9.86914 9.99981 9.86914ZM9.99981 13.0466C9.42106 13.0466 8.95044 12.4529 8.95044 11.7235C8.95044 10.9941 9.42106 10.4004 9.99981 10.4004C10.5786 10.4004 11.0492 10.9941 11.0492 11.7235C11.0492 12.4529 10.5786 13.0466 9.99981 13.0466Z" fill="#020617"/>
				</svg>
				<span class="tw-text-text-grey-500 tw-text-xs tw-italic tw-leading-4 tw-w-full tw-font-medium">Unlock a variety of professionally designed layouts to enhance the presentation of your product categories.<a href="#" class="tw-text-accent-orange-500 tw-text-xs tw-leading-4 tw-font-semibold">Upgrade To Pro!</a></span>
			</div>
		</div>
	</div>
</div>
<div class="wcss-settings-row wccs-block-selection <?php echo 'block' === $wcss_showcase_layout ? '' : 'tw-hidden'; ?>">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Block Count', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Determine the number of columns you want your category showcase to have.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-flex-col tw-max-w-[385px] tw-rounded-md">
		<div class="tw-max-w-[230px] tw-grid tw-grid-cols-3 tw-gap-x-4 tw-gap-y-4 tw-overflow-auto tw-max-h-72">
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-block-column">
				<div class="<?php echo 2 === $wccs_number_of_block_column ? 'wccs-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 2 === $wccs_number_of_block_column ? 'wccs-layout-active' : 'wccs-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_block_column" value="<?php echo esc_attr( 2 ); ?>" <?php echo 2 === $wccs_number_of_block_column ? 'checked' : ''; ?>>
				<span><?php esc_html_e( '2', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-block-column">
				<div class="<?php echo 3 === $wccs_number_of_block_column ? 'wccs-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 3 === $wccs_number_of_block_column ? 'wccs-layout-active' : 'wccs-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<g clip-path="url(#clip0_367_3595)">
							<path d="M20.5 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H20.5C21.6046 32 22.5 31.1046 22.5 30V2C22.5 0.89543 21.6046 0 20.5 0Z"/>
							<path d="M46 0H27.5C26.3954 0 25.5 0.89543 25.5 2V12.5C25.5 13.6046 26.3954 14.5 27.5 14.5H46C47.1046 14.5 48 13.6046 48 12.5V2C48 0.89543 47.1046 0 46 0Z"/>
							<path d="M46 17.5H27.5C26.3954 17.5 25.5 18.3954 25.5 19.5V30C25.5 31.1046 26.3954 32 27.5 32H46C47.1046 32 48 31.1046 48 30V19.5C48 18.3954 47.1046 17.5 46 17.5Z"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_block_column" value="<?php echo esc_attr( 3 ); ?>" <?php echo 3 === $wccs_number_of_block_column ? 'checked' : ''; ?>>
				<span><?php esc_html_e( '3', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-block-column">
				<div class="<?php echo 4 === $wccs_number_of_block_column ? 'wccs-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 4 === $wccs_number_of_block_column ? 'wccs-layout-active' : 'wccs-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<g clip-path="url(#clip0_367_3599)">
							<path d="M20.5 0H2C0.89543 0 0 0.89543 0 2V12.5C0 13.6046 0.89543 14.5 2 14.5H20.5C21.6046 14.5 22.5 13.6046 22.5 12.5V2C22.5 0.89543 21.6046 0 20.5 0Z"/>
							<path d="M20.5 17.5H2C0.89543 17.5 0 18.3954 0 19.5V30C0 31.1046 0.89543 32 2 32H20.5C21.6046 32 22.5 31.1046 22.5 30V19.5C22.5 18.3954 21.6046 17.5 20.5 17.5Z"/>
							<path d="M46 0H27.5C26.3954 0 25.5 0.89543 25.5 2V12.5C25.5 13.6046 26.3954 14.5 27.5 14.5H46C47.1046 14.5 48 13.6046 48 12.5V2C48 0.89543 47.1046 0 46 0Z"/>
							<path d="M46 17.5H27.5C26.3954 17.5 25.5 18.3954 25.5 19.5V30C25.5 31.1046 26.3954 32 27.5 32H46C47.1046 32 48 31.1046 48 30V19.5C48 18.3954 47.1046 17.5 46 17.5Z"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_block_column" value="<?php echo esc_attr( 4 ); ?>" <?php echo 4 === $wccs_number_of_block_column ? 'checked' : ''; ?>>
				<span><?php esc_html_e( '4', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-block-column-pro">
				<div class="wccs-layout-pro-before-content-2">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<g clip-path="url(#clip0_367_3604)">
							<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
							<path d="M31 0H23C21.8954 0 21 0.89543 21 2V12.5C21 13.6046 21.8954 14.5 23 14.5H31C32.1046 14.5 33 13.6046 33 12.5V2C33 0.89543 32.1046 0 31 0Z"/>
							<path d="M46 0H38C36.8954 0 36 0.89543 36 2V12.5C36 13.6046 36.8954 14.5 38 14.5H46C47.1046 14.5 48 13.6046 48 12.5V2C48 0.89543 47.1046 0 46 0Z"/>
							<path d="M31 17.5H23C21.8954 17.5 21 18.3954 21 19.5V30C21 31.1046 21.8954 32 23 32H31C32.1046 32 33 31.1046 33 30V19.5C33 18.3954 32.1046 17.5 31 17.5Z"/>
							<path d="M46 17.5H38C36.8954 17.5 36 18.3954 36 19.5V30C36 31.1046 36.8954 32 38 32H46C47.1046 32 48 31.1046 48 30V19.5C48 18.3954 47.1046 17.5 46 17.5Z"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_block_column" value="<?php echo esc_attr( 5 ); ?>">
				<span><?php esc_html_e( '5', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-block-column-pro">
				<div class="wccs-layout-pro-before-content-2">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<g clip-path="url(#clip0_367_3585)">
							<path d="M12 0H2C0.89543 0 0 0.89543 0 2V12.5C0 13.6046 0.89543 14.5 2 14.5H12C13.1046 14.5 14 13.6046 14 12.5V2C14 0.89543 13.1046 0 12 0Z"/>
							<path d="M12 17.5H2C0.89543 17.5 0 18.3954 0 19.5V30C0 31.1046 0.89543 32 2 32H12C13.1046 32 14 31.1046 14 30V19.5C14 18.3954 13.1046 17.5 12 17.5Z"/>
							<path d="M29 0H19C17.8954 0 17 0.89543 17 2V12.5C17 13.6046 17.8954 14.5 19 14.5H29C30.1046 14.5 31 13.6046 31 12.5V2C31 0.89543 30.1046 0 29 0Z"/>
							<path d="M29 17.5H19C17.8954 17.5 17 18.3954 17 19.5V30C17 31.1046 17.8954 32 19 32H29C30.1046 32 31 31.1046 31 30V19.5C31 18.3954 30.1046 17.5 29 17.5Z"/>
							<path d="M46 0H36C34.8954 0 34 0.89543 34 2V12.5C34 13.6046 34.8954 14.5 36 14.5H46C47.1046 14.5 48 13.6046 48 12.5V2C48 0.89543 47.1046 0 46 0Z"/>
							<path d="M46 17.5H36C34.8954 17.5 34 18.3954 34 19.5V30C34 31.1046 34.8954 32 36 32H46C47.1046 32 48 31.1046 48 30V19.5C48 18.3954 47.1046 17.5 46 17.5Z"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_block_column" value="<?php echo esc_attr( 6 ); ?>">
				<span><?php esc_html_e( '6', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wccs-number-of-block-column-pro">
				<div class="wccs-layout-pro-before-content-2">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<g clip-path="url(#clip0_367_3577)">
							<path d="M14 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H14C15.1046 32 16 31.1046 16 30V2C16 0.89543 15.1046 0 14 0Z"/>
							<path d="M24.6667 0H21C19.8954 0 19 0.89543 19 2V12.5C19 13.6046 19.8954 14.5 21 14.5H24.6667C25.7712 14.5 26.6667 13.6046 26.6667 12.5V2C26.6667 0.89543 25.7712 0 24.6667 0Z"/>
							<path d="M24.6667 17.5H21C19.8954 17.5 19 18.3954 19 19.5V30C19 31.1046 19.8954 32 21 32H24.6667C25.7712 32 26.6667 31.1046 26.6667 30V19.5C26.6667 18.3954 25.7712 17.5 24.6667 17.5Z"/>
							<path d="M35.3334 0H31.6667C30.5622 0 29.6667 0.89543 29.6667 2V12.5C29.6667 13.6046 30.5622 14.5 31.6667 14.5H35.3334C36.438 14.5 37.3334 13.6046 37.3334 12.5V2C37.3334 0.89543 36.438 0 35.3334 0Z"/>
							<path d="M35.3334 17.5H31.6667C30.5622 17.5 29.6667 18.3954 29.6667 19.5V30C29.6667 31.1046 30.5622 32 31.6667 32H35.3334C36.438 32 37.3334 31.1046 37.3334 30V19.5C37.3334 18.3954 36.438 17.5 35.3334 17.5Z"/>
							<path d="M45.9999 0H42.3333C41.2287 0 40.3333 0.89543 40.3333 2V12.5C40.3333 13.6046 41.2287 14.5 42.3333 14.5H45.9999C47.1045 14.5 47.9999 13.6046 47.9999 12.5V2C47.9999 0.89543 47.1045 0 45.9999 0Z"/>
							<path d="M45.9999 17.5H42.3333C41.2287 17.5 40.3333 18.3954 40.3333 19.5V30C40.3333 31.1046 41.2287 32 42.3333 32H45.9999C47.1045 32 47.9999 31.1046 47.9999 30V19.5C47.9999 18.3954 47.1045 17.5 45.9999 17.5Z"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wccs_number_of_block_column" value="<?php echo esc_attr( 7 ); ?>">
				<span><?php esc_html_e( '7', 'wc-category-showcase' ); ?></span>
			</div>
		</div>
		<div class="tw-max-w-[385px] ">
			<div class="tw-mt-3 tw-flex tw-flex-row tw-items-center tw-gap-1 tw-w-full">
				<svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M15.1337 15.5891L17.3499 7.57164L13.7187 9.62914C13.6292 9.67993 13.5304 9.71235 13.4283 9.72449C13.3261 9.73663 13.2225 9.72825 13.1236 9.69984C13.0247 9.67144 12.9325 9.62357 12.8523 9.55906C12.7722 9.49454 12.7057 9.41468 12.6568 9.32414L9.9999 4.41602L7.34303 9.32352C7.29394 9.41387 7.22737 9.49355 7.14719 9.55792C7.067 9.62229 6.97481 9.67006 6.87598 9.69845C6.77715 9.72683 6.67366 9.73527 6.57154 9.72326C6.46942 9.71126 6.3707 9.67905 6.28115 9.62852L2.6499 7.57102L4.86615 15.5891H15.1337Z" fill="#FFD731"/>
					<path d="M17.35 7.56836L15.1312 15.5871H12.6375C13.2106 14.6374 13.5723 13.5754 13.6981 12.4734C13.8018 11.5489 13.7368 10.6133 13.5062 9.71211C13.5812 9.69961 13.65 9.66836 13.7187 9.63086L17.35 7.56836Z" fill="#FFC933"/>
					<path d="M16.9055 15.334C16.9067 15.5781 16.8256 15.8156 16.6754 16.0081C16.5252 16.2006 16.3145 16.337 16.0774 16.3952C14.0568 16.8702 12.0249 17.0983 9.99988 17.0983C7.97487 17.0983 5.94238 16.8702 3.92238 16.3952C3.68524 16.337 3.4746 16.2006 3.32438 16.0081C3.17416 15.8156 3.0931 15.5781 3.09425 15.334C3.09425 14.6483 3.72363 14.1258 4.39363 14.2702C6.25863 14.6727 8.13238 14.8671 9.99988 14.8671C11.8674 14.8671 13.7411 14.6733 15.6061 14.2702C16.2761 14.1258 16.9055 14.6483 16.9055 15.334Z" fill="#FFD731"/>
					<path d="M16.906 15.3367C16.906 15.8367 16.5623 16.2805 16.0748 16.393C15.4248 16.543 14.7748 16.6742 14.1248 16.7742C14.4498 16.5492 14.6498 16.1742 14.6498 15.768C14.6498 15.1992 14.2623 14.7305 13.7498 14.5992C14.3685 14.5117 14.9873 14.4055 15.606 14.268C16.2748 14.1242 16.906 14.6492 16.906 15.3367Z" fill="#FFC933"/>
					<path d="M2.64976 8.97188C3.42295 8.97188 4.04976 8.34507 4.04976 7.57188C4.04976 6.79868 3.42295 6.17188 2.64976 6.17188C1.87656 6.17188 1.24976 6.79868 1.24976 7.57188C1.24976 8.34507 1.87656 8.97188 2.64976 8.97188Z" fill="#FFD731"/>
					<path d="M17.35 8.97188C18.1231 8.97188 18.75 8.34507 18.75 7.57188C18.75 6.79868 18.1231 6.17188 17.35 6.17188C16.5768 6.17188 15.95 6.79868 15.95 7.57188C15.95 8.34507 16.5768 8.97188 17.35 8.97188Z" fill="#FFC933"/>
					<path d="M9.99985 5.70039C10.7731 5.70039 11.3999 5.07359 11.3999 4.30039C11.3999 3.52719 10.7731 2.90039 9.99985 2.90039C9.22665 2.90039 8.59985 3.52719 8.59985 4.30039C8.59985 5.07359 9.22665 5.70039 9.99985 5.70039Z" fill="#FFD731"/>
					<path d="M9.99981 13.3123C10.7261 13.3123 11.3148 12.601 11.3148 11.7235C11.3148 10.8461 10.7261 10.1348 9.99981 10.1348C9.27356 10.1348 8.68481 10.8461 8.68481 11.7235C8.68481 12.601 9.27356 13.3123 9.99981 13.3123Z" fill="#FF7F0E"/>
					<path d="M11.3125 11.7242C11.3125 12.5992 10.725 13.3117 10 13.3117C9.85005 13.3117 9.71255 13.2805 9.5813 13.2305C10.1 13.018 10.475 12.4242 10.475 11.7242C10.475 11.0242 10.1 10.4305 9.5813 10.218C9.71255 10.168 9.85005 10.1367 10 10.1367C10.725 10.1367 11.3125 10.8492 11.3125 11.7242Z" fill="#FF7F0E"/>
					<path d="M5.25379 11.6526L4.76379 9.88074C4.75477 9.84704 4.73912 9.81547 4.71776 9.78788C4.69639 9.7603 4.66975 9.73724 4.63937 9.72008C4.60899 9.70291 4.5755 9.69197 4.54084 9.6879C4.50619 9.68383 4.47107 9.68671 4.43754 9.69637C4.40396 9.70562 4.37253 9.7214 4.34505 9.74281C4.31757 9.76422 4.29458 9.79084 4.2774 9.82114C4.26022 9.85144 4.24918 9.88483 4.24491 9.9194C4.24065 9.95398 4.24324 9.98905 4.25254 10.0226L4.74254 11.7945C4.76151 11.8623 4.80655 11.9198 4.8678 11.9545C4.92906 11.9891 5.00154 11.9981 5.06942 11.9795C5.13718 11.9605 5.19465 11.9155 5.22921 11.8542C5.26378 11.7929 5.27262 11.7204 5.25379 11.6526ZM5.55942 12.757C5.5504 12.7232 5.53473 12.6916 5.51333 12.6639C5.49194 12.6362 5.46524 12.6131 5.43481 12.5959C5.40437 12.5787 5.37081 12.5677 5.33608 12.5636C5.30135 12.5595 5.26615 12.5623 5.23254 12.572C5.19896 12.5812 5.16753 12.597 5.14005 12.6184C5.11257 12.6398 5.08958 12.6665 5.0724 12.6968C5.05522 12.7271 5.04418 12.7605 5.03991 12.795C5.03565 12.8296 5.03824 12.8647 5.04754 12.8982L5.09317 13.0639C5.11583 13.1271 5.16155 13.1794 5.22116 13.2104C5.28078 13.2413 5.34988 13.2486 5.41463 13.2307C5.47937 13.2128 5.53497 13.1711 5.57029 13.114C5.6056 13.0569 5.61801 12.9885 5.60504 12.9226L5.55942 12.757ZM8.72254 9.20449C8.7532 9.22125 8.78687 9.23176 8.82162 9.23542C8.85636 9.23908 8.89149 9.23582 8.92496 9.22582C8.95844 9.21582 8.9896 9.19929 9.01665 9.17718C9.04369 9.15507 9.06609 9.12781 9.08254 9.09699L9.50567 8.31574C9.53915 8.25375 9.54664 8.18099 9.52648 8.11348C9.50632 8.04597 9.46016 7.98923 9.39817 7.95574C9.33617 7.92226 9.26342 7.91478 9.1959 7.93494C9.12839 7.9551 9.07165 8.00125 9.03817 8.06324L8.61567 8.84449C8.58229 8.90644 8.5748 8.97909 8.59483 9.04655C8.61485 9.114 8.66077 9.17079 8.72254 9.20449Z" fill="#FFE576"/>
					<path d="M17.3499 5.90539C16.9083 5.90589 16.4849 6.08153 16.1727 6.39379C15.8604 6.70605 15.6848 7.12942 15.6843 7.57102C15.6843 7.77477 15.7261 7.96789 15.7936 8.14852L13.588 9.39977C13.5291 9.43314 13.464 9.4544 13.3967 9.46231C13.3295 9.47021 13.2613 9.4646 13.1962 9.44579C13.1311 9.42699 13.0704 9.39537 13.0177 9.3528C12.965 9.31023 12.9213 9.25757 12.8893 9.19789L10.9661 5.65164C11.1818 5.4983 11.3577 5.29569 11.4792 5.06066C11.6007 4.82563 11.6644 4.56498 11.6649 4.30039C11.6649 3.38164 10.918 2.63477 9.99927 2.63477C9.08052 2.63477 8.33364 3.38164 8.33364 4.30039C8.33364 4.85789 8.61114 5.34914 9.03239 5.65164L7.10927 9.19789C7.07732 9.25752 7.03376 9.31017 6.98117 9.35272C6.92858 9.39528 6.86801 9.42689 6.80303 9.4457C6.73804 9.46451 6.66995 9.47013 6.60276 9.46224C6.53557 9.45436 6.47063 9.43311 6.41177 9.39977L4.20552 8.14852C4.27638 7.96415 4.31343 7.76852 4.31489 7.57102C4.31489 6.65227 3.56802 5.90539 2.64927 5.90539C1.73052 5.90539 0.983643 6.65227 0.983643 7.57102C0.983643 8.48977 1.73052 9.23664 2.64927 9.23664C2.71177 9.23664 2.77114 9.22477 2.83177 9.21852L4.14989 13.9816C3.79647 13.9895 3.46018 14.1355 3.21309 14.3883C2.966 14.6411 2.82777 14.9806 2.82802 15.3341C2.82802 15.9579 3.26239 16.5135 3.86052 16.6541C7.89816 17.6018 12.1004 17.6018 16.138 16.6541C16.7368 16.5129 17.1705 15.9579 17.1705 15.3341C17.1712 14.9805 17.0332 14.6407 16.786 14.3877C16.5388 14.1348 16.2022 13.989 15.8486 13.9816L17.1668 9.21914C17.2274 9.22602 17.2868 9.23727 17.3493 9.23727C18.268 9.23727 19.0149 8.49039 19.0149 7.57164C19.0149 6.65289 18.268 5.90539 17.3499 5.90539ZM9.99989 3.16602C10.6255 3.16602 11.1343 3.67477 11.1343 4.30039C11.1343 4.92602 10.6255 5.43539 9.99989 5.43539C9.37427 5.43539 8.86552 4.92664 8.86552 4.30102C8.86552 3.67539 9.37427 3.16602 9.99989 3.16602ZM1.51552 7.57102C1.51552 6.94539 2.02427 6.43664 2.64989 6.43664C3.27489 6.43664 3.78427 6.94539 3.78427 7.57102C3.78427 8.19664 3.27552 8.70602 2.64989 8.70602C2.02427 8.70602 1.51552 8.19664 1.51552 7.57102ZM16.6405 15.3341C16.6411 15.5183 16.5801 15.6973 16.4671 15.8427C16.3542 15.9881 16.1959 16.0916 16.0174 16.1366C12.0592 17.061 7.94123 17.061 3.98302 16.1366C3.8045 16.0916 3.64618 15.9881 3.53326 15.8427C3.42035 15.6973 3.35932 15.5183 3.35989 15.3341C3.35989 15.0835 3.47239 14.8491 3.66739 14.691C3.75986 14.6157 3.86808 14.5621 3.98404 14.5342C4.10001 14.5062 4.22077 14.5047 4.33739 14.5298C8.06994 15.3304 11.9298 15.3304 15.6624 14.5298C15.8974 14.4804 16.143 14.5379 16.3324 14.691C16.528 14.8491 16.6405 15.0835 16.6405 15.3341ZM15.2755 14.0623C11.794 14.7691 8.20583 14.7691 4.72427 14.0623L3.34552 9.07977C3.57989 8.97102 3.78177 8.80852 3.94239 8.60914L6.14989 9.86227C6.2699 9.93077 6.40248 9.97437 6.53972 9.99048C6.67696 10.0066 6.81604 9.99487 6.94864 9.95602C7.08188 9.91832 7.20617 9.85418 7.31408 9.76742C7.422 9.68066 7.51134 9.57305 7.57677 9.45102L9.51052 5.88477C9.66677 5.93289 9.82864 5.96664 9.99989 5.96664C10.1711 5.96664 10.333 5.93289 10.4886 5.88477L12.4224 9.45102C12.5561 9.69852 12.7793 9.87789 13.0505 9.95602C13.1831 9.99513 13.3223 10.0069 13.4596 9.99072C13.5969 9.9745 13.7294 9.93058 13.8493 9.86164L16.0568 8.60852C16.2174 8.80789 16.4193 8.97102 16.6536 9.07914L15.2755 14.0623ZM17.3499 8.70602C16.7249 8.70602 16.2155 8.19727 16.2155 7.57164C16.2155 6.94602 16.7243 6.43727 17.3499 6.43727C17.9755 6.43727 18.4843 6.94602 18.4843 7.57164C18.4843 8.19727 17.9755 8.70602 17.3499 8.70602Z" fill="#020617"/>
					<path d="M9.99981 9.86914C9.12794 9.86914 8.41919 10.701 8.41919 11.7235C8.41919 12.746 9.12794 13.5779 9.99981 13.5779C10.8717 13.5779 11.5804 12.746 11.5804 11.7235C11.5804 10.701 10.8717 9.86914 9.99981 9.86914ZM9.99981 13.0466C9.42106 13.0466 8.95044 12.4529 8.95044 11.7235C8.95044 10.9941 9.42106 10.4004 9.99981 10.4004C10.5786 10.4004 11.0492 10.9941 11.0492 11.7235C11.0492 12.4529 10.5786 13.0466 9.99981 13.0466Z" fill="#020617"/>
				</svg>
				<span class="tw-text-text-grey-500 tw-text-xs tw-italic tw-leading-4 tw-w-full tw-font-medium">Unlock a variety of professionally designed layouts to enhance the presentation of your product categories.<a href="#" class="tw-text-accent-orange-500 tw-text-xs tw-leading-4 tw-font-semibold">Upgrade To Pro!</a></span>
			</div>
		</div>
	</div>
</div>
<div class="wcss-settings-row wccs-block-selection <?php echo 'block' === $wcss_showcase_layout ? '' : 'tw-hidden'; ?>">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title">Choose Layout Options</h3>
		<p class="wccs-settings-description">Select the template that best fits your store's aesthetic and presentation preferences.</p>
	</div>
	<div class="tw-flex tw-flex-col tw-max-w-[385px] tw-bg-input-grey-50 tw-p-3 tw-rounded-md">
		<div class="tw-max-w-[385px] tw-grid tw-grid-cols-4 tw-gap-y-3 tw-bg-input-grey-50 tw-overflow-auto tw-max-auto tw-max-h-72">
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div>
					<svg class="wccs-layout-primary" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div>
					<svg class="wccs-layout-primary" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-active-before-content">
					<svg class="wccs-layout-active" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div>
					<svg class="wccs-layout-primary" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div>
					<svg class="wccs-layout-primary" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative">
				<div class="wccs-layout-pro-before-content">
					<svg class="wccs-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z"/>
						<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z"/>
					</svg>
				</div>
				<span>Basic</span>
			</div>
		</div>
		<div class="tw-max-w-[385px] ">
			<div class="tw-mt-3 tw-flex tw-flex-row tw-items-center tw-gap-1 tw-w-full">
				<svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M15.1337 15.5891L17.3499 7.57164L13.7187 9.62914C13.6292 9.67993 13.5304 9.71235 13.4283 9.72449C13.3261 9.73663 13.2225 9.72825 13.1236 9.69984C13.0247 9.67144 12.9325 9.62357 12.8523 9.55906C12.7722 9.49454 12.7057 9.41468 12.6568 9.32414L9.9999 4.41602L7.34303 9.32352C7.29394 9.41387 7.22737 9.49355 7.14719 9.55792C7.067 9.62229 6.97481 9.67006 6.87598 9.69845C6.77715 9.72683 6.67366 9.73527 6.57154 9.72326C6.46942 9.71126 6.3707 9.67905 6.28115 9.62852L2.6499 7.57102L4.86615 15.5891H15.1337Z" fill="#FFD731"/>
					<path d="M17.35 7.56836L15.1312 15.5871H12.6375C13.2106 14.6374 13.5723 13.5754 13.6981 12.4734C13.8018 11.5489 13.7368 10.6133 13.5062 9.71211C13.5812 9.69961 13.65 9.66836 13.7187 9.63086L17.35 7.56836Z" fill="#FFC933"/>
					<path d="M16.9055 15.334C16.9067 15.5781 16.8256 15.8156 16.6754 16.0081C16.5252 16.2006 16.3145 16.337 16.0774 16.3952C14.0568 16.8702 12.0249 17.0983 9.99988 17.0983C7.97487 17.0983 5.94238 16.8702 3.92238 16.3952C3.68524 16.337 3.4746 16.2006 3.32438 16.0081C3.17416 15.8156 3.0931 15.5781 3.09425 15.334C3.09425 14.6483 3.72363 14.1258 4.39363 14.2702C6.25863 14.6727 8.13238 14.8671 9.99988 14.8671C11.8674 14.8671 13.7411 14.6733 15.6061 14.2702C16.2761 14.1258 16.9055 14.6483 16.9055 15.334Z" fill="#FFD731"/>
					<path d="M16.906 15.3367C16.906 15.8367 16.5623 16.2805 16.0748 16.393C15.4248 16.543 14.7748 16.6742 14.1248 16.7742C14.4498 16.5492 14.6498 16.1742 14.6498 15.768C14.6498 15.1992 14.2623 14.7305 13.7498 14.5992C14.3685 14.5117 14.9873 14.4055 15.606 14.268C16.2748 14.1242 16.906 14.6492 16.906 15.3367Z" fill="#FFC933"/>
					<path d="M2.64976 8.97188C3.42295 8.97188 4.04976 8.34507 4.04976 7.57188C4.04976 6.79868 3.42295 6.17188 2.64976 6.17188C1.87656 6.17188 1.24976 6.79868 1.24976 7.57188C1.24976 8.34507 1.87656 8.97188 2.64976 8.97188Z" fill="#FFD731"/>
					<path d="M17.35 8.97188C18.1231 8.97188 18.75 8.34507 18.75 7.57188C18.75 6.79868 18.1231 6.17188 17.35 6.17188C16.5768 6.17188 15.95 6.79868 15.95 7.57188C15.95 8.34507 16.5768 8.97188 17.35 8.97188Z" fill="#FFC933"/>
					<path d="M9.99985 5.70039C10.7731 5.70039 11.3999 5.07359 11.3999 4.30039C11.3999 3.52719 10.7731 2.90039 9.99985 2.90039C9.22665 2.90039 8.59985 3.52719 8.59985 4.30039C8.59985 5.07359 9.22665 5.70039 9.99985 5.70039Z" fill="#FFD731"/>
					<path d="M9.99981 13.3123C10.7261 13.3123 11.3148 12.601 11.3148 11.7235C11.3148 10.8461 10.7261 10.1348 9.99981 10.1348C9.27356 10.1348 8.68481 10.8461 8.68481 11.7235C8.68481 12.601 9.27356 13.3123 9.99981 13.3123Z" fill="#FF7F0E"/>
					<path d="M11.3125 11.7242C11.3125 12.5992 10.725 13.3117 10 13.3117C9.85005 13.3117 9.71255 13.2805 9.5813 13.2305C10.1 13.018 10.475 12.4242 10.475 11.7242C10.475 11.0242 10.1 10.4305 9.5813 10.218C9.71255 10.168 9.85005 10.1367 10 10.1367C10.725 10.1367 11.3125 10.8492 11.3125 11.7242Z" fill="#FF7F0E"/>
					<path d="M5.25379 11.6526L4.76379 9.88074C4.75477 9.84704 4.73912 9.81547 4.71776 9.78788C4.69639 9.7603 4.66975 9.73724 4.63937 9.72008C4.60899 9.70291 4.5755 9.69197 4.54084 9.6879C4.50619 9.68383 4.47107 9.68671 4.43754 9.69637C4.40396 9.70562 4.37253 9.7214 4.34505 9.74281C4.31757 9.76422 4.29458 9.79084 4.2774 9.82114C4.26022 9.85144 4.24918 9.88483 4.24491 9.9194C4.24065 9.95398 4.24324 9.98905 4.25254 10.0226L4.74254 11.7945C4.76151 11.8623 4.80655 11.9198 4.8678 11.9545C4.92906 11.9891 5.00154 11.9981 5.06942 11.9795C5.13718 11.9605 5.19465 11.9155 5.22921 11.8542C5.26378 11.7929 5.27262 11.7204 5.25379 11.6526ZM5.55942 12.757C5.5504 12.7232 5.53473 12.6916 5.51333 12.6639C5.49194 12.6362 5.46524 12.6131 5.43481 12.5959C5.40437 12.5787 5.37081 12.5677 5.33608 12.5636C5.30135 12.5595 5.26615 12.5623 5.23254 12.572C5.19896 12.5812 5.16753 12.597 5.14005 12.6184C5.11257 12.6398 5.08958 12.6665 5.0724 12.6968C5.05522 12.7271 5.04418 12.7605 5.03991 12.795C5.03565 12.8296 5.03824 12.8647 5.04754 12.8982L5.09317 13.0639C5.11583 13.1271 5.16155 13.1794 5.22116 13.2104C5.28078 13.2413 5.34988 13.2486 5.41463 13.2307C5.47937 13.2128 5.53497 13.1711 5.57029 13.114C5.6056 13.0569 5.61801 12.9885 5.60504 12.9226L5.55942 12.757ZM8.72254 9.20449C8.7532 9.22125 8.78687 9.23176 8.82162 9.23542C8.85636 9.23908 8.89149 9.23582 8.92496 9.22582C8.95844 9.21582 8.9896 9.19929 9.01665 9.17718C9.04369 9.15507 9.06609 9.12781 9.08254 9.09699L9.50567 8.31574C9.53915 8.25375 9.54664 8.18099 9.52648 8.11348C9.50632 8.04597 9.46016 7.98923 9.39817 7.95574C9.33617 7.92226 9.26342 7.91478 9.1959 7.93494C9.12839 7.9551 9.07165 8.00125 9.03817 8.06324L8.61567 8.84449C8.58229 8.90644 8.5748 8.97909 8.59483 9.04655C8.61485 9.114 8.66077 9.17079 8.72254 9.20449Z" fill="#FFE576"/>
					<path d="M17.3499 5.90539C16.9083 5.90589 16.4849 6.08153 16.1727 6.39379C15.8604 6.70605 15.6848 7.12942 15.6843 7.57102C15.6843 7.77477 15.7261 7.96789 15.7936 8.14852L13.588 9.39977C13.5291 9.43314 13.464 9.4544 13.3967 9.46231C13.3295 9.47021 13.2613 9.4646 13.1962 9.44579C13.1311 9.42699 13.0704 9.39537 13.0177 9.3528C12.965 9.31023 12.9213 9.25757 12.8893 9.19789L10.9661 5.65164C11.1818 5.4983 11.3577 5.29569 11.4792 5.06066C11.6007 4.82563 11.6644 4.56498 11.6649 4.30039C11.6649 3.38164 10.918 2.63477 9.99927 2.63477C9.08052 2.63477 8.33364 3.38164 8.33364 4.30039C8.33364 4.85789 8.61114 5.34914 9.03239 5.65164L7.10927 9.19789C7.07732 9.25752 7.03376 9.31017 6.98117 9.35272C6.92858 9.39528 6.86801 9.42689 6.80303 9.4457C6.73804 9.46451 6.66995 9.47013 6.60276 9.46224C6.53557 9.45436 6.47063 9.43311 6.41177 9.39977L4.20552 8.14852C4.27638 7.96415 4.31343 7.76852 4.31489 7.57102C4.31489 6.65227 3.56802 5.90539 2.64927 5.90539C1.73052 5.90539 0.983643 6.65227 0.983643 7.57102C0.983643 8.48977 1.73052 9.23664 2.64927 9.23664C2.71177 9.23664 2.77114 9.22477 2.83177 9.21852L4.14989 13.9816C3.79647 13.9895 3.46018 14.1355 3.21309 14.3883C2.966 14.6411 2.82777 14.9806 2.82802 15.3341C2.82802 15.9579 3.26239 16.5135 3.86052 16.6541C7.89816 17.6018 12.1004 17.6018 16.138 16.6541C16.7368 16.5129 17.1705 15.9579 17.1705 15.3341C17.1712 14.9805 17.0332 14.6407 16.786 14.3877C16.5388 14.1348 16.2022 13.989 15.8486 13.9816L17.1668 9.21914C17.2274 9.22602 17.2868 9.23727 17.3493 9.23727C18.268 9.23727 19.0149 8.49039 19.0149 7.57164C19.0149 6.65289 18.268 5.90539 17.3499 5.90539ZM9.99989 3.16602C10.6255 3.16602 11.1343 3.67477 11.1343 4.30039C11.1343 4.92602 10.6255 5.43539 9.99989 5.43539C9.37427 5.43539 8.86552 4.92664 8.86552 4.30102C8.86552 3.67539 9.37427 3.16602 9.99989 3.16602ZM1.51552 7.57102C1.51552 6.94539 2.02427 6.43664 2.64989 6.43664C3.27489 6.43664 3.78427 6.94539 3.78427 7.57102C3.78427 8.19664 3.27552 8.70602 2.64989 8.70602C2.02427 8.70602 1.51552 8.19664 1.51552 7.57102ZM16.6405 15.3341C16.6411 15.5183 16.5801 15.6973 16.4671 15.8427C16.3542 15.9881 16.1959 16.0916 16.0174 16.1366C12.0592 17.061 7.94123 17.061 3.98302 16.1366C3.8045 16.0916 3.64618 15.9881 3.53326 15.8427C3.42035 15.6973 3.35932 15.5183 3.35989 15.3341C3.35989 15.0835 3.47239 14.8491 3.66739 14.691C3.75986 14.6157 3.86808 14.5621 3.98404 14.5342C4.10001 14.5062 4.22077 14.5047 4.33739 14.5298C8.06994 15.3304 11.9298 15.3304 15.6624 14.5298C15.8974 14.4804 16.143 14.5379 16.3324 14.691C16.528 14.8491 16.6405 15.0835 16.6405 15.3341ZM15.2755 14.0623C11.794 14.7691 8.20583 14.7691 4.72427 14.0623L3.34552 9.07977C3.57989 8.97102 3.78177 8.80852 3.94239 8.60914L6.14989 9.86227C6.2699 9.93077 6.40248 9.97437 6.53972 9.99048C6.67696 10.0066 6.81604 9.99487 6.94864 9.95602C7.08188 9.91832 7.20617 9.85418 7.31408 9.76742C7.422 9.68066 7.51134 9.57305 7.57677 9.45102L9.51052 5.88477C9.66677 5.93289 9.82864 5.96664 9.99989 5.96664C10.1711 5.96664 10.333 5.93289 10.4886 5.88477L12.4224 9.45102C12.5561 9.69852 12.7793 9.87789 13.0505 9.95602C13.1831 9.99513 13.3223 10.0069 13.4596 9.99072C13.5969 9.9745 13.7294 9.93058 13.8493 9.86164L16.0568 8.60852C16.2174 8.80789 16.4193 8.97102 16.6536 9.07914L15.2755 14.0623ZM17.3499 8.70602C16.7249 8.70602 16.2155 8.19727 16.2155 7.57164C16.2155 6.94602 16.7243 6.43727 17.3499 6.43727C17.9755 6.43727 18.4843 6.94602 18.4843 7.57164C18.4843 8.19727 17.9755 8.70602 17.3499 8.70602Z" fill="#020617"/>
					<path d="M9.99981 9.86914C9.12794 9.86914 8.41919 10.701 8.41919 11.7235C8.41919 12.746 9.12794 13.5779 9.99981 13.5779C10.8717 13.5779 11.5804 12.746 11.5804 11.7235C11.5804 10.701 10.8717 9.86914 9.99981 9.86914ZM9.99981 13.0466C9.42106 13.0466 8.95044 12.4529 8.95044 11.7235C8.95044 10.9941 9.42106 10.4004 9.99981 10.4004C10.5786 10.4004 11.0492 10.9941 11.0492 11.7235C11.0492 12.4529 10.5786 13.0466 9.99981 13.0466Z" fill="#020617"/>
				</svg>
				<span class="tw-text-text-grey-500 tw-text-xs tw-italic tw-leading-4 tw-w-full tw-font-medium">Unlock a variety of professionally designed layouts to enhance the presentation of your product categories.<a href="#" class="tw-text-accent-orange-500 tw-text-xs tw-leading-4 tw-font-semibold">Upgrade To Pro!</a></span>
			</div>
		</div>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Column Breakpoints', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Configure how many columns your category showcase should display based on the users device screen size.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-flex-col">
		<div class="wcss-column-breakpoint">
			<span class="wcss-column-breakpoint-inner">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="">
					<path d="M18.5 2H1.5C1.36739 2 1.24021 2.05268 1.14645 2.14645C1.05268 2.24021 1 2.36739 1 2.5V14.5C1 14.6326 1.05268 14.7598 1.14645 14.8536C1.24021 14.9473 1.36739 15 1.5 15H8V16.5C8 16.6326 7.94732 16.7598 7.85355 16.8536C7.75979 16.9473 7.63261 17 7.5 17H6.5C6.36739 17 6.24021 17.0527 6.14645 17.1464C6.05268 17.2402 6 17.3674 6 17.5V18.5C6 18.6326 6.05268 18.7598 6.14645 18.8536C6.24021 18.9473 6.36739 19 6.5 19H13.5C13.6326 19 13.7598 18.9473 13.8536 18.8536C13.9473 18.7598 14 18.6326 14 18.5V17.5C14 17.3674 13.9473 17.2402 13.8536 17.1464C13.7598 17.0527 13.6326 17 13.5 17H12.5C12.3674 17 12.2402 16.9473 12.1464 16.8536C12.0527 16.7598 12 16.6326 12 16.5V15H18.5C18.6326 15 18.7598 14.9473 18.8536 14.8536C18.9473 14.7598 19 14.6326 19 14.5V2.5C19 2.36739 18.9473 2.24021 18.8536 2.14645C18.7598 2.05268 18.6326 2 18.5 2ZM17 13H3V4H17V13Z" fill="#2270B1"/>
				</svg>
				<span class="tw-text-sm tw-text-text-grey-500"><?php esc_html_e( 'Desktop (1400px)', 'wc-category-showcase' ); ?></span>
			</span>
			<input type="number" name="wcss_column_breakpoint[desktop]" class="wcss-column-breakpoint-inner-input" min="1" value="<?php echo esc_attr( $wcss_column_breakpoint['desktop'] ); ?>">
		</div>
		<div class="wcss-column-breakpoint tw-mt-1">
			<span class="wcss-column-breakpoint-inner">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M18.974 16.342L17 11V3.5C17 3.36739 16.9473 3.24021 16.8536 3.14645C16.7598 3.05268 16.6326 3 16.5 3H3.5C3.36739 3 3.24021 3.05268 3.14645 3.14645C3.05268 3.24021 3 3.36739 3 3.5V11L1.026 16.342C1.00899 16.393 1.00022 16.4463 1 16.5C1 16.6326 1.05268 16.7598 1.14645 16.8536C1.24021 16.9473 1.36739 17 1.5 17H18.5C18.6326 17 18.7598 16.9473 18.8536 16.8536C18.9473 16.7598 19 16.6326 19 16.5C18.9998 16.4463 18.991 16.393 18.974 16.342ZM7 16L7.6665 14H12.3335L13 16H7ZM16 11H4V4H16V11Z" fill="#2270B1"/>
				</svg>
				<span class="tw-text-sm tw-text-text-grey-500"><?php esc_html_e( 'Laptop (1200px)', 'wc-category-showcase' ); ?></span>
			</span>
			<input type="number" name="wcss_column_breakpoint[laptop]" class="wcss-column-breakpoint-inner-input" min="1" value="<?php echo esc_attr( $wcss_column_breakpoint['laptop'] ); ?>">
		</div>
		<div class="wcss-column-breakpoint tw-mt-1">
			<span class="wcss-column-breakpoint-inner">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M18 3H2C1.73478 3 1.48043 3.10536 1.29289 3.29289C1.10536 3.48043 1 3.73478 1 4L1 16C1 16.2652 1.10536 16.5196 1.29289 16.7071C1.48043 16.8946 1.73478 17 2 17H18C18.2652 17 18.5196 16.8946 18.7071 16.7071C18.8946 16.5196 19 16.2652 19 16V4C19 3.73478 18.8946 3.48043 18.7071 3.29289C18.5196 3.10536 18.2652 3 18 3ZM16 15H3V5H16V15ZM17.5 11.25C17.2528 11.25 17.0111 11.1767 16.8055 11.0393C16.6 10.902 16.4398 10.7068 16.3452 10.4784C16.2505 10.2499 16.2258 9.99861 16.274 9.75614C16.3222 9.51366 16.4413 9.29093 16.6161 9.11612C16.7909 8.9413 17.0137 8.82225 17.2561 8.77402C17.4986 8.72579 17.7499 8.75054 17.9784 8.84515C18.2068 8.93976 18.402 9.09998 18.5393 9.30554C18.6767 9.5111 18.75 9.75277 18.75 10C18.75 10.1642 18.7177 10.3267 18.6549 10.4784C18.592 10.63 18.5 10.7678 18.3839 10.8839C18.2678 11 18.13 11.092 17.9784 11.1548C17.8267 11.2177 17.6642 11.25 17.5 11.25Z" fill="#2270B1"/>
				</svg>
				<span class="tw-text-sm tw-text-text-grey-500"><?php esc_html_e( 'Tablet (768px)', 'wc-category-showcase' ); ?></span>
			</span>
			<input type="number" name="wcss_column_breakpoint[tablet]" class="wcss-column-breakpoint-inner-input" min="1" value="<?php echo esc_attr( $wcss_column_breakpoint['tablet'] ); ?>">
		</div>
		<div class="wcss-column-breakpoint tw-mt-1">
			<span class="wcss-column-breakpoint-inner">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M14 1H6C5.73478 1 5.48043 1.10536 5.29289 1.29289C5.10536 1.48043 5 1.73478 5 2V18C5 18.2652 5.10536 18.5196 5.29289 18.7071C5.48043 18.8946 5.73478 19 6 19H14C14.2652 19 14.5196 18.8946 14.7071 18.7071C14.8946 18.5196 15 18.2652 15 18V2C15 1.73478 14.8946 1.48043 14.7071 1.29289C14.5196 1.10536 14.2652 1 14 1V1ZM9.5 2H10.5C10.631 2.00506 10.7552 2.05937 10.8479 2.15206C10.9406 2.24476 10.9949 2.36901 11 2.5C10.9951 2.63103 10.9408 2.75535 10.8481 2.84807C10.7553 2.94078 10.631 2.99505 10.5 3H9.5C9.36831 2.99707 9.24283 2.94345 9.14969 2.85031C9.05655 2.75717 9.00293 2.63169 9 2.5C9.00305 2.36835 9.05671 2.24294 9.14982 2.14982C9.24294 2.05671 9.36835 2.00305 9.5 2ZM10 18.55C9.79233 18.55 9.58932 18.4884 9.41665 18.373C9.24398 18.2577 9.1094 18.0937 9.02993 17.9018C8.95045 17.71 8.92966 17.4988 8.97018 17.2952C9.01069 17.0915 9.11069 16.9044 9.25754 16.7575C9.40438 16.6107 9.59148 16.5107 9.79516 16.4702C9.99884 16.4297 10.21 16.4505 10.4018 16.5299C10.5937 16.6094 10.7577 16.744 10.873 16.9167C10.9884 17.0893 11.05 17.2923 11.05 17.5C11.05 17.6379 11.0228 17.7744 10.9701 17.9018C10.9173 18.0292 10.84 18.145 10.7425 18.2425C10.645 18.34 10.5292 18.4173 10.4018 18.4701C10.2744 18.5228 10.1379 18.55 10 18.55ZM14 16H6V4H14V16Z" fill="#2270B1"/>
				</svg>
				<span class="tw-text-sm tw-text-text-grey-500"><?php esc_html_e( 'Mobile (576px)', 'wc-category-showcase' ); ?></span>
			</span>
			<input type="number" name="wcss_column_breakpoint[mobile]" class="wcss-column-breakpoint-inner-input" min="1" value="<?php echo esc_attr( $wcss_column_breakpoint['mobile'] ); ?>">
		</div>
	</div>
</div>
<div class="wcss-settings-row-title wccs-block-slider-category-selection <?php echo ( 'block' === $wcss_showcase_layout && 'slider' === $wccs_display_mode ) ? '' : 'tw-hidden'; ?>">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M19.3333 2.40039H4.66667C4.29848 2.40039 4 2.69887 4 3.06706V16.4004C4 16.7686 4.29848 17.0671 4.66667 17.0671H19.3333C19.7015 17.0671 20 16.7686 20 16.4004V3.06706C20 2.69887 19.7015 2.40039 19.3333 2.40039Z" fill="#2270B1"/>
		<path d="M2.66667 15.7337H0.666667C0.489856 15.7337 0.320286 15.6635 0.195262 15.5385C0.0702379 15.4134 0 15.2439 0 15.0671V5.73372C0 5.55691 0.0702379 5.38734 0.195262 5.26232C0.320286 5.1373 0.489856 5.06706 0.666667 5.06706H2.66667V15.7337ZM23.3333 15.7337H21.3333V5.06706H23.3333C23.5101 5.06706 23.6797 5.1373 23.8047 5.26232C23.9298 5.38734 24 5.55691 24 5.73372V15.0671C24 15.2439 23.9298 15.4134 23.8047 15.5385C23.6797 15.6635 23.5101 15.7337 23.3333 15.7337Z" fill="#2270B1"/>
		<path d="M5.33333 22.0004C5.8488 22.0004 6.26667 21.5825 6.26667 21.0671C6.26667 20.5516 5.8488 20.1337 5.33333 20.1337C4.81787 20.1337 4.4 20.5516 4.4 21.0671C4.4 21.5825 4.81787 22.0004 5.33333 22.0004Z" fill="#2270B1"/>
		<path d="M9.33333 22.4671C10.1065 22.4671 10.7333 21.8403 10.7333 21.0671C10.7333 20.2939 10.1065 19.6671 9.33333 19.6671C8.56013 19.6671 7.93333 20.2939 7.93333 21.0671C7.93333 21.8403 8.56013 22.4671 9.33333 22.4671Z" fill="#2270B1"/>
		<path d="M13.3333 22.0004C13.8488 22.0004 14.2667 21.5825 14.2667 21.0671C14.2667 20.5516 13.8488 20.1337 13.3333 20.1337C12.8179 20.1337 12.4 20.5516 12.4 21.0671C12.4 21.5825 12.8179 22.0004 13.3333 22.0004Z" fill="#2270B1"/>
		<path d="M17.3333 22.0004C17.8488 22.0004 18.2667 21.5825 18.2667 21.0671C18.2667 20.5516 17.8488 20.1337 17.3333 20.1337C16.8179 20.1337 16.4 20.5516 16.4 21.0671C16.4 21.5825 16.8179 22.0004 17.3333 22.0004Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Slider Block', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcss-settings-row wccs-block-slider-category-selection <?php echo ( 'block' === $wcss_showcase_layout && 'slider' === $wccs_display_mode ) ? '' : 'tw-hidden'; ?>">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><label for="wccs_block_slider_category"><?php esc_html_e( 'Choose Categories for Block Slider', 'wc-category-showcase' ); ?></label></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Decide whether to display all product categories or selectively choose specific ones to showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-flex-col tw-items-center">
		<div class="tw-min-w-[400px] tw-max-w-[400px]">
			<select multiple="multiple" name="wccs_block_slider_category[]" id="wccs_block_slider_category" class="tw-min-w-[400px] tw-max-w-[400px] !tw-bg-input-grey-50 !tw-border-divider-grey-100">
				<?php foreach ( $wccs_block_slider_category as $category_id ) : ?>
					<?php if ( ! empty( $category_id ) ) : ?>
						<option value="<?php echo esc_attr( $category_id ); ?>" selected="selected"><?php echo esc_attr( \WooCommerceCategoryShowcase\Controllers\Helpers::get_category_title( $category_id ) ); ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="tw-mt-6 wccs-selected-category-list">
<!--			<div class="wcss-category-list-item"></div>-->
		</div>
	</div>
</div>
<div class="wcss-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M9.71917 17.4482H9.07965V11.4281H10.7864C11.0859 10.9903 11.4307 10.5866 11.8147 10.2241H9.07965V4.20401H13.7994V8.881C14.1803 8.70897 14.5751 8.57099 14.9794 8.46863V4.20401H19.6991V8.881C20.1123 9.06847 20.5073 9.29501 20.8791 9.55766V3.60201C20.8791 3.44234 20.8169 3.28922 20.7063 3.17632C20.5956 3.06343 20.4456 3 20.2891 3H2.58997C2.4335 3 2.28344 3.06343 2.1728 3.17632C2.06216 3.28922 2 3.44234 2 3.60201V18.0502C2 18.2098 2.06216 18.363 2.1728 18.4758C2.28344 18.5887 2.4335 18.6522 2.58997 18.6522H10.1233C9.95471 18.2635 9.81949 17.8607 9.71917 17.4482ZM7.8997 17.4482H3.17994V11.4281H7.8997V17.4482ZM7.8997 10.2241H3.17994V4.20401H7.8997V10.2241Z" fill="#2270B1"/>
		<path d="M16.7493 10.2843C15.7108 10.2843 14.6956 10.5985 13.8321 11.1872C12.9686 11.776 12.2956 12.6128 11.8982 13.5918C11.5008 14.5708 11.3968 15.6481 11.5994 16.6874C11.802 17.7267 12.3021 18.6814 13.0364 19.4307C13.7708 20.18 14.7064 20.6903 15.7249 20.897C16.7434 21.1038 17.7992 20.9977 18.7586 20.5922C19.7181 20.1866 20.5381 19.4999 21.1151 18.6188C21.692 17.7377 22 16.7018 22 15.6421C22 14.2211 21.4468 12.8584 20.4621 11.8536C19.4774 10.8488 18.1418 10.2843 16.7493 10.2843ZM15.3699 18.9002L12.9345 16.4157C12.8792 16.3593 12.8481 16.2827 12.8481 16.2029C12.8481 16.1231 12.8792 16.0465 12.9345 15.9901L13.5457 15.3664C13.601 15.31 13.6761 15.2783 13.7543 15.2783C13.8325 15.2783 13.9075 15.31 13.9628 15.3664L15.574 17.0105L19.1764 13.3346C19.2317 13.2782 19.3067 13.2465 19.385 13.2465C19.4632 13.2465 19.5382 13.2782 19.5935 13.3346L20.2088 13.9625C20.2641 14.019 20.2952 14.0955 20.2952 14.1753C20.2952 14.2552 20.2641 14.3317 20.2088 14.3882L15.7841 18.9032C15.7285 18.9583 15.6539 18.9889 15.5764 18.9883C15.4989 18.9878 15.4247 18.9561 15.3699 18.9002Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Category Selection', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Category Filter', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Decide whether to display all product categories or selectively choose specific ones to showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<span class="tw-isolate tw-inline-flex tw-p-1 tw-rounded-md tw-bg-input-grey-50 tw-shadow-sm tw-min-w-[385px]">
			<label class="tw-w-1/2 wccs-category-filter <?php echo 'all' === $wccs_category_filter ? 'wcss-group-button-active' : 'wcss-group-button'; ?>">
				<svg class="<?php echo 'all' === $wccs_category_filter ? 'wcss-group-button-active-icon' : 'wcss-group-button-icon'; ?>" xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="currentColor">
					<path d="M6.83325 18H3.33325C3.20064 18 3.07347 17.9473 2.9797 17.8536C2.88593 17.7598 2.83325 17.6326 2.83325 17.5V2.5C2.83325 2.36739 2.88593 2.24021 2.9797 2.14645C3.07347 2.05268 3.20064 2 3.33325 2H6.83325V18ZM8.83325 2H12.8333V18H8.83325V2ZM18.3333 18H14.8333V2H18.3333C18.4659 2 18.593 2.05268 18.6868 2.14645C18.7806 2.24021 18.8333 2.36739 18.8333 2.5V17.5C18.8333 17.6326 18.7806 17.7598 18.6868 17.8536C18.593 17.9473 18.4659 18 18.3333 18Z"/>
				</svg>
				<input type="radio" name="wccs_category_filter" class="!tw-hidden" value="<?php echo esc_attr( 'all' ); ?>" <?php if ( 'all' === $wccs_category_filter ) { echo 'checked'; } ?>>
				<?php esc_html_e( 'All', 'wc-category-showcase' ); ?>
			</label>
			<label class="tw-w-1/2 wccs-category-filter <?php echo 'specific' === $wccs_category_filter ? 'wcss-group-button-active' : 'wcss-group-button'; ?>">
				<svg class="<?php echo 'specific' === $wccs_category_filter ? 'wcss-group-button-active-icon' : 'wcss-group-button-icon'; ?>" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
					<path d="M16.1111 2.00003H3.88889C3.58206 2.00003 3.33333 2.24876 3.33333 2.55559V13.6667C3.33333 13.9735 3.58206 14.2223 3.88889 14.2223H16.1111C16.4179 14.2223 16.6667 13.9735 16.6667 13.6667V2.55559C16.6667 2.24876 16.4179 2.00003 16.1111 2.00003Z"/>
					<path d="M2.22222 13.1111H0.555556C0.408213 13.1111 0.266905 13.0526 0.162718 12.9484C0.0585316 12.8442 0 12.7029 0 12.5556V4.77781C0 4.63047 0.0585316 4.48916 0.162718 4.38497C0.266905 4.28078 0.408213 4.22225 0.555556 4.22225H2.22222V13.1111ZM19.4444 13.1111H17.7778V4.22225H19.4444C19.5918 4.22225 19.7331 4.28078 19.8373 4.38497C19.9415 4.48916 20 4.63047 20 4.77781V12.5556C20 12.7029 19.9415 12.8442 19.8373 12.9484C19.7331 13.0526 19.5918 13.1111 19.4444 13.1111Z"/>
					<path d="M4.44444 18.3334C4.874 18.3334 5.22222 17.9851 5.22222 17.5556C5.22222 17.126 4.874 16.7778 4.44444 16.7778C4.01489 16.7778 3.66667 17.126 3.66667 17.5556C3.66667 17.9851 4.01489 18.3334 4.44444 18.3334Z"/>
					<path d="M7.77778 18.7223C8.42211 18.7223 8.94445 18.1999 8.94445 17.5556C8.94445 16.9113 8.42211 16.3889 7.77778 16.3889C7.13345 16.3889 6.61111 16.9113 6.61111 17.5556C6.61111 18.1999 7.13345 18.7223 7.77778 18.7223Z"/>
					<path d="M11.1111 18.3334C11.5407 18.3334 11.8889 17.9851 11.8889 17.5556C11.8889 17.126 11.5407 16.7778 11.1111 16.7778C10.6816 16.7778 10.3333 17.126 10.3333 17.5556C10.3333 17.9851 10.6816 18.3334 11.1111 18.3334Z"/>
					<path d="M14.4444 18.3334C14.874 18.3334 15.2222 17.9851 15.2222 17.5556C15.2222 17.126 14.874 16.7778 14.4444 16.7778C14.0149 16.7778 13.6667 17.126 13.6667 17.5556C13.6667 17.9851 14.0149 18.3334 14.4444 18.3334Z"/>
				</svg>
				<input type="radio" name="wccs_category_filter" class="!tw-hidden" value="<?php echo esc_attr( 'specific' ); ?>" <?php echo 'specific' === $wccs_category_filter ? 'checked' : ''; ?>>
				<?php esc_html_e( 'Specific', 'wc-category-showcase' ); ?>
			</label>
		</span>
	</div>
</div>
<div class="wcss-settings-row wccs-category-selection <?php echo 'specific' === $wccs_category_filter ? '' : 'tw-hidden'; ?>">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><label for="wccs_specific_category_select"><?php esc_html_e( 'Category Selection', 'wc-category-showcase' ); ?></label></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'If selecting specific categories, use multi-select mode to easily pick the ones you want to showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-flex-col tw-items-center">
		<div class="tw-min-w-[400px] tw-max-w-[400px]">
			<select multiple="multiple" name="wccs_specific_category_select[]" id="wccs_specific_category_select" class="tw-min-w-[400px] tw-max-w-[400px] !tw-bg-input-grey-50 !tw-border-divider-grey-100">
				<?php foreach ( $wccs_specific_category_select as $category_id ) : ?>
					<?php if ( ! empty( $category_id ) ) : ?>
						<option value="<?php echo esc_attr( $category_id ); ?>" selected="selected"><?php echo esc_attr( \WooCommerceCategoryShowcase\Controllers\Helpers::get_category_title( $category_id ) ); ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="tw-mt-6 wccs-selected-category-list">
			<div class="wcss-category-list-item"></div>
		</div>
		<div class="tw-width-[56px] tw-h-[56px] wccs-loader tw-hidden">
			<img class="tw-width-[24px] tw-h-[24px]" src="<?php echo esc_url( WC_CATEGORY_SHOWCASE_ASSETS_URL . '/images/loading.gif' ); ?>" alt="">
		</div>
	</div>
</div>

<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Sort By', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Specify the criteria by which you want your categories to be ordered within the showcase display.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<select name="wccs_category_short_by" id="wccs_category_short_by" class="tw-w-60 !tw-bg-input-grey-50 !tw-border-divider-grey-100">
			<option value="default"><?php esc_html_e( 'Default', 'wc-category-showcase' ); ?></option>
			<option value="name"><?php esc_html_e( 'Name', 'wc-category-showcase' ); ?></option>
			<option value="date"><?php esc_html_e( 'Date', 'wc-category-showcase' ); ?></option>
			<option value="product-count"><?php esc_html_e( 'Product Count', 'wc-category-showcase' ); ?></option>
			<option value="cat-id"><?php esc_html_e( 'Category ID', 'wc-category-showcase' ); ?></option>
		</select>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Sort Order', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Determine whether your categories should be arranged in ascending or descending order according to the selected criteria.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<select name="wccs_category_short_order" id="wccs_category_short_order" class="tw-w-60 !tw-bg-input-grey-50 !tw-border-divider-grey-100">
			<option value="asc"><?php esc_html_e( 'Ascending', 'wc-category-showcase' ); ?></option>
			<option value="desc"><?php esc_html_e( 'Descending', 'wc-category-showcase' ); ?></option>
		</select>
	</div>
</div>

<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title">
			<label for="wcss_category_display_limit"><?php esc_html_e( 'Categories Display Limit', 'wc-category-showcase' ); ?></label>
		</h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Set the maximum number of categories to be displayed in your showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center tw-bg-bg-grey-50">
		<input type="number" name="wcss_category_display_limit" id="wcss_category_display_limit" min="1" step="any" class="wccs-settings-field" placeholder="<?php esc_html_e( 'Ex: 12', 'wc-category-showcase' ); ?>" value="<?php echo esc_attr( $wcss_category_display_limit ); ?>">
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Include Sub-categories', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Choose whether to include child categories along with parent categories in your showcase display.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input class="tw-sr-only tw-peer" type="checkbox" name="wccs_includes_sub_categories" value="<?php echo esc_attr( 'yes' ); ?>" <?php if ( 'yes' === $wccs_includes_sub_categories ) { echo 'checked'; } ?>>
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Hide Empty Categories', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Hide empty categories if categories has no products to show.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input class="tw-sr-only tw-peer" type="checkbox" name="wccs_hide_empty_categories" value="<?php echo esc_attr( 'yes' ); ?>" <?php if ( 'yes' === $wccs_hide_empty_categories ) { echo 'checked'; } ?>>
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.6875 5.03566H10.6875C10.5441 4.32005 10.1608 3.67668 9.60266 3.21456C9.04453 2.75245 8.34585 2.5 7.625 2.5C6.90415 2.5 6.20547 2.75245 5.64734 3.21456C5.08921 3.67668 4.70595 4.32005 4.5625 5.03566H2.3125C2.22962 5.03566 2.15013 5.06901 2.09153 5.12838C2.03292 5.18775 2 5.26826 2 5.35222V5.98534C2 6.0693 2.03292 6.14982 2.09153 6.20919C2.15013 6.26855 2.22962 6.3019 2.3125 6.3019H4.5625C4.70595 7.01751 5.08921 7.66088 5.64734 8.123C6.20547 8.58512 6.90415 8.83756 7.625 8.83756C8.34585 8.83756 9.04453 8.58512 9.60266 8.123C10.1608 7.66088 10.5441 7.01751 10.6875 6.3019H21.6875C21.7704 6.3019 21.8499 6.26855 21.9085 6.20919C21.9671 6.14982 22 6.0693 22 5.98534V5.35222C22 5.26826 21.9671 5.18775 21.9085 5.12838C21.8499 5.06901 21.7704 5.03566 21.6875 5.03566ZM7.625 7.56815C7.25416 7.56815 6.89165 7.45675 6.58331 7.24805C6.27496 7.03934 6.03464 6.7427 5.89273 6.39564C5.75081 6.04857 5.71368 5.66668 5.78603 5.29823C5.85837 4.92979 6.03695 4.59136 6.29917 4.32573C6.5614 4.0601 6.89549 3.8792 7.25921 3.80591C7.62292 3.73263 7.99992 3.77024 8.34253 3.914C8.68514 4.05776 8.97798 4.3012 9.18401 4.61355C9.39003 4.9259 9.5 5.29312 9.5 5.66878C9.5 6.17253 9.30246 6.65564 8.95083 7.01184C8.59919 7.36804 8.12228 7.56815 7.625 7.56815ZM21.6875 17.6981H13.1875C13.0441 16.9825 12.6608 16.3391 12.1027 15.877C11.5445 15.4149 10.8458 15.1624 10.125 15.1624C9.40415 15.1624 8.70547 15.4149 8.14734 15.877C7.58921 16.3391 7.20595 16.9825 7.0625 17.6981H2.3125C2.22962 17.6981 2.15013 17.7314 2.09153 17.7908C2.03292 17.8502 2 17.9307 2 18.0147V18.6478C2 18.7317 2.03292 18.8123 2.09153 18.8716C2.15013 18.931 2.22962 18.9643 2.3125 18.9643H7.0625C7.20595 19.68 7.58921 20.3233 8.14734 20.7854C8.70547 21.2476 9.40415 21.5 10.125 21.5C10.8458 21.5 11.5445 21.2476 12.1027 20.7854C12.6608 20.3233 13.0441 19.68 13.1875 18.9643H21.6875C21.7704 18.9643 21.8499 18.931 21.9085 18.8716C21.9671 18.8123 22 18.7317 22 18.6478V18.0147C22 17.9307 21.9671 17.8502 21.9085 17.7908C21.8499 17.7314 21.7704 17.6981 21.6875 17.6981ZM10.125 20.2306C9.75416 20.2306 9.39165 20.1192 9.08331 19.9105C8.77496 19.7018 8.53464 19.4051 8.39273 19.0581C8.25081 18.711 8.21368 18.3291 8.28603 17.9607C8.35837 17.5922 8.53695 17.2538 8.79917 16.9882C9.0614 16.7225 9.39549 16.5416 9.75921 16.4683C10.1229 16.3951 10.4999 16.4327 10.8425 16.5764C11.1851 16.7202 11.478 16.9636 11.684 17.276C11.89 17.5883 12 17.9556 12 18.3312C12 18.835 11.8025 19.3181 11.4508 19.6743C11.0992 20.0305 10.6223 20.2306 10.125 20.2306ZM2 11.6834V12.3166C2 12.4005 2.03292 12.481 2.09153 12.5404C2.15013 12.5998 2.22962 12.6331 2.3125 12.6331H13.3125C13.4559 13.3487 13.8392 13.9921 14.3973 14.4542C14.9555 14.9163 15.6542 15.1688 16.375 15.1688C17.0958 15.1688 17.7945 14.9163 18.3527 14.4542C18.9108 13.9921 19.2941 13.3487 19.4375 12.6331H21.6875C21.7704 12.6331 21.8499 12.5998 21.9085 12.5404C21.9671 12.481 22 12.4005 22 12.3166V11.6834C22 11.5995 21.9671 11.519 21.9085 11.4596C21.8499 11.4002 21.7704 11.3669 21.6875 11.3669H19.4375C19.2941 10.6513 18.9108 10.0079 18.3527 9.54578C17.7945 9.08366 17.0958 8.83122 16.375 8.83122C15.6542 8.83122 14.9555 9.08366 14.3973 9.54578C13.8392 10.0079 13.4559 10.6513 13.3125 11.3669H2.3125C2.22962 11.3669 2.15013 11.4002 2.09153 11.4596C2.03292 11.519 2 11.5995 2 11.6834ZM14.5 12C14.5 11.6243 14.61 11.2571 14.816 10.9448C15.022 10.6324 15.3149 10.389 15.6575 10.2452C16.0001 10.1015 16.3771 10.0638 16.7408 10.1371C17.1045 10.2104 17.4386 10.3913 17.7008 10.6569C17.963 10.9226 18.1416 11.261 18.214 11.6295C18.2863 11.9979 18.2492 12.3798 18.1073 12.7269C17.9654 13.0739 17.725 13.3706 17.4167 13.5793C17.1084 13.788 16.7458 13.8994 16.375 13.8994C15.8777 13.8994 15.4008 13.6993 15.0492 13.3431C14.6975 12.9869 14.5 12.5037 14.5 12Z" fill="#2270B1"/>
		<circle cx="7.5" cy="5.5" r="2.5" fill="#2270B1"/>
		<circle cx="16.5" cy="11.5" r="2.5" fill="#2270B1"/>
		<circle cx="10.5" cy="18.5" r="2.5" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Key Settings', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Automatic Column Adjustment', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Enable this feature to allow the plugin to automatically adjust the number of columns based on the available screen space.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="inline-flex tw-cursor-pointer">
			<input class="tw-sr-only tw-peer" type="checkbox" name="wccs_column_adjustment" value="<?php echo esc_attr( 'yes' ); ?>" <?php if ( 'yes' === $wccs_column_adjustment ) { echo 'checked'; } ?>>
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Pre-loader', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Slider will be hidden until the page has fully loaded.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input class="tw-sr-only tw-peer" type="checkbox" name="wccs_pre_loader" value="<?php echo esc_attr( 'yes' ); ?>" <?php if ( 'yes' === $wccs_pre_loader ) { echo 'checked'; } ?>>
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
