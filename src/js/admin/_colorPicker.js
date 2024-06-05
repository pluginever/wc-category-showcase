jQuery( function ( $ ) {
	jQuery.fn.wcc_showcase_input_color_picker = function () {
		return this.each( function () {
			const el = this;
			$( el )
				.iris( {
					change( event, ui ) {
						$( el ).parent().find( '.colorpickpreview' ).css( {
							backgroundColor: ui.color.toString(),
						} );
					},
					hide: true,
					border: true,
				} )
				.on( 'click focus', function ( event ) {
					event.stopPropagation();
					$( '.iris-picker' ).hide();
					$( el ).closest( 'div' ).find( '.iris-picker' ).show();
					$( el ).data( 'original-value', $( el ).val() );
				} )
				.on( 'change', function () {
					if ( $( el ).is( '.iris-error' ) ) {
						const original_value = $( this ).data('original-value');

						if ( original_value.match(/^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/) ) {
							$( el ).val( $( el ).data( 'original-value' ) ).change();
						} else {
							$( el ).val( '' ).change();
						}
					}
				} );

			$( 'body' ).on( 'click', function () {
				$( '.iris-picker' ).hide();
			} );
		} );
	};

	$( '.wcc-showcase-input-color' ).wcc_showcase_input_color_picker();
	$( 'body' ).on('click', '.wcc-showcase-input-color', function () {
		$( '.wcc-showcase-input-color' ).wcc_showcase_input_color_picker();
	});
} );
