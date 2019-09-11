<?php



function university_files(){
    
    // 4 args for script
    // 1st name
    // 2nd location
    // 3rd if the srcipt is depending on another script so. NULL
    // 4th Version or can be a js method called microtime()
    // 4th microtime to download a new file each time browser reloads
    //5th do you want load the file right before closing of the body tag? Yes or No for true or false
    wp_enqueue_script('main-university-script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true );
    
    // 2 args for styles
    // 1st name doest matter - just to name
    // 2nd the location or link
    
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime() );
    wp_enqueue_style('font-awesome', "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('googlefont', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    
}

// 2 arguments
// 1st - what we want to do - hook name
// 2nd - function to run
add_action('wp_enqueue_scripts', 'university_files' );
    

function university_features() {
    
    register_nav_menu('headerMenuLocation', 'Menu Header Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');       
    
    
    
    
    
    
    ?>