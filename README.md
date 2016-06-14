# Mediawiki-IDSextension
A Mediawiki extension : Generate Unicode IDS to a new character image with meta data to resolve Chinese lacking characters.

#install
Add the line :
require_once( "/var/www/html/mediawiki/extensions/IDS/ids.php" );
#example
use tag "ids" in your mediawiki server like:

    <ids>⿺辶⿱⿱穴⿰月⿰⿱⿲長馬長刂心</ids> 
  
then you will get:
<https://tools.wmflabs.org/idsgen/%E2%BF%BA%E8%BE%B6%E2%BF%B1%E2%BF%B1%E7%A9%B4%E2%BF%B0%E6%9C%88%E2%BF%B0%E2%BF%B1%EF%95%9F%E2%BF%B2%E9%95%B7%E9%A6%AC%E9%95%B7%E5%88%82%E5%BF%83.png?%E5%AD%97%E9%AB%94=%E6%A5%B7%E9%AB%94>


