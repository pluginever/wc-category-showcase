/**
 * WordPress dependencies
 */
import { render } from '@wordpress/element';
import domReady from '@wordpress/dom-ready';
import { __ } from '@wordpress/i18n';

/**
 * External dependencies
 */
import { Hello } from '@byteever/components';

function App() {
	return (
		<>
			{ __( 'Hello World!', 'plugin-wc-category-showcase' ) }
			<Hello />
		</>
	);
}

domReady( () => {
	const root = document.getElementById( 'page' );
	return render( <App />, root );
} );
