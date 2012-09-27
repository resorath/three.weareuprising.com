<?php

if(isset($_POST['elm1']))
{
	mysql_query("TRUNCATE TABLE `uprising_fp`.`recruitment`;") or die(mysql_error());
	mysql_query("INSERT INTO `uprising_fp`.`recruitment` (`post` ,`datestamp` )VALUES ('".mysql_real_escape_string($_POST['elm1']) ."','".time()."');") or die (mysql_error());
	$recruitment_updated = true;
}

$datas = mysql_query("SELECT * FROM `uprising_fp`.`recruitment`") or die(mysql_error());
$body = mysql_fetch_assoc($datas);

?>

<div class="infobox">
	<div class="infobox_head"><h1>Update Recruitment.</h1></div>

	<div class="infobox_body">
	Use the field below to update recruitment. Press UPDATE when finished or press the top Uprising logo to go back.<br><br>
	To post a screenshot that will automatically be resized, type the filename of the full sized screenshot stored in your <a href="http://weareuprising.com/screenshots">screenshots folder</a> between two sets of double percent signs.<br><br>
	Example: %%myscreenshot.jpg%%
	</div>
</div> 

<?php
if($recruitment_updated)
{
?>
<div class="infobox">
	<div class="successbox_head"><h1>Success</h1></div>

	<div class="successbox_body">
	Recruitment Updated
	</div>
</div> 
<?php
}
?><br>
<form method="POST" action="?act=recruitment">
<center>
<textarea id="elm1" name="elm1" rows="25" cols="300" style="width: 80%"><?=$body['post'] ?></textarea>
<br>
<input type="submit" value="UPDATE">
</form>
</center>
<br><br>