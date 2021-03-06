<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<?php
    $testVar = $_SERVER['PHP_SELF'];
    $serverName = $_SERVER['SERVER_NAME'];
    $last_modified = filemtime(basename($testVar));
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Primer 3</title>
    <link type="text/css" rel="stylesheet" href="primer3.css"/>
</head>

<body>
<div id="wrap">
    <div id="header"><h1>Primer3</h1></div>
    <div id="nav">
        <div id = "navbar">
        <!--<p>primer design for DNA sequences</p> -->
		<ul>
			<li id="nav-home"><a href="/">Home</a></li>
			<li id="nav-webif"><a href="webif.php">Web Interface</a></li>
			<li id="nav-doc"><a href="primer3_manual.htm">Manual</a></li>
                        <li id="nav-tickets"><a href="https://sourceforge.net/p/primer3/feature-requests/?source=navbar">Contact</a></li>
                        <li id="nav-dload"><a href="releases.php">Download</a></li>
			<li id="nav-history"><a href="history.php">History</a></li>
		</ul>
		<span id="navclear"></span>
        </div> <!--end navbar div -->
    </div>  <!--end nav div -->
