<?php
		$connect = new mysqli("localhost","root","","musician");
		
		$sqlquery1 = "Select m.name,m.genre,monthname(p.monthyear) as month_name from musician m, performance p where m.musianid = p.musicianid order by month(p.monthyear)";
		$output = $connect -> query($sqlquery1);
		
		$sqlquery2 = "Select distinct monthname(p.monthyear) as month_distinct_name from musician m,performance p where m.musianid = p.musicianid order by month(p.monthyear)";
		$output1 = $connect -> query($sqlquery2);
		
		$montharray = array();
		while ($monthvalue = $output1->fetch_assoc())
		{
			$montharray[] = $monthvalue['month_distinct_name'];
		}
		
		$musiciandetails = array();
		while ($musdet = $output -> fetch_assoc())
		{
			$musicianname[] = $musdet['name'];
			$musiciangenre[] = $musdet['genre'];
			$musicianmonth[] = $musdet['month_name'];
		}
?>