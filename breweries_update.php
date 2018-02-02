<?php
	include 'database.php';
	$query = "SELECT * FROM breweries ORDER BY brewery";
	$breweries = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Breweries' Branding </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Breweries' Branding Colors</h1>


<!-- this form is handled by the PHP file named in the action attribute -->
<form method="post" action="breweries_edit.php" autocomplete="off">
	<div id="tablediv">
<table>
	<!-- table column headings -->
	<tr>
	  <th>Brewery</th>
	  <th>City and State</th>
	  <th>Primary Color</th>
	  <th>Secondary Color</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
	   Each time it loops, it writes ONE ROW -->
<?php while ($row = mysqli_fetch_assoc($breweries)) :  ?>

<tr>
	<!-- notice how, above, the database record id becomes
		 the id and value of the radio button -->
  <td><?php echo stripslashes($row['brewery']); ?></td>
  <td><?php echo $row['city']; ?></td>
  <td><?php echo $row['primarycolor']; ?></td>
	<td><?php echo $row['secondarycolor']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>
</div>

<p><a href="enter_new_record.php">Add another brewery</a></p>
</div> <!-- close container -->
</body>
</html>
