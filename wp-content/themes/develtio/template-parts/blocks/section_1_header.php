<?php

/* Block section 1 */
$textHeader = get_field('text_header') ?: 'Tutaj napisz nagłówek';
$textParagraph = get_field('text_paragraph') ?: 'tutaj napisz opis';
$textFormHeader = get_field('text_form_header') ?: 'tutaj wpisz nagłówek formularza';
$BackgroundImageHeader = get_field('background_image_header') ?: 'dodaj tło bannera';

?>

<section class="header-section">
    <div class="container-header" style="z-index:0; background-image: url(<?php echo $BackgroundImageHeader['url'] ?>);">
        <div class="image-overlay">
        </div>
        <div class="container">
            <div class="row gx-2" >
                <div class="col-xl-7 d-flex align-items-center" >
                    <div class="d-flex flex-column justify-content-end left-h-p">
                        <h1><?php echo $textHeader?></h1>
                        <p><?php echo $textParagraph ?></p>
                    </div>
                </div>
                <div class="d-none col-xl-5 d-xl-flex align-items-center">
                    <div class="bg-white col-form">
                        <p class="form-description"><?php echo $textFormHeader ?></p>
                            <?php echo do_shortcode('[contact-form-7 id="15" title="Form-2" html_id="contact-form-1234" html_class="form contact-form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        
   </div>
   <div class="container-header d-xl-none">
    <div class="container">
                <div class="row gx-2" >
                    <div class=" col-xl-5 d-flex d-xl-none align-items-center">
                        <div class="bg-white col-form w-100">
                            <p class="form-description"><?php echo $textFormHeader ?></p>
                                <?php echo do_shortcode('[contact-form-7 id="15" title="Form-2" html_id="contact-form-1234" html_class="form contact-form"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>