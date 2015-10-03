<?php
class IDS {
	static function onParserInit( Parser $parser ) {
		$parser->setHook( 'ids', array( __CLASS__, 'idsRender' ) ); 
		return true;
	}
	static function idsRender( $input, array $args, Parser $parser, PPFrame $frame ) {

	  //$ret ='<img alt="⿴辶⿴宀⿱珤⿰隹⿰貝招" src="http://漢字.意傳.台灣/⿰電心.png?字體=楷體" width="16" height="16"  />';
	  $ret ='<img class="h1" align=bottom alt=" ';
	  $ret .=$input;
	  $ret .='" src="http://漢字.意傳.台灣/';
	  $ret .=$input;
	  $ret .='.png?字體=楷體" style="height: 1em; width: 1em"  />'; 
	  

	  /*
	  $ret ='<svg aria-labelledby="title" role="img">';
	  $ret .= '<use xlink:href="//漢字.意傳.台灣/';
	  $ret .=$input;
	  $ret .='.svg?字體=宋體">';
	  $ret .='<title>Umbrella</title>';
	  $ret .='   </use> </svg>'; */

		return $ret;
	}
}

