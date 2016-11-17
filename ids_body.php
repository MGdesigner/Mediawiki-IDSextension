<?php
/*
 * @author Shoichi Chou ( shoichi.chou@gmail.com )
 */

// 0614-2016 change server to https://tools.wmflabs.org/idsgen/
class IDS {
	static function onParserInit( Parser $parser ) {
		$parser->setHook( 'ids', [ __CLASS__, 'idsRender' ] );
		return true;
	}
	/*
	 * This method handles IDS tags.
	 *
	 * <ids>⿰電心</ids> ->
	 * 	<img align=middle class="ids-char" src="https://tools.wmflabs.org/idsgen/⿰電心.svg?字體=宋體" ...>
	 *
	 * <ids font=楷體粗體>⿰電心</ids> ->
	 * 	<img align=middle class="ids-char" src="https://tools.wmflabs.org/idsgen/⿰電心.svg?字體=楷體粗體" ...>
	 *
	 * @see https://www.mediawiki.org/wiki/Manual:Tag_extensions
	 */
	static function idsRender( $input, array $args, Parser $parser, PPFrame $frame ) {
		// Support for Simplified "體" (font)
		$font = isset($args['font']) ? strtr($args['font'] , '体', '體') : '宋體';
		
		$ret = '<img align=middle class="ids-char" ';
		$ret .= 'alt="' . $input . '" ';
		$ret .= 'src="https://tools.wmflabs.org/idsgen/' . urlencode($input) . '.svg?字體=' . urlencode($font) . '" ';
		$ret .= 'onerror="this.src = this.src.replace(\'.svg?字體=\', \'.png?字體=\')" '; // png 回退
		$ret .= 'style="height: 1em; width: 1em; vertical-align: middle; margin: 0.4em 0px 0.7em; " />';
		return $ret;
	}
}
