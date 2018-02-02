<?php include 'database.php'; ?>

<?php
// This is the "prepared statement" version of this file.

if (isset($_POST['brewery']) && isset($_POST['city'])) {

    // sanitizeMySQL() is a custom function, written below
    $brewery = sanitizeMySQL($conn, $_POST['brewery']);
    $city = sanitizeMySQL($conn, $_POST['city']);
    $primarycolor = sanitizeMySQL($conn, $_POST['primarycolor']);
    $secondarycolor = sanitizeMySQL($conn, $_POST['secondarycolor']);

    // the prepared statement - note: 6 question marks represent
    // 6 variables we will send to database separately
    $query = "INSERT INTO breweries (brewery, city, primarycolor, secondarycolor)
    VALUES (?, ?, ?, ?)";

    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {

        // bind the values to replace the 6 question marks
        // note that 6 letters in 'sssids' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'ssss',
        $brewery,
        $city,
        $primarycolor,
        $secondarycolor
        );

        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement
} else {
    echo "Failed to enter!";
} // end of isset if-statement

// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
