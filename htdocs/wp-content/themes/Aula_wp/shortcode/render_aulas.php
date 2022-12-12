<?php 



// [bartag foo="foo-value"]
function render_aulas( $atts ) {
	$a = shortcode_atts( array(
		'title' => 'Render Aulas',
		'test' => 'Teste 1',
	), $atts );

	return "foo = {$a['foo']}";
}
add_shortcode( 'render_aulas', 'render_aulas' );