<?php
/*
Plugin Name: Ibinex Forms
Description: Simplified clone of Caldera Forms plugin.
Version:     1.0.0
Author:      Joel Simpao
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( !defined('ABSPATH') ) {
    exit();
}

class Ibinex_Forms
{
    public function __construct() {

        // add_action( 'admin_enqueue_scripts', array($this, 'enqueue_scripts_and_styles') );
        add_action( 'init', array($this, 'display_plugin_menu') );
        add_action( 'enqueue_admin_scripts', array($this, 'enqueue_admin_scripts') );
        add_action( 'enqueue_admin_styles', array($this, 'enqueue_admin_styles') );

        register_activation_hook( __FILE__, array($this, 'activate_plugin') );
        register_deactivation_hook( __FILE__, array($this, 'deactivate_plugin') );
    }

    public function display_plugin_menu() {
        add_menu_page( 'Ibinex Forms', 'Ibinex Forms', 'manage_options', 'ibinex-forms', array($this, 'display_forms'), 'dashicons-feedback', '42.88' );
    }

    public function enqueue_admin_scripts() {
        wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css', array(), '4.1.0' );
        wp_enqueue_style( 'ibinex-forms-admin-style', plugins_url('ibinex-forms-admin.css', __FILE__) );
    }

    public function enqueue_admin_styles() {
        wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array('jquery'), '1.14.0', true );
        wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array('jquery'), '4.1.0', true );
        wp_enqueue_script( 'ibinex-forms-admin-script', plugins_url('ibinex-forms-admin.js', __FILE__) );
    }

    public function activate_plugin() {

    }

    public function deactivate_plugin() {

    }

    public function display_forms() {
        do_action( 'enqueue_admin_scripts' );
        do_action( 'enqueue_admin_styles' );
        require( 'ibinex-forms-home.php' );
    }
}

$ibinex_forms = new Ibinex_Forms;
