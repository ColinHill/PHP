<!DOCTYPE html>
    <html>
     <head>
        <title>Selected Information</title>
     </head>
     <body>
        <?php
        echo "<h1>This page was rendered in  PHP version " . phpversion();
        echo "<h1>Using Zend engine " . zend_version() . "<br>";
        echo "default_mimetype = " . ini_get('default_mimetype');
        ?>
     </body>
    </html>