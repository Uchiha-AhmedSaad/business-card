<?php
//setting to no time limit,

//declaring class instance
include("./sitemap.class.php");
$sitemap = new sitemap();

//optionally set proxy server name and port or ip and port
//comment-out or set to an empty string to disable proxy use
//$sitemap->set_proxy('10.1.1.1:8080');

//setting rules to ignore URLs which contains these substrings
$sitemap->set_ignore(array("javascript:", ".css", ".js", ".ico", ".jpg", ".png", ".jpeg", ".swf", ".gif"));

//parsing one page and gathering links
$sitemap->get_links("http://batawen.com");

//parsing other page and gathering links
//$sitemap->get_links("http://cms.annar2r.info");

//return URL list as array
//$arr = $sitemap->get_array();

//echo "<pre>";
//print_r($arr);
//echo "</pre>";

//header ("content-type: text/xml"); // i disabel it
//generating sitemap
$map = $sitemap->generate_sitemap_file();

//submitting site map to Google, Yahoo, Bing, Ask and Moreover services
$sitemap->ping("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

//echo $map;
?>