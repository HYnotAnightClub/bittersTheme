function bitters_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'bitters_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bitters_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'bitters_logo',
    ) ) );
}

add_action( 'customize_register', 'bitters_customize_register' );