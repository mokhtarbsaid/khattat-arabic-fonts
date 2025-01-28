<?php

class Khtt_Arfnts_Public {
    public  $elements = [ 'body', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' ];
    public function khtt_arfnts_init() {
        add_action('wp_enqueue_scripts', [$this, 'khtt_arfnts_enqueue_styles']);
    }

    public function khtt_arfnts_enqueue_styles() {

        $font_cdn_links = [
            // A letter
            'Amiri'                 => 'https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&display=swap',
            'Amiri Quran'           => 'https://fonts.googleapis.com/css2?family=Amiri+Quran&display=swap',
            'Alexandria'            => 'https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&display=swap',
            'Alkalami'              => 'https://fonts.googleapis.com/css2?family=Alkalami&display=swap',
            'Almarai'               => 'https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap',
            'Aref Ruqaa'            => 'https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&display=swap',
            'Aref Ruqaa Ink'        => 'https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@400;700&display=swap',
            
            // B letter
            'bahij'                 => 'https://www.fontstatic.com/f=bahij',
            'Baloo Bhaijaan 2'      => 'https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&display=swap',
            'Beiruti'               => 'https://fonts.googleapis.com/css2?family=Beiruti:wght@200..900&display=swap',

            // C letter
            'Cairo'                 => 'https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap',   
            'Cairo Play'                 => 'https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&display=swap',   
            'Changa'                => 'https://fonts.googleapis.com/css2?family=Changa:wght@400;700&display=swap',
            'cocon-next-arabic'     => 'http://www.fontstatic.com/f=cocon-next-arabic',
            
            // D letter
            'Droid Arabic Kufi'     => 'https://fonts.googleapis.com/earlyaccess/droidarabickufi.css',
            'dubai'                 => 'https://www.fontstatic.com/f=dubai,dubai-light,dubai-medium,dubai-bold',

            // E letter
            'El Messiri'            => 'https://fonts.googleapis.com/css?family=El+Messiri&display=swap',
            
            // F letter
            'Fustat'                => 'https://fonts.googleapis.com/css2?family=Fustat:wght@200..800&display=swap',
            
            // I letter
            'IBM Plex Sans Arabic'  => 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap',
            
            // H letter
            'Handjet'               => 'https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap',
            'Harmattan'             => 'https://fonts.googleapis.com/css2?family=Harmattan:wght@400;500;600;700&display=swap',
            
            // J letter
            'jazeera'               => 'https://www.fontstatic.com/f=jazeera,jazeera-light',
            'flat-jooza'            => 'https://www.fontstatic.com/f=flat-jooza',
            'jooza'                 => 'https://www.fontstatic.com/f=jooza',
            
            // k letter
            'Katibeh'               => 'https://fonts.googleapis.com/css2?family=Katibeh&display=swap',
            'Kufam'                 => 'https://fonts.googleapis.com/css2?family=Kufam:ital,wght@0,400..900;1,400..900&display=swap',
            
            // L letter
            'Lalezar'               => 'https://fonts.googleapis.com/css2?family=Lalezar&display=swap',
            'Lateef'                => 'https://fonts.googleapis.com/earlyaccess/lateef.css',
            'Lemonada'              => 'https://fonts.googleapis.com/css?family=Lemonada&display=swap',
            
            // M letter
            'Mada'                  => 'https://fonts.googleapis.com/css2?family=Mada:wght@200..900&display=swap',
            'Marhey'                => 'https://fonts.googleapis.com/css2?family=Marhey:wght@300..700&display=swap',
            'Markazi Text'          => 'https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400..700&display=swap',
            'Mirza'                 => 'https://fonts.googleapis.com/css2?family=Mirza:wght@400;500;600;700&display=swap',
            
            // N letter
            'Noto Kufi Arabic'      => 'https://fonts.googleapis.com/earlyaccess/notokufiarabic.css',
            'Noto Naskh Arabic'     => 'https://fonts.googleapis.com/earlyaccess/notonaskharabic.css',            
            'Noto Nastaliq Urdu'    => 'https://fonts.googleapis.com/earlyaccess/notonaskharabic.css',            
            'Noto Sans Arabic'      => 'https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Noto+Sans+Arabic:wght@100..900&display=swap',            
            
            // R letter
            'Rakkas'                => 'https://fonts.googleapis.com/css?family=Rakkas&display=swap',
            'Readex Pro'            => 'https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap',
            'Reem Kufi'             => 'https://fonts.googleapis.com/css2?family=Reem+Kufi:wght@400..700&display=swap',
            'Reem Kufi Fun'         => 'https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun:wght@400..700&display=swap',
            'Reem Kufi Ink'         => 'https://fonts.googleapis.com/css2?family=Reem+Kufi+Ink&display=swap',
            'Rubik'                 => 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap',
            'Ruwudu'                => 'https://fonts.googleapis.com/css2?family=Ruwudu:wght@400;500;600;700&display=swap',

            // S letter
            'Scheherazade New'      => 'https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;500;600;700&display=swap',
            'sky'                   => 'http://www.fontstatic.com/f=sky-bold,sky',

            // T letter
            'Tajawal'               => 'https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap',
            
            // V letter
            'Vazirmatn'             => 'https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100..900&display=swap',
            'Vibes'                 => 'https://fonts.googleapis.com/css2?family=Vibes&display=swap',
            // Z letter
            'Zain'                  => 'https://fonts.googleapis.com/css2?family=Zain:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,300;1,400&display=swap',

        ];

        foreach ($this->elements as $element) {
            $selected_font = get_theme_mod('khattat_arabic_' . $element . '_font', 'inherit');

            if ($selected_font !== 'inherit' && array_key_exists($selected_font, $font_cdn_links)) {

                wp_enqueue_style('khattat-font-' . $selected_font, $font_cdn_links[$selected_font], [], KHTT_ARFNTS_VERSION);
            }
        }        

        // Apply fonts in styles
        $inline_css = '';
        $body_font = get_theme_mod('khattat_arabic_body_font', 'inherit');

        foreach ($this->elements as $element) {
            $selected_font = get_theme_mod('khattat_arabic_' . $element . '_font', 'inherit') === "inherit" ? $body_font : get_theme_mod('khattat_arabic_' . $element . '_font', 'inherit');
            
            $inline_css .= $element . ' { font-family: "' . esc_attr($selected_font) . '" !important; } ';
        }

        wp_add_inline_style('khattat-font-' . $body_font, $inline_css);        
    }

}
