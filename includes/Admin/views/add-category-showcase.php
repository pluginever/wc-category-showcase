<?php
/**
 * Add category showcase view.
 *
 * @package WooCommerceCategoryShowcase
 */

defined('ABSPATH') || exit;
?>
<div class="wrap bkit-wrap">
	<h1 class="wp-heading-inline text-center">
		<?php esc_html_e('Add Category Showcase', 'wc-category-showcase'); ?>
		<a href="<?php echo esc_attr(remove_query_arg('add')); ?>" class="page-title-action"
		   title="<?php esc_attr_e('Go back', 'wc-category-showcase'); ?>">
			<span class="dashicons dashicons-undo"></span>
		</a>
	</h1>

	<form method="post" action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
		<span data-wp-text="name"></span>
		<div class="bkit-poststuff">
			<div class="column-1">
				<div class="tw-mx-auto">
					<div class="w-full">
						<input type="text" class="tw-w-full" placeholder="Add title">
					</div>
				</div>
				<div class="tw-mx-auto tw-mt-4 tw-hidden">
					<div class="tw-w-full p-2 tw-bg-white tw-rounded-md">
						<div>
							<h2>Preview Slider</h2>
						</div>
						<div class="tw-carousel tw-w-full tw-mt-4">
							<div id="slide1" class="tw-carousel-item tw-relative tw-w-full">
								<img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" class="w-full" />
								<div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
									<a href="#slide4" class="btn btn-circle">❮</a>
									<a href="#slide2" class="btn btn-circle">❯</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tw-mx-auto tw-mt-4">
					<!--Tabs list-->
					<div class="tw-p-2 tw-bg-white tw-rounded-md">
						<div class="tw-hidden">
							<label for="tabs" class="tw-sr-only">Select a tab</label>
							<select name="tabs" class="tw-block tw-w-full tw-rounded-md tw-border-gray-300 tw-focus:border-indigo-500 tw-focus:ring-indigo-500">
								<option selected>General</option>
								<option>Display</option>
								<option>Thumbnail</option>
								<option>Slider</option>
								<option>Typography</option>
							</select>
						</div>
						<div class="tw-w-full tw-sm:block">
							<nav id="tabs" class="tw-flex tw-space-x-4 " aria-label="Tabs">
								<!-- Current: "bg-indigo-100 text-indigo-700", Default: "text-gray-500 hover:text-gray-700" -->
								<a href="#first"
								   class="tw-no-underline tw-bg-indigo-100 tw-text-indigo-700 tw-hover:text-gray-700 tw-rounded-md tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-flex tw-justify-center tw-flex-auto tw-gap-1"
								   aria-current="page">
									<svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
										 viewBox="0 0 19 18" fill="currentColor" class="tw-text-indigo-700">
										<g clip-path="url(#clip0_156_445)">
											<path
												d="M5.7002 17H2.2002C2.06759 17 1.94041 16.9473 1.84664 16.8536C1.75287 16.7598 1.7002 16.6326 1.7002 16.5V1.5C1.7002 1.36739 1.75287 1.24021 1.84664 1.14645C1.94041 1.05268 2.06759 1 2.2002 1H5.7002V17ZM9.4102 15.4685C9.0817 15.3312 8.80108 15.1 8.6036 14.8037C8.40611 14.5075 8.30056 14.1595 8.3002 13.8035V13.1965C8.30049 12.8405 8.40602 12.4925 8.60351 12.1962C8.80101 11.9 9.08166 11.6687 9.4102 11.5315C9.27187 11.2011 9.23486 10.8371 9.30385 10.4856C9.37285 10.1341 9.54474 9.81108 9.7977 9.5575L10.2567 9.098C10.4239 8.92988 10.6227 8.7966 10.8417 8.70588C11.0608 8.61516 11.2956 8.56881 11.5327 8.5695C11.5897 8.5695 11.6442 8.581 11.6997 8.586V1H7.7002V17H9.4732C9.35152 16.7648 9.28282 16.5058 9.27194 16.2412C9.26105 15.9767 9.30825 15.7129 9.4102 15.4685ZM13.8967 7.6H14.5037C14.8596 7.60042 15.2074 7.70594 15.5035 7.90333C15.7997 8.10072 16.0309 8.38117 16.1682 8.7095C16.4126 8.60602 16.6772 8.55876 16.9424 8.57122C17.2075 8.58369 17.4665 8.65555 17.7002 8.7815V1.5C17.7002 1.36739 17.6475 1.24021 17.5537 1.14645C17.46 1.05268 17.3328 1 17.2002 1H13.7002V7.63C13.7651 7.6162 13.8307 7.60618 13.8967 7.6Z"/>
											<path
												d="M18.2967 12.893H17.2342C17.156 12.5042 17.0031 12.1342 16.7842 11.8035L17.5407 11.047C17.5975 10.9901 17.6295 10.9129 17.6295 10.8325C17.6295 10.7521 17.5975 10.6749 17.5407 10.618L17.0807 10.158C17.0238 10.1011 16.9466 10.0692 16.8662 10.0692C16.7858 10.0692 16.7086 10.1011 16.6517 10.158L15.8962 10.915C15.5656 10.6961 15.1958 10.5433 14.8072 10.465V9.4035C14.8072 9.32301 14.7752 9.24581 14.7183 9.18889C14.6614 9.13198 14.5842 9.1 14.5037 9.1H13.8967C13.8162 9.1 13.739 9.13198 13.6821 9.18889C13.6252 9.24581 13.5932 9.32301 13.5932 9.4035V10.466C13.2046 10.5443 12.8348 10.6971 12.5042 10.916L11.7477 10.1595C11.6908 10.1026 11.6136 10.0707 11.5332 10.0707C11.4528 10.0707 11.3756 10.1026 11.3187 10.1595L10.8587 10.6195C10.8018 10.6764 10.7699 10.7536 10.7699 10.834C10.7699 10.9144 10.8018 10.9916 10.8587 11.0485L11.6152 11.805C11.3962 12.1357 11.2434 12.5057 11.1652 12.8945H10.1037C10.0232 12.8945 9.94601 12.9265 9.88909 12.9834C9.83217 13.0403 9.8002 13.1175 9.8002 13.198V13.805C9.8002 13.8855 9.83217 13.9627 9.88909 14.0196C9.94601 14.0765 10.0232 14.1085 10.1037 14.1085H11.1662C11.2444 14.4973 11.3973 14.8673 11.6162 15.198L10.8597 15.9545C10.8028 16.0114 10.7709 16.0886 10.7709 16.169C10.7709 16.2494 10.8028 16.3266 10.8597 16.3835L11.3197 16.8435C11.3766 16.9004 11.4538 16.9323 11.5342 16.9323C11.6146 16.9323 11.6918 16.9004 11.7487 16.8435L12.5052 16.087C12.8358 16.3059 13.2056 16.4587 13.5942 16.537V17.5995C13.5942 17.68 13.6262 17.7572 13.6831 17.8141C13.74 17.871 13.8172 17.903 13.8977 17.903H14.5047C14.5852 17.903 14.6624 17.871 14.7193 17.8141C14.7762 17.7572 14.8082 17.68 14.8082 17.5995V16.534C15.1968 16.4557 15.5666 16.3029 15.8972 16.084L16.6537 16.8405C16.7106 16.8974 16.7878 16.9293 16.8682 16.9293C16.9486 16.9293 17.0258 16.8974 17.0827 16.8405L17.5427 16.3805C17.5995 16.3236 17.6315 16.2464 17.6315 16.166C17.6315 16.0856 17.5995 16.0084 17.5427 15.9515L16.7852 15.196C17.0041 14.8653 17.157 14.4953 17.2352 14.1065H18.2977C18.3782 14.1065 18.4554 14.0745 18.5123 14.0176C18.5692 13.9607 18.6012 13.8835 18.6012 13.803V13.1965C18.6012 13.116 18.5692 13.0388 18.5123 12.9819C18.4554 12.925 18.3772 12.893 18.2967 12.893ZM14.2002 15.25C13.8541 15.25 13.5157 15.1474 13.2279 14.9551C12.9402 14.7628 12.7159 14.4895 12.5834 14.1697C12.451 13.8499 12.4163 13.4981 12.4838 13.1586C12.5513 12.8191 12.718 12.5073 12.9628 12.2626C13.2075 12.0178 13.5193 11.8511 13.8588 11.7836C14.1983 11.7161 14.5501 11.7508 14.8699 11.8832C15.1897 12.0157 15.463 12.24 15.6553 12.5278C15.8476 12.8155 15.9502 13.1539 15.9502 13.5C15.9502 13.9641 15.7658 14.4092 15.4376 14.7374C15.1094 15.0656 14.6643 15.25 14.2002 15.25Z"/>
										</g>
									</svg>
									General
								</a>
								<a href="#second"
								   class="tw-no-underline tw-text-gray-500 tw-hover:text-gray-700 tw-rounded-md tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-flex tw-justify-center tw-gap-1 tw-flex-auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
										 viewBox="0 0 19 18" fill="currentColor" class="tw-text-indigo-700">
										<g clip-path="url(#clip0_156_445)">
											<path
												d="M5.7002 17H2.2002C2.06759 17 1.94041 16.9473 1.84664 16.8536C1.75287 16.7598 1.7002 16.6326 1.7002 16.5V1.5C1.7002 1.36739 1.75287 1.24021 1.84664 1.14645C1.94041 1.05268 2.06759 1 2.2002 1H5.7002V17ZM9.4102 15.4685C9.0817 15.3312 8.80108 15.1 8.6036 14.8037C8.40611 14.5075 8.30056 14.1595 8.3002 13.8035V13.1965C8.30049 12.8405 8.40602 12.4925 8.60351 12.1962C8.80101 11.9 9.08166 11.6687 9.4102 11.5315C9.27187 11.2011 9.23486 10.8371 9.30385 10.4856C9.37285 10.1341 9.54474 9.81108 9.7977 9.5575L10.2567 9.098C10.4239 8.92988 10.6227 8.7966 10.8417 8.70588C11.0608 8.61516 11.2956 8.56881 11.5327 8.5695C11.5897 8.5695 11.6442 8.581 11.6997 8.586V1H7.7002V17H9.4732C9.35152 16.7648 9.28282 16.5058 9.27194 16.2412C9.26105 15.9767 9.30825 15.7129 9.4102 15.4685ZM13.8967 7.6H14.5037C14.8596 7.60042 15.2074 7.70594 15.5035 7.90333C15.7997 8.10072 16.0309 8.38117 16.1682 8.7095C16.4126 8.60602 16.6772 8.55876 16.9424 8.57122C17.2075 8.58369 17.4665 8.65555 17.7002 8.7815V1.5C17.7002 1.36739 17.6475 1.24021 17.5537 1.14645C17.46 1.05268 17.3328 1 17.2002 1H13.7002V7.63C13.7651 7.6162 13.8307 7.60618 13.8967 7.6Z"/>
											<path
												d="M18.2967 12.893H17.2342C17.156 12.5042 17.0031 12.1342 16.7842 11.8035L17.5407 11.047C17.5975 10.9901 17.6295 10.9129 17.6295 10.8325C17.6295 10.7521 17.5975 10.6749 17.5407 10.618L17.0807 10.158C17.0238 10.1011 16.9466 10.0692 16.8662 10.0692C16.7858 10.0692 16.7086 10.1011 16.6517 10.158L15.8962 10.915C15.5656 10.6961 15.1958 10.5433 14.8072 10.465V9.4035C14.8072 9.32301 14.7752 9.24581 14.7183 9.18889C14.6614 9.13198 14.5842 9.1 14.5037 9.1H13.8967C13.8162 9.1 13.739 9.13198 13.6821 9.18889C13.6252 9.24581 13.5932 9.32301 13.5932 9.4035V10.466C13.2046 10.5443 12.8348 10.6971 12.5042 10.916L11.7477 10.1595C11.6908 10.1026 11.6136 10.0707 11.5332 10.0707C11.4528 10.0707 11.3756 10.1026 11.3187 10.1595L10.8587 10.6195C10.8018 10.6764 10.7699 10.7536 10.7699 10.834C10.7699 10.9144 10.8018 10.9916 10.8587 11.0485L11.6152 11.805C11.3962 12.1357 11.2434 12.5057 11.1652 12.8945H10.1037C10.0232 12.8945 9.94601 12.9265 9.88909 12.9834C9.83217 13.0403 9.8002 13.1175 9.8002 13.198V13.805C9.8002 13.8855 9.83217 13.9627 9.88909 14.0196C9.94601 14.0765 10.0232 14.1085 10.1037 14.1085H11.1662C11.2444 14.4973 11.3973 14.8673 11.6162 15.198L10.8597 15.9545C10.8028 16.0114 10.7709 16.0886 10.7709 16.169C10.7709 16.2494 10.8028 16.3266 10.8597 16.3835L11.3197 16.8435C11.3766 16.9004 11.4538 16.9323 11.5342 16.9323C11.6146 16.9323 11.6918 16.9004 11.7487 16.8435L12.5052 16.087C12.8358 16.3059 13.2056 16.4587 13.5942 16.537V17.5995C13.5942 17.68 13.6262 17.7572 13.6831 17.8141C13.74 17.871 13.8172 17.903 13.8977 17.903H14.5047C14.5852 17.903 14.6624 17.871 14.7193 17.8141C14.7762 17.7572 14.8082 17.68 14.8082 17.5995V16.534C15.1968 16.4557 15.5666 16.3029 15.8972 16.084L16.6537 16.8405C16.7106 16.8974 16.7878 16.9293 16.8682 16.9293C16.9486 16.9293 17.0258 16.8974 17.0827 16.8405L17.5427 16.3805C17.5995 16.3236 17.6315 16.2464 17.6315 16.166C17.6315 16.0856 17.5995 16.0084 17.5427 15.9515L16.7852 15.196C17.0041 14.8653 17.157 14.4953 17.2352 14.1065H18.2977C18.3782 14.1065 18.4554 14.0745 18.5123 14.0176C18.5692 13.9607 18.6012 13.8835 18.6012 13.803V13.1965C18.6012 13.116 18.5692 13.0388 18.5123 12.9819C18.4554 12.925 18.3772 12.893 18.2967 12.893ZM14.2002 15.25C13.8541 15.25 13.5157 15.1474 13.2279 14.9551C12.9402 14.7628 12.7159 14.4895 12.5834 14.1697C12.451 13.8499 12.4163 13.4981 12.4838 13.1586C12.5513 12.8191 12.718 12.5073 12.9628 12.2626C13.2075 12.0178 13.5193 11.8511 13.8588 11.7836C14.1983 11.7161 14.5501 11.7508 14.8699 11.8832C15.1897 12.0157 15.463 12.24 15.6553 12.5278C15.8476 12.8155 15.9502 13.1539 15.9502 13.5C15.9502 13.9641 15.7658 14.4092 15.4376 14.7374C15.1094 15.0656 14.6643 15.25 14.2002 15.25Z"/>
										</g>
									</svg>
									Display
								</a>
								<a href="#third"
								   class="tw-no-underline tw-text-gray-500 tw-rounded-md tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-flex tw-justify-center tw-gap-1 tw-flex-auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
										 viewBox="0 0 19 18" fill="currentColor" class="tw-text-indigo-700">
										<g clip-path="url(#clip0_156_445)">
											<path
												d="M5.7002 17H2.2002C2.06759 17 1.94041 16.9473 1.84664 16.8536C1.75287 16.7598 1.7002 16.6326 1.7002 16.5V1.5C1.7002 1.36739 1.75287 1.24021 1.84664 1.14645C1.94041 1.05268 2.06759 1 2.2002 1H5.7002V17ZM9.4102 15.4685C9.0817 15.3312 8.80108 15.1 8.6036 14.8037C8.40611 14.5075 8.30056 14.1595 8.3002 13.8035V13.1965C8.30049 12.8405 8.40602 12.4925 8.60351 12.1962C8.80101 11.9 9.08166 11.6687 9.4102 11.5315C9.27187 11.2011 9.23486 10.8371 9.30385 10.4856C9.37285 10.1341 9.54474 9.81108 9.7977 9.5575L10.2567 9.098C10.4239 8.92988 10.6227 8.7966 10.8417 8.70588C11.0608 8.61516 11.2956 8.56881 11.5327 8.5695C11.5897 8.5695 11.6442 8.581 11.6997 8.586V1H7.7002V17H9.4732C9.35152 16.7648 9.28282 16.5058 9.27194 16.2412C9.26105 15.9767 9.30825 15.7129 9.4102 15.4685ZM13.8967 7.6H14.5037C14.8596 7.60042 15.2074 7.70594 15.5035 7.90333C15.7997 8.10072 16.0309 8.38117 16.1682 8.7095C16.4126 8.60602 16.6772 8.55876 16.9424 8.57122C17.2075 8.58369 17.4665 8.65555 17.7002 8.7815V1.5C17.7002 1.36739 17.6475 1.24021 17.5537 1.14645C17.46 1.05268 17.3328 1 17.2002 1H13.7002V7.63C13.7651 7.6162 13.8307 7.60618 13.8967 7.6Z"/>
											<path
												d="M18.2967 12.893H17.2342C17.156 12.5042 17.0031 12.1342 16.7842 11.8035L17.5407 11.047C17.5975 10.9901 17.6295 10.9129 17.6295 10.8325C17.6295 10.7521 17.5975 10.6749 17.5407 10.618L17.0807 10.158C17.0238 10.1011 16.9466 10.0692 16.8662 10.0692C16.7858 10.0692 16.7086 10.1011 16.6517 10.158L15.8962 10.915C15.5656 10.6961 15.1958 10.5433 14.8072 10.465V9.4035C14.8072 9.32301 14.7752 9.24581 14.7183 9.18889C14.6614 9.13198 14.5842 9.1 14.5037 9.1H13.8967C13.8162 9.1 13.739 9.13198 13.6821 9.18889C13.6252 9.24581 13.5932 9.32301 13.5932 9.4035V10.466C13.2046 10.5443 12.8348 10.6971 12.5042 10.916L11.7477 10.1595C11.6908 10.1026 11.6136 10.0707 11.5332 10.0707C11.4528 10.0707 11.3756 10.1026 11.3187 10.1595L10.8587 10.6195C10.8018 10.6764 10.7699 10.7536 10.7699 10.834C10.7699 10.9144 10.8018 10.9916 10.8587 11.0485L11.6152 11.805C11.3962 12.1357 11.2434 12.5057 11.1652 12.8945H10.1037C10.0232 12.8945 9.94601 12.9265 9.88909 12.9834C9.83217 13.0403 9.8002 13.1175 9.8002 13.198V13.805C9.8002 13.8855 9.83217 13.9627 9.88909 14.0196C9.94601 14.0765 10.0232 14.1085 10.1037 14.1085H11.1662C11.2444 14.4973 11.3973 14.8673 11.6162 15.198L10.8597 15.9545C10.8028 16.0114 10.7709 16.0886 10.7709 16.169C10.7709 16.2494 10.8028 16.3266 10.8597 16.3835L11.3197 16.8435C11.3766 16.9004 11.4538 16.9323 11.5342 16.9323C11.6146 16.9323 11.6918 16.9004 11.7487 16.8435L12.5052 16.087C12.8358 16.3059 13.2056 16.4587 13.5942 16.537V17.5995C13.5942 17.68 13.6262 17.7572 13.6831 17.8141C13.74 17.871 13.8172 17.903 13.8977 17.903H14.5047C14.5852 17.903 14.6624 17.871 14.7193 17.8141C14.7762 17.7572 14.8082 17.68 14.8082 17.5995V16.534C15.1968 16.4557 15.5666 16.3029 15.8972 16.084L16.6537 16.8405C16.7106 16.8974 16.7878 16.9293 16.8682 16.9293C16.9486 16.9293 17.0258 16.8974 17.0827 16.8405L17.5427 16.3805C17.5995 16.3236 17.6315 16.2464 17.6315 16.166C17.6315 16.0856 17.5995 16.0084 17.5427 15.9515L16.7852 15.196C17.0041 14.8653 17.157 14.4953 17.2352 14.1065H18.2977C18.3782 14.1065 18.4554 14.0745 18.5123 14.0176C18.5692 13.9607 18.6012 13.8835 18.6012 13.803V13.1965C18.6012 13.116 18.5692 13.0388 18.5123 12.9819C18.4554 12.925 18.3772 12.893 18.2967 12.893ZM14.2002 15.25C13.8541 15.25 13.5157 15.1474 13.2279 14.9551C12.9402 14.7628 12.7159 14.4895 12.5834 14.1697C12.451 13.8499 12.4163 13.4981 12.4838 13.1586C12.5513 12.8191 12.718 12.5073 12.9628 12.2626C13.2075 12.0178 13.5193 11.8511 13.8588 11.7836C14.1983 11.7161 14.5501 11.7508 14.8699 11.8832C15.1897 12.0157 15.463 12.24 15.6553 12.5278C15.8476 12.8155 15.9502 13.1539 15.9502 13.5C15.9502 13.9641 15.7658 14.4092 15.4376 14.7374C15.1094 15.0656 14.6643 15.25 14.2002 15.25Z"/>
										</g>
									</svg>
									Thumbnail
								</a>
								<a href="#fourth"
								   class="tw-no-underline tw-text-gray-500 tw-hover:text-gray-700 tw-rounded-md tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-flex tw-justify-center tw-gap-1 tw-flex-auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
										 viewBox="0 0 19 18" fill="currentColor" class="text-indigo-700">
										<g clip-path="url(#clip0_156_445)">
											<path
												d="M5.7002 17H2.2002C2.06759 17 1.94041 16.9473 1.84664 16.8536C1.75287 16.7598 1.7002 16.6326 1.7002 16.5V1.5C1.7002 1.36739 1.75287 1.24021 1.84664 1.14645C1.94041 1.05268 2.06759 1 2.2002 1H5.7002V17ZM9.4102 15.4685C9.0817 15.3312 8.80108 15.1 8.6036 14.8037C8.40611 14.5075 8.30056 14.1595 8.3002 13.8035V13.1965C8.30049 12.8405 8.40602 12.4925 8.60351 12.1962C8.80101 11.9 9.08166 11.6687 9.4102 11.5315C9.27187 11.2011 9.23486 10.8371 9.30385 10.4856C9.37285 10.1341 9.54474 9.81108 9.7977 9.5575L10.2567 9.098C10.4239 8.92988 10.6227 8.7966 10.8417 8.70588C11.0608 8.61516 11.2956 8.56881 11.5327 8.5695C11.5897 8.5695 11.6442 8.581 11.6997 8.586V1H7.7002V17H9.4732C9.35152 16.7648 9.28282 16.5058 9.27194 16.2412C9.26105 15.9767 9.30825 15.7129 9.4102 15.4685ZM13.8967 7.6H14.5037C14.8596 7.60042 15.2074 7.70594 15.5035 7.90333C15.7997 8.10072 16.0309 8.38117 16.1682 8.7095C16.4126 8.60602 16.6772 8.55876 16.9424 8.57122C17.2075 8.58369 17.4665 8.65555 17.7002 8.7815V1.5C17.7002 1.36739 17.6475 1.24021 17.5537 1.14645C17.46 1.05268 17.3328 1 17.2002 1H13.7002V7.63C13.7651 7.6162 13.8307 7.60618 13.8967 7.6Z"/>
											<path
												d="M18.2967 12.893H17.2342C17.156 12.5042 17.0031 12.1342 16.7842 11.8035L17.5407 11.047C17.5975 10.9901 17.6295 10.9129 17.6295 10.8325C17.6295 10.7521 17.5975 10.6749 17.5407 10.618L17.0807 10.158C17.0238 10.1011 16.9466 10.0692 16.8662 10.0692C16.7858 10.0692 16.7086 10.1011 16.6517 10.158L15.8962 10.915C15.5656 10.6961 15.1958 10.5433 14.8072 10.465V9.4035C14.8072 9.32301 14.7752 9.24581 14.7183 9.18889C14.6614 9.13198 14.5842 9.1 14.5037 9.1H13.8967C13.8162 9.1 13.739 9.13198 13.6821 9.18889C13.6252 9.24581 13.5932 9.32301 13.5932 9.4035V10.466C13.2046 10.5443 12.8348 10.6971 12.5042 10.916L11.7477 10.1595C11.6908 10.1026 11.6136 10.0707 11.5332 10.0707C11.4528 10.0707 11.3756 10.1026 11.3187 10.1595L10.8587 10.6195C10.8018 10.6764 10.7699 10.7536 10.7699 10.834C10.7699 10.9144 10.8018 10.9916 10.8587 11.0485L11.6152 11.805C11.3962 12.1357 11.2434 12.5057 11.1652 12.8945H10.1037C10.0232 12.8945 9.94601 12.9265 9.88909 12.9834C9.83217 13.0403 9.8002 13.1175 9.8002 13.198V13.805C9.8002 13.8855 9.83217 13.9627 9.88909 14.0196C9.94601 14.0765 10.0232 14.1085 10.1037 14.1085H11.1662C11.2444 14.4973 11.3973 14.8673 11.6162 15.198L10.8597 15.9545C10.8028 16.0114 10.7709 16.0886 10.7709 16.169C10.7709 16.2494 10.8028 16.3266 10.8597 16.3835L11.3197 16.8435C11.3766 16.9004 11.4538 16.9323 11.5342 16.9323C11.6146 16.9323 11.6918 16.9004 11.7487 16.8435L12.5052 16.087C12.8358 16.3059 13.2056 16.4587 13.5942 16.537V17.5995C13.5942 17.68 13.6262 17.7572 13.6831 17.8141C13.74 17.871 13.8172 17.903 13.8977 17.903H14.5047C14.5852 17.903 14.6624 17.871 14.7193 17.8141C14.7762 17.7572 14.8082 17.68 14.8082 17.5995V16.534C15.1968 16.4557 15.5666 16.3029 15.8972 16.084L16.6537 16.8405C16.7106 16.8974 16.7878 16.9293 16.8682 16.9293C16.9486 16.9293 17.0258 16.8974 17.0827 16.8405L17.5427 16.3805C17.5995 16.3236 17.6315 16.2464 17.6315 16.166C17.6315 16.0856 17.5995 16.0084 17.5427 15.9515L16.7852 15.196C17.0041 14.8653 17.157 14.4953 17.2352 14.1065H18.2977C18.3782 14.1065 18.4554 14.0745 18.5123 14.0176C18.5692 13.9607 18.6012 13.8835 18.6012 13.803V13.1965C18.6012 13.116 18.5692 13.0388 18.5123 12.9819C18.4554 12.925 18.3772 12.893 18.2967 12.893ZM14.2002 15.25C13.8541 15.25 13.5157 15.1474 13.2279 14.9551C12.9402 14.7628 12.7159 14.4895 12.5834 14.1697C12.451 13.8499 12.4163 13.4981 12.4838 13.1586C12.5513 12.8191 12.718 12.5073 12.9628 12.2626C13.2075 12.0178 13.5193 11.8511 13.8588 11.7836C14.1983 11.7161 14.5501 11.7508 14.8699 11.8832C15.1897 12.0157 15.463 12.24 15.6553 12.5278C15.8476 12.8155 15.9502 13.1539 15.9502 13.5C15.9502 13.9641 15.7658 14.4092 15.4376 14.7374C15.1094 15.0656 14.6643 15.25 14.2002 15.25Z"/>
										</g>
									</svg>
									Slider
								</a>
								<a href="#fifth"
								   class="tw-no-underline tw-text-gray-500 tw-hover:text-gray-700 tw-rounded-md tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-flex tw-justify-center tw-gap-1 tw-flex-auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
										 viewBox="0 0 19 18" fill="currentColor" class="tw-text-indigo-700">
										<g clip-path="url(#clip0_156_445)">
											<path
												d="M5.7002 17H2.2002C2.06759 17 1.94041 16.9473 1.84664 16.8536C1.75287 16.7598 1.7002 16.6326 1.7002 16.5V1.5C1.7002 1.36739 1.75287 1.24021 1.84664 1.14645C1.94041 1.05268 2.06759 1 2.2002 1H5.7002V17ZM9.4102 15.4685C9.0817 15.3312 8.80108 15.1 8.6036 14.8037C8.40611 14.5075 8.30056 14.1595 8.3002 13.8035V13.1965C8.30049 12.8405 8.40602 12.4925 8.60351 12.1962C8.80101 11.9 9.08166 11.6687 9.4102 11.5315C9.27187 11.2011 9.23486 10.8371 9.30385 10.4856C9.37285 10.1341 9.54474 9.81108 9.7977 9.5575L10.2567 9.098C10.4239 8.92988 10.6227 8.7966 10.8417 8.70588C11.0608 8.61516 11.2956 8.56881 11.5327 8.5695C11.5897 8.5695 11.6442 8.581 11.6997 8.586V1H7.7002V17H9.4732C9.35152 16.7648 9.28282 16.5058 9.27194 16.2412C9.26105 15.9767 9.30825 15.7129 9.4102 15.4685ZM13.8967 7.6H14.5037C14.8596 7.60042 15.2074 7.70594 15.5035 7.90333C15.7997 8.10072 16.0309 8.38117 16.1682 8.7095C16.4126 8.60602 16.6772 8.55876 16.9424 8.57122C17.2075 8.58369 17.4665 8.65555 17.7002 8.7815V1.5C17.7002 1.36739 17.6475 1.24021 17.5537 1.14645C17.46 1.05268 17.3328 1 17.2002 1H13.7002V7.63C13.7651 7.6162 13.8307 7.60618 13.8967 7.6Z"/>
											<path
												d="M18.2967 12.893H17.2342C17.156 12.5042 17.0031 12.1342 16.7842 11.8035L17.5407 11.047C17.5975 10.9901 17.6295 10.9129 17.6295 10.8325C17.6295 10.7521 17.5975 10.6749 17.5407 10.618L17.0807 10.158C17.0238 10.1011 16.9466 10.0692 16.8662 10.0692C16.7858 10.0692 16.7086 10.1011 16.6517 10.158L15.8962 10.915C15.5656 10.6961 15.1958 10.5433 14.8072 10.465V9.4035C14.8072 9.32301 14.7752 9.24581 14.7183 9.18889C14.6614 9.13198 14.5842 9.1 14.5037 9.1H13.8967C13.8162 9.1 13.739 9.13198 13.6821 9.18889C13.6252 9.24581 13.5932 9.32301 13.5932 9.4035V10.466C13.2046 10.5443 12.8348 10.6971 12.5042 10.916L11.7477 10.1595C11.6908 10.1026 11.6136 10.0707 11.5332 10.0707C11.4528 10.0707 11.3756 10.1026 11.3187 10.1595L10.8587 10.6195C10.8018 10.6764 10.7699 10.7536 10.7699 10.834C10.7699 10.9144 10.8018 10.9916 10.8587 11.0485L11.6152 11.805C11.3962 12.1357 11.2434 12.5057 11.1652 12.8945H10.1037C10.0232 12.8945 9.94601 12.9265 9.88909 12.9834C9.83217 13.0403 9.8002 13.1175 9.8002 13.198V13.805C9.8002 13.8855 9.83217 13.9627 9.88909 14.0196C9.94601 14.0765 10.0232 14.1085 10.1037 14.1085H11.1662C11.2444 14.4973 11.3973 14.8673 11.6162 15.198L10.8597 15.9545C10.8028 16.0114 10.7709 16.0886 10.7709 16.169C10.7709 16.2494 10.8028 16.3266 10.8597 16.3835L11.3197 16.8435C11.3766 16.9004 11.4538 16.9323 11.5342 16.9323C11.6146 16.9323 11.6918 16.9004 11.7487 16.8435L12.5052 16.087C12.8358 16.3059 13.2056 16.4587 13.5942 16.537V17.5995C13.5942 17.68 13.6262 17.7572 13.6831 17.8141C13.74 17.871 13.8172 17.903 13.8977 17.903H14.5047C14.5852 17.903 14.6624 17.871 14.7193 17.8141C14.7762 17.7572 14.8082 17.68 14.8082 17.5995V16.534C15.1968 16.4557 15.5666 16.3029 15.8972 16.084L16.6537 16.8405C16.7106 16.8974 16.7878 16.9293 16.8682 16.9293C16.9486 16.9293 17.0258 16.8974 17.0827 16.8405L17.5427 16.3805C17.5995 16.3236 17.6315 16.2464 17.6315 16.166C17.6315 16.0856 17.5995 16.0084 17.5427 15.9515L16.7852 15.196C17.0041 14.8653 17.157 14.4953 17.2352 14.1065H18.2977C18.3782 14.1065 18.4554 14.0745 18.5123 14.0176C18.5692 13.9607 18.6012 13.8835 18.6012 13.803V13.1965C18.6012 13.116 18.5692 13.0388 18.5123 12.9819C18.4554 12.925 18.3772 12.893 18.2967 12.893ZM14.2002 15.25C13.8541 15.25 13.5157 15.1474 13.2279 14.9551C12.9402 14.7628 12.7159 14.4895 12.5834 14.1697C12.451 13.8499 12.4163 13.4981 12.4838 13.1586C12.5513 12.8191 12.718 12.5073 12.9628 12.2626C13.2075 12.0178 13.5193 11.8511 13.8588 11.7836C14.1983 11.7161 14.5501 11.7508 14.8699 11.8832C15.1897 12.0157 15.463 12.24 15.6553 12.5278C15.8476 12.8155 15.9502 13.1539 15.9502 13.5C15.9502 13.9641 15.7658 14.4092 15.4376 14.7374C15.1094 15.0656 14.6643 15.25 14.2002 15.25Z"/>
										</g>
									</svg>
									Typography
								</a>
							</nav>
						</div>
					</div>
					<!-- Tab Contents -->
					<div id="tab-contents">
						<div id="first" class="tw-mt-4 tw-p-4 tw-bg-white tw-rounded-md tw-mb-5">
							<div class="wcss-settings-row">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Select Layout:</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="tw-flex tw-gap-2">
									<div class="">
										<label for="hosting-small"
											   class="tw-inline-flex tw-items-center tw-justify-between tw-rounded-lg tw-cursor-pointer tw-peer-checked:border-blue-600 tw-peer-checked:text-blue-600 tw-before:absolute tw-before:content-['\2705'] tw-before:text-sm tw-before:top-2 tw-before:right-2">
											<input type="radio" id="hosting-small" name="wccs_showcase_layout"
												   value="hosting-big" class="tw-hidden" style="display: none">
											<svg class="tw-h-16 tw-w-16 tw-text-fade-blue-600 tw-hover:text-gray-500 p-1 wccs-border-active tw-hover:border-gray-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
												<g clip-path="url(#clip0_172_5519)">
													<path d="M13 0H2C0.89543 0 0 0.89543 0 2V13C0 14.1046 0.89543 15 2 15H13C14.1046 15 15 14.1046 15 13V2C15 0.89543 14.1046 0 13 0Z"/>
													<path d="M13 17H2C0.89543 17 0 17.8954 0 19V30C0 31.1046 0.89543 32 2 32H13C14.1046 32 15 31.1046 15 30V19C15 17.8954 14.1046 17 13 17Z"/>
													<path d="M30 0H19C17.8954 0 17 0.89543 17 2V13C17 14.1046 17.8954 15 19 15H30C31.1046 15 32 14.1046 32 13V2C32 0.89543 31.1046 0 30 0Z"/>
													<path d="M30 17H19C17.8954 17 17 17.8954 17 19V30C17 31.1046 17.8954 32 19 32H30C31.1046 32 32 31.1046 32 30V19C32 17.8954 31.1046 17 30 17Z"/>
												</g>
											</svg>
										</label>
									</div>
									<div class="">
										<label for="hosting-big"
											   class="tw-inline-flex tw-items-center tw-justify-between tw-rounded-lg tw-cursor-pointer tw-peer-checked:border-blue-600 tw-peer-checked:text-blue-600">
											<input type="radio" id="hosting-big" name="wccs_showcase_layout"
												   value="hosting-big" class="tw-hidden" style="display: none">
											<svg class="tw-h-16 tw-w-16 tw-text-gray-300 tw-border-gray-300 tw-hover:text-gray-500 tw-border-2 tw-p-1 tw-rounded-lg tw-hover:border-gray-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="currentColor">
												<g clip-path="url(#clip0_172_5539)">
													<path d="M18 0H2C0.89543 0 0 0.89543 0 2V30C0 31.1046 0.89543 32 2 32H18C19.1046 32 20 31.1046 20 30V2C20 0.89543 19.1046 0 18 0Z"/>
													<path d="M30 0H24C22.8954 0 22 0.89543 22 2V7.33333C22 8.4379 22.8954 9.33333 24 9.33333H30C31.1046 9.33333 32 8.4379 32 7.33333V2C32 0.89543 31.1046 0 30 0Z"/>
													<path d="M30 11.3333H24C22.8954 11.3333 22 12.2287 22 13.3333V18.6666C22 19.7712 22.8954 20.6666 24 20.6666H30C31.1046 20.6666 32 19.7712 32 18.6666V13.3333C32 12.2287 31.1046 11.3333 30 11.3333Z"/>
													<path d="M30 22.6667H24C22.8954 22.6667 22 23.5621 22 24.6667V30C22 31.1046 22.8954 32 24 32H30C31.1046 32 32 31.1046 32 30V24.6667C32 23.5621 31.1046 22.6667 30 22.6667Z"/>
												</g>
											</svg>
										</label>
									</div>
								</div>
							</div>
							<div class="wcss-settings-row wcss-settings-row-border">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Display Mode</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="tw-flex tw-gap-2 tw-p-2 tw-rounded-md tw-bg-gray-300">
									<span class="tw-isolate tw-inline-flex tw-rounded-md tw-shadow-sm">
									  	<label class="tw-relative tw-inline-flex tw-gap-1 tw-items-center tw-rounded-l-md tw-bg-white tw-px-3 tw-py-2 tw-text-sm tw-font-semibold tw-text-gray-900 tw-ring-1 tw-ring-inset tw-ring-gray-300 tw-hover:bg-gray-50 tw-focus:z-10">
											<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
												<path d="M6.83325 18H3.33325C3.20064 18 3.07347 17.9473 2.9797 17.8536C2.88593 17.7598 2.83325 17.6326 2.83325 17.5V2.5C2.83325 2.36739 2.88593 2.24021 2.9797 2.14645C3.07347 2.05268 3.20064 2 3.33325 2H6.83325V18ZM8.83325 2H12.8333V18H8.83325V2ZM18.3333 18H14.8333V2H18.3333C18.4659 2 18.593 2.05268 18.6868 2.14645C18.7806 2.24021 18.8333 2.36739 18.8333 2.5V17.5C18.8333 17.6326 18.7806 17.7598 18.6868 17.8536C18.593 17.9473 18.4659 18 18.3333 18Z" fill="#2270B1"/>
											</svg>
											Fixed
										</label>
									  	<label class="tw-relative tw--ml-px tw-inline-flex tw-gap-1 tw-items-center tw-bg-white tw-px-3 tw-py-2 tw-text-sm tw-font-semibold tw-text-gray-900 tw-ring-1 tw-ring-inset tw-ring-gray-300 tw-hover:bg-gray-50 tw-focus:z-10">
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<path d="M16.1111 2.00003H3.88889C3.58206 2.00003 3.33333 2.24876 3.33333 2.55559V13.6667C3.33333 13.9735 3.58206 14.2223 3.88889 14.2223H16.1111C16.4179 14.2223 16.6667 13.9735 16.6667 13.6667V2.55559C16.6667 2.24876 16.4179 2.00003 16.1111 2.00003Z" fill="#64748B"/>
												<path d="M2.22222 13.1111H0.555556C0.408213 13.1111 0.266905 13.0526 0.162718 12.9484C0.0585316 12.8442 0 12.7029 0 12.5556V4.77781C0 4.63047 0.0585316 4.48916 0.162718 4.38497C0.266905 4.28078 0.408213 4.22225 0.555556 4.22225H2.22222V13.1111ZM19.4444 13.1111H17.7778V4.22225H19.4444C19.5918 4.22225 19.7331 4.28078 19.8373 4.38497C19.9415 4.48916 20 4.63047 20 4.77781V12.5556C20 12.7029 19.9415 12.8442 19.8373 12.9484C19.7331 13.0526 19.5918 13.1111 19.4444 13.1111Z" fill="#64748B"/>
												<path d="M4.44444 18.3334C4.874 18.3334 5.22222 17.9851 5.22222 17.5556C5.22222 17.126 4.874 16.7778 4.44444 16.7778C4.01489 16.7778 3.66667 17.126 3.66667 17.5556C3.66667 17.9851 4.01489 18.3334 4.44444 18.3334Z" fill="#64748B"/>
												<path d="M7.77778 18.7223C8.42211 18.7223 8.94445 18.1999 8.94445 17.5556C8.94445 16.9113 8.42211 16.3889 7.77778 16.3889C7.13345 16.3889 6.61111 16.9113 6.61111 17.5556C6.61111 18.1999 7.13345 18.7223 7.77778 18.7223Z" fill="#64748B"/>
												<path d="M11.1111 18.3334C11.5407 18.3334 11.8889 17.9851 11.8889 17.5556C11.8889 17.126 11.5407 16.7778 11.1111 16.7778C10.6816 16.7778 10.3333 17.126 10.3333 17.5556C10.3333 17.9851 10.6816 18.3334 11.1111 18.3334Z" fill="#64748B"/>
												<path d="M14.4444 18.3334C14.874 18.3334 15.2222 17.9851 15.2222 17.5556C15.2222 17.126 14.874 16.7778 14.4444 16.7778C14.0149 16.7778 13.6667 17.126 13.6667 17.5556C13.6667 17.9851 14.0149 18.3334 14.4444 18.3334Z" fill="#64748B"/>
											</svg>
											Slider
										</label>
									  	<label class="tw-relative tw--ml-px tw-inline-flex tw-gap-1 tw-items-center tw-rounded-r-md tw-bg-white tw-px-3 tw-py-2 tw-text-sm tw-font-semibold tw-text-gray-900 tw-ring-1 tw-ring-inset tw-ring-gray-300 tw-hover:bg-gray-50 tw-focus:z-10">
											<svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
												<path d="M17.6665 2H14.6665V18H17.6665C17.9317 18 18.1861 17.8946 18.3736 17.7071C18.5611 17.5196 18.6665 17.2652 18.6665 17V3C18.6665 2.73478 18.5611 2.48043 18.3736 2.29289C18.1861 2.10536 17.9317 2 17.6665 2ZM12.6665 2H3.6665C3.40129 2 3.14693 2.10536 2.9594 2.29289C2.77186 2.48043 2.6665 2.73478 2.6665 3V17C2.6665 17.2652 2.77186 17.5196 2.9594 17.7071C3.14693 17.8946 3.40129 18 3.6665 18H12.6665V2Z" fill="#64748B"/>
											</svg>
											Sticker
										</label>
									</span>
								</div>
							</div>
							<div class="wcss-settings-row">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Number of Columns</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="tw-p-12 tw-border tw-m-6 tw-rounded tw-bg-gray-50">
									<label for="two">
										<input id="two" type="checkbox" checked />
										Toggle switch
									</label>
								</div>
							</div>
							<div class="wcss-settings-row wcss-settings-row-border">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Column Breakpoints</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="flex gap-2">
									<div class="">
										<label for="1x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-600 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="1x_column_layout"
												   name="wccs_showcase_column_layout" value="1x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">1x</span>
										</label>
									</div>
									<div class="">
										<label for="2x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="2x_column_layout"
												   name="wccs_showcase_column_layout" value="2x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">2x</span>
										</label>
									</div>
									<div class="">
										<label for="3x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="3x_column_layout"
												   name="wccs_showcase_column_layout" value="3x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">3x</span>
										</label>
									</div>
									<div class="">
										<label for="4x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="4x_column_layout"
												   name="wccs_showcase_column_layout" value="4x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">4x</span>
										</label>
									</div>
								</div>
							</div>
							<div class="wcss-settings-row">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Filter Categories</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="flex gap-2">
									<div class="">
										<label for="1x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-600 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="1x_column_layout"
												   name="wccs_showcase_column_layout" value="1x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">1x</span>
										</label>
									</div>
									<div class="">
										<label for="2x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="2x_column_layout"
												   name="wccs_showcase_column_layout" value="2x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">2x</span>
										</label>
									</div>
									<div class="">
										<label for="3x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="3x_column_layout"
												   name="wccs_showcase_column_layout" value="3x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">3x</span>
										</label>
									</div>
									<div class="">
										<label for="4x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="4x_column_layout"
												   name="wccs_showcase_column_layout" value="4x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">4x</span>
										</label>
									</div>
								</div>
							</div>
							<div class="wcss-settings-row">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Select Categories</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="flex gap-2">
									<div class="">
										<label for="1x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-600 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="1x_column_layout"
												   name="wccs_showcase_column_layout" value="1x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">1x</span>
										</label>
									</div>
									<div class="">
										<label for="2x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="2x_column_layout"
												   name="wccs_showcase_column_layout" value="2x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">2x</span>
										</label>
									</div>
									<div class="">
										<label for="3x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="3x_column_layout"
												   name="wccs_showcase_column_layout" value="3x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">3x</span>
										</label>
									</div>
									<div class="">
										<label for="4x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="4x_column_layout"
												   name="wccs_showcase_column_layout" value="4x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">4x</span>
										</label>
									</div>
								</div>
							</div>
							<div class="wcss-settings-row">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Include Child</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="flex">
									<label class="inline-flex items-center cursor-pointer">
										<input type="checkbox" value="" class="sr-only peer"
											   name="wccs_showcase_is_slider">
										<div
											class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
									</label>
								</div>
							</div>
							<div class="wcss-settings-row">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Hide Empty Categories</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="flex">
									<label class="inline-flex items-center cursor-pointer">
										<input type="checkbox" value="" class="sr-only peer"
											   name="wccs_showcase_is_slider">
										<div
											class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
									</label>
								</div>
							</div>
							<div class="wcss-settings-row">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Order By</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="flex gap-2">
									<div class="">
										<label for="1x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-600 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="1x_column_layout"
												   name="wccs_showcase_column_layout" value="1x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">1x</span>
										</label>
									</div>
									<div class="">
										<label for="2x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="2x_column_layout"
												   name="wccs_showcase_column_layout" value="2x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">2x</span>
										</label>
									</div>
									<div class="">
										<label for="3x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="3x_column_layout"
												   name="wccs_showcase_column_layout" value="3x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">3x</span>
										</label>
									</div>
									<div class="">
										<label for="4x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="4x_column_layout"
												   name="wccs_showcase_column_layout" value="4x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">4x</span>
										</label>
									</div>
								</div>
							</div>
							<div class="wcss-settings-row">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Order</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="flex gap-2">
									<div class="">
										<label for="1x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-600 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="1x_column_layout"
												   name="wccs_showcase_column_layout" value="1x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">1x</span>
										</label>
									</div>
									<div class="">
										<label for="2x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="2x_column_layout"
												   name="wccs_showcase_column_layout" value="2x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">2x</span>
										</label>
									</div>
									<div class="">
										<label for="3x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="3x_column_layout"
												   name="wccs_showcase_column_layout" value="3x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">3x</span>
										</label>
									</div>
									<div class="">
										<label for="4x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="4x_column_layout"
												   name="wccs_showcase_column_layout" value="4x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">4x</span>
										</label>
									</div>
								</div>
							</div>
							<div class="wcss-settings-row wcss-settings-row-border">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Total Categories to Show</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="flex gap-2">
									<div class="">
										<label for="1x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-600 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="1x_column_layout"
												   name="wccs_showcase_column_layout" value="1x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">1x</span>
										</label>
									</div>
									<div class="">
										<label for="2x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="2x_column_layout"
												   name="wccs_showcase_column_layout" value="2x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">2x</span>
										</label>
									</div>
									<div class="">
										<label for="3x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="3x_column_layout"
												   name="wccs_showcase_column_layout" value="3x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">3x</span>
										</label>
									</div>
									<div class="">
										<label for="4x_column_layout"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="4x_column_layout"
												   name="wccs_showcase_column_layout" value="4x" class="hidden"
												   style="display: none">
											<span class="h-16 w-16">4x</span>
										</label>
									</div>
								</div>
							</div>
							<div class="wcss-settings-row">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Auto Adjust Slider</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="flex">
									<label class="tw-inline-flex tw-items-center tw-cursor-pointer">
										<input type="checkbox" value="" class="tw-sr-only tw-peer" name="wccs_showcase_is_slider">
										<div class="wcss-settings-checkbox">

										</div>
									</label>
								</div>
							</div>
							<div class="wcss-settings-row">
								<div class="tw-w-1/3">
									<h3 class="wccs-settings-title">Pre-loader</h3>
									<p class="wccs-settings-description">Choose how you want your product categories to be visually presented on your store page.</p>
								</div>
								<div class="tw-flex">
									<label class="tw-inline-flex tw-items-center tw-cursor-pointer">
										<input type="checkbox" value="" class="tw-sr-only tw-peer" name="wccs_showcase_is_slider">
										<div class="wcss-settings-checkbox">

										</div>
									</label>
								</div>
							</div>
						</div>
						<div id="second" class="hidden p-4">
							<div class="flex justify-start items-center">
								<div class="w-64">
									<h3>Select Layout:</h3>
								</div>
								<div class="flex gap-2">
									<div class="">
										<label for="hosting-small"
											   class="inline-flex border-2 items-center p-1 justify-between rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-600 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="hosting-small" name="wccs_showcase_layout"
												   value="hosting-big" class="hidden" style="display: none">
											<img class="h-16 w-16"
												 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScIp7fq-0LjUBCLTpPZPyFnvDrozDPgkc046V5dV-J3Q&s"
												 alt="">
										</label>
									</div>
									<div class="">
										<label for="hosting-big"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="hosting-big" name="wccs_showcase_layout"
												   value="hosting-big" class="hidden" style="display: none">
											<img class="h-16 w-16"
												 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScIp7fq-0LjUBCLTpPZPyFnvDrozDPgkc046V5dV-J3Q&s"
												 alt="">
										</label>
									</div>
								</div>
							</div>
						</div>
						<div id="third" class="hidden p-4">
							<div class="flex justify-start items-center">
								<div class="w-64">
									<h3>Select Layout:</h3>
								</div>
								<div class="flex gap-2">
									<div class="">
										<label for="hosting-small"
											   class="inline-flex border-2 items-center p-1 justify-between rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-600 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="hosting-small" name="wccs_showcase_layout"
												   value="hosting-big" class="hidden" style="display: none">
											<img class="h-16 w-16"
												 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScIp7fq-0LjUBCLTpPZPyFnvDrozDPgkc046V5dV-J3Q&s"
												 alt="">
										</label>
									</div>
									<div class="">
										<label for="hosting-big"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="hosting-big" name="wccs_showcase_layout"
												   value="hosting-big" class="hidden" style="display: none">
											<img class="h-16 w-16"
												 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScIp7fq-0LjUBCLTpPZPyFnvDrozDPgkc046V5dV-J3Q&s"
												 alt="">
										</label>
									</div>
								</div>
							</div>
						</div>
						<div id="fourth" class="hidden p-4">
							<div class="flex justify-start items-center">
								<div class="w-64">
									<h3>Select Layout:</h3>
								</div>
								<div class="flex gap-2">
									<div class="">
										<label for="hosting-small"
											   class="inline-flex border-2 items-center p-1 justify-between rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-600 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="hosting-small" name="wccs_showcase_layout"
												   value="hosting-big" class="hidden" style="display: none">
											<img class="h-16 w-16"
												 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScIp7fq-0LjUBCLTpPZPyFnvDrozDPgkc046V5dV-J3Q&s"
												 alt="">
										</label>
									</div>
									<div class="">
										<label for="hosting-big"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="hosting-big" name="wccs_showcase_layout"
												   value="hosting-big" class="hidden" style="display: none">
											<img class="h-16 w-16"
												 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScIp7fq-0LjUBCLTpPZPyFnvDrozDPgkc046V5dV-J3Q&s"
												 alt="">
										</label>
									</div>
								</div>
							</div>
						</div>
						<div id="fifth" class="hidden p-4">
							<div class="flex justify-start items-center">
								<div class="w-64">
									<h3>Select Layout:</h3>
								</div>
								<div class="flex gap-2">
									<div class="">
										<label for="hosting-small"
											   class="inline-flex border-2 items-center p-1 justify-between rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-600 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="hosting-small" name="wccs_showcase_layout"
												   value="hosting-big" class="hidden" style="display: none">
											<img class="h-16 w-16"
												 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScIp7fq-0LjUBCLTpPZPyFnvDrozDPgkc046V5dV-J3Q&s"
												 alt="">
										</label>
									</div>
									<div class="">
										<label for="hosting-big"
											   class="inline-flex border-2 items-center p-1 justify-between  rounded-lg cursor-pointer dark:hover:text-gray-300 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-green-700 hover:bg-green-700 dark:text-gray-400  dark:hover:bg-green-700">
											<input type="radio" id="hosting-big" name="wccs_showcase_layout"
												   value="hosting-big" class="hidden" style="display: none">
											<img class="h-16 w-16"
												 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScIp7fq-0LjUBCLTpPZPyFnvDrozDPgkc046V5dV-J3Q&s"
												 alt="">
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .column-1 -->

			<div class="column-2">
				<div class="bkit-card">
					<div class="bkit-card__header">
						<h2 class="bkit-card__title"><?php esc_html_e('Actions', 'wc-category-showcase'); ?></h2>
					</div>
					<div class="bkit-card__footer">
						<input type="hidden" name="action" value="wccs_add_category_showcase"/>
						<?php wp_nonce_field( 'wccs_add_category_showcase' ); ?>
						<button class="button button-primary bkit-w-100"><?php esc_html_e( 'Publish', 'wc-category-showcase' ); ?></button>
					</div>
				</div>

				<div class="bkit-card">
					<div class="bkit-card__header">
						<h2 class="bkit-card__title"><?php esc_html_e( 'Shortcode', 'wc-category-showcase' ); ?></h2>
					</div>
					<div class="bkit-card__body">
						<span class="wccs_shortcode is--masked">
							<?php printf( '<strong class="wccs_shortcode__code" title="">[wccs_showcase id="10"]</strong>', esc_attr( '[wccs_showcase id="10"]' ) ); ?>
							<?php printf( '<span class="wccs_shortcode__copy" data-key="%s">%s</span>', esc_attr( '[wccs_showcase id="' . 10 . '"]' ), esc_html__( 'Copy', 'wc-category-showcase' ) ); ?>
						</span>
						<p><?php esc_html_e( 'Click the icon to copy this category showcase shortcode.', 'wc-category-showcase' ); ?></p>
					</div>
					<div class="bkit-card__footer">
						<input type="hidden" name="action" value="wccs_add_category_showcase"/>
						<?php wp_nonce_field( 'wccs_add_category_showcase' ); ?>
						<button class="button button-primary bkit-w-100"><?php esc_html_e( 'Publish', 'wc-category-showcase' ); ?></button>

					</div>
				</div>
			</div><!-- .column-2 -->
		</div><!-- .bkit-poststuff -->
	</form>

</div>


