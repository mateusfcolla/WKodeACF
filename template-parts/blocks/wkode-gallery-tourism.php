<?php 

$gallery              = get_field('wkode_gallery_tourism');
if($gallery){ ?>
    <section class="wkode__gallery wkode__gallery--tourism bg-wk-primary-gray pt-60" id="pontos-turisticos">
        <h2 class="text-7xl font-semibold text-wk-secondary-blue mb-36 text-center" data-entrance="from-bottom">Pontos Turísticos</h2>

        <div class="wkode__gallery-outer-wrapper grid grid-cols-1 md:grid-cols-12 grid-rows-2">
            <?php foreach ($gallery as $i => $image):

                $current_class = "";
                $image_url = "";
                $current_class_second = "";
                /* if($i == 0 || $i == 1 || $i == 3 || $i == 4 || $i == 6){
                    $current_class = "col-span-1 md:col-span-2";
                    $image_url = wp_get_attachment_image_src($image['ID'], 'wkode_new_bikes_single__gallery_two_cols');
                } */
                if($i == 0 || $i == 3){
                    $current_class = "col-span-1 md:col-span-2 row-span-2 ";
                    $image_url = wp_get_attachment_image_src($image['ID'], 'wkode_gallery_tourism_one_col_two_row');
                }else if($i == 1 || $i == 2 || $i == 6 || $i == 7){
                    $current_class = "col-span-1 md:col-span-2 row-span-1 ";
                    $image_url = wp_get_attachment_image_src($image['ID'], 'wkode_gallery_tourism_one_col_one_row');
                }else if($i == 4 || $i == 5){
                    $current_class = "col-span-1 md:col-span-4 row-span-1 ";
                    $image_url = wp_get_attachment_image_src($image['ID'], 'wkode_gallery_tourism_two_col_one_row');
                }if (wp_is_mobile()) { // Retrieve screen width from cookie
                    $current_class_second = " col-span-1";
                    $image_url = wp_get_attachment_image_src($image['ID'], 'wkode_new_bikes_single__gallery_one_by_one');
                }
                $image_alt = get_post_meta($image['ID'], '_wp_attachment_image_alt', true);
                ?>
                <div class="<?php echo $current_class . $current_class_second ?> wkode__gallery-wrapper">
                    <a href="<?php echo esc_url($image['url']); ?>" class="gallery-image wkode__gallery-link" data-caption="<?php echo esc_attr($image_alt); ?>" data-fancybox="galleryTourism">
                        <img src="<?php echo esc_url($image_url[0]); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="wkode__gallery-img">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
<?php } ?>