<?php
get_header(); ?>

<?php while(have_posts()) { the_post(); ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
            <p>Learn how the school of your dreams got started.</p>
        </div>
    </div>  
</div> 

<div class="container container--narrow page-section">

    <!-- $theParent is the ID of the parent page -->
    <?php $theParent =  wp_get_post_parent_id( get_the_ID() );
                           if( $theParent ) { ?>

    <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_permalink( $theParent ); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title( $theParent ); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>



    <?php } ?>


    <?php
                           //if the page has current children will return a list of children pages
                           //false - return nothing
                           $checkArray = get_pages(array(
                               'child_of' => get_the_ID()
                           )); 
                           if($theParent or $checkArray ){ ?>

    <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent) ?>"><?php echo get_the_title($theParent) ?></a></h2>
        <ul class="min-list">

            <?php  if( $theParent ) {
                               $theChildOf = $theParent;
                           } else {
                               $theChildOf = get_the_ID();
                           }
                                                          wp_list_pages( array(

                                                              //will remove the head title PAGES
                                                              'title_li' => NULL,
                                                              //will output the child of current page if has parent
                                                              'child_of' => $theChildOf,
                                                              
                                                              // we can decide what is the mauuna sa list pf page
                                                              //by going to the child dashboard page tapos
                                                              // we can pick the number order there. gets mo?
                                                              'sort_column' => 'menu_order'
                                                          )) ;
            ?>
        </ul>
    </div>
    <?php } ?>
    <div class="generic-content">
        <p> <?php the_content() ?> </p>
    </div>

</div>

<div class="page-section page-section--beige">
    <div class="container container--narrow generic-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
    </div>
</div>


<?php }
get_footer(); 
?>