<!DOCTYPE html>
<html>
<head>
   <title>Comments</title>
<link rel="shortcut icon" href="../Resources/unikllogo.png" />
</head>
<body>
	
	 <div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='commentmainpage.html';">Comments Main</button>
    </div>
<div align="center">
   <form method="GET" action="" name="form">
   <p>Your Comments: <input type="text" name="comment"></p>
   <input type="submit" name="submit" value="Submit">
</form>
	</div>
<?php
if(isset($_GET["comment"]))

	echo("Your comment is : ".$_GET["comment"])?>
</body>
</html>
