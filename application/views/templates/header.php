<?php
    function isSelected($elem, $nav)
    {
        if($nav == $elem)
            return " class='passiveselected'";
    }
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title><?=$title ?></title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo(base_url()); ?>assets/js/jquery.cycle.all.js"></script>

<link href="<?php echo(base_url()); ?>assets/css/core.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="outer-container">
    <div class="inner-container">

	<div class="centercolumn">
	    <div class="navigation" id="frontnav">
		<ul class="tabs">
		    <li><a href="<?php echo(base_url()); ?>"><img src="<?php echo(base_url()); ?>assets/img/homebutton.png"></a></li>
		    <li<?=isSelected('forums', $nav) ?>><a href="<?php echo(base_url()); ?>forums">Forums</a></li>
		    <li<?=isSelected('philosophy', $nav) ?>><a href="<?php echo(base_url()); ?>philosophy">Philosophy</a></li>
		    <li<?=isSelected('recruitment', $nav) ?>><a href="<?php echo(base_url()); ?>recruitment">Recruitment</a></li>
		    <li<?=isSelected('roster', $nav) ?>><a href="<?php echo(base_url()); ?>roster">Roster</a></li>
		    <li<?=isSelected('loot', $nav) ?>><a href="<?php echo(base_url()); ?>loot">Loot Tracker</a></li>
		    <li<?=isSelected('utilities', $nav) ?>><a href="<?php echo(base_url()); ?>utilities">Member Utilities</a></li>
		</ul>
	    </div>
	    
	    <div class="spacer" id="frontbodynavspacer">
	    </div>