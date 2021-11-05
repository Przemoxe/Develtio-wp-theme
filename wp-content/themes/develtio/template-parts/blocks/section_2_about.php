<?php

/* Block Section 2 */
$textHeaderAbout = get_field('text_header_about')?: 'Wpisz tutaj nagłówek';
$TextHeader2About = get_field('text_header-2_about')?: 'Wpisz tutaj mały nagłówek';
$TextParagraphAbout = get_field('text_paragraph_about') ?: 'Wpisz tutaj treść';
$TextParagraph2About = get_field('text_paragraph2_about') ?: 'Wpisz tutaj treść';

?>

<section class="about-section">
    
    <div class="container-about" style="background-image: url(http://juniordeveltio.test/wp-content/uploads/2021/11/shutterstock_373266265.png);background-position:center; background-repeat: no-repeat;">
        <div class="container py-5 ">
            <div class="row gx-2" >
                <div class="col-xl-8 " >
                    <div class="d-flex flex-column justify-content-center" >
                        <div class="h-p-description">
                            <h1><?php echo $textHeaderAbout ?></h1>
                            <p><?php echo $TextHeader2About ?></p>
                        </div>
                        <div class="p-description">
                            <p><?php echo $TextParagraphAbout ?></p>
                            <p><?php echo $TextParagraph2About ?></p>
                        </div>
                        <div class="btn-about">
                            <input type="button" value="Zamów Ubiezpieczenie">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>