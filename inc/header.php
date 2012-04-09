<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $desc; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/site.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">TorFights</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li<?php if($page == "home") echo " class=\"active\"";?>><a href="/">Home</a></li>
              <li<?php if($page == "wtf") echo " class=\"active\"";?>><a href="/wtf/">WTF</a></li>
              <li<?php if($page == "brackets") echo " class=\"active\"";?>><a href="/brackets/">Brackets</a></li>
              <li<?php if($page == "rules") echo " class=\"active\"";?>><a href="/rules/">Rules</a></li>
              <li<?php if($page == "join") echo " class=\"active\"";?>><a href="/join/">Join</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
