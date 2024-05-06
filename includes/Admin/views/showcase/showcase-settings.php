<?php
/**
 * Shocase settings tab.
 *
 * @package WooCommerceCategoryShowcase
 */

defined( 'ABSPATH' ) || exit;
$wccs_button_style     = 'only_text';
$wccs_show_button_icon = 'yes';
?>
<div class="wcss-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M22.607 15.4393H21.2284C21.1275 14.93 20.9299 14.4452 20.6466 14.0117L21.628 13.0204C21.6645 12.9834 21.6935 12.9396 21.7133 12.8913C21.7331 12.8431 21.7433 12.7914 21.7433 12.7391C21.7433 12.6869 21.7331 12.6352 21.7133 12.5869C21.6935 12.5387 21.6645 12.4948 21.628 12.4579L21.0325 11.8563C20.9959 11.8194 20.9525 11.7901 20.9047 11.7701C20.857 11.7501 20.8058 11.7398 20.7541 11.7398C20.7024 11.7398 20.6512 11.7501 20.6034 11.7701C20.5556 11.7901 20.5122 11.8194 20.4757 11.8563L19.4955 12.8465C19.0664 12.5601 18.5865 12.3604 18.0823 12.2582V10.8661C18.0823 10.7607 18.0409 10.6595 17.967 10.585C17.8932 10.5104 17.7931 10.4685 17.6887 10.4685H16.8985C16.7941 10.4685 16.694 10.5104 16.6201 10.585C16.5463 10.6595 16.5048 10.7607 16.5048 10.8661V12.2588C16.0006 12.3609 15.5208 12.5607 15.0917 12.8471L14.1103 11.8551C14.0738 11.8182 14.0304 11.7889 13.9826 11.7689C13.9348 11.7489 13.8836 11.7386 13.8319 11.7386C13.7802 11.7386 13.729 11.7489 13.6812 11.7689C13.6335 11.7889 13.5901 11.8182 13.5535 11.8551L12.958 12.4567C12.9214 12.4936 12.8924 12.5375 12.8726 12.5857C12.8529 12.634 12.8427 12.6857 12.8427 12.7379C12.8427 12.7902 12.8529 12.8419 12.8726 12.8901C12.8924 12.9384 12.9214 12.9822 12.958 13.0192L13.9394 14.0105C13.6561 14.444 13.4585 14.9288 13.3576 15.4381H11.9778C11.8734 15.4381 11.7733 15.48 11.6995 15.5545C11.6257 15.6291 11.5842 15.7302 11.5842 15.8357V16.631C11.5842 16.7364 11.6257 16.8376 11.6995 16.9122C11.7733 16.9867 11.8734 17.0286 11.9778 17.0286H13.3564C13.4573 17.5379 13.6549 18.0227 13.9382 18.4561L12.9568 19.4493C12.9203 19.4863 12.8912 19.5301 12.8715 19.5784C12.8517 19.6266 12.8415 19.6783 12.8415 19.7306C12.8415 19.7828 12.8517 19.8345 12.8715 19.8828C12.8912 19.931 12.9203 19.9749 12.9568 20.0118L13.5523 20.6134C13.5889 20.6503 13.6323 20.6796 13.6801 20.6996C13.7278 20.7196 13.779 20.7299 13.8307 20.7299C13.8824 20.7299 13.9336 20.7196 13.9814 20.6996C14.0292 20.6796 14.0726 20.6503 14.1091 20.6134L15.0905 19.622C15.5196 19.9082 15.9995 20.1077 16.5036 20.2097V21.6024C16.5036 21.7078 16.5451 21.809 16.6189 21.8835C16.6928 21.9581 16.7929 22 16.8973 22H17.6845C17.7889 22 17.8891 21.9581 17.9629 21.8835C18.0367 21.809 18.0782 21.7078 18.0782 21.6024V20.2109C18.5823 20.1089 19.0622 19.9094 19.4913 19.6232L20.4727 20.6146C20.5092 20.6515 20.5526 20.6808 20.6004 20.7008C20.6482 20.7208 20.6994 20.7311 20.7511 20.7311C20.8028 20.7311 20.854 20.7208 20.9018 20.7008C20.9495 20.6808 20.9929 20.6515 21.0295 20.6146L21.625 20.013C21.6616 19.9761 21.6906 19.9322 21.7104 19.884C21.7301 19.8357 21.7403 19.784 21.7403 19.7318C21.7403 19.6795 21.7301 19.6278 21.7104 19.5796C21.6906 19.5313 21.6616 19.4875 21.625 19.4505L20.646 18.4604C20.9293 18.0269 21.1269 17.5421 21.2278 17.0328H22.6064C22.6581 17.0328 22.7092 17.0225 22.757 17.0026C22.8048 16.9826 22.8482 16.9533 22.8847 16.9164C22.9213 16.8794 22.9503 16.8356 22.97 16.7874C22.9898 16.7391 23 16.6874 23 16.6352V15.8369C23 15.7316 22.9586 15.6305 22.8849 15.556C22.8112 15.4814 22.7113 15.4394 22.607 15.4393ZM17.2921 18.4002C16.8681 18.4002 16.4536 18.2732 16.1011 18.0352C15.7485 17.7973 15.4737 17.459 15.3115 17.0633C15.1492 16.6676 15.1068 16.2321 15.1895 15.8121C15.2722 15.392 15.4764 15.0061 15.7762 14.7032C16.076 14.4003 16.458 14.1941 16.8739 14.1105C17.2897 14.0269 17.7208 14.0698 18.1125 14.2337C18.5042 14.3977 18.839 14.6752 19.0746 15.0314C19.3102 15.3875 19.4359 15.8062 19.4359 16.2345C19.4359 16.5189 19.3805 16.8006 19.2727 17.0633C19.165 17.3261 19.0071 17.5648 18.808 17.7659C18.6089 17.967 18.3726 18.1265 18.1125 18.2354C17.8524 18.3442 17.5736 18.4002 17.2921 18.4002Z" fill="#2270B1"/>
		<path d="M10.5534 18.6408H4.19101V6.60942H20.8651V9.98122C21.2906 10.2303 21.6897 10.5227 22.0561 10.8541V3.60157C22.0561 3.44202 21.9934 3.28901 21.8817 3.1762C21.77 3.06338 21.6186 3 21.4606 3H3.5955C3.43757 3 3.2861 3.06338 3.17442 3.1762C3.06274 3.28901 3 3.44202 3 3.60157V19.2424C3 19.4019 3.06274 19.555 3.17442 19.6678C3.2861 19.7806 3.43757 19.844 3.5955 19.844H11.1018C10.883 19.4607 10.6994 19.058 10.5534 18.6408Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Essentials', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Categories Icon', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Choose to Show/Hide icons to visually represent each category in your showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_show_category_icon5" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Categories Icon', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Choose to Show/Hide icons to visually represent each category in your showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_show_category_icon6" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M21.375 3H2.625C2.45924 3 2.30027 3.06773 2.18306 3.18829C2.06585 3.30885 2 3.47236 2 3.64286V20.3571C2 20.5276 2.06585 20.6912 2.18306 20.8117C2.30027 20.9323 2.45924 21 2.625 21H21.375C21.5408 21 21.6997 20.9323 21.8169 20.8117C21.9342 20.6912 22 20.5276 22 20.3571V3.64286C22 3.47236 21.9342 3.30885 21.8169 3.18829C21.6997 3.06773 21.5408 3 21.375 3ZM8.25 18.4286H4.5V12H8.25V18.4286ZM19.5 18.4286H9.5V15.8571H19.5V18.4286ZM19.5 14.5714H9.5V12H19.5V14.5714ZM19.5 10.7143H4.5V5.57143H19.5V10.7143Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Showcase Styling', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Categories Icon', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Choose to Show/Hide icons to visually represent each category in your showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_show_category_icon4" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M9.71917 17.4482H9.07965V11.4281H10.7864C11.0859 10.9903 11.4307 10.5866 11.8147 10.2241H9.07965V4.20401H13.7994V8.881C14.1803 8.70897 14.5751 8.57099 14.9794 8.46863V4.20401H19.6991V8.881C20.1123 9.06847 20.5073 9.29501 20.8791 9.55766V3.60201C20.8791 3.44234 20.8169 3.28922 20.7063 3.17632C20.5956 3.06343 20.4456 3 20.2891 3H2.58997C2.4335 3 2.28344 3.06343 2.1728 3.17632C2.06216 3.28922 2 3.44234 2 3.60201V18.0502C2 18.2098 2.06216 18.363 2.1728 18.4758C2.28344 18.5887 2.4335 18.6522 2.58997 18.6522H10.1233C9.95471 18.2635 9.81949 17.8607 9.71917 17.4482ZM7.8997 17.4482H3.17994V11.4281H7.8997V17.4482ZM7.8997 10.2241H3.17994V4.20401H7.8997V10.2241Z" fill="#2270B1"/>
		<path d="M16.7493 10.2843C15.7108 10.2843 14.6956 10.5985 13.8321 11.1872C12.9686 11.776 12.2956 12.6128 11.8982 13.5918C11.5008 14.5708 11.3968 15.6481 11.5994 16.6874C11.802 17.7267 12.3021 18.6814 13.0364 19.4307C13.7708 20.18 14.7064 20.6903 15.7249 20.897C16.7434 21.1038 17.7992 20.9977 18.7586 20.5922C19.7181 20.1866 20.5381 19.4999 21.1151 18.6188C21.692 17.7377 22 16.7018 22 15.6421C22 14.2211 21.4468 12.8584 20.4621 11.8536C19.4774 10.8488 18.1418 10.2843 16.7493 10.2843ZM15.3699 18.9002L12.9345 16.4157C12.8792 16.3593 12.8481 16.2827 12.8481 16.2029C12.8481 16.1231 12.8792 16.0465 12.9345 15.9901L13.5457 15.3664C13.601 15.31 13.6761 15.2783 13.7543 15.2783C13.8325 15.2783 13.9075 15.31 13.9628 15.3664L15.574 17.0105L19.1764 13.3346C19.2317 13.2782 19.3067 13.2465 19.385 13.2465C19.4632 13.2465 19.5382 13.2782 19.5935 13.3346L20.2088 13.9625C20.2641 14.019 20.2952 14.0955 20.2952 14.1753C20.2952 14.2552 20.2641 14.3317 20.2088 14.3882L15.7841 18.9032C15.7285 18.9583 15.6539 18.9889 15.5764 18.9883C15.4989 18.9878 15.4247 18.9561 15.3699 18.9002Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Category Showcase', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Categories Icon', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Choose to Show/Hide icons to visually represent each category in your showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_show_category_icon" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Category Title', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Show/Hide category title to be displayed in the showcase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_show_category_product_title" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Category Description', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Show/Hide description or summary for each category to provide additional context or information.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_show_category_description" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Product Quantity', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Display the total number of products within each category.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_show_category_product_quantity" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Sub-categories Product Quantity', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Show/Hide the total number of products within each subcategory.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_show_subcategory_product_quantity" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Custom Text', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Add custom text or message like Price Range, Category Details to further enhance the description or information for each category.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_show_custom_text" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row-title">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
		<path d="M9.71917 17.4482H9.07965V11.4281H10.7864C11.0859 10.9903 11.4307 10.5866 11.8147 10.2241H9.07965V4.20401H13.7994V8.881C14.1803 8.70897 14.5751 8.57099 14.9794 8.46863V4.20401H19.6991V8.881C20.1123 9.06847 20.5073 9.29501 20.8791 9.55766V3.60201C20.8791 3.44234 20.8169 3.28922 20.7063 3.17632C20.5956 3.06343 20.4456 3 20.2891 3H2.58997C2.4335 3 2.28344 3.06343 2.1728 3.17632C2.06216 3.28922 2 3.44234 2 3.60201V18.0502C2 18.2098 2.06216 18.363 2.1728 18.4758C2.28344 18.5887 2.4335 18.6522 2.58997 18.6522H10.1233C9.95471 18.2635 9.81949 17.8607 9.71917 17.4482ZM7.8997 17.4482H3.17994V11.4281H7.8997V17.4482ZM7.8997 10.2241H3.17994V4.20401H7.8997V10.2241Z" fill="#2270B1"/>
		<path d="M16.7493 10.2843C15.7108 10.2843 14.6956 10.5985 13.8321 11.1872C12.9686 11.776 12.2956 12.6128 11.8982 13.5918C11.5008 14.5708 11.3968 15.6481 11.5994 16.6874C11.802 17.7267 12.3021 18.6814 13.0364 19.4307C13.7708 20.18 14.7064 20.6903 15.7249 20.897C16.7434 21.1038 17.7992 20.9977 18.7586 20.5922C19.7181 20.1866 20.5381 19.4999 21.1151 18.6188C21.692 17.7377 22 16.7018 22 15.6421C22 14.2211 21.4468 12.8584 20.4621 11.8536C19.4774 10.8488 18.1418 10.2843 16.7493 10.2843ZM15.3699 18.9002L12.9345 16.4157C12.8792 16.3593 12.8481 16.2827 12.8481 16.2029C12.8481 16.1231 12.8792 16.0465 12.9345 15.9901L13.5457 15.3664C13.601 15.31 13.6761 15.2783 13.7543 15.2783C13.8325 15.2783 13.9075 15.31 13.9628 15.3664L15.574 17.0105L19.1764 13.3346C19.2317 13.2782 19.3067 13.2465 19.385 13.2465C19.4632 13.2465 19.5382 13.2782 19.5935 13.3346L20.2088 13.9625C20.2641 14.019 20.2952 14.0955 20.2952 14.1753C20.2952 14.2552 20.2641 14.3317 20.2088 14.3882L15.7841 18.9032C15.7285 18.9583 15.6539 18.9889 15.5764 18.9883C15.4989 18.9878 15.4247 18.9561 15.3699 18.9002Z" fill="#2270B1"/>
	</svg>
	<h2 class="tw-text-fade-blue-600"><?php esc_html_e( 'Button Style', 'wc-category-showcase' ); ?></h2>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Button', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Show/Hide the button to prompt user action, such as exploring the category or making a purchase.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_show_button" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Button Text', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Enter the text or label to be displayed on the call-to-action button.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center tw-bg-bg-grey-50">
		<input type="text" name="wccs_button_text" min="1" class="wccs-settings-field tw-text-sm" placeholder="type button text..." value="<?php echo esc_attr( 'Shop Now' ); ?>">
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Button Style', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Choose the visual style or design for the call-to-action button.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-bg-input-grey-50 tw-w-[360px] tw-h-[292px]">
		<div class="tw-grid tw-grid-cols-2 tw-gap-x-2 tw-gap-y-6 tw-justify-items-center tw-m-3 tw-pb-1">
			<div class="tw-text-center">
				<div class="tw-w-[160px] tw-h-[68px] tw-bg-white tw-flex tw-rounded-md">
					<span class="tw-w-[108px] tw-text-button-bg-color tw-m-auto tw-py-[9px]"><?php esc_html_e( 'Shop Now', 'wc-category-showcase' ); ?></span>
				</div>
				<div class="tw-mt-2">
					<label for="wccs_button_style_only_text">
						<input type="radio" name="wccs_button_style" id="wccs_button_style_only_text" <?php if ( 'only_text' === $wccs_button_style ) { echo 'checked'; } ?> value="<?php echo esc_attr( 'only_text' ); ?>">
						<?php esc_html_e( 'Only Text', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-text-center">
				<div class="tw-w-[160px] tw-h-[68px] tw-bg-white tw-flex tw-rounded-md">
					<span class="tw-w-[108px] tw-bg-button-bg-color tw-text-white tw-m-auto tw-py-[9px]"><?php esc_html_e( 'Shop Now', 'wc-category-showcase' ); ?></span>
				</div>
				<div class="tw-mt-2">
					<label for="wccs_button_style_sharp_corner">
						<input type="radio" name="wccs_button_style" id="wccs_button_style_sharp_corner" <?php if ( 'sharp_corner' === $wccs_button_style ) { echo 'checked'; } ?> value="<?php echo esc_attr( 'sharp_corner' ); ?>">
						<?php esc_html_e( 'Sharp Corner', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-text-center">
				<div class="tw-w-[160px] tw-h-[68px] tw-bg-white tw-flex tw-rounded-md">
					<span class="tw-w-[108px] tw-bg-button-bg-color tw-text-white tw-m-auto tw-py-[9px] tw-rounded-md"><?php esc_html_e( 'Shop Now', 'wc-category-showcase' ); ?></span>
				</div>
				<div class="tw-mt-2">
					<label for="wccs_button_style_slightly_rounded">
						<input type="radio" name="wccs_button_style" id="wccs_button_style_slightly_rounded" <?php if ( 'slightly_rounded' === $wccs_button_style ) { echo 'checked'; } ?> value="<?php echo esc_attr( 'slightly_rounded' ); ?>">
						<?php esc_html_e( 'Slightly Rounded', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
			<div class="tw-text-center">
				<div class="tw-w-[160px] tw-h-[68px] tw-bg-white tw-flex tw-rounded-md">
					<span class="tw-w-[108px] tw-bg-button-bg-color tw-text-white tw-m-auto tw-py-[9px] tw-rounded-[18px]"><?php esc_html_e( 'Shop Now', 'wc-category-showcase' ); ?></span>
				</div>
				<div class="tw-mt-2">
					<label for="wccs_button_style_rounded">
						<input type="radio" name="wccs_button_style" id="wccs_button_style_rounded" <?php if ( 'rounded' === $wccs_button_style ) { echo 'checked'; } ?> value="<?php echo esc_attr( 'rounded' ); ?>">
						<?php esc_html_e( 'Rounded', 'wc-category-showcase' ); ?>
					</label>
				</div>
			</div>
		</div>
		<div class="tw-m-3 tw-pt-4 tw-border-t tw-border-divider-grey-100 wcss-button-border-top">
			<label for="wccs_show_button_icon">
				<input type="checkbox" name="wccs_show_button_icon" id="wccs_show_button_icon" <?php if ( 'yes' === $wccs_show_button_icon ) { echo 'checked'; } ?> value="<?php echo esc_attr( 'yes' ); ?>">
				<?php esc_html_e( 'Show Arrow Icon', 'wc-category-showcase' ); ?>
			</label>
		</div>
	</div>
</div>
<div class="wcss-settings-row">
	<div class="tw-w-1/3">
		<h3 class="wccs-settings-title"><?php esc_html_e( 'Button Color', 'wc-category-showcase' ); ?></h3>
		<p class="wccs-settings-description"><?php esc_html_e( 'Select the color for the call-to-action button to match your store\'s branding or design scheme.', 'wc-category-showcase' ); ?></p>
	</div>
	<div class="tw-flex tw-items-center">
		<label class="tw-inline-flex tw-cursor-pointer">
			<input type="checkbox" name="wccs_button_color" value="<?php echo esc_attr( 'yes' ); ?>" class="tw-sr-only tw-peer">
			<div class="wccs-toggle"></div>
		</label>
	</div>
</div>

