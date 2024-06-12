<?php get_header();
    while (have_posts()) : the_post();
        get_template_part('./template-parts/blocks/wkode-slider');
        get_template_part('./template-parts/blocks/wkode-quem-somos');
    endwhile;

get_footer(); ?>
