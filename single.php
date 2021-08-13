<?php 
get_header();

while(have_posts()) {
the_post(); ?>
<h2 href="<?php the_permalink(); ?>"><?php the_title();?></href=><h2>
<h4><?php the_content();?><h4>
<?php

}
get_footer();

?>

