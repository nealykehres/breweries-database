<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Sock Market - Edit </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
<div id="container">

<h1>Sock Market: Confirm Record to Edit</h1>
<!-- this page opens if you selected a record
     from inventory_update.php
     and submitted the form - it lets you choose to delete or update
-->

<div id="inner_content">

<?php
// check if _id_ was sent here via POST ...
if ( isset($_POST['id']) ) {
?>

<!-- if true, then write into the HTML - table headings -->
<table>
  <tr>
    <th>Brewery</th>
    <th>City and State</th>
    <th>Primary Color</th>
    <th>Seconday Color</th>
    <th>Updated</th>
  </tr>
  <tr>

<?php
  // erase any HTML tags and then escape all quotes
  function sanitizeMySQL($conn, $var) {
      $var = strip_tags($var);
      $var = mysqli_real_escape_string($conn, $var);
      return $var;
  }

  // this calls the function above to make sure id is clean
  $id = sanitizeMySQL($conn, $_POST['id']);

  // get the row indicated by the id
  $query = "SELECT * FROM breweries WHERE id = ?";

  // another if-statement inside the first one ensures that
  // code runs only if the statement was prepared
  if ($stmt = mysqli_prepare($conn, $query)) {
    // bind the id that came from inventory_update.php
    mysqli_stmt_bind_param($stmt, 'i', $id);
    // execute the prepared statement
    mysqli_stmt_execute($stmt);
    // next line handles the row that was selected - all fields
    // it is "_result" because it is the result of the query
    mysqli_stmt_bind_result($stmt, $id, $brewery, $city, $primarycolor, $secondarycolor, $updated);

    // handle the data we fetched with the SELECT statement ...
    while (mysqli_stmt_fetch($stmt)) {

        // another way to write variables into the HTML!
        // shorter than echo in this case
        // %s for string, %d for integer,
        // %f for decimal (floating point) --
        // %.02f limits float to 2 decimal places
        printf ("<td>%s</td>", stripslashes($brewery));
        printf ("<td>%s</td>", $city);
        printf ("<td>%s</td>", $primarycolor);
        printf ("<td>%d</td>", $secondarycolor);
        printf ("<td>%s</td>", $updated);

    } // end while-loop
?>

  <!-- write into the HTML - end of row, table, then the form -->

  </tr>
  </table>

<?php
  mysqli_stmt_close($stmt);
  } // end of if-statement:  $stmt =
  mysqli_close($conn);

} else {
    // if _id_ was NOT sent here via POST, write a message with HTML
    // break out of PHP to write HTML next ...
?>

    <p class='announce'>No record was selected!</p>

<?php
  // return to PHP just to close the if-statement
  }  // end of if-else isset($_POST['id'])
?>
</div> <!-- close inner_content -->

<!-- below will print no matter what -->

<p class="middle"><a href="inventory_update.php">View full inventory</a></p>

<p class="middle"><a href="enter_new_record.php">Add a new sock record</a></p>


</div> <!-- close container -->
</body>
</html>
