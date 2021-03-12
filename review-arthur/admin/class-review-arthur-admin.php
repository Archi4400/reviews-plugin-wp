<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    review_arthur
 * @subpackage review_arthur/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    review_arthur
 * @subpackage review_arthur/admin
 * @author     Your Name <email@example.com>
 */
class review_arthur_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $review_arthur    The ID of this plugin.
	 */
	private $review_arthur;

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
	 * @param      string    $review_arthur       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $review_arthur, $version ) {

		$this->review_arthur = $review_arthur;
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
		 * defined in review_arthur_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The review_arthur_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->review_arthur, plugin_dir_url( __FILE__ ) . 'css/review-arthur-admin.css', array(), $this->version, 'all' );

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
		 * defined in review_arthur_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The review_arthur_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->review_arthur, plugin_dir_url( __FILE__ ) . 'js/review-arthur-admin.js', array( 'jquery' ), $this->version, false );

	}

}
