<?php
/**
 * Get Additional category details.
 *
 * @param int $term_id Category ID.
 * @package WooCommerceCategoryShowcase
 * @var array $category_details The category details.
 */

?>
<div class="wcc_showcase-additional-category-list-item tw-mt-1" data-id="<?php echo esc_attr( $category_details['cat_id'] ); ?>" data-title="<?php echo esc_attr( $category_details['name'] ); ?>">
	<div class="tw-flex tw-justify-between tw-p-2 tw-rounded tw-min-w-[385px] sm:tw-min-w-[340px] tw-border tw-border-solid tw-border-divider-grey-100 wcc_showcase-move">
		<div class="tw-flex tw-gap-1">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
				<path d="M7.6 16.5C8.48366 16.5 9.2 15.7725 9.2 14.875C9.2 13.9775 8.48366 13.25 7.6 13.25C6.71634 13.25 6 13.9775 6 14.875C6 15.7725 6.71634 16.5 7.6 16.5Z" fill="#64748B"/>
				<path d="M7.6 11.625C8.48366 11.625 9.2 10.8975 9.2 10C9.2 9.10254 8.48366 8.375 7.6 8.375C6.71634 8.375 6 9.10254 6 10C6 10.8975 6.71634 11.625 7.6 11.625Z" fill="#64748B"/>
				<path d="M7.6 6.75C8.48366 6.75 9.2 6.02246 9.2 5.125C9.2 4.22754 8.48366 3.5 7.6 3.5C6.71634 3.5 6 4.22754 6 5.125C6 6.02246 6.71634 6.75 7.6 6.75Z" fill="#64748B"/>
				<path d="M12.4 16.5C13.2837 16.5 14 15.7725 14 14.875C14 13.9775 13.2837 13.25 12.4 13.25C11.5163 13.25 10.8 13.9775 10.8 14.875C10.8 15.7725 11.5163 16.5 12.4 16.5Z" fill="#64748B"/>
				<path d="M12.4 11.625C13.2837 11.625 14 10.8975 14 10C14 9.10254 13.2837 8.375 12.4 8.375C11.5163 8.375 10.8 9.10254 10.8 10C10.8 10.8975 11.5163 11.625 12.4 11.625Z" fill="#64748B"/>
				<path d="M12.4 6.75C13.2837 6.75 14 6.02246 14 5.125C14 4.22754 13.2837 3.5 12.4 3.5C11.5163 3.5 10.8 4.22754 10.8 5.125C10.8 6.02246 11.5163 6.75 12.4 6.75Z" fill="#64748B"/>
			</svg>
			<span><?php echo esc_attr( $category_details['name'] ); ?></span>
		</div>
		<div class="tw-flex tw-align-center tw-gap-2">
			<a href="#" class="wcc-showcase-remove-additional-category"><?php esc_html_e( 'Remove', 'wc-category-showcase' ); ?></a>
			<svg class="wcc_showcase-category-details-show tw-text-text-grey-500 hover:tw-text-fade-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
				<path d="M8.19788 14.2882L9.1139 13.373H3.94387V3.943H17.158V6.76351C17.3385 6.83924 17.5025 6.94943 17.6408 7.0879L18.1019 7.54856V3.4715C18.1019 3.34645 18.0522 3.22652 17.9637 3.1381C17.8752 3.04968 17.7551 3 17.63 3H3.47193C3.34677 3 3.22673 3.04968 3.13823 3.1381C3.04972 3.22652 3 3.34645 3 3.4715V13.8445C3 13.9695 3.04972 14.0895 3.13823 14.1779C3.22673 14.2663 3.34677 14.316 3.47193 14.316H8.17617C8.1842 14.3075 8.19127 14.2967 8.19788 14.2882Z"/>
				<path d="M18.8782 9.92397L16.838 7.88568C16.7977 7.84562 16.7499 7.81395 16.6972 7.7925C16.6445 7.77105 16.5882 7.76025 16.5313 7.76073H16.5176C16.3934 7.76389 16.2752 7.81451 16.1873 7.90218L8.99875 15.0888C8.95723 15.1303 8.92673 15.1815 8.91003 15.2378L7.75709 18.6986C7.71698 18.8315 7.91944 18.9994 8.03412 18.9994C8.04133 19.0002 8.04861 19.0002 8.05583 18.9994C8.15352 18.9768 11.0101 18.0008 11.5217 17.847C11.5772 17.8304 11.6277 17.8001 11.6685 17.7589L18.857 10.5718C18.9405 10.4884 18.9909 10.3774 18.9986 10.2597C19.0036 10.1984 18.9954 10.1367 18.9747 10.0788C18.9539 10.0209 18.921 9.96814 18.8782 9.92397ZM8.68161 18.0753L9.6151 15.473L11.2857 17.1379C10.5207 17.3675 9.34232 17.8782 8.68161 18.0753Z"/>
			</svg>
			<a href="#" class="wcc_showcase-category-details-hide tw-hidden"><?php esc_html_e( 'Done', 'wc-category-showcase' ); ?></a>
		</div>
	</div>
	<div class="tw-p-2 wcc_showcase-category-custom-details tw-hidden tw-border tw-border-solid tw-border-t-0 tw-border-divider-grey-100">
		<div>
			<h4 class="tw-text-xs tw-my-0 tw-pl-1"><?php esc_html_e( 'NAME', 'wc-category-showcase' ); ?></h4>
			<input class="tw-text-sm tw-w-full wcc_showcase-settings-field-border tw-mt-1" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][name]" type="text" placeholder="<?php esc_html_e( 'Type title here...', 'wc-category-showcase' ); ?>" value="<?php echo esc_attr( $category_details['custom_name'] ); ?>">
		</div>
		<div class="tw-mt-3">
			<h4 class="tw-text-xs tw-my-0 tw-pl-1"><?php esc_html_e( 'DESCRIPTION', 'wc-category-showcase' ); ?></h4>
			<textarea class="tw-text-sm tw-w-full wcc_showcase-settings-field-border tw-mt-1" rows="4" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][description]" id="wcc_showcase_overwrite_description" placeholder="<?php esc_html_e( 'Type description here...', 'wc-category-showcase' ); ?>"><?php echo esc_attr( $category_details['description'] ); ?></textarea>
		</div>
		<div class="tw-mt-3 wcc_showcase-custom-border tw-pb-4">
			<div class="tw-flex tw-justify-between tw-items-center">
				<h4 class="tw-text-xs tw-my-0 tw-pl-1"><?php esc_html_e( 'ADD ADDITIONAL TEXT', 'wc-category-showcase' ); ?></h4>
				<label class="tw-inline-flex tw-cursor-pointer">
					<input type="checkbox" value="<?php echo esc_attr( 'yes' ); ?>" class="text-sm tw-sr-only tw-peer wcc_showcase-custom-des-show-hide" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][is_custom_text]" <?php echo 'yes' === $category_details['is_custom_text'] ? 'checked' : ''; ?>>
					<div class="wcc_showcase-toggle-small"></div>
				</label>
			</div>
			<textarea class="tw-text-sm tw-w-full wcc_showcase-settings-field-border tw-mt-2 <?php echo 'yes' === $category_details['is_custom_text'] ? '' : 'tw-hidden'; ?>" rows="4" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][custom_text]" id="wcc_showcase_custom_text" placeholder="<?php esc_html_e( 'Price Range: $250 - $1100', 'wc-category-showcase' ); ?>"><?php echo esc_attr( $category_details['custom_text'] ); ?></textarea>
		</div>
		<div class="tw-mt-3 tw-flex tw-justify-around wcc_showcase-custom-border tw-pb-4">
			<div>
				<h4 class="tw-text-xs tw-my-0"><?php esc_html_e( 'CATEGORY IMAGE', 'wc-category-showcase' ); ?></h4>
				<div class="tw-relative tw-mt-2">
					<input class="image_url" type="hidden" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][image_url]" value="<?php echo esc_url( $category_details['image_url'] ); ?>">
					<a href="#" class="wcc_showcase-upload-button wcc_showcase-upload-image-button">
						<?php esc_html_e( 'Add Image', 'wc-category-showcase' ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
							<path d="M8.0001 11.0761L8.0001 6.64537M8.0001 6.64537L9.96933 8.6146M8.0001 6.64537L6.03087 8.6146M4.55394 13.0454C2.92258 13.0454 1.6001 11.7229 1.6001 10.0915C1.6001 8.78334 2.45051 7.67377 3.62867 7.2855C3.58971 7.07808 3.56933 6.86411 3.56933 6.64537C3.56933 4.74211 5.11222 3.19922 7.01548 3.19922C8.61137 3.19922 9.95388 4.284 10.3459 5.75643C10.5374 5.69432 10.7417 5.66076 10.9539 5.66076C12.0415 5.66076 12.9232 6.54241 12.9232 7.62999C12.9232 7.85851 12.8842 8.07794 12.8127 8.28201C13.7406 8.6346 14.4001 9.5322 14.4001 10.5838C14.4001 11.9433 13.298 13.0454 11.9386 13.0454H4.55394Z" stroke="#2270B1" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
					<img class="tw-h-32 tw-w-40 img-upload" src="<?php echo esc_url( $category_details['image_url'] ); ?>" alt="<?php echo esc_attr( $category_details['name'] ); ?>">
				</div>
			</div>
			<div>
				<div class="tw-flex tw-justify-between tw-items-center">
					<h4 class="tw-text-xs tw-my-0"><?php esc_html_e( 'CATEGORY ICON', 'wc-category-showcase' ); ?></h4>
					<label class="tw-inline-flex tw-cursor-pointer">
						<input type="checkbox" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer wcc_showcase-icon-show-hide" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][is_icon]" <?php echo 'yes' === $category_details['is_icon'] ? 'checked' : ''; ?>>
						<div class="wcc_showcase-toggle-small"></div>
					</label>
				</div>
				<div class="tw-relative tw-mt-2 wccs-icon-picker">
					<div id="icon-placeholder-<?php echo esc_attr( $category_details['cat_id'] ); ?>" class="icon-placeholder tw-pt-[10px]">
						<i class="<?php echo ! empty( $category_details['icon_name'] ) ? esc_attr( $category_details['icon_name'] ) : 'fas fa-circle'; ?>"></i>
						<input type="hidden" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][icon_name]" id="wcc_showcase_additional_category_list_item_<?php echo esc_attr( $category_details['cat_id'] ); ?>" value="<?php echo esc_attr( $category_details['icon_name'] ); ?>">
					</div>
					<div class="tw-flex tw-gap-2 tw-items-center tw-pt-[18px]" id="icon-picker-wrap-<?php echo esc_attr( $category_details['cat_id'] ); ?>">
						<span id="icon-none-<?php echo esc_attr( $category_details['cat_id'] ); ?>" class="del icon-none tw-text-accent-red-500 hover:tw-text-red-800 hover:tw-underline"><?php esc_html_e( 'Remove', 'wc-category-showcase' ); ?></span>
						<span class="button button-primary bkit-w-100 icon-picker">
							<span id="select-icon-<?php echo esc_attr( $category_details['cat_id'] ); ?>" class="select-icon">
								<?php esc_html_e( 'Add Icon', 'wc-category-showcase' ); ?>
							</span>
						</span>
					</div>
				</div>

			</div>
		</div>
		<div class="tw-mt-3">
			<div class="tw-flex tw-justify-between tw-items-center">
				<h4 class="tw-text-xs tw-my-0 tw-pl-1"><?php esc_html_e( 'ADD LABEL', 'wc-category-showcase' ); ?></h4>
			</div>
			<input type="text" class="wcc_showcase-label-selection tw-w-full tw-text-sm wcc_showcase-settings-field-border tw-mt-2" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][label_text]" value="<?php echo esc_attr( $category_details['label_text'] ); ?>" placeholder="<?php esc_html_e( '25% off Today', 'wc-category-showcase' ); ?>">
		</div>
		<div class="tw-mt-3">
			<h4 class="tw-text-xs tw-my-0 tw-pl-1"><?php esc_html_e( 'LABEL COLOR', 'wc-category-showcase' ); ?></h4>
			<div class="select-wrapper wcc_showcase-select-category-list-update">
				<div class="select tw-w-[98%] tw-bg-input-grey-50 tw-border-divider-grey-100 tw-rounded-md">
					<div class="select__trigger tw-bg-input-grey-50">
					<span class="tw-flex tw-items-center tw-gap-1 tw-text-text-grey-500">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
							<g clip-path="url(#clip0_321_13967)">
								<path d="M18.6293 0.102975C18.7641 -0.0343249 18.9844 -0.0343249 19.1192 0.102975L20 1H17.75L18.6308 0.102975H18.6293Z" fill="#A36200"/>
								<path d="M0.102975 19.1207C-0.0343249 18.9859 -0.0343249 18.7656 0.102975 18.6308L1 17.75V20L0.102975 19.1192V19.1207Z" fill="#A36200"/>
								<path d="M18.7649 0.100315C18.8293 0.0359338 18.9147 0.00299448 19 0H12.248C12.0668 0 11.8932 0.0718676 11.7659 0.199133L0.199117 11.7653C0.0718619 11.8926 0 12.0663 0 12.2474V19L0.0059885 18.994C0.00898274 18.9087 0.0419195 18.8248 0.106296 18.7589L18.7649 0.100315Z" fill="#FF9B04"/>
							</g>
						</svg>
						<?php esc_html_e( 'Yellow', 'wc-category-showcase' ); ?>
					</span>
						<div class="wcc_showcase-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16" fill="none">
								<path d="M4.66663 10L7.99996 13.3333L11.3333 10" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M4.66663 6.00033L7.99996 2.66699L11.3333 6.00033" stroke="#64748B" stroke-width="0.866667" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
					</div>
					<div class="custom-options tw-bg-white tw-w-[224px] tw-border-divider-grey-100 tw-rounded-md tw-hidden">
						<span class="custom-option wcc-showcase-category-label <?php echo 'yellow' === $category_details['label_color'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'yellow' ); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<g clip-path="url(#clip0_321_13967)">
									<path d="M18.6293 0.102975C18.7641 -0.0343249 18.9844 -0.0343249 19.1192 0.102975L20 1H17.75L18.6308 0.102975H18.6293Z" fill="#A36200"/>
									<path d="M0.102975 19.1207C-0.0343249 18.9859 -0.0343249 18.7656 0.102975 18.6308L1 17.75V20L0.102975 19.1192V19.1207Z" fill="#A36200"/>
									<path d="M18.7649 0.100315C18.8293 0.0359338 18.9147 0.00299448 19 0H12.248C12.0668 0 11.8932 0.0718676 11.7659 0.199133L0.199117 11.7653C0.0718619 11.8926 0 12.0663 0 12.2474V19L0.0059885 18.994C0.00898274 18.9087 0.0419195 18.8248 0.106296 18.7589L18.7649 0.100315Z" fill="#FF9B04"/>
								</g>
							</svg>
							<?php esc_html_e( 'Yellow', 'wc-category-showcase' ); ?>
						</span>
						<span class="custom-option wcc-showcase-category-label <?php echo 'red' === $category_details['label_color'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'red' ); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<g clip-path="url(#clip0_321_13984)">
								<path d="M18.6293 0.102975C18.7641 -0.0343249 18.9844 -0.0343249 19.1192 0.102975L20 1H17.75L18.6308 0.102975H18.6293Z" fill="#911212"/>
								<path d="M0.102975 19.1207C-0.0343249 18.9859 -0.0343249 18.7656 0.102975 18.6308L1 17.75V20L0.102975 19.1192V19.1207Z" fill="#911212"/>
								<path d="M18.7649 0.100315C18.8293 0.0359338 18.9147 0.00299448 19 0H12.248C12.0668 0 11.8932 0.0718676 11.7659 0.199133L0.199117 11.7653C0.0718619 11.8926 0 12.0663 0 12.2474V19L0.0059885 18.994C0.00898274 18.9087 0.0419195 18.8248 0.106296 18.7589L18.7649 0.100315Z" fill="#E42727"/>
								</g>
							</svg>
							<?php esc_html_e( 'Red', 'wc-category-showcase' ); ?>
						</span>
						<span class="custom-option wcc-showcase-category-label <?php echo 'blue' === $category_details['label_color'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'blue' ); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<g clip-path="url(#clip0_321_13995)">
								<path d="M18.6293 0.102975C18.7641 -0.0343249 18.9844 -0.0343249 19.1192 0.102975L20 1H17.75L18.6308 0.102975H18.6293Z" fill="#0E5295"/>
								<path d="M0.102975 19.1207C-0.0343249 18.9859 -0.0343249 18.7656 0.102975 18.6308L1 17.75V20L0.102975 19.1192V19.1207Z" fill="#0E5295"/>
								<path d="M18.7649 0.100315C18.8293 0.0359338 18.9147 0.00299448 19 0H12.248C12.0668 0 11.8932 0.0718676 11.7659 0.199133L0.199117 11.7653C0.0718619 11.8926 0 12.0663 0 12.2474V19L0.0059885 18.994C0.00898274 18.9087 0.0419195 18.8248 0.106296 18.7589L18.7649 0.100315Z" fill="#1370CC"/>
								</g>
							</svg>
							<?php esc_html_e( 'Blue', 'wc-category-showcase' ); ?>
						</span>
						<span class="custom-option wcc-showcase-category-label <?php echo 'purple' === $category_details['label_color'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'purple' ); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<g clip-path="url(#clip0_321_13998)">
								<path d="M18.6293 0.102975C18.7641 -0.0343249 18.9844 -0.0343249 19.1192 0.102975L20 1H17.75L18.6308 0.102975H18.6293Z" fill="#5B0E95"/>
								<path d="M0.102975 19.1207C-0.0343249 18.9859 -0.0343249 18.7656 0.102975 18.6308L1 17.75V20L0.102975 19.1192V19.1207Z" fill="#5B0E95"/>
								<path d="M18.7649 0.100315C18.8293 0.0359338 18.9147 0.00299448 19 0H12.248C12.0668 0 11.8932 0.0718676 11.7659 0.199133L0.199117 11.7653C0.0718619 11.8926 0 12.0663 0 12.2474V19L0.0059885 18.994C0.00898274 18.9087 0.0419195 18.8248 0.106296 18.7589L18.7649 0.100315Z" fill="#7B13CC"/>
								</g>
							</svg>
							<?php esc_html_e( 'Purple', 'wc-category-showcase' ); ?>
						</span>
						<span class="custom-option wcc-showcase-category-label <?php echo 'green' === $category_details['label_color'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'green' ); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<g clip-path="url(#clip0_321_14005)">
								<path d="M18.6293 0.102975C18.7641 -0.0343249 18.9844 -0.0343249 19.1192 0.102975L20 1H17.75L18.6308 0.102975H18.6293Z" fill="#0E9552"/>
								<path d="M0.102975 19.1207C-0.0343249 18.9859 -0.0343249 18.7656 0.102975 18.6308L1 17.75V20L0.102975 19.1192V19.1207Z" fill="#0E9552"/>
								<path d="M18.7649 0.100315C18.8293 0.0359338 18.9147 0.00299448 19 0H12.248C12.0668 0 11.8932 0.0718676 11.7659 0.199133L0.199117 11.7653C0.0718619 11.8926 0 12.0663 0 12.2474V19L0.0059885 18.994C0.00898274 18.9087 0.0419195 18.8248 0.106296 18.7589L18.7649 0.100315Z" fill="#13CC70"/>
								</g>
							</svg>
							<?php esc_html_e( 'Green', 'wc-category-showcase' ); ?>
						</span>
						<span class="custom-option wcc-showcase-category-label <?php echo 'magento' === $category_details['label_color'] ? 'selected' : ''; ?>" data-value="<?php echo esc_attr( 'magento' ); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<g clip-path="url(#clip0_321_14012)">
								<path d="M18.6293 0.102975C18.7641 -0.0343249 18.9844 -0.0343249 19.1192 0.102975L20 1H17.75L18.6308 0.102975H18.6293Z" fill="#950E40"/>
								<path d="M0.102975 19.1207C-0.0343249 18.9859 -0.0343249 18.7656 0.102975 18.6308L1 17.75V20L0.102975 19.1192V19.1207Z" fill="#950E40"/>
								<path d="M18.7649 0.100315C18.8293 0.0359338 18.9147 0.00299448 19 0H12.248C12.0668 0 11.8932 0.0718676 11.7659 0.199133L0.199117 11.7653C0.0718619 11.8926 0 12.0663 0 12.2474V19L0.0059885 18.994C0.00898274 18.9087 0.0419195 18.8248 0.106296 18.7589L18.7649 0.100315Z" fill="#CC1356"/>
								</g>
							</svg>
							<?php esc_html_e( 'Magento', 'wc-category-showcase' ); ?>
						</span>
					</div>
				</div>
				<input type="hidden" class="wcc-showcase-label-color" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][label_color]" value="<?php echo esc_attr( $category_details['label_color'] ); ?>">
			</div>
		</div>
		<input type="hidden" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][position]" class="wcc_showcase_category_position" value="<?php echo esc_attr( $category_details['position'] ); ?>">
		<input type="hidden" name="wcc_showcase_additional_category_list_item[<?php echo esc_attr( $category_details['cat_id'] ); ?>][cat_id]" value="<?php echo esc_attr( $category_details['cat_id'] ); ?>">
	</div>
</div>
