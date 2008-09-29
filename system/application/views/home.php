<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Conforming XHTML 1.0 Strict Template</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />


</head>

<body>
	<div id="container">
		<div id="header">
			<div id="title">
				<h1><?=$title?></h1>
				<span class="description">To take a trivial example, wich of us ever undertajes laborious physical exercise</span>
			</div>
			<ul id="navbar">
				<li>home</li>
				<li>my commercials
					<ul>
						<?php foreach($commercials->result() as $commercial): ?>
						<li><a href="#"><?=$commercial->cname?></a></li>
						<?php endforeach ?>
					</ul>
				</li>
				<li>my films
					<ul>
						<?php foreach($films->result() as $film): ?>
						<li><a href="#"><?=$film->cname?></a></li>
						<?php endforeach ?>
					</ul>
				</li>
				<li>bonus</li>
				<li>my bio</li>
				<li>read my blog</li>
				<li>contact me</li>
			</ul>
		</div>
		
		<div ="content-wrapper">
			<div id="content">
				<h2>Content Title</h2>
					<div class="loader"></div>
			</div>
		</div>
		<div id="footer">
			<p>Bye, bye</p>			
		</div>
	</div>
</body>
</html>
