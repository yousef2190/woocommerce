<?php
/**
 * REST API Reports products controller
 *
 * Handles requests to the /reports/products endpoint.
 *
 * @package WooCommerce/API
 * @since   3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * REST API Reports products controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_Reports_Controller
 */
class WC_REST_Reports_Products_Controller extends WC_REST_Reports_Controller {

	/**
	 * Endpoint namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'wc/v3';

	/**
	 * Route base.
	 *
	 * @var string
	 */
	protected $rest_base = 'reports/products';
}