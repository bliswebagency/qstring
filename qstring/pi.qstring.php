<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */
 
// ------------------------------------------------------------------------

/**
 * Qstring Plugin
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Blis Web Agency
 * @link		http://blis.net.au
 */

$plugin_info = array(
	'pi_name'		=> 'Qstring',
	'pi_version'	=> '1.0',
	'pi_author'		=> 'Blis Web Agency',
	'pi_author_url'	=> 'http://blis.net.au',
	'pi_description'=> 'This will return a query string value',
	'pi_usage'		=> Qstring::usage()
);


class Qstring {

	public $return_data;
    
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->EE =& get_instance();
		
	}
	
	public function load(){
		
		$name = $this->EE->TMPL->fetch_param('name');

		if (isset($_REQUEST[$name])){
		    return $_REQUEST[$name];
		} else {
			return "";			
		}
		
	}
	
	// ----------------------------------------------------------------
	
	/**
	 * Plugin Usage
	 */
	public static function usage()
	{
		ob_start();
?>

First up, read this: http://expressionengine.com/archived_forums/viewthread/99139/

Ok, now you're back, you'll want to get the values in your query strings and use them like segments. Here's how:

1. Create a URL like http://cool.com/stuff?how=cool
2. Now to get the value of "how" you do this:

{exp:qstring name="how"}

This will then return "cool"

Cool?
<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	}
}


/* End of file pi.qstring.php */
/* Location: /system/expressionengine/third_party/qstring/pi.qstring.php */