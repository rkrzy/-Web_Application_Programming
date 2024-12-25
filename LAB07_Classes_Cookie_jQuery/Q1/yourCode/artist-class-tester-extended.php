
<!-- 
	DO NOT MODIFY THIS CODE !
	This code will include artist-extended.php, not artist.php
-->

<html>
<head></head>
<body>
<h2>Tester for Artist, PaintingArtist, SculptureArtist class</h2>
<?php
	// first must include the class definition
	include 'artist-extended.php';
	// ------------------------------------------------------------
	echo '<hr><h3>Artists</h3><hr>';
	// now create one instance of the Artist class
	$picasso = new Artist("Pablo","Picasso","Malaga","Oct 25,1881",
						  "Apr 8,1973");
	// test the output method for the first artist
	echo $picasso->outputAsTable();
	// ------------------------------------------------------------
	// create another instance and test it
	$dali = new Artist("Salvador","Dali","Figures","May 11,1904",
					   "January 23,1989");
	// test the output method for the second artist
	echo $dali->outputAsTable();
	// ------------------------------------------------------------
	echo '<hr><h3>Painting Artist</h3><hr>';
	// now create one instance of the Artist class
	$paintingWorkTitle = "my_painting_1";
	$picasso_painter = new PaintingArtist("Pablo","Picasso","Malaga","Oct 25,1881",
										  "Apr 8,1973", $paintingWorkTitle);
	// test the output method for the first artist
	echo $picasso_painter->outputAsTable();
	// ------------------------------------------------------------
	echo '<hr><h3>Sculpture Artist</h3><hr>';
	$sculptureWorkTitle = "my_sculpture_1";
	$dali_sculptureartist = new SculptureArtist("Salvador","Dali","Figures","May 11,1904",
												"January 23,1989", $sculptureWorkTitle);
	// test the output method for the second artist
	echo $dali_sculptureartist->outputAsTable();
	// ------------------------------------------------------------
	// finally test the static method: notice its syntax
	echo '<hr>' . 'Number of Instantiated artists: ' . Artist::getArtistCount();
?>
</body>
</html>