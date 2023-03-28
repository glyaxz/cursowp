
<?php
/**
 * Plugin Name: Single Post Meta Manager
 * Plugin URL: https://github.com/glyaxz 
 * Description: Single POst Meta Manager display you meta data associated
 * Author: Glyaxz
 * Author URI: https://github.com/glyaxz 
 */

 if( !defined ( 'WPINC' ) ){
    die;
 }
 
 class Single_Post_Meta_Manager{
    protected $loader;
    protected $plugin_slug;
    protected $version;

    public function __construct(){
        $this->plugin_slug = 'single-post-meta-manager-slug';
        $this->version = '0.1.0';
    }

    public function load_dependencies(){

    }

    public function define_admin_hooks(){

    }

    public function run(){

    }

    public function get_version(){

    }
}