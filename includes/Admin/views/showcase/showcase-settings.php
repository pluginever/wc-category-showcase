<?php
/**
 * Showcase settings tab.
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
		<path d="M22.607 15.4393H21.2284C21.1275 14.93 20.9299 14.4452 20.6466 14.0117L21.628 13.0204C21.6645 12.9834 21.6935 12.9396 21.7133 12.8913C21.7331 12.8431 21.7433 12.7914 21.7433 12.7391C21.7433 12.6869 21.7331 12.6352 21.7133 12.5869C21.6935 12.5387 21.6645 12.4948 21.628 12.4579L21.0325 11.8563C20.9959 11.8194 20.9525 11.7901 20.9047 11.7701C20.857 11.7501 20.8058 11.7398 20.7541 11.7398C20.7024 11.7398 20.6512 11.7501 20.6034 11.7701C20.5556 11.7901 20.5122 11.8194 20.4757 11.8563L19.4955 12.8465C19.0664 12.5601 18.5865 12.3604 18.0823 12.2582V10.8661C18.0823 10.7607 18.0409 10.6595 17.967 10.585C17.8932 10.5104 17.7931 10.4685 17.6887 10.4685H16.8985C16.7941 10.4685 16.694 10.5104 16.6201 10.585C16.5463 10.6595 16.5048 10.7607 16.5048 10.8661V12.2588C16.0006 12.3609 15.5208 12.5607 15.0917 12.8471L14.1103 11.8551C14.0738 11.8182 14.0304 11.7889 13.9826 11.7689C13.9348 11.7489 13.8836 11.7386 13.8319 11.7386C13.7802 11.7386 13.729 11.7489 13.6812 11.7689C13.6335 11.7889 13.5901 11.8182 13.5535 11.8551L12.958 12.4567C12.9214 12.4936 12.8924 12.5375 12.8726 12.5857C12.8529 12.634 12.8427 12.6857 12.8427 12.7379C12.8427 12.7902 12.8529 12.8419 12.8726 12.8901C12.8924 12.9384 12.9214 12.9822 12.958 13.0192L13.9394 14.0105C13.6561 14.444 13.4585 14.9288 13.3576 15.4381H11.9778C11.8734 15.4381 11.7733 15.48 11.6995 15.5545C11.6257 15.6291 11.5842 15.7302 11.5842 15.8357V16.631C11.5842 16.7364 11.6257 16.8376 11.6995 16.9122C11.7733 16.9867 11.8734 17.0286 11.9778 17.0286H13.3564C13.4573 17.5379 13.6549 18.0227 13.9382 18.4561L12.9568 19.4493C12.9203 19.4863 12.8912 19.5301 12.8715 19.5784C12.8517 19.6266 12.8415 19.6783 12.8415 19.7306C12.8415 19.7828 12.8517 19.8345 12.8715 19.8828C12.8912 19.931 12.9203 19.9749 12.9568 20.0118L13.5523 20.6134C13.5889 20.6503 13.6323 20.6796 13.6801 20.6996C13.7278 20.7196 13.779 20.7299 13.8307 20.7299C13.8824 20.7299 13.9336 20.7196 13.9814 20.6996C14.0292 20.6796 14.0726 20.6503 14.1091 20.6134L15.0905 19.622C15.5196 19.9082 15.9995 20.1077 16.5036 20.2097V21.6024C16.5036 21.7078 16.5451 21.809 16.6189 21.8835C16.6928 21.9581 16.7929 22 16.8973 22H17.6845C17.7889 22 17.8891 21.9581 17.9629 21.8835C18.0367 21.809 18.0782 21.7078 18.0782 21.6024V20.2109C18.5823 20.1089 19.0622 19.9094 19.4913 19.6232L20.4727 20.6146C20.5092 20.6515 20.5526 20.6808 20.6004 20.7008C20.6482 20.7208 20.6994 20.7311 20.7511 20.7311C20.8028 20.7311 20.854 20.7208 20.9018 20.7008C20.9495 20.6808 20.9929 20.6515 21.0295 20.6146L21.625 20.013C21.6616 19.9761 21.6906 19.9322 21.7104 19.884C21.7301 19.8357 21.7403 19.784 21.7403 19.7318C21.7403 19.6795 21.7301 19.6278 21.7104 19.5796C21.6906 19.5313 21.6616 19.4875 21.625 19.4505L20.646 18.4604C20.9293 18.0269 21.1269 17.5421 21.2278 17.0328H22.6064C22.6581 17.0328 22.7092 17.0225 22.757 17.0026C22.8048 16.9826 22.8482 16.9533 22.8847 16.9164C22.9213 16.8794 22.9503 16.8356 22.97 16.7874C22.9898 16.7391 23 16.6874 23 16.6352V15.8369C23 15.7316 22.9586 15.6305 22.8849 15.556C22.8112 15.4814 22.7113 15.4394 22.607 15.4393ZM17.2921 18.4002C16.8681 18.4002 16.4536 18.2732 16.1011 18.0352C15.7485 17.7973 15.4737 17.459 15.3115 17.0633C15.1492 16.6676 15.1068 16.2321 15.1895 15.8121C15.2722 15.392 15.4764 15.0061 15.7762 14.7032C16.076 14.4003 16.458 14.1941 16.8739 14.1105C17.2897 14.0269 17.7208 14.0698 18.1125 14.2337C18.5042 14.3977 18.839 14.6752 19.0746 15.0314C19.3102 15.3875 19.4359 15.8062 19.4359 16.2345C19.4359 16.5189 19.3805 16.8006 19.2727 17.0633C19.165 17.3261 19.0071 17.5648 18.808 17.7659C18.6089 17.967 18.3726 18.1265 18.1125 18.2354C17.8524 18.3442 17.5736 18.4002 17.2921 18.4002Z" fill="#2270B1"/>
		<path d="M10.5534 18.6408H4.19101V6.60942H20.8651V9.98122C21.2906 10.2303 21.6897 10.5227 22.0561 10.8541V3.60157C22.0561 3.44202 21.9934 3.28901 21.8817 3.1762C21.77 3.06338 21.6186 3 21.4606 3H3.5955C3.43757 3 3.2861 3.06338 3.17442 3.1762C3.06274 3.28901 3 3.44202 3 3.60157V19.2424C3 19.4019 3.06274 19.555 3.17442 19.6678C3.2861 19.7806 3.43757 19.844 3.5955 19.844H11.1018C10.883 19.4607 10.6994 19.058 10.5534 18.6408Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Essentials', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Section Heading', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'This setting allows you to customize the section heading for the category showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-flex tw-cursor-pointer tw-flex-col">
			<div>
				<input type="checkbox" name="wcc_showcase_show_section_title" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer wcc_showcase-show-hide-section-title" <?php if ( 'yes' === $showcase_details['show_section_title'] ) { echo 'checked'; } ?>>
				<div class="wcc_showcase-toggle"></div>
			</div>
			<input class="tw-w-[350px] tw-mt-2 <?php echo 'yes' === $showcase_details['show_section_title'] ? '' : 'tw-hidden'; ?> tw-text-sm wcc_showcase-settings-field-border" type="text" name="wcc_showcase_section_title" id="wcc_showcase_section_title" value="<?php echo esc_attr( $showcase_details['section_title'] ); ?>" placeholder="<?php esc_html_e( 'Add title...', 'wc-category-showcase' ); ?>">
		</label>
	</div>
</div>

<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Section Description', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'This setting allows you to customize the section description for the category showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-flex tw-flex-col tw-cursor-pointer">
			<div>
				<input type="checkbox" name="wcc_showcase_show_section_description" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer wcc_showcase-show-hide-section-description" <?php if ( 'yes' === $showcase_details['show_section_description'] ) { echo 'checked'; } ?>>
				<div class="wcc_showcase-toggle"></div>
			</div>
			<textarea class="tw-w-[350px] tw-mt-2 <?php echo 'yes' === $showcase_details['show_section_description'] ? '' : 'tw-hidden'; ?> tw-text-sm wcc_showcase-settings-field-border" name="wcc_showcase_section_description" id="wcc_showcase_section_description" cols="30" rows="4" placeholder="<?php esc_html_e( 'Add description...', 'wc-category-showcase' ); ?>"><?php echo esc_attr( $showcase_details['section_description'] ); ?></textarea>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row <?php echo 'grid' === $showcase_details['layout'] ? 'tw-hidden' : ''; ?>">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Alignment', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'This setting allows you to customize the alignment of the section heading and description.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-flex-col tw-max-w-[385px] tw-rounded-md tw-justify-center">
		<div class="tw-max-w-[230px] tw-grid tw-grid-cols-3 tw-gap-x-4 tw-gap-y-4">
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc-showcase-heading-alignment">
				<div class="<?php echo 'left' === $showcase_details['heading_alignment'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 'left' === $showcase_details['heading_alignment'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20" fill="currentColor">
						<path d="M3.25 1H2.75C2.61193 1 2.5 1.11193 2.5 1.25V18.75C2.5 18.8881 2.61193 19 2.75 19H3.25C3.38807 19 3.5 18.8881 3.5 18.75V1.25C3.5 1.11193 3.38807 1 3.25 1Z"/>
						<path d="M17 11H5C4.72386 11 4.5 11.2239 4.5 11.5V15.5C4.5 15.7761 4.72386 16 5 16H17C17.2761 16 17.5 15.7761 17.5 15.5V11.5C17.5 11.2239 17.2761 11 17 11Z"/>
						<path d="M12 4H5C4.72386 4 4.5 4.22386 4.5 4.5V8.5C4.5 8.77614 4.72386 9 5 9H12C12.2761 9 12.5 8.77614 12.5 8.5V4.5C12.5 4.22386 12.2761 4 12 4Z"/>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wcc_showcase_heading_alignment" value="<?php echo esc_attr( 'left' ); ?>" <?php echo 'left' === $showcase_details['heading_alignment'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Left', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc-showcase-heading-alignment">
				<div class="<?php echo 'center' === $showcase_details['heading_alignment'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 'center' === $showcase_details['heading_alignment'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20" fill="currentColor">
						<path d="M16 11H10.5V9H14C14.1326 9 14.2598 8.94732 14.3536 8.85355C14.4473 8.75979 14.5 8.63261 14.5 8.5V4.5C14.5 4.36739 14.4473 4.24021 14.3536 4.14645C14.2598 4.05268 14.1326 4 14 4H10.5V1.25C10.5 1.1837 10.4737 1.12011 10.4268 1.07322C10.3799 1.02634 10.3163 1 10.25 1H9.75C9.6837 1 9.62011 1.02634 9.57322 1.07322C9.52634 1.12011 9.5 1.1837 9.5 1.25V4H6C5.86739 4 5.74021 4.05268 5.64645 4.14645C5.55268 4.24021 5.5 4.36739 5.5 4.5V8.5C5.5 8.63261 5.55268 8.75979 5.64645 8.85355C5.74021 8.94732 5.86739 9 6 9H9.5V11H4C3.86739 11 3.74021 11.0527 3.64645 11.1464C3.55268 11.2402 3.5 11.3674 3.5 11.5V15.5C3.5 15.6326 3.55268 15.7598 3.64645 15.8536C3.74021 15.9473 3.86739 16 4 16H9.5V18.75C9.5 18.8163 9.52634 18.8799 9.57322 18.9268C9.62011 18.9737 9.6837 19 9.75 19H10.25C10.3163 19 10.3799 18.9737 10.4268 18.9268C10.4737 18.8799 10.5 18.8163 10.5 18.75V16H16C16.1326 16 16.2598 15.9473 16.3536 15.8536C16.4473 15.7598 16.5 15.6326 16.5 15.5V11.5C16.5 11.3674 16.4473 11.2402 16.3536 11.1464C16.2598 11.0527 16.1326 11 16 11Z"/>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wcc_showcase_heading_alignment" value="<?php echo esc_attr( 'center' ); ?>" <?php echo 'center' === $showcase_details['heading_alignment'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Center', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc-showcase-heading-alignment">
				<div class="<?php echo 'right' === $showcase_details['heading_alignment'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 'right' === $showcase_details['heading_alignment'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 20" fill="currentColor">
						<path d="M15.584 0H15.084C14.9459 0 14.834 0.111929 14.834 0.25V17.75C14.834 17.8881 14.9459 18 15.084 18H15.584C15.7221 18 15.834 17.8881 15.834 17.75V0.25C15.834 0.111929 15.7221 0 15.584 0Z"/>
						<path d="M13.334 10H1.33398C1.05784 10 0.833984 10.2239 0.833984 10.5V14.5C0.833984 14.7761 1.05784 15 1.33398 15H13.334C13.6101 15 13.834 14.7761 13.834 14.5V10.5C13.834 10.2239 13.6101 10 13.334 10Z"/>
						<path d="M13.334 3H6.33398C6.05784 3 5.83398 3.22386 5.83398 3.5V7.5C5.83398 7.77614 6.05784 8 6.33398 8H13.334C13.6101 8 13.834 7.77614 13.834 7.5V3.5C13.834 3.22386 13.6101 3 13.334 3Z"/>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wcc_showcase_heading_alignment" value="<?php echo esc_attr( 'right' ); ?>" <?php echo 'right' === $showcase_details['heading_alignment'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Right', 'wc-category-showcase' ); ?></span>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.375 3H2.625C2.45924 3 2.30027 3.06773 2.18306 3.18829C2.06585 3.30885 2 3.47236 2 3.64286V20.3571C2 20.5276 2.06585 20.6912 2.18306 20.8117C2.30027 20.9323 2.45924 21 2.625 21H21.375C21.5408 21 21.6997 20.9323 21.8169 20.8117C21.9342 20.6912 22 20.5276 22 20.3571V3.64286C22 3.47236 21.9342 3.30885 21.8169 3.18829C21.6997 3.06773 21.5408 3 21.375 3ZM8.25 18.4286H4.5V12H8.25V18.4286ZM19.5 18.4286H9.5V15.8571H19.5V18.4286ZM19.5 14.5714H9.5V12H19.5V14.5714ZM19.5 10.7143H4.5V5.57143H19.5V10.7143Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Showcase Styling', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Choose Card Color', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Customize the color or tint of the category showcase cards to match your store\'s branding or design scheme.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="tw-w-[348px] tw-bg-input-grey-50 tw-rounded-md tw-p-2 wcc_showcase-category-list-item">
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'BG Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['card']['background_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF80', width: 121, height: 121 }" name="wcc_showcase_card[background_color]" value="<?php echo esc_attr( $showcase_details['card']['background_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Text Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['card']['text_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF84', width: 121, height: 121 }" name="wcc_showcase_card[text_color]" value="<?php echo esc_attr( $showcase_details['card']['text_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Hover BG Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['card']['hover_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF83', width: 121, height: 121 }" name="wcc_showcase_card[hover_color]" value="<?php echo esc_attr( $showcase_details['card']['hover_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 ">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Hover Text Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['card']['hover_text_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF81', width: 121, height: 121 }" name="wcc_showcase_card[hover_text_color]" value="<?php echo esc_attr( $showcase_details['card']['hover_text_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Border Radius', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Adjust the degree of curvature for the corners of the category showcase cards.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center <?php echo ( array_key_exists( 'border_is_all', $showcase_details ) && 'yes' === $showcase_details['border_is_all'] ) ? 'tw-flex-col' : ''; ?>">
		<div class="tw-flex tw-items-center tw-justify-start tw-w-full tw-pb-2">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M4 7.5V12.5C4 12.7761 4.22386 13 4.5 13H15.5C15.7761 13 16 12.7761 16 12.5V7.5C16 7.22386 15.7761 7 15.5 7H4.5C4.22386 7 4 7.22386 4 7.5Z" fill="#D3D9DF"/>
				<path d="M1 3.25V3.75C1 3.88807 1.11193 4 1.25 4L18.75 4C18.8881 4 19 3.88807 19 3.75V3.25C19 3.11193 18.8881 3 18.75 3L1.25 3C1.11193 3 1 3.11193 1 3.25Z" fill="#D3D9DF"/>
				<path d="M1 16.25V16.75C1 16.8881 1.11193 17 1.25 17H18.75C18.8881 17 19 16.8881 19 16.75V16.25C19 16.1119 18.8881 16 18.75 16H1.25C1.11193 16 1 16.1119 1 16.25Z" fill="#D3D9DF"/>
				<path d="M1 3.19444L1 16.8056C1 16.9129 1.11193 17 1.25 17H1.75C1.88807 17 2 16.9129 2 16.8056L2 3.19444C2 3.08706 1.88807 3 1.75 3H1.25C1.11193 3 1 3.08706 1 3.19444Z" fill="#D3D9DF"/>
				<path d="M18 3.19444V16.8056C18 16.9129 18.1119 17 18.25 17H18.75C18.8881 17 19 16.9129 19 16.8056V3.19444C19 3.08706 18.8881 3 18.75 3H18.25C18.1119 3 18 3.08706 18 3.19444Z" fill="#D3D9DF"/>
			</svg>
			<label class="tw-inline-flex tw-cursor-pointer tw-pl-[4px]">
				<input type="number" min="0" name="wcc_showcase_border_radius" id="wcc_showcase_border_radius" value="<?php echo esc_attr( $showcase_details['border_radius'] ); ?>" class="wcc_showcase-settings-field-border" <?php echo ( array_key_exists( 'border_is_all', $showcase_details ) && 'yes' === $showcase_details['border_is_all'] ) ? 'disabled' : ''; ?>>
			</label>
			<div class="wcc_showcase-border-is-all tw-pl-[8px] <?php echo ( array_key_exists( 'border_is_all', $showcase_details ) && 'yes' === $showcase_details['border_is_all'] ) ? 'tw-text-fade-blue-600' : 'tw-text-text-grey-500'; ?>">
				<svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
					<path d="M17.45 8.89651H15.8945C15.7454 8.09011 15.4319 7.32303 14.9735 6.64301L16.076 5.54001C16.1274 5.4889 16.1682 5.42813 16.196 5.3612C16.2239 5.29427 16.2382 5.2225 16.2382 5.15001C16.2382 5.07752 16.2239 5.00575 16.196 4.93882C16.1682 4.87189 16.1274 4.81112 16.076 4.76001L15.2395 3.92401C15.1884 3.87261 15.1276 3.83182 15.0607 3.80399C14.9938 3.77615 14.922 3.76183 14.8495 3.76183C14.777 3.76183 14.7053 3.77615 14.6383 3.80399C14.5714 3.83182 14.5106 3.87261 14.4595 3.92401L13.357 5.02651C12.6771 4.56798 11.91 4.25461 11.1035 4.10601V2.55001C11.1035 2.47749 11.0892 2.40568 11.0613 2.33872C11.0335 2.27177 10.9926 2.21098 10.9412 2.15986C10.8897 2.10874 10.8287 2.0683 10.7616 2.04087C10.6944 2.01344 10.6225 1.99955 10.55 2.00001H9.45001C9.30414 2.00001 9.16425 2.05796 9.0611 2.1611C8.95796 2.26425 8.90001 2.40414 8.90001 2.55001V4.10601C8.09354 4.25461 7.32639 4.56798 6.64651 5.02651L5.54651 3.92401C5.4954 3.87261 5.43463 3.83182 5.3677 3.80399C5.30077 3.77615 5.229 3.76183 5.15651 3.76183C5.08402 3.76183 5.01225 3.77615 4.94532 3.80399C4.87839 3.83182 4.81762 3.87261 4.76651 3.92401L3.92401 4.76001C3.87261 4.81112 3.83182 4.87189 3.80399 4.93882C3.77615 5.00575 3.76183 5.07752 3.76183 5.15001C3.76183 5.2225 3.77615 5.29427 3.80399 5.3612C3.83182 5.42813 3.87261 5.4889 3.92401 5.54001L5.02651 6.64301C4.56815 7.32303 4.25465 8.09011 4.10551 8.89651H2.55001C2.47749 8.89651 2.40568 8.91085 2.33872 8.93871C2.27177 8.96657 2.21098 9.00739 2.15986 9.05884C2.10874 9.11028 2.0683 9.17133 2.04087 9.23846C2.01344 9.30559 1.99955 9.37749 2.00001 9.45001V10.55C2.00001 10.6959 2.05796 10.8358 2.1611 10.9389C2.26425 11.0421 2.40414 11.1 2.55001 11.1H4.10551C4.25439 11.9065 4.56791 12.6736 5.02651 13.3535L3.92401 14.4595C3.87261 14.5106 3.83182 14.5714 3.80399 14.6383C3.77615 14.7053 3.76183 14.777 3.76183 14.8495C3.76183 14.922 3.77615 14.9938 3.80399 15.0607C3.83182 15.1276 3.87261 15.1884 3.92401 15.2395L4.76051 16.076C4.81162 16.1274 4.87239 16.1682 4.93932 16.196C5.00625 16.2239 5.07802 16.2382 5.15051 16.2382C5.223 16.2382 5.29477 16.2239 5.3617 16.196C5.42863 16.1682 5.4894 16.1274 5.54051 16.076L6.64301 14.9735C7.32289 15.432 8.09004 15.7454 8.89651 15.894V17.45C8.89651 17.5225 8.91085 17.5943 8.93871 17.6613C8.96657 17.7283 9.00739 17.789 9.05884 17.8402C9.11028 17.8913 9.17133 17.9317 9.23846 17.9592C9.30559 17.9866 9.37749 18.0005 9.45001 18H10.55C10.6959 18 10.8358 17.9421 10.9389 17.8389C11.0421 17.7358 11.1 17.5959 11.1 17.45V15.894C11.9065 15.7454 12.6736 15.432 13.3535 14.9735L14.456 16.076C14.5071 16.1274 14.5679 16.1682 14.6348 16.196C14.7018 16.2239 14.7735 16.2382 14.846 16.2382C14.9185 16.2382 14.9903 16.2239 15.0572 16.196C15.1241 16.1682 15.1849 16.1274 15.236 16.076L16.0725 15.2395C16.1239 15.1884 16.1647 15.1276 16.1925 15.0607C16.2204 14.9938 16.2347 14.922 16.2347 14.8495C16.2347 14.777 16.2204 14.7053 16.1925 14.6383C16.1647 14.5714 16.1239 14.5106 16.0725 14.4595L14.97 13.357C15.4286 12.6771 15.7421 11.91 15.891 11.1035H17.45C17.5225 11.1035 17.5943 11.0892 17.6613 11.0613C17.7283 11.0335 17.789 10.9926 17.8402 10.9412C17.8913 10.8897 17.9317 10.8287 17.9592 10.7616C17.9866 10.6944 18.0005 10.6225 18 10.55V9.45001C18.0005 9.37749 17.9866 9.30559 17.9592 9.23846C17.9317 9.17133 17.8913 9.11028 17.8402 9.05884C17.789 9.00739 17.7283 8.96657 17.6613 8.93871C17.5943 8.91085 17.5225 8.89651 17.45 8.89651ZM12.207 10C12.207 10.4365 12.0776 10.8632 11.8351 11.2262C11.5926 11.5891 11.2479 11.872 10.8446 12.039C10.4413 12.2061 9.99756 12.2498 9.56945 12.1646C9.14133 12.0794 8.74808 11.8693 8.43943 11.5606C8.13077 11.2519 7.92058 10.8587 7.83542 10.4306C7.75026 10.0025 7.79397 9.5587 7.96101 9.15543C8.12805 8.75215 8.41093 8.40747 8.77387 8.16496C9.13681 7.92245 9.56351 7.79301 10 7.79301C10.5853 7.79301 11.1467 8.02553 11.5606 8.43943C11.9745 8.85332 12.207 9.41468 12.207 10Z"/>
				</svg>
				<input type="hidden" value="<?php echo ( array_key_exists( 'border_is_all', $showcase_details ) && 'yes' === $showcase_details['border_is_all'] ) ? 'yes' : ''; ?>" name="wcc_showcase_border_is_all">
			</div>
		</div>
		<div class="tw-mt-3 tw-grid tw-grid-cols-2 tw-gap-y-6 tw-gap-x-3 wcc_showcase-custom-border-top tw-pt-4 wcc_showcase_content_margin_all <?php echo ( array_key_exists( 'border_is_all', $showcase_details ) && 'yes' === $showcase_details['border_is_all'] ) ? '' : 'tw-hidden'; ?>">
			<div class="tw-flex tw-items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M2 15.3333V7.33333C2 4.38801 4.38801 2 7.33333 2H15.3333C16.8061 2 18 3.19391 18 4.66667C18 6.13943 16.8061 7.33333 15.3333 7.33333H10C8.52668 7.33333 7.33333 8.52668 7.33333 10V15.3333C7.33333 16.8061 6.13943 18 4.66667 18C3.19391 18 2 16.8061 2 15.3333Z" fill="#2270B1"/>
				</svg>
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_border_radius_all[top]" value="<?php echo esc_attr( $showcase_details['border_radius_all']['top'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
			</div>
			<div class="tw-flex tw-items-center">
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_border_radius_all[right]" value="<?php echo esc_attr( $showcase_details['border_radius_all']['right'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M18 15.3333V7.33333C18 4.38801 15.612 2 12.6667 2H4.66667C3.19391 2 2 3.19391 2 4.66667C2 6.13943 3.19391 7.33333 4.66667 7.33333H10C11.4733 7.33333 12.6667 8.52668 12.6667 10V15.3333C12.6667 16.8061 13.8606 18 15.3333 18C16.8061 18 18 16.8061 18 15.3333Z" fill="#D3D9DF"/>
				</svg>
			</div>
			<div class="tw-flex tw-items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M2 4.66667V12.6667C2 15.612 4.38801 18 7.33333 18H15.3333C16.8061 18 18 16.8061 18 15.3333C18 13.8606 16.8061 12.6667 15.3333 12.6667H10C8.52668 12.6667 7.33333 11.4733 7.33333 10V4.66667C7.33333 3.19391 6.13943 2 4.66667 2C3.19391 2 2 3.19391 2 4.66667Z" fill="#D3D9DF"/>
				</svg>
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_border_radius_all[left]" value="<?php echo esc_attr( $showcase_details['border_radius_all']['left'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
			</div>
			<div class="tw-flex tw-items-center">
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_border_radius_all[bottom]" value="<?php echo esc_attr( $showcase_details['border_radius_all']['bottom'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M18 4.66667V12.6667C18 15.612 15.612 18 12.6667 18H4.66667C3.19391 18 2 16.8061 2 15.3333C2 13.8606 3.19391 12.6667 4.66667 12.6667H10C11.4733 12.6667 12.6667 11.4733 12.6667 10V4.66667C12.6667 3.19391 13.8606 2 15.3333 2C16.8061 2 18 3.19391 18 4.66667Z" fill="#D3D9DF"/>
				</svg>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Gap Between Cards', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Control the amount of space between category cards in your showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
			<path d="M12.5 4H7.5C7.22386 4 7 4.22386 7 4.5V15.5C7 15.7761 7.22386 16 7.5 16H12.5C12.7761 16 13 15.7761 13 15.5V4.5C13 4.22386 12.7761 4 12.5 4Z" fill="#D3D9DF"/>
			<path d="M3.75 1H3.25C3.11193 1 3 1.11193 3 1.25V18.75C3 18.8881 3.11193 19 3.25 19H3.75C3.88807 19 4 18.8881 4 18.75V1.25C4 1.11193 3.88807 1 3.75 1Z" fill="#D3D9DF"/>
			<path d="M16.75 1H16.25C16.1119 1 16 1.11193 16 1.25V18.75C16 18.8881 16.1119 19 16.25 19H16.75C16.8881 19 17 18.8881 17 18.75V1.25C17 1.11193 16.8881 1 16.75 1Z" fill="#D3D9DF"/>
		</svg>
		<label class="tw-inline-flex tw-cursor-pointer tw-relative tw-pl-[4px]">
			<input type="number" name="wcc_showcase_gap_between_cards" value="<?php echo esc_attr( $showcase_details['gap_between_cards'] ); ?>" class="wcc_showcase-settings-field-border">
			<span class="tw-absolute tw-bg-input-grey-50 tw-py-[5px] tw-px-4 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'px' ); ?></span>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row-title"></div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Content Placement', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Choose the alignment or position of the contents.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-flex-col tw-max-w-[385px] tw-rounded-md">
		<div class="tw-max-w-[230px] tw-grid tw-grid-cols-3 tw-gap-x-4 tw-gap-y-4">
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc_showcase-content-placement">
				<div class="<?php echo 'overlay' === $showcase_details['content_placement'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 'overlay' === $showcase_details['content_placement'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<g clip-path="url(#clip0_609_3537)">
							<g mask="url(#mask0_609_3537)">
								<path d="M46 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z" fill="#D3D9DF"/>
								<g opacity="0.5">
									<path d="M46 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z" fill="#2270B1"/>
								</g>
							</g>
						</g>
					</svg>
				</div>
				<input class="wcc_showcase_content_placement_overlay !tw-hidden" type="radio" name="wcc_showcase_content_placement" value="<?php echo esc_attr( 'overlay' ); ?>" <?php echo 'overlay' === $showcase_details['content_placement'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Overlay', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc_showcase-content-placement <?php echo 'grid' === $showcase_details['layout'] ? 'tw-hidden' : ''; ?>">
				<div class="<?php echo 'top' === $showcase_details['content_placement'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 'top' === $showcase_details['content_placement'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<g clip-path="url(#clip0_609_3534)">
							<path d="M46 0H2C0.89543 0 0 0.89543 0 2V12.5C0 13.6046 0.89543 14.5 2 14.5H46C47.1046 14.5 48 13.6046 48 12.5V2C48 0.89543 47.1046 0 46 0Z" fill="#2270B1"/>
							<path d="M46 17.5H2C0.89543 17.5 0 18.3954 0 19.5V30C0 31.1046 0.89543 32 2 32H46C47.1046 32 48 31.1046 48 30V19.5C48 18.3954 47.1046 17.5 46 17.5Z" fill="#D3D9DF"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wcc_showcase_content_placement" value="<?php echo esc_attr( 'top' ); ?>" <?php echo 'top' === $showcase_details['content_placement'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Top', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc_showcase-content-placement <?php echo 'grid' === $showcase_details['layout'] ? 'tw-hidden' : ''; ?>">
				<div class="<?php echo 'bottom' === $showcase_details['content_placement'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 'bottom' === $showcase_details['content_placement'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<g clip-path="url(#clip0_609_3549)">
							<path d="M46 0H2C0.89543 0 0 0.89543 0 2V12.5C0 13.6046 0.89543 14.5 2 14.5H46C47.1046 14.5 48 13.6046 48 12.5V2C48 0.89543 47.1046 0 46 0Z" fill="#D3D9DF"/>
							<path d="M46 17.5H2C0.89543 17.5 0 18.3954 0 19.5V30C0 31.1046 0.89543 32 2 32H46C47.1046 32 48 31.1046 48 30V19.5C48 18.3954 47.1046 17.5 46 17.5Z" fill="#2270B1"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wcc_showcase_content_placement" value="<?php echo esc_attr( 'bottom' ); ?>" <?php echo 'bottom' === $showcase_details['content_placement'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Bottom', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc_showcase-number-of-column-pro wcc_showcase-pro <?php echo 'grid' === $showcase_details['layout'] ? 'tw-hidden' : ''; ?>">
				<div class="wcc_showcase-layout-pro-before-content-2">
					<svg class="wcc_showcase-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<g clip-path="url(#clip0_609_3552)">
							<path d="M25 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H25C26.1046 32 27 31.1046 27 30V2C27 0.89543 26.1046 0 25 0Z" fill="#D3D9DF"/>
							<path d="M46 0H32C30.8954 0 30 0.89543 30 2V30C30 31.1046 30.8954 32 32 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z" fill="#2270B1"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wcc_showcase_content_placement" value="<?php echo esc_attr( 'right' ); ?>" <?php echo 'right' === $showcase_details['content_placement'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Right', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc_showcase-number-of-column-pro wcc_showcase-pro <?php echo 'grid' === $showcase_details['layout'] ? 'tw-hidden' : ''; ?>">
				<div class="wcc_showcase-layout-pro-before-content-2">
					<svg class="wcc_showcase-layout-disable" xmlns="http://www.w3.org/2000/svg" width="48" height="32" viewBox="0 0 48 32" fill="currentColor">
						<g clip-path="url(#clip0_609_3555)">
							<path d="M16 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H16C17.1046 32 18 31.1046 18 30V2C18 0.89543 17.1046 0 16 0Z" fill="#2270B1"/>
							<path d="M46 0H23C21.8954 0 21 0.89543 21 2V30C21 31.1046 21.8954 32 23 32H46C47.1046 32 48 31.1046 48 30V2C48 0.89543 47.1046 0 46 0Z" fill="#D3D9DF"/>
						</g>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wcc_showcase_content_placement" value="<?php echo esc_attr( 'left' ); ?>" <?php echo 'left' === $showcase_details['content_placement'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Left', 'wc-category-showcase' ); ?></span>
			</div>
		</div>
		<div class="tw-max-w-[385px] <?php echo 'grid' === $showcase_details['layout'] ? 'tw-hidden' : ''; ?>">
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
				<span class="tw-text-text-grey-500 tw-text-xs tw-italic tw-leading-4 tw-w-full tw-font-medium"><?php esc_html_e( 'Unlock a variety of professionally designed layouts to enhance the presentation of your product categories.', 'wc-category-showcase' ); ?><a href="#" class="tw-text-accent-orange-500 tw-text-xs tw-leading-4 tw-font-semibold wcc_showcase-pro"><?php esc_html_e( 'Upgrade To Pro!', 'wc-category-showcase' ); ?></a></span>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row wcc-showcase-overlay-position <?php echo 'overlay' === $showcase_details['content_placement'] ? '' : 'tw-hidden'; ?>">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Overlay Content Position', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Determine where your category data will show when select overlay.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="select-wrapper" id="wcc_showcase-overlay-content">
			<div class="select wcc_showcase-wccs-overlay-content tw-w-[224px] tw-bg-input-grey-50 tw-border-divider-grey-100 tw-rounded-md">
				<div class="select__trigger tw-bg-input-grey-50">
					<span class="tw-flex tw-items-center tw-gap-1 tw-text-text-grey-500">
						<?php esc_html_e( 'Top Left', 'wc-category-showcase' ); ?>
					</span>
					<div class="wcc_showcase-arrow">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" fill="none">
							<path d="M4.66663 10L7.99996 13.3333L11.3333 10" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M4.66663 6.00033L7.99996 2.66699L11.3333 6.00033" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</div>
				<div class="custom-options tw-w-[224px] tw-bg-white tw-border-divider-grey-100 tw-rounded-md tw-hidden">
					<span class="custom-option wccs-overlay-content <?php echo 'top_left' === $showcase_details['overlay_content_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'top_left' ); ?>">
						<?php esc_html_e( 'Top Left', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-overlay-content <?php echo 'center' === $showcase_details['overlay_content_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'center' ); ?>">
						<?php esc_html_e( 'Top Center', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-overlay-content <?php echo 'top_right' === $showcase_details['overlay_content_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'top_right' ); ?>">
						<?php esc_html_e( 'Top Right', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-overlay-content <?php echo 'center_center' === $showcase_details['overlay_content_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'center_center' ); ?>">
						<?php esc_html_e( 'Center Center', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-overlay-content <?php echo 'bottom_left' === $showcase_details['overlay_content_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'bottom_left' ); ?>">
						<?php esc_html_e( 'Bottom Left', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-overlay-content <?php echo 'bottom_center' === $showcase_details['overlay_content_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'bottom_center' ); ?>">
						<?php esc_html_e( 'Bottom Center', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-overlay-content <?php echo 'bottom_right' === $showcase_details['overlay_content_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'bottom_right' ); ?>">
						<?php esc_html_e( 'Bottom Right', 'wc-category-showcase' ); ?>
					</span>
				</div>
			</div>
			<input type="hidden" name="wcc_showcase_overlay_content_position" id="wcc_showcase_overlay_content_position" value="<?php echo esc_attr( $showcase_details['overlay_content_position'] ); ?>">
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row wcc-showcase-content-position <?php echo 'overlay' === $showcase_details['content_placement'] ? 'tw-hidden' : ''; ?>">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Content Alignment', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'This setting allows you to customize the title or heading for the whole section of your showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-flex-col tw-max-w-[385px] tw-rounded-md tw-justify-center">
		<div class="tw-max-w-[230px] tw-grid tw-grid-cols-3 tw-gap-x-4 tw-gap-y-4">
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc-showcase-content-alignment">
				<div class="<?php echo 'left' === $showcase_details['content_alignment'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 'left' === $showcase_details['content_alignment'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20" fill="currentColor">
						<path d="M3.25 1H2.75C2.61193 1 2.5 1.11193 2.5 1.25V18.75C2.5 18.8881 2.61193 19 2.75 19H3.25C3.38807 19 3.5 18.8881 3.5 18.75V1.25C3.5 1.11193 3.38807 1 3.25 1Z"/>
						<path d="M17 11H5C4.72386 11 4.5 11.2239 4.5 11.5V15.5C4.5 15.7761 4.72386 16 5 16H17C17.2761 16 17.5 15.7761 17.5 15.5V11.5C17.5 11.2239 17.2761 11 17 11Z"/>
						<path d="M12 4H5C4.72386 4 4.5 4.22386 4.5 4.5V8.5C4.5 8.77614 4.72386 9 5 9H12C12.2761 9 12.5 8.77614 12.5 8.5V4.5C12.5 4.22386 12.2761 4 12 4Z"/>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wcc_showcase_content_alignment" value="<?php echo esc_attr( 'left' ); ?>" <?php echo 'left' === $showcase_details['content_alignment'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Left', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc-showcase-content-alignment">
				<div class="<?php echo 'center' === $showcase_details['content_alignment'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 'center' === $showcase_details['content_alignment'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20" fill="currentColor">
						<path d="M16 11H10.5V9H14C14.1326 9 14.2598 8.94732 14.3536 8.85355C14.4473 8.75979 14.5 8.63261 14.5 8.5V4.5C14.5 4.36739 14.4473 4.24021 14.3536 4.14645C14.2598 4.05268 14.1326 4 14 4H10.5V1.25C10.5 1.1837 10.4737 1.12011 10.4268 1.07322C10.3799 1.02634 10.3163 1 10.25 1H9.75C9.6837 1 9.62011 1.02634 9.57322 1.07322C9.52634 1.12011 9.5 1.1837 9.5 1.25V4H6C5.86739 4 5.74021 4.05268 5.64645 4.14645C5.55268 4.24021 5.5 4.36739 5.5 4.5V8.5C5.5 8.63261 5.55268 8.75979 5.64645 8.85355C5.74021 8.94732 5.86739 9 6 9H9.5V11H4C3.86739 11 3.74021 11.0527 3.64645 11.1464C3.55268 11.2402 3.5 11.3674 3.5 11.5V15.5C3.5 15.6326 3.55268 15.7598 3.64645 15.8536C3.74021 15.9473 3.86739 16 4 16H9.5V18.75C9.5 18.8163 9.52634 18.8799 9.57322 18.9268C9.62011 18.9737 9.6837 19 9.75 19H10.25C10.3163 19 10.3799 18.9737 10.4268 18.9268C10.4737 18.8799 10.5 18.8163 10.5 18.75V16H16C16.1326 16 16.2598 15.9473 16.3536 15.8536C16.4473 15.7598 16.5 15.6326 16.5 15.5V11.5C16.5 11.3674 16.4473 11.2402 16.3536 11.1464C16.2598 11.0527 16.1326 11 16 11Z"/>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wcc_showcase_content_alignment" value="<?php echo esc_attr( 'center' ); ?>" <?php echo 'center' === $showcase_details['content_alignment'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Center', 'wc-category-showcase' ); ?></span>
			</div>
			<div class="tw-flex tw-flex-col tw-items-center tw-relative wcc-showcase-content-alignment">
				<div class="<?php echo 'right' === $showcase_details['content_alignment'] ? 'wcc_showcase-layout-active-before-content-2' : ''; ?>">
					<svg class="<?php echo 'right' === $showcase_details['content_alignment'] ? 'wcc_showcase-layout-active' : 'wcc_showcase-layout-primary'; ?>" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 20" fill="currentColor">
						<path d="M15.584 0H15.084C14.9459 0 14.834 0.111929 14.834 0.25V17.75C14.834 17.8881 14.9459 18 15.084 18H15.584C15.7221 18 15.834 17.8881 15.834 17.75V0.25C15.834 0.111929 15.7221 0 15.584 0Z"/>
						<path d="M13.334 10H1.33398C1.05784 10 0.833984 10.2239 0.833984 10.5V14.5C0.833984 14.7761 1.05784 15 1.33398 15H13.334C13.6101 15 13.834 14.7761 13.834 14.5V10.5C13.834 10.2239 13.6101 10 13.334 10Z"/>
						<path d="M13.334 3H6.33398C6.05784 3 5.83398 3.22386 5.83398 3.5V7.5C5.83398 7.77614 6.05784 8 6.33398 8H13.334C13.6101 8 13.834 7.77614 13.834 7.5V3.5C13.834 3.22386 13.6101 3 13.334 3Z"/>
					</svg>
				</div>
				<input class="!tw-hidden" type="radio" name="wcc_showcase_content_alignment" value="<?php echo esc_attr( 'right' ); ?>" <?php echo 'right' === $showcase_details['content_alignment'] ? 'checked' : ''; ?>>
				<span><?php esc_html_e( 'Right', 'wc-category-showcase' ); ?></span>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Content Padding', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Adjust the amount of space between the content and the edges of each category card.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center <?php echo 'yes' === $showcase_details['content_padding_is_all'] ? 'tw-flex-col' : ''; ?>">
		<div class="tw-flex tw-items-center tw-justify-start tw-w-full tw-pb-2">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M4 7.5V12.5C4 12.7761 4.22386 13 4.5 13H15.5C15.7761 13 16 12.7761 16 12.5V7.5C16 7.22386 15.7761 7 15.5 7H4.5C4.22386 7 4 7.22386 4 7.5Z" fill="#D3D9DF"/>
				<path d="M1 3.25V3.75C1 3.88807 1.11193 4 1.25 4L18.75 4C18.8881 4 19 3.88807 19 3.75V3.25C19 3.11193 18.8881 3 18.75 3L1.25 3C1.11193 3 1 3.11193 1 3.25Z" fill="#D3D9DF"/>
				<path d="M1 16.25V16.75C1 16.8881 1.11193 17 1.25 17H18.75C18.8881 17 19 16.8881 19 16.75V16.25C19 16.1119 18.8881 16 18.75 16H1.25C1.11193 16 1 16.1119 1 16.25Z" fill="#D3D9DF"/>
				<path d="M1 3.19444L1 16.8056C1 16.9129 1.11193 17 1.25 17H1.75C1.88807 17 2 16.9129 2 16.8056L2 3.19444C2 3.08706 1.88807 3 1.75 3H1.25C1.11193 3 1 3.08706 1 3.19444Z" fill="#D3D9DF"/>
				<path d="M18 3.19444V16.8056C18 16.9129 18.1119 17 18.25 17H18.75C18.8881 17 19 16.9129 19 16.8056V3.19444C19 3.08706 18.8881 3 18.75 3H18.25C18.1119 3 18 3.08706 18 3.19444Z" fill="#D3D9DF"/>
			</svg>
			<label class="tw-inline-flex tw-cursor-pointer tw-pl-[4px]">
				<input type="number" min="0" name="wcc_showcase_content_padding" id="wcc_showcase_content_padding" value="<?php echo esc_attr( $showcase_details['content_padding'] ); ?>" class="wcc_showcase-settings-field-border" <?php echo 'yes' === $showcase_details['content_padding_is_all'] ? 'disabled' : ''; ?>>
			</label>
			<div class="wcc_showcase-content-margin-is-all tw-pl-[8px] <?php echo ( array_key_exists( 'content_padding_is_all', $showcase_details ) && 'yes' === $showcase_details['content_padding_is_all'] ) ? 'tw-text-fade-blue-600' : 'tw-text-text-grey-500'; ?>">
				<svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
					<path d="M17.45 8.89651H15.8945C15.7454 8.09011 15.4319 7.32303 14.9735 6.64301L16.076 5.54001C16.1274 5.4889 16.1682 5.42813 16.196 5.3612C16.2239 5.29427 16.2382 5.2225 16.2382 5.15001C16.2382 5.07752 16.2239 5.00575 16.196 4.93882C16.1682 4.87189 16.1274 4.81112 16.076 4.76001L15.2395 3.92401C15.1884 3.87261 15.1276 3.83182 15.0607 3.80399C14.9938 3.77615 14.922 3.76183 14.8495 3.76183C14.777 3.76183 14.7053 3.77615 14.6383 3.80399C14.5714 3.83182 14.5106 3.87261 14.4595 3.92401L13.357 5.02651C12.6771 4.56798 11.91 4.25461 11.1035 4.10601V2.55001C11.1035 2.47749 11.0892 2.40568 11.0613 2.33872C11.0335 2.27177 10.9926 2.21098 10.9412 2.15986C10.8897 2.10874 10.8287 2.0683 10.7616 2.04087C10.6944 2.01344 10.6225 1.99955 10.55 2.00001H9.45001C9.30414 2.00001 9.16425 2.05796 9.0611 2.1611C8.95796 2.26425 8.90001 2.40414 8.90001 2.55001V4.10601C8.09354 4.25461 7.32639 4.56798 6.64651 5.02651L5.54651 3.92401C5.4954 3.87261 5.43463 3.83182 5.3677 3.80399C5.30077 3.77615 5.229 3.76183 5.15651 3.76183C5.08402 3.76183 5.01225 3.77615 4.94532 3.80399C4.87839 3.83182 4.81762 3.87261 4.76651 3.92401L3.92401 4.76001C3.87261 4.81112 3.83182 4.87189 3.80399 4.93882C3.77615 5.00575 3.76183 5.07752 3.76183 5.15001C3.76183 5.2225 3.77615 5.29427 3.80399 5.3612C3.83182 5.42813 3.87261 5.4889 3.92401 5.54001L5.02651 6.64301C4.56815 7.32303 4.25465 8.09011 4.10551 8.89651H2.55001C2.47749 8.89651 2.40568 8.91085 2.33872 8.93871C2.27177 8.96657 2.21098 9.00739 2.15986 9.05884C2.10874 9.11028 2.0683 9.17133 2.04087 9.23846C2.01344 9.30559 1.99955 9.37749 2.00001 9.45001V10.55C2.00001 10.6959 2.05796 10.8358 2.1611 10.9389C2.26425 11.0421 2.40414 11.1 2.55001 11.1H4.10551C4.25439 11.9065 4.56791 12.6736 5.02651 13.3535L3.92401 14.4595C3.87261 14.5106 3.83182 14.5714 3.80399 14.6383C3.77615 14.7053 3.76183 14.777 3.76183 14.8495C3.76183 14.922 3.77615 14.9938 3.80399 15.0607C3.83182 15.1276 3.87261 15.1884 3.92401 15.2395L4.76051 16.076C4.81162 16.1274 4.87239 16.1682 4.93932 16.196C5.00625 16.2239 5.07802 16.2382 5.15051 16.2382C5.223 16.2382 5.29477 16.2239 5.3617 16.196C5.42863 16.1682 5.4894 16.1274 5.54051 16.076L6.64301 14.9735C7.32289 15.432 8.09004 15.7454 8.89651 15.894V17.45C8.89651 17.5225 8.91085 17.5943 8.93871 17.6613C8.96657 17.7283 9.00739 17.789 9.05884 17.8402C9.11028 17.8913 9.17133 17.9317 9.23846 17.9592C9.30559 17.9866 9.37749 18.0005 9.45001 18H10.55C10.6959 18 10.8358 17.9421 10.9389 17.8389C11.0421 17.7358 11.1 17.5959 11.1 17.45V15.894C11.9065 15.7454 12.6736 15.432 13.3535 14.9735L14.456 16.076C14.5071 16.1274 14.5679 16.1682 14.6348 16.196C14.7018 16.2239 14.7735 16.2382 14.846 16.2382C14.9185 16.2382 14.9903 16.2239 15.0572 16.196C15.1241 16.1682 15.1849 16.1274 15.236 16.076L16.0725 15.2395C16.1239 15.1884 16.1647 15.1276 16.1925 15.0607C16.2204 14.9938 16.2347 14.922 16.2347 14.8495C16.2347 14.777 16.2204 14.7053 16.1925 14.6383C16.1647 14.5714 16.1239 14.5106 16.0725 14.4595L14.97 13.357C15.4286 12.6771 15.7421 11.91 15.891 11.1035H17.45C17.5225 11.1035 17.5943 11.0892 17.6613 11.0613C17.7283 11.0335 17.789 10.9926 17.8402 10.9412C17.8913 10.8897 17.9317 10.8287 17.9592 10.7616C17.9866 10.6944 18.0005 10.6225 18 10.55V9.45001C18.0005 9.37749 17.9866 9.30559 17.9592 9.23846C17.9317 9.17133 17.8913 9.11028 17.8402 9.05884C17.789 9.00739 17.7283 8.96657 17.6613 8.93871C17.5943 8.91085 17.5225 8.89651 17.45 8.89651ZM12.207 10C12.207 10.4365 12.0776 10.8632 11.8351 11.2262C11.5926 11.5891 11.2479 11.872 10.8446 12.039C10.4413 12.2061 9.99756 12.2498 9.56945 12.1646C9.14133 12.0794 8.74808 11.8693 8.43943 11.5606C8.13077 11.2519 7.92058 10.8587 7.83542 10.4306C7.75026 10.0025 7.79397 9.5587 7.96101 9.15543C8.12805 8.75215 8.41093 8.40747 8.77387 8.16496C9.13681 7.92245 9.56351 7.79301 10 7.79301C10.5853 7.79301 11.1467 8.02553 11.5606 8.43943C11.9745 8.85332 12.207 9.41468 12.207 10Z"/>
				</svg>
				<input type="hidden" min="0" value="<?php echo ( array_key_exists( 'content_padding_is_all', $showcase_details ) && 'yes' === $showcase_details['content_padding_is_all'] ) ? esc_attr( 'yes' ) : ''; ?>" name="wcc_showcase_content_padding_is_all">
			</div>
		</div>
		<div class="tw-mt-3 tw-grid tw-grid-cols-2 tw-gap-y-6 tw-gap-x-3 wcc_showcase-custom-border-top tw-pt-4 wcc_showcase_content_margin_all <?php echo 'yes' === $showcase_details['content_padding_is_all'] ? '' : 'tw-hidden'; ?>">
			<div class="tw-flex tw-items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M15.5 9H4.5C4.22386 9 4 9.22386 4 9.5V14.5C4 14.7761 4.22386 15 4.5 15H15.5C15.7761 15 16 14.7761 16 14.5V9.5C16 9.22386 15.7761 9 15.5 9Z" fill="#2270B1"/>
					<path d="M18.75 5H1.25C1.11193 5 1 5.11193 1 5.25V5.75C1 5.88807 1.11193 6 1.25 6H18.75C18.8881 6 19 5.88807 19 5.75V5.25C19 5.11193 18.8881 5 18.75 5Z" fill="#2270B1"/>
				</svg>
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_content_padding_all[top]" value="<?php echo esc_attr( $showcase_details['content_padding_all']['top'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
			</div>
			<div class="tw-flex tw-items-center">
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_content_padding_all[right]" value="<?php echo esc_attr( $showcase_details['content_padding_all']['right'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M10.5 4H5.5C5.22386 4 5 4.22386 5 4.5V15.5C5 15.7761 5.22386 16 5.5 16H10.5C10.7761 16 11 15.7761 11 15.5V4.5C11 4.22386 10.7761 4 10.5 4Z" fill="#D3D9DF"/>
					<path d="M14.75 1H14.25C14.1119 1 14 1.11193 14 1.25V18.75C14 18.8881 14.1119 19 14.25 19H14.75C14.8881 19 15 18.8881 15 18.75V1.25C15 1.11193 14.8881 1 14.75 1Z" fill="#D3D9DF"/>
				</svg>
			</div>
			<div class="tw-flex tw-items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M14.5 4H9.5C9.22386 4 9 4.22386 9 4.5V15.5C9 15.7761 9.22386 16 9.5 16H14.5C14.7761 16 15 15.7761 15 15.5V4.5C15 4.22386 14.7761 4 14.5 4Z" fill="#D3D9DF"/>
					<path d="M5.75 1H5.25C5.11193 1 5 1.11193 5 1.25V18.75C5 18.8881 5.11193 19 5.25 19H5.75C5.88807 19 6 18.8881 6 18.75V1.25C6 1.11193 5.88807 1 5.75 1Z" fill="#D3D9DF"/>
				</svg>
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_content_padding_all[left]" value="<?php echo esc_attr( $showcase_details['content_padding_all']['left'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
			</div>
			<div class="tw-flex tw-items-center">
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_content_padding_all[bottom]" value="<?php echo esc_attr( $showcase_details['content_padding_all']['bottom'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M15.5 5H4.5C4.22386 5 4 5.22386 4 5.5V10.5C4 10.7761 4.22386 11 4.5 11H15.5C15.7761 11 16 10.7761 16 10.5V5.5C16 5.22386 15.7761 5 15.5 5Z" fill="#D3D9DF"/>
					<path d="M18.75 14H1.25C1.11193 14 1 14.1119 1 14.25V14.75C1 14.8881 1.11193 15 1.25 15H18.75C18.8881 15 19 14.8881 19 14.75V14.25C19 14.1119 18.8881 14 18.75 14Z" fill="#D3D9DF"/>
				</svg>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Content Inner Color', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Customize the color or tint of the category showcase cards inner content to match your store\'s branding or design scheme.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="tw-w-[348px] tw-bg-input-grey-50 tw-rounded-md tw-p-2 wcc_showcase-category-list-item">
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'BG Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['card_content']['background_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF80', width: 121, height: 121 }" name="wcc_showcase_card_content[background_color]" value="<?php echo esc_attr( $showcase_details['card_content']['background_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Hover BG Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['card_content']['hover_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF83', width: 121, height: 121 }" name="wcc_showcase_card_content[hover_color]" value="<?php echo esc_attr( $showcase_details['card_content']['hover_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Content Inner Padding', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Adjust the amount of space between the inner content and the edges of each category card.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center <?php echo 'yes' === $showcase_details['content_inner_padding_is_all'] ? 'tw-flex-col' : ''; ?>">
		<div class="tw-flex tw-items-center tw-justify-start tw-w-full tw-pb-2">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M4 7.5V12.5C4 12.7761 4.22386 13 4.5 13H15.5C15.7761 13 16 12.7761 16 12.5V7.5C16 7.22386 15.7761 7 15.5 7H4.5C4.22386 7 4 7.22386 4 7.5Z" fill="#D3D9DF"/>
				<path d="M1 3.25V3.75C1 3.88807 1.11193 4 1.25 4L18.75 4C18.8881 4 19 3.88807 19 3.75V3.25C19 3.11193 18.8881 3 18.75 3L1.25 3C1.11193 3 1 3.11193 1 3.25Z" fill="#D3D9DF"/>
				<path d="M1 16.25V16.75C1 16.8881 1.11193 17 1.25 17H18.75C18.8881 17 19 16.8881 19 16.75V16.25C19 16.1119 18.8881 16 18.75 16H1.25C1.11193 16 1 16.1119 1 16.25Z" fill="#D3D9DF"/>
				<path d="M1 3.19444L1 16.8056C1 16.9129 1.11193 17 1.25 17H1.75C1.88807 17 2 16.9129 2 16.8056L2 3.19444C2 3.08706 1.88807 3 1.75 3H1.25C1.11193 3 1 3.08706 1 3.19444Z" fill="#D3D9DF"/>
				<path d="M18 3.19444V16.8056C18 16.9129 18.1119 17 18.25 17H18.75C18.8881 17 19 16.9129 19 16.8056V3.19444C19 3.08706 18.8881 3 18.75 3H18.25C18.1119 3 18 3.08706 18 3.19444Z" fill="#D3D9DF"/>
			</svg>
			<label class="tw-inline-flex tw-cursor-pointer tw-pl-[4px]">
				<input type="number" min="0" name="wcc_showcase_content_inner_padding" id="wcc_showcase_content_padding" value="<?php echo esc_attr( $showcase_details['content_inner_padding'] ); ?>" class="wcc_showcase-settings-field-border" <?php echo 'yes' === $showcase_details['content_inner_padding_is_all'] ? 'disabled' : ''; ?>>
			</label>
			<div class="wcc_showcase-content-margin-is-all tw-pl-[8px] <?php echo 'yes' === $showcase_details['content_inner_padding_is_all'] ? 'tw-text-fade-blue-600' : 'tw-text-text-grey-500'; ?>">
				<svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
					<path d="M17.45 8.89651H15.8945C15.7454 8.09011 15.4319 7.32303 14.9735 6.64301L16.076 5.54001C16.1274 5.4889 16.1682 5.42813 16.196 5.3612C16.2239 5.29427 16.2382 5.2225 16.2382 5.15001C16.2382 5.07752 16.2239 5.00575 16.196 4.93882C16.1682 4.87189 16.1274 4.81112 16.076 4.76001L15.2395 3.92401C15.1884 3.87261 15.1276 3.83182 15.0607 3.80399C14.9938 3.77615 14.922 3.76183 14.8495 3.76183C14.777 3.76183 14.7053 3.77615 14.6383 3.80399C14.5714 3.83182 14.5106 3.87261 14.4595 3.92401L13.357 5.02651C12.6771 4.56798 11.91 4.25461 11.1035 4.10601V2.55001C11.1035 2.47749 11.0892 2.40568 11.0613 2.33872C11.0335 2.27177 10.9926 2.21098 10.9412 2.15986C10.8897 2.10874 10.8287 2.0683 10.7616 2.04087C10.6944 2.01344 10.6225 1.99955 10.55 2.00001H9.45001C9.30414 2.00001 9.16425 2.05796 9.0611 2.1611C8.95796 2.26425 8.90001 2.40414 8.90001 2.55001V4.10601C8.09354 4.25461 7.32639 4.56798 6.64651 5.02651L5.54651 3.92401C5.4954 3.87261 5.43463 3.83182 5.3677 3.80399C5.30077 3.77615 5.229 3.76183 5.15651 3.76183C5.08402 3.76183 5.01225 3.77615 4.94532 3.80399C4.87839 3.83182 4.81762 3.87261 4.76651 3.92401L3.92401 4.76001C3.87261 4.81112 3.83182 4.87189 3.80399 4.93882C3.77615 5.00575 3.76183 5.07752 3.76183 5.15001C3.76183 5.2225 3.77615 5.29427 3.80399 5.3612C3.83182 5.42813 3.87261 5.4889 3.92401 5.54001L5.02651 6.64301C4.56815 7.32303 4.25465 8.09011 4.10551 8.89651H2.55001C2.47749 8.89651 2.40568 8.91085 2.33872 8.93871C2.27177 8.96657 2.21098 9.00739 2.15986 9.05884C2.10874 9.11028 2.0683 9.17133 2.04087 9.23846C2.01344 9.30559 1.99955 9.37749 2.00001 9.45001V10.55C2.00001 10.6959 2.05796 10.8358 2.1611 10.9389C2.26425 11.0421 2.40414 11.1 2.55001 11.1H4.10551C4.25439 11.9065 4.56791 12.6736 5.02651 13.3535L3.92401 14.4595C3.87261 14.5106 3.83182 14.5714 3.80399 14.6383C3.77615 14.7053 3.76183 14.777 3.76183 14.8495C3.76183 14.922 3.77615 14.9938 3.80399 15.0607C3.83182 15.1276 3.87261 15.1884 3.92401 15.2395L4.76051 16.076C4.81162 16.1274 4.87239 16.1682 4.93932 16.196C5.00625 16.2239 5.07802 16.2382 5.15051 16.2382C5.223 16.2382 5.29477 16.2239 5.3617 16.196C5.42863 16.1682 5.4894 16.1274 5.54051 16.076L6.64301 14.9735C7.32289 15.432 8.09004 15.7454 8.89651 15.894V17.45C8.89651 17.5225 8.91085 17.5943 8.93871 17.6613C8.96657 17.7283 9.00739 17.789 9.05884 17.8402C9.11028 17.8913 9.17133 17.9317 9.23846 17.9592C9.30559 17.9866 9.37749 18.0005 9.45001 18H10.55C10.6959 18 10.8358 17.9421 10.9389 17.8389C11.0421 17.7358 11.1 17.5959 11.1 17.45V15.894C11.9065 15.7454 12.6736 15.432 13.3535 14.9735L14.456 16.076C14.5071 16.1274 14.5679 16.1682 14.6348 16.196C14.7018 16.2239 14.7735 16.2382 14.846 16.2382C14.9185 16.2382 14.9903 16.2239 15.0572 16.196C15.1241 16.1682 15.1849 16.1274 15.236 16.076L16.0725 15.2395C16.1239 15.1884 16.1647 15.1276 16.1925 15.0607C16.2204 14.9938 16.2347 14.922 16.2347 14.8495C16.2347 14.777 16.2204 14.7053 16.1925 14.6383C16.1647 14.5714 16.1239 14.5106 16.0725 14.4595L14.97 13.357C15.4286 12.6771 15.7421 11.91 15.891 11.1035H17.45C17.5225 11.1035 17.5943 11.0892 17.6613 11.0613C17.7283 11.0335 17.789 10.9926 17.8402 10.9412C17.8913 10.8897 17.9317 10.8287 17.9592 10.7616C17.9866 10.6944 18.0005 10.6225 18 10.55V9.45001C18.0005 9.37749 17.9866 9.30559 17.9592 9.23846C17.9317 9.17133 17.8913 9.11028 17.8402 9.05884C17.789 9.00739 17.7283 8.96657 17.6613 8.93871C17.5943 8.91085 17.5225 8.89651 17.45 8.89651ZM12.207 10C12.207 10.4365 12.0776 10.8632 11.8351 11.2262C11.5926 11.5891 11.2479 11.872 10.8446 12.039C10.4413 12.2061 9.99756 12.2498 9.56945 12.1646C9.14133 12.0794 8.74808 11.8693 8.43943 11.5606C8.13077 11.2519 7.92058 10.8587 7.83542 10.4306C7.75026 10.0025 7.79397 9.5587 7.96101 9.15543C8.12805 8.75215 8.41093 8.40747 8.77387 8.16496C9.13681 7.92245 9.56351 7.79301 10 7.79301C10.5853 7.79301 11.1467 8.02553 11.5606 8.43943C11.9745 8.85332 12.207 9.41468 12.207 10Z"/>
				</svg>
				<input type="hidden" value="<?php echo 'yes' === $showcase_details['content_inner_padding_is_all'] ? esc_attr( 'yes' ) : ''; ?>" name="wcc_showcase_content_inner_padding_is_all">
			</div>
		</div>
		<div class="tw-mt-3 tw-grid tw-grid-cols-2 tw-gap-y-6 tw-gap-x-3 wcc_showcase-custom-border-top tw-pt-4 wcc_showcase_content_margin_all <?php echo 'yes' === $showcase_details['content_inner_padding_is_all'] ? '' : 'tw-hidden'; ?>">
			<div class="tw-flex tw-items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M15.5 9H4.5C4.22386 9 4 9.22386 4 9.5V14.5C4 14.7761 4.22386 15 4.5 15H15.5C15.7761 15 16 14.7761 16 14.5V9.5C16 9.22386 15.7761 9 15.5 9Z" fill="#2270B1"/>
					<path d="M18.75 5H1.25C1.11193 5 1 5.11193 1 5.25V5.75C1 5.88807 1.11193 6 1.25 6H18.75C18.8881 6 19 5.88807 19 5.75V5.25C19 5.11193 18.8881 5 18.75 5Z" fill="#2270B1"/>
				</svg>
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_content_inner_padding_all[top]" value="<?php echo esc_attr( $showcase_details['content_inner_padding_all']['top'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
			</div>
			<div class="tw-flex tw-items-center">
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_content_inner_padding_all[right]" value="<?php echo esc_attr( $showcase_details['content_inner_padding_all']['right'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M10.5 4H5.5C5.22386 4 5 4.22386 5 4.5V15.5C5 15.7761 5.22386 16 5.5 16H10.5C10.7761 16 11 15.7761 11 15.5V4.5C11 4.22386 10.7761 4 10.5 4Z" fill="#D3D9DF"/>
					<path d="M14.75 1H14.25C14.1119 1 14 1.11193 14 1.25V18.75C14 18.8881 14.1119 19 14.25 19H14.75C14.8881 19 15 18.8881 15 18.75V1.25C15 1.11193 14.8881 1 14.75 1Z" fill="#D3D9DF"/>
				</svg>
			</div>
			<div class="tw-flex tw-items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M14.5 4H9.5C9.22386 4 9 4.22386 9 4.5V15.5C9 15.7761 9.22386 16 9.5 16H14.5C14.7761 16 15 15.7761 15 15.5V4.5C15 4.22386 14.7761 4 14.5 4Z" fill="#D3D9DF"/>
					<path d="M5.75 1H5.25C5.11193 1 5 1.11193 5 1.25V18.75C5 18.8881 5.11193 19 5.25 19H5.75C5.88807 19 6 18.8881 6 18.75V1.25C6 1.11193 5.88807 1 5.75 1Z" fill="#D3D9DF"/>
				</svg>
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_content_inner_padding_all[left]" value="<?php echo esc_attr( $showcase_details['content_inner_padding_all']['left'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
			</div>
			<div class="tw-flex tw-items-center">
				<div class="tw-relative">
					<label>
						<input type="number" min="0" name="wcc_showcase_content_inner_padding_all[bottom]" value="<?php echo esc_attr( $showcase_details['content_inner_padding_all']['bottom'] ); ?>">
					</label>
					<span><?php echo esc_attr( 'px' ); ?></span>
				</div>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
					<path d="M15.5 5H4.5C4.22386 5 4 5.22386 4 5.5V10.5C4 10.7761 4.22386 11 4.5 11H15.5C15.7761 11 16 10.7761 16 10.5V5.5C16 5.22386 15.7761 5 15.5 5Z" fill="#D3D9DF"/>
					<path d="M18.75 14H1.25C1.11193 14 1 14.1119 1 14.25V14.75C1 14.8881 1.11193 15 1.25 15H18.75C18.8881 15 19 14.8881 19 14.75V14.25C19 14.1119 18.8881 14 18.75 14Z" fill="#D3D9DF"/>
				</svg>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M9.71917 17.4482H9.07965V11.4281H10.7864C11.0859 10.9903 11.4307 10.5866 11.8147 10.2241H9.07965V4.20401H13.7994V8.881C14.1803 8.70897 14.5751 8.57099 14.9794 8.46863V4.20401H19.6991V8.881C20.1123 9.06847 20.5073 9.29501 20.8791 9.55766V3.60201C20.8791 3.44234 20.8169 3.28922 20.7063 3.17632C20.5956 3.06343 20.4456 3 20.2891 3H2.58997C2.4335 3 2.28344 3.06343 2.1728 3.17632C2.06216 3.28922 2 3.44234 2 3.60201V18.0502C2 18.2098 2.06216 18.363 2.1728 18.4758C2.28344 18.5887 2.4335 18.6522 2.58997 18.6522H10.1233C9.95471 18.2635 9.81949 17.8607 9.71917 17.4482ZM7.8997 17.4482H3.17994V11.4281H7.8997V17.4482ZM7.8997 10.2241H3.17994V4.20401H7.8997V10.2241Z" fill="#2270B1"/>
		<path d="M16.7493 10.2843C15.7108 10.2843 14.6956 10.5985 13.8321 11.1872C12.9686 11.776 12.2956 12.6128 11.8982 13.5918C11.5008 14.5708 11.3968 15.6481 11.5994 16.6874C11.802 17.7267 12.3021 18.6814 13.0364 19.4307C13.7708 20.18 14.7064 20.6903 15.7249 20.897C16.7434 21.1038 17.7992 20.9977 18.7586 20.5922C19.7181 20.1866 20.5381 19.4999 21.1151 18.6188C21.692 17.7377 22 16.7018 22 15.6421C22 14.2211 21.4468 12.8584 20.4621 11.8536C19.4774 10.8488 18.1418 10.2843 16.7493 10.2843ZM15.3699 18.9002L12.9345 16.4157C12.8792 16.3593 12.8481 16.2827 12.8481 16.2029C12.8481 16.1231 12.8792 16.0465 12.9345 15.9901L13.5457 15.3664C13.601 15.31 13.6761 15.2783 13.7543 15.2783C13.8325 15.2783 13.9075 15.31 13.9628 15.3664L15.574 17.0105L19.1764 13.3346C19.2317 13.2782 19.3067 13.2465 19.385 13.2465C19.4632 13.2465 19.5382 13.2782 19.5935 13.3346L20.2088 13.9625C20.2641 14.019 20.2952 14.0955 20.2952 14.1753C20.2952 14.2552 20.2641 14.3317 20.2088 14.3882L15.7841 18.9032C15.7285 18.9583 15.6539 18.9889 15.5764 18.9883C15.4989 18.9878 15.4247 18.9561 15.3699 18.9002Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Category Showcase', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Categories Image', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Choose to Show/Hide images to visually represent each category in your showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_show_category_image" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['show_category_image'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Categories Icon', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Choose to Show/Hide icons to visually represent each category in your showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_show_category_icon" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['show_category_icon'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Category Title', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Show/Hide category title to be displayed in the showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_show_category_title" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['show_category_title'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Category Description', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Show/Hide description or summary for each category to provide additional context or information.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_show_category_description" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['show_category_description'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Product Quantity', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Display the total number of products within each category.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_show_category_product_quantity" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['show_category_product_quantity'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Sub-categories Product Quantity', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Show/Hide the total number of products within each subcategory.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_show_subcategory_product_quantity" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['show_subcategory_product_quantity'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Custom Text', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Add custom text or message like Price Range, Category Details to further enhance the description or information for each category.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_show_custom_text" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['show_custom_text'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M9.71917 17.4482H9.07965V11.4281H10.7864C11.0859 10.9903 11.4307 10.5866 11.8147 10.2241H9.07965V4.20401H13.7994V8.881C14.1803 8.70897 14.5751 8.57099 14.9794 8.46863V4.20401H19.6991V8.881C20.1123 9.06847 20.5073 9.29501 20.8791 9.55766V3.60201C20.8791 3.44234 20.8169 3.28922 20.7063 3.17632C20.5956 3.06343 20.4456 3 20.2891 3H2.58997C2.4335 3 2.28344 3.06343 2.1728 3.17632C2.06216 3.28922 2 3.44234 2 3.60201V18.0502C2 18.2098 2.06216 18.363 2.1728 18.4758C2.28344 18.5887 2.4335 18.6522 2.58997 18.6522H10.1233C9.95471 18.2635 9.81949 17.8607 9.71917 17.4482ZM7.8997 17.4482H3.17994V11.4281H7.8997V17.4482ZM7.8997 10.2241H3.17994V4.20401H7.8997V10.2241Z" fill="#2270B1"/>
		<path d="M16.7493 10.2843C15.7108 10.2843 14.6956 10.5985 13.8321 11.1872C12.9686 11.776 12.2956 12.6128 11.8982 13.5918C11.5008 14.5708 11.3968 15.6481 11.5994 16.6874C11.802 17.7267 12.3021 18.6814 13.0364 19.4307C13.7708 20.18 14.7064 20.6903 15.7249 20.897C16.7434 21.1038 17.7992 20.9977 18.7586 20.5922C19.7181 20.1866 20.5381 19.4999 21.1151 18.6188C21.692 17.7377 22 16.7018 22 15.6421C22 14.2211 21.4468 12.8584 20.4621 11.8536C19.4774 10.8488 18.1418 10.2843 16.7493 10.2843ZM15.3699 18.9002L12.9345 16.4157C12.8792 16.3593 12.8481 16.2827 12.8481 16.2029C12.8481 16.1231 12.8792 16.0465 12.9345 15.9901L13.5457 15.3664C13.601 15.31 13.6761 15.2783 13.7543 15.2783C13.8325 15.2783 13.9075 15.31 13.9628 15.3664L15.574 17.0105L19.1764 13.3346C19.2317 13.2782 19.3067 13.2465 19.385 13.2465C19.4632 13.2465 19.5382 13.2782 19.5935 13.3346L20.2088 13.9625C20.2641 14.019 20.2952 14.0955 20.2952 14.1753C20.2952 14.2552 20.2641 14.3317 20.2088 14.3882L15.7841 18.9032C15.7285 18.9583 15.6539 18.9889 15.5764 18.9883C15.4989 18.9878 15.4247 18.9561 15.3699 18.9002Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Button Style', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Button', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Show/Hide the button to prompt user action, such as exploring the category or making a purchase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_show_button" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['show_button'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Button Text', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Enter the text or label to be displayed on the call-to-action button.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center tw-bg-bg-grey-50">
		<input type="text" name="wcc_showcase_button_text" min="1" class="wcc_showcase-settings-field tw-text-sm tw-w-[350px]" placeholder="<?php esc_html_e( 'type button text...', 'wc-category-showcase' ); ?>" value="<?php echo esc_attr( $showcase_details['button_text'] ); ?>">
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Button Style', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Choose the visual style or design for the call-to-action button.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-bg-input-grey-50 tw-w-[360px] tw-h-[292px] wcc_showcase-category-list-item">
		<div class="tw-grid tw-grid-cols-2 tw-gap-x-2 tw-gap-y-6 tw-justify-items-center tw-m-3 tw-pb-1">
			<div class="tw-text-center">
				<div class="tw-w-[160px] tw-h-[68px] tw-bg-white tw-flex tw-rounded-md">
					<span class="tw-w-[108px] tw-text-button-bg-color tw-m-auto tw-py-[9px]"><?php esc_html_e( 'Shop Now', 'wc-category-showcase' ); ?></span>
				</div>
				<div class="tw-mt-2">
					<label for="wcc_showcase_button_style_only_text">
						<input type="radio" name="wcc_showcase_button_style" id="wcc_showcase_button_style_only_text" <?php if ( 'only_text' === $showcase_details['button_style'] ) { echo 'checked'; } ?> value="<?php echo esc_attr( 'only_text' ); ?>">
						<?php esc_html_e( 'Only Text', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-text-center">
				<div class="tw-w-[160px] tw-h-[68px] tw-bg-white tw-flex tw-rounded-md">
					<span class="tw-w-[108px] tw-bg-button-bg-color tw-text-white tw-m-auto tw-py-[9px]"><?php esc_html_e( 'Shop Now', 'wc-category-showcase' ); ?></span>
				</div>
				<div class="tw-mt-2">
					<label for="wcc_showcase_button_style_sharp_corner">
						<input type="radio" name="wcc_showcase_button_style" id="wcc_showcase_button_style_sharp_corner" <?php if ( 'sharp_corner' === $showcase_details['button_style'] ) { echo 'checked'; } ?> value="<?php echo esc_attr( 'sharp_corner' ); ?>">
						<?php esc_html_e( 'Sharp Corner', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-text-center">
				<div class="tw-w-[160px] tw-h-[68px] tw-bg-white tw-flex tw-rounded-md">
					<span class="tw-w-[108px] tw-bg-button-bg-color tw-text-white tw-m-auto tw-py-[9px] tw-rounded-md"><?php esc_html_e( 'Shop Now', 'wc-category-showcase' ); ?></span>
				</div>
				<div class="tw-mt-2">
					<label for="wcc_showcase_button_style_slightly_rounded">
						<input type="radio" name="wcc_showcase_button_style" id="wcc_showcase_button_style_slightly_rounded" <?php if ( 'slightly_rounded' === $showcase_details['button_style'] ) { echo 'checked'; } ?> value="<?php echo esc_attr( 'slightly_rounded' ); ?>">
						<?php esc_html_e( 'Slightly Rounded', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-text-center">
				<div class="tw-w-[160px] tw-h-[68px] tw-bg-white tw-flex tw-rounded-md">
					<span class="tw-w-[108px] tw-bg-button-bg-color tw-text-white tw-m-auto tw-py-[9px] tw-rounded-[18px]"><?php esc_html_e( 'Shop Now', 'wc-category-showcase' ); ?></span>
				</div>
				<div class="tw-mt-2">
					<label for="wcc_showcase_button_style_rounded">
						<input type="radio" name="wcc_showcase_button_style" id="wcc_showcase_button_style_rounded" <?php if ( 'rounded' === $showcase_details['button_style'] ) { echo 'checked'; } ?> value="<?php echo esc_attr( 'rounded' ); ?>">
						<?php esc_html_e( 'Rounded', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
		</div>
		<div class="tw-m-3 tw-pt-4 tw-border-t tw-border-divider-grey-100 wcc_showcase-button-border-top">
			<label for="wcc_showcase_show_button_icon">
				<input type="checkbox" name="wcc_showcase_show_button_icon" id="wcc_showcase_show_button_icon" <?php if ( 'yes' === $showcase_details['show_button_icon'] ) { echo 'checked'; } ?> value="<?php echo esc_attr( 'yes' ); ?>">
				<?php esc_html_e( 'Show Arrow Icon', 'wc-category-showcase' ); ?>
			</label>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3 sm:tw-w-full tw-opacity-50">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Button Color', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Select the color for the call-to-action button to match your store\'s branding or design scheme.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-flex-col tw-items-left wcc_showcase-pro">
		<div class="tw-w-[348px] tw-h-[482px] tw-rounded-md tw-p-2 wcc_showcase-category-list-item tw-opacity-50">
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'BG Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input disabled class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['button']['background_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF80', width: 121, height: 121 }" name="wcc_showcase_button[background_color]" value="<?php echo esc_attr( $showcase_details['button']['background_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Text Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input disabled class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['button']['text_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF80', width: 121, height: 121 }" name="wcc_showcase_button[text_color]" value="<?php echo esc_attr( $showcase_details['button']['text_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Hover BG Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input disabled class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['button']['hover_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF80', width: 121, height: 121 }" name="wcc_showcase_button[hover_color]" value="<?php echo esc_attr( $showcase_details['button']['hover_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Hover Text Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input disabled class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['button']['hover_text_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF80', width: 121, height: 121 }" name="wcc_showcase_button[hover_text_color]" value="<?php echo esc_attr( $showcase_details['button']['hover_text_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Border Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input disabled class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['button']['border_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF80', width: 121, height: 121 }" name="wcc_showcase_button[border_color]" value="<?php echo esc_attr( $showcase_details['button']['border_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Border Hover Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<input disabled class="wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" data-jscolor="{ value: '<?php echo esc_attr( $showcase_details['button']['border_hover_color'] ); ?>', backgroundColor: '#333', shadowColor: '#FFFFFF80', width: 121, height: 121 }" name="wcc_showcase_button[border_hover_color]" value="<?php echo esc_attr( $showcase_details['button']['border_hover_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
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
				<span class="tw-text-text-grey-500 tw-text-xs tw-italic tw-leading-4 tw-w-full tw-font-medium"><?php esc_html_e( 'Unlock a variety of professionally designed layouts to enhance the presentation of your product categories.', 'wc-category-showcase' ); ?><a href="#" class="wcc_showcase-pro tw-text-accent-orange-500 tw-text-xs tw-leading-4 tw-font-semibold"><?php esc_html_e( 'Upgrade To Pro!', 'wc-category-showcase' ); ?></a></span>
			</div>
		</div>
	</div>
</div>
