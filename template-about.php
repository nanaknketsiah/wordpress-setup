<?php
/* Template Name: About */
get_header();

?>

<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pasted Graphic.png" alt="" class="on__tab_in_p"> -->

<h1>THIS IS ABOUT</h1>



<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content();
        }
    }
?>

<?php
get_footer()
?>