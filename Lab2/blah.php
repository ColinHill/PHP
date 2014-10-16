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
    $convertedHeight = ((($feet * 12) + ($inches)) * 0.0254);

    echo "<p>Your first name is: " . $fname . "</p>";
    echo "<p>Your last name is: " . $lname . "</p>";
    echo "<p>Your height in meters is: " . $convertedHeight . "</p>";
    echo "<hr>";
    echo "<p>Tmp: ";
    print_r($_FILES['UserFile']['tmp_name']);
    echo "<p>Orig: ";
    print_r($_FILES['UserFile']['name']);
    echo "<p>Size: ";
    print_r($_FILES['UserFile']['size']);
    echo "<p>Error: ";
    print_r($_FILES['UserFile']['error']);

    $uploaddir = 'uploads/';
    $uploadfile = $uploaddir . basename($_FILES['UserFile']['name']);

      if (move_uploaded_file($_FILES['UserFile']['tmp_name'], $uploadfile)) {
             echo "<p>File is valid, and was successfully uploaded.</p>";
    } else {
             echo "<p>The file did not upload.</p>";
          }
    }

else
{
    echo "<p>You must fill out all four fields.</p>";
}
?>
<p><a href="blah.html">Go back.</a></p>
</body>
</html>
