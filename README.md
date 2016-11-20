Mediawiki-IDSextension
======================

[![beta-rel](https://img.shields.io/badge/release-beta-yellow.svg)](https://www.mediawiki.org/wiki/Extension:Ids)

A MediaWiki extension that builds images of unencoded CJKV ideographs from Unicode IDS.

Installation
------------
Add the following line to `LocalSettings.php`:

```PHP
wfLoadExtension( 'Ids' );
```

Example
-------

use tag "ids" in your mediawiki server like:

    <ids>⿺辶⿱⿱穴⿰月⿰⿱⿲長馬長刂心</ids> 
  
then you will get:
```
https://tools.wmflabs.org/idsgen/⿺辶⿱⿱穴⿰月⿰⿱⿲長馬長刂心.png?字體=楷體
```

<!-- UTF-8 -->
