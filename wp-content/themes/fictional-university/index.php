<?php 

get_header();

?>



<?php 

while( have_posts() ){ the_post(); ?>



<a href="<?php the_permalink(); ?>"  > 
    <h1><?php the_title(); ?></h1>
</a>

<p><?php the_content(); ?></p>

<hr>

<?php } ?>




<?php get_footer(); ?>