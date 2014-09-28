<!DOCTYPE html>
<html>
    <head>
        <title>Height Converter</title>
    </head>
    <body>
        <h3>Your Results:</h3>
            <?php
            $fname = 0;
            $lname = 0;
            $feet = 0;
            $inches = 0;
            $convertedHeight = 0;

if (isset($_POST['fname']) AND isset($_POST['lname']) AND isset($_POST['feet']) AND isset($_POST['inches']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $feet = $_POST['feet'];
    $inches = $_POST['inches'];

    echo "<p>Your first name is: " . $fname . "</p>";
    echo "<p>Your last name is: " . $lname . "</p>";
    echo "<p>Your height in meters is: " . $convertedHeight . "</p>";
}

else
{
    echo "<p>You must fill out all four fields.</p>";
    echo     $convertedHeight = ((($feet * 12) + ($inches)) * 0.0254);
}
?>
<p><a href="blah.html">Go back.</a></p>
</body>
</html>
