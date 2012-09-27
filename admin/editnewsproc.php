<?php

if(isset($_POST['elm1']))
{
	$amount = preg_match_all("/%%[\x21-\x7E]*%%/", $_POST['elm1'], $result);
	
	if($amount >= 1)
	{
		foreach($result as $subvalue)
		{
			foreach($subvalue as $value)
			{
				$search[] = $value;
				
				$stripped_percent = substr($value, 2, -2);
				$split_values = explode(".", $stripped_percent);
				$svcount = count($split_values);
				$newthumbname = "";
				
				foreach($split_values as $key => $splitvalue)
				{
					if($key == ($svcount - 1))
						$newthumbname .= "_thumb" . "." .  $splitvalue;
					else if($key == 0)
						$newthumbname = $splitvalue ;
					else
						$newthumbname .= "." . $splitvalue ;
				}
				
				$replace[] = "<a href=\"http://weareuprising.com/screenshots/screens/" . strtolower($user->data['username']) . "/" . $stripped_percent . "\" title=\"" . $_POST['title'] . "\" rel=\"lightbox\"><img src=\"http://weareuprising.com/screenshots/screens/" . strtolower($user->data['username']) . "/" . $newthumbname . "\" border=2></a>";
				
				$newfilename = explode("/", $newthumbname);
				
				$tcount = count($newfilename);
				
				system("/usr/bin/convert -resize " . "640" . " ../../weareuprising.com/screenshots/screens/" . strtolower($user->data['username']) . "/" . $stripped_percent . " ../../weareuprising.com/screenshots/screens/" . strtolower($user->data['username']) . "/" . $newfilename[($tcount - 1)]);
				
			}
		}
		
		$_POST['elm1'] = (str_replace($search, $replace, $_POST['elm1']));
		
	
	}

	mysql_query("UPDATE `news` SET `title` =  '".mysql_real_escape_string($_POST['title']) ."',`body` =  '".mysql_real_escape_string($_POST['elm1']) ."' WHERE `id` = '". mysql_real_escape_string($_GET['id']) ."';") or die (mysql_error());
	$newsposted = true;
}

$newsdat = mysql_query("SELECT * FROM `news` WHERE `id` = '" . mysql_real_escape_string($_GET['id']) . "';") or die(mysql_error());
$newsrow = mysql_fetch_assoc($newsdat);

?>

<div class="infobox">
	<div class="infobox_head"><h1>Edit News.</h1></div>

	<div class="infobox_body">
	Use the field below to create a news post. Press POST when finished or press the top Uprising logo to go back.<br><br>
	To post a screenshot that will automatically be resized, type the filename of the full sized screenshot stored in your <a href="http://weareuprising.com/screenshots">screenshots folder</a> between two sets of double percent signs.<br><br>
	Example: %%myscreenshot.jpg%%
	</div>
</div> 

<?php
if($newsposted)
{
?>
<div class="infobox">
	<div class="successbox_head"><h1>Success</h1></div>

	<div class="successbox_body">
	News Updated!
	</div>
</div> 
<?php
}
?><br>
<form method="POST" action="?act=editnewsproc&id=<?= $_GET['id'] ?>">
<center>
<b>Subject</b>: <input type="text" name="title" length="254" size=80 value="<?= $newsrow['title'] ?>"><br><br>
<textarea id="elm1" name="elm1" rows="25" cols="300" style="width: 80%"><?= $newsrow['body'] ?></textarea>
<br>
<input type="submit" value="POST">
</form>
</center>
<br><br>