<?php
$access_item["/"] = false;
$access_item["/test1"] = true;
$access_item["/test2"] = true;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

$action = $page->actions();

$page->bodyClass("sarah");
$page->pageTitle("Sarah's template");


if(count($action) == 1 && $action[0] == "test1") {
	$page->page(array(
		"templates" => "pages/sarahs_template_test1.php"
	));
	exit();
}

else if(count($action) == 1 && $action[0] == "test2") {
	$page->page(array(
		"templates" => "pages/sarahs_template_test2.php"
	));
	exit();
}

// Sets default, where no parameter=index page
$page->page(array(
	"templates" => "pages/sarahs_template.php"
));
exit();

?>
