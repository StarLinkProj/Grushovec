 <?php
/**
 * @package     Joomla.Platform
 * @subpackage  GitHub
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

use Joomla\Registry\Registry;

/**
 * HTTP client class for connecting to a GitHub instance.
 *
 * @since  11.3
 */
class JGithubHttp extends JHttp
{
	/**
	 * @const  integer  Use no authentication for HTTP connections.
	 * @since  11.3
	 */
	const AUTHENTICATION_NONE = 0;

	/**
	 * @const  integer  Use basic authentication for HTTP connections.
	 * @since  11.3
	 */
	const AUTHENTICATION_BASIC = 1;

	/**
	 * @const  integer  Use OAuth authentication for HTTP connections.
	 * @since  11.3
	 */
	const AUTHENTICATION_OAUTH = 2;

	/**
	 * Constructor.
	 *
	 * @param   Registry        $options    Client options object.
	 * @param   JHttpTransport  $transport  The HTTP transport object.
	 *
	 * @since   11.3
	 */
	public function __construct(Registry $options = null, JHttpTransport $transport = null)
	{
		// Call the JHttp constructor to setup the object.
		parent::__construct($options, $transport);

		// Make sure the user agent string is defined.
		$this->options->def('userAgent', 'JGitHub/2.0');

		// Set the default timeout to 120 seconds.
		$this->options->def('timeout', 120);
	}
}