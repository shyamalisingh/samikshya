<?php
function getPageURL(){
	$page ="home";
	if($_GET){
		$page = $_GET["p"];
		$pageURL = $page.".php";
	}
	$pageURL = $page.".php";
	return $pageURL;
}

function getButtonClass($currentPage){
	if($_GET && $_GET["p"] && $currentPage==$_GET["p"]){
		return "highlight";
	}else{
		return "default";
	}
}
?>
