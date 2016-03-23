<?php

function get_adsense($atts) {
		return '<iframe width="560" height="315" src="https://www.youtube.com/embed/pQ8DwmEg9wk" frameborder="0" allowfullscreen></iframe>';
}
add_shortcode('adsense', 'get_adsense');

?>
