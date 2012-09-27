<?php
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../../weareuprising.com/forums/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();

if($user->data['username_clean'] != "gandrith" && $user->data['username_clean'] != "nuxx" && $user->data['username_clean'] != "schnail" && $user->data['username_clean'] != "leafsap")
{
	die("You either need to log into the forums or access was denied.");
}

// establish database connection

$db = mysql_connect("mysql.weareuprising.com", "uprising_db", "uprising") or die(mysql_error());
mysql_select_db("ugod_three", $db) or die(mysql_error());

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<link type="text/css" href="style.css" rel="stylesheet" />
<title>Uprising Site Administration</title>

<SCRIPT LANGUAGE="JavaScript">

function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=400,height=600');");
}

</script>
<!-- TinyMCE -->
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->
</head>

<body>

<div class="uc-page uc-level-1">


<div id="uc-splash" class="uc-section splash">
  <div class="banner">

    <a href="/admin/"><img src="top.png" height="172" width="630" border=0></a>

  </div>
</div>


<?php

if($_GET['act'] != "news" && $_GET['act'] != "recruitment" && $_GET['act'] != "editnews" && $_GET['act'] != "editnewsproc")
{
?>

<div class="infobox">
	<div class="infobox_head"><h1>Welcome to the Uprising Main Site Admin.</h1></div>

	<div class="infobox_body">
	Hello <?= $user->data['username']; ?>!<br><br>
	Please select the category of the change you would like to make.
	</div>
</div> 


<div class="homebuttons">

	<a href="?act=news">Post News</a>
	
	<a href="?act=editnews">Edit/Delete Old News</a>

	<a href="?act=recruitment">Recruitment</a>
	
	<a href="?act=progress">Progress Tracker</a>

	<a href="http://weareuprising.com/dkp/admin/">DKP</a>
	
	<a href="http://weareuprising.com/forums/adm">Forums / Users</a>

	
	<div class="clear"></div>
</div>

<?php
}
else
{
	include($_GET['act'] . ".php");
}
?>

</div>

</div>
</body>
</html>