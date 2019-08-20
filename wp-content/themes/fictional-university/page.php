<?php
get_header(); ?>


<h1> <?php bloginfo('name') ?></h1>
 <h2> Pages</h2>





<?php while( have_posts() ) { the_post()  ?>
    
    <h1> <?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    
    
    
    
<?php } 
    get_footer(); 
?>