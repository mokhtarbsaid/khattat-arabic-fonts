jQuery(document).ready(function ($) {
  // activate Select2 library to all fonts selectboxes
  $(
    "#customize-control-khattat_arabic_body_font_control select, #customize-control-khattat_arabic_h1_font_control select, #customize-control-khattat_arabic_h2_font_control select, #customize-control-khattat_arabic_h3_font_control select, #customize-control-khattat_arabic_h4_font_control select, #customize-control-khattat_arabic_h5_font_control select, #customize-control-khattat_arabic_h6_font_control select"
  ).select2({
    placeholder: "Select a font",
    allowClear: true,
  });
  
});
