<?php
function addHead($page, $faviconLink, array $stylesheets) {
	$title= "eFBi-graphics";

	echo <<<HTML
		<!DOCTYPE html>
		<html lang="fr">
		<head>
		<meta charset="UTF-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	HTML;	
	
	if ($page !== "") {
		$title = $title . " | " . $page;
	}

	echo <<<HTML
		<title>{$title}</title>
		<link rel="stylesheet" href="https://use.typekit.net/nql6qqc.css">

	HTML;

	foreach ($stylesheets as $stylesheet):
		echo <<<HTML
			<link rel="stylesheet" href="{$stylesheet}">
		HTML;
	endforeach;

	echo <<<HTML
		<link rel="icon" type="image/svg+xml" href="{$faviconLink}">
	HTML;

	echo <<<HTML
		</head>
		<body>
	HTML;
}
?>
