<?php
/**
 * Get category details.
 *
 * @param int $term_id Category ID.
 *
 * @package WooCommerceCategoryShowcase
 */

$category     = get_term_by( 'id', $term_id, 'product_cat' );
$thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
$image        = wp_get_attachment_url( $thumbnail_id );
?>
<div class="wccshowcase-category-list-item">
	<div class="tw-flex tw-justify-between tw-p-2 tw-rounded tw-min-w-[385px] tw-border-b wccshowcase-custom-border wccshowcase-move">
		<div class="tw-flex tw-gap-1">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M7.6 16.5C8.48366 16.5 9.2 15.7725 9.2 14.875C9.2 13.9775 8.48366 13.25 7.6 13.25C6.71634 13.25 6 13.9775 6 14.875C6 15.7725 6.71634 16.5 7.6 16.5Z" fill="#64748B"/>
				<path d="M7.6 11.625C8.48366 11.625 9.2 10.8975 9.2 10C9.2 9.10254 8.48366 8.375 7.6 8.375C6.71634 8.375 6 9.10254 6 10C6 10.8975 6.71634 11.625 7.6 11.625Z" fill="#64748B"/>
				<path d="M7.6 6.75C8.48366 6.75 9.2 6.02246 9.2 5.125C9.2 4.22754 8.48366 3.5 7.6 3.5C6.71634 3.5 6 4.22754 6 5.125C6 6.02246 6.71634 6.75 7.6 6.75Z" fill="#64748B"/>
				<path d="M12.4 16.5C13.2837 16.5 14 15.7725 14 14.875C14 13.9775 13.2837 13.25 12.4 13.25C11.5163 13.25 10.8 13.9775 10.8 14.875C10.8 15.7725 11.5163 16.5 12.4 16.5Z" fill="#64748B"/>
				<path d="M12.4 11.625C13.2837 11.625 14 10.8975 14 10C14 9.10254 13.2837 8.375 12.4 8.375C11.5163 8.375 10.8 9.10254 10.8 10C10.8 10.8975 11.5163 11.625 12.4 11.625Z" fill="#64748B"/>
				<path d="M12.4 6.75C13.2837 6.75 14 6.02246 14 5.125C14 4.22754 13.2837 3.5 12.4 3.5C11.5163 3.5 10.8 4.22754 10.8 5.125C10.8 6.02246 11.5163 6.75 12.4 6.75Z" fill="#64748B"/>
			</svg>
			<span>Category</span>
		</div>
		<div>
			<svg class="wccshowcase-category-details-show tw-text-text-grey-500 hover:tw-text-fade-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
				<path d="M8.19788 14.2882L9.1139 13.373H3.94387V3.943H17.158V6.76351C17.3385 6.83924 17.5025 6.94943 17.6408 7.0879L18.1019 7.54856V3.4715C18.1019 3.34645 18.0522 3.22652 17.9637 3.1381C17.8752 3.04968 17.7551 3 17.63 3H3.47193C3.34677 3 3.22673 3.04968 3.13823 3.1381C3.04972 3.22652 3 3.34645 3 3.4715V13.8445C3 13.9695 3.04972 14.0895 3.13823 14.1779C3.22673 14.2663 3.34677 14.316 3.47193 14.316H8.17617C8.1842 14.3075 8.19127 14.2967 8.19788 14.2882Z"/>
				<path d="M18.8782 9.92397L16.838 7.88568C16.7977 7.84562 16.7499 7.81395 16.6972 7.7925C16.6445 7.77105 16.5882 7.76025 16.5313 7.76073H16.5176C16.3934 7.76389 16.2752 7.81451 16.1873 7.90218L8.99875 15.0888C8.95723 15.1303 8.92673 15.1815 8.91003 15.2378L7.75709 18.6986C7.71698 18.8315 7.91944 18.9994 8.03412 18.9994C8.04133 19.0002 8.04861 19.0002 8.05583 18.9994C8.15352 18.9768 11.0101 18.0008 11.5217 17.847C11.5772 17.8304 11.6277 17.8001 11.6685 17.7589L18.857 10.5718C18.9405 10.4884 18.9909 10.3774 18.9986 10.2597C19.0036 10.1984 18.9954 10.1367 18.9747 10.0788C18.9539 10.0209 18.921 9.96814 18.8782 9.92397ZM8.68161 18.0753L9.6151 15.473L11.2857 17.1379C10.5207 17.3675 9.34232 17.8782 8.68161 18.0753Z"/>
			</svg>
			<a href="#" class="wccshowcase-category-details-hide tw-hidden">Done</a>
		</div>
	</div>
	<div class="tw-p-2 wccshowcase-category-custom-details tw-hidden">
		<div>
			<h4 class="tw-text-xs tw-my-0 tw-pl-1">NAME</h4>
			<input class="tw-text-sm tw-w-full wccshowcase-settings-field-border tw-mt-1" type="text" placeholder="Type here...">
		</div>
		<div class="tw-mt-3">
			<h4 class="tw-text-xs tw-my-0 tw-pl-1">DESCRIPTION</h4>
			<textarea class="tw-text-sm tw-w-full wccshowcase-settings-field-border tw-mt-1" rows="4" name="wccshowcase_overwrite_description" id="wccshowcase_overwrite_description" placeholder="Add custom description"></textarea>
		</div>
		<div class="tw-mt-3 wccshowcase-custom-border tw-pb-4">
			<div class="tw-flex tw-justify-between tw-items-center">
				<h4 class="tw-text-xs tw-my-0 tw-pl-1">ADD CUSTOM TEXT</h4>
				<label class="tw-inline-flex tw-cursor-pointer">
					<input type="checkbox" value="" class="text-sm tw-sr-only tw-peer wccshowcase-custom-des-show-hide" name="wccshowcase_showcase_is_slider">
					<div class="wccshowcase-toggle-small"></div>
				</label>
			</div>
			<textarea class="tw-text-sm tw-w-full tw-hidden wccshowcase-settings-field-border tw-mt-2" rows="4" name="wccshowcase_custom_text" id="wccshowcase_custom_text" placeholder="Add custom description"></textarea>
		</div>
		<div class="tw-mt-3 tw-flex tw-justify-around wccshowcase-custom-border tw-pb-4">
			<div>
				<h4 class="tw-text-xs tw-my-0">CATEGORY IMAGE</h4>
				<div class="tw-relative tw-mt-2">
					<a href="#" class="wccshowcase-upload-button">
						Add Image
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
							<path d="M8.0001 11.0761L8.0001 6.64537M8.0001 6.64537L9.96933 8.6146M8.0001 6.64537L6.03087 8.6146M4.55394 13.0454C2.92258 13.0454 1.6001 11.7229 1.6001 10.0915C1.6001 8.78334 2.45051 7.67377 3.62867 7.2855C3.58971 7.07808 3.56933 6.86411 3.56933 6.64537C3.56933 4.74211 5.11222 3.19922 7.01548 3.19922C8.61137 3.19922 9.95388 4.284 10.3459 5.75643C10.5374 5.69432 10.7417 5.66076 10.9539 5.66076C12.0415 5.66076 12.9232 6.54241 12.9232 7.62999C12.9232 7.85851 12.8842 8.07794 12.8127 8.28201C13.7406 8.6346 14.4001 9.5322 14.4001 10.5838C14.4001 11.9433 13.298 13.0454 11.9386 13.0454H4.55394Z" stroke="#2270B1" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
					<img class="tw-h-32 tw-w-40" src="<?php echo esc_url( WC_CATEGORY_SHOWCASE_ASSETS_URL . '/images/placeholder-image.png' ); ?>" alt="">
				</div>
			</div>
			<div>
				<div class="tw-flex tw-justify-between tw-items-center">
					<h4 class="tw-text-xs tw-my-0">CATEGORY ICON</h4>
					<label class="tw-inline-flex tw-cursor-pointer">
						<input type="checkbox" value="" class="tw-sr-only tw-peer wccshowcase-icon-show-hide" name="wccshowcase_showcase_is_slider">
						<div class="wccshowcase-toggle-small"></div>
					</label>
				</div>
				<div class="tw-relative tw-mt-2">
					<a href="#" class="wccshowcase-upload-button wccshowcase-icon-selection tw-hidden" disabled="disabled">
						Add Icon
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
							<path d="M8.0001 11.0761L8.0001 6.64537M8.0001 6.64537L9.96933 8.6146M8.0001 6.64537L6.03087 8.6146M4.55394 13.0454C2.92258 13.0454 1.6001 11.7229 1.6001 10.0915C1.6001 8.78334 2.45051 7.67377 3.62867 7.2855C3.58971 7.07808 3.56933 6.86411 3.56933 6.64537C3.56933 4.74211 5.11222 3.19922 7.01548 3.19922C8.61137 3.19922 9.95388 4.284 10.3459 5.75643C10.5374 5.69432 10.7417 5.66076 10.9539 5.66076C12.0415 5.66076 12.9232 6.54241 12.9232 7.62999C12.9232 7.85851 12.8842 8.07794 12.8127 8.28201C13.7406 8.6346 14.4001 9.5322 14.4001 10.5838C14.4001 11.9433 13.298 13.0454 11.9386 13.0454H4.55394Z" stroke="#2270B1" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
					<img class="tw-h-32 tw-w-40" src="<?php echo esc_url( WC_CATEGORY_SHOWCASE_ASSETS_URL . '/images/placeholder-icon.png' ); ?>" alt="">
				</div>
			</div>
		</div>
		<div class="tw-mt-3">
			<div class="tw-flex tw-justify-between tw-items-center">
				<h4 class="tw-text-xs tw-my-0 tw-pl-1">ADD LABEL</h4>
				<label class="tw-inline-flex tw-cursor-pointer">
					<input type="checkbox" value="" class="tw-sr-only tw-peer wccshowcase-label-show-hide" name="wccshowcase_showcase_is_slider">
					<div class="wccshowcase-toggle-small"></div>
				</label>
			</div>
			<input class="wccshowcase-label-selection tw-hidden tw-w-full tw-text-sm wccshowcase-settings-field-border tw-mt-2 wccshowcase-label-text" type="text" placeholder="Type here...">
			<div class="wccshowcase-label-selection tw-hidden tw-flex tw-flex-row tw-justify-between">
				<p class="tw-text-text-light-grey-500 tw-m-0">Maximum  10 Letters!</p>
				<p class="tw-text-text-light-grey-500 tw-m-0 wccshowcase-label-text-count-show"><span>0</span>/10</p>
			</div>
		</div>
		<div class="tw-mt-3 wccshowcase-label-selection tw-hidden">
			<h4 class="tw-text-xs tw-my-0 tw-pl-1">LABEL COLOR</h4>
			<select name="wccshowcase_label_color" id="wccshowcase_label_color" class="tw-w-full wccshowcase-settings-field-border tw-mt-1">
				<option value="yellow">Yellow</option>
				<option value="red">Red</option>
				<option value="green">Green</option>
			</select>
		</div>
		<input type="hidden" name="wccshowcase_category_position[]" class="wccshowcase_category_position" value="<?php echo esc_attr( 0 ); ?>">
	</div>
</div>
