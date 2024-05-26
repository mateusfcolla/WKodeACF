<?php 

// intro block
$standart_block = get_field('wkode_standart_descriptive_block');

if($standart_block): ?>
    <section class="wkode-single-new-bikes-template__intro-block">
        <?php
        $standart_dark_mode         = $standart_block['wkode_main_block_dark_mode'] ;
        $standart_title             = $standart_block['wkode_main_block_title'];
        $standart_description       = $standart_block['wkode_main_block_description'];
        $standart_img               = $standart_block['wkode_main_block_img'];
        $standart_first_img_url    = $standart_img['sizes']['wkode_carousel_main_descriptor'];
        $standart_first_imgs              = $standart_block['wkode_main_block_imgs'];
        $standart_block_direction   = $standart_block['wkode_main_block_direction'];
        $standart_btn               = $standart_block['wkode_main_block_btn'];

        //dark mode handling
        if($standart_dark_mode){
            $standart_current_mode = "wkode-single-new-bikes-template-block__dark-mode";
        }else{
            $standart_current_mode = "wkode-single-new-bikes-template-block__light-mode";
        }

        //block direction handling
        if($standart_block_direction){
            $standart_current_direction = "wkode-single-new-bikes-template-block__inverted-direction";
        }else{
            $standart_current_direction = "wkode-single-new-bikes-template-block__normal-direction";
        }
        ?>

        <section class="wkode-single-new-bikes-template-block <?php echo $standart_current_mode; echo " " . $standart_current_direction; ?>">
            <div class="wkode-single-new-bikes-template-block__wrapper">
                <div class="wkode-single-new-bikes-template-block__content">
                    <h2 class="wkode-single-new-bikes-template-block__title " data-entrance="grow" ><?php echo $standart_title; ?></h2>
                    <div class="wkode-single-new-bikes-template-block__text"><?php echo $standart_description; ?></div>
                    <?php
                    if($standart_btn){ ?>
                        <a href="#contato" class="wkode-btn wkode-btn--outline-blue" data-entrance="from-bottom"><?= $standart_btn ?></a><?php
                    }
                    ?>
                </div>
                <div class="wkode-single-new-bikes-template-block__image wkode-single-new-bikes-template-block__image--first">
                    <a data-thumb-src="<?php echo $standart_first_img_url; ?>" data-fancybox="firstMainBlock" href="<?php echo $standart_first_img_url ?>" data-fancybox="firstMainBlock" class="f-carousel__slide">
                        <img class="wkode-single-new-bikes-template-block__img" data-lazy-src="<?php echo $standart_first_img_url; ?>" src="<?php echo $standart_first_img_url ?>" alt="" srcset="">
                    </a>
                     <?php
                    if($standart_first_imgs) : 
                        foreach ($standart_first_imgs as $image) : ?>
                            <?php $image_url = $image['sizes']['wkode_carousel_main_descriptor']; ?>
                            <a class="f-carousel__slide" data-thumb-src="<?php echo $image_url; ?>" data-fancybox="firstMainBlock" href="<?php echo $image_url; ?>">
                                <img class="wkode-single-used-bikes__img" data-lazy-src="<?php echo $image_url; ?>" src="<?php echo $image_url; ?>" />
                            </a>
                        <?php 
                        endforeach; 
                    endif;
                    ?>
                </div>
            </div>
        </section>
    </section>
<?php endif; ?>


<?php 

// intro block
$standart_second_block = get_field('wkode_standart_descriptive_block_2');

if($standart_second_block): ?>
    <section class="wkode-single-new-bikes-template__intro-block"> <?php
        $standart_second_dark_mode         = $standart_second_block['wkode_main_block_dark_mode'] ;
        $standart_second_title             = $standart_second_block['wkode_main_block_title'];
        $standart_second_description       = $standart_second_block['wkode_main_block_description'];
        $standart_second_img               = $standart_second_block['wkode_main_block_img'];
        if($standart_second_img){
            $standart_second_img_url           = $standart_second_img['sizes']['wkode_carousel_main_descriptor'];
        }
        $standart_second_imgs              = $standart_second_block['wkode_main_block_imgs'];
        $standart_second_block_direction   = $standart_second_block['wkode_main_block_direction'];
        $standart_btn                      = $standart_second_block['wkode_main_block_btn']; 

        //dark mode handling
        if($standart_second_dark_mode){
            $standart_second_current_mode = "wkode-single-new-bikes-template-block__dark-mode";
        }else{
            $standart_second_current_mode = "wkode-single-new-bikes-template-block__light-mode";
        }

        //block direction handling
        if($standart_second_block_direction){
            $standart_second_current_direction = "wkode-single-new-bikes-template-block__inverted-direction";
        }else{
            $standart_second_current_direction = "wkode-single-new-bikes-template-block__normal-direction";
        }
        ?>

        <section class="wkode-single-new-bikes-template-block <?php echo $standart_second_current_mode; echo " " . $standart_second_current_direction; ?>">
            <div class="wkode-single-new-bikes-template-block__wrapper">
                <div class="wkode-single-new-bikes-template-block__content">
                    <h2 class="wkode-single-new-bikes-template-block__title " data-entrance="grow"><?php echo $standart_second_title; ?></h2>
                    <div class="wkode-single-new-bikes-template-block__text"><?php echo $standart_second_description;?></div>
                    <?php
                        if($standart_btn){ ?>
                            <a href="#contato" class="wkode-btn wkode-btn--outline-blue" data-entrance="from-bottom" ><?= $standart_btn ?></a><?php
                        }
                    ?>
                </div>
                <div class="wkode-single-new-bikes-template-block__image wkode-single-new-bikes-template-block__image--second">
                    <a data-thumb-src="<?php echo $standart_second_img_url; ?>" data-fancybox="secondMainBlock" href="<?php echo $standart_second_img_url ?>" class="f-carousel__slide">
                        <img class="wkode-single-new-bikes-template-block__img" data-lazy-src="<?php echo $standart_second_img_url; ?>" src="<?php echo $standart_second_img_url ?>" alt="" srcset="">
                    </a>
                    <?php
                    if($standart_second_imgs) :
                        foreach ($standart_second_imgs as $image) : ?>
                            <?php $image_url = $image['sizes']['wkode_carousel_main_descriptor']; ?>
                            <a class="f-carousel__slide" data-thumb-src="<?php echo $image_url; ?>" data-fancybox="secondMainBlock" href="<?php echo $image_url; ?>">
                                <img class="wkode-single-used-bikes__img" data-lazy-src="<?php echo $image_url; ?>" src="<?php echo $image_url; ?>" />
                            </a>
                        <?php 
                        endforeach; 
                    endif;
                    ?>
                </div>
            </div>
        </section>

    </section>
<?php endif ?>