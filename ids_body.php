<?php
/*
 * Author Shoichi Chou ( shoichi.chou@gmail.com )
*/

// 0614-2016 change server to https://tools.wmflabs.org/idsgen/
class IDS {
	static function onParserInit( Parser $parser ) {
		$parser->setHook( 'ids', [ __CLASS__, 'idsRender' ] );
		return true;
	}
	static function idsRender( $input, array $args, Parser $parser, PPFrame $frame ) {
	  /*
	  Example:
	  $ret ='<img alt="⿰電心" src="https://tools.wmflabs.org/idsgen/⿰電心.png?字體=宋體" width="16" height="16"  />';
	  */
	  $ret = '<img  align=middle alt=" ';
	  $ret .= $input;
	  $ret .= '" src="https://tools.wmflabs.org/idsgen/';
	  $ret .= $input;
	  $ret .= '.png?字體=宋體" style="height: 1em; width: 1em; vertical-align: middle; margin: 0.4em 0px 0.7em; "  />';
	  return $ret;
	}
}
