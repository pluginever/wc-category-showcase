import Splide from '@splidejs/splide';
import { Grid } from '@splidejs/splide-extension-grid';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

// Expose Splide and its extensions to the window object for frontend.js to use
window.Splide = Splide;
window.splide = {
	Extensions: {
		Grid,
		AutoScroll,
	},
};
