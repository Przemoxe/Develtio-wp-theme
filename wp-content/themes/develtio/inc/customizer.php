<?php 
  
    function theme_customizer_function($wp_customize){
        $wp_customize->add_section('stopka', array(
            'title' => "Stopka",
            'priority' => 2,
            'description' => __('Edycja stopki'),
        ));

        //nr_kontaktowy_footer

        $wp_customize->add_setting('nr_contact', array(
            'default' => ''
        ));
        $wp_customize ->add_control('nr_contact', array(
            'label' => 'Numer kontaktowy',
            'section' => 'stopka'
        ));





    

}
  add_action('customize_register','theme_customizer_function');
?>