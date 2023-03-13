<?php



function vgasm_files() {
    wp_enqueue_style('vgasm_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'vgasm_files');

// In the above, we created/defined a new function that we created the name of (vgasm_files), within we called a Wordpress function that called the CSS file wanted to load. The 'add_action' calls that function, which allows Wordpress to load that CSS file.
    // What "add_action('wp_enqueue_scripts', 'vgasm_files');" is saying, is that right before Wordpress outputs its code that is going to go in the Header heading, before it loads, we want it to run our function.
    //Why don't we add parenthesis after 'vgasm_files'? We don't want to call the function right then and there. 