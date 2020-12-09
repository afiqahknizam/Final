<!DOCTYPE html>
<html>
<head>
   <title>Suggestions</title>
<link rel="shortcut icon" href="../Resources/unikllogo.png" />
</head>
<body>
	
	 <div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='commentmainpage.html';">Comments Main</button>
    </div>
<div align="center">
   <form method="GET" action="" name="form">
   <p>Your Suggestion: <input type="text" name="Suggestion"></p>
   <input type="submit" name="submit" value="Submit">
</form>
	</div>
<?php
if (isset($_GET["Suggestion"])) {
 	$sug = str_replace("<script>", "",$_GET["Suggestion"]);
	echo "Your Suggestion is : "."$sug";
}
?>


</body>
</html>
