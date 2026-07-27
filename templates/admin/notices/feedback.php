<?php
/**
 * Deactivation feedback modal.
 *
 * @since   1.0.0
 * @package PluginEver\CategoryShowcase
 *
 * @var string                $basename Plugin basename.
 * @var string                $nonce    Feedback nonce.
 * @var array<string, string> $reasons  Reason labels keyed by slug.
 */

defined( 'ABSPATH' ) || exit;
?>
<div id="wc-category-showcase-feedback" class="wc-category-showcase-feedback" style="display:none;">
	<div class="wc-category-showcase-feedback__overlay"></div>
	<div class="wc-category-showcase-feedback__modal" role="dialog" aria-modal="true">
		<h2><?php esc_html_e( 'Quick question before you go', 'wc-category-showcase' ); ?></h2>
		<p><?php esc_html_e( 'What is the reason for deactivating?', 'wc-category-showcase' ); ?></p>
		<ul>
			<?php foreach ( $reasons as $slug => $label ) : ?>
				<li>
					<label>
						<input type="radio" name="wc-category-showcase-reason" value="<?php echo esc_attr( $slug ); ?>">
						<?php echo esc_html( $label ); ?>
					</label>
				</li>
			<?php endforeach; ?>
		</ul>
		<textarea rows="2" placeholder="<?php esc_attr_e( 'Tell us more (optional)', 'wc-category-showcase' ); ?>"></textarea>
		<div class="wc-category-showcase-feedback__actions">
			<a href="#" class="button button-primary" data-submit><?php esc_html_e( 'Submit &amp; Deactivate', 'wc-category-showcase' ); ?></a>
			<a href="#" class="button-link" data-skip><?php esc_html_e( 'Skip &amp; Deactivate', 'wc-category-showcase' ); ?></a>
		</div>
	</div>
</div>
<style>
	.wc-category-showcase-feedback__overlay { position: fixed; inset: 0; background: rgba( 0, 0, 0, .5 ); z-index: 99998; }
	.wc-category-showcase-feedback__modal { position: fixed; top: 50%; left: 50%; transform: translate( -50%, -50% ); width: 90%; max-width: 420px; padding: 24px; background: #fff; border-radius: 6px; box-shadow: 0 5px 30px rgba( 0, 0, 0, .3 ); z-index: 99999; }
	.wc-category-showcase-feedback__modal ul { margin: 12px 0; }
	.wc-category-showcase-feedback__modal textarea { width: 100%; }
	.wc-category-showcase-feedback__actions { display: flex; align-items: center; gap: 12px; margin-top: 16px; }
</style>
<script>
	( function ( $ ) {
		var $wrap = $( '#wc-category-showcase-feedback' );
		var target = '';

		$( 'tr[data-plugin="<?php echo esc_js( $basename ); ?>"]' ).find( '.deactivate a' ).on( 'click', function ( e ) {
			e.preventDefault();
			target = $( this ).attr( 'href' );
			$wrap.show();
		} );

		$wrap.on( 'click', '[data-skip], .wc-category-showcase-feedback__overlay', function ( e ) {
			e.preventDefault();
			window.location.href = target;
		} );

		$wrap.on( 'click', '[data-submit]', function ( e ) {
			e.preventDefault();
			$.post( window.ajaxurl, {
				action: 'wc_category_showcase_feedback',
				nonce: '<?php echo esc_js( $nonce ); ?>',
				reason: $wrap.find( 'input[name="wc-category-showcase-reason"]:checked' ).val() || '',
				details: $wrap.find( 'textarea' ).val() || ''
			} ).always( function () {
				window.location.href = target;
			} );
		} );
	}( jQuery ) );
</script>
