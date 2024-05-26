<?php
// Get the value of the custom field for the current post 
$images = get_field('wkode_quartos_imgs', get_the_ID());
$price = get_field('wkode_quartos_price', get_the_ID());

?>
<div class="wkode-quartos__card mx-2">
    <div class="wkode-single-used-bikes-template__image featured-image wkode-quartos-image-wrapper" get-this-fancybox="galleryServices<?= $post->ID?>">
        <?php if (has_post_thumbnail()) : ?>
            <?php $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'wkode_single_product_bikes'); ?>
            <div class="f-carousel wkode-quartos-carousel" >
                <a class="f-carousel__slide" data-thumb-src="<?php echo $thumbnail_url; ?>" data-fancybox="galleryServices<?= $post->ID ?>" href="<?php echo $thumbnail_url; ?>">
                    <img class="wkode-single-used-bikes__img" data-lazy-src="<?php echo $thumbnail_url; ?>" src="<?php echo $thumbnail_url; ?>" />
                </a>
                <?php
                if($images) :
                    foreach ($images as $image) : ?>
                        <?php $image_url = $image['url']; ?>
                        <a class="f-carousel__slide" data-thumb-src="<?php echo $image_url; ?>" data-fancybox="galleryServices<?= $post->ID ?>" href="<?php echo $image_url; ?>">
                            <img class="wkode-single-used-bikes__img" data-lazy-src="<?php echo $image_url; ?>" src="<?php echo $image_url; ?>" />
                        </a>
                    <?php
                    endforeach;
                endif;
                ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="wkode-quartos__card-body">
        <h3 class="wkode-quartos__card-title ">
            <a href="">
                <?php echo wp_trim_words( the_title() , 15); ?>
            </a>
        </h3>
        <div class="wkode-quartos__card-info">
            <?php echo wp_trim_words( get_the_content() , 45);  ?>
        </div>
        <div class="wkode-quartos__card-footer-price">
            <?php
            if($price){
                echo 'R$ '. $price;
            }else{
                echo "consulte";
            }
            ?>
        </div>
    </div>
    <div class="wkode-quartos__card-footer">
        <div class="wkode-quartos__card-footer-btn"><a href="https://wa.me/5548992083737" class="wkode-btn wkode-btn--outline-gray">Ver Mais</a></div>
    </div>
</div>