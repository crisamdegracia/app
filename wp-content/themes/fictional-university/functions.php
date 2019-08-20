<?php



function university_files(){
    
    // 2 args 
    // 1st name doest matter - just to name
    // 2nd the location or link
    wp_enqueue_style('university_main_styles', get_stylesheet_uri() );
}

// 2 arguments
// 1st - what we want to do - hook name
// 2nd - function to run
add_action('wp_enqueue_scripts', 'university_files' );
    
    
        
    
    
    
    
    
    
    ?>