<?php
$wgAutoloadClasses['IDS'] = $IP . '/extensions/IDS/ids_body.php';
$wgHooks['ParserFirstCallInit'][] = 'IDS::onParserInit';
