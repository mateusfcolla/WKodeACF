<?php get_header();
    while (have_posts()) : the_post();
        get_template_part('./template-parts/blocks/wkode-slider');
        get_template_part('./template-parts/blocks/wkode-quem-somos');
        get_template_part('./template-parts/blocks/wkode-icons');
        get_template_part('./template-parts/blocks/wkode-quartos-carousel');
        get_template_part('./template-parts/blocks/wkode-gallery');
        get_template_part('./template-parts/blocks/wkode-video');
        get_template_part('./template-parts/blocks/wkode-gallery-tourism');
        get_template_part('./template-parts/blocks/wkode-standart-blocks');
        get_template_part('./template-parts/blocks/wkode-testimonial');
        get_template_part('./template-parts/blocks/wkode-contact'); ?>
        
        <?php
    endwhile;

get_footer(); ?>
