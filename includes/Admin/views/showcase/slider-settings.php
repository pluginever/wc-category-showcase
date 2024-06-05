<?php
/**
 * Slider settings tab.
 *
 * @package WooCommerceCategoryShowcase
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="wcc_showcase-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.6875 5.4022H10.6875C10.5441 4.72426 10.1608 4.11475 9.60266 3.67695C9.04453 3.23916 8.34585 3 7.625 3C6.90415 3 6.20547 3.23916 5.64734 3.67695C5.08921 4.11475 4.70595 4.72426 4.5625 5.4022H2.3125C2.22962 5.4022 2.15013 5.4338 2.09153 5.49004C2.03292 5.54629 2 5.62257 2 5.7021V6.3019C2 6.38144 2.03292 6.45772 2.09153 6.51397C2.15013 6.57021 2.22962 6.6018 2.3125 6.6018H4.5625C4.70595 7.27975 5.08921 7.88926 5.64734 8.32705C6.20547 8.76485 6.90415 9.00401 7.625 9.00401C8.34585 9.00401 9.04453 8.76485 9.60266 8.32705C10.1608 7.88926 10.5441 7.27975 10.6875 6.6018H21.6875C21.7704 6.6018 21.8499 6.57021 21.9085 6.51397C21.9671 6.45772 22 6.38144 22 6.3019V5.7021C22 5.62257 21.9671 5.54629 21.9085 5.49004C21.8499 5.4338 21.7704 5.4022 21.6875 5.4022ZM7.625 7.8014C7.25416 7.8014 6.89165 7.69587 6.58331 7.49815C6.27496 7.30043 6.03464 7.0194 5.89273 6.6906C5.75081 6.36181 5.71368 6.00001 5.78603 5.65096C5.85837 5.30191 6.03695 4.98129 6.29917 4.72964C6.5614 4.47799 6.89549 4.30661 7.25921 4.23718C7.62292 4.16775 7.99992 4.20338 8.34253 4.33958C8.68514 4.47577 8.97798 4.7064 9.18401 5.00231C9.39003 5.29822 9.5 5.64612 9.5 6.002C9.5 6.47923 9.30246 6.93692 8.95083 7.27437C8.59919 7.61182 8.12228 7.8014 7.625 7.8014ZM21.6875 17.3982H13.1875C13.0441 16.7203 12.6608 16.1107 12.1027 15.6729C11.5445 15.2352 10.8458 14.996 10.125 14.996C9.40415 14.996 8.70547 15.2352 8.14734 15.6729C7.58921 16.1107 7.20595 16.7203 7.0625 17.3982H2.3125C2.22962 17.3982 2.15013 17.4298 2.09153 17.486C2.03292 17.5423 2 17.6186 2 17.6981V18.2979C2 18.3774 2.03292 18.4537 2.09153 18.51C2.15013 18.5662 2.22962 18.5978 2.3125 18.5978H7.0625C7.20595 19.2757 7.58921 19.8853 8.14734 20.323C8.70547 20.7608 9.40415 21 10.125 21C10.8458 21 11.5445 20.7608 12.1027 20.323C12.6608 19.8853 13.0441 19.2757 13.1875 18.5978H21.6875C21.7704 18.5978 21.8499 18.5662 21.9085 18.51C21.9671 18.4537 22 18.3774 22 18.2979V17.6981C22 17.6186 21.9671 17.5423 21.9085 17.486C21.8499 17.4298 21.7704 17.3982 21.6875 17.3982ZM10.125 19.7974C9.75416 19.7974 9.39165 19.6919 9.08331 19.4941C8.77496 19.2964 8.53464 19.0154 8.39273 18.6866C8.25081 18.3578 8.21368 17.996 8.28603 17.6469C8.35837 17.2979 8.53695 16.9773 8.79917 16.7256C9.0614 16.474 9.39549 16.3026 9.75921 16.2332C10.1229 16.1637 10.4999 16.1994 10.8425 16.3356C11.1851 16.4718 11.478 16.7024 11.684 16.9983C11.89 17.2942 12 17.6421 12 17.998C12 18.4752 11.8025 18.9329 11.4508 19.2704C11.0992 19.6078 10.6223 19.7974 10.125 19.7974ZM2 11.7001V12.2999C2 12.3794 2.03292 12.4557 2.09153 12.512C2.15013 12.5682 2.22962 12.5998 2.3125 12.5998H13.3125C13.4559 13.2777 13.8392 13.8873 14.3973 14.325C14.9555 14.7628 15.6542 15.002 16.375 15.002C17.0958 15.002 17.7945 14.7628 18.3527 14.325C18.9108 13.8873 19.2941 13.2777 19.4375 12.5998H21.6875C21.7704 12.5998 21.8499 12.5682 21.9085 12.512C21.9671 12.4557 22 12.3794 22 12.2999V11.7001C22 11.6206 21.9671 11.5443 21.9085 11.488C21.8499 11.4318 21.7704 11.4002 21.6875 11.4002H19.4375C19.2941 10.7223 18.9108 10.1127 18.3527 9.67495C17.7945 9.23715 17.0958 8.998 16.375 8.998C15.6542 8.998 14.9555 9.23715 14.3973 9.67495C13.8392 10.1127 13.4559 10.7223 13.3125 11.4002H2.3125C2.22962 11.4002 2.15013 11.4318 2.09153 11.488C2.03292 11.5443 2 11.6206 2 11.7001ZM14.5 12C14.5 11.6441 14.61 11.2962 14.816 11.0003C15.022 10.7044 15.3149 10.4738 15.6575 10.3376C16.0001 10.2014 16.3771 10.1657 16.7408 10.2352C17.1045 10.3046 17.4386 10.476 17.7008 10.7276C17.963 10.9793 18.1416 11.2999 18.214 11.649C18.2863 11.998 18.2492 12.3598 18.1073 12.6886C17.9654 13.0174 17.725 13.2984 17.4167 13.4961C17.1084 13.6939 16.7458 13.7994 16.375 13.7994C15.8777 13.7994 15.4008 13.6098 15.0492 13.2724C14.6975 12.9349 14.5 12.4772 14.5 12Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Ticker Settings', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Ticker Carousel', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Showcase your product categories in a continuous, scrolling format. Ideal for grabbing visitor\'s attention with a steady stream of category highlights.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_slide_is_ticker" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['wcc_showcase_slide_is_ticker'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Ticker Slider Direction', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Set the direction in which the ticker scrolls. Choose between left-to-right or right-to-left scrolling.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="select-wrapper" id="wcc_showcase-ticker-direction">
			<div class="select wcc_showcase-ticker-direction tw-w-[224px] tw-bg-input-grey-50 tw-border-divider-grey-100 tw-rounded-md">
				<div class="select__trigger tw-bg-input-grey-50">
					<span class="tw-flex tw-items-center tw-gap-1 tw-text-text-grey-500">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
							<path d="M13.5 17L14.375 17C15.8247 17 17 15.8247 17 14.375L17 5.625C17 4.17525 15.8247 3 14.375 3L13.5 3M10 6.5L13.5 10M13.5 10L10 13.5M13.5 10L3 10" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<?php esc_html_e( 'Left to Right', 'wc-category-showcase' ); ?>
					</span>
					<div class="wcc_showcase-arrow">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" fill="none">
							<path d="M4.66663 10L7.99996 13.3333L11.3333 10" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M4.66663 6.00033L7.99996 2.66699L11.3333 6.00033" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</div>
				<div class="custom-options tw-w-[224px] tw-bg-white tw-border-divider-grey-100 tw-rounded-md tw-hidden">
					<span class="custom-option wccs-ticker-direction <?php echo 'left_to_right' === $showcase_details['wcc_showcase_slider_ticker_direction'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'left_to_right' ); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
							<path d="M13.5 17L14.375 17C15.8247 17 17 15.8247 17 14.375L17 5.625C17 4.17525 15.8247 3 14.375 3L13.5 3M10 6.5L13.5 10M13.5 10L10 13.5M13.5 10L3 10" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<?php esc_html_e( 'Left to Right', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-ticker-direction <?php echo 'right_to_left' === $showcase_details['wcc_showcase_slider_ticker_direction'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'right_to_left' ); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
							<path d="M6.5 17L5.625 17C4.17525 17 3 15.8247 3 14.375L3 5.625C3 4.17525 4.17525 3 5.625 3L6.5 3M10 6.5L6.5 10M6.5 10L10 13.5M6.5 10L17 10" stroke="#64748B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<?php esc_html_e( 'Right to Left', 'wc-category-showcase' ); ?>
					</span>
				</div>
			</div>
			<input type="hidden" name="wcc_showcase_slider_ticker_direction" id="wcc_showcase_slider_ticker_direction" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slider_ticker_direction'] ); ?>">
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Ticker Speed', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Adjust the speed at which the categories scroll. A higher value will make the ticker move faster, while a lower value will slow it down.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center tw-gap-2 tw-rounded-md tw-max-w-[385px]">
		<span class="tw-isolate tw-flex tw-flex-row tw-items-center tw-bg-input-grey-50 tw-p-1 tw-rounded-md tw-shadow-sm tw-min-w-[385px]">
			<label class="tw-w-1/3 wcc_showcase-ticker-mode <?php echo 'slow' === $showcase_details['wcc_showcase_ticket_mode'] ? 'wcc_showcase-group-button-active' : 'wcc_showcase-group-button'; ?>">
				<input type="radio" name="wcc_showcase_ticket_mode" checked class="!tw-hidden" value="<?php echo esc_attr( 'slow' ); ?>" <?php if ( 'slow' === $showcase_details['wcc_showcase_ticket_mode'] ) { echo 'checked'; } ?>>
				<?php esc_html_e( 'Slow', 'wc-category-showcase' ); ?>
			</label>
			<label class="tw-w-1/3 wcc_showcase-ticker-mode <?php echo 'medium' === $showcase_details['wcc_showcase_ticket_mode'] ? 'wcc_showcase-group-button-active' : 'wcc_showcase-group-button'; ?>">
				<input type="radio" name="wcc_showcase_ticket_mode" class="!tw-hidden" value="<?php echo esc_attr( 'medium' ); ?>" <?php if ( 'medium' === $showcase_details['wcc_showcase_ticket_mode'] ) { echo 'checked'; } ?>>
				<?php esc_html_e( 'Medium', 'wc-category-showcase' ); ?>
			</label>
			<label class="tw-w-1/3 wcc_showcase-ticker-mode <?php echo 'fast' === $showcase_details['wcc_showcase_ticket_mode'] ? 'wcc_showcase-group-button-active' : 'wcc_showcase-group-button'; ?>">
				<input type="radio" name="wcc_showcase_ticket_mode" class="!tw-hidden" value="<?php echo esc_attr( 'fast' ); ?>" <?php if ( 'fast' === $showcase_details['wcc_showcase_ticket_mode'] ) { echo 'checked'; } ?>>
				<?php esc_html_e( 'Fast', 'wc-category-showcase' ); ?>
			</label>
		</span>
	</div>
</div>

<div class="wcc_showcase-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.6875 5.4022H10.6875C10.5441 4.72426 10.1608 4.11475 9.60266 3.67695C9.04453 3.23916 8.34585 3 7.625 3C6.90415 3 6.20547 3.23916 5.64734 3.67695C5.08921 4.11475 4.70595 4.72426 4.5625 5.4022H2.3125C2.22962 5.4022 2.15013 5.4338 2.09153 5.49004C2.03292 5.54629 2 5.62257 2 5.7021V6.3019C2 6.38144 2.03292 6.45772 2.09153 6.51397C2.15013 6.57021 2.22962 6.6018 2.3125 6.6018H4.5625C4.70595 7.27975 5.08921 7.88926 5.64734 8.32705C6.20547 8.76485 6.90415 9.00401 7.625 9.00401C8.34585 9.00401 9.04453 8.76485 9.60266 8.32705C10.1608 7.88926 10.5441 7.27975 10.6875 6.6018H21.6875C21.7704 6.6018 21.8499 6.57021 21.9085 6.51397C21.9671 6.45772 22 6.38144 22 6.3019V5.7021C22 5.62257 21.9671 5.54629 21.9085 5.49004C21.8499 5.4338 21.7704 5.4022 21.6875 5.4022ZM7.625 7.8014C7.25416 7.8014 6.89165 7.69587 6.58331 7.49815C6.27496 7.30043 6.03464 7.0194 5.89273 6.6906C5.75081 6.36181 5.71368 6.00001 5.78603 5.65096C5.85837 5.30191 6.03695 4.98129 6.29917 4.72964C6.5614 4.47799 6.89549 4.30661 7.25921 4.23718C7.62292 4.16775 7.99992 4.20338 8.34253 4.33958C8.68514 4.47577 8.97798 4.7064 9.18401 5.00231C9.39003 5.29822 9.5 5.64612 9.5 6.002C9.5 6.47923 9.30246 6.93692 8.95083 7.27437C8.59919 7.61182 8.12228 7.8014 7.625 7.8014ZM21.6875 17.3982H13.1875C13.0441 16.7203 12.6608 16.1107 12.1027 15.6729C11.5445 15.2352 10.8458 14.996 10.125 14.996C9.40415 14.996 8.70547 15.2352 8.14734 15.6729C7.58921 16.1107 7.20595 16.7203 7.0625 17.3982H2.3125C2.22962 17.3982 2.15013 17.4298 2.09153 17.486C2.03292 17.5423 2 17.6186 2 17.6981V18.2979C2 18.3774 2.03292 18.4537 2.09153 18.51C2.15013 18.5662 2.22962 18.5978 2.3125 18.5978H7.0625C7.20595 19.2757 7.58921 19.8853 8.14734 20.323C8.70547 20.7608 9.40415 21 10.125 21C10.8458 21 11.5445 20.7608 12.1027 20.323C12.6608 19.8853 13.0441 19.2757 13.1875 18.5978H21.6875C21.7704 18.5978 21.8499 18.5662 21.9085 18.51C21.9671 18.4537 22 18.3774 22 18.2979V17.6981C22 17.6186 21.9671 17.5423 21.9085 17.486C21.8499 17.4298 21.7704 17.3982 21.6875 17.3982ZM10.125 19.7974C9.75416 19.7974 9.39165 19.6919 9.08331 19.4941C8.77496 19.2964 8.53464 19.0154 8.39273 18.6866C8.25081 18.3578 8.21368 17.996 8.28603 17.6469C8.35837 17.2979 8.53695 16.9773 8.79917 16.7256C9.0614 16.474 9.39549 16.3026 9.75921 16.2332C10.1229 16.1637 10.4999 16.1994 10.8425 16.3356C11.1851 16.4718 11.478 16.7024 11.684 16.9983C11.89 17.2942 12 17.6421 12 17.998C12 18.4752 11.8025 18.9329 11.4508 19.2704C11.0992 19.6078 10.6223 19.7974 10.125 19.7974ZM2 11.7001V12.2999C2 12.3794 2.03292 12.4557 2.09153 12.512C2.15013 12.5682 2.22962 12.5998 2.3125 12.5998H13.3125C13.4559 13.2777 13.8392 13.8873 14.3973 14.325C14.9555 14.7628 15.6542 15.002 16.375 15.002C17.0958 15.002 17.7945 14.7628 18.3527 14.325C18.9108 13.8873 19.2941 13.2777 19.4375 12.5998H21.6875C21.7704 12.5998 21.8499 12.5682 21.9085 12.512C21.9671 12.4557 22 12.3794 22 12.2999V11.7001C22 11.6206 21.9671 11.5443 21.9085 11.488C21.8499 11.4318 21.7704 11.4002 21.6875 11.4002H19.4375C19.2941 10.7223 18.9108 10.1127 18.3527 9.67495C17.7945 9.23715 17.0958 8.998 16.375 8.998C15.6542 8.998 14.9555 9.23715 14.3973 9.67495C13.8392 10.1127 13.4559 10.7223 13.3125 11.4002H2.3125C2.22962 11.4002 2.15013 11.4318 2.09153 11.488C2.03292 11.5443 2 11.6206 2 11.7001ZM14.5 12C14.5 11.6441 14.61 11.2962 14.816 11.0003C15.022 10.7044 15.3149 10.4738 15.6575 10.3376C16.0001 10.2014 16.3771 10.1657 16.7408 10.2352C17.1045 10.3046 17.4386 10.476 17.7008 10.7276C17.963 10.9793 18.1416 11.2999 18.214 11.649C18.2863 11.998 18.2492 12.3598 18.1073 12.6886C17.9654 13.0174 17.725 13.2984 17.4167 13.4961C17.1084 13.6939 16.7458 13.7994 16.375 13.7994C15.8777 13.7994 15.4008 13.6098 15.0492 13.2724C14.6975 12.9349 14.5 12.4772 14.5 12Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Slider Settings', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Automatic Slideshow', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Enable or disable automatic transitioning between slides in the slider without user input.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_slide_slideshow" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['wcc_showcase_slide_slideshow'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Slide Speed', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Set the duration of the animation effect when transitioning between slides within the slider.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
			<path d="M15.9833 4.14095L14.9583 5.68262C15.4526 6.66852 15.6946 7.76165 15.6626 8.86406C15.6306 9.96647 15.3256 11.0437 14.775 11.9993H3.22498C2.50929 10.7577 2.21273 9.31855 2.37926 7.89518C2.5458 6.4718 3.16657 5.13998 4.14955 4.09714C5.13252 3.05431 6.42537 2.35599 7.83643 2.1057C9.24749 1.85541 10.7016 2.06648 11.9833 2.70762L13.525 1.68262C11.9554 0.676134 10.0936 0.225125 8.23739 0.401734C6.38119 0.578344 4.63785 1.37237 3.28622 2.6568C1.9346 3.94123 1.05278 5.64185 0.781829 7.48663C0.510875 9.33142 0.86644 11.2138 1.79165 12.8326C1.93707 13.0845 2.14589 13.294 2.39734 13.4402C2.64879 13.5864 2.93412 13.6642 3.22498 13.666H14.7666C15.0603 13.6671 15.3491 13.5907 15.6037 13.4443C15.8584 13.298 16.0698 13.087 16.2166 12.8326C16.9845 11.5026 17.3698 9.98618 17.3301 8.45092C17.2904 6.91565 16.8272 5.42122 15.9916 4.13262L15.9833 4.14095ZM7.82498 9.84095C7.97966 9.99611 8.16344 10.1192 8.36578 10.2032C8.56813 10.2872 8.78506 10.3305 9.00415 10.3305C9.22324 10.3305 9.44017 10.2872 9.64251 10.2032C9.84486 10.1192 10.0286 9.99611 10.1833 9.84095L14.9 2.76595L7.82498 7.48262C7.67002 7.63741 7.54709 7.82122 7.46321 8.02355C7.37934 8.22588 7.33617 8.44276 7.33617 8.66179C7.33617 8.88081 7.37934 9.09769 7.46321 9.30002C7.54709 9.50235 7.67002 9.68617 7.82498 9.84095Z" fill="#2270B1"/>
		</svg>
		<label class="tw-inline-flex tw-cursor-pointer tw-relative tw-pl-[4px]">
			<input type="number" name="wcc_showcase_slide_speed" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slide_speed'] ); ?>" class="wcc_showcase-settings-field-border">
			<span class="tw-absolute tw-bg-input-grey-50 tw-py-[6px] tw-px-4 tw-items-center tw-top-[2px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'ms' ); ?></span>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Stop on Hover', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Control whether the slider pauses when the user hovers over it with their cursor.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_slide_stop_on_hover" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['wcc_showcase_slide_stop_on_hover'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Unlimited Loop', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Determine if the slider should cycle endlessly or stop after reaching the last slide.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_slide_unlimited_loop" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['wcc_showcase_slide_unlimited_loop'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.6875 5.4022H10.6875C10.5441 4.72426 10.1608 4.11475 9.60266 3.67695C9.04453 3.23916 8.34585 3 7.625 3C6.90415 3 6.20547 3.23916 5.64734 3.67695C5.08921 4.11475 4.70595 4.72426 4.5625 5.4022H2.3125C2.22962 5.4022 2.15013 5.4338 2.09153 5.49004C2.03292 5.54629 2 5.62257 2 5.7021V6.3019C2 6.38144 2.03292 6.45772 2.09153 6.51397C2.15013 6.57021 2.22962 6.6018 2.3125 6.6018H4.5625C4.70595 7.27975 5.08921 7.88926 5.64734 8.32705C6.20547 8.76485 6.90415 9.00401 7.625 9.00401C8.34585 9.00401 9.04453 8.76485 9.60266 8.32705C10.1608 7.88926 10.5441 7.27975 10.6875 6.6018H21.6875C21.7704 6.6018 21.8499 6.57021 21.9085 6.51397C21.9671 6.45772 22 6.38144 22 6.3019V5.7021C22 5.62257 21.9671 5.54629 21.9085 5.49004C21.8499 5.4338 21.7704 5.4022 21.6875 5.4022ZM7.625 7.8014C7.25416 7.8014 6.89165 7.69587 6.58331 7.49815C6.27496 7.30043 6.03464 7.0194 5.89273 6.6906C5.75081 6.36181 5.71368 6.00001 5.78603 5.65096C5.85837 5.30191 6.03695 4.98129 6.29917 4.72964C6.5614 4.47799 6.89549 4.30661 7.25921 4.23718C7.62292 4.16775 7.99992 4.20338 8.34253 4.33958C8.68514 4.47577 8.97798 4.7064 9.18401 5.00231C9.39003 5.29822 9.5 5.64612 9.5 6.002C9.5 6.47923 9.30246 6.93692 8.95083 7.27437C8.59919 7.61182 8.12228 7.8014 7.625 7.8014ZM21.6875 17.3982H13.1875C13.0441 16.7203 12.6608 16.1107 12.1027 15.6729C11.5445 15.2352 10.8458 14.996 10.125 14.996C9.40415 14.996 8.70547 15.2352 8.14734 15.6729C7.58921 16.1107 7.20595 16.7203 7.0625 17.3982H2.3125C2.22962 17.3982 2.15013 17.4298 2.09153 17.486C2.03292 17.5423 2 17.6186 2 17.6981V18.2979C2 18.3774 2.03292 18.4537 2.09153 18.51C2.15013 18.5662 2.22962 18.5978 2.3125 18.5978H7.0625C7.20595 19.2757 7.58921 19.8853 8.14734 20.323C8.70547 20.7608 9.40415 21 10.125 21C10.8458 21 11.5445 20.7608 12.1027 20.323C12.6608 19.8853 13.0441 19.2757 13.1875 18.5978H21.6875C21.7704 18.5978 21.8499 18.5662 21.9085 18.51C21.9671 18.4537 22 18.3774 22 18.2979V17.6981C22 17.6186 21.9671 17.5423 21.9085 17.486C21.8499 17.4298 21.7704 17.3982 21.6875 17.3982ZM10.125 19.7974C9.75416 19.7974 9.39165 19.6919 9.08331 19.4941C8.77496 19.2964 8.53464 19.0154 8.39273 18.6866C8.25081 18.3578 8.21368 17.996 8.28603 17.6469C8.35837 17.2979 8.53695 16.9773 8.79917 16.7256C9.0614 16.474 9.39549 16.3026 9.75921 16.2332C10.1229 16.1637 10.4999 16.1994 10.8425 16.3356C11.1851 16.4718 11.478 16.7024 11.684 16.9983C11.89 17.2942 12 17.6421 12 17.998C12 18.4752 11.8025 18.9329 11.4508 19.2704C11.0992 19.6078 10.6223 19.7974 10.125 19.7974ZM2 11.7001V12.2999C2 12.3794 2.03292 12.4557 2.09153 12.512C2.15013 12.5682 2.22962 12.5998 2.3125 12.5998H13.3125C13.4559 13.2777 13.8392 13.8873 14.3973 14.325C14.9555 14.7628 15.6542 15.002 16.375 15.002C17.0958 15.002 17.7945 14.7628 18.3527 14.325C18.9108 13.8873 19.2941 13.2777 19.4375 12.5998H21.6875C21.7704 12.5998 21.8499 12.5682 21.9085 12.512C21.9671 12.4557 22 12.3794 22 12.2999V11.7001C22 11.6206 21.9671 11.5443 21.9085 11.488C21.8499 11.4318 21.7704 11.4002 21.6875 11.4002H19.4375C19.2941 10.7223 18.9108 10.1127 18.3527 9.67495C17.7945 9.23715 17.0958 8.998 16.375 8.998C15.6542 8.998 14.9555 9.23715 14.3973 9.67495C13.8392 10.1127 13.4559 10.7223 13.3125 11.4002H2.3125C2.22962 11.4002 2.15013 11.4318 2.09153 11.488C2.03292 11.5443 2 11.6206 2 11.7001ZM14.5 12C14.5 11.6441 14.61 11.2962 14.816 11.0003C15.022 10.7044 15.3149 10.4738 15.6575 10.3376C16.0001 10.2014 16.3771 10.1657 16.7408 10.2352C17.1045 10.3046 17.4386 10.476 17.7008 10.7276C17.963 10.9793 18.1416 11.2999 18.214 11.649C18.2863 11.998 18.2492 12.3598 18.1073 12.6886C17.9654 13.0174 17.725 13.2984 17.4167 13.4961C17.1084 13.6939 16.7458 13.7994 16.375 13.7994C15.8777 13.7994 15.4008 13.6098 15.0492 13.2724C14.6975 12.9349 14.5 12.4772 14.5 12Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Slide Controls', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Navigation Arrows', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Enable or disable navigation elements such as arrows or dots for users to control the slider.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_slide_navigation_arrow" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['wcc_showcase_slide_navigation_arrow'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Navigation Position', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Select the navigation position to show in your slider.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="select-wrapper" id="wcc-showcase-navigation-position">
			<div class="select tw-w-[224px] tw-bg-input-grey-50 tw-border-divider-grey-100 tw-rounded-md">
				<div class="select__trigger tw-bg-input-grey-50">
					<span class="tw-flex tw-items-center tw-gap-1 tw-text-text-grey-500">
						<?php esc_html_e( 'Default', 'wc-category-showcase' ); ?>
					</span>
					<div class="wcc_showcase-arrow">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" fill="none">
							<path d="M4.66663 10L7.99996 13.3333L11.3333 10" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M4.66663 6.00033L7.99996 2.66699L11.3333 6.00033" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
				</div>
				<div class="custom-options tw-bg-white tw-w-[224px] tw-border-divider-grey-100 tw-rounded-md tw-hidden">
					<span class="custom-option wccs-navigation-position-option <?php echo 'default' === $showcase_details['wcc_showcase_slider_navigation_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'default' ); ?>">
						<?php esc_html_e( 'Default', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-navigation-position-option <?php echo 'top-right' === $showcase_details['wcc_showcase_slider_navigation_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'top-right' ); ?>">
						<?php esc_html_e( 'Top Right', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-navigation-position-option <?php echo 'top-left' === $showcase_details['wcc_showcase_slider_navigation_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'top-left' ); ?>">
						<?php esc_html_e( 'Top Left', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-navigation-position-option <?php echo 'bottom-right' === $showcase_details['wcc_showcase_slider_navigation_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'bottom-right' ); ?>">
						<?php esc_html_e( 'Bottom Right', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-navigation-position-option <?php echo 'bottom-left' === $showcase_details['wcc_showcase_slider_navigation_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'bottom-left' ); ?>">
						<?php esc_html_e( 'Bottom Left', 'wc-category-showcase' ); ?>
					</span>
					<span class="custom-option wccs-navigation-position-option <?php echo 'bottom-center' === $showcase_details['wcc_showcase_slider_navigation_position'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'bottom-center' ); ?>">
						<?php esc_html_e( 'Bottom Center', 'wc-category-showcase' ); ?>
					</span>
				</div>
			</div>
			<input type="hidden" name="wcc_showcase_slider_navigation_position" id="wcc_showcase_slider_navigation_position" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slider_navigation_position'] ); ?>">
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Arrow Styles', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Choose the style or design of the navigation arrows in the slider.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="tw-w-[360px] tw-h-[110px] tw-bg-input-grey-50 tw-rounded-md tw-p-2 wcc_showcase-category-list-item tw-flex tw-flex-row tw-justify-between">
			<div class="tw-mt-3 tw-pb-4">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-5 tw-w-[160px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="64" height="24" viewBox="0 0 64 24" fill="none">
							<path d="M14.4004 18L8.40039 12L14.4004 6" stroke="#130F31" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M48.4004 6L54.4004 12L48.4004 18" stroke="#130F31" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_arrow_style" value="<?php echo esc_attr( 'chevron' ); ?>" <?php echo 'chevron' === $showcase_details['wcc_showcase_slide_arrow_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Chevron', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-mt-3 tw-pb-4">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-5 tw-w-[160px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="64" height="24" viewBox="0 0 64 24" fill="none">
							<path d="M9.42584 19.2406C9.81636 19.6311 10.4495 19.6311 10.84 19.2406C11.2306 18.85 11.2306 18.2169 10.84 17.8264L9.42584 19.2406ZM3.59961 12.0001L2.8925 11.293C2.50198 11.6835 2.50198 12.3167 2.8925 12.7072L3.59961 12.0001ZM10.84 6.1739C11.2306 5.78338 11.2306 5.15021 10.84 4.75969C10.4495 4.36917 9.81636 4.36917 9.42584 4.75969L10.84 6.1739ZM20.3996 13.0001C20.9519 13.0001 21.3996 12.5524 21.3996 12.0001C21.3996 11.4478 20.9519 11.0001 20.3996 11.0001V13.0001ZM10.84 17.8264L4.30672 11.293L2.8925 12.7072L9.42584 19.2406L10.84 17.8264ZM4.30672 12.7072L10.84 6.1739L9.42584 4.75969L2.8925 11.293L4.30672 12.7072ZM3.59961 13.0001H20.3996V11.0001H3.59961V13.0001Z" fill="#130F31"/>
							<path d="M54.5734 4.75969C54.1829 4.36917 53.5497 4.36917 53.1592 4.75969C52.7686 5.15021 52.7686 5.78338 53.1592 6.1739L54.5734 4.75969ZM60.3996 12.0001L61.1067 12.7072C61.2943 12.5197 61.3996 12.2653 61.3996 12.0001C61.3996 11.7349 61.2943 11.4806 61.1067 11.293L60.3996 12.0001ZM53.1592 17.8264C52.7686 18.2169 52.7686 18.85 53.1592 19.2406C53.5497 19.6311 54.1829 19.6311 54.5734 19.2406L53.1592 17.8264ZM43.5996 11.0001C43.0473 11.0001 42.5996 11.4478 42.5996 12.0001C42.5996 12.5524 43.0473 13.0001 43.5996 13.0001V11.0001ZM53.1592 6.1739L59.6925 12.7072L61.1067 11.293L54.5734 4.75969L53.1592 6.1739ZM59.6925 11.293L53.1592 17.8264L54.5734 19.2406L61.1067 12.7072L59.6925 11.293ZM60.3996 11.0001H43.5996V13.0001H60.3996V11.0001Z" fill="#130F31"/>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_arrow_style" value="<?php echo esc_attr( 'arrow' ); ?>" <?php echo 'arrow' === $showcase_details['wcc_showcase_slide_arrow_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Arrow', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Button Styles', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Select the style or design of any control buttons in the slider.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="tw-w-[360px] tw-h-[230px] tw-bg-input-grey-50 tw-rounded-md tw-p-2 wcc_showcase-category-list-item tw-grid tw-grid-cols-2 tw-gap-y-0">
			<div class="tw-mt-3">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-4 tw-w-[160px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="92" height="40" viewBox="0 0 92 40" fill="none">
							<g clip-path="url(#clip0_662_7438)">
								<path d="M40 0H0V40H40V0Z" fill="#130F31"/>
								<path d="M17.8555 26.0341C18.1809 26.3595 18.7086 26.3595 19.034 26.0341C19.3594 25.7087 19.3594 25.181 19.034 24.8556L17.8555 26.0341ZM13.0003 20.0004L12.411 19.4112C12.2548 19.5674 12.167 19.7794 12.167 20.0004C12.167 20.2214 12.2548 20.4334 12.411 20.5897L13.0003 20.0004ZM19.034 15.1452C19.3594 14.8198 19.3594 14.2921 19.034 13.9667C18.7086 13.6413 18.1809 13.6413 17.8555 13.9667L19.034 15.1452ZM27.0003 20.8337C27.4605 20.8337 27.8336 20.4606 27.8336 20.0004C27.8336 19.5402 27.4605 19.1671 27.0003 19.1671V20.8337ZM19.034 24.8556L13.5896 19.4112L12.411 20.5897L17.8555 26.0341L19.034 24.8556ZM13.5896 20.5897L19.034 15.1452L17.8555 13.9667L12.411 19.4112L13.5896 20.5897ZM13.0003 20.8337H27.0003V19.1671H13.0003V20.8337Z" fill="white"/>
								<path d="M92 0H52V40H92V0Z" fill="#130F31"/>
								<path d="M74.1451 13.9667C73.8197 13.6413 73.292 13.6413 72.9666 13.9667C72.6412 14.2921 72.6412 14.8198 72.9666 15.1452L74.1451 13.9667ZM79.0003 20.0004L79.5896 20.5897C79.7458 20.4334 79.8336 20.2214 79.8336 20.0004C79.8336 19.7794 79.7458 19.5674 79.5896 19.4112L79.0003 20.0004ZM72.9666 24.8556C72.6412 25.181 72.6412 25.7087 72.9666 26.0341C73.292 26.3595 73.8197 26.3595 74.1451 26.0341L72.9666 24.8556ZM65.0003 19.1671C64.5401 19.1671 64.167 19.5402 64.167 20.0004C64.167 20.4606 64.5401 20.8337 65.0003 20.8337V19.1671ZM72.9666 15.1452L78.411 20.5897L79.5896 19.4112L74.1451 13.9667L72.9666 15.1452ZM78.411 19.4112L72.9666 24.8556L74.1451 26.0341L79.5896 20.5897L78.411 19.4112ZM79.0003 19.1671H65.0003V20.8337H79.0003V19.1671Z" fill="white"/>
							</g>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_button_style" value="<?php echo esc_attr( 'sharp' ); ?>" <?php echo 'sharp' === $showcase_details['wcc_showcase_slide_button_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Sharp', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-mt-3">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-4 tw-w-[160px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="92" height="40" viewBox="0 0 92 40" fill="none">
							<g clip-path="url(#clip0_662_7448)">
								<path d="M36.6667 0H3.33333C1.49238 0 0 1.49238 0 3.33333V36.6667C0 38.5076 1.49238 40 3.33333 40H36.6667C38.5076 40 40 38.5076 40 36.6667V3.33333C40 1.49238 38.5076 0 36.6667 0Z" fill="#130F31"/>
								<path d="M17.8555 26.0341C18.1809 26.3595 18.7086 26.3595 19.034 26.0341C19.3594 25.7087 19.3594 25.181 19.034 24.8556L17.8555 26.0341ZM13.0003 20.0004L12.411 19.4112C12.2548 19.5674 12.167 19.7794 12.167 20.0004C12.167 20.2214 12.2548 20.4334 12.411 20.5897L13.0003 20.0004ZM19.034 15.1452C19.3594 14.8198 19.3594 14.2921 19.034 13.9667C18.7086 13.6413 18.1809 13.6413 17.8555 13.9667L19.034 15.1452ZM27.0003 20.8337C27.4605 20.8337 27.8336 20.4606 27.8336 20.0004C27.8336 19.5402 27.4605 19.1671 27.0003 19.1671V20.8337ZM19.034 24.8556L13.5896 19.4112L12.411 20.5897L17.8555 26.0341L19.034 24.8556ZM13.5896 20.5897L19.034 15.1452L17.8555 13.9667L12.411 19.4112L13.5896 20.5897ZM13.0003 20.8337H27.0003V19.1671H13.0003V20.8337Z" fill="white"/>
								<path d="M88.6667 0H55.3333C53.4924 0 52 1.49238 52 3.33333V36.6667C52 38.5076 53.4924 40 55.3333 40H88.6667C90.5076 40 92 38.5076 92 36.6667V3.33333C92 1.49238 90.5076 0 88.6667 0Z" fill="#130F31"/>
								<path d="M74.1451 13.9667C73.8197 13.6413 73.292 13.6413 72.9666 13.9667C72.6412 14.2921 72.6412 14.8198 72.9666 15.1452L74.1451 13.9667ZM79.0003 20.0004L79.5896 20.5897C79.7458 20.4334 79.8336 20.2214 79.8336 20.0004C79.8336 19.7794 79.7458 19.5674 79.5896 19.4112L79.0003 20.0004ZM72.9666 24.8556C72.6412 25.181 72.6412 25.7087 72.9666 26.0341C73.292 26.3595 73.8197 26.3595 74.1451 26.0341L72.9666 24.8556ZM65.0003 19.1671C64.5401 19.1671 64.167 19.5402 64.167 20.0004C64.167 20.4606 64.5401 20.8337 65.0003 20.8337V19.1671ZM72.9666 15.1452L78.411 20.5897L79.5896 19.4112L74.1451 13.9667L72.9666 15.1452ZM78.411 19.4112L72.9666 24.8556L74.1451 26.0341L79.5896 20.5897L78.411 19.4112ZM79.0003 19.1671H65.0003V20.8337H79.0003V19.1671Z" fill="white"/>
							</g>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_button_style" value="<?php echo esc_attr( 'rounded' ); ?>" <?php echo 'rounded' === $showcase_details['wcc_showcase_slide_button_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Rounded', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-mt-3">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-4 tw-w-[160px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="92" height="40" viewBox="0 0 92 40" fill="none">
							<g clip-path="url(#clip0_662_7443)">
								<path d="M40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40C31.0457 40 40 31.0457 40 20Z" fill="#130F31"/>
								<path d="M17.8555 26.0341C18.1809 26.3595 18.7086 26.3595 19.034 26.0341C19.3594 25.7087 19.3594 25.181 19.034 24.8556L17.8555 26.0341ZM13.0003 20.0004L12.411 19.4112C12.2548 19.5674 12.167 19.7794 12.167 20.0004C12.167 20.2214 12.2548 20.4334 12.411 20.5897L13.0003 20.0004ZM19.034 15.1452C19.3594 14.8198 19.3594 14.2921 19.034 13.9667C18.7086 13.6413 18.1809 13.6413 17.8555 13.9667L19.034 15.1452ZM27.0003 20.8337C27.4605 20.8337 27.8336 20.4606 27.8336 20.0004C27.8336 19.5402 27.4605 19.1671 27.0003 19.1671V20.8337ZM19.034 24.8556L13.5896 19.4112L12.411 20.5897L17.8555 26.0341L19.034 24.8556ZM13.5896 20.5897L19.034 15.1452L17.8555 13.9667L12.411 19.4112L13.5896 20.5897ZM13.0003 20.8337H27.0003V19.1671H13.0003V20.8337Z" fill="white"/>
								<path d="M92 20C92 8.9543 83.0457 0 72 0C60.9543 0 52 8.9543 52 20C52 31.0457 60.9543 40 72 40C83.0457 40 92 31.0457 92 20Z" fill="#130F31"/>
								<path d="M74.1451 13.9667C73.8197 13.6413 73.292 13.6413 72.9666 13.9667C72.6412 14.2921 72.6412 14.8198 72.9666 15.1452L74.1451 13.9667ZM79.0003 20.0004L79.5896 20.5897C79.7458 20.4334 79.8336 20.2214 79.8336 20.0004C79.8336 19.7794 79.7458 19.5674 79.5896 19.4112L79.0003 20.0004ZM72.9666 24.8556C72.6412 25.181 72.6412 25.7087 72.9666 26.0341C73.292 26.3595 73.8197 26.3595 74.1451 26.0341L72.9666 24.8556ZM65.0003 19.1671C64.5401 19.1671 64.167 19.5402 64.167 20.0004C64.167 20.4606 64.5401 20.8337 65.0003 20.8337V19.1671ZM72.9666 15.1452L78.411 20.5897L79.5896 19.4112L74.1451 13.9667L72.9666 15.1452ZM78.411 19.4112L72.9666 24.8556L74.1451 26.0341L79.5896 20.5897L78.411 19.4112ZM79.0003 19.1671H65.0003V20.8337H79.0003V19.1671Z" fill="white"/>
							</g>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_button_style" value="<?php echo esc_attr( 'circle' ); ?>" <?php echo 'circle' === $showcase_details['wcc_showcase_slide_button_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Circle', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-mt-3">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-6 tw-w-[160px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="64" height="24" viewBox="0 0 64 24" fill="none">
							<path d="M9.42584 19.2406C9.81636 19.6311 10.4495 19.6311 10.84 19.2406C11.2306 18.85 11.2306 18.2169 10.84 17.8264L9.42584 19.2406ZM3.59961 12.0001L2.8925 11.293C2.50198 11.6835 2.50198 12.3167 2.8925 12.7072L3.59961 12.0001ZM10.84 6.1739C11.2306 5.78338 11.2306 5.15021 10.84 4.75969C10.4495 4.36917 9.81636 4.36917 9.42584 4.75969L10.84 6.1739ZM20.3996 13.0001C20.9519 13.0001 21.3996 12.5524 21.3996 12.0001C21.3996 11.4478 20.9519 11.0001 20.3996 11.0001V13.0001ZM10.84 17.8264L4.30672 11.293L2.8925 12.7072L9.42584 19.2406L10.84 17.8264ZM4.30672 12.7072L10.84 6.1739L9.42584 4.75969L2.8925 11.293L4.30672 12.7072ZM3.59961 13.0001H20.3996V11.0001H3.59961V13.0001Z" fill="#130F31"/>
							<path d="M54.5734 4.75969C54.1829 4.36917 53.5497 4.36917 53.1592 4.75969C52.7686 5.15021 52.7686 5.78338 53.1592 6.1739L54.5734 4.75969ZM60.3996 12.0001L61.1067 12.7072C61.2943 12.5197 61.3996 12.2653 61.3996 12.0001C61.3996 11.7349 61.2943 11.4806 61.1067 11.293L60.3996 12.0001ZM53.1592 17.8264C52.7686 18.2169 52.7686 18.85 53.1592 19.2406C53.5497 19.6311 54.1829 19.6311 54.5734 19.2406L53.1592 17.8264ZM43.5996 11.0001C43.0473 11.0001 42.5996 11.4478 42.5996 12.0001C42.5996 12.5524 43.0473 13.0001 43.5996 13.0001V11.0001ZM53.1592 6.1739L59.6925 12.7072L61.1067 11.293L54.5734 4.75969L53.1592 6.1739ZM59.6925 11.293L53.1592 17.8264L54.5734 19.2406L61.1067 12.7072L59.6925 11.293ZM60.3996 11.0001H43.5996V13.0001H60.3996V11.0001Z" fill="#130F31"/>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_button_style" value="<?php echo esc_attr( 'only_icons' ); ?>" <?php echo 'only_icons' === $showcase_details['wcc_showcase_slide_button_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Only Icons', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Button Background Styles', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Select the button background style or design of any control buttons in the slider.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="tw-w-[360px] tw-h-[230px] tw-bg-input-grey-50 tw-rounded-md tw-p-2 wcc_showcase-category-list-item tw-grid tw-grid-cols-2 tw-gap-y-0">
			<div class="tw-mt-3">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-4 tw-w-[160px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="92" height="40" viewBox="0 0 92 40" fill="none">
							<g clip-path="url(#clip0_662_7453)">
								<path d="M40 0H0V40H40V0Z" fill="#130F31"/>
								<path d="M17.8555 26.0341C18.1809 26.3595 18.7086 26.3595 19.034 26.0341C19.3594 25.7087 19.3594 25.181 19.034 24.8556L17.8555 26.0341ZM13.0003 20.0004L12.411 19.4112C12.2548 19.5674 12.167 19.7794 12.167 20.0004C12.167 20.2214 12.2548 20.4334 12.411 20.5897L13.0003 20.0004ZM19.034 15.1452C19.3594 14.8198 19.3594 14.2921 19.034 13.9667C18.7086 13.6413 18.1809 13.6413 17.8555 13.9667L19.034 15.1452ZM27.0003 20.8337C27.4605 20.8337 27.8336 20.4606 27.8336 20.0004C27.8336 19.5402 27.4605 19.1671 27.0003 19.1671V20.8337ZM19.034 24.8556L13.5896 19.4112L12.411 20.5897L17.8555 26.0341L19.034 24.8556ZM13.5896 20.5897L19.034 15.1452L17.8555 13.9667L12.411 19.4112L13.5896 20.5897ZM13.0003 20.8337H27.0003V19.1671H13.0003V20.8337Z" fill="white"/>
								<path d="M92 0H52V40H92V0Z" fill="#130F31"/>
								<path d="M74.1451 13.9667C73.8197 13.6413 73.292 13.6413 72.9666 13.9667C72.6412 14.2921 72.6412 14.8198 72.9666 15.1452L74.1451 13.9667ZM79.0003 20.0004L79.5896 20.5897C79.7458 20.4334 79.8336 20.2214 79.8336 20.0004C79.8336 19.7794 79.7458 19.5674 79.5896 19.4112L79.0003 20.0004ZM72.9666 24.8556C72.6412 25.181 72.6412 25.7087 72.9666 26.0341C73.292 26.3595 73.8197 26.3595 74.1451 26.0341L72.9666 24.8556ZM65.0003 19.1671C64.5401 19.1671 64.167 19.5402 64.167 20.0004C64.167 20.4606 64.5401 20.8337 65.0003 20.8337V19.1671ZM72.9666 15.1452L78.411 20.5897L79.5896 19.4112L74.1451 13.9667L72.9666 15.1452ZM78.411 19.4112L72.9666 24.8556L74.1451 26.0341L79.5896 20.5897L78.411 19.4112ZM79.0003 19.1671H65.0003V20.8337H79.0003V19.1671Z" fill="white"/>
							</g>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_button_background_style" value="<?php echo esc_attr( 'filled' ); ?>" <?php echo 'filled' === $showcase_details['wcc_showcase_slide_button_background_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Filled', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-mt-3">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-4 tw-w-[160px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="92" height="40" viewBox="0 0 92 40" fill="none">
							<g clip-path="url(#clip0_662_7461)">
								<path d="M39.5837 0.416992H0.416992V39.5837H39.5837V0.416992Z" fill="white"/>
								<path d="M39.5837 0.416992H0.416992V39.5837H39.5837V0.416992Z" stroke="#130F31" stroke-width="0.833333"/>
								<path d="M17.8555 26.0341C18.1809 26.3595 18.7086 26.3595 19.034 26.0341C19.3594 25.7087 19.3594 25.181 19.034 24.8556L17.8555 26.0341ZM13.0003 20.0004L12.411 19.4112C12.2548 19.5674 12.167 19.7794 12.167 20.0004C12.167 20.2214 12.2548 20.4334 12.411 20.5897L13.0003 20.0004ZM19.034 15.1452C19.3594 14.8198 19.3594 14.2921 19.034 13.9667C18.7086 13.6413 18.1809 13.6413 17.8555 13.9667L19.034 15.1452ZM27.0003 20.8337C27.4605 20.8337 27.8336 20.4606 27.8336 20.0004C27.8336 19.5402 27.4605 19.1671 27.0003 19.1671V20.8337ZM19.034 24.8556L13.5896 19.4112L12.411 20.5897L17.8555 26.0341L19.034 24.8556ZM13.5896 20.5897L19.034 15.1452L17.8555 13.9667L12.411 19.4112L13.5896 20.5897ZM13.0003 20.8337H27.0003V19.1671H13.0003V20.8337Z" fill="#130F31"/>
								<path d="M91.5837 0.416992H52.417V39.5837H91.5837V0.416992Z" fill="white"/>
								<path d="M91.5837 0.416992H52.417V39.5837H91.5837V0.416992Z" stroke="#130F31" stroke-width="0.833333"/>
								<path d="M74.1451 13.9667C73.8197 13.6413 73.292 13.6413 72.9666 13.9667C72.6412 14.2921 72.6412 14.8198 72.9666 15.1452L74.1451 13.9667ZM79.0003 20.0004L79.5896 20.5897C79.7458 20.4334 79.8336 20.2214 79.8336 20.0004C79.8336 19.7794 79.7458 19.5674 79.5896 19.4112L79.0003 20.0004ZM72.9666 24.8556C72.6412 25.181 72.6412 25.7087 72.9666 26.0341C73.292 26.3595 73.8197 26.3595 74.1451 26.0341L72.9666 24.8556ZM65.0003 19.1671C64.5401 19.1671 64.167 19.5402 64.167 20.0004C64.167 20.4606 64.5401 20.8337 65.0003 20.8337V19.1671ZM72.9666 15.1452L78.411 20.5897L79.5896 19.4112L74.1451 13.9667L72.9666 15.1452ZM78.411 19.4112L72.9666 24.8556L74.1451 26.0341L79.5896 20.5897L78.411 19.4112ZM79.0003 19.1671H65.0003V20.8337H79.0003V19.1671Z" fill="#130F31"/>
							</g>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_button_background_style" value="<?php echo esc_attr( 'outline' ); ?>" <?php echo 'outline' === $showcase_details['wcc_showcase_slide_button_background_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Outline', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-mt-3">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-4 tw-w-[160px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="92" height="40" viewBox="0 0 92 40" fill="none">
							<g clip-path="url(#clip0_662_7468)">
								<path d="M40 0H0V40H40V0Z" fill="#130F31" fill-opacity="0.32"/>
								<path d="M17.8555 26.0341C18.1809 26.3595 18.7086 26.3595 19.034 26.0341C19.3594 25.7087 19.3594 25.181 19.034 24.8556L17.8555 26.0341ZM13.0003 20.0004L12.411 19.4112C12.2548 19.5674 12.167 19.7794 12.167 20.0004C12.167 20.2214 12.2548 20.4334 12.411 20.5897L13.0003 20.0004ZM19.034 15.1452C19.3594 14.8198 19.3594 14.2921 19.034 13.9667C18.7086 13.6413 18.1809 13.6413 17.8555 13.9667L19.034 15.1452ZM27.0003 20.8337C27.4605 20.8337 27.8336 20.4606 27.8336 20.0004C27.8336 19.5402 27.4605 19.1671 27.0003 19.1671V20.8337ZM19.034 24.8556L13.5896 19.4112L12.411 20.5897L17.8555 26.0341L19.034 24.8556ZM13.5896 20.5897L19.034 15.1452L17.8555 13.9667L12.411 19.4112L13.5896 20.5897ZM13.0003 20.8337H27.0003V19.1671H13.0003V20.8337Z" fill="white"/>
								<path d="M92 0H52V40H92V0Z" fill="#130F31" fill-opacity="0.32"/>
								<path d="M74.1451 13.9667C73.8197 13.6413 73.292 13.6413 72.9666 13.9667C72.6412 14.2921 72.6412 14.8198 72.9666 15.1452L74.1451 13.9667ZM79.0003 20.0004L79.5896 20.5897C79.7458 20.4334 79.8336 20.2214 79.8336 20.0004C79.8336 19.7794 79.7458 19.5674 79.5896 19.4112L79.0003 20.0004ZM72.9666 24.8556C72.6412 25.181 72.6412 25.7087 72.9666 26.0341C73.292 26.3595 73.8197 26.3595 74.1451 26.0341L72.9666 24.8556ZM65.0003 19.1671C64.5401 19.1671 64.167 19.5402 64.167 20.0004C64.167 20.4606 64.5401 20.8337 65.0003 20.8337V19.1671ZM72.9666 15.1452L78.411 20.5897L79.5896 19.4112L74.1451 13.9667L72.9666 15.1452ZM78.411 19.4112L72.9666 24.8556L74.1451 26.0341L79.5896 20.5897L78.411 19.4112ZM79.0003 19.1671H65.0003V20.8337H79.0003V19.1671Z" fill="white"/>
							</g>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_button_background_style" value="<?php echo esc_attr( 'transparent' ); ?>" <?php echo 'transparent' === $showcase_details['wcc_showcase_slide_button_background_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Transparent', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-mt-3">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-4 tw-w-[160px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="92" height="40" viewBox="0 0 92 40" fill="none">
							<g clip-path="url(#clip0_662_7461)">
								<path d="M39.5837 0.416992H0.416992V39.5837H39.5837V0.416992Z" fill="white"/>
								<path d="M39.5837 0.416992H0.416992V39.5837H39.5837V0.416992Z" stroke="#130F31" stroke-width="0.833333"/>
								<path d="M17.8555 26.0341C18.1809 26.3595 18.7086 26.3595 19.034 26.0341C19.3594 25.7087 19.3594 25.181 19.034 24.8556L17.8555 26.0341ZM13.0003 20.0004L12.411 19.4112C12.2548 19.5674 12.167 19.7794 12.167 20.0004C12.167 20.2214 12.2548 20.4334 12.411 20.5897L13.0003 20.0004ZM19.034 15.1452C19.3594 14.8198 19.3594 14.2921 19.034 13.9667C18.7086 13.6413 18.1809 13.6413 17.8555 13.9667L19.034 15.1452ZM27.0003 20.8337C27.4605 20.8337 27.8336 20.4606 27.8336 20.0004C27.8336 19.5402 27.4605 19.1671 27.0003 19.1671V20.8337ZM19.034 24.8556L13.5896 19.4112L12.411 20.5897L17.8555 26.0341L19.034 24.8556ZM13.5896 20.5897L19.034 15.1452L17.8555 13.9667L12.411 19.4112L13.5896 20.5897ZM13.0003 20.8337H27.0003V19.1671H13.0003V20.8337Z" fill="#130F31"/>
								<path d="M91.5837 0.416992H52.417V39.5837H91.5837V0.416992Z" fill="white"/>
								<path d="M91.5837 0.416992H52.417V39.5837H91.5837V0.416992Z" stroke="#130F31" stroke-width="0.833333"/>
								<path d="M74.1451 13.9667C73.8197 13.6413 73.292 13.6413 72.9666 13.9667C72.6412 14.2921 72.6412 14.8198 72.9666 15.1452L74.1451 13.9667ZM79.0003 20.0004L79.5896 20.5897C79.7458 20.4334 79.8336 20.2214 79.8336 20.0004C79.8336 19.7794 79.7458 19.5674 79.5896 19.4112L79.0003 20.0004ZM72.9666 24.8556C72.6412 25.181 72.6412 25.7087 72.9666 26.0341C73.292 26.3595 73.8197 26.3595 74.1451 26.0341L72.9666 24.8556ZM65.0003 19.1671C64.5401 19.1671 64.167 19.5402 64.167 20.0004C64.167 20.4606 64.5401 20.8337 65.0003 20.8337V19.1671ZM72.9666 15.1452L78.411 20.5897L79.5896 19.4112L74.1451 13.9667L72.9666 15.1452ZM78.411 19.4112L72.9666 24.8556L74.1451 26.0341L79.5896 20.5897L78.411 19.4112ZM79.0003 19.1671H65.0003V20.8337H79.0003V19.1671Z" fill="#130F31"/>
							</g>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_button_background_style" value="<?php echo esc_attr( 'shadow' ); ?>" <?php echo 'shadow' === $showcase_details['wcc_showcase_slide_button_background_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Shadow', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Button Color', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Choose the color or tint of any control buttons in the slider.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="tw-w-[360px] tw-h-[320px] tw-bg-input-grey-50 tw-rounded-md tw-p-2 wcc_showcase-category-list-item">
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'BG Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<span class="tw-p-3 tw-absolute tw-top-[6px] tw-left-[8px] tw-rounded-[50%] wcc_showcase-change-card-style colorpickpreview" <?php echo 'style="background-color:' . esc_attr( $showcase_details['wcc_showcase_slide_button']['background_color'] ) . '"'; ?>></span>
					<input class="wcc-showcase-input-color wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" name="wcc_showcase_slide_button[background_color]" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slide_button']['background_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'TEXT Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<span class="tw-p-3 tw-absolute tw-top-[6px] tw-left-[8px] tw-rounded-[50%] wcc_showcase-change-card-style colorpickpreview" <?php echo 'style="background-color:' . esc_attr( $showcase_details['wcc_showcase_slide_button']['text_color'] ) . '"'; ?>></span>
					<input class="wcc-showcase-input-color wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" name="wcc_showcase_slide_button[text_color]" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slide_button']['text_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Hover Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<span class="tw-p-3 tw-absolute tw-top-[6px] tw-left-[8px] tw-rounded-[50%] wcc_showcase-change-card-style colorpickpreview" <?php echo 'style="background-color:' . esc_attr( $showcase_details['wcc_showcase_slide_button']['hover_color'] ) . '"'; ?>></span>
					<input class="wcc-showcase-input-color wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" name="wcc_showcase_slide_button[hover_color]" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slide_button']['hover_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Hover Text Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<span class="tw-p-3 tw-absolute tw-top-[6px] tw-left-[8px] tw-rounded-[50%] wcc_showcase-change-card-style colorpickpreview" <?php echo 'style="background-color:' . esc_attr( $showcase_details['wcc_showcase_slide_button']['hover_text_color'] ) . '"'; ?>></span>
					<input class="wcc-showcase-input-color wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" name="wcc_showcase_slide_button[hover_text_color]" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slide_button']['hover_text_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row-title"></div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Slide Counters', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Enable or disable pagination elements such as dots to indicate slide position.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_slide_show_counter" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['wcc_showcase_slide_show_counter'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Counters Styles', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Choose the style or design of the pagination indicators in the slider.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="tw-w-[360px] tw-h-[360px] tw-bg-input-grey-50 tw-rounded-md tw-p-2 wcc_showcase-category-list-item">
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-6 tw-w-[336px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="304" height="8" viewBox="0 0 304 8" fill="none">
							<g clip-path="url(#clip0_660_5372)">
								<path d="M188 0H116C113.791 0 112 1.79086 112 4C112 6.20914 113.791 8 116 8H188C190.209 8 192 6.20914 192 4C192 1.79086 190.209 0 188 0Z" fill="#130F31"/>
								<path d="M44 0H4C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8H44C46.2091 8 48 6.20914 48 4C48 1.79086 46.2091 0 44 0Z" fill="#D4D4D4"/>
								<path d="M100 0H60C57.7909 0 56 1.79086 56 4C56 6.20914 57.7909 8 60 8H100C102.209 8 104 6.20914 104 4C104 1.79086 102.209 0 100 0Z" fill="#D4D4D4"/>
								<path d="M244 0H204C201.791 0 200 1.79086 200 4C200 6.20914 201.791 8 204 8H244C246.209 8 248 6.20914 248 4C248 1.79086 246.209 0 244 0Z" fill="#D4D4D4"/>
								<path d="M300 0H260C257.791 0 256 1.79086 256 4C256 6.20914 257.791 8 260 8H300C302.209 8 304 6.20914 304 4C304 1.79086 302.209 0 300 0Z" fill="#D4D4D4"/>
							</g>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_counter_style" value="<?php echo esc_attr( 'dashes' ); ?>" <?php echo 'dashes' === $showcase_details['wcc_showcase_slide_counter_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Dashes', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-6 tw-w-[336px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="92" height="12" viewBox="0 0 92 12" fill="none">
							<g clip-path="url(#clip0_660_5378)">
								<path d="M12 6C12 2.68629 9.31371 0 6 0C2.68629 0 0 2.68629 0 6C0 9.31371 2.68629 12 6 12C9.31371 12 12 9.31371 12 6Z" fill="#D4D4D4"/>
								<path d="M32 6C32 2.68629 29.3137 0 26 0C22.6863 0 20 2.68629 20 6C20 9.31371 22.6863 12 26 12C29.3137 12 32 9.31371 32 6Z" fill="#D4D4D4"/>
								<path d="M52 6C52 2.68629 49.3137 0 46 0C42.6863 0 40 2.68629 40 6C40 9.31371 42.6863 12 46 12C49.3137 12 52 9.31371 52 6Z" fill="#130F31"/>
								<path d="M72 6C72 2.68629 69.3137 0 66 0C62.6863 0 60 2.68629 60 6C60 9.31371 62.6863 12 66 12C69.3137 12 72 9.31371 72 6Z" fill="#D4D4D4"/>
								<path d="M92 6C92 2.68629 89.3137 0 86 0C82.6863 0 80 2.68629 80 6C80 9.31371 82.6863 12 86 12C89.3137 12 92 9.31371 92 6Z" fill="#D4D4D4"/>
							</g>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_counter_style" value="<?php echo esc_attr( 'dots' ); ?>" <?php echo 'dots' === $showcase_details['wcc_showcase_slide_counter_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Dots', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-mt-3">
				<div class="tw-flex tw-flex-col tw-items-center tw-text-center">
					<div class="tw-py-6 tw-w-[336px] tw-bg-white tw-rounded-md">
						<svg xmlns="http://www.w3.org/2000/svg" width="160" height="12" viewBox="0 0 160 12" fill="none">
							<g clip-path="url(#clip0_660_5366)">
								<path d="M12 6C12 2.68629 9.31371 0 6 0C2.68629 0 0 2.68629 0 6C0 9.31371 2.68629 12 6 12C9.31371 12 12 9.31371 12 6Z" fill="#D4D4D4"/>
								<path d="M32 6C32 2.68629 29.3137 0 26 0C22.6863 0 20 2.68629 20 6C20 9.31371 22.6863 12 26 12C29.3137 12 32 9.31371 32 6Z" fill="#D4D4D4"/>
								<path d="M114 0H46C42.6863 0 40 2.68629 40 6C40 9.31371 42.6863 12 46 12H114C117.314 12 120 9.31371 120 6C120 2.68629 117.314 0 114 0Z" fill="#130F31"/>
								<path d="M140 6C140 2.68629 137.314 0 134 0C130.686 0 128 2.68629 128 6C128 9.31371 130.686 12 134 12C137.314 12 140 9.31371 140 6Z" fill="#D4D4D4"/>
								<path d="M160 6C160 2.68629 157.314 0 154 0C150.686 0 148 2.68629 148 6C148 9.31371 150.686 12 154 12C157.314 12 160 9.31371 160 6Z" fill="#D4D4D4"/>
							</g>
						</svg>
					</div>
					<label class="tw-mt-2">
						<input type="radio" name="wcc_showcase_slide_counter_style" value="<?php echo esc_attr( 'dash_with_dots' ); ?>" <?php echo 'dash_with_dots' === $showcase_details['wcc_showcase_slide_counter_style'] ? 'checked' : ''; ?>><?php esc_html_e( 'Dash with Dots', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Counters Color', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Select the color or tint of the pagination indicators in the slider.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<div class="tw-w-[360px] tw-h-[320px] tw-bg-input-grey-50 tw-rounded-md tw-p-2 wcc_showcase-category-list-item">
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'BG Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<span class="tw-p-3 tw-absolute tw-top-[6px] tw-left-[8px] tw-rounded-[50%] wcc_showcase-change-card-style colorpickpreview" <?php echo 'style="background-color:' . esc_attr( $showcase_details['wcc_showcase_slide_counter']['background_color'] ) . '"'; ?>></span>
					<input class="wcc-showcase-input-color wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" name="wcc_showcase_slide_counter[background_color]" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slide_counter']['background_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500 "><?php esc_html_e( 'TEXT Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<span class="tw-p-3 tw-absolute tw-top-[6px] tw-left-[8px] tw-rounded-[50%] wcc_showcase-change-card-style colorpickpreview" <?php echo 'style="background-color:' . esc_attr( $showcase_details['wcc_showcase_slide_counter']['text_color'] ) . '"'; ?>></span>
					<input class="wcc-showcase-input-color wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" name="wcc_showcase_slide_counter[text_color]" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slide_counter']['text_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Hover Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<span class="color-display tw-p-3 tw-absolute tw-top-[6px] tw-left-[8px] tw-rounded-[50%] wcc_showcase-change-card-style colorpickpreview" <?php echo 'style="background-color:' . esc_attr( $showcase_details['wcc_showcase_slide_counter']['hover_color'] ) . '"'; ?>></span>
					<input class="wcc-showcase-input-color wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" name="wcc_showcase_slide_counter[hover_color]" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slide_counter']['hover_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
			<div class="tw-mt-3">
				<h4 class="tw-my-0 !tw-text-text-grey-500"><?php esc_html_e( 'Hover Text Color', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-flex">
					<span class="tw-p-3 tw-absolute tw-top-[6px] tw-left-[8px] tw-rounded-[50%] wcc_showcase-change-card-style colorpickpreview" <?php echo 'style="background-color:' . esc_attr( $showcase_details['wcc_showcase_slide_counter']['hover_text_color'] ) . '"'; ?>></span>
					<input class="wcc-showcase-input-color wcc_showcase-settings-field-border tw-text-sm tw-w-full !tw-pl-9 tw-h-[36px]" type="text" name="wcc_showcase_slide_counter[hover_text_color]" value="<?php echo esc_attr( $showcase_details['wcc_showcase_slide_counter']['hover_text_color'] ); ?>">
					<span class="tw-absolute tw-bg-input-grey-50 tw-py-[8px] tw-px-5 tw-items-center tw-top-[1px] tw-right-[2px] tw-rounded-tr-md tw-rounded-br-md"><?php echo esc_attr( 'HEX' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wcc_showcase-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.6875 5.4022H10.6875C10.5441 4.72426 10.1608 4.11475 9.60266 3.67695C9.04453 3.23916 8.34585 3 7.625 3C6.90415 3 6.20547 3.23916 5.64734 3.67695C5.08921 4.11475 4.70595 4.72426 4.5625 5.4022H2.3125C2.22962 5.4022 2.15013 5.4338 2.09153 5.49004C2.03292 5.54629 2 5.62257 2 5.7021V6.3019C2 6.38144 2.03292 6.45772 2.09153 6.51397C2.15013 6.57021 2.22962 6.6018 2.3125 6.6018H4.5625C4.70595 7.27975 5.08921 7.88926 5.64734 8.32705C6.20547 8.76485 6.90415 9.00401 7.625 9.00401C8.34585 9.00401 9.04453 8.76485 9.60266 8.32705C10.1608 7.88926 10.5441 7.27975 10.6875 6.6018H21.6875C21.7704 6.6018 21.8499 6.57021 21.9085 6.51397C21.9671 6.45772 22 6.38144 22 6.3019V5.7021C22 5.62257 21.9671 5.54629 21.9085 5.49004C21.8499 5.4338 21.7704 5.4022 21.6875 5.4022ZM7.625 7.8014C7.25416 7.8014 6.89165 7.69587 6.58331 7.49815C6.27496 7.30043 6.03464 7.0194 5.89273 6.6906C5.75081 6.36181 5.71368 6.00001 5.78603 5.65096C5.85837 5.30191 6.03695 4.98129 6.29917 4.72964C6.5614 4.47799 6.89549 4.30661 7.25921 4.23718C7.62292 4.16775 7.99992 4.20338 8.34253 4.33958C8.68514 4.47577 8.97798 4.7064 9.18401 5.00231C9.39003 5.29822 9.5 5.64612 9.5 6.002C9.5 6.47923 9.30246 6.93692 8.95083 7.27437C8.59919 7.61182 8.12228 7.8014 7.625 7.8014ZM21.6875 17.3982H13.1875C13.0441 16.7203 12.6608 16.1107 12.1027 15.6729C11.5445 15.2352 10.8458 14.996 10.125 14.996C9.40415 14.996 8.70547 15.2352 8.14734 15.6729C7.58921 16.1107 7.20595 16.7203 7.0625 17.3982H2.3125C2.22962 17.3982 2.15013 17.4298 2.09153 17.486C2.03292 17.5423 2 17.6186 2 17.6981V18.2979C2 18.3774 2.03292 18.4537 2.09153 18.51C2.15013 18.5662 2.22962 18.5978 2.3125 18.5978H7.0625C7.20595 19.2757 7.58921 19.8853 8.14734 20.323C8.70547 20.7608 9.40415 21 10.125 21C10.8458 21 11.5445 20.7608 12.1027 20.323C12.6608 19.8853 13.0441 19.2757 13.1875 18.5978H21.6875C21.7704 18.5978 21.8499 18.5662 21.9085 18.51C21.9671 18.4537 22 18.3774 22 18.2979V17.6981C22 17.6186 21.9671 17.5423 21.9085 17.486C21.8499 17.4298 21.7704 17.3982 21.6875 17.3982ZM10.125 19.7974C9.75416 19.7974 9.39165 19.6919 9.08331 19.4941C8.77496 19.2964 8.53464 19.0154 8.39273 18.6866C8.25081 18.3578 8.21368 17.996 8.28603 17.6469C8.35837 17.2979 8.53695 16.9773 8.79917 16.7256C9.0614 16.474 9.39549 16.3026 9.75921 16.2332C10.1229 16.1637 10.4999 16.1994 10.8425 16.3356C11.1851 16.4718 11.478 16.7024 11.684 16.9983C11.89 17.2942 12 17.6421 12 17.998C12 18.4752 11.8025 18.9329 11.4508 19.2704C11.0992 19.6078 10.6223 19.7974 10.125 19.7974ZM2 11.7001V12.2999C2 12.3794 2.03292 12.4557 2.09153 12.512C2.15013 12.5682 2.22962 12.5998 2.3125 12.5998H13.3125C13.4559 13.2777 13.8392 13.8873 14.3973 14.325C14.9555 14.7628 15.6542 15.002 16.375 15.002C17.0958 15.002 17.7945 14.7628 18.3527 14.325C18.9108 13.8873 19.2941 13.2777 19.4375 12.5998H21.6875C21.7704 12.5998 21.8499 12.5682 21.9085 12.512C21.9671 12.4557 22 12.3794 22 12.2999V11.7001C22 11.6206 21.9671 11.5443 21.9085 11.488C21.8499 11.4318 21.7704 11.4002 21.6875 11.4002H19.4375C19.2941 10.7223 18.9108 10.1127 18.3527 9.67495C17.7945 9.23715 17.0958 8.998 16.375 8.998C15.6542 8.998 14.9555 9.23715 14.3973 9.67495C13.8392 10.1127 13.4559 10.7223 13.3125 11.4002H2.3125C2.22962 11.4002 2.15013 11.4318 2.09153 11.488C2.03292 11.5443 2 11.6206 2 11.7001ZM14.5 12C14.5 11.6441 14.61 11.2962 14.816 11.0003C15.022 10.7044 15.3149 10.4738 15.6575 10.3376C16.0001 10.2014 16.3771 10.1657 16.7408 10.2352C17.1045 10.3046 17.4386 10.476 17.7008 10.7276C17.963 10.9793 18.1416 11.2999 18.214 11.649C18.2863 11.998 18.2492 12.3598 18.1073 12.6886C17.9654 13.0174 17.725 13.2984 17.4167 13.4961C17.1084 13.6939 16.7458 13.7994 16.375 13.7994C15.8777 13.7994 15.4008 13.6098 15.0492 13.2724C14.6975 12.9349 14.5 12.4772 14.5 12Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Others', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Touch Interaction', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Enable or disable the ability for users to navigate slides by swiping on touch-enabled devices.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_slide_touch_interaction" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['wcc_showcase_slide_touch_interaction'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Scroll Interaction', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Control whether users can navigate slides using the mousewheel.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_slide_scroll_interaction" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['wcc_showcase_slide_scroll_interaction'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Draggable Slides', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Enable or disable the ability for users to drag slides using the mouse.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_slide_draggable_slide" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['wcc_showcase_slide_draggable_slide'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>
<div class="wcc_showcase-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wcc_showcase-settings-title"><?php esc_html_e( 'Free Mode', 'wc-category-showcase' ); ?></h3>
		<p class="wcc_showcase-settings-description"><?php esc_html_e( 'Determine if slides should move freely without alignment constraints.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wcc_showcase_slide_free_mode" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer" <?php if ( 'yes' === $showcase_details['wcc_showcase_slide_free_mode'] ) { echo 'checked'; } ?>>
			<div class="wcc_showcase-toggle"></div>
		</label>
	</div>
</div>


