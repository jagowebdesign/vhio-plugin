<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://web101.co.id
 * @since      1.0.0
 *
 * @package    Vhio_Plug
 * @subpackage Vhio_Plug/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Vhio_Plug
 * @subpackage Vhio_Plug/admin
 * @author     Gandhi <vhiolite@gmail.com>
 */
class Vhio_Plug_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Vhio_Plug_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Vhio_Plug_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/vhio-plug-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Vhio_Plug_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Vhio_Plug_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/vhio-plug-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * custom menu
	 *
	 * @since    1.0.0
	 */
	public function vhio_admin_menu(){
		add_menu_page( 
			'Vhio Plugin Settings', 
			'Vhio', 
			'manage_options', 
			'mainsettings.php', 
			array($this, 'vhio_admin_page'),
			'dashicons-tickets', 
			250 );
		add_submenu_page( 
			'mainsettings.php',
			'Sub Setting Vhio',
			'SubVhio',
			'manage_options',
			'subsettings.php',
			array($this, 'vhio_admin_sub_page')
		 );
	}

	public function vhio_admin_page(){
		require_once 'partials/vhio-plug-admin-display.php';
	}
	
	public function vhio_admin_sub_page(){
		require_once 'partials/submenu-page.php';

	}

}
