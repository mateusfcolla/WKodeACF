<div class="wkode-main-container" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/MainBackground.png') ?>);">

<section class="wkode-quem-somos py-48" id="quem-somos">
    <div class="container">
        <h1 class="text-7xl text-center font-bold text-white mb-20" data-entrance="grow">Sobre a ATF 6000 Pro</h1>
        <p class="text-2xl md:text-4xl text-center font-normal text-white mb-20 md:px-48 leading-normal whitespace-pre-line">
            Com a mesma excelência e qualidade de sua antecessora, a nova GTS 2.0 chega ao
            mercado com um design moderno e disponível em cinco cores vibrantes para embelezar
            e deixar sua oficina mais atual, além de facilitar o dia a dia aumentando a produtividade e
            agilidade no atendimento de seus clientes.

            Disponível nas cores azul royal, vermelha, verde bandeira, dourado e prata.

            Confira as nossas condições e garanta a sua!
        </p>
    </div>
</section>

<section class="wkode-secao-info py-48" id="secao-info-1">
    <div class="columns-1 md:columns-2">
        <div class="wkode-secao-info-image-container">
            <img src="<?php echo get_theme_file_uri('/assets/img/MAQUINA_1.png'); ?>" alt="Máquina 1">
        </div>
        <div class="wkode-secao-info-text-container p-20 pr-26">
            <h1 class="text-7xl text-center md:text-left font-bold text-white mb-20">Motivos para ter a sua ATF 6000 Pro</h1>
            <div class="flex flex-col gap-16">
                <div class="flex flex-col items-center md:items-start md:flex-row gap-2">
                    <img src="<?php echo get_theme_file_uri('/assets/img/svg/logo-icon.svg'); ?>" class="w-24 mr-6" alt="ACF Icon">
                    <p class="text-2xl md:text-5xl text-center md:text-left font-regular text-white">Com a mesma excelência e qualidade de sua antecessora, a nova GTS 2.0 chega ao
            mercado com um design moderno e disponível em cinco cores vibrantes para embelezar</p>
                </div>
                <div class="flex flex-col items-center md:items-start md:flex-row gap-2">
                    <img src="<?php echo get_theme_file_uri('/assets/img/svg/logo-icon.svg'); ?>" class="w-24 mr-6" alt="ACF Icon">
                    <p class="text-2xl md:text-5xl text-center md:text-left font-regular text-white">e deixar sua oficina mais atual, além de facilitar o dia a dia aumentando a produtividade e
            agilidade no atendimento de seus clientes.</p>
                </div>
                <div class="flex flex-col items-center md:items-start md:flex-row gap-2">
                    <img src="<?php echo get_theme_file_uri('/assets/img/svg/logo-icon.svg'); ?>" class="w-24 mr-6" alt="ACF Icon">
                    <p class="text-2xl md:text-5xl text-center md:text-left font-regular text-white">Disponível nas cores azul royal, vermelha, verde bandeira, dourado e prata.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wkode-instagram-embed py-48" id="instagram-embed">
    <div class="container">
        <h1 class="text-7xl text-center font-bold text-white mb-20" data-entrance="grow">Siga a ATF 6000 Pro</h1>
            <?php echo do_shortcode('[insta-gallery id="0"]'); ?>
    </div>
</section>

<?php
    get_template_part('./template-parts/blocks/wkode-testimonial');
?>

</div>

<?php

    get_template_part('./template-parts/blocks/wkode-contact');
?>