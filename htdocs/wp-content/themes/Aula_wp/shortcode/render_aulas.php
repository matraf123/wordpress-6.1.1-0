<?php 
// [reder_aulas titulo="Aulas do torne-se um promagador"]

function render_aulas( $atts ){
    $a = shortcode_atts( $atts );
    
    return "foo = {$atts}";
}
add_shortcode('render_aulas', 'render_aulas');