<?php
defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';
$apikey=$params->get('key');
$publicaciones= modIssuuListHelper::getPublicationsList($apikey);



require JModuleHelper::getLayoutPath('mod_issuu_list', $params->get('layout','default'));