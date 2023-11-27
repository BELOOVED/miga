<?php
function escape($val){
  global $db;
  return $db->real_escape_string(htmlspecialchars(trim($_POST[$val])));
}
function escape_get($val){
  global $db;
  return $db->real_escape_string(htmlspecialchars(trim($_GET[$val])));
}
function seo($s) {
	$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',' ',',','?');
	$eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','','-','','');
	$s = str_replace($tr,$eng,$s);
	$s = strtolower($s);
	$s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
	$s = preg_replace('/\s+/', '-', $s);
	$s = preg_replace('|-+|', '-', $s);
	$s = preg_replace('/&#8211;/', '', $s);
	$s = preg_replace('/&#038;/', '', $s);
	$s = preg_replace('/–/', "-", $s);
	$s = preg_replace('/--/', "-", $s);
	$s = preg_replace('/---/', "-", $s);
	$s = preg_replace('/----/', "-", $s);
	$s = preg_replace('/-----/', "-", $s);
	$s = preg_replace('/------/', "-", $s); 
	$s = preg_replace('/&#37;/', " ", $s);  
	//$s = preg_replace('/&/', '', $s);
  
	$s = str_replace('.', '', $s);
	$s = trim($s, '-');
	return $s;
}
?>
