<?php

if(isset($_GET['delid']) && $_GET['delid'] != "")
{
	mysql_query("DELETE FROM `news` WHERE `news`.`id` = ".mysql_real_escape_string($_GET['delid'])." LIMIT 1;") or die(mysql_error());
}

$newsdat = mysql_query("SELECT * FROM `news` ORDER BY `datestamp` DESC;") or die(mysql_error());

?>

<div class="infobox">
	<div class="infobox_head"><h1>Edit News.</h1></div>

	<div class="infobox_body">
	Select the news post you wish to edit, or press the <img src="../images/skull.png"> to delete the news post.
	</div>
</div> 

<br>
<div class="genericdent">
<table border=0 cellpadding=2 cellspacing=1>
<?php
while($row = mysql_fetch_assoc($newsdat))
{
	echo("<tr><td><a href=\"?act=editnews&delid=" . $row['id'] . "\" onClick=\"return confirm('Are you sure you want to delete this post?\\nThis action can not be undone!');\"><img src=\"../images/skull.png\"></a></td><td><a href=\"?act=editnewsproc&id=" . $row['id'] . "\">" . $row['title'] . "</a></td></tr>\n");

}
?>
</table>
</div>
<br><br>