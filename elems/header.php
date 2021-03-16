<?php
	function creatLink($href, $text)
	{
			if ($_SERVER['REQUEST_URI'] == $href) {
			$class = ' class = "active"';
			} else {
			$class = '';
		}
		
		echo "<a href=\"$href\"$class>$text</a>";
	}
	
	creatLink('/', 'main');
	creatLink('/?page=about', 'about');
	creatLink('/?page=contacts', 'contacts');

?>

