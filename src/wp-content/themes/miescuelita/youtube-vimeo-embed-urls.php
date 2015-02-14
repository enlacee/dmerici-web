<?php
function convert_videos($string) {
	$rules = array(
		'#https://(www\.)?youtube\.com/watch\?v=([^ &\n]+)(&.*?(\n|\s))?#i' => '//www.youtube.com/embed/$2',
		'#http://(www\.)?vimeo\.com/([^ ?\n/]+)((\?|/).*?(\n|\s))?#i' => '//player.vimeo.com/video/$2?title=0&amp;byline=0&amp;portrait=0'
	);
 
	foreach ($rules as $link => $player)
		$string = preg_replace($link, $player, $string);
 
	return $string;
}

function convert_videos_image($string) {
	$rules = array(
		'#https://(www\.)?youtube\.com/watch\?v=([^ &\n]+)(&.*?(\n|\s))?#i' => 'http://img.youtube.com/vi/$2/default.jpg',
		'#http://(www\.)?vimeo\.com/([^ ?\n/]+)((\?|/).*?(\n|\s))?#i' => 'http://vimeo.com/api/v2/video/$2.php'
	);
 
	foreach ($rules as $link => $player)
		$string = preg_replace($link, $player, $string);
		
	if (strpos($string, 'vimeo')>0){		
	$hash = unserialize(file_get_contents($string));
	$string = $hash[0]['thumbnail_medium'];
	}
 
	return $string;
}
?>