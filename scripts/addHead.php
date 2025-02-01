<?php
function addHead($page, $faviconLink, $description, array $keywords, array $stylesheets) {
	$title= "eFBi-graphics";
	$keywordsOutput = "";

	foreach ($keywords as $keyword):
		$keywordsOutput = $keywordsOutput . $keyword . ", ";
	endforeach;
	$keywordsOutput = substr($keywordsOutput, 0, -1);
	$keywordsOutput = substr($keywordsOutput, 0, -1);

	echo <<<HTML
		<!DOCTYPE html>
		<html lang="fr">
		<head>
		<meta charset="UTF-8"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="{$description}"> 
		<meta name="keywords" content="{$keywordsOutput}"> 
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
