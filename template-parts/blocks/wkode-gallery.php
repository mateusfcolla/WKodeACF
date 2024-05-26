<?php 

$gallery              = get_field('wkode_gallery');
if($gallery){ ?>
    <section class="wkode__gallery pt-60" id="pousada">
        <h2 class="text-7xl font-semibold text-wk-secondary-blue mb-36 text-center" data-entrance="from-bottom">Nossa estrutura</h2>

        <div class="wkode__gallery-outer-wrapper grid grid-cols-1 md:grid-cols-12">
            <?php foreach ($gallery as $i => $image):

                $current_class = "";
                $image_url = "";
                $current_class_second = "";
                if($i == 0 || $i == 1 || $i == 3 || $i == 4 || $i == 6){
                    $current_class = "col-span-1 md:col-span-2";
                    $image_url = wp_get_attachment_image_src($image['ID'], 'wkode_new_bikes_single__gallery_two_cols');
                }else if($i == 2){
                    $current_class = "col-span-1 md:col-span-6";
                    $image_url = wp_get_attachment_image_src($image['ID'], 'wkode_new_bikes_single__gallery_six_cols');
                }else if($i == 5 || $i == 7){
                    $current_class = "col-span-1 md:col-span-4";
                    $image_url = wp_get_attachment_image_src($image['ID'], 'wkode_new_bikes_single__gallery_four_cols');
                }if (wp_is_mobile()) { // Retrieve screen width from cookie
                    $current_class_second = " col-span-1";
                    $image_url = wp_get_attachment_image_src($image['ID'], 'wkode_new_bikes_single__gallery_one_by_one');
                }
                $image_alt = get_post_meta($image['ID'], '_wp_attachment_image_alt', true);
                ?>
                <div class="<?php echo $current_class . $current_class_second ?> wkode__gallery-wrapper">
                    <a href="<?php echo esc_url($image['url']); ?>" class="gallery-image wkode__gallery-link" data-fancybox="gallery">
                        <img src="<?php echo esc_url($image_url[0]); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="wkode__gallery-img">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
<?php } ?>