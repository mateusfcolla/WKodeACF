<?php get_header();
    while (have_posts()) : the_post();
        get_template_part('./template-parts/blocks/wkode-slider');
        get_template_part('./template-parts/blocks/wkode-quem-somos');
        get_template_part('./template-parts/blocks/wkode-testimonial');
        get_template_part('./template-parts/blocks/wkode-contact'); ?>
        
        <?php
    endwhile;

get_footer(); ?>
