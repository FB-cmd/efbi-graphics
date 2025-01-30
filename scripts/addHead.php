<?php
function addHead($page, array $stylesheets, array $scripts) {
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

	foreach ($scripts as $script):
		echo <<<HTML
			<script defer scr="{$script}"></script>
		HTML;
	endforeach;

	echo <<<HTML
		</head>
		<body>
	HTML;
}
?>
