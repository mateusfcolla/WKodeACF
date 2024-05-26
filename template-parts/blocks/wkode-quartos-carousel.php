<?php 

$roomPosts = get_field( 'rooms_posts' , get_the_ID());
$final_posts = false;

$standart_posts = new WP_Query([
    'post_type' => 'quartos',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => 6,
]);

if($roomPosts){
    if(count($roomPosts) > 0){
        $final_posts = true;
    }
}
 ?>


<section class="wkode-quartos__section" id="quartos">
    <h2 class="wkode-quartos__title title " data-entrance="from-bottom" >Quartos Disponíveis</h2>

    <div class="wkode-quartos__category category-filter-container-wrapper wkode-quartos__slider text-white px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-40">

        <?php
            if($final_posts){
                foreach ($roomPosts as $post) {
                    setup_postdata($post);
                    // Get the value of the custom field for the current post 
                    $images = get_field('wkode_quartos_imgs', $post->ID);
                    $price = get_field('wkode_quartos_price', $post->ID);

                    ?>
                    <div class="wkode-quartos__card mx-6">
                        <div class="wkode-single-used-bikes-template__image featured-image wkode-quartos-image-wrapper" get-this-fancybox="galleryServices<?= $post->ID?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'fancy_image'); ?>
                                <div class="f-carousel wkode-quartos-carousel" >
                                    <a class="f-carousel__slide" data-thumb-src="<?php echo $thumbnail_url; ?>" data-fancybox="galleryServices<?= $post->ID ?>" href="<?php echo $thumbnail_url; ?>">
                                        <img class="wkode-single-used-bikes__img" data-lazy-src="<?php echo $thumbnail_url; ?>" src="<?php echo $thumbnail_url; ?>" />
                                    </a>
                                    <?php
                                    if($images) : 
                                        foreach ($images as $image) : ?>
                                            <?php
                                            $image_url = $image['sizes']['fancy_image'];
                                            ?>
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
                        <div class="wkode-quartos__card-footer" data-entrance="from-bottom">
                            <div class="wkode-quartos__card-footer-btn"><a href="https://wa.me/5548992083737" class="wkode-btn wkode-btn--solid-secondary-blue">Faça Sua Reserva</a></div>
                        </div>
                    </div>
                    <?php 
                }
                wp_reset_postdata(); 
            }else{

                while($standart_posts->have_posts()){
                    $standart_posts->the_post();

                    get_template_part('./template-parts/cards/quartos');
                } wp_reset_postdata();
            }?>
        </div>
        
    </section>
  