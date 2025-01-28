<?php

class Khtt_Arfnts_Main {

    public function khtt_arfnts_run_main() {
        
        // Loads admin functions
        require_once KHTT_ARFNTS_PATH . 'admin/class-admin.php';
        $admin = new Khtt_Arfnts_Admin();
        $admin->khtt_arfnts_init();
        
        // Loads frontend functions
        require_once KHTT_ARFNTS_PATH . 'public/class-public.php';
        $public = new Khtt_Arfnts_Public();
        $public->khtt_arfnts_init();
    }
}
