<!DOCTYPE html>

<html>
  <head>
      <style type="text/css">
          table th{
              background-color: #a9a9a9;
          }
          table tr:nth-child(odd) td{
              background-color: #a9a9a9;
          }
      </style>
    <title>Celsius to Fahrenheit Converter</title>
  </head>
  <body>
    <h3><a href ="FahrenheitConversion.php">Take me to the Fahrenheit Converter!</a></h3>
    <h3>Step 2</h3>
    <table border = "1" cellpadding = "5">
      <tr><th>Celsius</th><th>Fahrenheit</th></tr>
      <?php
      for ($i=0; $i<=100; $i++) {
        $celsius = round(($i * (9/5)) + (32));
        echo "<tr><td>$i</td><td>$celsius</td></tr>";
      }
      ?>
    </table>
  </body>
</html>