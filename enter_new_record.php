<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Breweries - enter </title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">

<h1>Enter a New Brewery</h1>

<div id="brewery">

<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="breweryform" method="post" autocomplete="off">

  <label for="brewery">Brewery Name</label>
	<input type="text" name="brewery" id="brewery" maxlength="40" required>

  <label for="city">City and State (Gainesville, FL) </label>
	<input type="text" name="city" id="city" maxlength="40" required>

    <label for="primarycolor">Primary Color</label>
    <select name="primarycolor" id="primarycolor" required>
        <option value=""></option>
        <option value="Red">Red</option>
        <option value="Orange">Orange</option>
        <option value="Yellow">Yellow</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
        <option value="Navy blue">Navy Blue</option>
        <option value="Purple">Purple</option>
        <option value="Pink">Pink</option>
        <option value="Black">Black</option>
        <option value="Brown">Brown</option>
        <option value="Brown">Gold</option>
        <option value="Beige">Beige</option>
    </select>

    <label for="secondarycolor">Secondary Color</label>
    <select name="secondarycolor" id="secondarycolor" required>
        <option value=""></option>
        <option value="Red">Red</option>
        <option value="Orange">Orange</option>
        <option value="Yellow">Yellow</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
        <option value="Navy blue">Navy Blue</option>
        <option value="Purple">Purple</option>
        <option value="Pink">Pink</option>
        <option value="Black">Black</option>
        <option value="Brown">Brown</option>
        <option value="Brown">Gold</option>
        <option value="Beige">Beige</option>
    </select>

	<input type="submit" id="submit" class="button" value="Submit">
</form>
<!-- close the form -->
<p class="middle"><a href="breweries_update.php">View all the breweries</a></p>

</div> <!-- close #brewery -->

<div id="response">
    <p class="announce">Thanks for submitting the form!</p>
    <p class="middle"><a href="breweries_update.php">View all the breweries</a></p>
    <p class="middle"><a href="enter_new_record.php">Return to the form</a></p>
</div>

</div> <!-- close container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
<script src="js/enter.js"></script>
</body>
</html>
