<?php
require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';


$processor_path = $modx->getOption('console.core_path', null, $modx->getOption('core_path').'components/console/').'processors/';

$modx->request->handleRequest(array(
    'processors_path' => $processor_path, 
    'location' => ''
));