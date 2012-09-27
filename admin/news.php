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
				
				$replace[] = "<a href=\"http://weareuprising.com/screenshots/screens/" .($user->data['username_clean']) . "/" . $stripped_percent . "\" title=\"" . $_POST['title'] . "\" rel=\"lightbox\"><img src=\"http://weareuprising.com/screenshots/screens/" . ($user->data['username_clean']) . "/" . $newthumbname . "\" border=2></a>";
				
				$newfilename = explode("/", $newthumbname);
				
				$tcount = count($newfilename);
				
				system("/usr/bin/convert -resize " . "640" . " ../../weareuprising.com/screenshots/screens/" . ($user->data['username_clean']) . "/" . $stripped_percent . " ../../weareuprising.com/screenshots/screens/" . ($user->data['username_clean']) . "/" . $newfilename[($tcount - 1)]);
				
			}
		}
		
		$_POST['elm1'] = (str_replace($search, $replace, $_POST['elm1']));
		
	
	}

	mysql_query("INSERT INTO `news` (`id` ,`title` ,`body` ,`author` ,`datestamp` ,`tags`)VALUES (NULL , '".mysql_real_escape_string($_POST['title']) ."', '".mysql_real_escape_string($_POST['elm1']) ."', '".$user->data['username_clean']."', '".time()."', '');") or die (mysql_error());
	$newsposted = true;
}

?>

<div class="infobox">
	<div class="infobox_head"><h1>Post News.</h1></div>

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
	News Posted!
	</div>
</div> 
<?php
}
?><br>
<form method="POST" action="?act=news">
<center>
<b>Subject</b>: <input type="text" name="title" length="254" size=80><br><br>
<textarea id="elm1" name="elm1" rows="25" cols="300" style="width: 80%"></textarea>
<br>
<input type="submit" value="POST">
</form>
</center>
<br><br>