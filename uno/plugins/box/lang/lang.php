<?php
	$langPlug = array(
		"fr" => "fr_FR.utf8",
		"en" => "en_US"
		);
	//	
	if ($langPlug[$lang])
		{
		putenv('LC_ALL='.$langPlug[$lang]);
		setlocale(LC_ALL, $langPlug[$lang]);
		bindtextdomain("box", dirname (__FILE__));
		textdomain("box");
		}
?>