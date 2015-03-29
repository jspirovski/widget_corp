<?php require_once("C:\\wamp\\www\\widget_corp\\includes\\session.php"); ?>
<?php require_once("C:\\wamp\\www\\widget_corp\\includes\\db_connection.php"); ?>
<?php require_once("C:\\wamp\\www\\widget_corp\\includes\\functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("C:\\wamp\\www\\widget_corp\\includes\\layouts\\header.php"); ?>
<?php find_selected_page(true); ?>

<div id="main">
  <div id="navigation">
	<?php echo public_navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
		<?php if ($current_page) { ?>
			<h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
			<?php echo nl2br(htmlentities($current_page["content"])); ?>
			
		<?php } else { ?>
			<p>Welcome!</p><br>
		<?php }?>
  </div>
</div>

<?php include("C:\\wamp\\www\\widget_corp\\includes\\layouts\\footer.php"); ?>