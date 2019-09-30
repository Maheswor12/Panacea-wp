<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Option',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Theme Options  <small>Iceberg Technology</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// for header
$options[]      = array(
  'name'        => 'header',
  'title'       => 'Header',
  'icon'        => 'fa fa-header',

      'fields'    => array(

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'This alows you to enter top header text',
        ),
        array(
          'id'    => 'header_text',
          'type'  => 'text',
          'title' => 'Top text',
          'desc'  => 'This alows you to enter top header text',
        ),
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'This allows you to enter headero logo and favicon icon',
        ),
          array(
          'id'    => 'header_logo1',
          'type'  => 'image',
          'title' => 'Logo',
          'desc'  => 'This allows you to upload/edit logo.',
        ),
    
        array(
          'id'    => 'favicon',
          'type'  => 'image',
          'title' => 'Favicon',
          'desc'  => 'This allow you to add favicon of your website.',
        ),
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'STICKY HEADER',
        ),

        array(
          'id'      => 'sticky_header',
          'type'    => 'switcher',
          'title'   => 'STICKY',
          'label'    => 'This allow you to show or hide Scroll top button',
        ),
        // end: a field
      ), // end: fields
);
$options[]      = array(
  'name'        => 'general-setting',
  'title'       => 'General Setting',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
          'id'      => 'scroll_to_top',
          'type'    => 'switcher',
          'title'   => 'Show Scroll Top',
          'label'    => 'This allow you to show or hide Scroll top button',
          'default' => true,
        ),
    // end: a field
    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'This alows you to enter message from the director',
    ),
    
  array(
      'id'       => 'message_title',
      'type'     => 'text',
      'title'    => 'Message Title',
      'info'     => 'This allows you to enter your shop Mesage Title',
    ),

    array(
      'id'       => 'message_note',
      'type'     => 'textarea',
      'title'    => 'Message Note',
      'info'     => 'This allows you to enter your shop Message Note',
    ),
    array(
      'id'       => 'message_image',
      'type'     => 'image',
      'title'    => 'Image',
      'info'     => 'This allows you to enter image',
    ),
    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'This alows you to enter history of your company',
    ),
    array(
      'id'       => 'history_question',
      'type'     => 'textarea',
      'title'    => 'History Content',
      'info'     => 'This allows you to enter history content',
    ),
    array(
      'id'       => 'history_image',
      'type'     => 'image',
      'title'    => 'History Image',
      'info'     => 'This allows you to enter history image',
    ),
    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'This alows you to enter Panacea Educations Success Rates',
    ),
    array(
      'id'       => 'success_Text',
      'type'     => 'textarea',
      'title'    => 'Panacea Educations Success Rates',
      'info'     => 'This allows you to enter Panacea Educations Success Rates',
    ),
    array(
      'id'       => 'success_image',
      'type'     => 'image',
      'title'    => 'Panacea Educations Success Rates images',
      'info'     => 'This allows you to enter Panacea Educations Success Rates',
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'This alows you to enter Japanese Language Course Description',
    ),
    array(
      'id'       => 'course',
      'type'     => 'textarea',
      'title'    => 'Japanese Language Course Content',
      'info'     => 'This allows you to enter japanese language course content',
    ),
    array(
      'id'       => 'course1',
      'type'     => 'text',
      'title'    => 'first japanese language course list',
      'info'     => 'This allows you to enter first japanese language course list',
    ),
    array(
      'id'       => 'course2',
      'type'     => 'text',
      'title'    => 'second japanese language course list',
      'info'     => 'This allows you to enter second japanese language course list',
    ),
    array(
      'id'       => 'course3',
      'type'     => 'text',
      'title'    => 'third japanese language course list',
      'info'     => 'This allows you to enter third japanese language course list',
    ),
    array(
      'id'       => 'course4',
      'type'     => 'text',
      'title'    => 'fourth japanese language course list',
      'info'     => 'This allows you to enter fourth japanese language course list',
    ),
    array(
      'id'       => 'course5',
      'type'     => 'text',
      'title'    => 'fifth japanese language course list',
      'info'     => 'This allows you to enter fifth japanese language course list',
    ),

  ), // end: fieldsnav 
);

// ------------------------------
// a option section with tabs   -
// ------------------------------


// begin: Top Bar options     -
    // -----------------------------
$options[]      = array(
  'name'      => 'contact-info',
  'title'     => 'Header Contact Details',
  'icon'      => 'fa fa-phone',
  'fields'    => array(

    
    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Top Bar Phone Number Section',
    ),
    
    array(
      'id'       => 'header_countrycode',
      'type'     => 'number',
      'title'    => 'Country Code',
      'info'     => 'This allows you to country code to your phone number',
      'attributes'    => array(
        'placeholder' => 'Eg. +41'
      ),
    ),
    array(
      'id'       => 'header_phone',
      'type'     => 'text',
      'title'    => 'Phone Number',
      'info'     => 'This allows you to enter your shop phone number',
      'attributes'    => array(
        'placeholder' => 'Phone Number'
      ),
    ),

    array(
      'id'       => 'office_phone',
      'type'     => 'text',
      'title'    => 'Office Number',
      'info'     => 'This allows you to enter your shop office number',
      'attributes'    => array(
        'placeholder' => 'Office Number'
      ),
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Header  Address Section',
    ),


    array(
      'id'       => 'header_address',
      'type'     => 'text',
      'title'    => 'Address',
      'info'     => 'This allows you to enter your  Address',
      'attributes'    => array(
        'placeholder' => 'Address'
      ),
    ),

     array(
      'id'       => 'header_subaddress',
      'type'     => 'text',
      'title'    => 'Sub Address',
      'info'     => 'This allows you to enter your Sub Address',
      'attributes'    => array(
        'placeholder' => 'sub address'
      )
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Header Email Address Section',
    ),
    array(
      'id'       => 'header_email',
      'type'     => 'text',
      'title'    => 'Email',
      'info'     => 'This allows you to enter your shop Email Address',
      'attributes'    => array(
        'placeholder' => 'Email'
      ),


array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Welcome Note Section',
    ),
     array(
      'id'       => 'welcome_note',
      'type'     => 'textarea',
      'title'    => 'Welcome Note',
      'info'     => 'This allows you to enter your welcome Note',
      'attributes'    => array(
        'placeholder' => 'welcome note'
      ),
    ),
    ),
  ),
);

// // -----------------------------
// // begin: Menu Bar options     -
// // -----------------------------
// $options[]    =   array(
//   'name'      => 'navigation_menu',
//   'title'     => 'Nav Menu Bar',
//   'icon'      => 'fa fa-medium',
//   'fields'    => array(

//     // begin: a field
//     array(
//       'id'      => 'navmenu_background',
//       'type'    => 'color_picker',
//       'title'   => 'Navigation Menu Background Color',
//       'info'   => 'This allow you to Add color to your Nav-Menu background.',
//       //'rgba'    => false,
//       //'default' => '#fff',
//     ),
//     // begin: a field
//     array(
//       'id'      => 'navmenu_color',
//       'type'    => 'color_picker',
//       'title'   => 'Navigation Menu Text Color',
//       'info'   => 'This allow you to Add color to your Nav-Menu Text.',
//       //'rgba'    => false,
//       'default' => '#fff',
//     ),
//   ),
// ); // end: checkbox options


// // begin: Slider Image options     -
//     // -----------------------------
    $options[]      = array(
      'name'      => 'image-slider',
      'title'     => 'Image Slider',
      'icon'      => 'fa fa-image',
      'fields'    => array(
    
        
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Image Slider Upload Section',
        ),
        array(
          'id'        => 'slider1',
          'type'      => 'image',
          'title'     => 'Image Slider 1',
          'add_title' => 'Upload Image',
        ),
        
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Image Slider Upload Section',
        ),
        array(
          'id'        => 'slider2',
          'type'      => 'image',
          'title'     => 'Image Slider 2',
          'add_title' => 'Upload Image',
        ),
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Image Slider Upload Section',
        ),
        array(
          'id'        => 'slider3',
          'type'      => 'image',
          'title'     => 'Image Slider 3',
          'add_title' => 'Upload Image',
        ),
      ),
    );

// // begin: Top Bar options     -
//     // -----------------------------
// $options[]      = array(
//   'name'      => 'contact-us',
//   'title'     => 'Contact Us',
//   'icon'      => 'fa fa-address-card',
//   'fields'    => array(

    
//     array(
//       'type'    => 'notice',
//       'class'   => 'info',
//       'content' => 'Shop Address Section',
//     ),
//     array(
//       'id'      => 'contact-address',
//       'type'    => 'icon',
//       'title'   => 'Icon',
//       'default' => 'fa fa-map-marker',
//     ),

//     array(
//       'id'       => 'address',
//       'type'     => 'text',
//       'title'    => 'Address',
//       'info'     => 'This allows you to enter your shop Address',
//       'attributes'    => array(
//         'placeholder' => 'Address'
//       ),
//     ),

//     array(
//       'type'    => 'notice',
//       'class'   => 'info',
//       'content' => 'Shop Phone Number Section',
//     ),
//     array(
//       'id'      => 'contact-phone',
//       'type'    => 'icon',
//       'title'   => 'Icon',
//       'default' => 'fa fa-phone',
//     ),

//     array(
//       'id'       => 'country-code',
//       'type'     => 'number',
//       'title'    => 'Country Code',
//       'info'     => 'This allows you to enter your Country Code',
//       'validate' => 'numeric',
//       'attributes'    => array(
//         'placeholder' => '977'
//       )
//     ),

//     array(
//       'id'       => 'phone',
//       'type'     => 'text',
//       'title'    => 'Phone Number',
//       'info'     => 'This allows you to enter your shop phone number',
//       'attributes'    => array(
//         'placeholder' => 'Phone Number'
//       ),
//     ),

//     array(
//       'type'    => 'notice',
//       'class'   => 'info',
//       'content' => 'Shop Email Address Section',
//     ),
//     array(
//       'id'      => 'contact-email',
//       'type'    => 'icon',
//       'title'   => 'Icon',
//       'default' => 'fa fa-envelope',
//     ),

//     array(
//       'id'       => 'email-address',
//       'type'     => 'text',
//       'title'    => 'Email',
//       'info'     => 'This allows you to enter your shop Email Address',
//       'attributes'    => array(
//         'placeholder' => 'Email'
//       ),
//     ),

//     array(
//       'type'    => 'notice',
//       'class'   => 'info',
//       'content' => 'Shop Website URL Section',
//     ),
//     array(
//       'id'      => 'contact-website',
//       'type'    => 'icon',
//       'title'   => 'Icon',
//       'default' => 'fa fa-globe',
//     ),

//     array(
//       'id'       => 'website-url',
//       'type'     => 'text',
//       'title'    => 'Website URL',
//       'info'     => 'This allows you to enter your Website URL',
//       'attributes'    => array(
//         'placeholder' => 'Website URL'
//       ),
//     ),
//   ),
// );


// begin: Top Bar options     -
    // -----------------------------
$options[]      = array(
  'name'      => 'footer',
  'title'     => 'Footer and Social',
  'icon'      => 'fa fa-copyright',
  'fields'    => array(

    
    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Footer Copyright Section',
    ),
    array(
      'id'       => 'copyright',
      'type'     => 'textarea',
      'title'    => 'Footer Copyright',
      'info'     => 'This allows you to enter your copyright text.',
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Social Icons Section',
    ),
    
    array(
      'id'       => 'facebook',
      'type'     => 'text',
      'title'    => 'Facebook',
      'info'     => 'Copy Facebook Link and Paste it here.',
      'attributes'    => array(
        'placeholder' => 'Web URL'
      ),
    ),
    array(
      'id'       => 'twitter',
      'type'     => 'text',
      'title'    => 'Twitter',
      'info'     => 'Copy Twitter Link and Paste it here.',
      'attributes'    => array(
        'placeholder' => 'Web URL'
      ),
    ),
    array(
      'id'       => 'plus-linkdln',
      'type'     => 'text',
      'title'    => 'linkdln',
      'info'     => 'Copy linkdln Link and Paste it here.',
      'attributes'    => array(
        'placeholder' => 'Web URL'
      ),
    ),
    array(
      'id'       => 'instagram',
      'type'     => 'text',
      'title'    => 'instagram',
      'info'     => 'Copy instagram Link and Paste it here.',
      'attributes'    => array(
        'placeholder' => 'Web URL'
      ),
    ),
  ),
);


CSFramework::instance( $settings, $options );