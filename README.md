# Mediawiki-IDSextension
A Mediawiki extension : Generate Unicode IDS to a new character image with meta data to resolve Chinese lacking characters.

#install
Add the line :
require_once( "/var/www/html/mediawiki/extensions/IDS/ids.php" );
#example
use tag "ids" in your mediawiki server like:
<pre><code><ids>⿺辶⿱⿱穴⿰月⿰⿱⿲長馬長刂心</ids><code></pre>