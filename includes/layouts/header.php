<?php if (!isset($layout_context)) {
	$layout_context = "public";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Widget Corp <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
	<link rel="stylesheet" href="stylesheets/public.css" media="all" type="text/css" />
</head>
<body>
	<div id="header">
		<h1>Widget Corp <?php if ($layout_context == "admin") { echo "Admin"; } ?></h1>
	</div>