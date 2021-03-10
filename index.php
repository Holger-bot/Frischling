<!DOCTYPE html>
<html>
<head>
 <style type="text/css">
    $vorname 
	h1 {
      margin-left:875px; margin-top:200px;
    }
	h2 {
      margin-left:875px; margin-top:220px;
    }
	</style>
   </head>
   <body>
<?php
$vorname = "";
if (isset($_GET['vorname']) && !empty($_GET['vorname'])) {
$vorname = $_GET['vorname']; 
echo '<h1>Hallo ' . htmlspecialchars($_GET["vorname"]) . '!</h1>';
} 
			echo "<h2>Hallo Welt</h2>";
?>
</body>
</html>