<?php 

/**
 * Plugin Name: Glyaxz Badges
 * Version: 0.1
 * Plugin URI: https://github.com/glyaxz
 * Description: Privides both widgets and shortcodes to help you display your Mozilla Backpack Widgets on your website
 * Author: Javier Garcia
 * Author URI: https://github.com/glyaxz
 */

$badge_url = WP_PLUGIN_URL . '/gly_badges/';
 function gly_badges_menu(){
    add_options_page(
        'Gly Badges Plugin',
        'Gly Badges',
        'manage_options',
        'gly-badges',
        'gly_badges_option_page'
    );
 }

 add_action( 'admin_menu', 'gly_badges_menu');

 function gly_badges_option_page(){
    if( !current_user_can('manage_options') ){
        wp_die('You do not have sufficient permissions to access this page');
    }

    global $badge_url;
    global $form_email;

    require 'inc/option-page-wrapper.php';
 }

 /**
  * 
  */
  
  if(isset($_POST['gly_form_submitted'])){
      $hidden_field = esc_html($_POST['gly_form_submitted']);

    if($hidden_field == 'yes'){
        $form_email = esc_html($_POST['gly_form_email']);

        $options['form_email'] = $form_email;
        $options['last_update'] = time();

        update_option('gly_badges', $options);
    }
}

    $options = get_option('gly_badges');
    if($options != ""){
        $form_email = $options['form_email'];
    }

 /**
  * Adding custom CSS
  */

  function gly_badges_styles(){
    wp_enqueue_style('gly_badges_styles', plugins_url('gly-badges/gly-badges.css'));
  }

  add_action('admin_head', 'gly_badges_styles');