<?php



function vgasm_files() {
    wp_enqueue_script('main-site-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

    wp_enqueue_style('vgasm_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('vgasm_extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('font-roboto', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}



add_action('wp_enqueue_scripts', 'vgasm_files');

// In the above, we created/defined a new function that we created the name of (vgasm_files), within we called a Wordpress function that called the CSS file wanted to load. The 'add_action' calls that function, which allows Wordpress to load that CSS file.
    // What "add_action('wp_enqueue_scripts', 'vgasm_files');" is saying, is that right before Wordpress outputs its code that is going to go in the Header heading, before it loads, we want it to run our function.
    //Why don't we add parenthesis after 'vgasm_files'? We don't want to call the function right then and there. 