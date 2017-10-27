<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Addresses
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

ClassLoader::addNamespaces(array
(
    'w3s\memberredirect',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'w3s\memberredirect\MemberRedirect' => 'system/modules/w3s_memberredirect/classes/MemberRedirect.php'
));
