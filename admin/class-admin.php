<?php

class Khtt_Arfnts_Admin {
    
    public  $elements = [ 'body', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' ];
    
    public function khtt_arfnts_init() {
        add_action('customize_register', [$this, 'khtt_arfnts_register_customizer_settings']);
        
        // Load more CSS and JS files to customizer.
        add_action('customize_controls_enqueue_scripts', [$this, 'khtt_arfnts_enqueue_customizer_assets']);
    }

    public function khtt_arfnts_register_customizer_settings($wp_customize) {
        
        // Add a new section
        $wp_customize->add_section('khattat_arabic_section', [
            'title'             => 'Khattat Arabic Fonts',
            'priority'          => 10,
            'active_callback'   => '__return_true',
        ]);

        $arabic_fonts_choices = [
                'inherit'              => __( 'Inherit', 'khattat-arabic-fonts' ),
                'Amiri'                => __( 'Amiri', 'khattat-arabic-fonts' ),
                'Amiri Quran'          => __( 'Amiri Quran', 'khattat-arabic-fonts' ),
                'Alexandria'           => __( 'Alexandria', 'khattat-arabic-fonts' ),
                'Alkalami'             => __( 'Alkalami', 'khattat-arabic-fonts' ),
                'Almarai'              => __( 'Almarai', 'khattat-arabic-fonts' ),
                'Aref Ruqaa'           => __( 'Aref Ruqaa', 'khattat-arabic-fonts' ),
                'Aref Ruqaa Ink'       => __( 'Aref Ruqaa Ink', 'khattat-arabic-fonts' ),
                'bahij'                => __( 'Bahij', 'khattat-arabic-fonts' ),
                'Baloo Bhaijaan 2'     => __( 'Baloo Bhaijaan 2', 'khattat-arabic-fonts' ),
                'Beiruti'              => __( 'Beiruti', 'khattat-arabic-fonts' ),
                'Cairo'                => __( 'Cairo', 'khattat-arabic-fonts' ),
                'Cairo Play'           => __( 'Cairo Play', 'khattat-arabic-fonts' ),
                'Changa'               => __( 'Changa', 'khattat-arabic-fonts' ),
                'cocon-next-arabic'    => __( 'Cocon', 'khattat-arabic-fonts' ),
                'Droid Arabic Kufi'    => __( 'Droid Arabic Kufi', 'khattat-arabic-fonts' ),
                'dubai'                => __( 'Dubai', 'khattat-arabic-fonts' ),
                'El Messiri'           => __( 'El Messiri', 'khattat-arabic-fonts' ),
                'Fustat'               => __( 'Fustat', 'khattat-arabic-fonts' ),
                'Handjet'              => __( 'Handjet', 'khattat-arabic-fonts' ),
                'Harmattan'            => __( 'Harmattan', 'khattat-arabic-fonts' ),
                'IBM Plex Sans Arabic' => __( 'IBM Plex Sans Arabic', 'khattat-arabic-fonts' ),
                'jazeera'              => __( 'Al Jazeera', 'khattat-arabic-fonts' ),
                'jooza'                => __( 'Jozoor', 'khattat-arabic-fonts' ),
                'Katibeh'              => __( 'Katibeh', 'khattat-arabic-fonts' ),
                'Kufam'                => __( 'Kufam', 'khattat-arabic-fonts' ),
                'flat-jooza'           => __( 'JF Flat Font', 'khattat-arabic-fonts' ),
                'Lalezar'              => __( 'Lalezar', 'khattat-arabic-fonts' ),
                'Lateef'               => __( 'Lateef', 'khattat-arabic-fonts' ),
                'Lemonada'             => __( 'Lemonada', 'khattat-arabic-fonts' ),
                'Mada'                 => __( 'Mada', 'khattat-arabic-fonts' ),
                'Marhey'               => __( 'Marhey', 'khattat-arabic-fonts' ),
                'Markazi Text'         => __( 'Markazi Text', 'khattat-arabic-fonts' ),
                'Mirza'                => __( 'Mirza', 'khattat-arabic-fonts' ),
                'Noto Kufi Arabic'     => __( 'Noto Kufi Arabic', 'khattat-arabic-fonts' ),
                'Noto Naskh Arabic'    => __( 'Noto Naskh Arabic', 'khattat-arabic-fonts' ),
                'Noto Nastaliq Urdu'   => __( 'Noto Nastaliq Urdu', 'khattat-arabic-fonts' ),
                'Noto Sans Arabic'     => __( 'Noto Sans Arabic', 'khattat-arabic-fonts' ),
                'Rakkas'               => __( 'Rakkas', 'khattat-arabic-fonts' ),
                'Readex Pro'           => __( 'Readex Pro', 'khattat-arabic-fonts' ),
                'Reem Kufi'            => __( 'Reem Kufi', 'khattat-arabic-fonts' ),
                'Reem Kufi Fun'        => __( 'Reem Kufi Fun', 'khattat-arabic-fonts' ),
                'Reem Kufi Ink'        => __( 'Reem Kufi Ink', 'khattat-arabic-fonts' ),
                'Rubik'                => __( 'Rubik', 'khattat-arabic-fonts' ),
                'Ruwudu'               => __( 'Ruwudu', 'khattat-arabic-fonts' ),    
                'Scheherazade New'     => __( 'Scheherazade New', 'khattat-arabic-fonts' ),
                'sky'                  => __( 'Sky', 'khattat-arabic-fonts' ),
                'Tajawal'              => __( 'Tajawal', 'khattat-arabic-fonts' ),
                'Vazirmatn'            => __( 'Vazirmatn', 'khattat-arabic-fonts' ),
                'Vibes'                => __( 'Vibes', 'khattat-arabic-fonts' ),
                'Zain'                 => __( 'Zain', 'khattat-arabic-fonts' ),
        ];

        foreach ($this->elements as $element) {
            // Add a setting for Global font
            $wp_customize->add_setting('khattat_arabic_' . $element . '_font', [
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'sanitize_callback' => [$this, 'khtt_arfnts_sanitize_font_choice'],
                'default'           => 'Inherit',

            ]);

            // Add a control (dropdown) for Global font
            $wp_customize->add_control('khattat_arabic_' . $element . '_font_control', [
                'label'    => ucfirst($element) .' '. __('Font', 'khattat-arabic-fonts'),
                'section'  => 'khattat_arabic_section',
                'settings' => 'khattat_arabic_' . $element . '_font',
                'type'     => 'select',
                'choices'  =>$arabic_fonts_choices,
            ]);
        }

    }

    public function khtt_arfnts_sanitize_font_choice($input) {
        
        $valid_fonts = ['inherit', 'Amiri', 'Amiri Quran', 'Alexandria', 'Alkalami', 'Almarai', 'Aref Ruqaa', 'Aref Ruqaa Ink', 'bahij', 'Baloo Bhaijaan 2', 'Beiruti', 'Cairo', 'Cairo Play', 'Changa', 'cocon-next-arabic', 'Droid Arabic Kufi', 'dubai', 'El Messiri', 'Fustat', 'IBM Plex Sans Arabic', 'Handjet', 'Harmattan', 'jazeera', 'flat-jooza', 'jooza', 'Lalezar', 'Lateef', 'Lemonada', 'Mada', 'Marhey', 'Markazi Text', 'Mirza', 'Noto Kufi Arabic', 'Noto Naskh Arabic', 'Noto Nastaliq Urdu', 'Noto Sans Arabic', 'Rakkas', 'Readex Pro', 'Reem Kufi', 'Reem Kufi Fun', 'Reem Kufi Ink', 'Rubik', 'Ruwudu', 'Kufam', 'sky', 'Scheherazade New', 'Tajawal', 'Vazirmatn', 'Vibes', 'Zain'];
        return in_array($input, $valid_fonts, true) ? $input : 'Cairo';
    }

    public function khtt_arfnts_enqueue_customizer_assets() {
            
        // Load admin CSS files.
            wp_enqueue_style(
                'khtt-arfnts-select2-style',
                KHTT_ARFNTS_URL . 'admin/assets/css/select2.min.css',
                [],
                KHTT_ARFNTS_VERSION
            );

            // Load admin JS files.
            wp_enqueue_script(
                'khtt-arfnts-select2-script',
                KHTT_ARFNTS_URL . 'admin/assets/js/select2.min.js',
                ['jquery'],
                KHTT_ARFNTS_VERSION,
                true 
            );

            wp_enqueue_script(
                'khtt-arfnts-select2-init',
                KHTT_ARFNTS_URL . 'admin/assets/js/select2-init.js',
                ['jquery'],
                KHTT_ARFNTS_VERSION,
                true 
            );
            
            
    }    
    

}
