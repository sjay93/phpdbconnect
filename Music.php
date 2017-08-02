<html>
<head>
	<title>Music</title>
	<link rel="stylesheet" type="text/css" href = "javajam.css">
</head>

<body id="wrapper">
<div id="bgcolr">
<table class="leftcolumn">
<tbody>
<tr>
<td><img alt="JavaJam Logo" src="javajamlogo.jpg"></td>
</tr>
<tr>
<td><nav role="navigation">	
<a href="Index.html"><strong>Home</strong></a>
<a href="Menu.html"><strong>Menu</strong></a> 
<a href="Music.php"><strong>Music</strong></a>
<a href="Jobs.html"><strong>Jobs</strong></a> 
</nav></td>
</tr>
</tbody>
</table>
<div id="mainpage">
<h1>JavaJam Coffee House</h1>
<img id="mainpage-image" src="gregthumb.jpg"/>

<header>
	<h3 id="musictext">Music at JavaJam</h3>
</header>
<div>
	<p>
	The first Friday night each month at JavaJam is a special night.
	Join us from 8 pm to 11 pm for some music you won't want to miss!
	</p>
	
	<?php
		include "musician.php";
		$count_month = 0;
		while($count_month < count($montharray))
		{
		echo "<header><h3 class='month'>".$montharray[$count_month]."</h3></header>";
		echo "<ul>";
		for($i=0;$i<count($musicianmonth);$i++)
			{
			if($montharray[$count_month] == $musicianmonth[$i])
				{
				echo "<li>".$musicianname[$i]."</li>";
				echo "<ul>";
				echo "<li>".$musiciangenre[$i]."</li>";
				echo "</ul>";
				}
			}
		echo "</ul>";
		$count_month++;
		}
	?>
	
	<!--<header><h3 class="month">JANUARY</h3></header>

	<table class="musicdetails">
	<tr>
		<td><img src="melaniethumb.jpg"></td>
		<td>Melanie Morris entertains with her melodic folk style.</td>
	</tr>
	</table>
	<header><h3 class="month">FEBRUARY</h3></header>
	
	<table class="musicdetails">
	<tr>
		<td><img src="gregthumb.jpg"></td>
		<td>Tahoe Greg is back from his tour. New songs. New stories.</td>
	</tr>
	</table>-->
	<br>	
</div>
</div>
<footer>
	Copyright &copy 2016 JavaJam Coffee House<br>
	<a href="mailto:jay@shah.com">jay@shah.com</a>
</footer>
</div>
</body>
</html>