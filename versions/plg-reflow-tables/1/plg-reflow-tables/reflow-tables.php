<?php
#-------------------------------------------------------------
# Copyright (C) 2017 by wwwebweavers.com
# Homepage   : wwwebweavers.com
# Author     : Zach
# Email      : eventhisone@gmail.com
# Version    : 1.0.0
# License    : http://www.gnu.org/copyleft/gpl.html GNU/GPL
#-------------------------------------------------------------

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


$document = JFactory::getDocument();

// Parse reflow-tables.css to get the style we want to add to the document
$style = file_get_contents($baseurl.'plugins/content/reflow-tables/reflow-tables.css');

// Apply the style to the current document
$document->addStyleDeclaration($style);

// addStyleSheet is deprecated
//addStyleSheet($baseurl.'plugins/content/reflow-tables/reflow-tables.css');

?>
